<?php 
include "../define_lang.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Voting Home Page</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero"><?php echo lhome; ?></a></li>
          <li><a href="#about"><?php echo labout_us; ?></a></li>        
            <li class="menu-has-children"><a href=""><?php echo lview; ?></a>
            <ul>
              <li class="menu-has-children"><a href=""><?php echo lviewonline; ?></a>
                <ul>
                  <li><a href="#facts"><?php echo lnational; ?></a></li>
                  <li><a href="#facts2"><?php echo luniversity; ?></a></li>
                  <li><a href="#facts3"><?php echo lcd; ?></a></li>
                  <li><a href="#facts4"><?php echo ldh; ?></a></li>
                  <li><a href="#facts5"><?php echo lsu; ?></a></li>
                </ul>
            </li>
            <li class="menu-has-children"><a href=""><?php echo lview_result; ;?></a>
                <ul>
                  <li><a href="#services"><?php echo lnational; ?></a></li>
                  <li><a href="#services2"><?php echo luniversity; ?></a></li>
                  <li><a href="#services3"><?php echo lcd; ?></a></li>
                  <li><a href="#services4"><?php echo ldh; ?></a></li>
                  <li><a href="#services5"><?php echo lsu; ?></a></li>
                </ul>
            </li>
            <li class="menu-has-children"><a href=""><?php echo lview_candidate; ?></a>
            <ul>
                  <li><a href="#view_candidate_national"><?php echo lnational; ?></a></li>
                  <li><a href="#view_candidate"><?php echo luniversity; ?></a></li>
                  <li><a href="#view_cd"><?php echo lcd; ?></a></li>
                  <li><a href="#view_dh"><?php echo ldh; ?></a></li>
                  <li><a href="#view_su"><?php echo lsu; ?></a></li>
            </ul>
          </li>
          <li><a href="#view_information"><?php echo lview_report; ?></a></li>
            </ul>
          </li>
          </li>
          <li><a href="#contact"><?php echo lcontact_us; ?></a></li>
          <li><a href="../Flexor/TCPDF-master/examples/example_001.php"><?php echo lhelp; ?></a></li>
              <li class="menu-has-children"><a href=""><?php echo lregister; ?></a>
                <ul>
                  <li><a href="../Flexor/Qnational.php"><?php echo lnational; ?></a></li>
                  <li><a href="../Flexor/Qup.php"><?php echo luniversity; ?></a></li>
                  <li><a href="../Flexor/Qcollege.php"><?php echo lcd; ?></a></li>
                  <li><a href="../Flexor/Qdep.php"><?php echo ldh; ?></a></li>
                  <li><a href="../Flexor/QSU.php"><?php echo lsu; ?></a></li>
                </ul>
            </li>
            <li class="menu-has-children"><a href=""><?php echo llanguage; ?></a>
                <ul>
                  <li><a href="../change_lang.php?lang=1">English</a></li>
                  <li><a href="../change_lang.php?lang=2">አማርኛ</a></li>
                </ul>
          </li>

            <li><a href="../Flexor/login.php"><?php echo llogin; ?></a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1><?php echo lwelcom; ?></h1>
      <h2><?php echo lcustom; ?></h2>
      <a href="../Flexor/login.php" class="btn-get-started"><?php echo lget; ?></a>
    </div>
  </section><!-- #hero -->

  <main id="main">
    
    <!--==========================
      About Us Section
    ============================-->
     <?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"election");
?>

    <section id="about">
      <div class="container">
        <div class="row about-container">
                       <?php 
                          $sql = "SELECT about_id, title, mission, vission, value, image from manage_about_us";
                          $result = $link-> query($sql);

                          if ($result-> num_rows > 0) {
                            while ($row = $result-> fetch_assoc()) {
                        ?>
          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title"><?php echo $row['title']; ?></h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Mission</a></h4>
              <p class="description"><?php echo $row['mission']; ?>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="">Vission</a></h4>
              <p class="description"><?php echo $row['vission']; ?>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Value</a></h4>
              <p class="description"><?php echo $row['value']; ?>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>

          </div>

          <div class="col-lg-6 order-lg-2 order-1 wow fadeInRight">
            
                <div class="form-group">
                  <img class="align-self-center rounded-square mr-3" style="width:600px; height:425px;" src="../admin/admin/<?php echo $row['image'] ?>">
                </div>
          </div>
        <?php }}?>
        </div>

      </div>
    </section><!-- #about -->
 <?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"election");
