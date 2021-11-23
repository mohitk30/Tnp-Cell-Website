<?php

require_once('../connection.php');
$dbs=db_connect();
 
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


    <title>Past Recruiter Form
</title>
</head>

<!-- Develop by Mohit kumar with ❤  do check at github mohitk30 -->

<body>
    <main>
    <?php
  if(isset($_POST['pstrlogo'])){
    //include('sucessAlertstudent.php');
           $pstrname=$_POST['pstrname'];
           $pstrlogolnk=$_POST['pstrlogo'];
    $query="INSERT into pst_reuriter(pstrname,pstrlink) value('".$pstrname."','".$pstrlogolnk."')";
    $result_set=mysqli_query($dbs,$query);
    header("Refresh:0");
   // header('refresh:5; url=/');
     
 
   }
   else{
   // echo "not set";
   }
      ?>
    <nav class="navbar navbar-light bg-light ">
  <div class="container-fluid nav-in-company">
    <span class="navbar-text fs-4 ">
        
     <!-- <a href="/" class="text-decoration-underline"> Home</a>> --> Add a new past Recruiter  
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

    <form method="post"   action="newpastreuc.php" id="" >
    <div class="form-group col-md-6 mt-3">
    <label  class="bold-label" for="inputAddress"> Organization Name</label>
    <input type="text" class="form-control" id="inputAddress" name="pstrname" placeholder="Company Name" required>
  </div>
    <div class="form-group col-md-6 mt-3">
    <label  class="bold-label" for="inputAddress"> Organization Logo Link</label>
    <input type="url" class="form-control" id="inputAddress" name="pstrlogo" placeholder="Logo Link" required>
  </div>
 
  
  <button type="submit" class="btn btn-primary mt-5 mx-5 "<?php 
  //echo $sre['onoff']=="on"?"":"disabled"; ?> >Submit Link</button>
  
</form>






    </div>







</section>


        






    </main>
    <script>
 

    </script>

    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</body>

</html>

 