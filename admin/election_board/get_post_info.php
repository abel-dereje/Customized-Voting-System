<?php

          //$link=mysqli_connect("localhost","root","");
            mysqli_select_db($link,"election");

            $mysqli = new mysqli('localhost', 'root', '', 'election') or die(mysqli_error($mysqli));
            $update = false;
            $idpost = 0;
            $Stime = "";
            $Etime = "";
            $Sdate = "";

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
        //$Sdate = $row['Sdate'];
     }
    }
  if (isset($_POST['update'])){
    $idpost = $_POST['Pid'];
    $Stime = $_POST['Stime']; 
    $Etime = $_POST['Etime'];
    //$Sdate = $_POST['Sdate'];

      $mysqli->query("UPDATE post_info SET Stime = '$Stime', Etime = '$Etime' WHERE Pid=$idpost") or die($mysqli->error);
  ?>

    <script type="text/javascript">
      alert("Record has been successfully updated");
    </script>
  <?php
  }

?>