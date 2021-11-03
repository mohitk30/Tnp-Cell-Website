<?php 
$ssname=$_GET['search'];
showSearchedVAlue($ssname);
function showSearchedVAlue($val){
    require_once('../connection.php');
    $dbs=db_connect();
    $qur=$val;
    $query="SELECT * from reg_student where rsenroll like '%".$qur."%'";
     $result_set=mysqli_query($dbs,$query);
     $countr=mysqli_num_rows($result_set);
    //   echo $countr;
    //echo $result_set;
    
    // while($row = mysqli_fetch_assoc($result_set)){
    //     $branchname[] = $row['branch'];
    // }
   // $dir=mysqli_fetch_assoc($result_set);

$class="px-5";
$classt="table table-bordered mt-2 ";
if($countr){
    while( $ss=mysqli_fetch_assoc($result_set))

{   
echo "<table class=".$classt."><tr><td class=".$class.">".$ss['rsenroll']."</td><td class=".$class.">".$ss['rsyear']."</td><td class=".$class.">".$ss['rslink']."</td></tr></table>"; 
 
  }
}else{
  echo "No Result Found!!!";
  header("Refresh:3");
}
}
  ?>
     
 
  