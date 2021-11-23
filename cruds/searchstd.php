<?php
 
// deleting admin
 $sid= $_GET['searchrl'];
 //echo  $rsid;
 
include('../connection.php');
$dbsadm=db_connect();
        

 
    $query2="SELECT * from student where senrollno like '%".$sid."%'";
   $result_sets2=mysqli_query($dbsadm,$query2);
   $countsstd=mysqli_num_rows($result_sets2);
   $class='"px-5';
   $class.=' font-weight-bold"';
   $classt='"table';
   $classt.=' table-bordered';
   $classt.=' mt-2"';
   
   
   $class1='"btn';
   $class2=' btn-primary';
   $class3=' rlink-btn"';
   $class4=' btn-danger';
   $class5=' btn-outline-primary';
 

   $classbtn1=$class1.$class2.$class3 ;
   $classbtn2=$class1.$class4.$class3 ;
   $classbtn3=$class1.$class5.$class3 ;
   if( $countsstd>0){

    while( $sstd=mysqli_fetch_assoc($result_sets2))

    {   
         
    echo "<table class=".$classt."><tr><td   class=".$class.">".$sstd['sfname']." ".$sstd['slname']."</td><td class=".$class.">".$sstd['senrollno']."</td><td class="."px-5"."><a  class=".$classbtn1." href="."cruds/updatenewStudent.php?rols=".$sstd['senrollno'].">Update </a> </td><td class="."px-5"."><button  class=".$classbtn2." onclick="."deleteStudentid(".$sstd['senrollno'].")>Delete </button> </td><td class="."px-5"."><a  class=".$classbtn3." href="."cruds/updatestudpass.php?rol=".$sstd['senrollno'].">Update password </a> </td><td class="."px-5"."><a  class=".$classbtn3." href="."cruds/updatestudplaced.php?rol=".$sstd['senrollno'].">Update Placement info</a> </td> </tr></table>"; 
     
      }



   }

  

?>