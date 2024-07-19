 <?php
  include "header.php";
 ?>
  <!-- Left side column. contains the logo and sidebar -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <h1>
       <!--center><i>Post information to the user</i></center-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="check_voter_list.php"> <i class="fa fa-dashboard"> </i><strong><?php echo lback_home; ?> </strong></a> </li>
      </ol>
    <section class="content">

      <!-- SELECT2 EXAMPLE --><br>
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Update your profile</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <div class="row justify-content-center">
                  <!--h4 class="box-title">        &nbsp; &nbsp;Information about election</h4-->  
          <?php
             // include "get_profile.php";
           ?>
      <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            
            <?php
                  $mysqli = new mysqli('localhost', 'root', '', 'election') or die($mysqli_error($mysqli));
                  if (isset($_POST['update'])){
                  $sql = mysqli_query($link,"select * from users where Uid = '$_SESSION[Uid]' ");
                  while ($row = mysqli_fetch_array($sql)) {
                    $password = $row['password'];
                    $oldpass= $_POST['password'];
                    $Npassword = $_POST['Npassword'];
                    $Rpassword = $_POST['Rpassword'];                 

                     if ($password == $oldpass) {
                       if ($Npassword == $Rpassword) {
                        

                         $mysqli->query("UPDATE users SET password = '$Rpassword' where Uid = '$_SESSION[Uid]'") or die($mysqli->error);

                       }else{?> 
                      <script type="text/javascript">
                       alert("New and Confirm password is not matched.");
                    </script>
                    <?php
                        //echo "dont match";
                       }
                       }
                     else
                     {?> 
                      <script type="text/javascript">
                       alert("Incorrect old password");
                    </script>
                    <?php
                      //echo "Incorrect old password";
                     }}
                     ?>
                     <script type="text/javascript">
                       alert("Record has been successfully updated");
                    </script>
                     <?php
                   }
                  ?>

                
                </div>
          <form action="" method="post"   enctype="multipart/form-data" id="validationform" data-parsley-validate="" novalidate="">

            <input type="hidden" name="Uid" value="<?php echo $IDCon; ?>">
            <div class="box-body">
              <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder=" Old password" value="<?php //echo $password; ?>" data-parsley-required required="">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="Npassword" placeholder=" New password" value="<?php //echo $Npassword; ?>" data-parsley-required required="">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="Rpassword" placeholder=" Confirm new password" value="<?php //echo $Rpassword; ?>" data-parsley-required required="">
              </div>
              <div class="box-footer">
                <div class="pull-left">          
                  <button type="submit" name="update" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                </div>
              </div>
            </div>
          </form>
          </div>
          <!-- /. box -->
        </div>                </div>
                </div>
              </div>
            </div>
        </div>
        <!-- /.box-body -->
        
    </section>
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