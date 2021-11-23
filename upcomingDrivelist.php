
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
include('connection.php');
$dbs=db_connect();
//$vari=mysqli_refresh($dbs, MYSQLI_REFRESH_GRANT);
 
//$query="SELECT * from drives";
$query="SELECT *,DATEDIFF(drdate, CURDATE())   AS Datediff from drives order by Datediff";
 $result_setdrives=mysqli_query($dbs,$query);



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
     <!-- ajax script -->
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- site icon -->
    <link rel="icon" href="images/siteicon.png" type="image/gif" sizes="50x50">


    <title>Upcoming Drives | Admin
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


// $previous = "javascript:history.go(-1)";
// if(isset($_SERVER['HTTP_REFERER'])) {
//     $previous = $_SERVER['HTTP_REFERER'];
// }
include_once('backlink.php');
//header('refresh:0');
?>

<a class="text-decoration-underline" href="<?=  $admlink ?>">Back </a>
    </span>
  </div>
</nav>
<section>
<div class="px-5 pt-2 mx-2 fromdirectorheadinf "> Upcoming Placement Drives</div>
    <?php
    
// $company=[
//     [  'c_name'=>'Amazon','arrive_year'=>'2012' ],
//     [  'c_name'=>'Google','arrive_year'=>'2014' ],
//     [  'c_name'=>'Google','arrive_year'=>'2014' ],
//     [  'c_name'=>'Google','arrive_year'=>'2014' ],
//     [  'c_name'=>'Google','arrive_year'=>'2014' ],
//     [  'c_name'=>'Google','arrive_year'=>'2014' ],
//     [  'c_name'=>'Google','arrive_year'=>'2014' ],
//     [  'c_name'=>'Google','arrive_year'=>'2014' ],
//     [  'c_name'=>'Google','arrive_year'=>'2014' ],
//     [  'c_name'=>'Google','arrive_year'=>'2014' ],
//     [  'c_name'=>'Google','arrive_year'=>'2014' ],
//     [  'c_name'=>'Microsoft','arrive_year'=>'2016' ]
     
//     ];
    
    ?>
    <div id="main-drives-div" class="p-5 d-flex flex-wrap">

    <?php
      //  foreach($company as $comp) 
      while($drives=mysqli_fetch_assoc($result_setdrives))
       { ?>
     <div class="card mx-4 mt-5 shadow" style="width: 19rem;">
     <div class="alert alert-success" role="alert">
     <i class="far fa-clock"></i>
     <?php
$redclass="red-col-text";

     if($drives['Datediff']==0){
       echo  "<span class=".$redclass."> Happening Today</span>";
     }else{
      echo $drives['Datediff']." days later";
     }
     
     
     ?> 
</div>
  <div class="card-body ">
    <h5 class="card-title bold-label"><?=$drives['orgname']?></h5>
    <p class="card-text"> Address:  <?=$drives['orgaddress']?>,&nbsp; <?=$drives['orgcountry']?>,&nbsp; <?=$drives['orgpin']?> </p>
    <h6 class="card-subtitle mb-2 text-muted">Job :<?=$drives['empltype']?>,<?=$drives['emplrole']?></h6>
    
    <a href="javascript:void(0);" class="card-link  ">Email: <?=$drives['orgpemail']?></a><br>
    <a href="javascript:void(0);" class="card-link bold-label">Date: <?=$drives['drdate']?></a><br>
    <a href="javascript:void(0);" class="card-link">Max CTC (in lacks): <?=$drives['maxctclack']?> </a><br>
    <a href="javascript:void(0);" class="card-link">Min CGPA: <?=$drives['orgmcgpa']?> </a><br>
    <a href="/cruds/updateupdrives.php?updid=<?php echo $drives['drid'];?>"> <button class="btn btn-primary mx-4 mt-2" >Update</button></a>
    <button class="btn btn-danger mx-4 mt-2" onclick="deletedriveid(<?php echo $drives['drid'];?>)" >Delete</button>
    <button class="btn btn-success mx-3 mt-2" onclick="approvedriveid(<?php echo $drives['drid'];?>)" >Approve for campus Drive <i class="fas fa-<?php echo $drives['isapproved']=="yes"?"check-circle":"times" ?> "></i></button>
    <a href="/downloads/download.php?cgp=<?=$drives['orgmcgpa']?>&cname=<?=$drives['orgname']?>" ><button class="btn btn-secondary mx-4 mt-2"   >Download Eligible students list</button></a>
  </div>
</div>
    <?php }?>





    </div>
    




</section>


        






    </main>
    <script>
    </script>

    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</body>

</html>

 