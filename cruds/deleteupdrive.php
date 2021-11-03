<?php
// deleting upcoming drives functions
 $updid= $_GET['updid'];
// echo  $prid;
include('../connection.php');
$db=db_connect();
        


$query="DELETE FROM drives where drid='".$updid."'";
$result_setadmd=mysqli_query($db,$query);
 header("Refresh:0;");
 
?>