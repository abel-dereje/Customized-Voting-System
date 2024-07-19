<?php
session_start();

include "../admin/connction.php";
$Sdid= $_GET["Sid"];

$result = mysqli_query($link, "select * from su_register_user where su_register_user_id = '$_SESSION[user_id]'");
while ($row = mysqli_fetch_array($result)) {
	$res = $row['SD_id'];
}
$rrt=mysqli_query($link, "select * from su where Sid = $Sdid");
while ($roww = mysqli_fetch_array($rrt)) {
$x = $roww['vote'];
$y = base64_decode($x);
$z = $y + 1;
$a = base64_encode($z);
mysqli_query($link, "update su set vote = '$a' where Sid = $Sdid");
mysqli_query($link, "update check_student_data set votes = 'yes' where SD_id = '$res'");
header('location:student_union.php');
}
?>