?>

    <section id="view_candidate">
      <div class="container">
        <div class="row about-container">
                       <?php 
                          $sql = "SELECT Pname, Pemail, Pphone, Paddress, Pdisc, image from up";
                          $result = $link-> query($sql);

                          if ($result-> num_rows > 0) {
                            while ($row = $result-> fetch_assoc()) {
                        ?>
          <div class="col-lg-6 content order-lg-1 order-2">
            <h3>For University President</h3>
            <h3 class="title"><?php echo $row['Pname']; ?></h3>
            <div class="col-lg-6 order-lg-2 order-1 wow fadeInRight">
            
                <div class="form-group">
                  <img class="align-self-center rounded-circle mr-3" style="width:100px; height:65px;" src="../admin/admin/<?php echo $row['image'] ?>">
              </div>
          </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-address-card"></i></div>
              <h4 class="title"><a href="">Discription</a></h4>
              <p class="description"><?php echo $row['Pdisc']; ?></p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-address-card-o"></i></div>
              <h4 class="title"><a href="">Address</a></h4>
              <p class="description"><?php echo $row['Paddress']; ?></p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-envelope"></i></div>
              <h4 class="title"><a href="">Email and Phone</a></h4>
              <p class="description"><?php echo $row['Pemail']; ?></p>
            </div>

          </div>

          
        <?php }}?>
        </div>

      </div>
    </section>

<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"election");
?>

    <section id="view_candidate_national">
      <div class="container">
        <div class="row about-container">
                       <?php 
                          $sql = "SELECT Cname, Cemail, Cphone, Cadress, Cdescription, image from candidate";
                          $result = $link-> query($sql);

                          if ($result-> num_rows > 0) {
                            while ($row = $result-> fetch_assoc()) {
                        ?>
          <div class="col-lg-6 content order-lg-1 order-2">
            <h3>For national</h3>
            <h3 class="title"><?php echo $row['Cname']; ?></h3>
            <div class="col-lg-6 order-lg-2 order-1 wow fadeInRight">
            
                <div class="form-group">
                  <img class="align-self-center rounded-circle mr-3" style="width:100px; height:65px;" src="../admin/admin/<?php echo $row['image'] ?>">
              </div>
          </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-address-card"></i></div>
              <h4 class="title"><a href="">Discription</a></h4>
              <p class="description"><?php echo $row['Cdescription']; ?></p>
            </div>
            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-address-card-o"></i></div>
              <h4 class="title"><a href="">Address</a></h4>
              <p class="description"><?php echo $row['Cadress']; ?></p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-envelope"></i></div>
              <h4 class="title"><a href="">Email and Phone</a></h4>
              <p class="description"><?php echo $row['Cemail']; ?></p>
            </div>

          </div>

          
        <?php }}?>
        </div>

      </div>
    </section>

    <?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"election");
?>

    <section id="view_cd">
      <div class="container">
        <div class="row about-container">
                       <?php 
                          $sql = "SELECT Cname, Cemail, Cphone, Caddress, image from cd";
                          $result = $link-> query($sql);

                          if ($result-> num_rows > 0) {
                            while ($row = $result-> fetch_assoc()) {
                        ?>
          <div class="col-lg-6 content order-lg-1 order-2">
            <h3>For collge dean</h3>
            <h3 class="title"><?php echo $row['Cname']; ?></h3>
            <div class="col-lg-6 order-lg-2 order-1 wow fadeInRight">
            
                <div class="form-group">
                  <img class="align-self-center rounded-circle mr-3" style="width:100px; height:65px;" src="../admin/admin/<?php echo $row['image'] ?>">
              </div>
          </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-address-card-o"></i></div>
              <h4 class="title"><a href="">Address</a></h4>
              <p class="description"><?php echo $row['Caddress']; ?></p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-envelope"></i></div>
              <h4 class="title"><a href="">Email and Phone</a></h4>
              <p class="description"><?php echo $row['Cemail']; ?></p>
            </div>

          </div>

          
        <?php }}?>
        </div>

      </div>
    </section>

    <?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"election");
