<!DOCTYPE html>
<html lang="en">
<head>
    <title>StudyLive Learning</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- <script>
      $(document).ready(function() {
          var ju = false;
          var jp = false;
          var jm = false;
          var rad;
              var res;

          $("#btnSign").click(function() {
              if (ju == false && jp == false && jm == false) {
                  $("#errSign").html("Fill the required data first");
                  $("#errSign").css("color", "#e84a5f");
                  return;
              } else if (ju == false && jp == false) {
                  $("#errSign").html("Please fill your UID and password");
                  $("#errSign").css("color", "#e84a5f");
                  return;
              } else if (ju == false && jm == false) {
                  $("#errSign").html("Please fill your UID and Institute");
                  $("#errSign").css("color", "#e84a5f");
                  return;
              } else if (jp == false && jm == false) {
                  $("#errSign").html("Please fill your password and Institute");
                  $("#errSign").css("color", "#e84a5f");
                  return;
              } else if (ju == false) {
                  $("#errSign").html("Please fill your UID");
                  $("#errSign").css("color", "#e84a5f");
                  return;
              } else if (jp == false) {
                  $("#errSign").html("Please fill your password");
                  $("#errSign").css("color", "#e84a5f");
                  return;
              } else if (jm == false) {
                  $("#errSign").html("Please fill your Institute");
                  $("#errSign").css("color", "#e84a5f");
                  return;
              } else {
                  var txtUid = $("#txtUid").val();
                  var txtPwd = $("#txtPwd").val();
                  var txtInstitute = $("#txtInstitute").val();
                  var radStudent = $("#radStudent").val();
                  var radTeacher = $("#radTeacher").val();
                  if ($("#radStudent").prop("checked") == true)
                      rad = $("#radStudent").val();
                  if ($("#radTeacher").prop("checked") == true)
                      rad = $("#radTeacher").val();
                  var url = "ajax-signup.php?uid=" + txtUid + "&pwd=" + txtPwd + "&institute=" + txtInstitute + "&rad=" + rad;
                  $.get(url, function(response) {
                      if (response == "Signup Successful") {
                        alert(Signed Up)
                          if (rad == "Student") {
                            alert(Student)
                              window.location.href = 'course.html';
                          } else if (rad == "Teacher") {
                            alert(Teacher)
                              window.location.href = 'instructor-details.html';
                          }
                      } else {
                          $("#errSign").html(response);
                          $("#errSign").css("color", "#e84a5f");
                      }
                  });

              }

          });

          // $("#btnLog").click(function() {
          //     var txtUid2 = $("#txtUid2").val();
          //     var txtPwd2 = $("#txtPwd2").val();
          //     var url = "ajax-process-login.php?uid=" + txtUid2 + "&pwd=" + txtPwd2;
          //     $.get(url, function(response) {
          //
          //         if (response == "Authorized login") {
          //             if (res == "Authorized login (You are a doctor)") {
          //                 window.location.href = 'doc-login.php';
          //             } else if (res == "Authorized login (You are a patient)") {
          //                 window.location.href = 'dashboard-patient.php';
          //             }
          //         } else {
          //             $("#errLog").html("Please fill the details correctly");
          //             $("#errLog").css("color","#e84a5f");
          //         }
          //
          //     });
          // });

          // $("#txtUid2").blur(function() {
          //     var txtUid2 = $("#txtUid2").val();
          //     if (txtUid2 == "") {
          //         $("#errUid2").html("Please fill your UID");
          //         $("#errUid2").css("color", "#e84a5f");
          //     } else {
          //         var url = "ajax-chk-uid-login.php?uid=" + txtUid2;
          //         $.get(url, function(response) {
          //             $("#errUid2").html(response);
          //             res = response;
          //             if (response == "Unauthorized login")
          //                 $("#errUid2").css("color", "#e84a5f");
          //             else
          //                 $("#errUid2").css("color", "#32e0c4");
          //         });
          //     }
          // });

          $("#txtUid").blur(function() {
              var txtUid = $("#txtUid").val();
              if (txtUid == "") {
                  $("#errUid").html("Please fill a desired UID");
                  $("#errUid").css("color", "#e84a5f");
              } else {
                  var url = "ajax-uid-signup.php?uid=" + txtUid;
                  $.get(url, function(response) {
                      $("#errUid").html(response);
                      ju = true;
                      if (response == "Username available")
                          $("#errUid").css("color", "#32e0c4");
                      else
                          $("#errUid").css("color", "#e84a5f");
                  });

              }
          });


          $("#txtPwd").blur(function() {
              var r = /(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
              var txtPwd = $("#txtPwd").val();
              var result = r.test(txtPwd);
              if (txtPwd == "") {
                  $("#errPwd").html("Please fill a desired password");
                  $("#errPwd").css("color", "#e84a5f");
              } else {
                  if (result == true) {
                      $("#errPwd").html("Valid");
                      $("#errPwd").css("color", "#32e0c4");
                      jp = true;
                  } else {
                      $("#errPwd").html("Invalid");
                      $("#errPwd").css("color", "#e84a5f");
                  }
              }

          });

          /*$("#txtPwd2").blur(function() {
              var r = /(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
              var txtPwd2 = $("#txtPwd2").val();
              var result = r.test(txtPwd2);
              if (txtPwd2 == "") {
                  $("#errPwd2").html("Please fill your password");
                  $("#errPwd2").css("color", "#e84a5f");
              } else {
                  if (result == true) {
                      $("#errPwd2").html("Valid");
                      $("#errPwd2").css("color", "#32e0c4");
                  } else {
                      $("#errPwd2").html("Invalid");
                      $("#errPwd2").css("color", "#e84a5f");
                  }
              }

          });*/

          $("#txtInstitute").blur(function() {
              // var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
              var txtInstitute = $("#txtInstitute").val();
              // var result = phoneno.test(txtInstitute);
              if (txtInstitute == "") {
                  $("#errInstitute").html("Please fill your Institute");
                  $("#errInstitute").css("color", "#e84a5f");
              } else {
                  if (result == true) {
                      $("#errInstitute").html("Valid");
                      $("#errInstitute").css("color", "#32e0c4");
                      jm = true;
                  } else {
                      $("#errInstitute").html("Invalid");
                      $("#errInstitute").css("color", "#e84a5f");
                  }
              }
          });
      });

  </script> -->

    <script>
        $(document).ready(function() {

            var ju = false;
            var jp = false;
            var jm = false;
            var rad;
                var res;

            $("#btnSign").click(function() {
                if (ju == false && jp == false && jm == false) {
                    $("#errSign").html("Fill the required data first");
                    $("#errSign").css("color", "#e84a5f");
                    return;
                } else if (ju == false && jp == false) {
                    $("#errSign").html("Please fill your UID and password");
                    $("#errSign").css("color", "#e84a5f");
                    return;
                } else if (ju == false && jm == false) {
                    $("#errSign").html("Please fill your UID and Institute");
                    $("#errSign").css("color", "#e84a5f");
                    return;
                } else if (jp == false && jm == false) {
                    $("#errSign").html("Please fill your password and Institute");
                    $("#errSign").css("color", "#e84a5f");
                    return;
                } else if (ju == false) {
                    $("#errSign").html("Please fill your UID");
                    $("#errSign").css("color", "#e84a5f");
                    return;
                } else if (jp == false) {
                    $("#errSign").html("Please fill your password");
                    $("#errSign").css("color", "#e84a5f");
                    return;
                } else if (jm == false) {
                    $("#errSign").html("Please fill your Institute");
                    $("#errSign").css("color", "#e84a5f");
                    return;
                } else {
                    var txtUid = $("#txtUid").val();
                    var txtPwd = $("#txtPwd").val();
                    var txtInstitute = $("#txtInstitute").val();
                    var radStudent = $("#radStudent").val();
                    var radTeacher = $("#radTeacher").val();
                    if ($("#radStudent").prop("checked") == true)
                        rad = $("#radStudent").val();
                    if ($("#radTeacher").prop("checked") == true)
                        rad = $("#radTeacher").val();
                    var url = "ajax-signup.php?uid=" + txtUid + "&pwd=" + txtPwd + "&institute=" + txtInstitute + "&rad=" + rad;
                    $.get(url, function(response) {
                        if (response == "Signup Successful") {
                            if (rad == "Student") {
                                window.location.href = 'student-dashboard.php';
                            } else if (rad == "Teacher") {
                                window.location.href = 'teacher-dashboard.php';
                            }
                        } else {
                            $("#errSign").html(response);
                            $("#errSign").css("color", "#e84a5f");
                        }
                    });

                }

            });

            // $("#btnLog").click(function() {
            //     var txtUid2 = $("#txtUid2").val();
            //     var txtPwd2 = $("#txtPwd2").val();
            //     var url = "ajax-process-login.php?uid=" + txtUid2 + "&pwd=" + txtPwd2;
            //     $.get(url, function(response) {
            //
            //         if (response == "Authorized login") {
            //             if (res == "Authorized login (You are a doctor)") {
            //                 window.location.href = 'doc-login.php';
            //             } else if (res == "Authorized login (You are a patient)") {
            //                 window.location.href = 'dashboard-patient.php';
            //             }
            //         } else {
            //             $("#errLog").html("Please fill the details correctly");
            //             $("#errLog").css("color","#e84a5f");
            //         }
            //
            //     });
            // });
            //
            // $("#txtUid2").blur(function() {
            //     var txtUid2 = $("#txtUid2").val();
            //     if (txtUid2 == "") {
            //         $("#errUid2").html("Please fill your UID");
            //         $("#errUid2").css("color", "#e84a5f");
            //     } else {
            //         var url = "ajax-chk-uid-login.php?uid=" + txtUid2;
            //         $.get(url, function(response) {
            //             $("#errUid2").html(response);
            //             res = response;
            //             if (response == "Unauthorized login")
            //                 $("#errUid2").css("color", "#e84a5f");
            //             else
            //                 $("#errUid2").css("color", "#32e0c4");
            //         });
            //     }
            // });

            $("#txtUid").blur(function() {
                var txtUid = $("#txtUid").val();
                if (txtUid == "") {
                    $("#errUid").html("Please fill a desired UID");
                    $("#errUid").css("color", "#e84a5f");
                } else {
                    var url = "ajax-uid-signup.php?uid=" + txtUid;
                    $.get(url, function(response) {
                        $("#errUid").html(response);
                        ju = true;
                        if (response == "Username available")
                            $("#errUid").css("color", "#32e0c4");
                        else
                            $("#errUid").css("color", "#e84a5f");
                    });

                }
            });


            $("#txtPwd").blur(function() {
                var r = /(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
                var txtPwd = $("#txtPwd").val();
                var result = r.test(txtPwd);
                if (txtPwd == "") {
                    $("#errPwd").html("Please fill a desired password");
                    $("#errPwd").css("color", "#e84a5f");
                } else {
                    if (result == true) {
                        $("#errPwd").html("Valid");
                        $("#errPwd").css("color", "#32e0c4");
                        jp = true;
                    } else {
                        $("#errPwd").html("Invalid");
                        $("#errPwd").css("color", "#e84a5f");
                    }
                }

            });


            $("#txtInstitute").blur(function() {
                // var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
                var letters = /^[A-Za-z]+$/;
                var txtInstitute = $("#txtInstitute").val();
                // var result = phoneno.test(txtInstitute);
                var result = letters.test(txtInstitute);
                if (txtInstitute == "") {
                    $("#errInstitute").html("Please fill your Institute.");
                    $("#errInstitute").css("color", "#e84a5f");
                } else {
                    if (result == true) {
                        $("#errInstitute").html("Valid");
                        $("#errInstitute").css("color", "#32e0c4");
                        jm = true;
                    } else {
                        $("#errInstitute").html("Invalid");
                        $("#errInstitute").css("color", "#e84a5f");
                    }
                }
            });
        });

    </script>

</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <a class="navbar-brand" href="index.php"><span>Study</span>Live</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
   </button>

   <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
         <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
         <li class="nav-item"><a href="course.php" class="nav-link">Course</a></li>
         <li class="nav-item"><a href="instructor.php" class="nav-link">Instructor</a></li>
         <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
         <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
     </ul>
 </div>
</div>
</nav>
<!-- END nav -->

<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
      <div class="col-md-7 ftco-animate">
        <span class="subheading">Welcome to StudyLive Learning</span>
        <h1 class="mb-4">Education is a way to success in life.</h1>
        <p class="caps">Education is smart enough to change the human mind positively!</p>
        <p class="mb-0"><a href="#" class="btn btn-primary">Our Course</a> <a href="#" class="btn btn-white">Learn More</a></p>
    </div>
</div>
</div>
</div>

<section class="ftco-section ftco-no-pb ftco-no-pt">
   <div class="container">
      <div class="row">
         <div class="col-md-7"></div>
         <div class="col-md-5 order-md-last">
          <div class="login-wrap p-4 p-md-5">
              <h3 class="mb-4">Register Now</h3>
              <form action="#" class="signup-form">
                 <div class="form-group">
                    <label class="label" for="name">Username</label>
                    <input type="text" class="form-control" placeholder="" id="txtUid" name="txtUid">
                    <span id="errUid"></span>
                </div>
                <div class="form-group">
                    <label class="label" for="password">Password</label>
                    <input type="password" class="form-control" placeholder="" id="txtPwd" name="txtPwd">
                    <span id="errPwd"></span>
                </div>
                <div class="form-group">
                 <label class="label" for="">Institute</label>
                 <input id="txtInstitute" name="txtInstitute" type="text" class="form-control" placeholder="">
                 <span id="errInstitute"></span>
             </div>
             <div class="form-row">
               <label class="label mr-2 ml-3" for="password">Category</label>
               <div class="">
                    <input id="radStudent" type="radio" class="" placeholder="" name="rad" value="Student">
                    <label class="label mr-2" for="">Student</label>
                    <input id="radTeacher" type="radio" class="" placeholder="" name="rad" value="Teacher">
                    <label class="label" for="">Teacher</label>
               </div>
             </div>
             <div class="form-group d-flex justify-content-end mt-4">
                 <input type="button" class="btn btn-primary submit" id="btnSign" name="btnSign" value="Signup"><span class="fa fa-paper-plane"></span>
                 <span id="errSign"></span>
             </div>
         </form>
         <p class="text-center">Already have an account? <a href="login.php">Sign In</a></p>
     </div>
 </div>
</div>
</div>
</section>

<section class="ftco-section">
   <div class="container">
      <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Start Learning Today</span>
            <h2 class="mb-4">Browse Online Course Category</h2>
        </div>
    </div>
    <div class="row justify-content-center">
     <div class="col-md-3 col-lg-2">
        <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-1.jpg);">
           <div class="text w-100 text-center">
              <h3>C</h3>
              <span>100 courses</span>
          </div>
      </a>
  </div>
  <div class="col-md-3 col-lg-2">
    <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-9.jpg);">
       <div class="text w-100 text-center">
          <h3>C++</h3>
          <span>100 courses</span>
      </div>
  </a>
