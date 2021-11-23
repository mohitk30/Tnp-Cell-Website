<?php

// deleting admin
 //$rsid= $_GET['regid'];
 //echo  $rsid;

include('../connection.php');
$dbsadm=db_connect();
        


 $query="TRUNCATE table reg_student";
 $result_setadmd=mysqli_query($dbsadm,$query);
//$counttadmn=mysqli_num_rows($result_setad);

  echo "done";

?>