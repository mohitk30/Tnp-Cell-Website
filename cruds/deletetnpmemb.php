<?php

// deleting past recruiters
 $tnpid= $_GET['tnpmid'];
//  echo  $prid;
include('../connection.php');
$dbsadm=db_connect();
        


$query="DELETE FROM tnp_memb where tnpid='".$tnpid."'";
$result_setadmd=mysqli_query($dbsadm,$query);
//$counttadmn=mysqli_num_rows($result_setad);
header('Refresh:0;')

?>