?>

    <section id="view_dh">
      <div class="container">
        <div class="row about-container">
                       <?php 
                          $sql = "SELECT Dname, Demail, Dphone, Daddress, image from dh";
                          $result = $link-> query($sql);

                          if ($result-> num_rows > 0) {
                            while ($row = $result-> fetch_assoc()) {
                        ?>
          <div class="col-lg-6 content order-lg-1 order-2">
            <h3>For Department head</h3>
            <h3 class="title"><?php echo $row['Dname']; ?></h3>
            <div class="col-lg-6 order-lg-2 order-1 wow fadeInRight">
            
                <div class="form-group">
                  <img class="align-self-center rounded-circle mr-3" style="width:100px; height:65px;" src="../admin/admin/<?php echo $row['image'] ?>">
              </div>
          </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-address-card-o"></i></div>
              <h4 class="title"><a href="">Address</a></h4>
              <p class="description"><?php echo $row['Daddress']; ?></p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-envelope"></i></div>
              <h4 class="title"><a href="">Email and Phone</a></h4>
              <p class="description"><?php echo $row['Demail']; ?></p>
            </div>

          </div>

          
        <?php }}?>
        </div>

      </div>
    </section>
    <?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"election");
?>

    <section id="view_su">
      <div class="container">
        <div class="row about-container">
                       <?php 
                          $sql = "SELECT Sname, Semail, Sphone, Syear, Saddress, image from su";
                          $result = $link-> query($sql);

                          if ($result-> num_rows > 0) {
                            while ($row = $result-> fetch_assoc()) {
                        ?>
          <div class="col-lg-6 content order-lg-1 order-2">
            <h3>For Student union</h3>
            <h3 class="title"><?php echo $row['Sname']; ?></h3>
            <div class="col-lg-6 order-lg-2 order-1 wow fadeInRight">
            
                <div class="form-group">
                  <img class="align-self-center rounded-circle mr-3" style="width:100px; height:65px;" src="../admin/admin/<?php echo $row['image'] ?>">
              </div>
          </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-address-card-o"></i></div>
              <h4 class="title"><a href="">Address</a></h4>
              <p class="description"><?php echo $row['Saddress']; ?></p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-envelope"></i></div>
              <h4 class="title"><a href="">Email and Phone</a></h4>
              <p class="description"><?php echo $row['Semail']; ?></p>
            </div>

          </div>

          
        <?php }}?>
        </div>

      </div>
    </section>
     <?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"election");
?>
    <section id="view_information">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">View Information</h3>
          <p class="section-description">You can here updated information </p>
        </div>
        <div class="row">
                      <table class="table">
                    <thead>
                      <tr>
                        <th>Start Time&nbsp;&nbsp;</th>
                        <th>End Time&nbsp;</th>
                        <th>Start Date&nbsp;</th>
                        <th>End Date&nbsp;</th>
                        <th>Information</th>
                      </tr>
                    </thead>
                    <?php 
                          $sql = "SELECT Pid, Stime, Etime, Sdate, Edate, txt from post_info";
                          $result = $link-> query($sql);

                          if ($result-> num_rows > 0) {
                            while ($row = $result-> fetch_assoc()) {
                              ?>
                                <tr>
                                  <td><?php echo $row['Stime']; ?></td>
                                  <td><?php echo $row['Etime']; ?></td>
                                  <td><?php echo $row['Sdate']; ?></td>
                                  <td><?php echo $row['Edate']; ?></td>
                                  <td><?php echo $row['txt']; ?></td>
                                </tr>
                              <?php }}?>
                            </table> 
            </div>
          </div>
        </div>
      </div>
    </section><!-- #services -->
    <!--==========================
      Facts Section
    ============================-->
    <section id="facts">
      <?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"election");
?>
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Check your vote</h3>
          <p class="section-description">This is the votes of national voting</p>
        </div>
        <div class="row counters">
<?php
                        
                        $res=mysqli_query($link,"select * from candidate");
                        while($row=mysqli_fetch_array($res))
                            {   
                              $vv = $row['vote'];
                          $x = base64_decode($vv);
                        ?>
          <div class="col-lg-3 col-6 text-center">
            <img class="align-self-center rounded-circle mr-3" style="width:150px; height:70px;" src="../admin/admin/<?php echo $row['image'] ?>"> 
            <span data-toggle="counter-up"><?php echo $x; ?></span>
            <p>Votes</p>
          </div>
<?php } ?>
        

        </div>

      </div>
    </section><!-- #facts -->
    <section id="facts2">
      <?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"election");
