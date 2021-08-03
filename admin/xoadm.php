<?php
session_start();
if($_SESSION['username']=="letrieuphu"&&$_SESSION['password']=="123")
{
    $id_dm = $_GET['id'];
    include_once './ketnoi.php';
    $sql = "DELETE FROM danhmuc_sanpham WHERE id_dm='$id_dm'";
    $query = mysqli_query($conn,$sql);
    header("location: danhmucsp.php");
}
else
{
    header("location: index.php");
}
?>
