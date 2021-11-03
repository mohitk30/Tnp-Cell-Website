<?php
// deleting upcoming drives functions
 $updid= $_GET['updid'];
// echo  $prid;
include('../connection.php');
$db=db_connect();
        


$query=" UPDATE drives SET isapproved ='yes' where drid='".$updid."'";
$result_setadmd=mysqli_query($db,$query);
if(!$result_setadmd){
    echo "notdone";
}
 header("Refresh:0;");
 
?>