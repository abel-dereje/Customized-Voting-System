<?php
$mysqli = new mysqli('localhost', 'root', '', 'election') or die(mysqli_error($mysqli));

$update = false;
$id = 0;
$name = ''; 
$phone = '';
$address = '';
$dscription = '';

if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM up where Pid = '$_SESSION[Pid]'") or die($mysqli->error());
	if (count($result)==1){
		$row = $result->fetch_array();
		$name = $row['Pname']; 
		$phone = $row['Pphone'];
		$address = $row['Paddress'];
		$dscription = $row['Pdisc'];
	}
	?>
	<form method="post" enctype="multipart/form-data" action="view_candidate.php" role="form" name="CandidateForm" onsubmit="return ValidateCandidateForm();">
                <input type="hidden" name="Pid" value="<?php echo $id; ?>">
              <div class="box-body">
                <div class="form-group">
                  <input type="text" class="form-control" name="Cname" value="<?php echo $name; ?>" placeholder="Enter Candidate Name">
                </div>
                <div class="form-group">
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
	$id = $_POST['Pid'];
	$name = $_POST['Cname']; 
	$phone = $_POST['Cphone'];
	$address = $_POST['Cadress'];
	$dscription = $_POST['Cdescription'];

	             $tm=md5(time());
                $fnm=$_FILES["f1"]["name"];
                $dst="../admin/image/".$tm.$fnm;
                $dst1="../admin/image/".$tm.$fnm;
                move_uploaded_file($_FILES["f1"]["tmp_name"], $dst); 

    $mysqli->query("UPDATE up SET Pname = '$name', Pphone = '$phone', Paddress = '$address', Pdisc = '$dscription', image = '$dst1' WHERE Pid=$id") or die($mysqli->error);
?>

	<script type="text/javascript">
		alert("Record has been successfully updated");
	</script>
<?php
}