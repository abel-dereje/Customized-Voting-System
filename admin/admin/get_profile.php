<?php

          $link=mysqli_connect("localhost","root","");
            mysqli_select_db($link,"election");

            $mysqli = new mysqli('localhost', 'root', '', 'election') or die(mysqli_error($mysqli));
            $update = false;
            $IDCon = 0;
            $username = "";
            $password = "";

              if (isset($_GET['edit']))
                {
          

                  $IDCon = $_GET['edit'];
                  $update = true;
                  $result = $mysqli->query("SELECT * FROM users where username = '$_SESSION[username]'") or die($mysqli->error());
                  if (count($result)==1)
                  {
                    $row = $result->fetch_array();
                    $username = $row['username'];
                    $password = $row['password'];
                 }
                 ?>
                 
          <form method="post" action="edit_profile.php">
            <input type="hidden" name="Uid" value="<?php echo $IDCon; ?>">
            <div class="box-body">
              <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="User name" value="<?php echo $username; ?>">
              </div>
              <div class="form-group">
                  <label for="">Your Message</label>
                  <textarea rows="2" cols="56" name="password" placeholder="Password" class="form-control"><?php echo $password ;?> </textarea>
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
          </form>
                 <?php
                }
              if (isset($_POST['update'])){
                $IDCon = $_POST['Uid'];
                $username = $_POST['username']; 
                $password = $_POST['password'];
            
                  $mysqli->query("UPDATE users SET username = '$username', password = '$password'WHERE username = '$_SESSION[username]'") or die($mysqli->error);
              ?>

                <script type="text/javascript">
                  alert("Record has been successfully updated");
                </script>
              <?php
              }            
?>