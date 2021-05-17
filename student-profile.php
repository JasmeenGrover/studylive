<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        /*
        @font-face {
            font-family: 'MyFirstFont';
            src: url(pics/black-friday.ttf);
            font-style:normal;
        }
*/
        .header-text {
            font-size: 30px;
            font-family: lovelo;
            color: #fff;
        }

        .header {
            background: linear-gradient(-45deg, #23A6D5, #23D5AB);
        }

    </style>
    <script>
    function showpreview(file) {

           if (file.files && file.files[0]) {
               var reader = new FileReader();
               reader.onload = function(ev) {
                   $('#profilePic').attr('src', ev.target.result);
               }
               reader.readAsDataURL(file.files[0]);
           }
       }
        $(document).ready(function() {
            $("btnSubmit").click(function() {
                window.location.href = "teacher-dashboard.php";
            });
            $("#btnFetch").click(function() {
                var uid = $("#txtUid").val();
                var url = "student-profile-json.php?uid=" + uid;
                $.getJSON(url, function(jsonArray) {
                    $("#txtName").hide().val(jsonArray[0].name).fadeIn();
                    $("#txtMob").hide().val(jsonArray[0].contact).fadeIn();
                    $("#txtEmail").hide().val(jsonArray[0].email).fadeIn();
                    $("#txtGender").hide().val(jsonArray[0].gender).fadeIn();
                    $("#txtSem").hide().val(jsonArray[0].sem).fadeIn();
                    $("#txtBranch").hide().val(jsonArray[0].branch).fadeIn();
                    $("#jasus").val(jsonArray[0].ppic);
                    $("#profilePic").hide().prop("src", "uploads/" + jsonArray[0].ppic).fadeIn();
                    // $("#txtAdd").hide().val(jsonArray[0].address).fadeIn();
                    // $("#txtInfo").hide().val(jsonArray[0].problems).fadeIn();
                });
            });
        });

    </script>
</head>

<body>
    <form action="student-profile-process.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="jasus" id="jasus">
        <div class=form-row>
            <div class="col-md-12 header text-center" style="height:70px;">
                <div class="d-inline-block header-text mt-3">Student profile</div>
            </div>
        </div>
        <div class="mt-4" style="width:1400px;margin:auto">
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="txtUid">UID</label>
                    <input type="text" class="form-control" id="txtUid" name="txtUid">
                </div>
                <div class="form-group col-md-2">
                    <label>&nbsp;</label>
                    <input type="button" value="Fetch record" class="btn form-control btn btn-secondary" id="btnFetch" name="btnFetch">
                </div>
                <div class="form-group col-md-5">
                    <label for="txtName">Name</label>
                    <input type="text" class="form-control" id="txtName" name="txtName">
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="form-group col-md-4">
                    <label for="txtMob">Contact number</label>
                    <input type="tel" class="form-control" id="txtMob" name="txtMob">
                </div>
                <div class="form-group col-md-4">
                    <label for="txtEmail">Email</label>
                    <input type="text" class="form-control" id="txtEmail" name="txtEmail">
                </div>
                <div class="form-group col-md-4">
                    <label for="txtGender">Gender</label>
                    <select class="custom-select custom-select" id="txtGender" name="txtGender">
                        <option selected disabled>Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="form-group col-md-6">
                    <label for="txtSem">Semester</label>
                    <input type="number" class="form-control" id="txtSem" name="txtSem">
                </div>
                <div class="form-group col-md-6">
                    <label for="txtBranch">Branch</label>
                    <input type="text" class="form-control" id="txtBranch" name="txtBranch">
                </div>
            </div>
            <!-- <div class="form-row mt-3">
                <div class="form-group col-md-12">
                    <label for="txtAdd">Address</label>
                    <input type="text" class="form-control" id="txtAdd" name="txtAdd">
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="form-group col-md-12">
                    <label for="txtInfo">Any other information about you:</label><br>
                    <textarea w-100 class="form-control" name="txtInfo" id="txtInfo" cols="155" rows="5"></textarea>
                </div>
            </div> -->

            <div class="form-row mt-3">
                <div class="form-group col-md-12">
                    <label>Upload profile picture</label><br>
                    <input type="file" onchange="showpreview(this);" id="ppic" name="ppic">
                    <img src="images/teacher-1.jpg" id="profilePic" width="50" height="50" alt="" ?>
                </div>

            <div class="form-row d-flex justify-content-center mt-3">
                <div class="form-group">
                    <input type="submit" value="Submit" id="btnSubmit" name="btn" class="btn btn-secondary">
                </div>
                <div class="form-group">
                    <input type="submit" id="btnUpdate" name="btn" value="Update" class="btn btn-secondary">
                </div>
            </div>
        </div>
    </form>

</body>

</html>
