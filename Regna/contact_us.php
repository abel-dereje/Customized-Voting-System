<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><h1>CVSE</h1><!--img src="img/logo.png" alt="" title="" /></img--></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="contact_us.php">Contact Us</a></li>
          <li><a href="#contact">View Information</a></li>
          <li><a href="#contact">View Result</a></li>
          <li><a href="#services">Help</a></li>
          <li class="menu-has-children"><a href="">View Candidate</a>
            <ul>
              <li><a href="national_view_candidate.php">National</a></li>
              <li><a href="#services">University President</a></li>
              <li><a href="#services">College Dean</a></li>
              <li><a href="#services">Deoartment Head</a></li>
              <li><a href="#services">Student Union</a></li>
            </ul>
          </li>
          <li class="menu-has-children"><a href="">View Result</a>
            <ul>
              <li><a href="national_view_result.php">National</a></li>
              <li><a href="#services">University President</a></li>
              <li><a href="#services">College Dean</a></li>
              <li><a href="#services">Deoartment Head</a></li>
              <li><a href="#services">Student Union</a></li>
            </ul>
          </li>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>Welcome to Regna</h1>
      <h2>We are team of talanted designers making websites with Bootstrap</h2>
      <a href="#about" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- #hero -->

  <main id="main">  
    <!--==========================
      Services Section

    ============================-->
    <?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"election");
?>
<section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Contact</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
      </div>

      <!--div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div-->

      <div class="container wow fadeInUp">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <?php 
                          $sql = "SELECT MC_id, email, address, phone, tele, postal from manage_contact";
                          $result = $link-> query($sql);

                          if ($result-> num_rows > 0) {
                            while ($row = $result-> fetch_assoc()) {
              ?>

              <div>
                <i class="fa fa-envelope"></i>&nbsp;
                 Email: &nbsp; 
                  <p><?php echo $row['email']; ?></p>
              </div><br>
              <div>
                <i class="fa fa-address-card-o"></i>&nbsp;
                 Address: &nbsp;
                  <p><?php echo $row['address']; ?></p>
              </div><br>
              <div>
                <i class="fa fa-mobile"></i>&nbsp;
                 Phone: &nbsp;
                    <p><?php echo $row['phone']; ?></p>
              </div><br>
              <div>
                <i class="fa fa-phone"></i>&nbsp;
                 Berau: &nbsp;
                    <p><?php echo $row['tele']; ?></p>
              </div><br>
              <div>
                <i class="fa fa-phone"></i>&nbsp;
                Postal: &nbsp;
                <p><?php echo $row['postal']; ?></p>
              </div>
              <?php }}?>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post"   enctype="multipart/form-data" id="validationform" data-parsley-validate="" novalidate="">

            <div class="box-body">
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Your Name:" data-parsley-pattern="/^[A-Za-z]+$/" required="">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Your Email:" dta-parsley-type="email" required="">
              </div><div class="form-group">
                <input type="phone" class="form-control" name="phone" placeholder="Your Phone:" data-parsley-required required="">
              </div><div class="form-group">
                <input type="text" class="form-control" name="website" placeholder="Your Website starts from http://(Optional)" data-parsley-type="url" >
              </div>
              <div class="form-group">
                    <textarea id="compose-textarea" name="msg" class="form-control" style="height: 150px" data-parsley-required required=""></textarea>
              </div>
              <div class="box-footer">
                <div class="pull-right">
                  <button type="submit" name="submit" class="btn btn-info"><i class="fa fa-envelope-o"></i> Send</button>
                </div>
                <button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> Cancel</button>
              </div>
            </div>
            <!-- /.box-body -->
              
            <?php
            
            $link=mysqli_connect("localhost","root","");
            mysqli_select_db($link,"election");

            $mysqli = new mysqli('localhost', 'root', '', 'election') or die(mysqli_error($mysqli));

              if (isset($_POST['submit'])) {
                $name = $_POST['name']; 
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $website = $_POST['website'];
                $msg = $_POST['msg'];
                mysqli_query($link,"insert into contact_us values('','$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[website]','$_POST[msg]')"); 
                ?>
                  <script type="text/javascript">
                    window.alert("Thank you for yor message. Yor message has been sent.")
                  </script>
                <?php   
              }
            ?>
          </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->
<!-- #services -->
  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Regna</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
        Bootstrap Templates by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  

</body>
</html>
<?php
include 'footer.php';
?>