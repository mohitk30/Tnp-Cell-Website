

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
    <link rel="stylesheet" type="text/css" href="../styleindex.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,400;0,600;0,800;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- script -->
    <script src='../main.js'>
    </script>
     <!-- ajax script -->
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- site icon -->
    <link rel="icon" href="images/siteicon.png" type="image/gif" sizes="50x50">


    <title>All Admins</title>
</head>

<!-- Develop by Mohit kumar with ❤  do check at github mohitk30 -->

<body>
    <main>
    <nav class="navbar navbar-light bg-light ">
  <div class="container-fluid nav-in-company">
    <span class="navbar-text fs-4 ">
      <!-- <a href="/" class="text-decoration-underline"> Home</a>> Past recruiters -->
      <?php


// $previous = "javascript:history.go(-1)";
// if(isset($_SERVER['HTTP_REFERER'])) {
//     $previous = $_SERVER['HTTP_REFERER'];
// }
include_once('../backlink.php');
//header('refresh:0');
?>

<a class="text-decoration-underline" href="<?=  $admlink ?>">Back </a>
    </span>
    <!-- <a href="javascript:window.top.location.reload(true)" class="continue"> <button class="ms-auto btn btn-success" onclick="">Refersh</button> </a> -->
  </div>
</nav>

<section>
<div class="px-5 pt-2 mt-5 mx-2 fromdirectorheadinf my-auto"> Admin Members</div>

<div id="companies">
  <div id="all-companies">
  <table class="table">
  <thead>
    <tr>
      <th class="px-5" scope="col">Admin Username</th>
      <th   scope="col">Admin Enroll No.</th>
      <th   scope="col">Admin Password</th>
 
      
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

require_once('../connection.php');


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


        






    </main>
    <script>
    </script>

    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</body>

</html>