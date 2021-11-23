<?php 
$ssname=$_GET['search'];
showSearchedVAlue($ssname);
function showSearchedVAlue($val){
    require_once('../connection.php');
    $dbs=db_connect();
    $qur=$val;
    $query="SELECT * from reg_student join student on rsenroll=senrollno where rsenroll like '%".$qur."%'";
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
$class3='"px-5';
$class1=' btn';
$class2=' btn-outline-success"';
$classbtn1=$class3.$class1.$class2 ;
 
if($countr){
    while( $ss=mysqli_fetch_assoc($result_set))

{   
echo "<table class=".$classt."><tr><td class=".$class.">".$ss['rsenroll']."</td><td class=".$class.">".$ss['sbranch']."</td><td class=".$class.">".$ss['rsyear']."</td><td class="."px-5"."><a  class=".$classbtn1." href=".$ss['srslink'].">View Resume </a> </td></tr></table>"; 
 
  }
}else{
  echo "No Result Found!!!";
  header("Refresh:3");
}
}
  ?>
     
 
  