<?php 
require ('ketnoi.php');
if(isset($_GET['delete']))
{
    $id = $_GET['delete'];
    $conn -> query("DELETE FROM regis_travel WHERE id=$id");
    header("location: admin.php");
    
}
?>