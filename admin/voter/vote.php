<?php
session_start();

include "../admin/connction.php";
$did= $_GET["Cid"];
$result = mysqli_query($link, "select * from register_user where register_user_id = '$_SESSION[user_id]'");
while ($row = mysqli_fetch_array($result)) {
	$res = $row['A_id'];
}
$rrt=mysqli_query($link, "select * from candidate where Cid = $did");
while ($roww = mysqli_fetch_array($rrt)) {
$x = $roww['vote'];
$y = base64_decode($x);
$z = $y + 1;
$a = base64_encode($z);
mysqli_query($link, "update candidate set vote = '$a' where Cid = $did");
mysqli_query($link, "update subject set votes = 'yes' where A_id = '$res'");
header('location:national_voting.php');
}
//echo "<div class='alert alert-success'>Vote successful.</div>";
?>