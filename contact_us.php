 <?php
  include "header.php";
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
        <li><a href="check_voter_list.php"> <i class="fa fa-dashboard"> </i><strong><?php echo lback_home; ?> </strong></a> </li>
      </ol>

         

    <!-- Main content --><br>
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="#SW" class="btn btn-primary btn-block margin-bottom">Our Detail</a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Manager</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                    <?php 
                          $sql = "SELECT MC_id, email, address, phone, tele, postal from manage_contact";
                          $result = $link-> query($sql);

                          if ($result-> num_rows > 0) {
                            while ($row = $result-> fetch_assoc()) {
                              ?>
                                  <li><a href="#"><i class="fa fa-envelope-o"></i> Email 
                                   <span class="label label-primary pull-right"><?php echo $row['email']; ?></span></a></li>
                                   <li><a href="#"><i class="fa fa-address-card-o"></i> Address 
                                   <span class="label label-primary pull-right"><?php echo $row['address']; ?></span></a></li>
                                   <li><a href="#"><i class="fa fa-mobile"></i> Phone 
                                   <span class="label label-primary pull-right"><?php echo $row['phone']; ?></span></a></li>
                                   <li><a href="#"><i class="fa fa-phone"></i> Berau 
                                   <span class=" label label-primary pull-right"><?php echo $row['tele']; ?></span></a></li>
                                   <li><a href="#"><i class="fa fa-file-text-o"></i> Postal 
                                   <span class="label label-primary pull-right"><?php echo $row['postal']; ?></span></a></li>
                                  
                              <?php }}?>
                </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Labels</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> Important</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Promotions</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Social</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Compose New Message</h3>
            </div>
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
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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