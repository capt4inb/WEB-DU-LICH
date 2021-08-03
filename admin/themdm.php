<?php 
include 'header.php';
include_once 'ketnoi.php';
if(isset($_POST['them_dm']))
{
  $tendm = $_POST['ten_dm'];
  if(isset($tendm))
  {
    $sql = "INSERT INTO danhmuc_sanpham(ten_dm) VALUES('$tendm')";
    $query = mysqli_query($conn,$sql);
    header("location:danhmucsp.php");
  }
}
?>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Thêm mới <small>danh mục</small></h1>
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
                <input name="ten_dm" class="form-control">
              </div>          

              <button name="them_dm" type="submit" class="btn btn-default">Thêm</button>
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