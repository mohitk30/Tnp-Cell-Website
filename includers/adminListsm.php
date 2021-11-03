

<?php

//$backadminlink= $_GET['adml'];
// echo $backadminlink;
//require_once('connection.php');
//$dbs=db_connect();
 
//$query="SELECT * FROM project WHERE position<3";
//$result_set=mysqli_query($dbs,$query);
//$countr=mysqli_num_rows($result_set);
//echo $countr;
?>
<!-- html part -->


 
<?php
//db_disconnect($dbs);


?>






<!-- Develop by Mohit kumar with ❤  do check at github mohitk30 -->



<section>
<!-- <div class="px-5 pt-2 mt-5 mx-2 fromdirectorheadinf my-auto"> Admin Members</div> -->

<div id="companies" class="text-light">
  <div id="all-companies">
  <table class="table text-light">
  <thead>
    <tr>
      <th class="px-5" scope="col">Admin Username</th>
      <th   scope="col">Admin Enroll No.</th>
      <th   scope="col">Admin Password</th>
      <th   scope="col">  Update</th>
      <th   scope="col">  Delete</th>
      
    </tr>
  </thead>
  <?php
// $company=[
// [  'c_name'=>'Amazon','arrive_year'=>'2012' ],
// [  'c_name'=>'Google','arrive_year'=>'2014' ],
// [  'c_name'=>'Google','arrive_year'=>'2014' ],
// [  'c_name'=>'Google','arrive_year'=>'2014' ],
// [  'c_name'=>'Google','arrive_year'=>'2014' ],
// [  'c_name'=>'Google','arrive_year'=>'2014' ],
// [  'c_name'=>'Google','arrive_year'=>'2014' ],
// [  'c_name'=>'Google','arrive_year'=>'2014' ],
// [  'c_name'=>'Google','arrive_year'=>'2014' ],
// [  'c_name'=>'Google','arrive_year'=>'2014' ],
// [  'c_name'=>'Google','arrive_year'=>'2014' ],
// [  'c_name'=>'Microsoft','arrive_year'=>'2016' ]
 
// ];

require_once('connection.php');


$dbs=db_connect();
//$vari=mysqli_refresh($dbs, MYSQLI_REFRESH_GRANT);
 
 $query="SELECT * from admin_memb";
 $result_setadmlist=mysqli_query($dbs,$query);
 //$countr=mysqli_num_rows($result_sets);


?>
  <tbody>
      <?php
      while($admins=mysqli_fetch_assoc($result_setadmlist))
       { ?>
    <tr >
      <th scope="row" class="px-5">   <?php echo  $admins['admusername']; ?></th>
      <td> <?php echo  $admins['admenroll']; ?></td>
      <td> <?php echo  $admins['admpassword']; ?></td>
      <td> <a  href="/cruds/updateadmin.php?admid=<?php echo $admins['admid'];?>"><button class="btn btn-primary"> Update</button></a></td>
      <td>  <button <?php if( $admins['admenroll']=="201210030"){
       echo "disabled";}else{
         
       }?> onclick="deleteadminid(<?php echo $admins['admid'];?>)" class="btn btn-danger">Delete</button > </td>
       
    </tr>
    <?php }?>
     
  </tbody>
</table>




  </div>









<!-- </div>


<div id="error-in-year">
<i class="fas fa-exclamation-triangle fa-2x  "></i> <span class="error-name">Their might be  different year for different company in this list.</span>


</div> -->





</section>


        






    
  