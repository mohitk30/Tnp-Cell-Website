 
<?php

 
require_once('connection.php');
$dbs=db_connect();
 
 $query="SELECT NAME,POSITION,FROMDESK,EMAIL from STAFF_MEMB where POSITION='Director'";
 $result_set=mysqli_query($dbs,$query);
 $countr=mysqli_num_rows($result_set);
//   echo $countr;
//echo $result_set;

// while($row = mysqli_fetch_assoc($result_set)){
//     $branchname[] = $row['branch'];
// }
$dir=mysqli_fetch_assoc($result_set);
//echo $dir['NAME'];
//echo json_encode( $dir);




$query="SELECT NAME,POSITION,FROMDESK,EMAIL from STAFF_MEMB where POSITION='Training and Placement Officer'";
$result_set=mysqli_query($dbs,$query);
$countr=mysqli_num_rows($result_set);
//   echo $countr;
//echo $result_set;

// while($row = mysqli_fetch_assoc($result_set)){
//     $branchname[] = $row['branch'];
// }
$tpo=mysqli_fetch_assoc($result_set);
//echo $dir['NAME'];
//echo json_encode( $tpo);
?>




<?php
//  header('pagenotfound.php', true, 404);
// include('pagenotfound.php'); // provide your own HTML for the error page
// die();
// }
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
    <!-- site icon -->
    <link rel="icon" href="images/siteicon.png" type="image/gif" sizes="50x50">
    <!-- animinate -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />


    <title>Training And Placement Cell-NIT Delhi</title>
</head>

<!-- Develop by Mohit kumar with ❤  do check at github mohitk30 -->

<body  >
    <main>
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbardiv">
            <div class="container-fluid">
                <a class="navbar-brand navbrandbold" href="#"> <img src="https://nitdelhi.ac.in/wp-content/uploads/2020/10/NEW-NIT-DELHI-LOGO1.png" alt=""> <br> <span class="cellname"> <strong>   Training and Placement Cell  </strong> </span> </a>
                <button class="navbar-toggler bg-light menubuttononsmall" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-light"></span>
              </button>

              
                <div class="collapse navbar-collapse otherlinkdiv bg-light w-100" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 otherlinkdiv mx-sm-5 ">
                        <li class="nav-item">
                            <a class="nav-link   mx--lg-auto fs-5 dropli navitems" aria-current="page" href="#">Home</a>
                        </li>


                        <li class="nav-item ">
                            <a class="nav-link dropli fs-5 navitems" href="/comapnyRform.php">Recruits us</a>
                        </li>
                        <li class="nav-item   ">
                            <a class="nav-link mx-auto fs-5 navitems" href="/placereadys.php">Students</a>
                        </li>

                        <li class="nav-item dropdown leftmargin">
                            <a class="nav-link   dropdown-toggle fs-5" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      More
                        </a>
                            <ul class="dropdown-menu bg-light some-shadow" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item dropli fs-5" href="/tnpmembers.php">TnP Members </a></li>
                                <li><a class="dropdown-item dropli fs-5" href="/company.php">Past Recruiters </a></li>
                                
                                <li><a class="dropdown-item dropli fs-5" href="/upcomingDrive.php">Upcoming Drives </a></li>


                            </ul>
                        </li>
                        <li class="nav-item   ">
                            <a class="nav-link mx-auto navitems fs-5" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item dropdown leftmargin2  ">
                            <a class="nav-link dropdown-toggle fs-5 px-4 login-outline-buton2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Login
                        </a>
                            <ul class="dropdown-menu bg-light some-shadow" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item dropli fs-5" href="checkstudent.php">Students Login </a></li>
                                
                                <li><a class="dropdown-item dropli fs-5" href="/checkadmin.php">Admin Login </a></li>
                                


                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <section id="image-on-home" class="w-100 " style="height:500px;">
           
            <!-- <img class="w-100" src="images/main1.png" alt=""  > -->
            <!-- <div class="d-flex flex-row plcmtdv animate__zoomIn animate__animated">
            <div id="tnphead-div">
            Training & Placement 
            </div>
            <div id="tnphead-div-cell">
            Cell 
            </div>
            </div>  

