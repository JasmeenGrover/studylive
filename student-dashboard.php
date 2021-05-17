<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        .header-text {
            font-size: 30px;
            font-family: lovelo;
            color: #fff;
        }

        .header {
            background: linear-gradient(-45deg, #23A6D5, #23D5AB);
        }

        .patient-image {
            width: 150px;
        }

        a {
            color: inherit;
        }

        a:hover {
            color: darkslategray;
        }

        .modal-dialog {
            box-shadow: 0px 0px 50px 10px rgba(0, 0, 0, 0.3);
            width: 430px;
        }

        .modal-header {
            background: linear-gradient(-45deg, #23A6D5, #23D5AB);
        }

        .modal-title {
            color: white;
        }

        .close {
            color: white;
        }

        .close:hover {
            color: white;
        }

        fieldset.scheduler-border {
            border: 1px #ddd solid;
            border-radius: 5px;
            padding: 0 1.4em 1.4em 1.4em !important;
        }

        legend.scheduler-border {
            width: inherit;
            padding: 0 10px;
            font-size: 18px;
        }

    </style>
    <script>
        $(document).ready(function() {
            $("#btnSave").click(function() {
                var txtUid = $("#txtUid").val();
                var dor = $("#dor").val();
                var sPressure = $("#sPressure").val();
                var dPressure = $("#dPressure").val();
                var pulse = $("#pulse").val();
                var url = "ajax-process-bp.php?uid=" + txtUid + "&dateofrecord=" + dor + "&sys=" + sPressure + "&dia=" + dPressure + "&pulse=" + pulse;

                $.get(url, function(response) {
                    $("#errSave").html(response);
                    $("#errSave").css("color", "#32e0c4");
                });
            });
            $("#btnSave2").click(function() {
                var txtUid2 = $("#txtUid2").val();
                var dor2 = $("#dor2").val();
                var time2 = $("#time2").val();
                var sugartime = $("#sugartime").val();
                var age = $("#age").val();
                var resBlood = $("#resBlood").val();
                var medicine = $("#medicine").val();
                var resUrine = $("#resUrine").val();
                var url = "ajax-process-sugar.php?uid=" + txtUid2 + "&dateofrecord=" + dor2 + "&timeofrecord=" + time2 + "&sugartime=" + sugartime + "&age=" + age + "&sugarresult=" + resBlood + "&medintake=" + medicine + "&urineresult=" + resUrine;

                $.get(url, function(response) {
                    $("#errSave2").html(response);
                    $("#errSave2").css("color", "#32e0c4");
                });
            });

            $("#dPressure").blur(function() {
                var dp = $("#dPressure").val();
                var sp = $("#sPressure").val();
                if (sp < 120 && dp <= 80) {
                    $("#bpCategory").html("Normal");
                } else if (120 <= sp <= 129 && dp < 80) {
                    $("#bpCategory").html("Elevated");
                } else if (130 <= sp <= 139 || 80 <= dp <= 89) {
                    $("#bpCategory").html("High BP (STAGE 1)");
                } else if (140 <= sp <= 180 || 90 <= dp <= 120) {
                    $("#bpCategory").html("High BP (STAGE 2)");
                } else if (sp > 180 && dp > 120) {
                    $("#bpCategory").html("Seek emergency care");
                } else if (sp > 180) {
                    $("#bpCategory").html("Seek emergency care");
                } else if (dp > 120) {
                    $("#bpCategory").html("Seek emergency care");
                }
            });
        });

    </script>
</head>

<body>

    <div class="form-row d-flex justify-content-center text-center">
        <div class="col-md-12 header" style="height:70px;">
            <div class="d-inline-block header-text mt-3" style="margin-left:400px;margin-bottom:17px">Student Dashboard</div>
            <a href="logout.php" class="btn btn-danger text-decoration-none" style="margin-left:300px;margin-bottom:17px">Logout</a>
        </div>
    </div>
    <div class="pb-3">
        <div class="d-flex flex-row justify-content-center" style="margin-top:80px">
            <div class="card align-items-center shadow-sm" style="width: 15rem;">
                <img src="pics/patient.png" class="card-img-top patient-image">
                <div class="card-body text-center">
                    <a href="student-profile.php" class="btn btn-secondary text-decoration-none">Student profile</a>
                    <p class="card-text mt-3">Access your profile</p>
                </div>
            </div>
            <div class="card align-items-center ml-5 shadow-sm" style="width: 15rem;">
                <img src="pics/patients_reports.png" style="width:150px;height:150px" class="card-img-top patient-image">
                <div class="card-body text-center">
                    <a href="slip-front.php" class="btn btn-secondary text-decoration-none">Patient's reports</a>
                    <p class="card-text mt-3">Access your reports</p>
                </div>
            </div>
            <div class="card align-items-center ml-5 shadow-sm" style="width: 15rem;">
                <img src="pics/bpreports.png" class="card-img-top patient-image">
                <div class="card-body text-center">
                    <a href="" class="btn btn-secondary text-decoration-none" data-toggle="modal" data-target="#modalBp">Record BP</a>
                    <p class="card-text mt-3">Fill your BP record</p>
                </div>
            </div>
            <div class="card align-items-center shadow-sm ml-5" style="width: 15rem;">
                <img src="pics/sugarreports.png" class="card-img-top patient-image">
                <div class="card-body text-center">
                    <a href="" class="btn btn-secondary text-decoration-none" data-toggle="modal" data-target="#modalSugar">Record Sugar</a>
                    <p class="card-text mt-3">Fill your sugar record</p>
                </div>
            </div>
        </div>
        <div class="d-flex flex-row justify-content-center" style="margin-top:80px">

            <div class="card align-items-center ml-5 shadow-sm" style="width: 15rem;">
                <img src="pics/bphistory.png" class="card-img-top patient-image">
                <div class="card-body text-center">
                    <a href="history-bp.php" class="btn btn-secondary text-decoration-none">BP History</a>
                    <p class="card-text mt-3">Access your BP history</p>
                </div>
            </div>
            <div class="card align-items-center shadow-sm ml-5" style="width: 15rem;">
                <img src="pics/sugarhistory.png" class="card-img-top patient-image">
                <div class="card-body text-center">
                    <a href="history-sugar.php" class="btn btn-secondary text-decoration-none">Sugar History</a>
                    <p class="card-text mt-3">Access your sugar history</p>
                </div>
            </div>
            <div class="card align-items-center shadow-sm ml-5" style="width: 15rem;">
                <img src="pics/research.png" class="card-img-top patient-image">
                <div class="card-body text-center">
                    <a href="doctor-search-front.php" class="btn btn-secondary text-decoration-none">Search doctor</a>
                    <p class="card-text mt-3">Search your nearby doctors</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalBp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Record BP</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mt-2">
                    <form class="d-flex flex-column justify-content-center text-center">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="txtUid">Your UID</label>
                                <input type="text" id="txtUid" name="txtUid" class="form-control" value='<?php echo $_SESSION["activeuser"];?>' disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="dor">Date of Record</label>
                                <input type="date" id="dor" name="dor" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sPressure">Systolic pressure (High)</label>
                            <input type="text" id="sPressure" name="sPressure" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="dPressure">Diastolic pressure (Low)</label>
                            <input type="text" id="dPressure" name="dPressure" class="form-control">
                            <span id="bpCategory"></span>
                        </div>
                        <div class="form-group">
                            <label for="pulse">Pulse rate</label>
                            <input type="text" id="pulse" name="pulse" class="form-control">
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="button" id="btnSave" name="btnSave" class="btn btn-dark" value="Save record">
                        </div>
                        <span id="errSave"></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalSugar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Record Sugar</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mt-2">
                    <form class="d-flex flex-column justify-content-center text-center">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="txtUid2">Your UID</label>
                                <input type="text" id="txtUid2" name="txtUid2" class="form-control" value='<?php echo $_SESSION["activeuser"];?>' disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="dor2">Date of Record</label>
                                <input type="date" id="dor2" name="dor2" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="time2">Time</label>
                                <input type="time" id="time2" name="time2" class="form-control">
                            </div>
                        </div>
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">Blood sugar</legend>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <select class="custom-select" name="sugartime" id="sugartime">
                                        <option value="Select timings" selected disabled>Select timings</option>
                                        <option value="Fasting">Fasting</option>
                                        <option value="Before meal">Before meal</option>
                                        <option value="After meal">After meal</option>
                                        <option value="Before exercise">Before exercise</option>
                                        <option value="Bedtime">Bedtime</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="age">Age</label>
                                    <input type="text" id="age" name="age" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="resBlood">Result</label>
                                    <input type="text" id="resBlood" name="resBlood" class="form-control">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="scheduler-border mt-3">
                            <legend class="scheduler-border">Urine sugar</legend>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="medicine">Medicinal intake</label>
                                    <input type="text" id="medicine" name="medicine" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="resUrine">Result</label>
                                    <input type="text" id="resUrine" name="resUrine" class="form-control">
                                </div>
                            </div>
                        </fieldset>
                        <div class="mt-3 d-flex justify-content-center">
                            <input type="button" id="btnSave2" name="btnSave2" class="btn btn-dark" value="Save record">
                        </div>
                        <span class="mt-1" id="errSave2"></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
