<?php
include "connction.php";
if(isset($_POST["Import"])){

echo $filename=$_FILES["file"]["tmp_name"];

if($_FILES["file"]["size"] > 0)
{

$file = fopen($filename, "r");
while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
{

//It wiil insert a row to our subject table from our csv file`
$sql = "insert into subject (`A_id`, `S_name`, `SL_name`, `SGF_name`, SMom_name, `Sage`, `Sbirth_place`, `Sbirth_year`, `Saddress`, `Ssex`) values ('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]')";
//we are using mysql_query function. it returns a resource on true else False on error
$result = mysqli_query($link, $sql);
if(! $result )
{
echo "<script type=\"text/javascript\">
alert(\"Invalid File:Please Upload CSV File.\");
window.location = \"import_data.php\"
</script>";
}
}
fclose($file);
//throws a message if data successfully imported to mysql database from excel file
echo "<script type=\"text/javascript\">
alert(\"CSV File has been successfully Imported.\");
window.location = \"import_data.php\"
</script>";
//close of connection
mysql_close($link);
}
}
?> 