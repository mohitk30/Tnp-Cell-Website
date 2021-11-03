// function d1() {
//     document.getElementById('d1v').classList.add("active-op");
//     document.getElementById('d1vb').classList.add("active-op");
//     document.getElementById('d2v').classList.remove("active-op");
//     document.getElementById('d2vb').classList.remove("active-op");
//     document.getElementById('d3v').classList.remove("active-op");
//     document.getElementById('d3vb').classList.remove("active-op");
//     document.getElementById('d4v').classList.remove("active-op");
//     document.getElementById('d4vb').classList.remove("active-op");
// }

// function d2() {
//     document.getElementById('d2v').classList.add("active-op");
//     document.getElementById('d2vb').classList.add("active-op");
// }

// function d3() {
//     document.getElementById('d3v').classList.add("active-op");
//     document.getElementById('d3vb').classList.add("active-op");
// }

// function d4() {
//     document.getElementById('d4v').classList.add("active-op");
//     document.getElementById('d4vb').classList.add("active-op");
// }

// function d5() {
//     document.getElementById('d5v').classList.add("active-op");
//     document.getElementById('d5vb').classList.add("active-op");
// }

// function d6() {
//     document.getElementById('d6v').classList.add("active-op");
//     document.getElementById('d6vb').classList.add("active-op");
// }

// function d7() {
//     document.getElementById('d7v').classList.add("active-op");
//     document.getElementById('d7vb').classList.add("active-op");
// }

// function d8() {
//     document.getElementById('d8v').classList.add("active-op");
//     document.getElementById('d8vb').classList.add("active-op");
// }
function showBalance() {
    document.getElementById('current-balance').innerHTML = "  1000";
}
//alert("Welcome To SBI Online.You can Do Basic Operation such as Sending Money,changing Personal Information etc. Only.");

// // inspect
// document.addEventListener('keydown', function() {
//     if (event.keyCode == 123) {
//         alert("This function has been disabled for Security Reasons.");
//         return false;
//     } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
//         alert("This function has been disabled for Security Reasons.");
//         return false;
//     } else if (event.ctrlKey && event.keyCode == 85) {
//         alert("This function has been disabled for Security Reasons.");
//         return false;
//     }
// }, false);

// if (document.addEventListener) {
//     document.addEventListener('contextmenu', function(e) {
//         alert("This function has been disabled for Security Reasons.");
//         e.preventDefault();
//     }, false);
// } else {
//     document.attachEvent('oncontextmenu', function() {
//         alert("This function has been disabled for Security Reasons.");
//         window.event.returnValue = false;
//     });
// }


////////////
function viewmyprofile() {

    document.getElementById('account-info-div-inlarger').style.display = "none";
    document.getElementById('Profile-info-div-inlarger').style.display = "block";
    document.getElementById('any-new-info-div').style.display = "none";
    document.getElementById('any-new-info-div-profile').style.display = "flex";
    document.getElementById('about-where').innerHTML = "You are here: &nbsp;   My Account & Profile &nbsp;  /&nbsp;   Profile &nbsp;   /&nbsp;    My Profile";
}

function showacsummary() {

    document.getElementById('account-info-div-inlarger').style.display = "block";
    document.getElementById('Profile-info-div-inlarger').style.display = "none";
    document.getElementById('any-new-info-div').style.display = "flex";
    document.getElementById('any-new-info-div-profile').style.display = "none";
    document.getElementById('about-where').innerHTML = "You are here: &nbsp;/ &nbsp;My Account & Profile &nbsp;/&nbsp;Account Summary";
}
var email = "mohitmkkumar98@gmail.com";
var demomobile = "+91 000000000";

function showmobile() {
    document.getElementById('mobileno').innerHTML = demomobile;
}

function showemail() {
    document.getElementById('emailid').innerHTML = email;
}

// ///////////////////////
//tabs



