<?php
include 'header.php';
include_once 'ketnoi.php';
$id_sp= $_GET['id'];
$sqlDm = "SELECT * FROM danhmuc_sanpham";
$queryDm = mysqli_query($conn,$sqlDm);

$sql="SELECT * FROM sanpham WHERE id_sp='$id_sp'";
$query= mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);

if(isset($_POST['sua_sp']))
{
  $ten_sp = $_POST['ten_sp'];
  $id_dm = $_POST['id_dm'];
  $chi_tiet_sp = $_POST['chi_tiet_sp'];
    if($_FILES['anh_sp']['name']=='')
    {
        $anh_sp=$_POST['anh_sp'];
    }
    else {
        $anh_sp=$_FILES['anh_sp']['name'];
        $tmp_name=$_FILES['anh_sp']['tmp_name'];
    }

    move_uploaded_file($tmp_name,'anh/'.$anh_sp);
    $sql="UPDATE sanpham SET ten_sp='$ten_sp',id_dm='$id_dm',anh_sp='$anh_sp',chi_tiet_sp='$chi_tiet_sp' WHERE id_sp=$id_sp";
    $query = mysqli_query($conn,$sql);
    header("location: danhsachsp.php");
  
}

?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Sửa <small>sản phẩm</small></h1>
            <ol class="breadcrumb">
              <li><a href="danhsachsp.php"> Quay lại</a></li>
            </ol>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-8">

            <form role="form" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label>Tên chuyến đi</label>
                <input name="ten_sp" class="form-control" value="<?php if(isset($_POST['ten_sp'])){echo $_POST['ten_sp'];} else {echo $row['ten_sp'];}?>" required>
              </div>    

              <div class="form-group">
                <label>Danh mục</label>
                <select name="id_dm" class="form-control">
                  <option value="unselect"> Chọn danh mục </option>

                  <?php 
                    while ($rowDm=mysqli_fetch_array($queryDm)) 
                    {
                  ?>

                  <option 
                    <?php
                    if($row['id_dm']==$rowDm['id_dm'])
                    {
                        echo 'selected="selected"';
                    }
                    ?>
                    value="<?php echo $rowDm['id_dm'] ?>"> <?php echo $rowDm['ten_dm'] ?> 
                  </option>

                  <?php 
                    }
                  ?>

                </select>
              </div>             
              
              <div class="form-group">
                <label>Hình mô tả</label>
                <input name="anh_sp" type="file" ><input type="hidden" name="anh_sp" value="<?php echo $row['anh_sp'];?>">
              </div>

              <div class="form-group">
                <label>Chi tiết chuyến đi</label>
                <textarea name="chi_tiet_sp" class="form-control" rows="5"  required><?php if(isset($_POST['chi_tiet_sp'])){echo $_POST['chi_tiet_sp'];} else {echo $row['chi_tiet_sp'];} ?></textarea>
              </div>                                             

              <button name="sua_sp" type="submit" class="btn btn-default">Sửa</button>
              <button type="reset" class="btn btn-default">Làm mới</button>  

            </form>

          </div>
          
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>