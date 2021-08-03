<?php 
include_once 'ketnoi.php';
$id_dm = $_GET['id'];
$sql = "SELECT * FROM danhmuc_sanpham WHERE id_dm='$id_dm'";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);
if(isset($_POST['sua_dm']))
{
  $ten_dm = $_POST['ten_dm'];
  if(isset($ten_dm))
  {
    $sql = "UPDATE danhmuc_sanpham SET ten_dm='$ten_dm' WHERE id_dm='$id_dm'";
    $query = mysqli_query($conn,$sql);
    header("location:danhmucsp.php");
  }
}
?>
<?php include 'header.php'?>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Sửa <small>danh mục</small></h1>
            <ol class="breadcrumb">
              <li><a href="danhmucsp.php"> Quay lại</a></li>
            </ol>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-8">

            <form role="form" method="post">

              <div class="form-group">
                <label>Tên danh mục</label>
                <input name="ten_dm" type="text" value="<?php echo $row['ten_dm'];?>" class="form-control">
              </div>          

              <button name="sua_dm" type="submit" class="btn btn-default">Sửa</button>
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