function openPage(pageName, elmnt, color, idbut) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;
    document.getElementById("bt1").classList.remove("defaultOpen");
    document.getElementById("bt2").classList.remove("defaultOpen");
    document.getElementById("bt3").classList.remove("defaultOpen");
    document.getElementById("bt4").classList.remove("defaultOpen");
    document.getElementById(idbut).classList.add("defaultOpen");
}

// Get the element with id="defaultOpen" and click on it
function opendefaulttab() {
    document.getElementById("bt1").click();
}


////
function showDifferentD1() {
    var element = document.getElementById("div-dash");
    element.classList.add("vis");
    var element = document.getElementById("div-stud");
    element.classList.add("not-vis");
    var element = document.getElementById("div-adm");
    element.classList.add("not-vis");
    var element = document.getElementById("div-rstud");
    element.classList.add("not-vis");
    var element = document.getElementById("div-precu");
    element.classList.add("not-vis");
    var element = document.getElementById("div-tnpm");
    element.classList.add("not-vis");
    var element = document.getElementById("div-dash");
    element.classList.remove("not-vis");
    var element = document.getElementById("div-stud");
    element.classList.remove("vis");
    var element = document.getElementById("div-adm");
    element.classList.remove("vis");
    var element = document.getElementById("div-rstud");
    element.classList.remove("vis");
    var element = document.getElementById("div-precu");
    element.classList.remove("vis");
    var element = document.getElementById("div-tnpm");
    element.classList.remove("vis");
    var element = document.getElementById("div-staf");
    element.classList.remove("vis");
    var element = document.getElementById("div-staf");
    element.classList.add("not-vis");

    var element = document.getElementById("div-drives");
    element.classList.add("not-vis");
    var element = document.getElementById("div-drives");
    element.classList.remove("vis");


    location.reload();

}

function showDifferentD2() {
    var element = document.getElementById("div-dash");
    element.classList.add("not-vis");
    var element = document.getElementById("div-stud");
    element.classList.add("vis");
    var element = document.getElementById("div-adm");
    element.classList.add("not-vis");
    var element = document.getElementById("div-rstud");
    element.classList.add("not-vis");
    var element = document.getElementById("div-precu");
    element.classList.add("not-vis");
    var element = document.getElementById("div-tnpm");
    element.classList.add("not-vis");
    var element = document.getElementById("div-dash");
    element.classList.remove("vis");
    var element = document.getElementById("div-stud");
    element.classList.remove("not-vis");
    var element = document.getElementById("div-adm");
    element.classList.remove("vis");
    var element = document.getElementById("div-rstud");
    element.classList.remove("vis");
    var element = document.getElementById("div-precu");
    element.classList.remove("vis");
    var element = document.getElementById("div-tnpm");
    element.classList.remove("vis");
    var element = document.getElementById("div-staf");
    element.classList.remove("vis");
    var element = document.getElementById("div-staf");
    element.classList.add("not-vis");

    var element = document.getElementById("div-drives");
    element.classList.add("not-vis");
    var element = document.getElementById("div-drives");
    element.classList.remove("vis");




}

function showDifferentD3() {
    var element = document.getElementById("div-dash");
    element.classList.add("not-vis");
    var element = document.getElementById("div-stud");
    element.classList.add("not-vis");
    var element = document.getElementById("div-adm");
    element.classList.add("vis");
    var element = document.getElementById("div-rstud");
    element.classList.add("not-vis");
    var element = document.getElementById("div-precu");
    element.classList.add("not-vis");
    var element = document.getElementById("div-tnpm");
    element.classList.add("not-vis");
    var element = document.getElementById("div-dash");
    element.classList.remove("vis");
    var element = document.getElementById("div-stud");
    element.classList.remove("vis");
    var element = document.getElementById("div-adm");
    element.classList.remove("not-vis");
    var element = document.getElementById("div-rstud");
    element.classList.remove("vis");
    var element = document.getElementById("div-precu");
    element.classList.remove("vis");
    var element = document.getElementById("div-tnpm");
    element.classList.remove("vis");
    var element = document.getElementById("div-staf");
    element.classList.remove("vis");
    var element = document.getElementById("div-staf");
    element.classList.add("not-vis");

    var element = document.getElementById("div-drives");
    element.classList.add("not-vis");
    var element = document.getElementById("div-drives");
    element.classList.remove("vis");


}

