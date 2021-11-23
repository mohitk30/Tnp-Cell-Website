<?php
 
 $yeardata= $_GET['yearplace'];
 //echo $yeardata;
?>



<?php
require_once('connection.php');
$dbs=db_connect();
 
 $query="SELECT max(spplacectc) as maxctc FROM sp_info where spplaceyear='".$yeardata."'";
 $result_set=mysqli_query($dbs,$query);
 $countr=mysqli_num_rows($result_set);

 $smct=mysqli_fetch_assoc($result_set);


 $query2="SELECT count(*) as tot FROM sp_info where spplaceyear='".$yeardata."'";
 $result_set2=mysqli_query($dbs,$query2);
 $countr2=mysqli_num_rows($result_set2);
 $smct2=mysqli_fetch_assoc($result_set2);
 //echo $countr;
?>
<!-- html part -->


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


    <title>Placement static of year                <?php
                    $yeardata= $_GET['yearplace'];
                    echo $yeardata;                   ?>
</title>
</head>

<!-- Develop by Mohit kumar with ❤  do check at github mohitk30 -->

<body>
    <main>
    <nav class="navbar navbar-light bg-light ">
  <div class="container-fluid nav-in-company">
    <span class="navbar-text fs-4 ">
      <a href="/" class="text-decoration-underline"> Home</a>> Placement statics  
    </span>
  </div>
</nav>

<section class="graph-sec">
<div class="px-5 pt-2 mt-5 mx-2 fromdirectorheadinf my-auto"> Here is Placement statics of year <?php
                                                                $yeardata= $_GET['yearplace'];
                                                                echo $yeardata;
                                                                ?></div>



<div>
<h3 class="highest-pack">Highest package of year <?php
                                          $yeardata= $_GET['yearplace'];
                                         echo $yeardata;
                                            ?> is ₹  <?php if($smct['maxctc']>0){echo $smct['maxctc'];}else {echo "0";} ?> Lakh</h3>

</div>
<div>
<h3 class="highest-pack">Total students placed in year <?php
                                          $yeardata= $_GET['yearplace'];
                                         echo $yeardata;
                                            ?> are <?=$smct2['tot']; ?>  </h3>

</div>

<div class="d-flex flex-wrap">
<?php
 
  
  
 
  
   include_once('graphs/circularchart2.php');
  // echo "<h1>second graph</h1>";
    include_once('graphs/barchart.php');
   // includeWithVariables('circularchart.php');
    
 
   
 
   

?>

</div>
 


</section>


        






    </main>
    <script>
    </script>

    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</body>

</html>

 
<?php
db_disconnect($dbs);


?>