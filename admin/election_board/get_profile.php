<?php

          $link=mysqli_connect("localhost","root","");
            mysqli_select_db($link,"election");

            $mysqli = new mysqli('localhost', 'root', '', 'election') or die(mysqli_error($mysqli));
            $update = false;
            $IDCon = 0;
            $password = "";
            $Npassword = "";
            $Rpassword = "";

              if (isset($_GET['edit']))
                {
                  $IDCon = $_GET['edit'];
                  $update = true;
                  $result = $mysqli->query("SELECT * FROM users where  password ='$password' && Uid = '$_SESSION[Uid]' ") or die($mysqli->error());
                  if (count($result)==1)
                  {
                     //where username = '$_SESSION[username]'
                    $row = $result->fetch_array();
                    $password = $row['password'];
                    //$Npassword = $row['Npassword'];
                    //$Rpassword = $row['Rpassword'];
                 }
                }
              if (isset($_POST['update'])){
                $IDCon = $_POST['Uid'];
                $password = $_POST['password'];
                $Npassword = $_POST['Npassword'];
                $Rpassword = $_POST['Rpassword'];
            
                  $mysqli->query("UPDATE users SET password = '$password' where Uid = '$_SESSION[Uid]'") or die($mysqli->error);
              ?>

                <script type="text/javascript">
                  alert("Record has been successfully updated");
                </script>
              <?php
              }            