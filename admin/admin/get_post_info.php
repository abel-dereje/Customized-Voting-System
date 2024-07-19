<?php

          //$link=mysqli_connect("localhost","root","");
            mysqli_select_db($link,"election");

            $mysqli = new mysqli('localhost', 'root', '', 'election') or die(mysqli_error($mysqli));
            $update = false;
            $idpost = 0;
            $Stime = "";
            $Etime = "";
            $Sdate = "";
            $txt = "";

              if (isset($_POST['submit'])) {
                $Stime = $_POST['Stime']; 
                $Etime = $_POST['Etime'];
                $Sdate = $_POST['Sdate'];
                $Edate = $_POST['Edate'];
                $txt = $_POST['txt'];
                mysqli_query($link,"insert into post_info values('','$_POST[Stime]','$_POST[Etime]','$_POST[Sdate]','$_POST[Edate]','$_POST[txt]')");  
                echo '<script language="javascript">';
                echo 'alert("Record has been successfully recorded")';
                echo '</script>';  
              }
    if (isset($_GET['edit']))
    {
      $idpost = $_GET['edit'];
      $update = true;
      $result = $mysqli->query("SELECT * FROM post_info where Pid='$idpost'") or die($mysqli->error());
      if (count($result)==1)
      {
        $row = $result->fetch_array();
        $Stime = $row['Stime']; 
        $Etime = $row['Etime'];
        $txt = $row['txt'];
     }
     ?>
<form action="post_info.php" method="post"   enctype="multipart/form-data" id="validationform" data-parsley-validate="" novalidate="">
            <input type="hidden" name="Pid" value="<?php echo $idpost; ?>">
            <div class="box-body">
              <div class="form-group">
                <label>Start time</label>
                <input type="text" class="form-control" name="Stime" value="<?php echo $Stime; ?>" data-parsley-required required="">
              </div>
              <div class="form-group">
                <label>End Time</label>
                <input type="text" class="form-control" name="Etime" value="<?php echo $Etime; ?>" data-parsley-required required="">
              </div><div class="form-group">
                <label>Start Date</label>
                <input type="date" class="form-control" name="Sdate" data-parsley-required required="">
              </div><div class="form-group">
                <label>End Date</label>
                <input type="date" class="form-control" name="Edate" data-parsley-required required="" >
              </div>
              <div class="form-group">
                <label> Discription</label>
                    <textarea id="compose-textarea" name="txt" class="form-control" placeholder="Enter..." style="height: 150px" data-parsley-required required=""><?php echo $txt; ?></textarea>
              </div>
              <div class="box-footer">
                <div class="pull-left">
                  <?php
                   if ($update == true): ?>
                      <button type="submit" name="update" class="btn btn-info">Update</button>
                     <?php else: ?>
                  <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Update</button>
                </div>
                <?php endif; ?>
              </div>
            </div>
          </form>
     <?php
    }
  if (isset($_POST['update'])){
    $idpost = $_POST['Pid'];
    $Stime = $_POST['Stime']; 
    $Etime = $_POST['Etime'];
    $txt = $_POST['txt'];

      $mysqli->query("UPDATE post_info SET Stime = '$Stime', Etime = '$Etime', txt = '$txt' WHERE Pid=$idpost") or die($mysqli->error);
  ?>

    <script type="text/javascript">
      alert("Record has been successfully updated");
    </script>
  <?php
  }

?>