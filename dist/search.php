
<?php
session_start();
//include('config.php');
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'finals');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="icon" type="image/png" href="images/DB_16х16.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Dashboard Lite</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">


    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">


    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- inject:css -->
    <link rel="stylesheet" href="css/lib/getmdl-select.min.css">
    <link rel="stylesheet" href="css/lib/nv.d3.min.css">
    <link rel="stylesheet" href="css/application.min.css">
    <!-- endinject -->


    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
\
</head>
<body>

<div class="mdl-layout mdl-js-layout ">
<div class="mdl-layout__header-row">
              <li><a href="forms.php">Manage Patient Record</a></li>
              <li><a href="search.php">Search for a patient</a></li>
            
</div>
<main class="mdl-layout__content mdl-color--grey-100">

<div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone" style="overflow: auto;">
<div class="mdl-grid">
<?php
                                $sql=mysqli_query($con,"select count(*) as total from patient");
                                $cnt=1;
                                while($row=mysqli_fetch_array($sql))
                                {
                                ?>
            
                                <tr>
                                
                                <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-phone">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                        <input class="mdl-textfield__input" type="text" name="fname" id="myInputLNAME" value="<?php echo htmlentities($row['total']);?>">
                                        <label class="mdl-textfield__label" for="fname">Total Number of Cases</label>
                                       
                                    </div>
                                </div>
                                <?php 
                      $cnt++;
                      } ?>
                                <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-phone">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                     
                                       
                                    </div>
                                </div>
                            </div>
