<?php

$enroll= $_GET['rol'];
  // Create database connection
  //$db = mysqli_connect("localhost", "root", "", "image_upload");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  //	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  	// image file directory
  	$target = "../images/".$enroll."ppic.png";

  //	$sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
  	// execute query
  //	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
          echo "<script>alert('".$msg."');</script>";
  	}else{
  		$msg = "Failed to upload image";
          echo "<script>alert('".$msg."');</script>";
  	}
      header('refresh:20');
  }

 
  //$result = mysqli_query($db, "SELECT * FROM images");
?>
<!DOCTYPE html>
<html>
<head>

 <!-- bootstrap -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,400;0,600;0,800;1,400;1,600;1,700&display=swap" rel="stylesheet">
<title>Upload TPO's Image</title>
<style type="text/css">

  #main-form-preimage{
      height: 80wh;
      width: 80vw;
      margin-left: 10vw;
      border: 2px solid black;
      margin-top: 10vh;
  }
    
   .inputfile{
       height: 60px;
       width: 300px;
      
       padding: 10px;
   }
</style>
</head>
<body>

<div id="main-form-preimage" >


<div id="Form-uptpo" class="p-5 w-50 d-flex flex-row"> 
  
  <form method="POST" action="" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
          <label for="image" class="form-label bold-label"> <strong>Chose Image of Traning and Placement Officer </strong> </label><br>
  	  <input class="inputfile btn btn-primary" id="fileinput" accept="image/png/jpeg" type="file" name="image" required>
        <br><span class="text-danger">*Image format should be of .png only.</span>
  	</div>
  	 
  	<div>
  		<button class="btn btn-primary mt-3" type="submit" name="upload">Upload Photo</button>
  	</div>
  </form>
</div>

<div id="imagepreview" class="w-50 p-5">
    <h5>Preview of image that you want to set</h5>
    <img src="../images/<?=$enroll?>ppic.png" height="200px" width="200px">




</div>




</div>
</body>
</html>