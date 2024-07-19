<?php
if(isset($_POST["Save"])){
  $id=$_POST["A_id"];
  $name=$_POST["S_name"];
  $mname=$_POST["SMom_name"];

 $sql=mysqli_query($link,"select * from subject where A_id='$_POST[A_id]' && S_name='$_POST[S_name]' && SMom_name='$_POST[SMom_name]'");
   while ($row=mysqli_fetch_array($sql)) {

    $db_id=$row["A_id"];
    $db_name=$row["S_name"];
    $db_mname=$row["SMom_name"];

    if ($id==$db_id && $name==$db_name && $mname==$db_mname) {
      $_SESSION["S_name"]=$db_name;
      $_SESSION["SMom_name"]=$db_mname;

      if ($_SESSION["SMom_name"]=="$db_mname") {
        ?>
        <script type="text/javascript">
          window.location="login.php";
        </script>
        <?php
      }
       else
        {
         ?>
            <script type="text/javascript">
               alert("Username Or Password Error");
            </script>
            <?php
           }
$_SESSION["username"]=$_POST["username"];
    }
  }
}
?>