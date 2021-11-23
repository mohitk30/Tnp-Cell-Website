<?php

require_once('connection.php');
$dbs=db_connect();
 
 $query="SELECT onoff from func_onoff where func_name='driver'";
 $result_set=mysqli_query($dbs,$query);
 $countr=mysqli_num_rows($result_set);
//   echo $countr;
//echo $result_set;

// while($row = mysqli_fetch_assoc($result_set)){
//     $branchname[] = $row['branch'];
// }
$cre=mysqli_fetch_assoc($result_set);
//echo $dir['NAME'];
 //echo json_encode( $sre);
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
    <!-- site icon -->
    <link rel="icon" href="images/siteicon.png" type="image/gif" sizes="50x50">


    <title>Organization Register Form
</title>
</head>

<!-- Develop by Mohit kumar with ❤  do check at github mohitk30 -->

<body>
    <main>
      <?php
  if(isset($_POST['orgnam'])){
    include('sucessAlert.php');
 //  echo $_POST['dateFrom'];
  // if (count($_POST) > 0) {
  //   foreach ($_POST as $k=>$v) {
  //       unset($_POST[$k]);
  //   }
// }

         $dbadddrive=db_connect();
           $orgnam=$_POST['orgnam'];
           $orgadrs=$_POST['orgadd'];
           $orgcyt=$_POST['orgcty'];
           $orgstat=$_POST['orgstat'];
           $orgpnn=$_POST['orgpn'];

           $orgeml=$_POST['orgeml'];
           $orgmcgp=$_POST['orgmcgp'];

           $dridate=$_POST['dridate'];
           $mxctc=$_POST['mxctc'];
           $emptype=$_POST['emptype'];
           $emprole=$_POST['emprole'];
          


           $query="INSERT INTO drives(orgname,orgaddress,orgcity,orgcountry,orgpin,orgpemail,orgmcgpa,drdate,maxctclack,empltype,emplrole) VALUES('".$orgnam."','".$orgadrs."','".$orgcyt."','".$orgstat."','".$orgpnn."','".$orgeml."','".$orgmcgp."','".$dridate."','".$mxctc."','".$emptype."','".$emprole."')";
           $result_setadddrive=mysqli_query($dbadddrive,$query);

           if(!$result_setadmd){
            echo "notdone";
        }
  header("Refresh:0");
   header('refresh5; url=/upcomingDrive.php');
   
   }
      ?>
    <nav class="navbar navbar-light bg-light ">
  <div class="container-fluid nav-in-company">
    <span class="navbar-text fs-4 ">
      <a href="/" class="text-decoration-underline"> Home</a>> Register your organization for campus drive  
    </span>
  </div>
</nav>
<section class="d-flex flex-row">
    <div class="w-50  mx-5">
    <p class="mt-3" > <span class="mt-3 mb-2 fs-5 pt-4   <?php echo $cre['onoff']=="on"?"green-color":"red-color"; ?>"> <?php echo $cre['onoff']=="on"?"Register here for recruiting from Nit Delhi. We will contact you once Drive is approved.":"Registrations are Closed"; ?></span></p>  
    <form method="post"  autocomplete="off"  action="comapnyRform.php">
  <div class="form-row d-flex flex-row mt-3">
    
    <div class="form-group col-md-6">
      <label class="bold-label" for="inputOrgName">Organization Name</label>
      <input type="text" class="form-control" id="inputOrgName" name="orgnam" placeholder="Name" required>
    </div>
    
  </div>
  <div class="form-group col-md-6 mt-3">
    <label  class="bold-label" for="inputAddress"> Organization permanent Address</label>
    <input type="text" class="form-control" id="inputAddress" name="orgadd" placeholder="Address" required>
  </div>
  
  <div class="form-row">
    <div class="d-flex flex-row mt-3">
          <div class="form-group col-md-6">
            <label  class="bold-label" for="inputCity">City</label>
            <input type="text" class="form-control" name="orgcty" id="inputCity" placeholder="City" required>
          </div>
          <div class="form-group col-md-4 mx-4">
            <label  class="bold-label" for="inputState">Country</label>
            <input type="text" class="form-control" name="orgstat" id="inputState" placeholder="Country" required>
          </div>
    </div>
    <div class="form-group col-md-6 mt-3  ">
      <label  class="bold-label" for="inputZip">Pincode</label>  
      <input type="text" class="form-control" id="inputZip" name="orgpn" placeholder="Pincode" required>
    </div>
    <div class="form-group col-md-6 mt-3  ">
      <label  class="bold-label" for="inputemail">Email</label> 
      <input type="email" class="form-control" id="inputemail" name="orgeml" placeholder="Email" required>
    </div>
    <div class="form-group col-md-6 mt-3  ">
      <label  class="bold-label" for="inputmcgpa">Minimum CGPA Required</label> 
      <input type="number" min="0" max="10" class="form-control" id="inputmcgpa" name="orgmcgp" placeholder="Min CGPA" required>
    </div>
  </div>
<div class="d-flex flex-row mt-3">
      <div class="form-group col-md-4 ">
        <label  class="bold-label" for="inputDate"> Drive Date </label>
        <input type="date" min="<?php echo date("Y-m-d",strtotime("+1 day"));?>" name="dridate" class="form-control" id="inputDate" placeholder="Address" required>
      </div>
      <div class="form-group col-md-4 mx-4 ">
        <label  class="bold-label" for="inputAvgctc">   CTC upto (in Lacks) </label>
        <input type="number" min="1" name="mxctc" class="form-control" id="inputAvgctc" placeholder="CTC" required>
      </div>
  </div>
  <div class="d-flex flex-row mt-3">
      <div class="form-group col-md-4 ">
        <label  class="bold-label" for="inputjobtype"> Employment type </label>
        <input type="text" name="emptype" class="form-control" id="inputjobtype" placeholder="Internship/Full time" required>
      </div>
      <div class="form-group col-md-4 mx-4 ">
        <label  class="bold-label" for="inputRole"> Role </label>
        <input type="text" name="emprole" class="form-control" id="inputRole" placeholder="Backend/Frontend" required>
      </div>
  </div>
  <button type="submit" class="btn btn-primary mt-5 mx-5 mb-3" <?php echo $cre['onoff']=="on"?"":"disabled"; ?> >Submit details</button>
  
</form>
   <?php

// $previous = "javascript:history.go(-1)";
// if(isset($_SERVER['HTTP_REFERER'])) {
//     $previous = $_SERVER['HTTP_REFERER'];
// }
?> 

<!--<a class="mx-5 pt-2" href="
<?
//= $previous ?>
">Back </a> -->




    </div>


    <div class="p-5">

 <h1 class="mt-4"> <strong> How It Works?</strong></h1>
 <div class="mt-4 clint-info-recur">
<h3><strong>Step 1: Fill this Form</strong></h3>
<p>Fill this form correctly. Make sure your email is correct.</p>

 </div>
 <div class="mt-4 clint-info-recur2">
<h3><strong>Step 2: Reach out to you</strong></h3>
<p>Once you fill this form our placement team will reach out to you.</p>

 </div>
 <div class="mt-4 clint-info-recur2">
<h3><strong>Step 3: Selection Phase</strong></h3>
<p>Select student from Registered students.</p>

 </div>
    
    </div>







</section>


        






    </main>
    <script>
    </script>

    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</body>

</html>

 