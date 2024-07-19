<?php
$mysqli = new mysqli('localhost', 'root', '', 'election') or die(mysqli_error($mysqli));

$update = false;
$id = 0;
$name = ''; 
$email = '';
$phone = '';
$address = '';
$dscription = '';
 //where Cemail = '$_SESSION[email]'
if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM candidate where Cid = '$_SESSION[Cid]'") or die($mysqli->error());
	if (count($result)==1){
		$row = $result->fetch_array();
		$name = $row['Cname']; 
		$email = $row['Cemail'];
		$phone = $row['Cphone'];
		$address = $row['Cadress'];
		$dscription = $row['Cdescription'];
	}
	?>
	<form method="post" enctype="multipart/form-data" action="view_candidate.php" role="form" name="CandidateForm" onsubmit="return ValidateCandidateForm();">
                <input type="hidden" name="Cid" value="<?php echo $id; ?>">
              <div class="box-body">
                <div class="form-group">
                  <input type="text" class="form-control" name="Cname" value="<?php echo $name; ?>" placeholder="Enter Candidate Name">
                </div><div class="form-group">
                  <input type="email" class="form-control" name="Cemail" value="<?php echo $email; ?>" placeholder="Enter email">
                </div><div class="form-group">
                  <input type="text" class="form-control" name="Cphone" value="<?php echo $phone; ?>" placeholder="Enter Candidate Phone Number">
                </div><div class="form-group">
                  <label for="">Candidate Address</label>
                  <textarea rows="2" cols="56" name="Cadress" class="form-control"> <?php echo $address; ?> </textarea>
                </div><div class="form-group">
                  <label for="">Candidate Description</label>
                  <textarea rows="2" cols="56" name="Cdescription" class="form-control"> <?php echo $dscription; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="">File input</label>
                  <input type="file"  class="form-control" name="f1">
                  <p class="help-block">Select your photo here.</p>
                </div>  
                <div class="form-group">
                  <?php
                   if ($update == true): ?>
                      <button type="submit" name="update" class="btn btn-info">Update</button>
                     <?php else: ?>
                      <button type="Cancel" name="Cancel" class="btn btn-danger">Cancel</button>
                      <button id="signupSubmit" type="submit" name="add" class="pull-right btn btn-primary">Add</button>
                <?php endif; ?>
                </div>
              </div>
            </form><?php
}
if (isset($_POST['update'])){
	$id = $_POST['Cid'];
	$name = $_POST['Cname']; 
	$email = $_POST['Cemail'];
	$phone = $_POST['Cphone'];
	$address = $_POST['Cadress'];
	$dscription = $_POST['Cdescription'];

	$tm=md5(time());
                $fnm=$_FILES["f1"]["name"];
                $dst="../admin/image/".$tm.$fnm;
                $dst1="../admin/image/".$tm.$fnm;
                move_uploaded_file($_FILES["f1"]["tmp_name"], $dst); 

    $mysqli->query("UPDATE candidate SET Cname = '$name', Cphone = '$phone', Cadress = '$address', Cdescription = '$dscription', image = '$dst1' WHERE Cid=$id") or die($mysqli->error);
?>

	<script type="text/javascript">
		alert("Record has been successfully updated");
	</script>
<?php
}