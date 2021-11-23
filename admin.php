<?php
//error_reporting(-1);
$Values= unserialize(urldecode($_GET['vals']));
 
$admin_username=$Values['username']; 
 
$admin_password=$Values['password'];
// function error_found(){
//   $notf = 'http://'.$_SERVER['HTTP_HOST']."/pagenotfound.php";
//   header("Location: $notf");
// }
// set_error_handler('error_found');
require('connection.php');
if(!isset($admin_username)) {
    
 
    
   
    exit();
}

if(isset($_POST['inputtnpmeno'])&& ($_SERVER['REQUEST_METHOD'] == 'POST')){
  echo $_POST['inputtnpmeno'];

  header("refresh:0");
}


?>

<?php
// $Values= unserialize(urldecode($_GET['vals']));
 
// $admin_username=$Values['username']; 
 
// $admin_password=$Values['password'];

            
?>

<?php
          if(isset($_POST['admuname'])){
          
            // db_disconnect($dbs);
          // require_once('connection.php');
           $dbsaddadm=db_connect();
           $admen=$_POST['adeno'];
           $admun=$_POST['admuname'];
           $admpas=$_POST['admpass'];
           $ademail=$_POST['admeml'];
           $addob=$_POST['addob'];
            


            $query="INSERT INTO admin_memb(admusername,admenroll,admemail,admdob,admpassword) VALUES('".$admun."','".$admen."','".$ademail."','".$addob."','".$admpas."')";
              $result_setadm=mysqli_query($dbsaddadm,$query);


if($result_setadm){
  echo '<script>alert("Admin Data Uploaded")</script>';
}else{
  echo '<script>alert("Admin Data not Uploaded")</script>';
}


          //  $countr=mysqli_num_rows($result_set);
           //   echo $countr;
           //echo $result_set;
           //echo $query;
           //echo "<script>console.log(".$query.")</script>";
           // while($row = mysqli_fetch_assoc($result_set)){
           //     $branchname[] = $row['branch'];
           // }
           //$dir=mysqli_fetch_assoc($result_set);

           unset($_POST['adeno']);
           
           unset($_POST['admuname']);
           
           unset($_POST['admpass']);
           echo "post done";
  
          header('refresh:0');
          db_disconnect($dbsadm);
          }
         ?>
 

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
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Admin : Dashboard</title>
</head>
<body>






<section id="main-section-admin" class="">

<div id="top-nav-admin" class="d-flex flex-row " >
  <h4 class="p-4 mx-5 d-flex flex-row ">   Welcome &nbsp; <span class="light-green-text"> <?php echo $admin_username; ?>,</span></h4>

     <a class="ms-auto mx-5 mt-2" href="/checkadmin.php">  
      <button class="btn admin-buttons log-out-btn  "> <span class="fs-5   light-green-text"> <strong> Log out   </strong></span></button>
      </a>  

</div>
<div class="w-100 d-flex flex-row main-on-admin">
<div class="left-fix  ">
    <div id="div-but-dash1" class="side-tab mb-3" onclick="showDifferentD1()"><span  class="side-menu-options align-middle">Dashboard </span></div>
    <div id="div-but-dash2" class="side-tab mb-3" onclick="showDifferentD2()"><span class="side-menu-options align-middle">Students</span></div>
    <div id="div-but-dash3" class="side-tab mb-3" onclick="showDifferentD3()"><span class="side-menu-options align-middle">Admins</span></div>
    <div id="div-but-dash4" class="side-tab mb-3" onclick="showDifferentD4()"><span class="side-menu-options-regis align-middle" >Registered Students</span></div>
    <div id="div-but-dash5" class="side-tab mb-3" onclick="showDifferentD5()"><span class="side-menu-options-regis align-middle">Past recruiters</span></div>
    <div id="div-but-dash6" class="side-tab mb-3" onclick="showDifferentD6()"><span class="side-menu-options align-middle">Tnp Members</span></div>
    <div id="div-but-dash7" class="side-tab mb-3" onclick="showDifferentD7()"><span class="side-menu-options align-middle">Staff Members</span></div>
    <div id="div-but-dash7" class="side-tab mb-3" onclick="showDifferentD8()"><span class="side-menu-options align-middle">Upcoming Drives</span></div>


<div id="datetimebox" class="p-3">
  Data Last Updated On:<br>  <span id="curdate-time"></span>
  <br> 
  Current time is: <span id="clock"></span>
