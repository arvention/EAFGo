<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>EAF Go - Home</title>

        <link rel="shortcut icon" href="img/dlsu_logo.png" />
        <link rel="stylesheet" type="text/css" 	media="all" href="css/StudentHomePage.css"/>
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.color.js"></script>
        <script type="text/javascript" src ="js/StudentHomePage.js"></script>
    </head>
    <body>
        <div id = "headerDiv">
            <div id = "headerLeft">
                <img src = "img/dlsu_logo.png" id = "headerLogo" height="60px" width="60px"/>
                <h2 id = "headerTitle">EAF Go</h2>
            </div>
            <div id = "headerRight">
                <img src = "img/StuPicture.jpg" id = "headerPicture" height="50px" width="50px"/>
                <h3 id = "headerName">Hello, Stu D. Ante!</h3>
            </div>
        </div>
        <div id = "bodyDiv">
            <div id = "bodyHeading">
                <h1 id = "bodyTitle">De La Salle University</h1>
                <div id = "searchDiv">
                    <img src = "img/magnify_search.png" id = "searchIcon" height="15px" width="15px"/>
                    <input type = "text" id = "searchbar" placeholder = "Search for a course">
                </div>
            </div>
            <div id = "bodyContent">
                <ul class = "menuTabs">
                    <li><a href="#homeContent" class = "tab">Home</a></li>
                    <li><a href="#enrollmentContent" class = "tab">Enrollment</a></li>
                    <li><a href="#assessmentContent" class = "tab">View Assessment</a></li>
                </ul>
                <div id = "homeContent">
                    <p id = "hometabDescription">Based on your flowchart, you can enroll to the following 
                        courses for the upcoming term:</p>
                    <form>
                        <table id = "classRecommenderTable">
                            <tr class="classRecommenderRow">
                                <th></th>
                                <th>Course</th>
                                <th>Section</th>
                                <th>Day/s</th>
                                <th>Time</th>
                                <th>Room</th>
                            </tr>
                            <tr class="classRecommenderRow">
                                <td><input type ="checkbox"/></td>
                                <td>ADVDISC</td>
                                <td>X23</td> 
                                <td>MW</td>
                                <td>915-1045</td>
                                <td>MRE413</td>
                            </tr>
                            <tr class="classRecommenderRow">
                                <td><input type ="checkbox"/></td>
                                <td>AUTOMAT</td>
                                <td>X23</td> 
                                <td>TH</td>
                                <td>1100-1230</td>
                                <td>MRW413</td>
                            </tr>
                            <tr class="classRecommenderRow">
                                <td><input type ="checkbox"/></td>
                                <td>SOFENGG</td>
                                <td>X23</td> 
                                <td>TH</td>
                                <td>1430-1600</td>
                                <td>MRW413</td>
                            </tr>
                            <tr class="classRecommenderRow">
                                <td><input type ="checkbox"/></td>
                                <td>GAMEDES</td>
                                <td>X23</td> 
                                <td>MW</td>
                                <td>1100-1230</td>
                                <td>MRE412</td>
                            </tr>
                            <tr class="classRecommenderRow">
                                <td><input type ="checkbox"/></td>
                                <td>TREDTRI</td>
                                <td>X23</td> 
                                <td>TH</td>
                                <td>1615-1745</td>
                                <td>MRE303</td>
                            </tr>
                        </table>
                        <input type ="submit" id="classRecommenderButton" value="Enlist Chosen Course/s"/>
                    </form>
                </div>
                <div id = "enrollmentContent">
                    enrollment
                </div>
                <div id = "assessmentContent">
                    assessment
                </div>
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
