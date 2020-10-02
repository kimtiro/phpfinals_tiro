
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
if(isset($_POST['submit']))
{

  /*  patientID
    lname
    fname
    mname
    brgy
    municipality
    city
    mapaddress
    age
    gender radio button
    civilstatus dropdown
    datetested
    level dropdown
    hospitalname
    dateadmitted
    status radio button*/

    $patientID=$_POST['patientID'];
    $lname=$_POST['lname'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $brgy=$_POST['brgy'];
    $municipality=$_POST['municipality'];
    $city=$_POST['city'];
    $mapaddress=$_POST['mapaddress'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $civilstatus=$_POST['civilstatus'];
    $datetested=$_POST['datetested'];
    $level=$_POST['level'];
    $hospitalname=$_POST['hospitalname'];
    $dateadmitted=$_POST['dateadmitted'];
    $status=$_POST['status'];
    $ret=mysqli_query($con,"insert into patient(lname,fname,mname,brgy,municipality,city,mapaddress,age,gender,civilstatus,datetested,level,hospitalname,dateadmitted,status) values ('$lname','$fname','$mname','$brgy','$municipality','$city','$mapaddress','$age','$gender','$civilstatus','$datetested','$level','$hospitalname','$dateadmitted','$status')");

    if($ret)
    {
      $_SESSION['msg']="Course Created Successfully !!";
      header('Location: forms.php');
    }
    else
    {
      $_SESSION['msg']="Error : Course not created";
    }

}
if(isset($_GET['del']))
{
        mysqli_query($con,"delete from patient where patientID = '".$_GET['patientID']."'");
       
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
            <li><h5>PATIENT</h5></li>
              <li><a href="forms.php">Manage Patient Record</a></li>
              <li><a href="search.php">Search for a patient</a></li>      
</div>

        <main class="mdl-layout__content mdl-color--grey-100">
            <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
                <div class="mdl-card__title">
                    <h2>Form</h2>
                    <div class="mdl-card__subtitle">Please complete the form</div>
                </div>

                <div class="mdl-card__supporting-text">
                    <form  class="form" method="post">
                        <div class="form__article">
                            <h3>Personal data</h3>

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-phone">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                        <input class="mdl-textfield__input" type="text" name="fname" required>
                                        <label class="mdl-textfield__label" for="fname">First Name</label>
                                    </div>
                                </div>
                                <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-phone">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                        <input class="mdl-textfield__input" type="text" name="lname" id="lname" required>
                                        <label class="mdl-textfield__label" for="lname">Last Name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" name="mname" id="mname" />
                                    <label class="mdl-textfield__label" for="birthday">Middle Name</label>
                                </div>
                            </div>

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                     <input class="mdl-textfield__input" type="text" name="brgy" id="brgy" required/>
                                     <label class="mdl-textfield__label" for="brgy">Baranggay</label>
                                </div>
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" name="municipality" id="municipality" required/>
                                    <label class="mdl-textfield__label" for="municipality">Municipality</label>
                                </div>
                            </div>
                            
                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" name="city" id="city" required/>
                                    <label class="mdl-textfield__label" for="city">City</label>
                                </div>
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" name="mapaddress" id="mapaddress" required/>
                                    <label class="mdl-textfield__label" for="mapaddress">Map Address</label>
                                </div>
                            </div>
                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" name="age" id="age" required/>
                                    <label class="mdl-textfield__label" for="age">Age</label>
                                </div>
                                <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                    <span>Gender:   </span>
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="partition-fulltime">
                                            <input type="radio" id="partition-fulltime" class="mdl-radio__button" name="gender" value="Male" checked/>
                                            <span class="mdl-radio__label">     Male</span>
                                        </label>

                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="partition-partTime">
                                            <input type="radio" id="partition-partTime" class="mdl-radio__button" name="gender" value="Female"/>
                                            <span class="mdl-radio__label"> Female</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <div class=" mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                                            <input class="mdl-textfield__input" value="Single" type="text" name="civilstatus" id="civilstatus" readonly tabIndex="-1" required/>
                                            <label class="mdl-textfield__label" for="civilstatus">Civil Status</label>
                                            <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu dark_dropdown"
                                                for="civilstatus">
                                                <li class="mdl-menu__item" >Single</li>
                                                <li class="mdl-menu__item" >Married</li>
                                                <li class="mdl-menu__item" >Widowed</li>
                                                <li class="mdl-menu__item" >Separated</li>
                                                <li class="mdl-menu__item" >Divorced</li>
                                            </ul>
                                            <label for="civilstatus">
                                                <i class="mdl-icon-toggle__label material-icons">arrow_drop_down</i>
                                            </label>
                                    </div>
                                </div>
                                
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <div class=" mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                                        <input class="mdl-textfield__input" value="Asymptomatic" name="level" type="text" id="level" readonly tabIndex="-1" required/>
                                        <label class="mdl-textfield__label" for="level">Level</label>
                                        <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu dark_dropdown"
                                            for="level">
                                            <li class="mdl-menu__item">Asymptomatic</li>
                                            <li class="mdl-menu__item">Mild</li>
                                            <li class="mdl-menu__item">Severe</li>
                                            <li class="mdl-menu__item">Critical</li>
                                        </ul>
                                        <label for="level">
                                            <i class="mdl-icon-toggle__label material-icons">arrow_drop_down</i>
                                        </label>
                                    </div>
                                </div>
                               
                                
                            </div>    
                            <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <div class="input-append date form_date">
                                        <input class="mdl-textfield__input" type="date" name="datetested"   required/>
                                            <label class="mdl-textfield__label" for="datetested">Date Tested</label>
                                    </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" name="hospitalname" id="hospitalname" required/>
                                        <label class="mdl-textfield__label" for="hospitalname">Hospital Name</label>
                                    </div>
                            </div>
                                <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                 
                                    <input class="mdl-textfield__input" type="date" name="dateadmitted" required/>
                                            <label class="mdl-textfield__label" for="dateadmitted">Date Admitted</label>
    </div>
                                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                             
                                    <div class=" mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                                        <input class="mdl-textfield__input" value="Admitted " type="text" id="status"  name="status" readonly tabIndex="-1" required/>
                                        <label class="mdl-textfield__label" for="status">Status</label>
                                        <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu dark_dropdown"
                                            for="status">
                                            <li class="mdl-menu__item">Admitted</li>
                                            <li class="mdl-menu__item">Expired</li>
                                            <li class="mdl-menu__item">Lab Negative</li>
                                        </ul>
                                        <label for="status">
                                            <i class="mdl-icon-toggle__label material-icons">arrow_drop_down</i>
                                        </label>
                                        
                                    </div>
                                  
                                    </div>
                                </div>
                            </div>    
                        <div class="form__action">
                           
                           <button id="submit" name="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                               Submit
                           </button>
                       </div>
                     </div>
                    </form>
                </div>
                <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone" style="overflow: auto;">
                <div class="mdl-card mdl-shadow--2dp" style="overflow: auto;">
                    <div class="mdl-card__title" style="overflow: auto;">
                        <h1 class="mdl-card__title-text" style="overflow: auto;">Advanced table</h1>
                    </div>
                    <div class="mdl-card__supporting-text no-padding">
                        <table class="mdl-data-table mdl-js-data-table  bordered-table" style="overflow: auto;">
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

