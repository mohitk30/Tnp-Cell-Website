

<?php
$enrol= $_GET['rol'];
//$backadminlink= $_GET['adml'];
// echo $backadminlink;
require_once('connection.php');
$dbs=db_connect();
$query="SELECT * from student join s_login on logenroll=senrollno join sp_info on spenroll=senrollno where senrollno='".$enrol."'";
$result_sets=mysqli_query($dbs,$query);

$studd=mysqli_fetch_assoc($result_sets)
 
//$query="SELECT * FROM project WHERE position<3";
//$result_set=mysqli_query($dbs,$query);
//$countr=mysqli_num_rows($result_set);
//echo $countr;
?>
<!-- html part -->


 







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
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,400;0,600;0,800;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- script -->
    <script src='main.js'>
    </script>
     <!-- ajax script -->
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- site icon -->
    <link rel="icon" href="images/siteicon.png" type="image/gif" sizes="50x50">


    <title>Student information</title>
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
include_once('backlink.php');
//header('refresh:0');
?>

  <a class="text-decoration-underline" href="<?=  $admlink ?>">Back </a> > Student information
    </span>
  </div>
</nav>

<section class="p-3">


<div class="px-5 pt-2 mt-5 mx-2 fromdirectorheadinf my-auto"> Information about Enroll no <?=$enrol?></div>


 
<div class="input-group w-50 pt-5 mx-auto mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="">First and last name</span>
  </div>
  <input type="text" disabled value="<?=$studd['sfname']?>"  class="form-control">
  <input type="text" disabled value="<?=$studd['slname']?>" class="form-control">
</div>
 

<div class="input-group input-group-sm mb-3 mx-auto w-50">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Enroll No.</span>
  </div>
  <input type="text" disabled value="<?=$studd['senrollno']?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>

<div class="input-group input-group-sm mb-3 mx-auto w-50">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Father Name</span>
  </div>
  <input type="text" disabled value="<?=$studd['sfathername']?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>

<div class="input-group input-group-sm mb-3 mx-auto w-50">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Branch</span>
  </div>
  <input type="text" disabled value="<?=$studd['sbranch']?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>

<div class="input-group input-group-sm mb-3 mx-auto w-50">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Year</span>
  </div>
  <input type="text" disabled value="<?=$studd['scyear']?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>


<div class="input-group input-group-sm mb-3 mx-auto w-50">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Gender</span>
  </div>
  <input type="text" disabled value="<?=$studd['sgender']?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>

<div class="input-group input-group-sm mb-3 mx-auto w-50">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">CGPA</span>
  </div>
  <input type="text" disabled value="<?=$studd['sccgpa']?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>


<div class="input-group input-group-sm mb-3 mx-auto w-50">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Address</span>
  </div>
  <input type="text" disabled value="<?=$studd['saddress']?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>


<div class="input-group input-group-sm mb-3 mx-auto w-50">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Country</span>
  </div>
  <input type="text" disabled value="<?=$studd['scountry']?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>


<div class="input-group input-group-sm mb-3 mx-auto w-50">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
  </div>
  <input type="text" disabled value="<?=$studd['semail']?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>


<div class="input-group input-group-sm mb-3 mx-auto w-50">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Contact No.</span>
  </div>
  <input type="text" disabled value="<?=$studd['spno']?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>


 

<div class="input-group input-group-sm mb-3 mx-auto w-50">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Resume</span>
  </div>
  <input type="text" disabled value="<?=$studd['srslink']?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>


<div class="input-group input-group-sm mb-3 mx-auto w-50">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Placed in</span>
  </div>
  <input type="text" disabled value="<?=$studd['spplaceyear']?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>


<div class="input-group input-group-sm mb-3 mx-auto w-50">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Placed in Company</span>
  </div>
  <input type="text" disabled value="<?=$studd['spspplacecomp']?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>

<div class="input-group input-group-sm mb-3 mx-auto w-50">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Placed with CTC</span>
  </div>
  <input type="text" disabled value="<?=$studd['spplacectc']?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>

<div class="input-group input-group-sm mb-3 mx-auto w-50">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Login Password</span>
  </div>
  <input type="text" disabled value="<?=$studd['logpassword']?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
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

<?php
db_disconnect($dbs);


?>