function showDifferentD4() {
    var element = document.getElementById("div-dash");
    element.classList.add("not-vis");
    var element = document.getElementById("div-stud");
    element.classList.add("not-vis");
    var element = document.getElementById("div-adm");
    element.classList.add("not-vis");
    var element = document.getElementById("div-rstud");
    element.classList.add("vis");
    var element = document.getElementById("div-precu");
    element.classList.add("not-vis");
    var element = document.getElementById("div-tnpm");
    element.classList.add("not-vis");
    var element = document.getElementById("div-dash");
    element.classList.remove("vis");
    var element = document.getElementById("div-stud");
    element.classList.remove("vis");
    var element = document.getElementById("div-adm");
    element.classList.remove("vis");
    var element = document.getElementById("div-rstud");
    element.classList.remove("not-vis");
    var element = document.getElementById("div-precu");
    element.classList.remove("vis");
    var element = document.getElementById("div-tnpm");
    element.classList.remove("vis");
    var element = document.getElementById("div-staf");
    element.classList.remove("vis");
    var element = document.getElementById("div-staf");
    element.classList.add("not-vis");

    var element = document.getElementById("div-drives");
    element.classList.add("not-vis");
    var element = document.getElementById("div-drives");
    element.classList.remove("vis");



}

function showDifferentD5() {
    var element = document.getElementById("div-dash");
    element.classList.add("not-vis");
    var element = document.getElementById("div-stud");
    element.classList.add("not-vis");
    var element = document.getElementById("div-adm");
    element.classList.add("not-vis");
    var element = document.getElementById("div-rstud");
    element.classList.add("not-vis");
    var element = document.getElementById("div-precu");
    element.classList.add("vis");
    var element = document.getElementById("div-tnpm");
    element.classList.add("not-vis");
    var element = document.getElementById("div-dash");
    element.classList.remove("vis");
    var element = document.getElementById("div-stud");
    element.classList.remove("vis");
    var element = document.getElementById("div-adm");
    element.classList.remove("vis");
    var element = document.getElementById("div-rstud");
    element.classList.remove("vis");
    var element = document.getElementById("div-precu");
    element.classList.remove("not-vis");
    var element = document.getElementById("div-tnpm");
    element.classList.remove("vis");
    var element = document.getElementById("div-staf");
    element.classList.remove("vis");
    var element = document.getElementById("div-staf");
    element.classList.add("not-vis");

    var element = document.getElementById("div-drives");
    element.classList.add("not-vis");
    var element = document.getElementById("div-drives");
    element.classList.remove("vis");

}

function showDifferentD6() {
    var element = document.getElementById("div-dash");
    element.classList.add("not-vis");
    var element = document.getElementById("div-stud");
    element.classList.add("not-vis");
    var element = document.getElementById("div-adm");
    element.classList.add("not-vis");
    var element = document.getElementById("div-rstud");
    element.classList.add("not-vis");
    var element = document.getElementById("div-precu");
    element.classList.add("not-vis");
    var element = document.getElementById("div-tnpm");
    element.classList.add("vis");
    var element = document.getElementById("div-dash");
    element.classList.remove("vis");
    var element = document.getElementById("div-stud");
    element.classList.remove("vis");
    var element = document.getElementById("div-adm");
    element.classList.remove("vis");
    var element = document.getElementById("div-rstud");
    element.classList.remove("vis");
    var element = document.getElementById("div-precu");
    element.classList.remove("vis");
    var element = document.getElementById("div-tnpm");
    element.classList.remove("not-vis");

    var element = document.getElementById("div-staf");
    element.classList.remove("vis");
    var element = document.getElementById("div-staf");
    element.classList.add("not-vis");

    var element = document.getElementById("div-drives");
    element.classList.add("not-vis");
    var element = document.getElementById("div-drives");
    element.classList.remove("vis");


}

