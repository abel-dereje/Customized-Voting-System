<?php
include "header.php";
?>
<?php
include "db_connection_pdo.php";

	$message = '';
	if (isset($_GET['up_activation_code'])) {
		$query = "
		SELECT * FROM up_register_user 
		WHERE user_activation_code = :user_activation_code
		";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				'user_activation_code'			=>	$_GET['up_activation_code']
			)
		);
		$no_of_row = $statement->rowCount();
		if ($no_of_row > 0) {
			$result = $statement->fetchAll();
			foreach ($result as $row) {
				if ($row['user_email_status'] == 'not verified') {
					$update_query = "
					UPDATE up_register_user 
					SET user_email_status = 'verified' 
					WHERE up_register_user_id = '".$row['up_register_user_id']."'
					";
					$statement = $connect->prepare($update_query);
					$statement->execute();
					$sub_result = $statement->fetchAll();
					if (isset($sub_result)) 
          {
						$message = '<label class="text-success">Email Address Successfully Verified <br> You can login here - <a href="login.php">Login</a></label';
					}
				}
				else
				{
					$message = '<label class="text-danger">Your Email Address Already Verified</label';
				}
			}
		}
		else{
			$message = '<label class="text-danger">Invalid Link</label';
		}
	}
?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <h1>
       <center><i><!--h1>Customized Voting System For Ethiopia</h1--></i></center>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"> <i class="fa fa-dashboard"> </i><strong><?php echo lback_home; ?> </strong></a> </li>
      </ol>

  <!--div class="container"-->

  <!DOCTYPE html>
  <html>
  <head>
    <title></title>
  </head>
  <body>
   <div class="container">
     <h4 align="center">PHP Register Login Script With Email Verification</h4>
        <h3><?php echo $message; ?></h3>  
   </div>
  </body>
  </html>
     		
     	</div>

  <div class="login-box-body">
     
     <div class="panel-body">
     	

      <?php //echo $message; ?>
      
  </div>
  <!-- /.login-box-body -->
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
