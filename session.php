<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if (!isset($_SESSION['email']) || (trim($_SESSION['email']) == '')) {
    header("location: ../../Flexor/login.php");
    exit();
}
$session_id=$_SESSION['email'];
?>