function showDifferentD7() {
    var element = document.getElementById("div-dash");
    element.classList.add("not-vis");
    var element = document.getElementById("div-stud");
    element.classList.add("not-vis");
    var element = document.getElementById("div-adm");
    element.classList.add("not-vis");
    var element = document.getElementById("div-rstud");
    element.classList.add("not-vis");
    var element = document.getElementById("div-precu");
    element.classList.add("not-vis");
    var element = document.getElementById("div-tnpm");
    element.classList.add("not-vis");
    var element = document.getElementById("div-staf");
    element.classList.add("vis");
    var element = document.getElementById("div-dash");
    element.classList.remove("vis");
    var element = document.getElementById("div-stud");
    element.classList.remove("vis");
    var element = document.getElementById("div-adm");
    element.classList.remove("vis");
    var element = document.getElementById("div-rstud");
    element.classList.remove("vis");
    var element = document.getElementById("div-precu");
    element.classList.remove("vis");
    var element = document.getElementById("div-tnpm");
    element.classList.remove("vis");
    var element = document.getElementById("div-staf");
    element.classList.remove("not-vis");

    var element = document.getElementById("div-drives");
    element.classList.add("not-vis");
    var element = document.getElementById("div-drives");
    element.classList.remove("vis");


}


function showDifferentD8() {
    var element = document.getElementById("div-dash");
    element.classList.add("not-vis");
    var element = document.getElementById("div-stud");
    element.classList.add("not-vis");
    var element = document.getElementById("div-adm");
    element.classList.add("not-vis");
    var element = document.getElementById("div-rstud");
    element.classList.add("not-vis");
    var element = document.getElementById("div-precu");
    element.classList.add("not-vis");
    var element = document.getElementById("div-tnpm");
    element.classList.add("not-vis");
    var element = document.getElementById("div-staf");
    element.classList.add("not-vis");
    var element = document.getElementById("div-drives");
    element.classList.add("vis");
    var element = document.getElementById("div-dash");
    element.classList.remove("vis");
    var element = document.getElementById("div-stud");
    element.classList.remove("vis");
    var element = document.getElementById("div-adm");
    element.classList.remove("vis");
    var element = document.getElementById("div-rstud");
    element.classList.remove("vis");
    var element = document.getElementById("div-precu");
    element.classList.remove("vis");
    var element = document.getElementById("div-tnpm");
    element.classList.remove("vis");
    var element = document.getElementById("div-staf");
    element.classList.remove("vis");
    var element = document.getElementById("div-drives");
    element.classList.remove("not-vis");


}

function openFormAddStudent() {
    document.getElementById("myForm-add-student").style.display = "block";
}

function closeFormAddStudent() {
    document.getElementById("myForm-add-student").style.display = "none";
}


/////////////////////
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
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


/////////////////////////////////////////
function showSearchedData() {

    document.getElementById("searched-data-div").style.display = "block";
    var sname = document.getElementById("inputname").value;

    if (document.getElementById("inputname").value != "") {
        $.ajax({
            url: "/functions/showSearchedName.php?search=" + sname, //the page containing php script
            type: "POST", //request type
            success: function(result) {

                document.getElementById("searched-data-div").innerHTML = result;



            }
        });
    } else {
        document.getElementById("searched-data-div").innerHTML = "please enter any name in Search Field";
    }

}

/////////////////////////////////////////
function onOffRegistrations() {
    let element = document.getElementById("on-off-rforms");
    console.log(element);
    if (element.innerText === "Click here to turn off registrations") {
        element.innerText = "Click here to turn on registrations";
    } else {
        element.innerText = "Click here to turn off registrations";
    }

}