</div>
<div class="col-md-3 col-lg-2">
    <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-3.jpg);">
       <div class="text w-100 text-center">
          <h3>Java</h3>
          <span>100 courses</span>
      </div>
  </a>
</div>
<div class="col-md-3 col-lg-2">
    <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-5.jpg);">
       <div class="text w-100 text-center">
          <h3>Core Java</h3>
          <span>100 courses</span>
      </div>
  </a>
</div>
<div class="col-md-3 col-lg-2">
    <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-8.jpg);">
       <div class="text w-100 text-center">
          <h3>Python</h3>
          <span>100 courses</span>
      </div>
  </a>
</div>
<div class="col-md-3 col-lg-2">
    <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-6.jpg);">
       <span class="text w-100 text-center">
          <h3>CyberSecurity</h3>
          <span>100 courses</span>
      </span>
  </a>
</div>
<div class="col-md-12 text-center mt-5">
    <a href="#" class="btn btn-secondary">See All Courses</a>
</div>
</div>
</div>
</section>

<section class="ftco-section bg-light">
   <div class="container">
      <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Start Learning Today</span>
            <h2 class="mb-4">Pick Your Course</h2>
        </div>
    </div>
    <div class="row">
       <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
             <a href="#" class="img" style="background-image: url(images/img-1.jpg);">
                <span class="price">Computer Networks</span>
            </a>
            <div class="text p-4">
                <h3><a href="#">Introduction To Computer Networks For Non-Techies</a></h3>
                <p class="advisor">Advisor <span>Alton Hardin</span></p>
                <ul class="d-flex justify-content-between">
                   <li><span class="flaticon-shower"></span>2300</li>
                   <li class="price">Rs.4,480</li>
               </ul>
           </div>
       </div>
   </div>
   <div class="col-md-4 ftco-animate">
      <div class="project-wrap">
         <a href="#" class="img" style="background-image: url(images/img-2.jpg);">
            <span class="price">Machine Learning</span>
        </a>
        <div class="text p-4">
            <h3><a href="#">ML- Regression And Classification(Math Inc.)</a></h3>
            <p class="advisor">Advisor <span>Sachin Kafle</span></p>
            <ul class="d-flex justify-content-between">
               <li><span class="flaticon-shower"></span>2300</li>
               <li class="price">Rs.4,480</li>
           </ul>
       </div>
   </div>