?>
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Check your vote</h3>
          <p class="section-description">This is the votes of university president voting</p>
        </div>
        <div class="row counters">
<?php
                        
                        $res=mysqli_query($link,"select * from up");
                        while($row=mysqli_fetch_array($res))
                            {   
                              $vv = $row['vote'];
                          $x = base64_decode($vv);
                        ?>
          <div class="col-lg-3 col-6 text-center">
            <img class="align-self-center rounded-circle mr-3" style="width:150px; height:70px;" src="../admin/admin/<?php echo $row['image'] ?>"> 
            <span data-toggle="counter-up"><?php echo $x; ?></span>
            <p>Votes</p>
          </div>
<?php } ?>
        

        </div>

      </div>
    </section>
    <section id="facts3">
      <?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"election");
?>
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Check your vote</h3>
          <p class="section-description">This is the votes of college dean voting</p>
        </div>
        <div class="row counters">
<?php
                        
                        $res=mysqli_query($link,"select * from cd");
                        while($row=mysqli_fetch_array($res))
                            {   
                              $vv = $row['vote'];
                          $x = base64_decode($vv);
                        ?>
          <div class="col-lg-3 col-6 text-center">
            <img class="align-self-center rounded-circle mr-3" style="width:150px; height:70px;" src="../admin/admin/<?php echo $row['image'] ?>"> 
            <span data-toggle="counter-up"><?php echo $x; ?></span>
            <p>Votes</p>
          </div>
<?php } ?>
        

        </div>

      </div>
    </section>
    <section id="facts4">
      <?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"election");
?>
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Check your vote</h3>
          <p class="section-description">This is the votes of department head voting</p>
        </div>
        <div class="row counters">
<?php
                        
                        $res=mysqli_query($link,"select * from dh");
                        while($row=mysqli_fetch_array($res))
                            {   
                              $vv = $row['vote'];
                          $x = base64_decode($vv);
                        ?>
          <div class="col-lg-3 col-6 text-center">
            <img class="align-self-center rounded-circle mr-3" style="width:150px; height:70px;" src="../admin/admin/<?php echo $row['image'] ?>"> 
            <span data-toggle="counter-up"><?php echo $x; ?></span>
            <p>Votes</p>
          </div>
<?php } ?>
        </div>
      </div>
    </section>
<section id="facts5">
      <?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"election");
?>
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Check your vote</h3>
          <p class="section-description">This is the votes of student union voting</p>
        </div>
        <div class="row counters">
<?php
                        
                        $res=mysqli_query($link,"select * from su");
                        while($row=mysqli_fetch_array($res))
                            {   
                              $vv = $row['vote'];
                          $x = base64_decode($vv);
                        ?>
          <div class="col-lg-3 col-6 text-center">
            <img class="align-self-center rounded-circle mr-3" style="width:150px; height:70px;" src="../admin/admin/<?php echo $row['image'] ?>"> 
            <span data-toggle="counter-up"><?php echo $x; ?></span>
            <p>Votes</p>
          </div>
<?php } ?>
        

        </div>

      </div>
    </section>
 <!--==========================
      Services Section
    ============================-->
    <?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"election");
?>
     

    <!--section id="View_national_candidate">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title"> For National Nominee</h3>
          <p class="section-description">You can see here the list of all candidate</p>
        </div>
        <div class="row">
          <?php
              //$res=mysqli_query($link, "select * from candidate");
                 //while($row=mysqli_fetch_array($res))
                  //{
          ?>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href=""><i class=""><img class="align-self-center rounded-circle mr-3" style="width:150px; height:70px;" src="../admin/admin/<?php //echo $row['image'] ?>"> <?php //echo $row['Cname']; ?> </i></a></div><br>
              <h4 class="title"><a href=""></a></h4>
              <p class="description"><?php //echo $row['Cdescription']; ?></p>
            </div>
          </div><?php //} ?>
        </div>
      </div>
    </section--><!-- #services -->
    <!--==========================
      Services Section

    ============================-->
    <?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"election");
