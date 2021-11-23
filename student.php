<?php
//error_reporting(-1);
  $Values= unserialize(urldecode($_GET['vals']));
  
  $stud_username=$Values['username']; 
 
  $stud_password=$Values['password'];

  require('connection.php');
  if(!isset($stud_username)) {
    
 
    
   
      exit();
  }

// if(isset($_POST['inputtnpmeno'])&& ($_SERVER['REQUEST_METHOD'] == 'POST')){
//   echo $_POST['inputtnpmeno'];

//   header("refresh:0");
// }
$dbs=db_connect();



 
function error_found(){
  $notf = 'http://'.$_SERVER['HTTP_HOST']."/pagenotfound.php";
  header("Location: $notf");
}
set_error_handler('error_found');
 
$query="Select * From student where senrollno='".$stud_username."'";
  $result_sets=mysqli_query($dbs,$query);

  
  
      $countr=mysqli_num_rows($result_sets);
      $std=mysqli_fetch_assoc($result_sets);

      $query2="Select * From sp_info where spenroll='".$stud_username."'";
  $result_sets2=mysqli_query($dbs,$query2);
  $sptd=mysqli_fetch_assoc($result_sets2);

  $query3="Select * From reg_student where rsenroll='".$stud_username."'";
  $result_sets3=mysqli_query($dbs,$query3);
  $sptdl=mysqli_num_rows($result_sets3);

  $query4="Select * From notifi";
  $result_sets4=mysqli_query($dbs,$query4);
  $notcount=mysqli_num_rows($result_sets4);

  if($notcount>10){
    $query6="SELECT * FROM notifi ORDER BY nottime DESC LIMIT 10;";
    }else{
      $query6="SELECT * FROM notifi";
    }

    $result_sets6=mysqli_query($dbs,$query6);
    $notcountshow=mysqli_num_rows($result_sets6);

  $query5="SELECT count(*) as con FROM notifi ,student where nottime > lupdtime and senrollno='".$stud_username."'";
  $result_sets5=mysqli_query($dbs,$query5);
  $notremcount=mysqli_fetch_assoc($result_sets5);

  //     $query2="Select * From student where senrollno='".$stud_username."'";
  // $result_setss1=mysqli_query($dbs,$query2);
  //     $countr=mysqli_num_rows($result_setss1);
  //     $stdreg=mysqli_fetch_assoc($result_setss1);
    // echo $countr;
  //  echo json_encoded($std);

// ?>

  <?php
// // $Values= unserialize(urldecode($_GET['vals']));
 
// // $admin_username=$Values['username']; 
 
// // $admin_password=$Values['password'];

            
// ?>

 <?php
//           if(isset($_POST['adeno'])){
          
//             // db_disconnect($dbs);
//           // require_once('connection.php');
//            $dbsaddadm=db_connect();
//            $admen=$_POST['adeno'];
//            $admun=$_POST['admuname'];
//            $admpas=$_POST['admpass'];
            


//             $query="INSERT INTO admin_memb(admusername,admenroll,admpassword) VALUES('".$admun."','".$admen."','".$admpas."')";
//               $result_setadm=mysqli_query($dbsaddadm,$query);
//           //  $countr=mysqli_num_rows($result_set);
//            //   echo $countr;
//            //echo $result_set;
//            //echo $query;
//            //echo "<script>console.log(".$query.")</script>";
//            // while($row = mysqli_fetch_assoc($result_set)){
//            //     $branchname[] = $row['branch'];
//            // }
//            //$dir=mysqli_fetch_assoc($result_set);

//            unset($_POST['adeno']);
           
//            unset($_POST['admuname']);
           
//            unset($_POST['admpass']);
//            echo "post done";
  
//           header('refresh:0');
//           db_disconnect($dbsadm);
//           }
//          ?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="styleindex.css">
     <!-- script -->
     <script src='main.js'>
         </script>
         <!-- ajax script -->
         <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Student : <?=$std['sfname'];?>-<?=$std['senrollno'];?></title>
</head>
<body>

<section id="main-student-sec">

 <div class="d-flex flex-row">

 <h4 class="p-4 mx-5 d-flex flex-row ">   Welcome &nbsp; <span class="light-green-text"> <?=$std['sfname'];?>,</span></h4>
 <div class="ms-auto mx-5   p-2">
   <div class="dropdown-bo align-self-center pt-3">
      <i onclick="OpenNotifications(<?=$std['senrollno'];?>)" class="  dropdown-mes far green-icon fa-2x fa-bell">
      <span class="<?php if($notremcount['con']=="0"){echo "d-none";}?> position-absolute top-25 mx-4 start-50 translate-middle badge rounded-pill count-urm ">
    <?php
    $urmes=$notremcount['con'];
    if($urmes>2){echo "2+";}else{echo $urmes;}
    ?>
    <span class="visually-hidden">unread messages</span>
  </span>
    </i>  
    <div id="notdrop" class="dropdown-content-mes">
    
     <div class="mx-auto p-3 not-head">Notifications<br>
     <span class="not-head-small">Last few Notifications</span>
     </div>
     
    

     <?php
      while($notidata=mysqli_fetch_assoc($result_sets6))
       { ?>
<!-- repeated div -->
     <div class="p-3 not-main-div mt-2">
       <div id="dattime-div" class="pb-3 boled" >  Date and Time: <span class="gren-text"> &nbsp;<?=$notidata['nottime'];?></span></div>
         <?=$notidata['notinfo'];?>

     </div>
     <div class="divider-div"></div>
 <!-- repeated div -->     
 
 <?php } ?>
      
 
 
     <div class="d-flex flex-row fixed-bottom bottom-but-div" style="position: sticky;">
     <div class="w-100 p-3" style="position: relative;"><Button class="btn btn-success mx-5">Mark All as Read</Button></div>
     <div class="w-100 p-3" style="position: relative;"><a href=""> <Button class="btn btn-success mx-5"> Close</Button></a></div>
     </div>
  </div>
  </div>
    <a  class="  mx-5 " href="checkstudent.php"><button class="btn student-logout  log-out-btn text-light light-green-text">Logout</button> </a>
 </div>
 </div>

 <div id="photo-and-pinfo" class="mx-auto d-flex flex-row">
   <div id="left-stud-imag">
     <img class="stud-main-image" src="images/<?=$std['senrollno'];?>ppic.png" alt="" onerror="this.src='images/demop.jpg';">
   </div>
 

 
