 <?php
  include "header.php";
 ?>
 <?php
$message='';
if (isset($_POST['submit'])) {
  $count=0;
  $sql = mysqli_query($link, "select * from import_college_data where CV_id = '$_POST[CV_id]' && Cemail = '$_POST[Cemail]' && Mom_name = '$_POST[mname]' && bf = '$_POST[bf]'");
  $count =mysqli_num_rows($sql);
  if ($count==0) {
      ?>
      
      <script type="text/javascript">
        alert("noooooooo");
      </script>
      <?php
   }else{
    $_SESSION["CV_id"] = $_POST['CV_id'];
    $_SESSION["email"] = $_POST['Cemail'];
      ?>
      <script type="text/javascript">
        alert("successfully answerd");
      </script>
      <script type="text/javascript">
        window.location = "Cr.php";
      </script>
      
      <?php
    }
}
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <h1>
       <!--center><i><h1>Customized Voting System For Ethiopia</h1></i></center-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="check_voter_list.php"> <i class="fa fa-dashboard"> </i><strong><?php echo lback_home; ?> </strong></a> </li>
      </ol>
            <div class="row"><br><br>
        <div class="col-md-6">
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

        <div class="col-md-6">
          <div class="box box-default">
            <!-- /.box-header -->
            <div class="box-body">
              <div class="login-box">
                    <div class="login-logo">
                      <!--h3>Register here</h3-->
                    </div>
                    <!-- /.login-logo -->
                    <div class="login-box-body">
                    <div class="panel panel-default">
                    <div class="panel-heading"><h4>Answer the question to register</h4></div>
                    <div class="panel-body">
                      <form method="post">
                        
                        <div class="form-group">
                          <input type="text" name="CV_id" class="form-control" placeholder="Your ID">
                        </div>
                        <div class="form-group">
                          <input type="email" name="Cemail" class="form-control" placeholder="Your Email" dta-parsley-type="email" required="">
                        </div>
                        <div class="form-group">
                          <input type="text" name="mname" class="form-control" placeholder="Your Mother Name">
                        </div>
                        <div class="form-group">
                          <input type="text" name="bf" class="form-control" placeholder="Your Best Friend">
                        </div>
                        
                        <!--div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" placeholder="Password..." required />
                          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div><div class="form-group has-feedback">
                        <input type="password" name="cPassword" class="form-control" placeholder="Confirm Password..." required />
                          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div-->
                        <div class="row">
                          <div class="col-xs-8">
                            <div class="checkbox icheck">
                            </div>
                          </div>
                          <!-- /.col -->
                          <div class="col-xs-5">
                            <button type="reset" class="pull-left btn btn-danger">Cancel</button>
                          </div>
                          <br><div class="col-xs-6">
                            <button type="submit" name="submit" class="pull-right btn btn-primary">Rigister</button>
                          </div>
                          <!-- /.col -->
                        </div>
                      </form>
                      
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