</div>
<script>

 
var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
var dateTime = date+' '+time;
document.getElementById("curdate-time").innerText = dateTime ;


function currentTime() {
  let date = new Date(); 
  let hh = date.getHours();
  let mm = date.getMinutes();
  let ss = date.getSeconds();
  let session = "AM";

    
  if(hh > 12){
      session = "PM";
   }

   hh = (hh < 10) ? "0" + hh : hh;
   mm = (mm < 10) ? "0" + mm : mm;
   ss = (ss < 10) ? "0" + ss : ss;
    
   let time = hh + ":" + mm + ":" + ss + " " + session;

  document.getElementById("clock").innerText = time; 
  var t = setTimeout(function(){ currentTime() }, 1000); 

}

currentTime();




</script>

</div>
<div class="right-fix  ">
<?php
          
          // require('connection.php');
           $dbsadm=db_connect();
        


           $query="SELECT * FROM admin_memb;";
             $result_setad=mysqli_query($dbsadm,$query);
           $counttadmn=mysqli_num_rows($result_setad);
           $queryr="SELECT * FROM reg_student;";
           $result_setregs=mysqli_query($dbsadm,$queryr);
         $countregs=mysqli_num_rows($result_setregs);
         $querycom="SELECT * FROM drives;";
         $result_setupd=mysqli_query($dbsadm,$querycom);
       $countupd=mysqli_num_rows($result_setupd);

       $queryupd="SELECT * FROM drives where drdate >= CURDATE() ";
       $result_setupdc=mysqli_query($dbsadm,$queryupd);
     $countupdc=mysqli_num_rows($result_setupdc);

       $querytnpcn="SELECT * FROM tnp_memb;";
       $result_settnpm=mysqli_query($dbsadm,$querytnpcn);
     $countmemtnp=mysqli_num_rows($result_settnpm);
           
     $querystudc="SELECT * FROM student;";
     $result_setcstud=mysqli_query($dbsadm,$querystudc);
   $countstud=mysqli_num_rows($result_setcstud);


   $queryappdrive="SELECT * from drives where isapproved= 'yes' and drdate >= CURDATE()";
   $result_setupcd=mysqli_query($dbsadm,$queryappdrive);
 $countapprd=mysqli_num_rows($result_setupcd);

 $queryappdrive2="SELECT * from drives where isapproved= 'yes'";
 $result_setupcd2=mysqli_query($dbsadm,$queryappdrive2);
$countapprd2=mysqli_num_rows($result_setupcd2);


   $querypstr="SELECT * FROM pst_reuriter;";
   $result_setpstr=mysqli_query($dbsadm,$querypstr);
 $countpstr=mysqli_num_rows($result_setpstr);

        //$counttadmn="5";
         ?>

<div id="div-dash" class="admin-boxes p-3 animat-divs">
<div class="px-5 pt-2 mx-2 fromdirectorheadinf admin-buttons"> Dashboard</div>
    <div class="info-dash mx-auto d-flex flex-wrap " style="margin-top: 17px;">
        <div class="square-boxs">
            <span class="box-heading">
               Total  Students   <br>  <span class="counts"> <?=$countstud;?></span>
            </span>
        </div>
        <div class="square-boxs">
        <span class="box-heading">
               Total  Tnp Members   <br>  <span class="counts"> <?=$countmemtnp;?></span>
            </span>
        </div>
        <div class="square-boxs">
        <span class="box-heading">
               Total <br> Admin  <br> <span class="counts"><?=$counttadmn;?></span>
            </span>
        </div>
        <div class="square-boxs">
        <span class="box-heading">
                Student registered   <br> <span class="counts"> <?=$countregs;?></span>
            </span>
        </div>
        <div class="square-boxs">
        <span class="box-heading">
                Approved Drives   <br> <span class="counts"> <?=$countapprd2;?></span>
            </span>
        </div>
        <div class="square-boxs">
        <span class="box-heading">
                Upcoming Drives   <br> <span class="counts"> <?=$countapprd;?></span>
            </span>
        </div>
        <div class="square-boxs">
        <span class="box-heading">
                Past Recruiters   <br> <span class="counts"> <?=$countpstr;?></span>
            </span>
        </div>

    </div>

    <div class="w-100 pt-4 mx-auto">
    <a href="studentListAdmin.php"> <button class="btn admin-buttons  mx-5 all-stu-det"> <span class="fs-4 fw-bold"> Click here to view all students details</span></button></a>
       <a href="/views/adminListdash.php"> <button class="btn admin-buttons mx-5 all-stu-det"> <span class="fs-4 fw-bold"> Click here to view all Admin details</span></button></a>
    </div>
    <div class="w-100 pt-4 mx-auto">
      <a href="/views/tnpmemberslistdash.php">  <button class="btn admin-buttons mx-5 all-tnp-det mt-3"> <span class="fs-4 fw-bold"> Click here to view all Tnp members details</span></button></a>
        <!-- <button class="btn   mx-5 mt-5 all-stu-det"> <span class="fs-4 fw-bold"> Click to view all Staff Members details</span></button> -->
        <!-- <button class="btn btn-info mx-5 mt-5 all-rstu-det"> <span class="fs-4 fw-bold"> Click here to view Registered students details</span></button> -->
        <a href="/newforms/anounceNotif.php">  <button class="btn admin-buttons mx-5 all-tnp-det"> <span class="fs-4 fw-bold"> Click here to Create an Announcement</span></button></a>
        <a href="announcements.php" >  <button class="btn admin-buttons mx-5 mt-4 all-tnp-det"> <span class="fs-4 fw-bold"> Click here to View all Announcements</span></button></a>
    </div>
     
  
