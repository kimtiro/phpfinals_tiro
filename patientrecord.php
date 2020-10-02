<?php
session_start();
include('includes/config.php');

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

</head>
<body>
  
        <main class="mdl-layout__content mdl-color--grey-100">
            <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
                <div class="mdl-card__title">
                    <h2>Form</h2>
                    <div class="mdl-card__subtitle">Please complete the form</div>
                </div>

                <div class="mdl-card__supporting-text">
                    <form action="#" class="form">
                        <div class="form__article">
                            <h3>Personal data</h3>

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="firstName" value="Luke"/>
                                    <label class="mdl-textfield__label" for="firstName">First name</label>
                                </div>

                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="secondName" value="Skywalker"/>
                                    <label class="mdl-textfield__label" for="secondName">Second name</label>
                                </div>
                            </div>

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="birthday" value="25 May, 1977"/>
                                    <label class="mdl-textfield__label" for="birthday">Birthday</label>
                                </div>

                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                                    <input class="mdl-textfield__input" value="Male" type="text" id="gender" readonly tabIndex="-1"/>

                                    <label class="mdl-textfield__label" for="gender">Gender</label>

                                    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu dark_dropdown" for="gender">
                                        <li class="mdl-menu__item">Male</li>
                                        <li class="mdl-menu__item">Female</li>
                                    </ul>

                                    <label for="gender">
                                        <i class="mdl-icon-toggle__label material-icons">arrow_drop_down</i>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form__article">
                            <h3>Employment</h3>

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" value="CreativeIT" id="company" disabled/>
                                    <label class="mdl-textfield__label" for="company">Company</label>
                                </div>
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="company_email" value="hello@creativit.io" disabled/>
                                    <label class="mdl-textfield__label" for="company_email">Company email</label>
                                </div>
                            </div>

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" value="Lead developer" id="position"/>
                                    <label class="mdl-textfield__label" for="position">Position</label>
                                </div>
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                                    <input class="mdl-textfield__input" value="Senior" type="text" id="qualification" readonly tabIndex="-1"/>
                                    <label class="mdl-textfield__label" for="qualification">Qualification</label>
                                    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu dark_dropdown"
                                        for="qualification">
                                        <li class="mdl-menu__item">Young Padawan</li>
                                        <li class="mdl-menu__item">Junior</li>
                                        <li class="mdl-menu__item">Middle</li>
                                        <li class="mdl-menu__item">Senior</li>
                                    </ul>
                                    <label for="qualification">
                                        <i class="mdl-icon-toggle__label material-icons">arrow_drop_down</i>
                                    </label>
                                </div>
                            </div>

                            <span>Type of employment:</span>

                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="partition-fulltime">
                                <input type="radio" id="partition-fulltime" class="mdl-radio__button" name="employment" value="1" checked/>
                                <span class="mdl-radio__label">Fulltime</span>
                            </label>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="partition-partTime">
                                <input type="radio" id="partition-partTime" class="mdl-radio__button" name="employment" value="2"/>
                                <span class="mdl-radio__label">Part time</span>
                            </label>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="partition-remote">
                                <input type="radio" id="partition-remote" class="mdl-radio__button" name="employment" value="3"/>
                                <span class="mdl-radio__label">Remote</span>
                            </label>
                        </div>

                        <div class="form__article employer-form__contacts">
                            <h3>Contacts</h3>

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--9-col input-group">
                                    <i class="material-icons pull-left">call</i>

                                    <div class="mdl-textfield mdl-js-textfield pull-left">
                                        <input class="mdl-textfield__input" type="text" id="phone">
                                        <label class="mdl-textfield__label" for="phone">XXX-XX-XX</label>
                                    </div>
                                </div>

                                <div class="mdl-cell mdl-cell--3-col mdl-textfield mdl-js-textfield getmdl-select">
                                    <input class="mdl-textfield__input" value="Mobile" type="text" id="phone_type" readonly tabIndex="-1"/>
                                    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu dark_dropdown" for="phone_type">
                                        <li class="mdl-menu__item">Mobile</li>
                                        <li class="mdl-menu__item">Home</li>
                                        <li class="mdl-menu__item">Work</li>
                                    </ul>
                                    <label for="phone_type">
                                        <i class="mdl-icon-toggle__label material-icons">arrow_drop_down</i>
                                    </label>
                                </div>
                            </div>

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--9-col input-group">
                                    <img src="images/skype.svg">

                                    <div class="mdl-textfield mdl-js-textfield pull-left">
                                        <input class="mdl-textfield__input" type="text" id="skype" value="Pilot_luke"/>
                                        <label class="mdl-textfield__label" for="skype">Skype</label>
                                    </div>
                                </div>

                                <div class="mdl-cell mdl-cell--3-col mdl-textfield mdl-js-textfield getmdl-select">
                                    <input class="mdl-textfield__input" value="Personal" type="text" id="skype_type" readonly tabIndex="-1"/>
                                    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu dark_dropdown" for="skype_type">
                                        <li class="mdl-menu__item">Personal</li>
                                        <li class="mdl-menu__item">Work</li>
                                    </ul>
                                    <label for="skype_type">
                                        <i class="mdl-icon-toggle__label material-icons">arrow_drop_down</i>
                                    </label>
                                </div>
                            </div>

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--9-col input-group">
                                    <i class="material-icons pull-left">mail_outline</i>

                                    <div class="mdl-textfield mdl-js-textfield pull-left">
                                        <input class="mdl-textfield__input" type="text" id="email" value="luke@skywalker.com"/>
                                        <label class="mdl-textfield__label" for="email">Email</label>
                                    </div>
                                </div>

                                <div class="mdl-cell mdl-cell--3-col mdl-textfield mdl-js-textfield getmdl-select">
                                    <input class="mdl-textfield__input" value="Work" type="text" id="email_type" readonly tabIndex="-1"/>
                                    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu dark_dropdown" for="email_type">
                                        <li class="mdl-menu__item">Personal</li>
                                        <li class="mdl-menu__item">Work</li>
                                    </ul>
                                    <label for="email_type">
                                        <i class="mdl-icon-toggle__label material-icons">arrow_drop_down</i>
                                    </label>
                                </div>
                            </div>

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--9-col input-group">
                                    <i class="material-icons pull-left">place</i>

                                    <div class="mdl-textfield mdl-js-textfield pull-left">
                                        <input class="mdl-textfield__input" type="text" id="address"/>
                                        <label class="mdl-textfield__label" for="address">Address</label>
                                    </div>
                                </div>

                                <div class="mdl-cell mdl-cell--3-col mdl-textfield mdl-js-textfield getmdl-select">
                                    <input class="mdl-textfield__input" value="Home" type="text" id="address_type" readonly
                                           tabIndex="-1"/>
                                    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu dark_dropdown" for="address_type">
                                        <li class="mdl-menu__item">Home</li>
                                        <li class="mdl-menu__item">Work</li>
                                    </ul>
                                    <label for="address_type">
                                        <i class="mdl-icon-toggle__label material-icons">arrow_drop_down</i>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form__article employer-form__general_skills">
                            <h3>General skills</h3>

                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <textarea class="mdl-textfield__input" type="text" rows="3" id="AboutMe"></textarea>
                                <label class="mdl-textfield__label" for="AboutMe">About me</label>
                            </div>
                        </div>

                        <div class="form__action">
                            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="isInfoReliable">
                                <input type="checkbox" id="isInfoReliable" class="mdl-checkbox__input" required/>
                                <span class="mdl-checkbox__label">Entered information is reliable</span>
                            </label>
                            <button id="submit_button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
                
            </div>
            <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h1 class="mdl-card__title-text">Advanced table</h1>
                    </div>
                    <div class="mdl-card__supporting-text no-padding">
                        <table class="mdl-data-table mdl-js-data-table">
                            <thead>
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">Qty</th>
                                <th class="mdl-data-table__cell--non-numeric">PatientID</th>
                                <th class="mdl-data-table__cell--non-numeric">Last Name</th>
                                <th class="mdl-data-table__cell--non-numeric">First Name</th>
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
                            </tr>
                            </thead>
                            <tbody>

                                <?php
                                $sql=mysqli_query($con,"select * from patient");
                                $cnt=1;
                                while($row=mysqli_fetch_array($sql))
                                {
                                ?>
            
                                <tr>
                                  
                                </tr>
                                <?php 
                      $cnt++;
                      } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </main>
       
          
        </div>
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