-->                               


                 <div class="tnp-cell-heading-above">
                  <strong>   TnP Cell NIT Delhi</strong>
                 </div>

<div class="w-100 d-flex flex-row">

              <div id="type-writer-div" class=" ">
                <h1 id="type-head"><span id=" ">Our Students are</span><br>
                <strong>
                    <a href="" class="typewrite" data-period="2000" data-type='[ "IOT Engineers.", "Java Developers.","Golang Developers.",  "NodeJS Developers.","Data Analysts.","Python Developers." ]'>
                        <span class="wrap"></span>

                    </a></strong><br>
                    <span id=" "> So, Register For Campus Drive !</span>
                </h1>
                <h4 class="pt-2 main-smallertext">Do register for ongoing placement session.</h4>
            </div>  

            <div>
               <a href="comapnyRform.php"> <button class="btn Register-button-on-home" >Register</button></a>
            </div>


            </div>
<!-- 
            <div class="insert-text">
   <a href="" class="typewrite"
            data-period="2000" 
            data-type='[ 
            "fsh2sdw", 
            "... My bad!", 
            "&#128075; Hello World! 🌍", 
            "This is the sentence I want the animation to stop without deleting it" ]'>
   <span class="wrap"></span>
   </a>
</div> -->



        </section>

        <section id="data-section">

            <div id="main-outer-home" class="">
                     <div id="from-desk-div">
                            <div id="directer-desk" class=" ">


                                            <!-- from director -->
                                            <div class="px-5 pt-2 mt-5 mx-2 fromdirectorheadinf my-auto"> FROM THE DIRECTOR’S DESK</div>
                                             <div id="about-director" class="d-lg-flex flex-row p-5">
                                                                                <div id="dir-image" class="w-25 p-2">
                                                                                <img src="images/directorimage.PNG" alt="" class="image-shadows" height="200px" width="200px">
                                                                               
                                                                                </div>
                                                                                        <div id="about-dir" class="w-75"><p>

                                                                                        <?php echo $dir['FROMDESK'];?>
                                                                                        </p>
                                                                                             <p class="text-end">
                                                                                             <?php echo $dir['NAME'];?><br>
                                                                                             <?php echo $dir['POSITION'];?><br>
                                                                                             <?php echo $dir['EMAIL'];?>
                                                                                             </p>


                                                                                        </div>
                                                </div>  


                                 

                            

                            </div>
                                   <!-- from faculity -->
                                <!-- -->
                                 <div id="finc-desk" class=" ">

                                         <div class="px-5 pt-2 mt-5 mx-2 fromdirectorheadinf my-auto"> FROM THE FACULTY IN-CHARGE DESK</div>
                                                <div id="about-faculity" class="d-lg-flex flex-row p-5">
                                                                                <div id="finc-image" class="w-25 p-2">
                                                                                <img src="images/tpoimage.PNG" alt="" class="image-shadows" height="200px" width="200px">
                                                                                 
                                                                                </div>
                                                                                        <div id="about-finc" class="w-75">
                                                                                            <p>
                                                                                            <?php echo $tpo['FROMDESK'];?>
                                                                                        </p>



                                                                                        <p class="text-end">
                                                                                             <?php echo $tpo['NAME'];?><br>
                                                                                             <?php echo $tpo['POSITION'];?><br>
                                                                                             <?php echo $tpo['EMAIL'];?>
                                                                                             </p>
                                                                                        </div>
                                                </div>  
    






                                         

                                  </div>




                                  <!-- <div class="px-5 pt-2 mt-5 mx-2 fromdirectorheadinf my-auto"> Notice / Updates</div> -->
                                  <!-- <div class="mt-4 p-4 w-75 mx-auto text-uppercase fs-4">
                                  <marquee   >Here is a General Notice For all.</marquee>
                                  </div> -->


                         </div>
                                                
                                                    <?php
                                                    $year=[
                                                        'year1'=>'2014' ,'year2'=>'2015','year3'=>'2016','year4'=>'2017','year5'=>'2018','year6'=>'2019','year7'=>'2020'
                                                        
                                                        ];
                                        


                                                    ?>
                                                    <div id="placement-statice-div" class="w-25">
                                                        <h3 class="text-center pt-4"> <strong> Placement <br> Statistics </strong></h3><br>
                                                        <div class="mx-auto w-75 buttons-div">
                                                            <a href="<?php echo 'statics.php?yearplace='.$year['year7']?>"> <button class="side-buttons w-100  "><p class="but-text my-auto"> Statistics 2020-21</p></button></a>
                                                            <a href="<?php echo 'statics.php?yearplace='.$year['year6']?>"> <button class="side-buttons w-100"><p class="but-text my-auto"> Statistics 2019-20</p></button></a>
                                                            <a href="<?php echo 'statics.php?yearplace='.$year['year5']?>"> <button class="side-buttons w-100"><p class="but-text my-auto"> Statistics 2018-19</p></button></a>
                                                            <a href="<?php echo 'statics.php?yearplace='.$year['year4']?>"> <button class="side-buttons w-100  "><p class="but-text my-auto"> Statistics 2017-18</p></button></a>
                                                            <a href="<?php echo 'statics.php?yearplace='.$year['year3']?>"> <button class="side-buttons w-100"><p class="but-text my-auto"> Statistics 2016-17</p></button></a>
                                                            <a href="<?php echo 'statics.php?yearplace='.$year['year2']?>"> <button class="side-buttons w-100"><p class="but-text my-auto"> Statistics 2015-16</p></button></a>
                                                            <a href="<?php echo 'statics.php?yearplace='.$year['year1']?>"> <button class="side-buttons w-100  "><p class="but-text my-auto"> Statistics 2014-15</p></button></a>

                                                        </div>
                                                        <div id="download-bouncture">

                                                            <a class="down-broc-svg" href="documents/broucture.pdf" target="_blank">
                                                                <img class="down-broc-svg" src="images/place_down.svg" alt=""></a>
                                                        </div>
                                                        <div class="mt-4 mb-3 register-button rounded">
                                                        <!-- <a href="javascript:void(0);">  -->
                                                            <!-- <button onclick="showoptions()"  class="side-buttons w-100 btn rounded dark-blue"  ><p class="but-text my-auto text-center text-uppercase fs-2 fw-bolder"> Register</p></button> -->
                                                        <!-- </a> -->
 
                                                   <!-- Modal -->
                                                    </div>

                                                    <!-- <div class="card mx-auto shadow" style="width: 17rem;">
                                                        <img class="card-img-top" src="images/jobfind.png" alt="Card image cap">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Want a job?</h4>
                                                            <p class="card-text">
                                                          If you are a bonafide student from National Institute of Technology Delhi and wish to appear in the placement drives this season, then follow the link and get registered.</p>
                                                            <a href="studentPlaceForm.php" class="reg-link">GET REGISTERED</a>
                                                        </div>
                                                        </div> -->

                                                        <div class="card mx-auto mt-4 mb-3 shadow" style="width: 17rem;">
                                                        <img class="card-img-top" src="images/recruitfind.png" alt="Card image cap">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Want to recruit?</h4>
                                                            <p class="card-text">
                                                        
                                                             If you are a registered company and wish to recruit B.Tech and/or M.Tech students from NIT Delhi, then follow the given link and get started.</p>
                                                            <a href="comapnyRform.php" class="reg-link">GET REGISTERED</a>
                                                        </div>
                                                        </div>
                                                        


                                                    </div>










              
            </div>

        </section>

        <!-- <section id="notice section">
  will look later

        </section> -->

        <section id="contact">
        <h4 class="text-center pt-5 contact-heading">Contact us</h4>
        <p class="text-center  ">Get in touch with us</p>


