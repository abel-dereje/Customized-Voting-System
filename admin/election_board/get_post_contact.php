<?php

          //$link=mysqli_connect("localhost","root","");
            mysqli_select_db($link,"election");

            $mysqli = new mysqli('localhost', 'root', '', 'election') or die(mysqli_error($mysqli));
            $update = false;
            $IDCon = 0;
            $email = "";
            $address = "";
            $phone = "";
            $tele = "";
            $postal = "";

              if (isset($_POST['submit'])) {
                
                $email = $_POST['email']; 
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $tele = $_POST['tele'];
                $postal = $_POST['postal'];

                mysqli_query($link,"insert into manage_contact values('','$_POST[email]','$_POST[address]','$_POST[phone]','$_POST[tele]','$_POST[postal]')");  
                echo '<script language="javascript">';
                echo 'alert("Record has been successfully recorded")';
                echo '</script>';  
              }
              if (isset($_GET['edit']))
                {
                  $IDCon = $_GET['edit'];
                  $update = true;
                  $result = $mysqli->query("SELECT * FROM manage_contact where MC_id=$IDCon") or die($mysqli->error());
                  if (count($result)==1)
                  {
                    $row = $result->fetch_array();
                    $email = $row['email']; 
                    $address = $row['address'];
                    $phone = $row['phone'];
                    $tele = $row['tele'];
                    $postal = $row['postal'];
                 }
                }
              if (isset($_POST['update'])){
                $IDCon = $_POST['MC_id'];
                $email = $_POST['email']; 
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $tele = $_POST['tele'];
                $postal = $_POST['postal'];

                  $mysqli->query("UPDATE manage_contact SET email = '$email', address = '$address', phone = '$phone', tele = '$tele', postal = '$postal' WHERE MC_id=$IDCon") or die($mysqli->error);
              ?>

                <script type="text/javascript">
                  alert("Record has been successfully updated");
                </script>
              <?php
              }            
?>