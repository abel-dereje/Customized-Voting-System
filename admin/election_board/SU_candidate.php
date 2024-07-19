  <?php
  include "header.php";
  ?>
  <!-- Left side column. contains the logo and sidebar -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Student Union page
      </h1>
       <ol class="breadcrumb">
        <li><a href="index.php"> <i class="fa fa-dashboard"> </i><strong><?php echo lback_home; ?></strong> </a> </li>
      </ol>
      <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
               <?php include "process.php"; ?>
                
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <div class="coantainer">
                <?php
                  $mysqli = new mysqli('localhost', 'root', '', 'election') or die($mysqli_error($mysqli));
                  $result = $mysqli->query("SELECT * from su") or die($mysqli->error);

                ?>
                <div class="row justify-content-center">
                  <table class="table">
                    <thead>
                      <tr>
                        <th> Picture</th>
                        <th> Name</th>
                        <th> Email</th>
                        <th> Phone</th>
                        <th> Age</th>
                        <th> Grade</th>
                        <th> Year</th>
                        <th> Club</th>
                        <th> Address</th>
                        <th colspan="2"> Action</th>
                      </tr>
                    </thead>
                    <?php
                      while ($row = $result->fetch_assoc()): ?>
                          <tr>
                            <td><div class="form-group">
                            <img class="align-self-center rounded-circle mr-3" style="width:60px; height:35px;" src="<?php echo $row['image'] ?>">
                          </div></td>

                            <td><?php echo $row['Sname']; ?> </td>
                            <td><?php echo $row['Semail']; ?> </td>
                            <td><?php echo $row['Sphone']; ?> </td>
                            <td><?php echo $row['Sage']; ?> </td>
                            <td><?php echo $row['Sgrade']; ?> </td>
                            <td><?php echo $row['Syear']; ?> </td>
                            <td><?php echo $row['Sclub']; ?> </td>
                            <td><?php echo $row['Saddress']; ?> </td>
                            <td>
                              <a href="SU_candidate.php?edit=<?php echo $row['Sid']; ?>"
                                class ="btn btn-info"> Edit</a></td><td>
                                <a href="SU_candidate.php?delete=<?php echo $row['Sid']; ?>"
                                class ="btn btn-danger"> Delete</a>
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
                    echo '</pre>';                  }

                ?>                       
               <form action="" method="post"   enctype="multipart/form-data" id="validationform" data-parsley-validate="" novalidate="">
                <input type="hidden" name="Sid" value="<?php echo $id; ?>">
              <div class="box-body">
                <div class="form-group">
                  <input type="text" class="form-control" name="Sname" id="Sname" value="<?php echo $name; ?>" placeholder="Enter Full Name" data-parsley-pattern="/^[A-Za-z]+$/" required="">
                </div><div class="form-group">
                  <input type="email" class="form-control" name="Semail" id="Semail" value="<?php echo $email; ?>" placeholder="Enter email" data-parsley-type="email" required="">
                </div><div class="form-group">
                  <input type="text" class="form-control" name="Sphone" id="Sphone" value="<?php echo $phone; ?>" placeholder="Enter Phone Number" data-parsley-pattern="\d+">
                </div><div class="form-group">
                  <input type="text" class="form-control" name="Sage" id="Sage" value="<?php //echo $age; ?>" placeholder="Enter your age " data-parsley-type = "number" required="">
                </div><div class="form-group">
                  <input type="text" class="form-control" name="Sgrade" id="Sgrade" value="<?php //echo $grade; ?>" placeholder="Enter your Grade">
                </div>
                <div class="form-group">
                  <select name="Syear" class="form-control">
                    <option>1<sup>st</sup></option>
                    <option>2<sup>nd</sup></option>
                    <option>3<sup>rd</sup></option>
                    <option>4<sup>th</sup></option>
                    <option>5<sup>th</sup></option>
                  </select>
                </div>
                <div class="form-group">
                  <select name="Sclub" class="form-control">
                    <option>Red Cross</option>
                    <option>Sustain Dialogue</option>
                    <option>GAHO</option>
                    <option>Tigrigna</option>
                    <option>Debub Tamra</option>
                    <option>Amahar</option>
                  </select>  
                </div>
                <div class="form-group">
                  <label for="">Student Address</label>
                  <textarea rows="2" cols="56" name="Saddress" class="form-control" value="<?php //echo $address; ?>" data-parsley-required required=""> </textarea>
                </div>
                <div class="form-group">
                  <label for="">File input</label>
                  <input type="file"  class="form-control" name="f6" data-parsley-required required="">
                  <p class="help-block">Select your photo here.</p>
                </div>  
                <div class="form-group">
                  <?php
                   if ($update == true): ?>
                      <button type="submit" name="update5" class="btn btn-info">Update</button>
                     <?php else: ?>
                      <button type="Cancel" name="Cancel" class="btn btn-danger">Cancel</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="add5" class="btn btn-primary">Add</button>
                <?php endif; ?>
                </div>
              </div>
            </form>
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

</div>
<?php
include "footer.php";

?>