</div>
<div class="col-md-4 ftco-animate">
  <div class="project-wrap">
     <a href="#" class="img" style="background-image: url(images/img-3.jpg);">
        <span class="price">Cyber Security</span>
    </a>
    <div class="text p-4">
        <h3><a href="#">Complete Cyber Security Course-Anonymous Browsing</a></h3>
        <p class="advisor">Advisor <span>Nathan House</span></p>
        <ul class="d-flex justify-content-between">
           <li><span class="flaticon-shower"></span>2300</li>
           <li class="price">Rs.4,499</li>
       </ul>
   </div>
</div>
</div>

<div class="col-md-4 ftco-animate">
  <div class="project-wrap">
     <a href="#" class="img" style="background-image: url(images/img-4.jpg);">
        <span class="price">Adobe Photoshop</span>
    </a>
    <div class="text p-4">
        <h3><a href="#">Design For The Web With Adobe Photoshop</a></h3>
        <p class="advisor">Advisor <span>Vijay Gadhve</span></p>
        <ul class="d-flex justify-content-between">
           <li><span class="flaticon-shower"></span>2300</li>
           <li class="price">Rs.3,499</li>
       </ul>
   </div>
</div>
</div>
<div class="col-md-4 ftco-animate">
  <div class="project-wrap">
     <a href="#" class="img" style="background-image: url(images/img-5.jpg);">
        <span class="price">Data Science</span>
    </a>
    <div class="text p-4">
        <h3><a href="#">Full Stack Data Science With Python</a></h3>
        <p class="advisor">Advisor <span>Jitesh Khurkhuriya</span></p>
        <ul class="d-flex justify-content-between">
           <li><span class="flaticon-shower"></span>2300</li>
           <li class="price">Rs.4,470</li>
       </ul>
   </div>