</div>
<div id="div-stud" class="admin-boxes animat-divs">
    <div class="px-5 pt-2 mx-2 fromdirectorheadinf admin-buttons"> Students</div>
    <div class="w-100">

        <div class="pt-5"><span class="p-5 fs-4 mt-5"><strong>Total Students are <?=$countstud;?></strong></span></div>

    </div>
    <div class="w-100 pt-4 mx-auto">
           <a href="studentListAdmin.php"><button class="btn admin-buttons mx-5  "> <span class="fs-4 fw-bold"> Click to view/edit all students details</span></button></a> 
          <a href="newforms/newStudent.php"> <button class="btn admin-buttons  mx-5 "> <span class="fs-4 fw-bold" onclick=""> Click here to add a new student's details</span></button></a>
          <!-- <a href="newforms/newStudlogin.php"> <button class="btn admin-buttons mx-5 mt-3 "> <span class="fs-4 fw-bold"> Click to create new login for students  </span></button></a> -->
          <!-- <a href="newforms/newStudplace.php"> <button class="btn admin-buttons mx-5 mt-3 "> <span class="fs-4 fw-bold"> Click to add placement info   for a students  </span></button></a>            -->
    </div>

    
</div>
<div id="div-adm" class="admin-boxes animat-divs">
<div class="px-5 pt-2 mx-2 fromdirectorheadinf admin-buttons"> Admin</div>
            <div class="w-100">


            <div class="pt-5"><span class="p-5 fs-4 mt-5"><strong>Total Admin are <?=$counttadmn;?></strong></span></div>

            </div>
            <div class="w-100 pt-4 mx-auto">
              <!-- <a href="/adminList.php">  <button class="btn btn-success mx-5  "> <span class="fs-4 fw-bold"> Click to view/edit all Admin's details</span></button></a> -->
                <button class="btn admin-buttons  mx-5  " onclick="showoAddAdmin()"> <span class="fs-4 fw-bold" > Click here to add a new Admin</span></button>
               <div class="my-2"  style="height:440px;overflow-y:auto;">
               <?php
                include('includers/adminListsm.php');
                
                ?>
                </div>
            </div>
<?php 
 db_disconnect($dbsadm);
?>

