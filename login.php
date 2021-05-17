<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>

    <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>

    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
  rel="stylesheet"
/>


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

    <style>
     #intro {
       background-image: url(https://mdbootstrap.com/img/new/fluid/city/008.jpg);
       height: 100vh;
     }

     /* Height for devices larger than 576px */
     @media (min-width: 992px) {
       #intro {
         margin-top: -58.59px;
       }
     }
/*
     .navbar .nav-link {
       color: #fff !important;
     } */
   </style>

   <!-- <script>
     $(document).ready (function(){
       var res;

       $("#btnLog").click(function() {
                var txtUid2 = $("#txtUid2").val();
                var txtPwd2 = $("#txtPwd2").val();
                var url = "ajax-login.php?uid=" + txtUid2 + "&pwd=" + txtPwd2;
                $.get(url, function(response) {
                  console.log("response"+response);
                  // alert(1)
                    if (response == "Authorized login") {
                      console.log("Authorized login");
                      var url = "ajax-uid-login.php?uid=" + txtUid2 + "&pwd=" + txtPwd2;
                      $.get(url, function(res) {
                    console.log(res);
                        // alert(1)
                          // if (response == "Authorized login") {
                              if (res == "Authorized login (You are a Student)") {
                                  console.log("student");
                                  window.location.href = 'god.php';
                              } else if (res == "Authorized login (You are a Teacher)") {
                                  window.location.href = 'god.php';
                              }
                              else {

                              }
                          // } else {
                          //     $("#errLog").html("Please fill the details correctly");
                          //     $("#errLog").css("color","#e84a5f");
                          // }

                      });
                    } else {
                        $("#errLog").html("Please fill the details correctly");
                        $("#errLog").css("color","#e84a5f");
                    }

                });

            });

            $("#txtUid2").blur(function() {
                var txtUid2 = $("#txtUid2").val();
                if (txtUid2 == "") {
                    $("#errUid2").html("Please fill your UID");
                    $("#errUid2").css("color", "#e84a5f");
                } else {
                    var url = "ajax-uid-login.php?uid=" + txtUid2;
                    $.get(url, function(response) {
                        $("#errUid2").html(response);
                        res = response;
                        if (response == "Unauthorized login")
                            $("#errUid2").css("color", "#e84a5f");
                        else
                            $("#errUid2").css("color", "#32e0c4");
                    });
                }
            });
     });
   </script> -->

   <script>
     $(document).ready (function () {
       $("#btnLog").click(function() {
                var txtUid2 = $("#txtUid2").val();
                var txtPwd2 = $("#txtPwd2").val();
                var url = "ajax-login.php?uid=" + txtUid2 + "&pwd=" + txtPwd2;
                $.get(url, function(response) {

                    if (response == "Authorized login") {
                        if (res == "Authorized login (You are a Student)") {
                            window.location.href = 'student-dashboard.php';
                        } else if (res == "Authorized login (You are a Teacher)") {
                            window.location.href = 'teacher-dashboard.php';
                        }
                    } else {
                        $("#errLog").html("Please fill the details correctly");
                        $("#errLog").css("color","#e84a5f");
                    }

                });
            });

            $("#txtUid2").blur(function() {
                var txtUid2 = $("#txtUid2").val();
                if (txtUid2 == "") {
                    $("#errUid2").html("Please fill your UID");
                    $("#errUid2").css("color", "#e84a5f");
                } else {
                    var url = "ajax-uid-login.php?uid=" + txtUid2;
                    $.get(url, function(response) {
                        $("#errUid2").html(response);
                        res = response;
                        if (response == "Unauthorized login")
                            $("#errUid2").css("color", "#e84a5f");
                        else
                            $("#errUid2").css("color", "#32e0c4");
                    });
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
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="course.php" class="nav-link">Course</a></li>
            <li class="nav-item"><a href="instructor.php" class="nav-link">Instructor</a></li>
            <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
            <li class="nav-item active"><a href="login.php" class="nav-link">Login</a></li>
        </ul>
    </div>
   </div>
   </nav>



    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-md-8">
              <form action="#" class="bg-white rounded shadow-5-strong p-5">
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="text" id="txtUid2" class="form-control" />
                  <label class="form-label" for="txtUid2" name="txtUid2">Username</label>
                  <span id="errUid2"></span>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="txtPwd2" class="form-control" />
                  <label class="form-label" for="txtPwd2" name="txtPwd2">Password</label>
                  <span id="errPwd2"></span>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                  <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="" checked />
                      <label class="form-check-label" for="form1Example3">
                        Remember me
                      </label>
                    </div>
                  </div>

                  <div class="col text-center">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                  </div>
                </div>

                <!-- Submit button -->
                <input type="button" class="btn btn-primary btn-block" id="btnLog" name="btnLog" value="Login">
                <span id="errLog"></span>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!--Footer-->

  </body>
</html>
