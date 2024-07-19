<?php
//$conn = new mysqli("localhost", "root", "", "election") OR die("Error : " . mysqli_error($conn));

//code to save user's data

//if (isset($_POST['save'])){
//	if (!empty($_POST['Cname']) && !empty($_POST['Cemail']) && !empty($_POST['Cphone']) && !empty($_POST['Cadress']) && !empty($_POST['Cdescription']) && !empty($_POST['Cpicture'])){
//		$Cname = $_POST['Cname'];
//		$Cemail = $_POST['Cemail'];
//		$Cphone = $_POST['Cphone'];
//		$Cadress = $_POST['Cadress'];
//		$Cdescription = $_POST['Cdescription'];
//		$Cpicture = $_POST['Cpicture'];

//		$iQuery = "INSERT INTO candidate(Cname, Cemail, Cphone, Cadress, Cdescription, Cpicture) values(?, ?, ?, ?, ?, ?)";

//		$stmt = $conn->prepare($iQuery);
//		$stmt = bind_param("ss",$Cname, $Cemail, $Cphone, $Cadress, $description, $Cpicture);
//		if ($stmt->excute()){
//			$_SESSION['msg'] = "New record is successfully inserted.";
//			$_SESSION['alert'] = "alert alert-success";
//		}
//		$stmt->close();
//		$stmt->close();
//	}
//	else{
//		#alert msg
//		$_SESSION['msg'] = "The reqired form should be fill correctly.";
//		$_SESSION['alert'] = "alert alert-warninig";
//	}
//	header("location: manage_candidate.php");
//}
?>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

     $Server="localhost";
     $username="root";
     $psrd="";
     $dbname = "election";
     $connection= mysqli_connect($Server,$username,$psrd,$dbname);

     if (isset($_POST['add'])){
     	

             $name = $_POST['Cname']; 
	         $email = $_POST['Cemail'];
	         $phone = $_POST['Cphone'];
	         $adress = $_POST['Cadress'];
	         $description = $_POST['Cdescription'];

	         $destination = "../image/".$_FILES['Cpicture']['name'];
	         $filename    = $_FILES['Cpicture']['tmp_name'];  

	         move_uploaded_file($filename, $destination);

	         $query="insert into candidate(Cname, Cemail, Cphone, Cadress, Cdescription, Cpicture) values('$name','$email','$phone','$adress','$description','$destination')";
	         $ret= mysqli_query($connection,$query);
	      
	        echo '<script language="javascript">';
	        echo 'alert("Registration successfully")';
	        echo '</script>';
	       }
	       //delet selected data
	       /*if (isset($_POST['delet'])){
	       	$id = $_POST['delet'];

	       	$query = "delete from candidate where id = ?";
	         $ret= mysqli_query($connection,$query);
	       	
	       	echo '<script language="javascript">';
	        echo 'alert("Successfully deleted")';
	        echo '</script>';
	       }*/
	   }
?>