</div>
<div id="div-rstud" class="admin-boxes animat-divs">
<div class="px-5 pt-2 mx-2 fromdirectorheadinf admin-buttons p-3"> Registered Students</div>
                <div class="w-100">

                <div class="pt-5 "><span class="p-5 fs-4 mt-5"><strong>Total Students Register for placement are <?=$countregs;?></strong></span></div>

                </div>
                <?php
                // function select(){
                //    echo " The select function is called. ";
                //    // onOffRegistrations();
                  
                //    //echo '<script>location.reload(); </script>';
                // }
                // unset($_POST['offbut']);
                // if (count($_POST) > 0) {
                //     foreach ($_POST as $k=>$v) {
                //         unset($_POST[$k]);
                //     }
                // }
              
                    //  if(isset($_POST['offbut'])){
                  //require('connection.php');
                       $dbssd=db_connect();
                       
                    //    $query="UPDATE func_onoff set onoff='off' where func_name='driver'";
                    //    $result_set=mysqli_query($dbs,$query);
                    //    $on_off=mysqli_fetch_assoc($result_set);
                    //     //echo $dir['NAME'];
                    //     echo json_encode($on_off);

                         $query="SELECT onoff from func_onoff where func_name='driver'";
                         $result_setd=mysqli_query($dbssd,$query);
                        $on_off=mysqli_fetch_assoc($result_setd);
                          
                         //echo  $check=="yes"?"yes":"no";
                         $query="SELECT onoff from func_onoff where func_name='studentr'";
                         $result_sets=mysqli_query($dbssd,$query);
                        $on_offsr=mysqli_fetch_assoc($result_sets);
                        
                       //select();
                       
                    // }
                    //  if (count($_POST) > 0) {
                    //     foreach ($_POST as $k=>$v) {
                    //         unset($_POST[$k]);
                    //     }
                    // }

                     
                    
                     
?>
                <div class="w-100 pt-4 mx-auto">
                 <a href="placereadyslist.php">  <button class="btn admin-buttons mx-5  "> <span class="fs-4 fw-bold"> Click to view/edit all Registered Student's details</span></button></a> 
                 <button class="btn admin-buttons mx-5 mt-3 " data-toggle="tooltip" data-placement="top" title="This will remove all registered student" onclick="newregsession()"> <span class="fs-4 fw-bold"> Click to start New Registration Session</span></button>
                 <!-- <button class="btn admin-buttons mx-5 mt-3 " data-toggle="tooltip" data-placement="top" title="This will download all registered student details" onclick="downloadStudentList()"> <span class="fs-4 fw-bold"> Click to Download Registered Student List</span></button> -->
 
                 <form method="post" action="
                   <?php
                                        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                        //echo $actual_link;
                                        ?>
                                        ">    
                    <button name="offbut" type="submit" class="btn admin-buttons  mx-5 mt-3" onclick="onoffsrbutn()"> <span id="on-off-rforms" class="fs-4 fw-bold " >Click here to turn <?php  echo  $on_offsr['onoff']=="on"?"off":"on"; ?> Student's registrations</span></button>
                    <!-- <input type="submit" name="button2"
                class="button" value="Button2" />     -->
                   </form>  
                </div>

<?php
  db_disconnect($dbssd);?>

</div>
<div id="div-precu" class="admin-boxes animat-divs ">
<div class="px-5 pt-2 mx-2 fromdirectorheadinf admin-buttons"> Past Recruiters</div>

               <div class="w-100">

                <div class="pt-5"><span class="p-5 fs-4 mt-5"><strong>Total No. of past recruiters are <?=$countpstr;?></strong></span></div>

                </div>

                 
<?php
               // include('pastrList.php');
               $admin_link = "$_SERVER[REQUEST_URI]";
                ?>
                


                 

                <div class="w-100 pt-4 mx-auto">
                  <a href="pastrList.php">   <button class="btn admin-buttons mx-5" onclick=""> <span class="fs-4 fw-bold"> Click to view/edit all past recruiters details</span></button> </a>
                   <a href="/newforms/newpastreuc.php"> <button class="btn admin-buttons  mx-5 "> <span class="fs-4 fw-bold" onclick=""> Click here to Add a new Past Recruiter</span></button></a>
                  
                    
                </div>



</div>
<div id="div-tnpm" class="admin-boxes animat-divs">
<div class="px-5 pt-2 mx-2 fromdirectorheadinf admin-buttons"> Tnp Cell members</div>

                <div class="w-100">

                <div class="pt-5"><span class="p-5 fs-4 mt-5"><strong>Total No. of Tnp members are  <?=$countmemtnp;?></strong></span></div>

                </div>
                <div class="w-100 pt-4 mx-auto">
                  <a href="tnpmemberslist.php">  <button class="btn admin-buttons mx-5  "> <span class="fs-4 fw-bold"> Click to view/edit all Tnp members details</span></button></a>
                   <a href="/newforms/newtnpmemb.php"> <button class="btn admin-buttons  mx-5 "> <span class="fs-4 fw-bold" onclick=""> Click here to Add a new Tnp Member</span></button></a>
                  
                    
                </div>




</div>
<div id="div-staf" class="admin-boxes animat-divs">
<div class="px-5 pt-2 mx-2 fromdirectorheadinf admin-buttons"> Staff Members</div>

