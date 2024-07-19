<?php
$mysqli = new mysqli('localhost', 'root', '', 'election') or die(mysqli_error($mysqli));

$update = false;
$id = 0;
$name = ''; 
$email = '';
$phone = '';
$name1 = ''; 
$email1 = '';
$phone1 = '';
$name2 = ''; 
$email2 = '';
$phone2 = '';
$name3 = ''; 
$email3 = '';
$phone3 = '';
$name4 = ''; 
$email4 = '';
$phone4 = '';
$adress = '';
$address = '';
$age = '';
$sex = '';
$EL = '';
$description = '';
$dst1 = '';  
$grade = '';

if(isset($_POST["add"]))
{
  $tm=md5(time());
  $fnm=$_FILES["f1"]["name"];
  $dst="image/".$tm.$fnm;
  $dst1="image/".$tm.$fnm;
  move_uploaded_file($_FILES["f1"]["tmp_name"], $dst); 

  mysqli_query($link,"insert into candidate values('','$_POST[Cname]','$_POST[Cemail]','$_POST[Cphone]','$_POST[Cadress]','$_POST[Cdescription]','$dst1', '')");

     ?>
     <script type="text/javascript">
     	alert("Record has been successfully saved");
     </script>
     <?php

  } 

if (isset($_GET['delete'])){
		# code...
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM candidate WHERE Cid=$id") or die($mysqli->error());
	?>
		<script type="text/javascript">
			alert("Record has been successfully deleted");
		</script>

	<?php
}
if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM candidate where Cid=$id") or die($mysqli->error());
	if (count($result)==1){
		$row = $result->fetch_array();
		$name1 = $row['Cname']; 
		$email1 = $row['Cemail'];
		$phone1 = $row['Cphone'];
	}
}
if (isset($_POST['update'])){
	$id = $_POST['Cid'];
	$name1 = $_POST['Cname']; 
	$email1 = $_POST['Cemail'];
	$phone1 = $_POST['Cphone'];

    $mysqli->query("UPDATE candidate SET Cname = '$name1', Cemail = '$email1', Cphone = '$phone1' WHERE Cid=$id") or die($mysqli->error);
?>

	<script type="text/javascript">
		alert("Record has been successfully updated");
	</script>
<?php
}

