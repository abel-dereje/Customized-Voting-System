<?php
session_start();
if (!isset($_SESSION['lang'])) {
	$_SESSION['lang'] =1;
}
if ($_SESSION['lang']==1) {
	include "lang_eng.php";
}elseif ($_SESSION['lang']=2) {
	include "lang_amh.php";
}
?>