<div class="w-100">

<div class="pt-5"><span class="p-5 fs-4 mt-5"><strong>Total No. of Staff Members are 2</strong></span></div>

</div>
<div class="w-100 pt-4 mx-auto">
    <button class="btn admin-buttons mx-5  " onclick="showoeditdir()"> <span class="fs-4 fw-bold"> Click to view/edit Directer details</span></button>
    <button class="btn admin-buttons mx-5  " onclick="showoedittpo()"> <span class="fs-4 fw-bold"> Click to view/edit TPO's details</span></button>
    <a href="uploads/uploadimagedirector.php">  <button class="btn admin-buttons mx-5 mt-4 "> <span class="fs-4 fw-bold"> Click to update Director's Image</span></button></a>
  <a href="uploads/uploadimagetpo.php">  <button class="btn admin-buttons mx-5 mt-4 "> <span class="fs-4 fw-bold"> Click to update TPO's Image</span></button></a>
 
     
  
    
</div>
</div>
<div id="div-drives" class="admin-boxes animat-divs">
<div class="px-5 pt-2 mx-2 fromdirectorheadinf admin-buttons"> Upcoming Drives</div>

<div class="w-100">

<div class="pt-5"><span class="p-5 fs-4 mt-5"><strong>Total No. of Registered Drives till now are <?=$countupd?></strong></span></div>
<div class="pt-5"><span class="p-5 fs-4 mt-1"><strong>Total No. of Approved Drives are <?=$countapprd2?></strong></span></div>

</div>
<div class="w-100 pt-4 mx-auto">
   <a href="/upcomingDrivelist.php"> <button class="btn admin-buttons mx-5  "> <span class="fs-4 fw-bold"> Click to view/edit all Upcoming Drives details</span></button></a>
  
   <button class="btn admin-buttons mx-5  " onclick="onoffbutn()"> <span class="fs-4 fw-bold"> Turn <?php  echo  $on_off['onoff']=="on"?"off":"on"; ?> Drives Registrations</span></button>
  
    
</div>
</div>


</div>
</div>


</section>

<!-- add admin mondel -->
<div id="admin-form" class="modal">



  <!-- Modal content -->
  <div class="modal-content m-content">
    <span class="close ms-auto">&times;</span>
     <div>
         <h5>Add new Admin Enroll,Email,DOB, username and Password </h5>
         <form  method="post" action="<?php
                                        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                        echo $actual_link;
                                        ?>">
         <div class="mb-3 col-md-8">
         <input type="number"  min="100000000" name="adeno" class="form-control"  id="inputeno" placeholder="Enrollment No." >
        </div>
        <div class="form-group col-md-8 mt-2">
       
      <input type="text" class="form-control" id="inputuname" name="admuname" placeholder="*Unique Username" required>
    </div>
    <div class="form-group col-md-8 mt-2">
       
      <input type="password" class="form-control" id="inputupass" name="admpass" placeholder="*Password" required>
    </div>
    <div class="form-group col-md-8 ">
        <label  class="bold-label" for="inputDate"> Date of Birth </label>
        <input type="date"  name="addob" class="form-control" id="inputDate" placeholder="Address" required>
      </div>
      <div class="form-group col-md-8 mt-3  ">
      <label  class="bold-label" for="inputemail">Email</label> 
      <input type="email" class="form-control" id="inputemail" name="admeml" placeholder="Email" required>
    </div>
        <button type="submit" class="btn btn-primary mt-3 mx-2 " >Add Admin</button>
         </form>
       
         

     </div>
  </div>

</div>
 
 <?php
// db_disconnect($dbsaddadm);?>
 
