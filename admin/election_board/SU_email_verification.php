<?php
include "../../db_connection_pdo.php";

  $message = '';
  if (isset($_GET['activation_code'])) {
    $query = "
    SELECT * FROM su 
    WHERE user_activation_code = :user_activation_code
    ";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        'user_activation_code'      =>  $_GET['activation_code']
      )
    );
    $no_of_row = $statement->rowCount();
    if ($no_of_row > 0) {
      $result = $statement->fetchAll();
      foreach ($result as $row) {
        if ($row['user_email_status'] == 'not verified') {
          $update_query = "
          UPDATE su
          SET user_email_status = 'verified' 
          WHERE Sid = '".$row['Sid']."'
          ";
          $statement = $connect->prepare($update_query);
          $statement->execute();
          $sub_result = $statement->fetchAll();
          if (isset($sub_result)) 
          {
            $message = '<label class="text-success">Email Address Successfully Verified <br> You can login here - <a href="../../Flexor/login.php">Login</a></label';
          }
        }
        else
        {
          $message = '<label class="text-danger">Your Email Address Already Verified</label';
        }
      }
    }
    else{
      $message = '<label class="text-danger">Invalid Link</label';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Login</title>
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
  <link rel="stylesheet" href="../../Flexor/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../Flexor/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../Flexor/admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../Flexor/admin/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../Flexor/admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../Flexor/admin/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="../../Flexor/admin/parsley/stylee.css">

  <!-- Fav and touch icons -->
  <link rel="shortcut icon" href="../../Flexor/img/icons/favicon.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../Flexor/img/icons/114x114.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../Flexor/img/icons/72x72.png">
  <link rel="apple-touch-icon-precomposed" href="../../Flexor/img/icons/default.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../../Flexor/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../../Flexor/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../Flexor/lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">
  <link href="../../Flexor/lib/owlcarousel/owl.theme.min.css" rel="stylesheet">
  <link href="../../Flexor/lib/owlcarousel/owl.transitions.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../../Flexor/css/style.css" rel="stylesheet">

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
                  <h4>PHP Register Login Script With Email Verification</h4>
                </h3>
            </div>
            <!--div class="login-logo">
    <img src="admin/image/login.jpg" width="75px" height="50px">
  </div-->
  <!-- /.login-logo -->
  <div class="login-box-body">
    <div class="panel panel-default">
     <div class="panel-body">
              <h4 align="center"></h4>
        <h3><?php echo $message; ?></h3>
        <!-- /.modal --> 
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /row -->
    </div>
  </div>
  <!-- Required JavaScript Libraries -->
  <script src="../../Flexor/lib/jquery/jquery.min.js"></script>
  <script src="../../Flexor/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="../../Flexor/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../../Flexor/lib/stellar/stellar.min.js"></script>
  <script src="../../Flexor/lib/waypoints/waypoints.min.js"></script>
  <script src="../../Flexor/lib/counterup/counterup.min.js"></script>
  <script src="../../Flexor/contactform/contactform.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="../../Flexor/js/custom.js"></script>

  <!--Custom scripts demo background & colour switcher - OPTIONAL -->
  <script src="../../Flexor/js/color-switcher.js"></script>

  <!--Contactform script -->
  <script src="contactform/contactform.js"></script>

</body>
</html>