<div id="contact-outer" class="d-flex flex-lg-row">



<div id="contact-left" class="d-flex flex-lg-row p-5">

<div id="contactno" class="w-50">
<h4 class="text-center ">  📞 Contact Us</h4>
<ul type="none">

<li class="mx-3 mt-4"><i class="fas fa-map-marker-alt fa-2x"></i><span class="mx-3">INSTITUTE OF APPLIED MANPOWER RESEARCH (IAMR CAMPUS)
A-7, INSTITUTIONAL AREA, NARELA, DELHI – 110040
NIT DELHI ( PERMANENT CAMPUS ), NH-1, NARELA SUB CITY, NEW DELHI
</span> </li>
<li class="mx-3 mt-4"><i class="fas fa-envelope fa-2x"></i> <span>tnp@nitdelhi.ac.in</span>  </li>

<li class="mx-3 mt-4"><i class="fas fa-phone-volume fa-2x"></i> <span>011-33861065</span> </li>
</ul>


</div>
<div id="contactperson" class="w-50 mx-3">
<h4 class="text-center "> <i class="fas fa-users"></i> &nbsp; Officials</h4>

<h5 class="text-center mt-4"><strong>Ms. Anupriya Ghosh</strong></h5>
    <h5 class="text-center ">Training and Placement Administration Head, NIT Delhi<br><br>
