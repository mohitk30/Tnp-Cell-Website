<?php
  $enrol= $_GET['rol'];
 //echo  $prid;
 $previous = "javascript:history.go(-1)";
 if(isset($_SERVER['HTTP_REFERER'])) {
     $previous = $_SERVER['HTTP_REFERER'];
 }
 include('../connection.php');
 $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 
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


    <title>Update <?=$enrol?> Password</title>
</head>

<!-- Develop by Mohit kumar with ❤  do check at github mohitk30 -->

<body>
    <main>
    <div class="mt-5 mx-5 ">
<!-- <a class="text-decoration-underline fa-2x" href="../pastrList.php">Back </a> -->
</div>
<?php
$dbsadm=db_connect();
         
 
 
$query1="SELECT * FROM s_login where logenroll='".$enrol."'";
$result_setreg=mysqli_query($dbsadm,$query1);
$slog=mysqli_fetch_assoc($result_setreg);

if ($_SERVER["REQUEST_METHOD"] == "POST"){

  $dbsadmup=db_connect();
 // $senroll=$_POST['seroll'];
  $spass=$_POST['spass'];
  
 
 
 $query="UPDATE s_login SET logpassword='".$spass."' where logenroll='".$enrol."'";
  $result_setadmdup=mysqli_query($dbsadmup,$query);
  $query2="SELECT *  From s_login  where logenroll='".$enrol."'";
  $result_setadmdup2=mysqli_query($dbsadmup,$query2);
  $result_setadmdup23=mysqli_fetch_assoc($result_setadmdup2);
   
    // echo "done go back";
    // $_SERVER["REQUEST_METHOD"] ="";
if(isset($result_setadmdup23)){
  echo '<script>alert("Data Updated")</script>';
 // echo "<script>alert("."Password Updated".");<?script>";
     header('refresh:0');
  }
  else{
    echo '<script>alert("Data not Updated")</script>';
  }
   }


?>
<div class="mx-auto w-50 pt-5">
    <h5>Update <?=$enrol?> Password</h5>
<form method="post" action="">
<div class="form-row  mt-3">
    
<div class="input-group mb-3 mt-4">
         <span class="input-group-text">*Enroll No.</span>
          <input type="number" class="form-control" disabled placeholder="Enroll No." value="<?=$enrol?>" name="seroll" aria-label="Username" required>
          <span class=" mx-2"></span>
          <span class="input-group-text">*Password</span>
          <input type="text" class="form-control" name="spass"  value="<?php if(isset($slog['logpassword'])){echo $slog['logpassword'];}?>" placeholder="Password" aria-label="Server" required>
    </div>


  <button type="submit" class="btn btn-primary mt-5 mx-5 "<?php 
  //echo $sre['onoff']=="on"?"":"disabled"; ?> >Submit details</button>
    
  
  
   
    
 
  
   




</form>




</div>

</main>



<script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</body>

</html>