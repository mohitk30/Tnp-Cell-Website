<?php

// deleting admin
 $admid= $_GET['admid'];
//  echo  $admid;

include('../connection.php');
$dbsadm=db_connect();
        


$query="DELETE FROM admin_memb where admid='".$admid."'";
$result_setadmd=mysqli_query($dbsadm,$query);
//$counttadmn=mysqli_num_rows($result_setad);

  

?>