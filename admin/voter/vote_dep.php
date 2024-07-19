<?php
session_start();

include "../admin/connction.php";
$Ddid= $_GET["Did"];

$result = mysqli_query($link, "select * from dh_register_user where dh_register_user_id = '$_SESSION[user_id]'");
while ($row = mysqli_fetch_array($result)) {
	$res = $row['DV_id'];
}
$rrt=mysqli_query($link, "select * from dh where Did = $Ddid");
while ($roww = mysqli_fetch_array($rrt)) {
$x = $roww['vote'];
$y = base64_decode($x);
$z = $y + 1;
$a = base64_encode($z);
mysqli_query($link, "update dh set vote = '$a' where Did = $Ddid");
mysqli_query($link, "update import_dep_data set votes = 'yes' where DV_id = '$res'");
header('location:department_head.php');
}
?>