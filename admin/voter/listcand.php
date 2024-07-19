 <?php
  include "header.php";

 ?>
  <!-- Left side column. contains the logo and sidebar -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <h1>
       <center><i><h1>Customized Voting System For Ethiopia</h1></i></center>
      </h1>
      <ol class="breadcrumb">
        <li><a href="check_voter_list.php"> <i class="fa fa-dashboard"> </i><strong><?php echo lback_home; ?> </strong></a> </li>
      </ol>
            <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Veiw candidate here</h3>

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
                      <!DOCTYPE html>
                         <html>
                         <head>
                           <title></title>
                           <style type="text/css">
                             table {
                              border-collapse: collapse;
                              width: 100%;
                              color: #d96459;
                              font-family: monospace;
                              font-size: 23px;
                              text-align: left;
                             }
                             th {
                              background-color: #d96459;
                              color: white;
                             }
                             tr:nth-child(even) {background-color: #f2f2f2;}
                           </style>
                         </head>
                         <body>
                          <table>                
                      <?php
                        $mysqli = new mysqli('localhost', 'root', '', 'election') or die($mysqli_error($mysqli));
                        $result = $mysqli->query("SELECT * from Candidate") or die($mysqli->error);
                      ?>
                <div class="row justify-content-center">
                  <table class="table">
                    <thead>
                      <tr>
                        <th> Picture</th>
                        <th> Name</th>
                        <th> Email</th>
                        <th> Phone</th>
                        <th> Address</th>
                        <th> Description</th>
                      </tr>
                    </thead>
                    <?php
                      while ($row = $result->fetch_assoc()): ?>
                          <tr>                                     
                            <td><div class="form-group">
                              <img class="align-self-center rounded-circle mr-3" style="width:60px; height:35px;" src="admin/admin/<?php echo $row['image'] ?>">
                              </div></td>
                            <td><?php echo $row['Cname']; ?> </td>
                            <td><?php echo $row['Cemail']; ?> </td>
                            <td><?php echo $row['Cphone']; ?> </td>
                            <td><?php echo $row['Cadress']; ?> </td>
                            <td><?php echo $row['Cdescription']; ?> </td>
                          </tr>
                        <?php endwhile; ?>
                  </table>                
                </div>
              </table>
           </body>
          </html>                
        </div>
       </div>
      </div>
    </div>
  </div>
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
