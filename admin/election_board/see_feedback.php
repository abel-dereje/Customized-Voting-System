  <?php
  include "header.php";
  include "process.php";
  ?>
  <!-- Left side column. contains the logo and sidebar -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      </h1>
       <ol class="breadcrumb">
        <li><a href="index.php"> <i class="fa fa-dashboard"> </i><strong><?php echo lback_home; ?></strong> </a> </li>
      </ol>
      <section class="content">

      <!-- SELECT2 EXAMPLE --><br>
      <div class="box box-default">
        <div class="box-header with-border">
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">                
          <div class="row">
            <div class="col-md-12">
                <div class="coantainer">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Name&nbsp;&nbsp;</th>
                        <th>Email&nbsp;</th>
                        <th>Phone&nbsp;</th>
                        <th>Website&nbsp;</th>
                        <th>Comments</th>
                        <th colspan="2"> Action</th>
                      </tr>
                    </thead>
                    <?php 
                          $sql = "SELECT Uid, name, email, phone, website, msg from contact_us";
                          $result = $link-> query($sql);

                          if ($result-> num_rows > 0) {
                            while ($row = $result-> fetch_assoc()) {
                              ?>
                                <tr>
                                  <td><?php echo $row['name']; ?></td>
                                  <td><?php echo $row['email']; ?></td>
                                  <td><?php echo $row['phone']; ?></td>
                                  <td><?php echo $row['website']; ?></td>
                                  <td><?php echo $row['msg']; ?></td>

                                  <td> <a href="see_feedback.php?delete=<?php echo $row['Uid']; ?>" class ="btn btn-danger"> Delete</a></td>
                                </tr>
                              <?php }}?>
                            </table> 
                        </div>  
                      </div>
                    </div>
                  </div>
                </div> 
    </section>
    </section>
  </div>
  <footer class="main-footer">
    <strong><?php echo lcopy_right;?></strong>
  </footer>

  <!-- Control Sidebar -->
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
  <div class="control-sidebar-bg"></div>
<?php
include "footer.php";
?>