function selectjs() {
    $.ajax({
        url: "/functions/ajaxtext.php", //the page containing php script
        type: "POST", //request type
        success: function(result) {
            console.log(result);
        }
    });
}

function onoffbutn() {

    $.ajax({
        url: "/cruds/onoffdrives.php", //the page containing php script
        type: "POST", //request type
        success: function(result) {

            console.log(result);
        }
    });
    location.reload();

}

function onoffsrbutn() {

    $.ajax({
        url: "/cruds/onoffstudreg.php", //the page containing php script
        type: "POST", //request type
        success: function(result) {

            console.log(result);
        }
    });



}
/////////////////////////////////

/// Get the modal
var model_dir = document.getElementById('Director-edit-form');
console.log(model_dir)
    // Get the button that opens the model_dir
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the model_dir
// var span = document.getElementsByClassName("close1")[0];
var span = document.getElementById('closedirform');
// When the user clicks on the button, open the model_dir
function showoeditdir() {
    var model_dir = document.getElementById('Director-edit-form');

    model_dir.style.display = "block";
}

// When the user clicks on <span> (x), close the model_dir
function closedirformwithspan() {
    var model_dir = document.getElementById('Director-edit-form');
    model_dir.style.display = "none";
}

// When the user clicks anywhere outside of the model_dir, close it
window.onclick = function(event) {
    if (event.target == model_dir) {
        model_dir.style.display = "none";
    }
}



/// Get the modal
var model_dir = document.getElementById('tpo-edit-form');
console.log(model_dir)
    // Get the button that opens the model_dir
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the model_dir
// var span = document.getElementsByClassName("close1")[0];
var span = document.getElementById('closedirform');
// When the user clicks on the button, open the model_dir
function showoedittpo() {
    var model_dir = document.getElementById('tpo-edit-form');

    model_dir.style.display = "block";
}

// When the user clicks on <span> (x), close the model_dir
function closetpoformwithspan() {
    var model_dir = document.getElementById('tpo-edit-form');
    model_dir.style.display = "none";
}

// When the user clicks anywhere outside of the model_dir, close it
window.onclick = function(event) {
    if (event.target == model_dir) {
        model_dir.style.display = "none";
    }
}

function openeditorpastr() {
    var model_dir = document.getElementById('edit-form-pruct');

    model_dir.style.display = "block";
}

function closeeditpastformwithspan() {
    var model_dir = document.getElementById('edit-form-pruct');
    model_dir.style.display = "none";
}

function deletepastrid(x) {
    console.log(x);
    $.ajax({
        url: "/cruds/deletepastr.php?pastrid=" + x, //the page containing php script
        type: "POST", //request type
        success: function(result) {

            console.log(result);
            location.reload();
        }
    });
}

function deletedriveid(x) {
    //  console.log(x);
    $.ajax({
        url: "/cruds/deleteupdrive.php?updid=" + x, //the page containing php script
        type: "POST", //request type
        success: function(result) {

            console.log(result);
            //   location.reload();
        }
    });
}


function approvedriveid(x) {
    //  console.log(x);
    $.ajax({
        url: "/cruds/approvedrive.php?updid=" + x, //the page containing php script
        type: "POST", //request type
        success: function(result) {
            console.log("done");
            console.log(result);
            //   location.reload();
        }
    });
}


function deletedtnpid(x) {
    //  console.log(x);
    $.ajax({
        url: "/cruds/deletetnpmemb.php?tnpmid=" + x, //the page containing php script
        type: "POST", //request type
        success: function(result) {

            console.log(result);
            //   location.reload();
            alert("Data Deleted!! Please Refresh The page.You will see Updated Data.")
        }
    });
}

