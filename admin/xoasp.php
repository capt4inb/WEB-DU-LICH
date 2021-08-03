<?php
session_start();
if($_SESSION['username']=="letrieuphu"&&$_SESSION['password']=="123")
{
    $id_sp = $_GET['id'];
    include_once './ketnoi.php';
    $sql = "DELETE FROM sanpham WHERE id_sp='$id_sp'";
    $query = mysqli_query($conn,$sql);
    header("location: danhsachsp.php");
}
else
{
    header("location: index.php");
}
?>
