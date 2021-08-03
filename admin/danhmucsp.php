<script>
  function xoaDanhMuc()
  {
    var conf=confirm("Bạn có chắc chắn muốn xoá danh mục này không?");
    return conf;
  }
</script>
<?php 
include 'ketnoi.php';
$sql = "SELECT * FROM danhmuc_sanpham ORDER BY id_dm ASC";
$query = mysqli_query($conn,$sql)
?>
<?php include 'header.php'?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Danh mục <small>sản phẩm</small></h1>
            <ol class="breadcrumb">
              <li><a href="index.php">Dashboard</a></li>          
            </ol>       
            <button type="submit" class="btn btn-default"><a href="themdm.php">Thêm mới danh mục</a></button>       
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-12">
            <div class="table-responsive">
              <table class="table table-hover tablesorter">
                <thead>
                  <tr>
                    <th>ID danh mục</th>
                    <th>Tên danh mục</th>
                    <th>Sửa </th>
                    <th>Xoá </th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                while ($row=mysqli_fetch_array($query)) 
                {
                ?>
                  <tr>
                    <td><?php echo $row['id_dm'];?></td>
                    <td><a href="suadm.php?id=<?php echo $row['id_dm'];?>"><?php echo $row['ten_dm'];?></a></td>
                    <td><a href="suadm.php?id=<?php echo $row['id_dm'];?>">Sửa</a></td>
                    <td><a onclick="return xoaDanhMuc()" href="xoadm.php?id=<?php echo $row['id_dm'];?>">Xoá</a></td>
                  </tr>  
                <?php
                }
                ?>                              
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
    <script src="js/tablesorter/jquery.tablesorter.js"></script>
    <script src="js/tablesorter/tables.js"></script>

  </body>
</html>