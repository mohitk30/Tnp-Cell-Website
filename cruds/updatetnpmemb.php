<?php
  $uptnpid= $_GET['uptnpid'];
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


    <title>Update Tnp members</title>
</head>

<!-- Develop by Mohit kumar with ❤  do check at github mohitk30 -->

<body>
    <main>
    <div class="mt-5 mx-5 ">
<!-- <a class="text-decoration-underline fa-2x" href="../pastrList.php">Back </a> -->
</div>
<?php
$dbsadm=db_connect();
         
 
 
$query="SELECT * FROM tnp_memb where tnpid='".$uptnpid."'";
$result_setreg=mysqli_query($dbsadm,$query);
$tnpmi=mysqli_fetch_assoc($result_setreg);

if ($_SERVER["REQUEST_METHOD"] == "POST"){

  $dbsadmup=db_connect();
 // $uptnproll=$_POST['tnpenrolup'];
  $uptnppos=$_POST['posiup'];
  
 
 
 $query="UPDATE tnp_memb SET tnppos='".$uptnppos."' where tnpid='".$uptnpid."'";
  $result_setadmdup=mysqli_query($dbsadmup,$query);
   
    // echo "done go back";
    // $_SERVER["REQUEST_METHOD"] ="";
if($result_setadmdup){
     header('refresh:0');
  }
   }


?>
<div class="mx-auto w-50 pt-5">
    <h5>Update Tnp Member Details</h5>
<form method="post" action="updatetnpmemb.php?uptnpid=<?php echo $uptnpid ?> ">
<div class="form-row  mt-3">
    
<div class="form-group col-md-6 mt-3">
     <!-- <span class="pb-3 pt-2"> Update Member's Details</span><br><br> -->
    <label  class="bold-label" for="inputtnpmeno"> Member enroll no  </label>
    <input type="text" class="form-control" id="inputtnpmeno" disabled name="tnpenrolup" value="<?=$tnpmi['tnpenroll']?>" placeholder="201210030" required>
  </div>
  <div class="form-group col-md-6 mt-3">
    <label  class="bold-label" for="inputAddress"> Position</label>
    <input type="text"  class="form-control" id="inputAddress" name="posiup" value="<?=$tnpmi['tnppos']?>" placeholder="Student Head/Coordinator" required>
  </div>
</div>
  <button type="submit" class="btn btn-primary mt-5 mx-5 "<?php 
  //echo $sre['onoff']=="on"?"":"disabled"; ?> >Submit details</button>
    
  
  
   
    
 
  
   




</form>




</div>

</main>



<script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</body>

</html>