<!-- edit director mondel -->
<div id="Director-edit-form" class="modal">

  <!-- Modal content -->
  <div class="modal-content m-content-dir">
    <span onclick="closedirformwithspan()" id="closedirform" class="close1 ms-auto">&times;</span>
     <div>
         <?php
          if(isset($_POST['dname'])){
            // db_disconnect($dbs);
          // require_once('connection.php');
           $dbsupd=db_connect();
           $dn=$_POST['dname'];
           $de=$_POST['demail'];
           $fd=$_POST['dfd'];
           $dpn=$_POST['dpn'];


            $query="UPDATE STAFF_MEMB set NAME='".$dn."',EMAIL='".$de."',FROMDESK='".$fd."',PNO='".$dpn."' where POSITION='Director'";
             $result_set=mysqli_query($dbsupd,$query);


             if($result_set){
              echo '<script>alert("Director Data Uploaded")</script>';
            }else{
              echo '<script>alert("Director Data not Uploaded")</script>';
            }
          //  $countr=mysqli_num_rows($result_set);
           //   echo $countr;
           //echo $result_set;
           //echo $query;
           //echo "<script>console.log(".$query.")</script>";
           // while($row = mysqli_fetch_assoc($result_set)){
           //     $branchname[] = $row['branch'];
           // }
           //$dir=mysqli_fetch_assoc($result_set);
           db_disconnect($dbsupd);
          }
         ?>
           <?php
  ?>
         <?php
         //echo $query;
         ?>
         <h5>Edit the Director's Details </h5>
         
         <form  method="post" action="<?php
                                        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                        echo $actual_link;
                                        ?>">
         <div class="mb-3 col-md-6">
         <input type="text"    name="dname" class="form-control"  id="inputeno" placeholder="Name" required>
        </div>
        <div class="form-group col-md-6 mt-2">
       
      <input type="email" name="demail"   class="form-control" id="inputuname" placeholder="Email" required>
    </div>
    <div class="form-group col-md-6 mt-2">
       
      <textarea type="text" name="dfd"   class="form-control" id="inputuname" placeholder="From Desk" required ></textarea>
    </div>
    <div class="form-group col-md-6 mt-2">
       
      <input type="number"  min="1000000000" name="dpn"  max="9999999999"   class="form-control" id="inputuname" placeholder="Contact No" required>
    </div>
        <button type="submit" class="btn btn-primary mt-3 mx-2 " >Save Details</button>
       
         </form>
       
         

     </div>
  </div>

</div>


<!-- edit tpo mondel -->
<div id="tpo-edit-form" class="modal">

  <!-- Modal content -->
  <div class="modal-content m-content-dir">
    <span onclick="closetpoformwithspan()" id="closedirform" class="close1 ms-auto">&times;</span>
     <div>
         <?php
         if(isset($_POST['tpname'])){
        //  db_disconnect($dbs);
           //require_once('connection.php');
           $dbsaddtpo=db_connect();
           $dn=$_POST['tpname'];
           $de=$_POST['tpemail'];
           $fd=$_POST['tpfd'];
           $dpn=$_POST['tppn'];
            
           $query="UPDATE STAFF_MEMB set NAME='".$dn."',EMAIL='".$de."',FROMDESK='".$fd."',PNO='".$dpn."' where POSITION='Training and Placement Officer'";
            $result_set=mysqli_query($dbsaddtpo,$query);

            if($result_set){
              echo '<script>alert("TPO Information Uploaded")</script>';
            }else{
              echo '<script>alert("TPO Information not Uploaded")</script>';
            }

            //$countr=mysqli_num_rows($result_set);
           //   echo $countr;
           //echo $result_set;
           
           // while($row = mysqli_fetch_assoc($result_set)){
           //     $branchname[] = $row['branch'];
           // }
         //  $dir=mysqli_fetch_assoc($result_set);
         db_disconnect($dbsaddtpo);
         }
         ?>
         <h5>Edit the TPO's Details </h5>
         <form  method="post" action="<?php
                                        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                        echo $actual_link;
                                        ?>">
         <div class="mb-3 col-md-6">
         <input type="text"    name="tpname" class="form-control"  id="inputeno" placeholder="Name" required>
        </div>
        <div class="form-group col-md-6 mt-2">
       
      <input type="email" name="tpemail"   class="form-control" id="inputuname" placeholder="Email" required>
    </div>
    <div class="form-group col-md-6 mt-2">
       
      <textarea type="text" name="tpfd"   class="form-control" id="inputuname" placeholder="From Desk" required ></textarea>
    </div>
    <div class="form-group col-md-6 mt-2">
       
      <input type="number"  min="1000000000" name="tppn"  max="9999999999"   class="form-control" id="inputuname" placeholder="Contact No" required>
    </div>
        <button type="submit" class="btn btn-primary mt-3 mx-2 " >Save Details</button>
       
         </form>
       
         

     </div>
  </div>
  <?php
  ?>
</div>



</main>
    <script>




// for edit director
      
// Get the modal
var model = document.getElementById("admin-form");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function showoAddAdmin() {
    model.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    model.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == model) {
    model.style.display = "none";
  }
}
    </script>

    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</body>

</html>