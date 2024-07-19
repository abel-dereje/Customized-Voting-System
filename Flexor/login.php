
<?php
  include "connction.php";
  include '../db_connection_pdo.php';
  session_start();
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
        $x = $row['user_password'];
        $a = base64_decode($x);
        $y = $_POST['user_password'];

        if ($a==$y)
         {
          $_SESSION['user_id'] = $row['register_user_id'];
          $_SESSION['A_id'] = $row['A_id'];
          $_SESSION['email'] = $row['user_email'];
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
        $x = $row['user_password'];
        $a = base64_decode($x);
        $y = $_POST['user_password'];

        if ($a==$y)
         {
          $_SESSION['user_id'] = $row['up_register_user_id'];
          $_SESSION['UV_id'] = $row['UV_id'];
          $_SESSION['email'] = $row['user_email'];
          ?>
          <script type="text/javascript">
            window.location = "../admin/voter/university_president.php";
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
        $x = $row['user_password'];
        $a = base64_decode($x);
        $y = $_POST['user_password'];

        if ($a==$y)
         {
          $_SESSION['user_id'] = $row['cd_register_user_id'];
          $_SESSION['CV_id'] = $row['CV_id'];
          $_SESSION['email'] = $row['user_email'];
          ?>
          <script type="text/javascript">
            window.location = "../admin/voter/college_dean.php";
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
        $x = $row['user_password'];
        $a = base64_decode($x);
        $y = $_POST['user_password'];

        if ($a==$y)
         {
          $_SESSION['user_id'] = $row['dh_register_user_id'];
          $_SESSION['DV_id'] = $row['DV_id'];
          $_SESSION['email'] = $row['user_email'];
          ?>
          <script type="text/javascript">
            window.location = "../admin/voter/department_head.php";
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
        $x = $row['user_password'];
        $a = base64_decode($x);
        $y = $_POST['user_password'];

        if ($a==$y)
         {
          $_SESSION['user_id'] = $row['su_register_user_id'];
          $_SESSION['SD_id'] = $row['SD_id'];
          $_SESSION['email'] = $row['user_email'];
          ?>
          <script type="text/javascript">
            window.location = "../admin/voter/student_union.php";
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
   SELECT * FROM candidate
    WHERE Cemail = :user_email
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
        $x = $row['user_password'];
        $a = base64_decode($x);
        $y = $_POST['user_password'];

        if ($a==$y)
         {
          $_SESSION['Cid'] = $row['Cid'];
          $_SESSION['email'] = $row['Cemail'];
          ?>
          <script type="text/javascript">
            window.location = "../admin/Ncandidate/view_candidate.php";
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
   SELECT * FROM up
    WHERE Pemail = :user_email
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
          $_SESSION['Pid'] = $row['Pid'];
          $_SESSION['email'] = $row['Pemail'];
          ?>
          <script type="text/javascript">
            window.location = "../admin/Ucandidate/view_candidate.php";
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
   SELECT * FROM cd
    WHERE Cemail = :user_email
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
          $_SESSION['CDid'] = $row['CDid'];
          $_SESSION['email'] = $row['Cemail'];
          ?>
          <script type="text/javascript">
            window.location = "../admin/Ccandidate/view_candidate.php";
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
   SELECT * FROM dh
    WHERE Demail = :user_email
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
          $_SESSION['Did'] = $row['Did'];
          $_SESSION['email'] = $row['Demail'];
          ?>
          <script type="text/javascript">
            window.location = "../admin/Dcandidate/view_candidate.php";
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
   SELECT * FROM su
    WHERE Semail = :user_email
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
      //$x = $row['user_password'];
        //$y = base64_decode($x);
        if (password_verify($_POST['user_password'], $row['user_password']))
         {
          $_SESSION['Sid'] = $row['Sid'];
          $_SESSION['Semail'] = $row['Semail'];
          ?>
          <script type="text/javascript">
            window.location = "../admin/SUcandidate/view_candidate.php";
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
        $_SESSION['email'] = $row['email'];
        ?>
        <script type="text/javascript">
          window.location="../admin/admin/check_voter_list.php";
        </script>
        <?php
      }elseif ($_SESSION["type"]=="eb") {
        $_SESSION['Uid'] = $row['Uid'];
        $_SESSION['email'] = $row['email'];
        ?>
        <script type="text/javascript">
          window.location="../admin/election_board/announce_result.php";
        </script>
        <?php
      }
      if ($_SESSION["type"]=="hr") {
        $_SESSION['Uid'] = $row['Uid'];
        $_SESSION['email'] = $row['email'];
        ?>
        <script type="text/javascript">
          window.location="../admin/Hr/university_data.php";
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
                  <h4>Sign in to start your session</h4>
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
      <div class="form-group has-feedback">
        <input type="password" name="user_password" class="form-control" placeholder="Password" data-parsley-type=number required="">
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
        <div class="col-xs-6">
          <button type="reset" class="btn btn-danger">Cancel</button>
        </div>
        <div class="col-xs-6">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="login" class="btn btn-info">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
              <p class="m-b-0 m-t">Click here to <a href="forgote_password.php">Forgot Password</a>.</p>
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
