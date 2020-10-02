
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
$patientID=intval($_GET['patientID']);
if(isset($_POST['submit']))
{

    echo "<script> window.location.assign('forms.php'); </script>";
 

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
       

    <main class="mdl-layout__content mdl-color--grey-100">
            <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
                <div class="mdl-card__title">
                    <h2>Form</h2>
                    <div class="mdl-card__subtitle">Please complete the form</div>
                </div>

                <div class="mdl-card__supporting-text">
                    <form  class="form" method="post">
                    <?php
                    $sql=mysqli_query($con,"select * from patient where patientID='$patientID'");
                    while($row=mysqli_fetch_array($sql))
                    {
                    ?>
                        <div class="form__article">
                            <h3>Personal data</h3>
                          
                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-phone">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                        <input class="mdl-textfield__input" type="text" name="fname" value="<?php echo htmlentities($row['fname']);?>" disabled>
                                        <label class="mdl-textfield__label" for="fname">First Name</label>
                                    </div>
                                </div>
                                <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-phone">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                        <input class="mdl-textfield__input" type="text" name="lname" id="lname" value="<?php echo htmlentities($row['lname']);?>" disabled>
                                        <label class="mdl-textfield__label" for="lname">Last Name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" name="mname" id="mname" value="<?php echo htmlentities($row['mname']);?>" disabled/>
                                    <label class="mdl-textfield__label" for="birthday">Middle Name</label>
                                </div>
                            </div>

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                     <input class="mdl-textfield__input" type="text" name="brgy" id="brgy" value="<?php echo htmlentities($row['brgy']);?>" disabled/>
                                     <label class="mdl-textfield__label" for="brgy">Baranggay</label>
                                </div>
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" name="municipality" id="municipality" value="<?php echo htmlentities($row['municipality']);?>" disabled/>
                                    <label class="mdl-textfield__label" for="municipality">Municipality</label>
                                </div>
                            </div>
                            
                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" name="city" id="city"  value="<?php echo htmlentities($row['city']);?>" disabled/>
                                    <label class="mdl-textfield__label" for="city">City</label>
                                </div>
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" name="mapaddress" id="mapaddress"  value="<?php echo htmlentities($row['mapaddress']);?>" disabled/>
                                    <label class="mdl-textfield__label" for="mapaddress">Map Address</label>
                                </div>
                            </div>

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" name="age" id="age"  value="<?php echo htmlentities($row['age']);?>" disabled/>
                                    <label class="mdl-textfield__label" for="age">Age</label>
                                </div>
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" name="age" id="age"  value="<?php echo htmlentities($row['gender']);?>" disabled/>
                                    <label class="mdl-textfield__label" for="age">Gender</label>
                                </div>
                            </div>

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" name="civilstatus" id="civilstatus"  value="<?php echo htmlentities($row['civilstatus']);?>" disabled/>
                                    <label class="mdl-textfield__label" for="age">Civil Status</label>
                                </div>
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" name="age" id="age"  value="<?php echo htmlentities($row['level']);?>" disabled/>
                                    <label class="mdl-textfield__label" for="age">Level</label>
                                </div>
                            </div>

                            <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <div class="input-append date form_date">
                                        <input class="mdl-textfield__input" type="date"  value="<?php echo htmlentities($row['datetested']);?>" name="datetested"   disabled/>
                                            <label class="mdl-textfield__label" for="datetested">Date Tested</label>
                                    </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text"  value="<?php echo htmlentities($row['hospitalname']);?>" name="hospitalname" id="hospitalname" disabled/>
                                        <label class="mdl-textfield__label" for="hospitalname">Hospital Name</label>
                                    </div>
                            </div>
                                <div class="mdl-grid">
                                  <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                 
                                    <input class="mdl-textfield__input" type="date"  value="<?php echo htmlentities($row['dateadmitted']);?>" name="dateadmitted" disabled/>
                                            <label class="mdl-textfield__label" for="dateadmitted">Date Admitted</label>
                                  </div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text"  value="<?php echo htmlentities($row['status']);?>" name="hospitalname" id="hospitalname" disabled/>
                                        <label class="mdl-textfield__label" for="hospitalname">Status</label>
                                  
                                  
                                    </div>
                                </div>
                            </div>    
                            <?php  } ?>
                        <div class="form__action">
                           
                           <button id="update" name="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                               Go back
                           </button>
                       </div>
                     </div>
                    </form>
                </div>
               


            </div>

            
        </main>
        
    </div>

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

