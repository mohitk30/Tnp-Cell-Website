
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
$query="SELECT * from tnp_memb join student on senrollno=tnpenroll";
 $result_settnpmemb=mysqli_query($dbs,$query);
 //$countr=mysqli_num_rows($result_sets);



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
    <!-- ajax script -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <!-- site icon -->
    <link rel="icon" href="images/siteicon.png" type="image/gif" sizes="50x50">


    <title>Tnp Members
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
      <!-- <a href="/" class="text-decoration-underline"> Home</a>> Students Placement Team   -->
    </span>
  </div>
</nav>
<section>
<div class="px-5 pt-2 mx-2 fromdirectorheadinf ">  Student's Placement Team</div>
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
         while($tnpmembs=mysqli_fetch_assoc($result_settnpmemb))
       { ?>
     <div class="card mx-4 mt-5 shadow" style="width: 17rem;">
      
  <div class="card-body ">
    <h5 class="card-title bold-label"><?=$tnpmembs['tnpenroll']?></h5>
    <p class="card-text"> <?=$tnpmembs['tnppos']?> </p>
    <!-- <h6 class="card-subtitle mb-2 text-muted">Mob.:+917678107821</h6>
    
    <a href="javascript:void(0);" class="card-link bold-label">Email: abc@nitdelhi.ac.in</a><br>
    <a href="javascript:void(0);" class="card-link">Branch: CSE </a> -->
    <br>
    <a href="/cruds/updatetnpmemb.php?uptnpid=<?php echo $tnpmembs['tnpid'];?>"> <button class="btn btn-primary mt-2" >Update</button></a>
    <button class="btn btn-danger mx-3 mt-2" onclick="deletedtnpid(<?php echo $tnpmembs['tnpid'];?>)" >Delete</button>
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

 