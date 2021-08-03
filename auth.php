<?php
session_start();
//Xử lý đăng nhập
if (isset($_POST['login']))
{
//Kết nối tới database
include('ketnoi.php');
  
//Lấy dữ liệu nhập vào
$username = addslashes($_POST['email']);
$password = addslashes($_POST['password']);
  
//Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
if (($_POST['email']) == 'trieuphuisme@gmail.com' && ($_POST['password']) == '123')
{
    header("location:admin.php");
} 
else if (($_POST['email']  && $_POST['password']) != null) 
{
    if($_POST['email']  && $_POST['password'])
    {
        $sql = "SELECT * FROM users WHERE email='$username' and password='$password'";
        $query = mysqli_query($conn,$sql);
        if(mysqli_num_rows($query)==0)
        {
            echo '<script language="javascript">alert("Email hoặc mật khẩu không đúng!"); window.location="login.php";</script>';
        }
        else
        {
            $_SESSION['email'] = $username;
            header("location:index.php");
        }
    }
    
}
else if(($_POST['email']  && $_POST['password']) == "") 
{
    if(session_destroy())
{
    header("Location: login.php");
    exit;
}


}
  
//Lưu tên đăng nhập
$_SESSION['email'] = $username;
die();
}
?>