</div>
</div>
<div class="col-md-4 ftco-animate">
  <div class="project-wrap">
     <a href="#" class="img" style="background-image: url(images/img-6.jpg);">
        <span class="price">CCNA</span>
    </a>
    <div class="text p-4">
        <h3><a href="#">Cisco Networking Fundamentals-CCNA Prep</a></h3>
        <p class="advisor">Advisor <span>Matt Carey</span></p>
        <ul class="d-flex justify-content-between">
           <li><span class="flaticon-shower"></span>2300</li>
           <li class="price">Rs.3,300</li>
       </ul>
   </div>
</div>
</div>
</div>
</div>
</section>

<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);">
 <div class="overlay"></div>
 <div class="container">
    <div class="row">
       <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
         <div class="block-18 d-flex align-items-center">
            <div class="icon"><span class="flaticon-online"></span></div>
            <div class="text">
             <strong class="number" data-number="400">0</strong>
             <span>Online Courses</span>
         </div>
     </div>
 </div>
 <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
     <div class="block-18 d-flex align-items-center">
        <div class="icon"><span class="flaticon-graduated"></span></div>
        <div class="text">
         <strong class="number" data-number="4500">0</strong>
         <span>Students Enrolled</span>
     </div>
 </div>
</div>
<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
 <div class="block-18 d-flex align-items-center">
    <div class="icon"><span class="flaticon-instructor"></span></div>
    <div class="text">
     <strong class="number" data-number="1200">0</strong>
     <span>Experts Instructors</span>
 </div>