if(isset($_POST["add1"]))
{
  $tm=md5(time());
  $fnm=$_FILES["f1"]["name"];
  $dst="image/".$tm.$fnm;
  $dst1="image/".$tm.$fnm;
  move_uploaded_file($_FILES["f1"]["tmp_name"], $dst); 

  $tm=md5(time());
  $fnm=$_FILES["f2"]["name"];
  $dst1="image/".$tm.$fnm;
  $dst2="image/".$tm.$fnm;
  move_uploaded_file($_FILES["f2"]["tmp_name"], $dst1);

  mysqli_query($link,"insert into up values('','$_POST[Pname]','$_POST[Pemail]','$_POST[Pphone]','$_POST[Page]','$dst2','$_POST[PEL]','$_POST[Psex]','$_POST[Paddress]','$_POST[Pdisc]','$dst1','')");

     ?>
     <script type="text/javascript">
     	alert("Record has been successfully saved");
     </script>
     <?php
  } 
  if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM up WHERE Pid=$id") or die($mysqli->error());
	?>
		<script type="text/javascript">
			alert("Record has been successfully deleted");
		</script>

	<?php
}if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM up where Pid=$id") or die($mysqli->error());
	if (count($result)==1){
		$row = $result->fetch_array();
		$name2 = $row['Pname']; 
		$email2 = $row['Pemail'];
		$phone2 = $row['Pphone'];
	}
}
if (isset($_POST['update1'])){
	$id = $_POST['Pid'];
	$name2 = $_POST['Pname']; 
	$email2 = $_POST['Pemail'];
	$phone2 = $_POST['Pphone'];

    $mysqli->query("UPDATE up SET Pname = '$name2', Pemail = '$email2', Pphone = '$phone2' WHERE Pid=$id") or die($mysqli->error);
?>

	<script type="text/javascript">
		alert("Record has been successfully updated");
	</script>
<?php
}
if(isset($_POST["add2"]))
{
  $tm=md5(time());
  $fnm=$_FILES["f3"]["name"];
  $dst2="image/".$tm.$fnm;
  $dst3="image/".$tm.$fnm;
  move_uploaded_file($_FILES["f3"]["tmp_name"], $dst2); 

  $tm=md5(time());
  $fnm=$_FILES["f4"]["name"];
  $dst4="image/".$tm.$fnm;
  $dst5="image/".$tm.$fnm;
  move_uploaded_file($_FILES["f4"]["tmp_name"], $dst4);

  mysqli_query($link,"insert into cd values('','$_POST[Cname]','$_POST[Cemail]','$_POST[Cphone]','$_POST[Cage]','$dst3','$_POST[CEL]','$_POST[Csex]','$_POST[Caddress]','$dst5','')");

     ?>
     <script type="text/javascript">
     	alert("Record has been successfully saved");
     </script>
     <?php
  } 
  if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM cd WHERE CDid=$id") or die($mysqli->error());
	?>
		<script type="text/javascript">
			alert("Record has been successfully deleted");
		</script>

	<?php
}
if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM cd where CDid=$id") or die($mysqli->error());
	if (count($result)==1){
		$row = $result->fetch_array();
		$name3 = $row['Cname']; 
		$email3 = $row['Cemail'];
		$phone3 = $row['Cphone'];
	}
}
if (isset($_POST['update2'])){
	$id = $_POST['CDid'];
	$name3 = $_POST['Cname']; 
	$email3 = $_POST['Cemail'];
	$phone3 = $_POST['Cphone'];

    $mysqli->query("UPDATE cd SET Cname = '$name3', Cemail = '$email3', Cphone = '$phone3' WHERE CDid=$id") or die($mysqli->error);
?>

	<script type="text/javascript">
		alert("Record has been successfully updated");
	</script>
<?php
}
if(isset($_POST["add3"]))
{
  $tm=md5(time());
  $fnm=$_FILES["f11"]["name"];
  $dst2="image/".$tm.$fnm;
  $dst3="image/".$tm.$fnm;
  move_uploaded_file($_FILES["f11"]["tmp_name"], $dst2); 

  $tm=md5(time());
  $fnm=$_FILES["f12"]["name"];
  $dst4="image/".$tm.$fnm;
  $dst5="image/".$tm.$fnm;
  move_uploaded_file($_FILES["f12"]["tmp_name"], $dst4);

  mysqli_query($link,"insert into dh values('','$_POST[Dname]','$_POST[Demail]','$_POST[Dphone]','$_POST[Dage]','$dst3','$_POST[DEL]','$_POST[Dsex]','$_POST[Daddress]','$dst5','')");

     ?>
     <script type="text/javascript">
     	alert("Record has been successfully saved");
     </script>
     <?php
  } 
  if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM dh WHERE Did=$id") or die($mysqli->error());
	?>
		<script type="text/javascript">
			alert("Record has been successfully deleted");
		</script>

	<?php
}
if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM dh where Did=$id") or die($mysqli->error());
	if (count($result)==1){
		$row = $result->fetch_array();
		$name4 = $row['Dname']; 
		$email4 = $row['Demail'];
		$phone4 = $row['Dphone'];
	}
}
if (isset($_POST['update3'])){
	$id = $_POST['Did'];
	$name4 = $_POST['Dname']; 
	$email4 = $_POST['Demail'];
	$phone4 = $_POST['Dphone'];

    $mysqli->query("UPDATE dh SET Dname = '$name4', Demail = '$email4', Dphone = '$phone4' WHERE Did=$id") or die($mysqli->error);
?>

	<script type="text/javascript">
		alert("Record has been successfully updated");
	</script>
<?php
}
if(isset($_POST["add5"]))
{
  $tm=md5(time());
  $fnm=$_FILES["f6"]["name"];
  $dst8="image/".$tm.$fnm;
  $dst9="image/".$tm.$fnm;
  move_uploaded_file($_FILES["f6"]["tmp_name"], $dst8); 

  mysqli_query($link,"insert into su values('','$_POST[Sname]','$_POST[Semail]','$_POST[Sphone]','$_POST[Sage]','$_POST[Sgrade]','$_POST[Syear]','$_POST[Sclub]','$_POST[Saddress]','$dst9','')");
  
     ?>
     <script type="text/javascript">
     	alert("Record has been successfully saved");
     </script>
     <?php
  } 
  if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM su WHERE Sid=$id") or die($mysqli->error());
	?>
		<script type="text/javascript">
			alert("Record has been successfully deleted");
		</script>

	<?php
}
if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM su where Sid=$id") or die($mysqli->error());
	if (count($result)==1){
		$row = $result->fetch_array();
		$name = $row['Sname']; 
		$email = $row['Semail'];
		$phone = $row['Sphone'];
	}
}
if (isset($_POST['update5'])){
	$id = $_POST['Sid'];
	$name = $_POST['Sname']; 
	$email = $_POST['Semail'];
	$phone = $_POST['Sphone'];

    $mysqli->query("UPDATE su SET Sname = '$name', Semail = '$email', Sphone = '$phone' WHERE Sid=$id") or die($mysqli->error);
?>
	<script type="text/javascript">
		alert("Record has been successfully updated");
	</script>
<?php
}
if (isset($_GET['delete'])){
	$d = $_GET['delete'];
	$mysqli->query("DELETE FROM contact_us WHERE Uid=$d") or die($mysqli->error());
	?>
		<script type="text/javascript">
			alert("Record has been successfully deleted");
		</script>

	<?php
}

?>
