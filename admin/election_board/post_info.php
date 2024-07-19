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
          <h3 class="box-title">Manage Contact</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <div class="row justify-content-center"> 
      <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            <?php
              include "get_post_info.php";
              ?>


            <?php
            
                  $mysqli = new mysqli('localhost', 'root', '', 'election') or die($mysqli_error($mysqli));
                  $result = $mysqli->query("SELECT * from post_info") or die($mysqli->error);

                ?>
                <div class="row justify-content-center">
                  <table class="table">
                    <thead>
                      <tr>
                        <th> Start Time</th>
                        <th> End Time</th>
                        <th> Start Date</th>
                        <th> End Date</th>
                        <th> Description</th>
                        <th colspan="2"> Action</th>
                      </tr>
                    </thead>
                    <?php
                      while ($row = $result->fetch_assoc()): ?>
                          <tr>
                            <td><?php echo $row['Stime']; ?> </td>
                            <td><?php echo $row['Etime']; ?> </td>
                            <td><?php echo $row['Sdate']; ?> </td>
                            <td><?php echo $row['Edate']; ?> </td>
                            <td><?php echo $row['txt']; ?> </td>
                            <td>
                              <a href="post_info.php?edit=<?php echo $row['Pid']; ?>"
                                class ="btn btn-info"> Edit</a></td><td>
                                <!--a href="manage_candidate.php?delete=<?php //echo $row['Cid']; ?>"
                                class ="btn btn-danger"> Delete</a-->
                            </td>
                          </tr>
                        <?php endwhile; ?>
                  </table>                
                </div>
                </div>
                <?php
                  function pre_r( $array ) {
                    echo '<pre>';
                    print_r($array);
                    echo '</pre>'; 
                  }
                ?>                       
          <form method="post" action="post_info.php" enctype="multipart/form-data" role="form">
            <input type="hidden" name="Pid" value="<?php echo $idpost; ?>">
            <div class="box-body">
              <div class="form-group">
                <label>Start time</label>
                <input type="text" class="form-control" name="Stime" value="<?php echo $Stime; ?>">
              </div>
              <div class="form-group">
                <label>End Time</label>
                <input type="text" class="form-control" name="Etime" value="<?php echo $Etime; ?>">
              </div><div class="form-group">
                <label>Start Date</label>
                <input type="date" class="form-control" name="Sdate"">
              </div><div class="form-group">
                <label>End Date</label>
                <input type="date" class="form-control" name="Edate" >
              </div>
              <div class="form-group">
                <label> Discription</label>
                    <textarea id="compose-textarea" name="txt" class="form-control" placeholder="Enter..." style="height: 150px"></textarea>
              </div>
              <div class="box-footer">
                <div class="pull-right">
                  <?php
                   if ($update == true): ?>
                      <button type="submit" name="update" class="btn btn-info">Update</button>
                     <?php else: ?>
                  <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                </div>
                <button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> Cancel</button>
                <?php endif; ?>
              </div>
            </div>
            <!-- /.box-body -->
              
            <?php
            
            
            ?>
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