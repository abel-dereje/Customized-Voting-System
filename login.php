
 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
   <style>
        
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>
 </head>
 <body>
 
 </body>
 </html>
 <?php
  include "header.php";
  include "db_connection_pdo.php";
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
            window.location = "admin/voter/national_voting.php";
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
  <!-- Left side column. contains the logo and sidebar -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <h1>
       <center><i><!--h1>Customized Voting System For Ethiopia</h1--></i></center>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"> <i class="fa fa-dashboard"> </i><strong><?php echo lback_home; ?> </strong></a> </li>
      </ol>
            <div class="row">
        <div class="col-md-6"><br><br>
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Home</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="alert alert-white alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                  <img src="admin/image/logoo.png" width="500px" height="400px">
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-6"><br><br>
          <div class="box box-default">
            <!-- /.box-header -->
            <div class="box-body">
              <div class="login-box">
  <div class="login-logo">
    <!--img src="admin/image/login.jpg" width="150px" height="90px"-->
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <div class="panel panel-default">
     <div class="panel-heading"><h4>Sign in to start your session</h4></div>
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
    </form><br>
    <a href="#">I forgot my password</a><br>
    <!--a href="register.php" class="text-center">Register here</a-->
<?php include "modals_login.php"; ?>
      <div class="row">
        <div class="col-xs-12"><br>
              <button type="button" class="form-control btn btn-block btn-info" data-toggle="modal" data-target="#modal-default">
                Register here
              </button><!--a href="register.php" class="text-center">Register here</a-->
        </div><br>
      </div>
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">You have to answer the question to register</h4>
              </div>
              <div class="modal-body">
                <!--p>One fine body&hellip;</p-->
                <form method="post">
                  <div class="row justify-content-center">  
                        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                          <ul class="nav navbar-nav">
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><label class="form-group">You want to vote to? </label><span class="caret"></span></a>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="Qnational.php">National vote</a></li>
                                <li><a href="Qup.php"> University President vote</a></li>
                                <li><a href="Qcd.php"> College Dean vote</a></li>
                                <li><a href="Qdh.php"> Department Head vote</a></li>
                                <li><a href="Qsu.php"> Student Union vote</a></li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                    </div>
                  <!--div class="form-group">
                    <input type="text" name="id" class="form-control" placeholder="Your ID">
                  </div>
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Your Name">
                  </div>
                  <div class="form-group">
                    <input type="text" name="mname" class="form-control" placeholder="Your Mother Name">
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" name="Save" class="btn btn-primary">Save changes</button>
              </div-->
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->     
  </div>
  <!-- /.login-box-body -->
</div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>
  </div>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>        
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>
            </a>
          </li>
        </ul>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
      </div>
  </aside>
  <footer class="main-footer">
  <div class="pull-right hidden-xs">
    </div>
    <strong><?php echo lcopy_right;?></strong>
  </footer>
</div>

<?php
include "footer.php";
?>
