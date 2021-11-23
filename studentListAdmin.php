
<?php
 //error_reporting(1);
//  if(!$_POST){
//   //echo  "<script> alert('Company Registered'); </script>";
//  }
 //  else{
//  $new_date = date('Y/m/d', strtotime($_POST['dateFrom']));
//  echo  $_POST['dateFrom'];
//  header('refresh:5; url=/');
//  }
//  if(isset($new_date)){

  //  echo "set";
//   }

require_once('connection.php');
$dbs=db_connect();
 
 $query="SELECT * from student";
 $result_sets=mysqli_query($dbs,$query);
 $countr=mysqli_num_rows($result_sets);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="styleindex.css">
    <!-- ajax -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,400;0,600;0,800;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- script -->
    <script src='main.js'>
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
      <!-- ajax -->
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- site icon -->
    <link rel="icon" href="images/siteicon.png" type="image/gif" sizes="50x50">


    <title>Students List
</title>
</head>

<!-- Develop by Mohit kumar with ❤  do check at github mohitk30 -->

<body>
    <main>
    <?php
   
      ?>
    <nav class="navbar navbar-light bg-light ">
  <div class="container-fluid nav-in-company">
    <span class="navbar-text fs-4 ">
      <?php
      include('backlink.php');
      ?>
      <!-- <a href="<?=$admlink?>" class="text-decoration-underline"> Back</a>> --> Students  
    </span>
  </div>
</nav>
<section>
<div class="px-5 pt-2 mx-2 fromdirectorheadinf "> Students List</div>
<!-- <div class="mt-2 mb-2 mx-5">
  If you haven't registered <a class="link-blue-text" href="checkstudent.php">Click Here</a>

</div> -->
<div class="p-3 text-uppercase font-weight-bold">Click on Enroll No to view student Information</div>
<div class="search-div w-100 p-3">
  
<div class="mb-3 w-75 mx-auto mt-4 d-flex flex-row">
<!-- <form action="/placereadys.php" method="post" class="w-100 d-flex flex-row"> -->
  <input type="text" name="sname" value="" class="form-control w-50" id="inputrollnostd" placeholder="Search by student Enroll" required>
  <button class="btn btn-success mx-5" type="submit" onclick="showbyEnroll()">Search</button>
  <!-- </form> -->
</div>

<div id="searched-data-div-stud" class="w-100 shadow mx-auto  p-3">
 


</div>


</div>
   

<div id="rstudents" class="mt-4 w-100 mx-auto p-3">
  <div id="all-students" class="w-100">
  <table class="table table-bordered ">
  <thead>
    <tr>
      <th class="px-5" scope="col"> Name</th>
      <th   scope="col" class="px-5">Enroll</th>
      <th   scope="col" class="px-5">Update</th>
      <th   scope="col" class="px-5">Delete</th>
      <th   scope="col" class="px-5">Update Password</th>
      <th   scope="col" class="px-5">Update Placement Info</th>
      
    </tr>
  </thead>
   
 
  <?php
// $company=[
// [  'c_name'=>'sachin','arrive_year'=>'CSE','reslink'=>'http://nitdelhi.ac.in' ],
// [  'c_name'=>'komal','arrive_year'=>'CSE','reslink'=>'http://nitdelhi.ac.in' ],
// [  'c_name'=>'komal','arrive_year'=>'CSE' ,'reslink'=>'http://nitdelhi.ac.in'],
// [  'c_name'=>'komal','arrive_year'=>'CSE','reslink'=>'http://nitdelhi.ac.in' ],
// [  'c_name'=>'komal','arrive_year'=>'CSE' ,'reslink'=>'http://nitdelhi.ac.in'],
// [  'c_name'=>'komal','arrive_year'=>'CSE' ,'reslink'=>'http://nitdelhi.ac.in'],
// [  'c_name'=>'komal','arrive_year'=>'CSE' ,'reslink'=>'http://nitdelhi.ac.in'],
// [  'c_name'=>'komal','arrive_year'=>'CSE' ,'reslink'=>'http://nitdelhi.ac.in'],
// [  'c_name'=>'komal','arrive_year'=>'CSE' ,'reslink'=>'http://nitdelhi.ac.in'],
// [  'c_name'=>'komal','arrive_year'=>'CSE' ,'reslink'=>'http://nitdelhi.ac.in'],
// [  'c_name'=>'komal','arrive_year'=>'CSE' ,'reslink'=>'http://nitdelhi.ac.in'],
// [  'c_name'=>'Microsoft','arrive_year'=>'CSE','reslink'=>'http://nitdelhi.ac.in' ]
 
// ];

?>
  <tbody id="all-stud" >
      <?php
      while($rstud=mysqli_fetch_assoc($result_sets))
       { ?>
       
    <tr id="" > 
      <th scope="row" class="px-5">   <?php echo  $rstud['sfname']; echo " "; echo  $rstud['slname'];?> </th>
      <td class="px-5"> <a href="studentinfoadmin.php?rol=<?=$rstud['senrollno'] ?>"> <?php echo   $rstud['senrollno'] ; ?></a></td>
      <td class="px-5"> <a  class="btn btn-primary rlink-btn" href="cruds/updatenewStudent.php?rols=<?=$rstud['senrollno'] ?>">Update </a> </td>
      <td class="px-5"> <button  class="btn btn-danger rlink-btn"  onclick="deleteStudentid(<?php echo  $rstud['senrollno']; ?>)">  Delete </button> </td>
      <td class="px-5"> <a  class="btn btn-outline-primary rlink-btn" href="cruds/updatestudpass.php?rol=<?=$rstud['senrollno'] ?>">Update Password </a> </td>
      <td class="px-5"> <a  class="btn btn-outline-primary rlink-btn" href="cruds/updatestudplaced.php?rol=<?=$rstud['senrollno'] ?>">Update Placement Info </a> </td>
       
    </tr>
    <?php }?>
     
  </tbody>
   <?php
// $query2="SELECT * from student where senrollno='".."'";
// $result_sets2=mysqli_query($dbs,$query2);
// $countr=mysqli_num_rows($result_sets2);

// ?>  
    
   
   
  
</table>

 


  </div>









</div>



</section>


        






    </main>
    <script>
    </script>

    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</body>

</html>

 