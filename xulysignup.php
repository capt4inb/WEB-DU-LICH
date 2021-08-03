<?php
// Kết nối cơ sở dữ liệu
include "ketnoi.php";

// Dùng isset để kiểm tra Form
if(isset($_POST['signup'])){
$username = trim($_POST['email']);
$password = trim($_POST['password']);
$repassword = trim($_POST['repassword']);


if (empty($username)) {
array_push($errors, "Email is required"); 
}

if (empty($password)) {
array_push($errors, "Two password do not match"); 
}

// Kiểm tra username hoặc email có bị trùng hay không
$sql = "SELECT * FROM users WHERE email = '$username'";

// Thực thi câu truy vấn
$result = mysqli_query($conn, $sql);

// Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
if (mysqli_num_rows($result) > 0 || $repassword != $password )
{
echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="signup.php";</script>';

// Dừng chương trình
die ();
}
else {
$sql = "INSERT INTO users (email, password) VALUES ('$username','$password')";
echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="login.php";</script>';

if (mysqli_query($conn, $sql)){
echo "Email đăng nhập: ".$_POST['email']."<br/>";
echo "Mật khẩu: " .$_POST['password']."<br/>";
}
else {
echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="signup.php";</script>';
}
}
}
?>