</div>
</div>
<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
 <div class="block-18 d-flex align-items-center">
    <div class="icon"><span class="flaticon-tools"></span></div>
    <div class="text">
     <strong class="number" data-number="300">0</strong>
     <span>Hours Content</span>
 </div>
</div>
</div>
</div>
</div>
</section>

<section class="ftco-section ftco-about img">
   <div class="container">
      <div class="row d-flex">
         <div class="col-md-12 about-intro">
            <div class="row">
               <div class="col-md-6 d-flex">
                  <div class="d-flex about-wrap">
                     <div class="img d-flex align-items-center justify-content-center" style="background-image:url(images/about-1.jpg);">
                     </div>
                     <div class="img-2 d-flex align-items-center justify-content-center" style="background-image:url(images/about.jpg);">
                     </div>
                 </div>
             </div>
             <div class="col-md-6 pl-md-5 py-5">
              <div class="row justify-content-start pb-3">
                  <div class="col-md-12 heading-section ftco-animate">
                     <span class="subheading">Enhanced Your Skills</span>
                     <h2 class="mb-4">Learn Anything You Want Today</h2>
                     <p>Online learning is education that takes place over the Internet. It is often referred to as “e- learning” among other terms. However, online learning is just one type of “distance learning” - the umbrella term for any learning that takes place across distance and not in a traditional classroom.</p>
                     <p><a href="#" class="btn btn-primary">Get in touch with us</a></p>
                 </div>
             </div>
         </div>
     </div>
 </div>
