 <?php
  include "header.php";
    include "../../db_connection_pdo.php";
    if (!isset($_SESSION['user_id'])) 
    {
    header("location:../../login.php");
    }
                        $res=mysqli_query($link,"select votes from subject where A_id = '$_SESSION[A_id]'");
                        while($row=mysqli_fetch_array($res))
                            {  
                              $votes = $row['votes'];
                            }
                
 ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      </h1>
      <ol class="breadcrumb">
        <li><a href="national_voting.php"> <i class="fa fa-dashboard"> </i><strong><?php echo lback_home; ?> </strong></a> </li>
      </ol>
      <section class="content">

      <!-- SELECT2 EXAMPLE --><br>
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Vote your national candidate here</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <?php
        date_default_timezone_set('America/Chicago');
            $current_ts  = date("Y-m-d");

            $query = mysqli_query($link, "select * from manage_duration");
            while ($row = mysqli_fetch_array($query)) {
            $startdate = $row['Sdate'];
            $enddate = $row['Edate'];
            $deadtime = "$enddate";
          }?>
          <?php
            if($current_ts > $deadtime) {
            echo "The time is over"; 
            echo  $current_ts;
            echo  $deadtime;
          ?>
          <?php
            }else{
                        $res=mysqli_query($link,"select * from candidate");
                        while($row=mysqli_fetch_array($res))
                            {
                          $vv = $row['vote'];
                          $x = base64_decode($vv);
                        ?>
                              <div class="col-md-4">
                            <div class="box box-widget widget-user">
           
                            <div class="widget-user-header bg-aqua-active">
                              <h3 class="widget-user-username"> <?php echo $row['Cname']; ?></h3>
                             <h5 class="widget-user-desc"> <?php echo $row['Cdescription']; ?></h5><br><br><br><br>
                           </div>
                           <div class="widget-user-image">
                              <img class="img-circle" style="width:200px; height:150px;" src="../admin/<?php echo $row['image'] ?>" alt="Candidate">
                          </div><br><br><br><br>
          <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    
                    <h5 class="description-header"></h5><?php echo $x;
                      //$row['vote'] = round($row['vote'] / 100 * 100) . '%';

                    ?><br>
                    <h4><span class="description-text">Followers<br>in number</span></h4>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                &nbsp;&nbsp;&nbsp;<div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"></h5><?php //echo $x; ?>
                    <br><h4><span class="description-text">Followers<br>in percent(%) </span></h4>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <?php
                   if($votes == 'yes') { 
                    ?>
                       <a style="pointer-events: none;"  href="vote.php?Cid=<?php echo $row["Cid"]; ?>">
                        <?php 
                        $message = '<label class="text-red">Already your vote is casted.</label';
                        echo $message;
                        ?>
                        <!--form class="form-disable" method="post" action="national_voting.php"-->
                      <input type="submit" name="update" value="Vote Now" class="btn btn-block btn-default disabled">
                      </a> <?php
                    }else{
                      ?>
                        <a href="vote.php?Cid=<?php echo $row["Cid"]; ?>">
                        <!--form class="form-disable" method="post" action="national_voting.php"-->
                      <input type="submit" name="update" value="Vote Now" class="btn btn-info">
                      </a>
                      <?php
                      }

                       ?>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
                                
          </div>
          <!-- /.widget-user -->
        </div> 

      <?php }} ?> <br><br>    
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                
                </div>
              </div>
            </div>
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