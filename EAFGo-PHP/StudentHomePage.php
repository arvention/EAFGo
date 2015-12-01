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
                    <form>
                        <img src = "img/magnify_search.png" id = "searchIcon" height="15px" width="15px"/>
                        <input type = "text" id = "searchbar" placeholder = "Search for a course">
                        <button type = "submit" id = "searchSubmit"><a href="#openResultModal">></a></button>
                    </form>
                </div>
            </div>
            <div id = "openResultModal" class = "resultModal">
                <div> <a href = "#close" title="Close" class = "closeModal">X</a>
                    <h2 id = "searchTitle">Search Results for AUTOMAT</h2>

                    <table id = "searchResultTable">
                        <tr class="classRecommenderRow">
                            <th>Course</th>
                            <th>Section</th>
                            <th>Day/s</th>
                            <th>Time</th>
                            <th>Room</th>
                            <th>Class Number</th>
                        </tr>
                        <tr class="classRecommenderRow">
                            <td>AUTOMAT</td>
                            <td>X23</td> 
                            <td>MW</td>
                            <td>915-1045</td>
                            <td>MRE413</td>
                            <td>1234</td>
                        </tr>
                        <tr class="classRecommenderRow">
                            <td>AUTOMAT</td>
                            <td>X22</td> 
                            <td>TH</td>
                            <td>1100-1230</td>
                            <td>MRW413</td>
                            <td>1235</td>
                        </tr>
                        <tr class="classRecommenderRow">
                            <td>AUTOMAT</td>
                            <td>X21</td> 
                            <td>TH</td>
                            <td>1430-1600</td>
                            <td>MRW413</td>
                            <td>1236</td>
                        </tr>
                        <tr class="classRecommenderRow">
                            <td>AUTOMAT</td>
                            <td>X20</td> 
                            <td>MW</td>
                            <td>1100-1230</td>
                            <td>MRE412</td>
                            <td>1237</td>
                        </tr>
                        <tr class="classRecommenderRow">
                            <td>AUTOMAT</td>
                            <td>X19</td> 
                            <td>TH</td>
                            <td>1615-1745</td>
                            <td>MRE303</td>
                            <td>1238</td>
                        </tr>
                    </table>    
                </div>
            </div>
            <div id = "bodyContent">
                <ul class = "menuTabs">
                    <li><a href="#homeContent" class = "tab" style="color: rgb(255, 255, 255); background-color: rgb(0, 128, 0);">Home</a></li>
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
                    <div id="assessmentHeaderDiv">
                        <p id="assessmenttabDescription">Select School Year and Term:</p>
                        <select id="yearTermSelect">
                            <option>First Trimester, AY 2013-2014</option>
                            <option>Second Trimester, AY 2013-2014</option>
                            <option>Third Trimester, AY 2013-2014</option>
                            <option>First Trimester, AY 2014-2015</option>
                            <option>Second Trimester, AY 2014-2015</option>
                            <option>Third Trimester, AY 2014-2015</option>
                            <option>First Trimester, AY 2015-2016</option>
                            <option>Second Trimester, AY 2015-2016</option>
                        </select>
                    </div>
                    <form>
                        <table id = "assessmentTable">
                            <tr class="assessmentRow">
                                <td><b>Tuition</b></td>
                                <td></td>
                                <td>38,831.00</td>
                            </tr>
                            <tr class="assessmentRow">
                                <td><b>Miscellaneous</b></td>
                                <td></td>
                                <td>5,918.00</td>
                            </tr>
                            <tr class="assessmentRow">
                                <td>Trimestral Reg</td>
                                <td>872.00</td>
                                <td></td>
                            </tr>
                            <tr class="assessmentRow">
                                <td>Student Services</td>
                                <td>992.00</td>
                                <td></td>
                            </tr>
                            <tr class="assessmentRow">
                                <td>Athletics</td>
                                <td>579.00</td>
                                <td></td>
                            </tr>
                            <tr class="assessmentRow">
                                <td>Stud Mat'ls & Forms</td>
                                <td>135.00</td>
                                <td></td>
                            </tr>
                            <tr class="assessmentRow">
                                <td>Medical/Dental</td>
                                <td>400.00</td>
                                <td></td>
                            </tr>
                            <tr class="assessmentRow">
                                <td>Library</td>
                                <td>2,075.00</td>
                                <td></td>
                            </tr>
                            <tr class="assessmentRow">
                                <td>Museum Fee</td>
                                <td>15.00</td>
                                <td></td>
                            </tr>
                            <tr class="assessmentRow">
                                <td>Information and Comm</td>
                                <td>786.00</td>
                                <td></td>
                            </tr>
                            <tr class="assessmentRow">
                                <td>Insurance</td>
                                <td>64.00</td>
                                <td></td>
                            </tr>
                            <tr class="assessmentRow">
                                <td><b>Special Fees</b></td>
                                <td></td>
                                <td>400.00</td>
                            </tr>
                            <tr class="assessmentRow">
                                <td>P. U. S. O.</td>
                                <td>100.00</td>
                                <td></td>
                            </tr>
                            <tr class="assessmentRow">
                                <td>Alumni Fee</td>
                                <td>200.00</td>
                                <td></td>
                            </tr>
                            <tr class="assessmentRow">
                                <td>Social Action Fee</td>
                                <td>100.00</td>
                                <td></td>
                            </tr>
                            <tr class="assessmentRow">
                                <td><b>Laboratory Fees</b></td>
                                <td></td>
                                <td>3,815.00</td>
                            </tr>
                            <tr class="assessmentRow">
                                <td>Computer Lab</td>
                                <td></td>
                                <td>3,815.00</td>
                            </tr>
                            <tr class="assessmentRow">
                                <td>ID Validation</td>
                                <td></td>
                                <td>46.00</td>
                            </tr>
                            <tr class="assessmentRow">
                                <td><b>TOTAL</b></td>
                                <td></td>
                                <td>49,010.00</td>
                            </tr>
                        </table>
                        <input type ="submit" id="assessmentPrintButton" value="Print my EAF"/>
                    </form>
                </div>
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
