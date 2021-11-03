<?php

// deleting admin
 $srol= $_GET['stdid'];
 //echo  $rsrol;

include('../connection.php');
$dbsadm=db_connect();
        


$query="DELETE FROM student where senrollno='".$srol."'";
$result_setadmd=mysqli_query($dbsadm,$query);
$query1="DELETE FROM s_login where logenroll='".$srol."'";
$result_setadmd=mysqli_query($dbsadm,$query1);
$query2="DELETE FROM sp_info where spenroll='".$srol."'";
$result_setadmd=mysqli_query($dbsadm,$query2);
//$counttadmn=mysqli_num_rows($result_setad);

  

?>