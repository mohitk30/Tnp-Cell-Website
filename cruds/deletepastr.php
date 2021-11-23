<?php

// deleting past recruiters
 $prid= $_GET['pastrid'];
 
 include('../connection.php');
 $dbsadm=db_connect();
         
 
 
 $query="DELETE FROM pst_reuriter where pstrid='".$prid."'";
 $result_setadmd=mysqli_query($dbsadm,$query);
 //$counttadmn=mysqli_num_rows($result_setad);
header("refresh:2");
?>