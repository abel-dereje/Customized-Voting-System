 <?php
  include "header.php";
  include "db_connection_pdo.php";
 ?>
<?php
$message = '';
/*use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;*/

 if (isset($_POST['submit'])) 
 {
   $query = "
   SELECT * FROM up_register_user
   WHERE user_email = :user_email
   ";
   $statement = $connect->prepare($query);

   $statement->execute(
    array(
      ':user_email'     =>      $_POST['user_email']
    )
  );

   $no_of_row = $statement->rowCount();

   if ($no_of_row > 0)
   {
     $message ='<label class="text-danger">Email already exists</label'; 
   }else
   {
      $user_password = rand(100000, 9999999);
      $user_encrypted_password = password_hash($user_password, PASSWORD_DEFAULT);
      $user_activation_code = md5(rand());

      $insert_query = "
      INSERT INTO up_register_user
      (UV_id, user_name, user_email, user_password, 
      user_activation_code, user_email_status) 
      VALUES (:UV_id, :user_name, :user_email, :user_password, 
      :user_activation_code, :user_email_status)
      ";
      $statement = $connect->prepare($insert_query);
      $statement->execute(
        array(
          ':UV_id'               =>   $_POST['UV_id'],
          ':user_name'            =>   $_POST['user_name'],
          ':user_email'           =>   $_POST['user_email'],
          ':user_password'        =>    
              $user_encrypted_password,
          ':user_activation_code' =>    $user_activation_code,
          'user_email_status'     =>    'not verified'
        )
      );
      $result = $statement->fetchAll();

      if (isset($result)) {
        $base_url = "http://localhost/voting/";
        $mail_body = "<p> Hi ".$_POST['user_name'].",</p>
        <p> Thanks for Registration. Your password is ".$user_password.", This password will work only after your email verification. </p>
        <p>Please open this link to verified your email address - ".$base_url."up_email_verification.php?up_activation_code=".$user_activation_code." <p>Best Regards, <br /> Voting</p>
        ";
        require 'PHPMailerAutoload.php';
        require 'credential.php';

      $mail = new PHPMailer;

      $mail->SMTPDebug = 0;                               // Enable verbose debug output

      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'abeldereje23@gmail.com';                 // SMTP username
      $mail->Password = PASS;                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to

      $mail->setFrom(EMAIL, 'voting ');
      $mail->addAddress($_POST['user_email'], $_POST['user_name']);     // Add a recipient
      //$mail->addReplyTo(EMAIL);
    // Optional name
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->WordWrap = 50;
      $mail->Subject = "Email Verification";
      $mail->Body    = $mail_body;
      //$mail->AltBody = $_POST['message'];;

      if(!$mail->send()) {
          $message = '<label class="text-danger"> Error occured.</label>'. $mail->ErrorInfo;
          echo 'Mailer Error: ' . $mail->ErrorInfo;
      } else {
         $message = '<label class="text-success"> Register Done, Please check your mail.</label>';
      }
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
       <!--center><i><h1>Customized Voting System For Ethiopia</h1></i></center-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"> <i class="fa fa-dashboard"> </i><strong><?php echo lback_home; ?> </strong></a> </li>
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
                    <div class="panel-heading"><h4>Register</h4></div>
                    <div class="panel-body">
                      <form action="" method="post"   enctype="multipart/form-data" id="validationform" data-parsley-validate="" novalidate="">
                        
                        <?php echo $message; ?>
                        <div class="form-group has-feedback">
                          <input type="hidden" name="UV_id" value="<?php echo $_SESSION["UV_id"] ?>">
                        </div>
                        <div class="form-group has-feedback">
                          <input type="text" name="user_name" class="form-control" placeholder="User Name" data-parsley-pattern="/^[A-Za-z]+$/" required="" />
                          <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                          <input type="email" name="user_email" class="form-control" placeholder="User Email" value="<?php echo $_SESSION['email']; ?> " data-parsley-type="email" required="" readonly />
                          <span class="fa fa-envelope-o form-control-feedback"></span>
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
                        <p align="pull-right"><a href="login.php" class="pull-right">I already have a registered</a></p>
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