<?php

          $link=mysqli_connect("localhost","root","");
            mysqli_select_db($link,"election");

            $mysqli = new mysqli('localhost', 'root', '', 'election') or die(mysqli_error($mysqli));
            $update = false;
            $idmanage = 0;
            $Sdate = "";
            $Edate = "";
            $txt = "";

    if (isset($_GET['edit']))
    {
      $idmanage = $_GET['edit'];
      $update = true;
      $result = $mysqli->query("SELECT * FROM manage_duration_up where manage_duration_up_id='$idmanage'") or die($mysqli->error());
      if (count($result)==1)
      {
        $row = $result->fetch_array();
        $Sdate = $row['Sdate'];
        $Edate = $row['Edate'];
        $txt = $row['txt'];
     }
     ?>
      
<form action="" method="post" enctype="multipart/form-data" id="validationform" data-parsley-validate="" novalidate="">
            <input type="hidden" name="manage_duration_up_id" value="<?php echo $idmanage; ?>">
            <div class="box-body">
             <div class="form-group">
                <label>Start Date</label>
                <input type="date" class="form-control" name="Sdate" value="<?php echo $Sdate ;?>" data-parsley-required required="">
              </div><div class="form-group">
                <label>End Date</label>
                <input type="date" class="form-control" name="Edate" value="<?php echo $Edate ;?>" data-parsley-required required="">
              </div>
              <div class="form-group">
                <label> Discription</label>
                    <textarea id="compose-textarea" name="txt" class="form-control" placeholder=" Your message is here" style="height: 150px" data-parsley-required required=""><?php echo $txt ;?></textarea>
              </div>
              <div class="box-footer">
              <div class="pull-left">
                <?php
                   if ($update == true): ?>
                    <button type="submit" name="updateM" class="btn btn-info">Update</button>
                <?php else: ?>
                <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
              </div>
                <?php endif; ?>
              </div>
          </form>

     <?php
    }
  if (isset($_POST['updateM'])){

    $idmanage = $_POST['manage_duration_up_id'];
    $Sdate = $_POST['Sdate']; 
    $Edate = $_POST['Edate'];
    $txt = $_POST['txt'];

      $mysqli->query("UPDATE manage_duration_up SET Sdate = '$Sdate', Edate = '$Edate', txt = '$txt' WHERE manage_duration_up_id=$idmanage") or die($mysqli->error);
  ?>

    <script type="text/javascript">
      alert("Record has been successfully updated");
    </script>
  <?php
  }

?>