</div>
</div>
</section>


<section class="ftco-section testimony-section bg-light">
   <div class="overlay" style="background-image: url(images/bg_2.jpg);"></div>
   <div class="container">
    <div class="row pb-4">
      <div class="col-md-7 heading-section ftco-animate">
         <span class="subheading">Testimonial</span>
         <h2 class="mb-4">What Are Students Says</h2>
     </div>
 </div>
</div>
<div class="container container-2">
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel">
          <div class="item">
            <div class="testimony-wrap py-4">
              <div class="text">
                 <p class="star">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </p>
                <p class="mb-4">I am proud to have completed Data Science program. Exploration and research had captured my interest from an early age. Thank You.</p>
                <div class="d-flex align-items-center">
                   <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                   <div class="pl-3">
                      <p class="name">Amelia Disuza</p>
                      <span class="position">Student</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="item">
    <div class="testimony-wrap py-4">
      <div class="text">
         <p class="star">
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </p>
        <p class="mb-4">I always wanted to pursue an advanced engineering degree, but with my career as a tactical airlift pilot, I didn't think I'd be able to. Thanks Alot.</p>
        <div class="d-flex align-items-center">
           <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
           <div class="pl-3">
              <p class="name">Roger Scott</p>
              <span class="position">Student</span>
          </div>
      </div>
  </div>
</div>
</div>
<div class="item">
    <div class="testimony-wrap py-4">
      <div class="text">
         <p class="star">
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </p>
        <p class="mb-4">My career in environmental health and safety stemmed back to the days before OSHA. I have been able to directly apply what I've learned.</p>
        <div class="d-flex align-items-center">
           <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
           <div class="pl-3">
              <p class="name">Jack Noah</p>
              <span class="position">Student</span>
          </div>
      </div>
  </div>
