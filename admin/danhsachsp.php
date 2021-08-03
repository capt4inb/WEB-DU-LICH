<script>
  function xoaSanPham()
  {
    var conf=confirm("Bạn có chắc chắn muốn xoá chuyến đi này không?");
    return conf;
  }
</script>
<?php 
include 'ketnoi.php';
$sql = "SELECT * FROM sanpham INNER JOIN danhmuc_sanpham ON sanpham.id_dm = danhmuc_sanpham.id_dm ORDER BY id_sp ASC";
$query = mysqli_query($conn,$sql)
?>
<?php include 'header.php'?>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Danh sách <small>chuyến đi</small></h1>
            <ol class="breadcrumb">
              <li><a href="xulydonhang.php">Dashboard</a></li>
            </ol>       
            <button type="submit" class="btn btn-default"><a href="themsp.php">Thêm mới chuyến đi</a></button>    
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="table-responsive">
              <table class="table table-hover tablesorter">
                <thead>
                  <tr>
                    <th>ID chuyến đi</th>
                    <th>Tên chuyến đi</th>
                    <th>Danh mục </th>
                    <th>Hình mô tả </th>
                    <th>Chi tiết chuyến đi </th>
                    <th>Sửa </th>
                    <th>Xoá </th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  while ($row = mysqli_fetch_array($query)) 
                  {
                  ?>
                    <tr>
                      <td><?php echo $row['id_sp']; ?></td>
                      <td><a href="suasp.php?id=<?php echo $row['id_sp'];?>"><?php echo $row['ten_sp']; ?></a></td>
                      <td><?php echo $row['ten_dm']; ?></td>
                      <td><img style="width: 80px;" src="anh/<?php echo $row['anh_sp']; ?>" alt=""></td>
                      <td><?php echo $row['chi_tiet_sp']; ?></td>
                      <td><a href="suasp.php?id=<?php echo $row['id_sp'];?>">Sửa</a></td>
                      <td><a onclick="return xoaSanPham()" href="xoasp.php?id=<?php echo $row['id_sp'];?>">Xoá</a></td>
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