function deleteadminid(x) {
    // console.log(x);
    $.ajax({
        url: "/cruds/deleteadmin.php?admid=" + x, //the page containing php script
        type: "POST", //request type
        success: function(result) {

            console.log(result);
            location.reload();
        }
    });
}

function deletedregsid(x) {
    //  console.log(x);
    $.ajax({
        url: "/cruds/deleteregs.php?regid=" + x, //the page containing php script
        type: "POST", //request type
        success: function(result) {

            console.log(result);
            alert("Data Deleted!! Please Refresh The page.You will see Updated Data.");
        }
    });
}


function refeshpage() {
    // console.log("refresh")

    $.ajax({
        url: "/cruds/refresh.php", //the page containing php script
        type: "POST", //request type
        success: function(result) {

            console.log(result);
            //location.reload();
        }
    });
    window.top.location = window.top.location;
}


function newregsession() {
    //  console.log(x);
    $.ajax({
        url: "/cruds/newregses.php", //the page containing php script
        type: "POST", //request type
        success: function(result) {

            //  console.log(result);
            alert("Registration Queue cleared.");
        }
    });
}

function downloadStudentList() {
    const cpg = parseFloat(prompt("Enter minimum CGPA required?", "0"), 10);
    if (isNaN(cpg) == true) {
        alert("Please Enter a valid CGPA (0.00 to 10.00).");
    } else {

        console.log(cpg);
        alert("Download started in Excel sheet format. So trust the Developers and open it!!");
        // $.ajax({
        //     url: "/cruds/newregses.php", //the page containing php script
        //     type: "POST", //request type
        //     success: function(result) {

        //         //  console.log(result);
        //         alert("Download started in excel sheet format. So trust the Developers and open it!!");
        //     }
        // });

    }
}

// function showbyEnroll() {


//     var sname = document.getElementById("inputroll").value;
//     //console.log(sname);

//     if (document.getElementById("inputroll").value != "") {
//         document.getElementById("searched-data-div-stud").style.display = "none";
//         console.log(sname)
//             // var elr = document.getElementById('sname').click();
//             // console.log(elr)
//         document.getElementById("searched-stud").style.display = "block";
//         document.getElementById("all-stud").style.display = "none";
//         //  window.location = "http://" + window.location.host + "/studentListAdmin.php/#" + sname;
//         // console.log(window.location);
//         //  window.location = "http://www.myurl.com/search/" + (input text value);
//         $.ajax({
//             url: "/cruds/searchstd.php?searchrl=" + sname, //the page containing php script
//             type: "POST", //request type
//             success: function(result) {

//                 //  document.getElementById("searched-data-div").innerHTML = result;

//                 alert("data found");

//             }
//         });
//     } else {
//         document.getElementById("searched-data-div-stud").style.display = "block";
//         document.getElementById("searched-data-div-stud").innerHTML = "Please enter any Rollno. in Search Field";
//     }

// }


////////////////////////////////
function showbyEnroll() {

    document.getElementById("searched-data-div-stud").style.display = "block";
    var sname = document.getElementById("inputrollnostd").value;

    if (document.getElementById("inputrollnostd").value != "") {
        $.ajax({
            url: "/cruds/searchstd.php?searchrl=" + sname, //the page containing php script
            type: "POST", //request type
            success: function(result) {
                console.log("done");
                document.getElementById("searched-data-div-stud").innerHTML = result;

                console.log("done");

            }
        });
    } else {
        document.getElementById("searched-data-div-stud").innerHTML = "please enter any Roll No in Search Field";
    }

}

function deleteStudentid(x) {
    var cke = confirm("This will result in deleating complete info of student with Enroll " + x);

    if (cke == true) {



        $.ajax({
            url: "/cruds/deletestud.php?stdid=" + x, //the page containing php script
            type: "POST", //request type
            success: function(result) {

                console.log(result);
                alert("Data Deleted!! Please Refresh The page.You will see Updated Data.");
            }
        });
    } else {

    }

}