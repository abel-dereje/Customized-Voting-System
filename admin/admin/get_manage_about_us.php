<?php

          $link=mysqli_connect("localhost","root","");
            mysqli_select_db($link,"election");

            $mysqli = new mysqli('localhost', 'root', '', 'election') or die(mysqli_error($mysqli));
            $update = false;
            $IDCon = 0;
            $title = "";
            $mission="";
            $vission="";
            $value="";

              if (isset($_POST['submit'])) {
                
                $title = $_POST['title'];
                $mission = $_POST['mission'];
                $vission = $_POST['vission'];
                $value = $_POST['value'];

                $tm=md5(time());
                $fnm=$_FILES["f1"]["name"];
                $dst="image/".$tm.$fnm;
                $dst1="image/".$tm.$fnm;
                move_uploaded_file($_FILES["f1"]["tmp_name"], $dst); 

                mysqli_query($link,"insert into manage_about_us values('','$_POST[title]','$_POST[mission]','$_POST[vission]','$_POST[value]','$dst1')");  
                echo '<script language="javascript">';
                echo 'alert("Record has been successfully recorded")';
                echo '</script>';  
              }
              if (isset($_GET['edit']))
                {

                  $IDCon = $_GET['edit'];
                  $update = true;
                  $result = $mysqli->query("SELECT * FROM manage_about_us where about_id=$IDCon") or die($mysqli->error());
                  if (count($result)==1)
                  {
                    $row = $result->fetch_array();
                    $title = $row['title'];
                    $mission = $row['mission'];
                    $vission = $row['vission'];
                    $value = $row['value'];
                    $dst1 = $row['image'];    
                 }
                 ?>
                 <form action="manage_about_us.php" method="post"   enctype="multipart/form-data" id="validationform" data-parsley-validate="" novalidate="">
            <input type="hidden" name="about_id" value="<?php echo $IDCon; ?>">
            <div class="box-body">
              <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Your Title here..." value="<?php echo $title; ?>" data-parsley-required required="">
              </div>
              <div class="form-group">
                  <label for="">Mission</label>
                  <textarea rows="2" cols="56" name="mission" placeholder=" Your mission" class="form-control" data-parsley-required required=""><?php echo $mission ;?> </textarea>
                </div>
                <div class="form-group">
                  <label for="">Vission</label>
                  <textarea rows="2" cols="56" name="vission" placeholder=" Your vission" class="form-control" data-parsley-required required=""><?php echo $vission ;?> </textarea>
                </div>
                <div class="form-group">
                  <label for="">Values</label>
                  <textarea rows="2" cols="56" name="value" placeholder=" Your value" class="form-control" data-parsley-required required=""><?php echo $value ;?> </textarea>
                </div>
              <div class="form-group">
                  <input type="file"  class="form-control" name="f1" placeholder="your Image" data-parsley-required required="">
                  <p class="help-block">Select your photo here.</p>
              </div>
              <div class="box-footer">
                <div class="pull-left">
                  <?php
                   if ($update == true): ?>
                      <button type="submit" name="update" class="btn btn-info">Update</button>
                     <?php else: ?>
                  <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                </div>
                <?php endif; ?>
              </div>
            </div>
          </form>
                 <?php
                }
              if (isset($_POST['update'])){
                $IDCon = $_POST['about_id'];
                $title = $_POST['title']; 
                $mission = $_POST['mission'];
                $vission = $_POST['vission'];
                $value = $_POST['value'];

                $tm=md5(time());
                $fnm=$_FILES["f1"]["name"];
                $dst="image/".$tm.$fnm;
                $dst1="image/".$tm.$fnm;
                move_uploaded_file($_FILES["f1"]["tmp_name"], $dst); 

                  $mysqli->query("UPDATE manage_about_us SET title = '$title', mission = '$mission', vission = '$vission', value = '$value', image = '$dst1' WHERE about_id=$IDCon") or die($mysqli->error);
              ?>

                <script type="text/javascript">
                  alert("Record has been successfully updated");
                </script>
              <?php
              }            
?>