
   <?php
   include "connction.php";
   session_start();

$message='';
if (isset($_POST['submit'])) {
  $count=0;
  $sql = mysqli_query($link, "select * from check_student_data where SD_id = '$_POST[SD_id]' && Stuemail = '$_POST[Stuemail]' && Mom_name = '$_POST[mname]' && age = '$_POST[age]' && address = '$_POST[address]'");
  $count =mysqli_num_rows($sql);
  if ($count==0) {
      ?>      
      <script type="text/javascript">
        alert("You are not legibel. Please check again.");
      </script>
      <?php
   }else{
    $_SESSION["SD_id"] = $_POST['SD_id'];
    $_SESSION["email"] = $_POST['Stuemail'];
      ?>
      <script type="text/javascript">
        alert("You have successfully answered all the question");
      </script>
      <script type="text/javascript">
        window.location = "SU_register.php";
      </script>
      
      <?php
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Questions to register</title>
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
                  Answer the question to register
                </h3>
            </div>
            <div class="panel-body">
              <div class="panel-heading"><h4></h4></div>
                    <div class="panel-body">
                      <form action="" method="post"   enctype="multipart/form-data" id="validationform" data-parsley-validate="" novalidate="">

                             <?php echo $message; ?>
                          <div class="form-group">
                          <input type="text" name="SD_id" class="form-control" placeholder="Your ID" data-parsley-required required="">
                        </div>
                        <div class="form-group">
                          <input type="email" name="Stuemail" class="form-control" placeholder="Your Email" dta-parsley-type="email" required="">
                        </div>
                        <div class="form-group">
                          <input type="text" name="mname" class="form-control" placeholder="Your Mother Name" data-parsley-pattern="/^[A-Za-z]+$/" required="">
                        </div>
                        <div class="form-group">
                          <input type="text" name="age" class="form-control" placeholder="Your age" data-parsley-type=number required="">
                        </div><div class="form-group">
                          <input type="text" name="address" class="form-control" placeholder="Your Address" data-parsley-pattern="/^[A-Za-z]+$/" required="">
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
              <p class="m-b-0 m-t">Already signed up? <a href="login.php">Login here</a>.</p>
              <div class="credits">
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
