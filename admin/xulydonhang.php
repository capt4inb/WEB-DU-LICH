<script>
function xoaDonhang()
  {
    var conf=confirm("Bạn có chắc chắn muốn xoá sản phẩm này không?");
    return conf;
  }
</script>
<?php 
include 'ketnoi.php';
session_start();
if(isset($_SESSION['username'])):
if(isset($_GET['xoa']))
{
    $id_donhang = $_GET['xoa'];
    $sql_xoadonhang = mysqli_query($conn,"DELETE FROM don_hang WHERE id_donhang='$id_donhang'");
    header("location: xulydonhang.php");
}
if(isset($_POST['capnhattinhtrang']))
{
    $xuly = $_POST['xuly'];
    $mahang = $_POST['mahang_xuly'];
    $sql_update_tinhtrang = mysqli_query($conn,"UPDATE don_hang SET tinh_trang = '$xuly' WHERE ma_hang = '$mahang'");
    header("location: xulydonhang.php");
}
?>
<?php include 'header.php'?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Đơn hàng </h1>
            <ol class="breadcrumb">
              <li><a href="index.php">Dashboard</a></li>          
            </ol>           
          </div>
        </div><!-- /.row -->
        <?php 
        $sql_select = mysqli_query($conn,"SELECT * FROM sanpham,khach_hang,don_hang WHERE don_hang.id_sp = sanpham.id_sp AND don_hang.id_kh = khach_hang.id_kh AND don_hang.address = khach_hang.address ORDER BY don_hang.id_donhang DESC");                
        ?>

        <div class="row">
            <?php 
                if(isset($_GET['quanly'])=='xemdonhang'){
                    $mahang = $_GET['mahang'];
                    $sql_chitietdonhang = mysqli_query($conn,"SELECT * FROM don_hang,sanpham WHERE don_hang.id_sp = sanpham.id_sp AND don_hang.ma_hang = '$mahang'");
            ?>
                <p> Xem chi tiết đơn hàng </p>
                <form action="" method="post" >
                <table class="table table-hover tablesorter">
                <thead>
                  <tr>
                    <th>Mã hàng </th>
                    <th>Tình trạng đơn hàng </th>
                    <th>Tên chuyến đi </th>
                    <th>Hình chuyến đi </th>
                    <th>Ngày đặt </th>
                    <th>Ngày đi </th>
                  </tr>
                  <?php 
                  $i=0;
                  while ($row_donhang = mysqli_fetch_array($sql_chitietdonhang)) {
                      $i++;
                  ?>
                </thead>
                <tbody>             
                  <tr>          
                    <td><?php echo $row_donhang['ma_hang'];?></td>  
                    <td><select class="form-control" name="xuly">
                        <option value="0"> <?php if($row_donhang['tinh_trang']==0){ echo 'Chưa xử lý';} else{ ?>  </option>
                        <option value="1"> <?php echo 'Đã xử lý';?> <?php}?></option>
                <input type="submit" value="Cập nhật tình trạng" name="capnhattinhtrang" class="btn btn-primary">
              </select></td>       
                    <td><?php echo $row_donhang['ten_sp'];?></td>
                    <td><img style="width: 80px;" src="anh/<?php echo $row_donhang['anh_sp']; ?>" alt=""></td>
                    <td><?php echo $row_donhang['ngay_thang'];?></td>
                    <td><?php echo $row_donhang['address'];?></td>
                    <input  type="hidden" name="mahang_xuly" value="<?php echo $row_donhang['ma_hang']; ?>">
                  </tr>  
                <?php
                }
                ?>                              
                </tbody>
              </table>             
              </form>
            <?php
            }}else{
             ?>
                <p> Đơn hàng </p>
            
          <div class="col-lg-12">
            <div class="table-responsive">
              <table class="table table-hover tablesorter">
                <thead>
                  <tr>
                    <!-- <th>Tên sản phẩm</th>
                    <th>Số lượng</th> -->
                    <th>Mã hàng </th>
                    <th>Tình trạng đơn hàng </th>
                    <th>Tên khách hàng </th>
                    <th>Ngày tháng đặt hàng </th>
                    <th>Quản lý </th>
                  </tr>
                  <?php 
                  $i=0;
                  while ($row_donhang = mysqli_fetch_array($sql_select)) {
                      $i++;
                  ?>
                </thead>
                <tbody>             
                  <tr>                  
                    <td><?php echo $row_donhang['ma_hang'];?></td>
                    <td><?php 
                           if($row_donhang['tinh_trang']==0)
                           {
                               echo 'Chưa xử lý';
                           } 
                           else {
                               echo 'Đã xử lý';
                           }
                    
                    ?></td>
                    <td><?php echo $row_donhang['name'];?></td>
                    <td><?php echo $row_donhang['ngay_thang'];?></td>
                    <td><a onclick="return xoaDonhang()" href="?xoa=<?php echo $row_donhang['id_donhang'];?>"> Xoá đơn hàng </a> || <a href="?quanly=xemdonhang&mahang=<?php echo $row_donhang['ma_hang'];?>"> Xem đơn hàng</a> </td>
                  </tr>  
                <?php
                }}
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
<?php 
else: header("location:index.php");
endif;
?>