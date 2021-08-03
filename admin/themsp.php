<?php
include 'header.php';
include_once 'ketnoi.php';
$sqlDm = "SELECT * FROM danhmuc_sanpham";
$queryDm = mysqli_query($conn,$sqlDm);
if(isset($_POST['them_sp']))
{
  $ten_sp = $_POST['ten_sp'];
  $id_dm = $_POST['id_dm'];
  $chi_tiet_sp = $_POST['chi_tiet_sp'];
  $anh_sp = $_FILES['anh_sp']['name'];
  $tmp_name = $_FILES['anh_sp']['tmp_name'];
  move_uploaded_file($tmp_name,'anh/'.$anh_sp);
  $sql = "INSERT INTO sanpham(ten_sp,id_dm,anh_sp,chi_tiet_sp) VALUES('$ten_sp',$id_dm,'$anh_sp','$chi_tiet_sp')";
  $query = mysqli_query($conn,$sql);
  header("location: danhsachsp.php");
}
?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Thêm mới <small>chuyến đi</small></h1>
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
                <input name="ten_sp" class="form-control" required>
              </div>    

              <div class="form-group">
                <label>Danh mục</label>
                <select name="id_dm" class="form-control">
                  <option value="unselect"> Chọn danh mục </option>
                  <?php 
                    while ($rowDm=mysqli_fetch_array($queryDm)) 
                    {
                  ?>
                  <option value="<?php echo $rowDm['id_dm'] ?>"> <?php echo $rowDm['ten_dm'] ?> </option>
                  <?php 
                    }
                  ?>
                </select>
              </div>                           
              
              <div class="form-group">
                <label>Ảnh chuyến đi</label>
                <input name="anh_sp" type="file">
              </div>

              <div class="form-group">
                <label>Chi tiết chuyến đi</label>
                <textarea name="chi_tiet_sp" class="form-control" rows="5" required></textarea>
              </div>                                             

              <button name="them_sp" type="submit" class="btn btn-default">Thêm</button>
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