</div>
</div>
<div class="item">
    <div class="testimony-wrap py-4">
      <div class="text">
         <p class="star">
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </p>
        <p class="mb-4">My education from the University of Florida has served me well. The degree itself helped me get promoted, and my success in the degree.</p>
        <div class="d-flex align-items-center">
           <div class="user-img" style="background-image: url(images/person_4.jpg)"></div>
           <div class="pl-3">
              <p class="name">Emma Scarlett</p>
              <span class="position">Student</span>
          </div>
      </div>
  </div>
</div>
</div>
<div class="item">
    <div class="testimony-wrap py-4">
      <div class="text">
         <p class="star">
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </p>
        <p class="mb-4"> You actually get more camaraderie with your fellow students and teachers online in an on-campus situation. It has been so rewarding to help.</p>
        <div class="d-flex align-items-center">
           <div class="user-img" style="background-image: url(images/person_5.jpg)"></div>
           <div class="pl-3">
              <p class="name">Jacob Leo</p>
              <span class="position">Student</span>
          </div>
      </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="ftco-intro ftco-section ftco-no-pb">
 <div class="container">
    <div class="row justify-content-center">
       <div class="col-md-12 text-center">
          <div class="img"  style="background-image: url(images/bg_4.jpg);">
             <div class="overlay"></div>
             <h2>We Are StudyLive An Online Learning Center</h2>
             <p>Our aim your education,Fill your empty mind with positive thoughts.</p>
             <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Enroll Now</a></p>
         </div>
     </div>
 </div>
</div>
</section>

<section class="ftco-section services-section">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-6 heading-section pr-md-5 ftco-animate d-flex align-items-center">
         <div class="w-100 mb-4 mb-md-0">
            <span class="subheading">Welcome to StudyLive Learning</span>
            <h2 class="mb-4">Discover Best Classes For The Best Learning</h2>
            <p>Thanks to the rapid advancement of technology, online learning is a part of many institutions' course offerings around the world. From certificates, PhDs, impactful online language learning and everything in between, learning online has never been so easy!</p>
            <p>Advances in technology now allow students to study entirely online while still socializing with classmates, watching lectures and participating in subject-specific discussions.</p>
            <div class="d-flex video-image align-items-center mt-md-4">
              <a href="#" class="video img d-flex align-items-center justify-content-center" style="background-image: url(images/about.jpg);">
                 <span class="fa fa-play-circle"></span>
             </a>
             <h4 class="ml-4">Learn anything from StudyLive, Watch video</h4>
         </div>
     </div>
 </div>
 <div class="col-md-6">
     <div class="row">
        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
          <div class="services">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-tools"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3">Top Quality Content</h3>
              <p>Our site's content should be unique, specific and high-quality. It should not be mass-produced or outsourced on a large number of other sites.</p>
          </div>
      </div>
  </div>
  <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
      <div class="services">
        <div class="icon icon-2 d-flex align-items-center justify-content-center"><span class="flaticon-instructor"></span></div>
        <div class="media-body">
          <h3 class="heading mb-3">Highly Skilled Instructor</h3>
          <p>Experiences where you are forced to slow down, make errors, and correct them—as you would if you were walking up slipping and stumbling.</p>
      </div>
  </div>
</div>
<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
  <div class="services">
    <div class="icon icon-3 d-flex align-items-center justify-content-center"><span class="flaticon-quiz"></span></div>
    <div class="media-body">
      <h3 class="heading mb-3">World Class &amp; Quiz</h3>
      <p>A quiz refers to a short test of knowledge, typically around 10 questions in length, with question formats often including multiple choice, fill in the blanks.</p>
  </div>
</div>
</div>
<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
  <div class="services">
    <div class="icon icon-4 d-flex align-items-center justify-content-center"><span class="flaticon-browser"></span></div>
    <div class="media-body">
      <h3 class="heading mb-3">Get Certified</h3>
      <p>You will get well certificates for the programs you enrolled. A document is a certified statement especially the truth of something specifically.</p>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="ftco-section bg-light">
  <div class="container">
     <div class="row justify-content-center pb-4">
      <div class="col-md-12 heading-section text-center ftco-animate">
         <span class="subheading">Our Blog</span>
         <h2 class="mb-4">Recent Post</h2>
     </div>
 </div>
 <div class="row d-flex">
  <div class="col-lg-4 ftco-animate">
    <div class="blog-entry">
      <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
      </a>
      <div class="text d-block">
         <div class="meta">
          <p>
             <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 17, 2020</a>
             <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
             <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
         </p>
     </div>
     <h3 class="heading"><a href="#">Technology Enhanced Learning Blog</a></h3>
     <p>An ELearning Consultant covers everything from pedagogy to the developing role of learning.</p>
     <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
 </div>
