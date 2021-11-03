<?php
 $prid= $_GET['pastrid'];
 //echo  $prid;
 $previous = "javascript:history.go(-1)";
 if(isset($_SERVER['HTTP_REFERER'])) {
     $previous = $_SERVER['HTTP_REFERER'];
 }

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
   
    echo "done go back";
    $_SERVER["REQUEST_METHOD"] ="";

    header('refresh:0');
   }


?>
<div class="mx-auto w-50">
<form method="post" action="updatepastr.php?pastrid=<?php echo $prid ?> ">
<div class="form-group col-md-6 mt-3">
    <label  class="bold-label" for="inputAddress"> Organization Name</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Organization Name" required>
  </div>
  <div class="form-group col-md-6 mt-3">
    <label  class="bold-label" for="inputAddress"> Arrive in year</label>
    <input type="number" min="2000" max="2021" class="form-control" id="inputAddress" placeholder="year" required>
  </div>
  <button id="update-pr" name="up-postr" class="btn mt-3 btn-primary" type="submit">Update</button>
         




</form>




</div>

</main>



<script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</body>

</html>