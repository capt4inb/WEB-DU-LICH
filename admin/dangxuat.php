<?php
session_start();
if(isset($_SESSION['username']))
{
    session_destroy();
    header("Location: index.php");
    exit;
}
else 
{
    header("Location: index.php");
}

?>