<div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-phone">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                        <input class="mdl-textfield__input" type="text" name="fname" id="myInputLNAME" onkeyup="myFunctionLname()" >
                                        <label class="mdl-textfield__label" for="fname"> <i class="material-icons">search</i> Search by Last Name</label>
                                       
                                    </div>
                                </div>
                                <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-phone">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                        <input class="mdl-textfield__input" type="text" name="fname" id="myInputFNAME" onkeyup="myFunction()" >
                                        <label class="mdl-textfield__label" for="fname"> <i class="material-icons">search</i> Search by First Name</label>
                                       
                                    </div>
                                </div>
                            </div>
                        
                <div class="mdl-card mdl-shadow--2dp" style="overflow: auto;">
                    <div class="mdl-card__title" style="overflow: auto;">
                        <h1 class="mdl-card__title-text" style="overflow: auto;">Advanced table</h1>
                    </div>
                    <div class="mdl-card__supporting-text no-padding">
                        <table class="mdl-data-table mdl-js-data-table  bordered-table" style="overflow: auto;" id="myTable">
                            <thead>
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">Qty</th>
                                <th class="mdl-data-table__cell--non-numeric">PatientID</th>
                                <th class="mdl-data-table__cell--non-numeric">Last Name</th>
                                <th class="mdl-data-table__cell--non-numeric">First Name</th>
                                <th class="mdl-data-table__cell--non-numeric">Middle Name</th>
                                <th class="mdl-data-table__cell--non-numeric">Baranggary</th>
                                <th class="mdl-data-table__cell--non-numeric">Municipality</th>
                                <th class="mdl-data-table__cell--non-numeric">City</th>
                                <th class="mdl-data-table__cell--non-numeric">Map Address</th>
                                <th class="mdl-data-table__cell--non-numeric">Age</th>
                                <th class="mdl-data-table__cell--non-numeric">Gender</th>
                                <th class="mdl-data-table__cell--non-numeric">Civil Status</th>
                                <th class="mdl-data-table__cell--non-numeric">Date Tested</th>
                                <th class="mdl-data-table__cell--non-numeric">Level</th>
                                <th class="mdl-data-table__cell--non-numeric">Hospital Name</th>
                                <th class="mdl-data-table__cell--non-numeric">Date Admitted</th>
                                <th class="mdl-data-table__cell--non-numeric">Status</th>
                                <th class="mdl-data-table__cell--non-numeric">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $sql=mysqli_query($con,"select * from patient order by patientID desc");
                                $cnt=1;
                                while($row=mysqli_fetch_array($sql))
                                {
                                ?>
            
                                <tr>
                                
                                    <td class="mdl-data-table__cell--non-numeric"><?php echo $cnt;?></td>
                                    <td class="mdl-data-table__cell--non-numeric"><?php echo htmlentities($row['patientID']);?></td>
                                    <td class="mdl-data-table__cell--non-numeric"><?php echo htmlentities($row['lname']);?></td>
                                    <td class="mdl-data-table__cell--non-numeric"><?php echo htmlentities($row['fname']);?></td>
                                    <td class="mdl-data-table__cell--non-numeric"><?php echo htmlentities($row['mname']);?></td>
                                    <td class="mdl-data-table__cell--non-numeric"><?php echo htmlentities($row['brgy']);?></td>
                                    <td class="mdl-data-table__cell--non-numeric"><?php echo htmlentities($row['municipality']);?></td>
                                    <td class="mdl-data-table__cell--non-numeric"><?php echo htmlentities($row['city']);?></td>
                                    <td class="mdl-data-table__cell--non-numeric"><?php echo htmlentities($row['mapaddress']);?></td>
                                    <td class="mdl-data-table__cell--non-numeric"><?php echo htmlentities($row['age']);?></td>
                                    <td class="mdl-data-table__cell--non-numeric"><?php echo htmlentities($row['gender']);?></td>
                                    <td class="mdl-data-table__cell--non-numeric"><?php echo htmlentities($row['civilstatus']);?></td>
                                    <td class="mdl-data-table__cell--non-numeric"><?php echo htmlentities($row['datetested']);?></td>
                                    <td class="mdl-data-table__cell--non-numeric"><?php echo htmlentities($row['level']);?></td>
                                    <td class="mdl-data-table__cell--non-numeric"><?php echo htmlentities($row['hospitalname']);?></td>
                                    <td class="mdl-data-table__cell--non-numeric"><?php echo htmlentities($row['dateadmitted']);?></td>
                                    <td class="mdl-data-table__cell--non-numeric"><?php echo htmlentities($row['status']);?></td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <span class=" "><a  href="forms.php?patientID=<?php echo $row['patientID']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')" style="color:red;"><i class="material-icons">delete_forever</i></a></span>
                                        <span class=" "><a href="formsedit.php?patientID=<?php echo $row['patientID']?>"><i class="material-icons">create</i></a></span>
                                        <span class=" "><a href="formsview.php?patientID=<?php echo $row['patientID']?>"><i class="material-icons">info</i></a></span>
                                    </td>
                                </tr>
                                <?php 
                      $cnt++;
                      } ?>
                             
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                    </main> </div>
<!-- inject:js -->
<script src="js/d3.min.js"></script>
<script src="js/getmdl-select.min.js"></script>
<script src="js/material.min.js"></script>
<script src="js/nv.d3.min.js"></script>
<script src="js/layout/layout.min.js"></script>
<script src="js/scroll/scroll.min.js"></script>
<script src="js/widgets/charts/discreteBarChart.min.js"></script>
<script src="js/widgets/charts/linePlusBarChart.min.js"></script>
<script src="js/widgets/charts/stackedBarChart.min.js"></script>
<script src="js/widgets/employer-form/employer-form.min.js"></script>
<script src="js/widgets/line-chart/line-charts-nvd3.min.js"></script>
<script src="js/widgets/map/maps.min.js"></script>
<script src="js/widgets/pie-chart/pie-charts-nvd3.min.js"></script>
<script src="js/widgets/table/table.min.js"></script>
<script src="js/widgets/todo/todo.min.js"></script>
<!-- endinject -->

</body>
</html>

<script>
function myFunctionLname() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInputLNAME");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInputFNAME");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>