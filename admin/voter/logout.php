<?php
session_start();

session_destroy();

header("location:../../Flexor/login.php")
?>