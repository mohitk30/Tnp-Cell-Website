<?php

// deleting admin
 $roln= $_GET['rol'];
//  echo  $admid;

include('../connection.php');
$dbsadm=db_connect();
        


$query="UPDATE student set  lupdtime= CURRENT_TIMESTAMP where senrollno='".$roln."'";
$result_setadmd=mysqli_query($dbsadm,$query);
//$counttadmn=mysqli_num_rows($result_setad);

  if(isset($result_setadmd)){
      
  }

?>