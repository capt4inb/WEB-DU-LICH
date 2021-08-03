<?php 
session_start();
if($_SESSION['username']=="letrieuphu"&&$_SESSION['password']=="123")
{
    $id = $_GET['id'];
    include_once './ketnoi.php';
    $sql = "DELETE FROM feedback WHERE email='$id'";
    $query = mysqli_query($conn,$sql);
    header("location: admin_feedback.php");
}
?>