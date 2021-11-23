<?php
// deleting upcoming drives functions
 $updid= $_GET['updid'];
// echo  $prid;
include('../connection.php');
$db=db_connect();
        


$query="UPDATE drives SET isapproved ='yes' where drid='".$updid."'";
$result_setadmd=mysqli_query($db,$query);

$query1="SELECT * from drives where drid='".$updid."'";
$result_setnoti=mysqli_query($db,$query1);
$notiarr = mysqli_fetch_assoc($result_setnoti);

$ninfo=$notiarr['orgname']." OnCampus Drive is approved and is going to held on ".$notiarr['drdate']." for ".$notiarr['empltype']." ".$notiarr['emplrole']." role. For further queries Contact HR at ".$notiarr['orgpemail'];

$query2="INSERT INTO Notifi(notinfo)  VALUES('".$ninfo."')";
$result_setnoti2=mysqli_query($db,$query2);


if(!$result_setadmd){
    echo "notdone";
}
 header("Refresh:0;");
 
?>