<?php
  $admid= $_GET['admid'];
 //echo  $prid;
 $previous = "javascript:history.go(-1)";
 if(isset($_SERVER['HTTP_REFERER'])) {
     $previous = $_SERVER['HTTP_REFERER'];
 }

 $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 
 include('../connection.php');
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $dbsadmup=db_connect();
 // $adupen=$_POST['adenoup'];
  $adupun=$_POST['admunameup'];
  $adupp=$_POST['admpassup']; 
  $adupdob=$_POST['upaddob'];
  $adupemal=$_POST['upadmeml'];
 
 
 $query="UPDATE admin_memb SET admusername='".$adupun."',admpassword='".$adupp."',admdob='".$adupdob."',admemail='".$adupemal."' where admid='".$admid."'";
  $result_setadmdup=mysqli_query($dbsadmup,$query);
  //$admi=mysqli_fetch_assoc($result_setadmd);
  // echo "done go back";
  // $_SERVER["REQUEST_METHOD"] ="";
  include('../adminupdateAlert.php');

    header('refresh:2');
 }

 
 $dbsadm=db_connect();
         
 
 
 $query="SELECT * FROM admin_memb where admid='".$admid."'";
 $result_setadmd=mysqli_query($dbsadm,$query);
 $admi=mysqli_fetch_assoc($result_setadmd);


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


    <title>Update admin</title>
</head>

<!-- Develop by Mohit kumar with ❤  do check at github mohitk30 -->

<body>
    <main>
    <div class="mt-5 mx-5 ">
<!-- <a class="text-decoration-underline fa-2x" href="../pastrList.php">Back </a> -->
</div>
<?php


?>
<div class="mx-auto w-50 pt-5">
    <h5>Update Admin</h5>
    <form  method="post" action="<?php
                                        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                        echo $actual_link;
                                        ?>">
         <div class="mb-3 col-md-6">
         <label >Enroll</label>
         <input type="number"  min="100000000" name="adenoup" class="form-control" value="<?=$admi['admenroll']?>" disabled  id="inputeno" placeholder="Enrollment No." required>
        </div>
        <div class="form-group col-md-6 mt-2">
        <label >Username</label>
      <input type="text" class="form-control" id="inputuname" name="admunameup" value="<?=$admi['admusername']?>" placeholder="Username" required>
    </div>
    <div class="form-group col-md-6 mt-2">
       <label >Password</label>
      <input type="text" class="form-control" id="inputupass" name="admpassup" value="<?=$admi['admpassword']?>" placeholder="Password" required>
    </div>
    <div class="form-group col-md-6 ">
        <label  class="bold-label" for="inputDate"> Date of Birth </label>
        <input type="date"  name="upaddob" class="form-control" id="inputDate" value="<?=$admi['admdob']?>" placeholder="Address" required>
      </div>
      <div class="form-group col-md-8 mt-3  ">
      <label  class="bold-label" for="inputemail">Email</label> 
      <input type="email" class="form-control" id="inputemail" name="upadmeml" value="<?=$admi['admemail']?>" placeholder="Email" required>
    </div>
        <button type="submit" class="btn btn-primary mt-3 mx-2 " onclick="updt()" >Update Admin</button>
         </form>
       




</div>

</main>

<script>
  function updt(){
    location.reload();
  }
</script>

<script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</body>

</html>