</div>
</div>

<div class="col-lg-4 ftco-animate">
    <div class="blog-entry">
      <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
      </a>
      <div class="text d-block">
         <div class="meta">
          <p>
             <a href="#"><span class="fa fa-calendar mr-2"></span>Oct. 14, 2020</a>
             <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
             <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 7</a>
         </p>
     </div>
     <h3 class="heading"><a href="#">Top 25 Rapid E-Learning Blog Posts</a></h3>
     <p>I thought it would be a good idea to share my list of top 25 blog posts on the subject.</p>
     <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
 </div>
</div>
</div>
<div class="col-lg-4 ftco-animate">
    <div class="blog-entry">
      <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
      </a>
      <div class="text d-block">
         <div class="meta">
          <p>
             <a href="#"><span class="fa fa-calendar mr-2"></span>Nov. 1, 2020</a>
             <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
             <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 5</a>
         </p>
     </div>
     <h3 class="heading"><a href="#">7 Reasons Your E-learning Website Needs A Blog</a></h3>
     <p>Blogging is one of the oldest marketing tools on the Internet—and still one of the best.</p>
     <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
 </div>
</div>
</div>
</div>
</div>
</section>


<footer class="ftco-footer ftco-no-pt">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md pt-5">
        <div class="ftco-footer-widget pt-md-5 mb-4">
          <h2 class="ftco-heading-2">About Us</h2>
          <p>As with most teaching methods, online learning also has its own set of positives and negatives. Decoding and understanding these positives and negatives will help institutes in creating strategies for more efficient delivery of the lessons, ensuring an uninterrupted learning journey for the students.
</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
        </ul>
    </div>
</div>
<div class="col-md pt-5">
    <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
      <h2 class="ftco-heading-2">Help Desk</h2>
      <ul class="list-unstyled">
        <li><a href="#" class="py-2 d-block">Customer Care</a></li>
        <li><a href="#" class="py-2 d-block">Legal Help</a></li>
        <li><a href="#" class="py-2 d-block">Services</a></li>
        <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
        <li><a href="#" class="py-2 d-block">Refund Policy</a></li>
        <li><a href="#" class="py-2 d-block">Call Us</a></li>
    </ul>
</div>
</div>
<div class="col-md pt-5">
   <div class="ftco-footer-widget pt-md-5 mb-4">
      <h2 class="ftco-heading-2">Recent Courses</h2>
      <ul class="list-unstyled">
        <li><a href="#" class="py-2 d-block">Computer Networks</a></li>
        <li><a href="#" class="py-2 d-block">Web Design</a></li>
        <li><a href="#" class="py-2 d-block">Data Science</a></li>
        <li><a href="#" class="py-2 d-block">Adobe Photoshop</a></li>
        <li><a href="#" class="py-2 d-block">Cyber Security</a></li>
        <li><a href="#" class="py-2 d-block">Web Developer</a></li>
    </ul>
</div>
</div>
<div class="col-md pt-5">
    <div class="ftco-footer-widget pt-md-5 mb-4">
       <h2 class="ftco-heading-2">Have a Questions?</h2>
       <div class="block-23 mb-3">
         <ul>
           <li><span class="icon fa fa-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
           <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
           <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@yourdomain.com</span></a></li>
       </ul>
   </div>
</div>
</div>
</div>
<div class="row">
  <div class="col-md-12 text-center">

    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart" aria-hidden="true"></i> By <a href="https://colorlib.com" target="_blank">StudyLive Learning</a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
  </div>
</div>
</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<script src="js/jquery.min.js"></script>

<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<!-- <script src="js/bootstrap.min.js"></script> -->
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>



</body>
</html>
