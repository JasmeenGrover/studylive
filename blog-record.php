<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/angular.min.js"></script>
    <style>
        .header-text {
            font-size: 30px;
            font-family: lovelo;
            color: #fff;
        }

        .header {
            background: linear-gradient(-45deg, #23A6D5, #23D5AB);
        }

        table {
            display: none;
        }

        #fetch {
            background: linear-gradient(-45deg, rgba(35, 213, 171, 1), rgba(35, 166, 213, 1));
            color: white;
            font-weight: 500;
            transition: ease all 0.5s;
        }

        #fetch:hover {
            color: #fff;
            background: linear-gradient(-45deg, rgba(35, 213, 171, 0.8), rgba(35, 166, 213, 0.8));

        }

        /*
        th {
            cursor: pointer;
        }

        th:hover {
            background-color: burlywood;
        }
*/

    </style>
    <script>
        $module = angular.module("mymodule", []);
        $module.controller("mycontroller", function($scope, $http, $filter) {
            $scope.jsonArray;

            $scope.doFetchAll = function(uid, dateFrom, dateTo) {

                var dateFrom = $filter('date')(dateFrom, "yyyy-MM-dd");
                var dateTo = $filter('date')(dateTo, "yyyy-MM-dd");
                $http.get("angular-blog-record.php?uid=" + uid + "&dateFrom=" + dateFrom + "&dateTo=" + dateTo).then(okFx, notOk);

                function okFx(response) {
                    $scope.jsonArray = response.data;
                }

                function notOk(response) {
                    alert(response.data);
                }
            }
        });

        $(document).ready(function() {
            $("#fetch").click(function() {
                $("#table1").css("display", "table");
            });
        });

    </script>
</head>

<body ng-app="mymodule" ng-controller="mycontroller">
    <div class=form-row>
        <div class="col-md-12 header text-center" style="height:70px;">
            <div class="d-inline-block header-text mt-3">BLOG RECORD</div>
        </div>
    </div>
    <div class="mt-4" style="width:1800px;margin:auto">
        <div class="row mt-3">
            <div class="col-md-3 ml-5">
                <label for="uid">User Id</label>
                <input type="text" id="uid" name="uid" class="form-control" ng-model="uid">
            </div>
            <div class="col-md-3">
                <label for="dateFrom">Date from</label>
                <input name="dateFrom" id="dateFrom" type="date" ng-model="dateFrom" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="dateTo">Date to</label>
                <input type="date" name="dateTo" id="dateTo" ng-model="dateTo" class="form-control">
            </div>
            <div class="col-md-2">
                <label for="">&nbsp;</label>
                <div class="btn form-control" id="fetch" ng-click="doFetchAll(uid,dateFrom,dateTo);">Fetch</div>
            </div>
        </div>
        <center>
            <table class="mt-5 table table-bordered" id="table1">
                <thead class="thead-light">
                    <tr class="text-center">
                        <th>Sr no</th>
                        <th>Date of record</th>
                        <th>Blog</th>
                        <!-- <th>Diastolic pressure</th>
                        <th>Pulse</th> -->
                    </tr>
                </thead>
                <tr ng-repeat="obj in jsonArray |orderBy:colName|filter:googler">
                    <td>{{$index+1}}</td>
                    <td>{{obj.dateofrecord}}</td>
                    <td>{{obj.blog}}</td>
                    <!-- <td>{{obj.dia}}</td>
                    <td>{{obj.pulse}}</td> -->
                </tr>
            </table>
        </center>
    </div>

</body>

</html>
