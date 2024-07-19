<?php
include "connction.php";
include '../db_connection_pdo.php';

 $message = '';
 session_start();

 if (isset($_POST['submit'])) 
 {
  //Department head
  $count =0;
   $sql1 = mysqli_query($link, "select * from dh_register_user where user_email = '$_POST[user_email]'");
  $count = mysqli_fetch_array($sql1);
      
     $password = $count['user_password'];
     $y = base64_decode($password);

     //Student Union
     $sql1 = mysqli_query($link, "select * from su_register_user where user_email = '$_POST[user_email]'");
  $count = mysqli_fetch_array($sql1);
   
     $password = $count['user_password'];
     $y = base64_decode($password);

     //College dean
     $sql1 = mysqli_query($link, "select * from cd_register_user where user_email = '$_POST[user_email]'");
    $count = mysqli_fetch_array($sql1);
   
     $password = $count['user_password'];
     $y = base64_decode($password);

     //University president
     $sql1 = mysqli_query($link, "select * from up_register_user where user_email = '$_POST[user_email]'");
    $count = mysqli_fetch_array($sql1);
    $password = $count['user_password'];
     $y = base64_decode($password);
     
     //National
     $sql1 = mysqli_query($link, "select * from register_user where user_email = '$_POST[user_email]'");
     $count = mysqli_fetch_array($sql1);

     $password = $count['user_password'];
     $y = base64_decode($password);
    
     $mail_body = "<p> Hi Your password is " .$y." </p>";

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
      $mail->addAddress($_POST['user_email']);     // Add a recipiente
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->WordWrap = 50;
      $mail->Subject = "Email Verification";
      $mail->Body    = $mail_body;

      if(!$mail->send()) {
        $message = '<label class="text-danger"> Error '.$password.' occured.</label>'. $mail->ErrorInfo;
          echo 'Mailer Error: ' . $mail->ErrorInfo;
      } else {
         $message = '<label class="text-success"> Password Is Sent To Your Email Please Check Your Email.</label>';
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Forgott Password</title>
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
  <link rel="stylesheet" href="../admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../admin/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../admin/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="../admin/parsley/stylee.css">

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

<body class="hold-transition skin-blue sidebar-mini fullscreen-centered page-login">
  <!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
  <div id="background-wrapper" class="benches" data-stellar-background-ratio="0.8">

    <!-- ======== @Region: #content ======== -->
    <div id="content">
      <div class="header">
      </div>
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">
                  <h4>Enter Your Email</h4>
                </h3>
            </div>
            <!--div class="login-logo">
    <img src="admin/image/login.jpg" width="75px" height="50px">
  </div-->
  <!-- /.login-logo -->
  <div class="login-box-body">
    <div class="panel panel-default">
     <div class="panel-body">
      <form action="" method="post"   enctype="multipart/form-data" id="validationform" data-parsley-validate="" novalidate="">
      <?php echo $message; ?>
      <div class="form-group has-feedback">
        <input type="email" name="user_email" class="form-control" placeholder="Email" dta-parsley-type="email" required="">
        <span class="glyphicon glyphicon-user form-control-feedback" /span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div><br>
        <!-- /.col -->
        <div class="col-xs-6">
          <button type="reset" class="btn btn-danger">Cancel</button>
        </div>
        <div class="col-xs-6">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="submit" class="btn btn-info">Insert</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
              <p class="m-b-0 m-t">Click here to <a href="login.php">Login</a>.</p>
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

</body>
</html>
