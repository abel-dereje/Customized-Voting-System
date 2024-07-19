<?php
 mysqli_select_db($link,"election");

            $mysqli = new mysqli('localhost', 'root', '', 'election') or die(mysqli_error($mysqli));
/*$update = false;
$id = 0;
$name = "";
$email = "";
$phone = ""; 

if (isset($_GET['edit'])){
	$idN = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM candidate where Cid='$idN'") or die($mysqli->error());
	if (count($result)==1){
		$row = $result->fetch_array();
		$nameN = $row['Cname']; 
		$emailN = $row['Cemail'];
		$phoneN = $row['Cphone'];
	}
}*/
if (isset($_POST['update'])){
	$idN = $_POST['Cid'];
	$nameN = $_POST['Cname']; 
	$emailN = $_POST['Cemail'];
	$phoneN = $_POST['Cphone'];

    $mysqli->query("UPDATE candidate SET Cname = '$name1', Cemail = '$email1', Cphone = '$phone1' WHERE Cid='$idN'") or die($mysqli->error);
?>

	<script type="text/javascript">
		alert("Record has been successfully updated");
	</script>
<?php
}
?>