?>
     

    <section id="services">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">For national result</h3>
          <p class="section-description">For national result</p>
        </div>
        <div class="row">
         <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.2s">
              <table class="table">
                    <thead>
                      <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Description</th>
                        <th>Vote</th>
                      </tr>
                    </thead>
                    <?php 
                          $sql = "SELECT image, Cname, Cemail, Cphone, Cadress, Cdescription, vote from candidate";
                          $result = $link-> query($sql);

                          if ($result-> num_rows > 0) {
                            while ($row = $result-> fetch_assoc()) {
                              $vv = $row['vote'];
                          $x = base64_decode($vv);
                              ?>
                                <tr>
                                  <td>
                                    <div class="form-group">
                                    <img class="align-self-center rounded-circle mr-3" style="width:60px; height:35px;" src="../admin/admin/<?php echo $row['image'] ?>">
                                    </div></td>
                                  <td><?php echo $row['Cname']; ?></td>
                                  <td><?php echo $row['Cemail']; ?></td>
                                  <td><?php echo $row['Cphone']; ?></td>
                                  <td><?php echo $row['Cadress']; ?></td>
                                  <td><?php echo $row['Cdescription']; ?></td>
                                  <td><?php echo $x; ?></td>
                                </tr>
                              <?php }}?>
                            </table> 
          </div>
        </div>
      </div>
    </section>
 <?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"election");
?>
    <section id="services2">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">For university president result</h3>
          <p class="section-description">For university president result</p>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.2s">
              <table class="table">
                    <thead>
                      <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Description</th>
                        <th>Vote</th>
                      </tr>
                    </thead>
                    <?php 
                          $sql = "SELECT image, Pname, Pemail, Paddress, Pdisc, vote from up";
                          $result = $link-> query($sql);

                          if ($result-> num_rows > 0) {
                            while ($row = $result-> fetch_assoc()) {
                              $vv = $row['vote'];
                          $x = base64_decode($vv);
                              ?>
                                <tr>
                                  <td>
                                    <div class="form-group">
                                    <img class="align-self-center rounded-circle mr-3" style="width:60px; height:35px;" src="../admin/admin/<?php echo $row['image'] ?>">
                                    </div></td>
                                  <td><?php echo $row['Pname']; ?></td>
                                  <td><?php echo $row['Pemail']; ?></td>
                                  <td><?php echo $row['Paddress']; ?></td>
                                  <td><?php echo $row['Pdisc']; ?></td>
                                  <td><?php echo $x; ?></td>
                                </tr>
                              <?php }}?>
                            </table> 
          </div>
        </div>
      </div>
    </section>
     <?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"election");
?>
     

    <section id="services3">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">For college result</h3>
          <p class="section-description">For college result</p>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.2s">
              <table class="table">
                    <thead>
                      <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Vote</th>
                      </tr>
                    </thead>
                    <?php 
                          $sql = "SELECT image, Cname, Cemail, Cphone, Caddress, vote from cd";
                          $result = $link-> query($sql);
                          if ($result-> num_rows > 0) {
                            while ($row = $result-> fetch_assoc()) {
                              $vv = $row['vote'];
                          $x = base64_decode($vv);
                              ?>
                                <tr>
                                  <td>
                                    <div class="form-group">
                                    <img class="align-self-center rounded-circle mr-3" style="width:60px; height:35px;" src="../admin/admin/<?php echo $row['image'] ?>">
                                    </div></td>
                                  <td><?php echo $row['Cname']; ?></td>
                                  <td><?php echo $row['Cemail']; ?></td>
                                  <td><?php echo $row['Cphone']; ?></td>
                                  <td><?php echo $row['Caddress']; ?></td>
                                  <td><?php echo $x; ?></td>
                                </tr>
                              <?php }}?>
                            </table> 
          </div>
        </div>
      </div>
    </section>

         <?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"election");