Phone: +91 95820 18766<br><br>
Email ID: tnp@nitdelhi.ac.in , anupriya@nitdelhi.ac.in
</h5>
</div>

</div>
<div id="contact-right">
<iframe class="image-shadows" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4216.570732989554!2d77.10119547971603!3d28.842872890803033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1b1923ada2e3%3A0x1169930518add2fe!2sNational%20Institute%20of%20Technology%20Delhi!5e0!3m2!1sen!2sin!4v1631957847441!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>            
    
</div>




</div>
        </section>







        <footer>
            <div class="footer-outer">

            <div class="footer-small-divs mx-sm-auto">

            <h4 class="text-center footer-heading-bold">About</h4>
            <h5 class="p-4">
            Training And placement Cell of <strong> NIT Delhi</strong>  , is the 
            student run organization under the guidance of faculty members, which handles all activities
             related to the campus placement of the graduating batch.

</h5>

            </div>
            <div class="footer-small-divs mx-sm-auto">
            <h4 class="text-center footer-heading-bold">Important Links</h4>
            <ul class="lists-in-footer" type="none" >
            <li><a href="http://www.nitdelhi.ac.in/" target="_blank">NIT Delhi website</a></li>
            <li><a href="#placement-statice-div">Placement statics</a></li>
            <li> <a href="#contact">Contact</a></li>
            <li> <a href="#about-director">Message</a></li>
            <li> <a href="">Contribute</a></li>


            </ul>
                
            </div>
            <div class="footer-small-divs mx-sm-auto">
            <h4 class="text-center footer-heading-bold">Stay Connected</h4>
            <span class="mx-5 p-4"> 
           <a href=""> <i class="fab fa-facebook fa-2x mx-2"></i></a> 
           <a href=""><i class="fab fa-linkedin fa-2x mx-2"></i></a>
           <a href=""><i class="fab fa-instagram fa-2x mx-2"></i></a>
           <a href=""><i class="fab fa-discord fa-2x mx-2"></i></a>
           <a href=""><i class="fab fa-twitter fa-2x mx-2"></i></a>
           <a href=""><i class="fab fa-youtube fa-2x mx-2"></i></a>
        </span>
                
            </div>


            </div>
        </footer>




<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close ms-auto">&times;</span>
     <div>
         <h4>Register </h4>
       <a href="/comapnyRform.php"> <button class="btn btn-primary">Organization  as Recruiter </button></a> <br>
        <a href="/studentPlaceForm.php"> <button class="btn btn-primary mt-4">Student for Placement </button></a>

     </div>
  </div>

</div>

    </main>




<!-- opened mondel -->

<div id="always-open-1-divid" class="always-1-open-div">

  
  
  <div class="main-open1-div-content shadow-sm">
  <div class="opened-div-header"  >
  
  </div>
  <div class="card" style="width: 100%; height:544px;border:0px; ">
  <img src="images/jobopen.png" class="card-img-top" alt="...">
      
  <div class=" d-flex flex-row card-body-color">
  <button onclick="document.getElementById('always-open-1-divid').style.display='none'" class=" btn btn-oendic-close" title="Close">Close</button>
   <a href="comapnyRform.php"> <button   class=" btn btn-register-opendiv" title="Register for campus Drive">Register</button></a>
  </div>
</div>

 
  </div>
</div>





  <!-- opened mondel -->  






    
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function showoptions() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
    <script>
    </script>

<script>

</script>

<script src='mondel.js'>
    </script>


    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</body>

</html>