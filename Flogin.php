<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Login - Flexor Bootstrap Theme</title>
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
  <link href="Flexor/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="Flexor/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="Flexor/lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">
  <link href="Flexor/lib/owlcarousel/owl.theme.min.css" rel="stylesheet">
  <link href="Flexor/lib/owlcarousel/owl.transitions.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="Flexor/css/style.css" rel="stylesheet">

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

<body class="fullscreen-centered page-login">
  <!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
  <div id="background-wrapper" class="benches" data-stellar-background-ratio="0.8">
    

<?php
//include "header.php";
  //include "connction.php";
  include 'db_connection_pdo.php';
 ?>
<?php
 $message = '';
 if (isset($_POST['login'])) {
   $query = "
   SELECT * FROM register_user
    WHERE user_email = :user_email
    ";
   $statement = $connect->prepare($query);
   $statement->execute(
    array(
      'user_email'    =>  $_POST["user_email"]
    )
  );
   $count = $statement->rowCount();
   if($count > 0)
   {
    $result = $statement->fetchAll();
    foreach($result as $row)
    {
     if ($row['user_email_status'] == 'verified') {
        if (password_verify($_POST['user_password'], $row['user_password']))
         {
          $_SESSION['user_id'] = $row['register_user_id'];
          $_SESSION['A_id'] = $row['A_id'];
          ?>
          <script type="text/javascript">
            window.location = "../admin/voter/national_voting.php";
          </script>
          <?php
        }
        else
        {
          $message = '<label class="text-danger">Wrong Password</label';
        }
      }
      else
      {
        $message = '<label class="text-danger">Please First Verify, Your Email Address</label';
      } 
    }
   }else
   {
    $message = '<label class="text-danger">Wrong Email Address</label';
   }
 }
     if (isset($_POST['login'])) {
   $query = "
   SELECT * FROM up_register_user
    WHERE user_email = :user_email
    ";
   $statement = $connect->prepare($query);
   $statement->execute(
    array(
      'user_email'    =>  $_POST["user_email"]
    )
  );
   $count = $statement->rowCount();
   if($count > 0)
   {
    $result = $statement->fetchAll();
    foreach($result as $row)
    {
     if ($row['user_email_status'] == 'verified') {
        if (password_verify($_POST['user_password'], $row['user_password']))
         {
          $_SESSION['user_id'] = $row['up_register_user_id'];
          $_SESSION['UV_id'] = $row['UV_id'];
          ?>
          <script type="text/javascript">
            window.location = "admin/voter/university_president.php";
          </script>
          <?php
        }
        else
        {
          $message = '<label class="text-danger">Wrong Password</label';
        }
      }
      else
      {
        $message = '<label class="text-danger">Please First Verify, Your Email Address</label';
      } 
    }
   }
   else
   {
    $message = '<label class="text-danger">Wrong Email Address</label';
   }
 }
 if (isset($_POST['login'])) {
   $query = "
   SELECT * FROM cd_register_user
    WHERE user_email = :user_email
    ";
   $statement = $connect->prepare($query);
   $statement->execute(
    array(
      'user_email'    =>  $_POST["user_email"]
    )
  );
   $count = $statement->rowCount();
   if($count > 0)
   {
    $result = $statement->fetchAll();
    foreach($result as $row)
    {
     if ($row['user_email_status'] == 'verified') {
        if (password_verify($_POST['user_password'], $row['user_password']))
         {
          $_SESSION['user_id'] = $row['cd_register_user_id'];
          $_SESSION['CV_id'] = $row['CV_id'];
          ?>
          <script type="text/javascript">
            window.location = "admin/voter/college_dean.php";
          </script>
          <?php
        }
        else
        {
          $message = '<label class="text-danger">Wrong Password</label';
        }
      }
      else
      {
        $message = '<label class="text-danger">Please First Verify, Your Email Address</label';
      } 
    }
   }
   else
   {
    $message = '<label class="text-danger">Wrong Email Address</label';
   }
 }
 if (isset($_POST['login'])) {
   $query = "
   SELECT * FROM dh_register_user
    WHERE user_email = :user_email
    ";
   $statement = $connect->prepare($query);
   $statement->execute(
    array(
      'user_email'    =>  $_POST["user_email"]
    )
  );
   $count = $statement->rowCount();
   if($count > 0)
   {
    $result = $statement->fetchAll();
    foreach($result as $row)
    {
     if ($row['user_email_status'] == 'verified') {
        if (password_verify($_POST['user_password'], $row['user_password']))
         {
          $_SESSION['user_id'] = $row['dh_register_user_id'];
          $_SESSION['DV_id'] = $row['DV_id'];
          ?>
          <script type="text/javascript">
            window.location = "admin/voter/department_head.php";
          </script>
          <?php
        }
        else
        {
          $message = '<label class="text-danger">Wrong Password</label';
        }
      }
      else
      {
        $message = '<label class="text-danger">Please First Verify, Your Email Address</label';
      } 
    }
   }
   else
   {
    $message = '<label class="text-danger">Wrong Email Address</label';
   }
 }
 if (isset($_POST['login'])) {
   $query = "
   SELECT * FROM su_register_user
    WHERE user_email = :user_email
    ";
   $statement = $connect->prepare($query);
   $statement->execute(
    array(
      'user_email'    =>  $_POST["user_email"]
    )
  );
   $count = $statement->rowCount();
   if($count > 0)
   {
    $result = $statement->fetchAll();
    foreach($result as $row)
    {
     if ($row['user_email_status'] == 'verified') {
        if (password_verify($_POST['user_password'], $row['user_password']))
         {
          $_SESSION['user_id'] = $row['su_register_user_id'];
          $_SESSION['SD_id'] = $row['SD_id'];
          ?>
          <script type="text/javascript">
            window.location = "admin/voter/student_union.php";
          </script>
          <?php
        }
        else
        {
          $message = '<label class="text-danger">Wrong Password</label';
        }
      }
      else
      {
        $message = '<label class="text-danger">Please First Verify, Your Email Address</label';
      } 
    }
   }
   else
   {
    $message = '<label class="text-danger">Wrong Email Address</label';
   }
 }
   if (isset($_POST['login'])) {
     $username=$_POST["user_email"];
  $password=$_POST["user_password"];

 $sql=mysqli_query($link,"select * from users where email='$_POST[user_email]' && password='$_POST[user_password]'");
   while ($row=mysqli_fetch_array($sql)) {

    $db_username=$row["email"];
    $db_password=$row["password"];
    $db_type=$row["type"];

    if ($username==$db_username && $password==$db_password) {
      $_SESSION["username"]=$db_username;
      $_SESSION["type"]=$db_type;

      if ($_SESSION["type"]=="admin") {
        $_SESSION['Uid'] = $row['Uid'];
        ?>
        <script type="text/javascript">
          window.location="admin/admin/check_voter_list.php";
        </script>
        <?php
      }elseif ($_SESSION["type"]=="eb") {
        $_SESSION['Uid'] = $row['Uid'];
        ?>
        <script type="text/javascript">
          window.location="admin/election_board/announce_result.php";
        </script>
        <?php
      }
      if ($_SESSION["type"]=="hr") {
        $_SESSION['Uid'] = $row['Uid'];
        ?>
        <script type="text/javascript">
          window.location="admin/Hr/university_data.php";
        </script>
        <?php
      }
       else
        {
         ?>
            <script type="text/javascript">
               alert("Username Or Password Error");
            </script>
            <?php
           }
$_SESSION["username"]=$_POST["username"];
    }
  }
   
 }
 ?>
    <!-- ======== @Region: #content ======== -->
    <div id="content">
      <div class="header">
        <div class="header-inner">
          <!--navbar-branding/logo - hidden image tag & site name so things like Facebook to pick up, actual logo set via CSS for flexibility -->
          <a class="navbar-brand center-block" href="index.html" title="Home">
            <h1 class="hidden">
                <img src="img/logo.png" alt="Flexor Logo">
                Flexor
              </h1>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">
                  Login
                </h3>
            </div>
            <div class="panel-body">
              <form action="" method="post"   enctype="multipart/form-data" id="validationform" data-parsley-validate="" novalidate="">

      <?php echo $message; ?>
      <div class="form-group has-feedback">
        <input type="email" name="user_email" class="form-control" placeholder="Email" dta-parsley-type="email" required="">
        <span class="glyphicon glyphicon-user form-control-feedback" /span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="user_password" class="form-control" placeholder="Password" data-parsley-type = "number" required="">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"> Remember Me
            </label><br>
          </div>
        </div><br>
        <!-- /.col -->
        <div class="col-xs-5">
          <button type="reset" class="btn btn-danger btn-block btn-flat">Cancel</button>
        </div>
        <br><div class="col-xs-6">
          <button type="submit" name="login" class="btn btn-info btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <div class="row">
        <div class="col-xs-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Modal Examples</h3>
            </div>
            <div class="box-body">
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                Launch Default Modal
              </button>
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                Launch Info Modal
              </button>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
                Launch Danger Modal
              </button>
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-warning">
                Launch Warning Modal
              </button>
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success">
                Launch Success Modal
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
                <p>One fine body&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
              <p class="m-b-0 m-t">Not signed up? <a href="register.html">Sign up here</a>.</p>
              <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flexor
            -->
            <a href="https://bootstrapmade.com/">Free Bootstrap Templates</a> by BootstrapMade.com
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

</body>

</html>
