<?php

          $link=mysqli_connect("localhost","root","");
            mysqli_select_db($link,"election");

            $mysqli = new mysqli('localhost', 'root', '', 'election') or die(mysqli_error($mysqli));
            $update = false;
            $IDCon = 0;
            $title = "";

              if (isset($_POST['submit'])) {
                
                $title = $_POST['title'];
                $txt = $_POST['txt'];

                $tm=md5(time());
                $fnm=$_FILES["f1"]["name"];
                $dst="image/".$tm.$fnm;
                $dst1="image/".$tm.$fnm;
                move_uploaded_file($_FILES["f1"]["tmp_name"], $dst); 

                mysqli_query($link,"insert into manage_homepage values('','$_POST[title]','$_POST[txt]','$dst1')");  
                echo '<script language="javascript">';
                echo 'alert("Record has been successfully recorded")';
                echo '</script>';  
              }
              if (isset($_GET['edit']))
                {

                  $IDCon = $_GET['edit'];
                  $update = true;
                  $result = $mysqli->query("SELECT * FROM manage_homepage where homepage_id=$IDCon") or die($mysqli->error());
                  if (count($result)==1)
                  {
                    $row = $result->fetch_array();
                    $title = $row['title'];
                    $txt = $row['txt'];
                    $dst1 = $row['image'];    
                 }
                 ?>
                 <form action="manage_hompage.php" method="post"   enctype="multipart/form-data" id="validationform" data-parsley-validate="" novalidate="">
            <input type="hidden" name="homepage_id" value="<?php echo $IDCon; ?>">
            <div class="box-body">
              <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Your Title here..." value="<?php echo $title; ?>" data-parsley-pattern="/^[A-Za-z]+$/" required="">
              </div>
              <div class="form-group">
                  <label for="">Your Message</label>
                  <textarea rows="2" cols="56" name="txt" placeholder=" Your massage" class="form-control" data-parsley-required required=""><?php echo $txt ;?> </textarea>
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
                $IDCon = $_POST['homepage_id'];
                $title = $_POST['title']; 
                $txt = $_POST['txt'];
                $tm=md5(time());
                $fnm=$_FILES["f1"]["name"];
                $dst="image/".$tm.$fnm;
                $dst1="image/".$tm.$fnm;
                move_uploaded_file($_FILES["f1"]["tmp_name"], $dst); 

                  $mysqli->query("UPDATE manage_homepage SET title = '$title', txt = '$txt', image = '$dst1' WHERE homepage_id=$IDCon") or die($mysqli->error);
              ?>

                <script type="text/javascript">
                  alert("Record has been successfully updated");
                </script>
              <?php
              }            
?>