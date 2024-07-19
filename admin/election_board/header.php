<?php
include "../../define_lang.php";
include "connction.php";
include '../../session.php';
//session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Election Board page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../parsley/stylee.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="check_voter_list.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b><?php echo ladmin; ?></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><?php echo ladmin; ?></b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <ul class="dropdown-menu">
                <!-- inner menu: contains the actual data --> 
              </li>
            </ul>
          </li>
          <li class="dropdown tasks-menu">
            <ul class="dropdown-menu">
                <ul class="menu">
                </ul>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <li><a href="edit_profile.php"><i class="fa fa-user"></i><?php echo ledit_profile;?></a></li>
              <li><a href="../voter/logout.php"><i class= "fa fa-sign-out"></i><?php echo lsign_out;?> </a></li>
            </a>
            <ul class="dropdown-menu">
              <!-- Menu Footer-->
              <!--li class="user-footer">
                <div class="pull-right">
                   <a href="#"><i class= "fa fa-language"></i>English </a>&nbsp;
                  <a href="#"><i class= "fa fa-language"></i>Amaharic </a>&nbsp;
                </div>
              </li-->
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../eb.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="<?php echo lsearch; ?>">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list" ></i> <span><?php echo lcheck_voterlist; ?></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="check_voter_list.php"><i class=""></i> <strong><?php echo lnational;?>
            </strong></a></li><br>
            <li><a href="check_university_voter.php"><i class=""></i> <strong><?php echo luniversity;?></strong></a></li><br>
            <li><a href="check_college_voter.php"><i class=""></i> <strong><?php echo lcd; ?></strong></a></li><br>
            <li><a href="check_dep_voter.php"><i class=""></i> <strong><?php echo ldh; ?></strong></a></li><br>
            <li><a href="check_student_data.php"><i class=""></i> <strong><?php echo lsu; ?></strong></a></li>
          </ul>
        </li><br>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-plus"></i> <span><?php echo lmanage_candidate;?></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="manage_candidate.php"><i class=""></i> <strong><?php echo lnational;?>
          </strong></a></li><br>
            <li><a href="UP.php"><i class=""></i> <strong><?php echo luniversity;?></strong></a></li><br>
            <li><a href="CD_candidate.php"><i class=""></i> <strong><?php echo lcd; ?></strong></a></li><br>
            <li><a href="DH_candidate.php"><i class=""></i> <strong><?php echo ldh; ?></strong></a></li><br>
            <li><a href="SU_candidate.php"><i class=""></i> <strong><?php echo lsu; ?></strong></a></li><br>
          </ul>
        </li>
        <!--li class="treeview">
          <a href="#">
            <i class="fa fa-file-excel-o" ></i> <span>Import Voter Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="import_data.php"><i class=""></i> <strong>National Data</strong></a></li><br>
            <li><a href="university_data.php"><i class=""></i> <strong>University Data</strong></a></li><br>
            <li><a href="dean_data.php"><i class=""></i> <strong>College Data</strong></a></li><br>
            <li><a href="dep_data.php"><i class=""></i> <strong>Department Data</strong></a></li><br>
            <li><a href="student_data.php"><i class=""></i> <strong>Student Data</strong></a></li>
          </ul>
        </li--><br>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-reply-all" ></i> <span><?php echo lannounce_result; ?></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="announce_result.php"><i class=""></i> <strong><?php echo lnational;?>
          </strong></a></li><br>
            <li><a href="UP_result.php"><i class=""></i> <strong><?php echo luniversity;?></strong></a></li><br>
            <li><a href="CD_result.php"><i class=""></i> <strong><?php echo lcd;?></strong></a></li><br>
            <li><a href="DH_result.php"><i class=""></i> <strong><?php echo ldh;?></strong></a></li><br>
            <li><a href="SU_result.php"><i class=""></i> <strong><?php echo lsu;?></strong></a></li>
          </ul>
        </li><!--li class="treeview">
          <a href="#">
            <i class="fa fa-comments" ></i> <span>View Feedback</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="see_feedback.php"><i class=""></i> <strong>National Feedback</strong></a></li><br>
            <li><a href="#"><i class=""></i> <strong>University Feedback</strong></a></li><br>
            <li><a href="#"><i class=""></i> <strong>College Feedback</strong></a></li><br>
            <li><a href="#"><i class=""></i> <strong>Department Feedback</strong></a></li><br>
            <li><a href="#"><i class=""></i> <strong>Student Feedback</strong></a></li>
          </ul-->
        </li>
          <a href="#">
            <!--i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
            <li class="active"><a href="check_voter_list.php"><i class="fa fa-list"></i> <strong><?php //echo lcheck_voterlist; ?></strong></a></li><br>
            <li><a href="import_data.php"><i class="fa fa-file-excel-o"></i> <strong><?php //echo limport_data; ?></strong></a></li><br>
            <li><a href="see_feedback.php"><i class="fa fa-comments"></i> <strong><?php //echo lsee_feedback; ?></strong></a></li><br
            <li><a href="post_info.php"><i class="fa fa-file-text-o"></i> <strong><?php echo lpost_info; ?></strong></a></li><br-->
            <!--li><a href="announce_result.php"><i class="fa fa-reply-all"></i> <strong><?php //echo lannounce_result; ?></strong></a></li><br
            <li><a href="manage_contact.php"><i class="fa fa-contao"></i> <strong>Manage Contact</strong></a></li-->
            <li><a href="see_feedback.php"><i class="fa fa-comments"></i> <strong><?php echo lsee_feedback;?></strong></a></li><br>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      </ul>
    </section>
  </aside>