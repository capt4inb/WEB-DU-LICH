<?php 
include 'ketnoi.php';
$query = mysqli_query($conn,"SELECT * FROM regis_travel")
?>
<?php include 'header.php'?>
<div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Danh sách cần tư vấn </h1>
            <ol class="breadcrumb">
              <li><a href="xulydonhang.php">Dashboard</a></li>          
            </ol>         
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-12">
            <div class="table-responsive">
              <table class="table table-hover tablesorter">
                <thead>
                  <tr>
					<th>Email</th>
                    <th>Loại hình hoạt động</th>
                    <th>Nơi đến</th>
                    <th>Ngày khởi hành </th>
                    <th>Xoá </th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                while ($row=mysqli_fetch_array($query)) 
                {
                ?>
				<form method="post" action="">
                  <tr>
                    <td><?php echo $row['email'];?></td>
					<td><?php echo $row['hoatdong'];?></td>
					<td><?php echo $row['noiden'];?></td>
					<td><?php echo $row['datekhoihanh'];?></td>                  
                    <td><a href="xoa_tuvan.php?id=<?php echo $row['email'];?>">Xoá</a></td>
                  </tr>  
				</form>
                <?php
                }
                ?>                              
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div>
	
	<!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
    <script src="js/tablesorter/jquery.tablesorter.js"></script>
    <script src="js/tablesorter/tables.js"></script>

  </body>
</html>
