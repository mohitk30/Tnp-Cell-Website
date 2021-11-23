<?php
  $updid= $_GET['updid'];
 //echo  $prid;
 $previous = "javascript:history.go(-1)";
 if(isset($_SERVER['HTTP_REFERER'])) {
     $previous = $_SERVER['HTTP_REFERER'];
 }

 $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


 include('../connection.php');
 $dbs=db_connect();
 //$vari=mysqli_refresh($dbs, MYSQLI_REFRESH_GRANT);
  
 //$query="SELECT * from drives";
 $query="SELECT * from drives where drid='".$updid."'";
  $result_setdrives=mysqli_query($dbs,$query);
  $compid=mysqli_fetch_assoc($result_setdrives);





 
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


    <title>All Admins</title>
</head>

<!-- Develop by Mohit kumar with ❤  do check at github mohitk30 -->

<body>
    <main>
    <div class="mt-5 mx-5 ">
<!-- <a class="text-decoration-underline fa-2x" href="../pastrList.php">Back </a> -->
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){

  
  $dbadddrive=db_connect();
  $orgnam=$_POST['orgnam'];
  $orgadrs=$_POST['orgadd'];
  $orgcyt=$_POST['orgcty'];
  $orgstat=$_POST['orgcon'];
  $orgpnn=$_POST['orgpnn'];

  $orgeml=$_POST['orgeml'];
  $orgcgp=$_POST['orgmcgp'];

  $dridate=$_POST['drrdate'];
  $mxctc=$_POST['mxctc'];
  $emptype=$_POST['empuptype'];
  $emprole=$_POST['uprole'];
 


  $query="UPDATE drives SET orgname='".$orgnam."',orgaddress='".$orgadrs."',orgcity='".$orgcyt."',orgcountry='".$orgstat."',orgpin='".$orgpnn."',orgpemail='".$orgeml."',orgmcgpa='".$orgcgp."',drdate='".$dridate."',maxctclack='".$mxctc."',empltype='".$emptype."',emplrole='".$emprole."' where drid='".$updid."'";
  $result_setadddrive=mysqli_query($dbadddrive,$query);
   
    // echo "done go back";
    // $_SERVER["REQUEST_METHOD"] ="";

    // header('refresh:0');
   }


?>
<div class="mx-auto w-50 pt-5">
<form method="post" action="updateupdrives.php?updid=<?php echo $updid ?> ">
<div class="form-row d-flex flex-row mt-3">
    
    <div class="form-group col-md-6">
      <label class="bold-label" for="inputOrgName">Organization Name</label>
      <input type="text" class="form-control" id="inputOrgName" name="orgnam" value="<?=$compid['orgname']?>" placeholder="Name" required>
    </div>
    
  </div>
  <div class="form-group col-md-6 mt-3">
    <label  class="bold-label" for="inputAddress"> Organization permanent Address</label>
    <input type="text" class="form-control" id="inputAddress" name="orgadd" value="<?=$compid['orgaddress']?>" placeholder="Address" required>
  </div>
  
  <div class="form-row">
    <div class="d-flex flex-row mt-3">
          <div class="form-group col-md-6">
            <label  class="bold-label" for="inputCity">City</label>
            <input type="text" class="form-control" name="orgcty" id="inputCity" value="<?=$compid['orgcity']?>" placeholder="City" required>
          </div>
          <div class="form-group col-md-4 mx-4">
            <label  class="bold-label" for="inputState">Country</label>
            <input type="text" class="form-control" name="orgcon" id="inputState" value="<?=$compid['orgcountry']?>" placeholder="Country" required>
          </div>
    </div>
    <div class="form-group col-md-2 mt-3">
      <label  class="bold-label" for="inputZip">Pincode</label>
      <input type="text" class="form-control" name="orgpnn" id="inputZip" value="<?=$compid['orgpin']?>" placeholder="Pincode" required>
    </div>
    <div class="form-group col-md-6 mt-3  ">
      <label  class="bold-label" for="inputemail">Email</label> 
      <input type="email" class="form-control" id="inputemail" name="orgeml" value="<?=$compid['orgpemail']?>" placeholder="Email" required>
    </div>
    <div class="form-group col-md-6 mt-3  ">
      <label  class="bold-label" for="inputmcgpa">Minimum CGPA Required</label> 
      <input type="number" min="0" max="10" class="form-control" id="inputmcgpa" name="orgmcgp" value="<?=$compid['orgmcgpa']?>" placeholder="Min CGPA" required>
    </div>
  </div>
<div class="d-flex flex-row mt-3">
      <div class="form-group col-md-4 ">
        <label  class="bold-label" for="inputDate"> Drive Date </label>
        <input type="date" min="<?php echo date("Y-m-d",strtotime("+1 day"));?>" name="drrdate" value="<?=$compid['drdate']?>" class="form-control" id="inputDate" placeholder="Address" required>
      </div>
      <div class="form-group col-md-4 mx-4 ">
        <label  class="bold-label" for="inputAvgctc">   CTC upto (in Lacks) </label>
        <input type="number" min="1" name="mxctc" class="form-control" id="inputAvgctc" value="<?=$compid['maxctclack']?>" placeholder="CTC" required>
      </div>
  </div>
  <div class="d-flex flex-row mt-3">
      <div class="form-group col-md-4 ">
        <label  class="bold-label" for="inputjobtype"> Employment type </label>
        <input type="text" name="empuptype" class="form-control" id="inputjobtype" value="<?=$compid['empltype']?>" placeholder="Internship/Full time" required>
      </div>
      <div class="form-group col-md-4 mx-4 ">
        <label  class="bold-label" for="inputRole"> Role </label>
        <input type="text" name="uprole" class="form-control" id="inputRole" value="<?=$compid['emplrole']?>" placeholder="Backend/Frontend" required>
      </div>
  </div>
  <button type="submit" class="btn btn-primary mt-5 mx-5" <?php 
  //echo $cre['onoff']=="on"?"":"disabled"; ?> >Submit details</button>
   




</form>




</div>

</main>



<script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</body>

</html>