<div id="right-info-stud" class="px-5 pt-1">
  <div class="d-flex flex-row p-3">
<div class="upd-pho"><a href="uploads/uploadstdimg.php?rol=<?=$std['senrollno'];?>"> <button class="btn ms-auto upd-btn float-end"> <strong> Update Profile Photo</strong></button></a></div>
<div class="upd-pho"><a href="cruds/updatestudpass.php?rol=<?=$std['senrollno'];?>"> <button class="btn   upd-btn float-end"> <strong> Update Password</strong></button></a></div>
</div>
<div class="">Name: <input class="fix-inputs mt-2" type="text" value="<?=$std['sfname'];?> <?=$std['slname'];?>" disabled></div>
<div class="">Enrollment No.: <input class="fix-inputs mt-2" type="text" value="<?=$std['senrollno'];?>" disabled></div>

<div class="d-flex flex-row">
<div class="">Father's Name: <input class="fix-inputs mt-2" type="text" value="<?=$std['sfathername'];?>" disabled></div>
<div class="">Year: <input class="fix-inputs mt-2" type="text" value="<?=$std['scyear'];?>nd" disabled></div>
</div><div class="d-flex flex-row">
<div class="">Branch: <input class="fix-inputs mt-2" type="text" value="<?=$std['sbranch'];?>" disabled></div>
<div class="">Gender: <input class="fix-inputs mt-2" type="text" value="<?=$std['sgender'];?>" disabled></div>
</div>
<div class="d-flex flex-row">
<div class="">Placed in: <input class="fix-inputs mt-2" type="text" value="<?php if(isset($sptd['spspplacecomp'])){echo $sptd['spspplacecomp'];}?>" disabled></div>
<div class="">Placement year: <input class="fix-inputs mt-2" type="text" value="<?php if(isset($sptd['spplaceyear'])){echo $sptd['spplaceyear'];}?>" disabled></div>
</div>
<div class="d-flex flex-row">
<div class="">CTC: <input class="fix-inputs mt-2" type="text" value="<?php if(isset($sptd['spplacectc'])){echo $sptd['spplacectc'];}?>" disabled></div>
<div class="">CGPA: <input class="fix-inputs mt-2" type="text" value="<?=$std['sccgpa'];?>" disabled></div>
 
</div>
 
 


 </div>
 </div>


<div id="editible-info-div" class="mx-auto mt-2">

<div id="below-info-stud" class="px-5 pt-1">
 


<div class="d-flex flex-row">
<div class="w-100">Address: <input class="unfix-inputs   mt-2" type="text" value="<?=$std['saddress'];?>" disabled></div>
<div class="w-100">Country: <input class="unfix-inputs-sm   mt-2" type="text" value="<?=$std['scountry'];?>" disabled></div>
</div><div class="d-flex flex-row">
<div class="w-100">Email: <input class="unfix-inputs mt-2" type="text" value="<?=$std['semail'];?>" disabled></div>
<div class="w-100">Contact No. : <input class="unfix-inputs-sm mt-2" type="text" value="<?=$std['spno'];?>" disabled></div>
</div>
<div class="d-flex flex-row">
<div class="w-100 pt-3 resum-div">Resume: <a  href="<?=$std['srslink'];?>"  >Click here to view your resume   </a> </div>
 
</div>
 
<div class="d-flex  justify-content-between flex-sm-wrap">
<div class="upd-pho mt-5 w-25">  <a href="cruds/upbasicstud.php?roln=<?=$std['senrollno'];?>"><button class="btn mx-auto upd-btn  "> <strong> Update Basic Info</strong></button></a></div>

<div class="upd-pho mt-5 w-25"> <a href="studentPlaceForm.php?roln=<?=$std['senrollno'];?>" class="<?php if($std['scyear']=="1" || $std['scyear']=="2"){echo "d-none";} ?> "  > <button class="btn mx-auto upd-btn-llg  "    > <strong> Register For Placement of current year</strong></button></a></div>
<div class="upd-pho mt-5 w-25"> <a href="placereadys.php"> <button class="btn mx-auto upd-btn  "> <strong> View Registered Students</strong></button></a></div>
</div>


 </div>




</div>





</section>

 
<script>
  function OpenNotifications(x) {
  document.getElementById("notdrop").classList.toggle("show");

//console.log(x);

  $.ajax({
        url: "/cruds/updnottime.php?rol="+x, //the page containing php script
        type: "POST", //request type
        success: function(result) {

            //  console.log(result);
           // alert(result);
        }
    });






}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {

 
  if (!event.target.matches('.dropdown-mes')) {
    window.location.reload();
    var dropdowns = document.getElementsByClassName("dropdown-content-mes");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

     

    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</body>

</html>