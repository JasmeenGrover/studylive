<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <label for="">name</label>
    <input type="text" value="" name="txtName" id="txtName">
    <label for="">password</label>
    <input type="password" value="" name="txtPwd" id="txtPwd">
    <input type="button" name="btn" id="btn" value="Signup">

    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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

    <script>
      $(document).ready(function() {

          $("#btn").click(function() {
        var txtUid = $("#txtUid").val();
        var txtPwd = $("#txtPwd").val();

        var url = "check-process.php?uid=" + txtName + "&pwd=" + txtPwd;
        $.get(url, function(response) {
            if (response == "Signup Successful") {

                    window.location.href = 'course.html';

            } else {
                $("#errSign").html(response);
                $("#errSign").css("color", "#e84a5f");
            }
        });

      });

      });
    </script>
  </body>
</html>
