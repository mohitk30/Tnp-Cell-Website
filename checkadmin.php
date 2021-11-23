


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="styleindex.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Admin Login</title>

    <style>

#admpass:focus,#admuser:focus{
    /* border: 0px;
    border-bottom: 2px solid white; */
    outline: none;
}

</style>
</head>
<body>
    <?php
    $count="";
function is_submited_post(){
    return $_SERVER['REQUEST_METHOD']== 'POST' ;
  
  }
  if(isset($_POST['username'])){
    require_once('connection.php');
    $dbs=db_connect();
    $user=$_POST['username'];
    $pass=$_POST['password'];
   
    $query="SELECT * FROM admin_memb where admusername='".$user."' AND admpassword='".$pass."'";
     $result_set=mysqli_query($dbs,$query);
    // $uname="mohit";
    // $upass="mohit";

    // $variables['username'] = $user;
    // $variables['password'] = $pass;

    $countnoofadmin=mysqli_num_rows($result_set);
    if($countnoofadmin==1){
        $variables['username'] = $user;
        $variables['password'] = $pass;
        // echo $query;
        
      header("Location: admin.php?vals=".urlencode(serialize($variables)), TRUE, 301);
       exit();
    } 
   
    else {
         //echo '<script>alert("Wrong Username or password");location.reload(); </script>';
         // echo "Wrong Password!!!";
         $count="1";
          header('refresh:2');
         
    }
     
    // echo "City ".$cit."<br/>";
    // echo "state ".$stat."<br/>";
     
    
    }else{
         
    }


?>




<div class="grey-bg"  >

<div class="login-in-div">
    <div class="wrongpass-div">
<?php
if($count=="1"){
    include('wrongpassAlert.php');
//echo "worng password!!! Try again in 2 second";
}

?>
</div>
<h3 class="p-5 "  >Welcome <span class="light-green-text">Admin,</span> <br>Please Login with your username and password</h3>
<form method="post" autocomplete="off" action="checkadmin.php" name="signin-form">
<div class="form-element">
<label class="mx-5 "> <strong> Username</strong></label><br>
<input class="input-in-admin mx-4 " id="admuser" type="text" placeholder="Username" name="username" value="" pattern="[a-zA-Z0-9]+" required />
</div><br>
 
<div class="form-element">
<label class="mx-5 "> <strong> Password</strong></label><br>
<input class="input-in-admin mx-4  " id="admpass" type="password" placeholder="Password" value="" name="password" required />
<!-- check box  -->
<input type='checkbox' id='toggle' style="height: 20px;width:20px;" value='0' onchange='togglePassword(this);'>&nbsp; <span id='toggleText'>Show</span>
<!-- check box end -->
</div>
<button class="btn-success rounded login-admin-btn mx-5 mt-3"  type="submit" name="register"  value="register">Login As Admin</button>




</form>
<div class="d-flex flex-row" >
 <a class="back-to-home" href="/">Back to home</a> 
 <div class="p-3">
 <a class="forgetpass-admin pt-3" href="adminforget.php">Forget Password</a> </div>
    </div>



</div>
    </div>



    
 





    
</body>

<script type="text/javascript">
 
 function togglePassword(el){
 
  // Checked State
  var checked = el.checked;

  if(checked){
   // Changing type attribute
   document.getElementById("admpass").type = 'text';

   // Change the Text
   document.getElementById("toggleText").textContent= "Hide";
  }else{
   // Changing type attribute
   document.getElementById("admpass").type = 'password';

   // Change the Text
   document.getElementById("toggleText").textContent= "Show";
  }

 }


 document.getElementById("admuser").focus();
 
</script>


</html>