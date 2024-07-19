<?php
$connect = new PDO("mysql:host=localhost;dbname=election", "root", "");

$message = '';

 if (isset($_POST['register'])) 
 {
   $query = "SELECT * FROM register_user WHERE  	user_email = : 	user_email";
   $statement = $connect->prepare($query);

   $statement->execute(
    array(
      ':user_email'  => $_POST['user_email']
    )
  );
   $no_of_row = $statement->rowCount();

   if ($no_of_row > 0) {
     $message ='<label class="text-danger">Email already exists</label'; 
   }else{
      $user_password = rand(100000, 999999);
      $user_encrypted_password = password_hash($user_password, PASSWORD_DEFAULT);
      $user_activation_code = md5(rand());
      $insert_query = "INSERT INTO register_user(user_name, user_email, user_password, user_activation_code, user_email_status) VALUES (:user_name, :user_email, :user_password, :user_activation_code, :user_email_status)";
      $statement = $connect->prepare($insert_query);
      $statement->execute(
        array(
          ':user_name'            =>   $_POST['user_name'],
          ':user_email'           =>   $_POST['user_email'],
          ':user_password'        =>    $user_encrypted_password,
          ':user_activation_code' =>    $user_activation_code,
          'user_email_status'     =>    'not verified'));
      $result = $statement->fetchAll();
      if (isset($result)) {
        $base_url = "http://localhost/voting/";
        $mail_body = "<p> Hi ".$_POST['user_name'].",</p> <p> Thanks for Registration. Your password is ".$user_password.", This password will work only after your email verification. </p>
        <p>Please this link to verified your email address - ".$base_url."email_verififcation.php?activation_code=".$user_activation_code." <p>Best Regards</p>";
        require 'PHPMailer/_lib/class.phpmailer.php';

        $mail = new PHPMailer;

        $mail = IsSMTP();

        $mail->Host = 'smtpout.secureserver.net';

        $mail->Port = '80';

        $mail->SMTPAuth = true;

        $mail->Username = 'XXXXX';

        $mail->Password = 'XXXXXX';

        $mail->SMTPSecure = '';

        $mail->From = 'abeldereje23@gmail.com';

        $mail->FromName = 'webslesson';

        $mail->AddAddress($_POST['user_email'], $_POST['user_name']);

        $mail->WordWrap = 50;

        $mail->IsHTML(true);

        $mail->Subject = 'Email Verification';

        $mail->Body = $mail_body;

        if ($mail->send()) {
          $message = '<label class="text-success"> Register Done, Please check your mail.</label>';
        }

      }
   }
 }
?>
 <?php
 $msg = "";
 use PHPMailer\PHPMailer\PHPMailer;
 if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $cPassword = $_POST['cPassword'];

   if ($name == " " || $email == " " || $password != $cPassword)
   $msg = "Please check your input!";
 else {
     $sql = "SELECT Eid FROM users_email WHERE email='$email'";
     $num_rows = $_POST['email'];
     if ($num_rows > 0) {
       $msg = "Email already exists in the database!";
     } else {
      $token = 'qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM0123456789!$/()*';
      $token = str_shuffle($token);
      $token = substr($token, start, length);

      $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

      $insert = "INSERT INTO users_email (name,email,Password,isEmailConfirmed,token) VALUES ('$name', '$email', '$hashedPassword', '0', '$token')";
      include_once "PHPMailer/PHPMailer.php";

      $mail = new PHPMailer;
      $mail->setFrom('abeldereje23@gmail.com');
      $mail->addAddress($email,$name);
      $mail->Subject = "Please verify email!";
      $mail->IsHTML(true);
      $mail->Body = "
      Please click on the link below: <br><br>
      <a href = 'http://localhost/voting/register.php/PHPEmailConfirmation/confirm.php?email=$email&token=$token'>Clcik here</a>";
      if ($mail->send())  
         $msg = "You have been registered! Please verify your email!";
         else
           $msg = "Somthing wrong happen! Please try again!";
     }
   }
 }
 ?>