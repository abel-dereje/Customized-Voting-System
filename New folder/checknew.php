
<?php
error_reporting(E_ALL);
require_once 'vendor/autoload.php';
        //define("PROJECT_NAME", "C:\htdocs\voting");

        $mail = new PHPMailer\PHPMailer\PHPMailer;
        $mail->SMTPDebug = 3;                               // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = "smtp.gmail.com";             // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = "email@gmail.com";                 // SMTP username
        $mail->Password = "yourpassword";                           // SMTP password
        $mail->SMTPSecure = "tls";             // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->From = "abeldereje@gmail.com";
        $mail->FromName = "Abel Dereje";
        $mail->addAddress("abeldereje23@gmail.com","abel");               // Name is optional
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        //$mail->Body = $mail_body;

        if($mail->Send()) 
        {
          $message = '<label class="text-success"> Register Done, Please check your mail.</label>';
        }else{
          $message = '<label class="text-danger"> Error occured.</label>'. $mail->ErrorInfo;
        }
        ?>