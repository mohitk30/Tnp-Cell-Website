<?php
 $upregsid= $_GET['upregsid'];
 //echo  $prid;
 $previous = "javascript:history.go(-1)";
 if(isset($_SERVER['HTTP_REFERER'])) {
     $previous = $_SERVER['HTTP_REFERER'];
 }
 include('../connection.php');
 $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 





 $dbsadm=db_connect();
         
 
 
 $query="SELECT * FROM reg_student where rsid='".$upregsid."'";
 $result_setreg=mysqli_query($dbsadm,$query);
 $regi=mysqli_fetch_assoc($result_setreg);
 
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $dbsadmup=db_connect();
  $regen=$_POST['regeno'];
  $regyr=$_POST['regyear'];
  $reglnk=$_POST['regrlink']; 
 
 
 $query="UPDATE reg_student SET rsenroll='".$regen."',rsyear='".$regyr."',rslink='".$reglnk."' where rsid='".$upregsid."'";
  $result_setadmdup=mysqli_query($dbsadmup,$query);
   //  echo "done go back";
    // $_SERVER["REQUEST_METHOD"] ="";
 include('../regstudupAlert.php');
     header('refresh:2');
    }
 
 
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
    <!-- site icon -->
    <link rel="icon" href="images/siteicon.png" type="image/gif" sizes="50x50">


    <title>Update Registered Students</title>
</head>

<!-- Develop by Mohit kumar with ❤  do check at github mohitk30 -->

<body>
    <main>
    <div class="mt-5 mx-5 ">
<!-- <a class="text-decoration-underline fa-2x" href="../pastrList.php">Back </a> -->
</div>

<div class="mx-auto w-50">
    <h5 class="mb-4"> Update Registered Students details</h5> 
<form method="post"   action="<?php
                                        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                        echo $actual_link;
                                        ?>" id="register-student-form" >
   
   <div class="mb-3 col-md-4">
 <label for="inputeno" class="form-label bold-label">Enroll No.</label>
 <input type="number"  min="201210030" name="regeno" class="form-control"  id="inputeno" value="<?=$regi['rsenroll']?>" placeholder="Enrollment No." required>
</div>
<div class="mb-3 col-md-4">
 <label for="yearselect" class="form-label bold-label">Current Year</label>
 <select name="regyear" class="custom-select px-3 py-2 mx-2 rounded"   id="yearselect" required>
  
 <option selected value="4">Fourth</option>
 <option value="3">Third</option>
  
</select>
</div>
<div class="mb-3">
 <label    for="inputrlink" class="form-label bold-label">Resume link</label>
 <input type="url" name="regrlink" class="form-control" id="inputrlink" value="<?=$regi['rslink']?>" placeholder="Resume Link" required>
</div>
 
 <button type="submit" class="btn btn-primary mt-5 mx-5 "  >Update details</button>
 
</form>




</div>

</main>



<script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</body>

</html>