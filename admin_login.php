 <?php
  include "header.php";
 ?>
<?php
if(isset($_POST["login"])){
  $username=$_POST["username"];
  $password=$_POST["password"];

 $sql=mysqli_query($link,"select * from users where username='$_POST[username]' && password='$_POST[password]'");
   while ($row=mysqli_fetch_array($sql)) {

    $db_username=$row["username"];
    $db_password=$row["password"];
    $db_type=$row["type"];

    if ($username==$db_username && $password==$db_password) {
      $_SESSION["username"]=$db_username;
      $_SESSION["type"]=$db_type;

      if ($_SESSION["type"]=="admin") {
        $_SESSION['username'] = $row['username'];
        ?>
        <script type="text/javascript">
          window.location="admin/admin/check_voter_list.php";
        </script>
        <?php
      }elseif ($_SESSION["type"]=="eb") {
        $_SESSION['username'] = $row['username'];
        ?>
        <script type="text/javascript">
          window.location="admin/election_board/announce_result.php";
        </script>
        <?php
      }
      if ($_SESSION["type"]=="hr") {
        $_SESSION['username'] = $row['username'];
        ?>
        <script type="text/javascript">
          window.location="admin/Hr/university_data.php";
        </script>
        <?php
      }elseif ($_SESSION["type"]=="eb") {
        $_SESSION['username'] = $row['username'];
        ?>
        <script type="text/javascript">
          window.location="admin/election_board/announce_result.php";
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <h1>
       <center><i><!--h1>Customized Voting System For Ethiopia</h1--></i></center>
      </h1>
      <ol class="breadcrumb">
        <li><a href="check_voter_list.php"> <i class="fa fa-dashboard"> </i><strong><?php echo lback_home; ?> </strong></a> </li>
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
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <div class="panel panel-default">
     <div class="panel-heading"><h4>Sign in to start your session</h4></div>
     <div class="panel-body">

    <form name="vform" action="admin_login.php" method="post" onsubmit="return Validate()">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <div id="username_error" class="val_error"></div>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <div id="pass_error" class="val_error"></div>
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
          <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
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
