<?php
session_start();
include "../admin/connction.php";
$Pdid= $_GET["Pid"];

$result = mysqli_query($link, "select * from up_register_user where up_register_user_id = '$_SESSION[user_id]'");
while ($row = mysqli_fetch_array($result)) {
	$res = $row['UV_id'];
}
$rrt=mysqli_query($link, "select * from up where Pid = $Pdid");
while ($roww = mysqli_fetch_array($rrt)) {
$x = $roww['vote'];
$y = base64_decode($x);
$z = $y + 1;
$a = base64_encode($z);
mysqli_query($link, "update up set vote = '$a' where Pid = $Pdid");
mysqli_query($link, "update import_university_data set votes = 'yes' where UV_id = '$res'");
header('location:university_president.php');
}
?>