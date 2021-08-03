<?php
ob_start();
include_once './ketnoi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trang quản trị</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
  </head>

  <body>   
    <div id="wrapper">   
      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="xulydonhang.php">Trang quản trị</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <!-- <li><a href="charts.php"><i class="fa fa-bar-chart-o"></i> Charts</a></li> -->  
            <li><a href="xulydonhang.php">Đơn hàng</a></li>         
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Danh mục <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="danhsachsp.php">Danh sách chuyến đi</a></li>
                <li><a href="danhmucsp.php">Quản lý Danh mục </a></li>
              </ul>
            </li>
            <li><a href="danhsachtuvan.php">Danh sách đăng ký tư vấn</a></li>
            <li><a href="admin_feedback.php">Phản hồi của khách</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown alerts-dropdown">            
            </li>
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php if(isset($_SESSION['username'])){echo $_SESSION['username'];} ?>  <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="dangxuat.php"><i class="fa fa-power-off"></i> Đăng xuất</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
      