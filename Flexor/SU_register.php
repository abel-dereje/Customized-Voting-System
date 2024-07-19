 
<?php
include "connction.php";
include '../db_connection_pdo.php';

session_start();
$message = '';
 if (isset($_POST['submit'])) 
 {
   $query = "
   SELECT * FROM su_register_user
   WHERE user_email = :user_email
   ";
   $statement = $connect->prepare($query);

   $statement->execute(
    array(
      ':user_email'     =>      $_POST['user_email']
    )
  );

   $no_of_row = $statement->rowCount();

   if ($no_of_row > 0)
   {
     $message ='<label class="text-danger">Email already exists</label'; 
   }else
   {
      $user_password = rand(100000, 9999999);
      $user_encrypted_password = base64_encode($user_password);
      $user_activation_code = md5(rand());

      $insert_query = "
      INSERT INTO su_register_user
      (SD_id, user_name, user_email, user_password, 
      user_activation_code, user_email_status) 
      VALUES (:SD_id, :user_name, :user_email, :user_password, 
      :user_activation_code, :user_email_status)
      ";
      $statement = $connect->prepare($insert_query);
      $statement->execute(
        array(
          ':SD_id'                =>   $_POST['SD_id'],
          ':user_name'            =>   $_POST['user_name'],
          ':user_email'           =>   $_POST['user_email'],
          ':user_password'        =>    
              $user_encrypted_password,
          ':user_activation_code' =>    $user_activation_code,
          'user_email_status'     =>    'not verified'
        )
      );
      $result = $statement->fetchAll();

      if (isset($result)) {
        $base_url = "http://localhost/voting/Flexor/";
        $mail_body = "<p> Hi ".$_POST['user_name'].",</p>
        <p> Thanks for Registration. Your password is ".$user_password.", This password will work only after your email verification. </p>
        <p>Please open this link to verified your email address - ".$base_url."Su_email_verification.php?su_activation_code=".$user_activation_code." <p>Best Regards, <br /> Voting</p>
        ";
        require '../PHPMailerAutoload.php';
        require '../credential.php';

      $mail = new PHPMailer;

      $mail->SMTPDebug = 0;                               // Enable verbose debug output

      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'abeldereje23@gmail.com';                 // SMTP username
      $mail->Password = PASS;                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to

      $mail->setFrom(EMAIL, 'voting ');
      $mail->addAddress($_POST['user_email'], $_POST['user_name']);     // Add a recipient
      //$mail->addReplyTo(EMAIL);
    // Optional name
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->WordWrap = 50;
      $mail->Subject = "Email Verification";
      $mail->Body    = $mail_body;
      //$mail->AltBody = $_POST['message'];;

      if(!$mail->send()) {
          $message = '<label class="text-danger"> Error occured.</label>'. $mail->ErrorInfo;
          echo 'Mailer Error: ' . $mail->ErrorInfo;
      } else {
         $message = '<label class="text-success"> Register Done, Please check your mail.</label>';
      }
    }
  }
}
  ?>
  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Register - Flexor Bootstrap Theme</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Fav and touch icons -->
  <link rel="shortcut icon" href="img/icons/favicon.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icons/114x114.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icons/72x72.png">
  <link rel="apple-touch-icon-precomposed" href="img/icons/default.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.theme.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
   <link rel="stylesheet" href="../admin/parsley/stylee.css">

  <!--Your custom colour override - predefined colours are: colour-blue.css, colour-green.css, colour-lavander.css, orange is default-->
  <link href="#" id="colour-scheme" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Flexor
    Theme URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<!-- ======== @Region: body ======== -->

<body class="fullscreen-centered page-register">
  <!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
  <div id="background-wrapper" class="benches" data-stellar-background-ratio="0.8">

    <!-- ======== @Region: #content ======== -->
    <div id="content">
      <div class="header">
        <div class="header-inner">
          <!--navbar-branding/logo - hidden image tag & site name so things like Facebook to pick up, actual logo set via CSS for flexibility -->
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">
                  Sign Up
                </h3>
            </div>
            <div class="panel-body">
              <div class="panel-heading"><h4>Answer the question to register</h4></div>
                    <div class="panel-body">
                      <form action="" method="post"   enctype="multipart/form-data" id="validationform" data-parsley-validate="" novalidate="">
                        
                        <?php echo $message; ?>
                        <div class="form-group has-feedback">
                          <input type="hidden" name="SD_id" value="<?php echo $_SESSION["SD_id"] ?>">
                        </div>
                        <div class="form-group has-feedback">
                          <input type="text" name="user_name" class="form-control" placeholder="User Name" data-parsley-pattern="/^[A-Za-z]+$/" required="" />
                          <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                          <input type="email" name="user_email" class="form-control" placeholder="User Email" value="<?php echo $_SESSION['email']; ?>" data-parsley-type="email" required="" readonly/>
                          <span class="fa fa-envelope-o form-control-feedback"></span>
                        </div>
                        
                        <div class="row">
        <!-- /.col -->
                        <div class="col-xs-6">
                          <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                        <div class="col-xs-6">
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="submit" class="btn btn-info">Register</button>
                        </div>
                        <!-- /.col -->
                      </div>
                      </form>
                    </div>
                    </div>
              <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flexor
            -->
          </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /row -->
    </div>
  </div>
  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/stellar/stellar.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="contactform/contactform.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <!--Custom scripts demo background & colour switcher - OPTIONAL -->
  <script src="js/color-switcher.js"></script>

  <!--Contactform script -->
  <script src="contactform/contactform.js"></script>
  <script src="../admin/parsley/parsley.js"></script>
  <script type="text/javascript">
         $(document).ready(function(){
              $('#validate_form').parsley();
         });
     </script>
     <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>

</body>

</html>