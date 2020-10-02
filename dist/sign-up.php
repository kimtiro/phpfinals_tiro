
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
}
?>
<!DOCTYPE html>
<html lang="en">
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

</head>
<body>
<form method="post" action="#">
    
<div class="mdl-layout mdl-js-layout color--gray is-small-screen login">
    <main class="mdl-layout__content">
   
        <div class="mdl-card mdl-card__login mdl-shadow--2dp">
        <div class="mdl-card__supporting-text color--dark-gray">
           
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                    <span class="mdl-card__title-text text-color--smooth-gray">DARKBOARD</span>
                </div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-phone">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                        <input class="mdl-textfield__input" type="text" name="fname" >
                        <label class="mdl-textfield__label" for="fname">First Name</label>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-phone">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                        <input class="mdl-textfield__input" type="text" name="lname" id="lname">
                        <label class="mdl-textfield__label" for="lname">Last Name</label>
                    </div>
                </div>
                   
                <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                        <input class="mdl-textfield__input" type="text" name="mname" id="mname" />
                        <label class="mdl-textfield__label" for="birthday">Middle Name</label>
                    </div>
                </div>

                <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-phone">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                        <input class="mdl-textfield__input" type="text" name="brgy" id="brgy"/>
                        <label class="mdl-textfield__label" for="brgy">Baranggay</label>
                    </div>
                </div>

                <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-phone">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                        <input class="mdl-textfield__input" type="text" name="municipality" id="municipality"/>
                        <label class="mdl-textfield__label" for="municipality">Municipality</label>
                    </div>
                </div>

                <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-phone">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                        <input class="mdl-textfield__input" type="text" name="city" id="city" />
                        <label class="mdl-textfield__label" for="city">City</label>
                    </div>
                </div>

                <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-phone">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                        <input class="mdl-textfield__input" type="text" name="mapaddress" id="mapaddress"/>
                        <label class="mdl-textfield__label" for="mapaddress">Map Address</label>
                    </div>
                </div>

                <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-phone">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                        <input class="mdl-textfield__input" type="text" name="age" id="age"/>
                        <label class="mdl-textfield__label" for="age">Age</label>
                    </div>
                </div>

                <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-phone">
                <span>Gender:</span>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
               
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="partition-fulltime">
                            <input type="radio" id="partition-fulltime" class="mdl-radio__button" name="gender" value="Male" checked/>
                            <span class="mdl-radio__label"> Male</span>
                        </label>

                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="partition-partTime">
                            <input type="radio" id="partition-partTime" class="mdl-radio__button" name="gender" value="Female"/>
                            <span class="mdl-radio__label">  Female</span>
                        </label>
                    </div>
                </div>

                <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-phone">
                    <div class=" mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                                    <input class="mdl-textfield__input" value="Single" type="text" name="civilstatus" id="civilstatus" readonly tabIndex="-1"/>
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
                </div>
            
                <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-phone">
                    <div class=" mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                    <input class="mdl-textfield__input" value="Asymptomatic" type="text" id="level" readonly tabIndex="-1"/>
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
                <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-phone">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                        <input class="mdl-textfield__input" type="text" name="datetested" id="datetested"/>
                        <label class="mdl-textfield__label" for="datetested">Date Tested</label>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-phone">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                        <input class="mdl-textfield__input" type="text" name="datetested" id="datetested"/>
                        <label class="mdl-textfield__label" for="datetested">Date Tested</label>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-phone">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                        <input class="mdl-textfield__input" type="text" name="datetested" id="datetested"/>
                        <label class="mdl-textfield__label" for="datetested">Date Tested</label>
                    </div>
                </div>


               

                <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone submit-cell">
                <div class="form__action">
                           
                           <button id="submit" name="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                               Submit
                           </button>
                       </div>

                </div>
               
            </div>
 
        </div>
    </div>
   
    </main>
</div>
</form>
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