?>
     

    <section id="services4">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">For Department Head result</h3>
          <p class="section-description">For Department Head result</p>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.2s">
              <table class="table">
                    <thead>
                      <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Vote</th>
                      </tr>
                    </thead>
                    <?php 
                          $sql = "SELECT image, Dname, Demail, Dphone, Daddress, vote from dh";
                          $result = $link-> query($sql);
                          if ($result-> num_rows > 0) {
                            while ($row = $result-> fetch_assoc()) {
                              $vv = $row['vote'];
                          $x = base64_decode($vv);
                              ?>
                                <tr>
                                  <td>
                                    <div class="form-group">
                                    <img class="align-self-center rounded-circle mr-3" style="width:60px; height:35px;" src="../admin/admin/<?php echo $row['image'] ?>">
                                    </div></td>
                                  <td><?php echo $row['Dname']; ?></td>
                                  <td><?php echo $row['Demail']; ?></td>
                                  <td><?php echo $row['Dphone']; ?></td>
                                  <td><?php echo $row['Daddress']; ?></td>
                                  <td><?php echo $x; ?></td>
                                </tr>
                              <?php }}?>
                            </table> 
          </div>
        </div>
      </div>
    </section>

         <?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"election");
?>
     

    <section id="services5">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">For Student union result</h3>
          <p class="section-description">For Student union result</p>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.2s">
              <table class="table">
                    <thead>
                      <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Year</th>
                        <th>Address</th>
                        <th>Vote</th>
                      </tr>
                    </thead>
                    <?php 
                          $sql = "SELECT image, Sname, Semail, Sphone, Syear, Saddress, vote from su";
                          $result = $link-> query($sql);
                          if ($result-> num_rows > 0) {
                            while ($row = $result-> fetch_assoc()) {
                              $vv = $row['vote'];
                          $x = base64_decode($vv);
                              ?>
                                <tr>
                                  <td>
                                    <div class="form-group">
                                    <img class="align-self-center rounded-circle mr-3" style="width:60px; height:35px;" src="../admin/admin/<?php echo $row['image'] ?>">
                                    </div></td>
                                  <td><?php echo $row['Sname']; ?></td>
                                  <td><?php echo $row['Semail']; ?></td>
                                  <td><?php echo $row['Sphone']; ?></td>
                                  <td><?php echo $row['Syear']; ?></td>
                                  <td><?php echo $row['Saddress']; ?></td>
                                  <td><?php echo $x; ?></td>
                                </tr>
                              <?php }}?>
                            </table> 
          </div>
        </div>
      </div>
    </section>

    <!-- #services -->
    <!--==========================
    Call To Action Section
    ============================-->
    <!--section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Call To Action</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section--><!-- #call-to-action -->

    <!--==========================
      Portfolio Section
    ============================-->
    <!--section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Portfolio</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
        <div class="row">

          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-logo">Logo</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row" id="portfolio-wrapper">
          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="img/portfolio/app1.jpg" alt="">
              <div class="details">
                <h4>App 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/portfolio/web2.jpg" alt="">
              <div class="details">
                <h4>Web 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="img/portfolio/app3.jpg" alt="">
              <div class="details">
                <h4>App 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="img/portfolio/card1.jpg" alt="">
              <div class="details">
                <h4>Card 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="img/portfolio/card2.jpg" alt="">
              <div class="details">
                <h4>Card 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/portfolio/web3.jpg" alt="">
              <div class="details">
                <h4>Web 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="img/portfolio/card3.jpg" alt="">
              <div class="details">
                <h4>Card 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="img/portfolio/app2.jpg" alt="">
              <div class="details">
                <h4>App 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="img/portfolio/logo1.jpg" alt="">
              <div class="details">
                <h4>Logo 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="img/portfolio/logo3.jpg" alt="">
              <div class="details">
                <h4>Logo 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/portfolio/web1.jpg" alt="">
              <div class="details">
                <h4>Web 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="img/portfolio/logo2.jpg" alt="">
              <div class="details">
                <h4>Logo 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

        </div>

      </div>
    </section--><!-- #portfolio -->

    <!--==========================
      Team Section
    ============================-->
    <!--section id="team">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Team</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-1.jpg" alt=""></div>
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-2.jpg" alt=""></div>
              <h4>Sarah Jhinson</h4>
              <span>Product Manager</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-3.jpg" alt=""></div>
              <h4>William Anderson</h4>
              <span>CTO</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-4.jpg" alt=""></div>
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section--><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <!--section id="hero">
    <div class="hero-container">
      <h1>Welcome to Regna</h1>
      <h2>We are team of talanted designers making websites with Bootstrap</h2>
      <a href="#about" class="btn-get-started">Get Started</a>
    </div>
  </section--><!-- #hero -->

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
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
