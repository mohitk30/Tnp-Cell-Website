<?php



// require_once('../connection.php');
// $dbs=db_connect();
 
// $query="SELECT onoff from func_onoff where func_name='studentr'";
 //$result_set=mysqli_query($dbs,$query);
 //$countr=mysqli_num_rows($result_set);
//   echo $countr;
//echo $result_set;

// while($row = mysqli_fetch_assoc($result_set)){
//     $branchname[] = $row['branch'];
// }
//$sre=mysqli_fetch_assoc($result_set);
//echo $dir['NAME'];
 //echo json_encode( $sre);
?>
 
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <!-- site icon -->
    <link rel="icon" href="images/siteicon.png" type="image/gif" sizes="50x50">


    <title>New Tnp members Form
</title>
</head>

<!-- Develop by Mohit kumar with ❤  do check at github mohitk30 -->

<body>
    <main>
    <?php
    include('../connection.php');
  if(isset($_POST['tnpenrol'])){
    //include('sucessAlertstudent.php');
  $tnperoll=$_POST['tnpenrol'];
  $tnppos=$_POST['posi'];

  $dbs=db_connect();
         
  $query1="SELECT * from student where senrollno='".$tnperoll."'";
  $result_check=mysqli_query($dbs,$query1);

  if($result_check){

    $query="INSERT INTO tnp_memb(tnpenroll,tnppos) VALUES('".$tnperoll."','".$tnppos."');";
    $result_setreg=mysqli_query($dbs,$query);
    // $regi=mysqli_fetch_assoc($result_setreg);
    if($result_setreg){
      echo '<script>alert("Tnp Member added successfully")</script>';
    }else{
      echo '<script>alert("Error in adding Tnp Member !!!")</script>';
    }
  }else{
    echo '<script>alert("No Student exist with this Enroll No.")</script>';
  }
 

    
   // header('refresh:5; url=/');
     
 
}
      ?>
    <nav class="navbar navbar-light bg-light ">
  <div class="container-fluid nav-in-company">
    <span class="navbar-text fs-4 ">
    <?php


// $previous = "javascript:history.go(-1)";
// if(isset($_SERVER['HTTP_REFERER'])) {
//     $previous = $_SERVER['HTTP_REFERER'];
// }
 include_once('../backlink.php');
 

//  $previous1 = "javascript:history.go(-2)";
// if(isset($_SERVER['HTTP_REFERER'])) {
//     $previous1 = $_SERVER['HTTP_REFERER'];
// }
 
// $adm ="mohitk30.github.io";

// if ($_SERVER['REQUEST_METHOD'] == 'POST'){


  
//   //  header('location:'.$adm);
// }
//header('refresh:0');
?>

<!-- <a class="text-decoration-underline" href="<?
//= $previous ?>">Back </a> --> &nbsp;
        
     <!-- <a href="/" class="text-decoration-underline"> Home</a>> Register yourself for campus placement   -->
    </span>
  </div>
</nav>
<section>
    <div class="w-50  mx-auto">
  <!-- <p > <span class="
  <?php 
  //echo $sre['onoff']=="on"?"green-color":"red-color"; ?>
  "> <?php
  // echo $sre['onoff']=="on"?"":"Registrations are Closed"; ?></span></p>   -->

    <form method="post"   action="<?php
                                        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                        echo $actual_link;
                                        ?>" id="" >
   
    <div class="form-group col-md-6 mt-3">
     <span class="pb-3 pt-2"> Add new Tnp Member's Details</span><br><br>
    <label  class="bold-label" for="inputtnpmeno"> Member enroll no  </label>
    <input type="text" class="form-control" id="inputtnpmeno" name="tnpenrol" placeholder="Enroll no" required>
  </div>
  <div class="form-group col-md-6 mt-3">
    <label  class="bold-label" for="inputAddress"> Position</label>
    <input type="text"  class="form-control" id="inputAddress" name="posi" placeholder="Student Position" required>
  </div>
  
  <button type="submit" class="btn btn-primary mt-5 mx-5 "<?php 
  //echo $sre['onoff']=="on"?"":"disabled"; ?> >Submit details</button>
  
</form>






    </div>







</section>


        






    </main>
    <script>
 

    </script>

    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</body>

</html>

 