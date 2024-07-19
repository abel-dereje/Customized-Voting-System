<?php
session_start();

include "../admin/connction.php";
$CDdid= $_GET["CDid"];
$result = mysqli_query($link, "select * from cd_register_user where cd_register_user_id = '$_SESSION[user_id]'");
while ($row = mysqli_fetch_array($result)) {
	$res = $row['CV_id'];
}
$rrt=mysqli_query($link, "select * from cd where CDid = $CDdid");
while ($roww = mysqli_fetch_array($rrt)) {
$x = $roww['vote'];
//$x = base64_encode($x);
$y = base64_decode($x);
$z = $y + 1;
$a = base64_encode($z);
mysqli_query($link, "update cd set vote = '$a' where CDid = $CDdid");
//$dec = base64_decode($x);
//mysqli_query($link, "update cd set vote = $x + 1 where CDid = $CDdid");
mysqli_query($link, "update import_college_data set votes = 'yes' where CV_id = '$res'");
header('location:college_dean.php');}
?>