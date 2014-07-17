<!DOCTYPE html>
<html>

<head>
    <link type="text/css" rel="stylesheet" href="homeScreen.css">
    <title>AskIT</title>
    <div id="header">
        <img src="Images/CiscoLogo.png" id="headerLogoPic" />
        <button type="button" class="btn btn-default" onclick="location.href ='homeScreen.php'" style="position: absolute; margin-left: 160px; margin-top: 21px;">Home</button>
        <button type="button" class="btn btn-default" onclick="location.href ='editProfile.php'" style="position: absolute; margin-left: 580px; margin-top: 21px;">Edit Profile</button>
        <table cellpadding="0px" cellspacing="0px">
            <tr>
                <td id="searchBox">
                    <input type="text" placeholder="Search" style="width:150px; height:30px; border:0px solid; padding:0px 3px; position:relative; border-radius: 5px;">
                </td>
            </tr>
        </table>
        <i class="cisco-icon cisco-icon-search-10180-h32-w42" style="position: absolute; margin-left: 840px; margin-top: 21px;"></i>
    </div>
</head>

<body>
    <h1>Topics</h1>
    <ul>
        <a href="webTopic.php">
            <li>Web</li>
        </a>
        <a href="iOSTopic.php">
            <li>iOS</li>
        </a>
        <a href="androidTopic.php">
            <li>Android</li>
        </a>
        <a href="javaTopic.php">
            <li>Java</li>
        </a>
        <a href="iRiseTopic.php">
            <li>iRise</li>
        </a>
        <a href="tableauTopic.php">
            <li>Tableau</li>
        </a>
        <a href="agileTopic.php">
            <li>Agile</li>
        </a>
        <a href="UXTopic.php">
            <li>UX</li>
        </a>
        <a href="routersTopic.php">
            <li>Routers</li>
        </a>
        <a href="webExTopic.php">
            <li>WebEx Social</li>
        </a>
    </ul>
    <div id="horizontalBar">
    </div>
    <div id="trendingSidebar">
        <h1>Trending</h1>
        <div id="trendingSidebarBackground">
        </div>
    </div>

    <div id="profilePic">
        <img src="Images/DemoProfilePic.png" />
    </div>
    <p id="nameBox">
        Alex Lancaster
    </p>

    <p id="jobBox">
        Job Title: COLLEGE INTERN.TECH UNDERGRAD
    </p>
    <p id="orgBox">
        Organization: New Graduate COE
    </p>
    <div id="descriptionBox">
        Describe Yourself:
        <br>
        <br>
        <textarea style="width: 690px; min-height: 80px; max-height: 80px; resize: none; margin: 0px; font-size: 18px; overflow-y: scroll; overflow-x: auto;"></textarea>
    </div>
    <div id="expertiseBox">
        Expertise:
        <br>
        <br>
        <textarea class="TextShort"></textarea>
    </div>
    <div id="interestBox">
        Interests:
        <br>
        <br>
        <textarea class="TextShort"></textarea>
    </div>
    <p style="height:30px; width:210px; position:absolute; margin-top: 555px; margin-left: 260px; font-size: 20px; text-align: center;">
        Subscribed topics:
    </p>
    <div id="subscribedTopicsScrollable">
        <table class="table table-striped table-hover" style="table-layout: fixed; width: 193px;">
            <col width="193px" />
            <tbody>
                <tr height="125px">
                    <td>Absolutely</td>
                </tr>
                <tr height="125px">
                    <td>Definitely</td>
                </tr>
                <tr height="125px">
                    <td>Crazy</td>
                </tr>
                <tr height="125px">
                    <td>Basically</td>
                </tr>
            </tbody>
        </table>
    </div>
    <p style="height:30px; width:220px; position:absolute; margin-top: 555px; margin-left: 490px; font-size: 20px; text-align: center;">
        Questions asked:
    </p>
    <div id="questionsAskedHeader">
        <table class="table table-striped table-bordered" style="table-layout: fixed; word-wrap: break-word; overflow: hidden; width: 218px;">
            <col width="163px" />
            <col width="40px" />
            <col width="15px" />
            <thead>
                <tr>
                    <th>Question</th>
                    <th>Up</th>
                    <th></th>
                </tr>
            </thead>
        </table>
    </div>
    <div id="questionsAskedScrollable">
        <table class="table table-striped table-hover" style="table-layout: fixed; width: 203px;">
            <col width="163px" />
            <col width="40px" />
            <tbody>
                <tr height="125px">
                    <td>Absolutely</td>
                    <td id="upvotesCell">
                        <div id="upvotesDiv">
                            <a href="alexIntro.php">
                                <img src="Images/up.png" id="upArrow" />
                            </a>
                            <a href="alexIntro.php">
                                <img src="Images/down.png" id="downArrow" />
                            </a>
                            <p id="upvotesText">12</p>
                        </div>
                    </td>
                </tr>
                <tr height="125px">
                    <td>Definitely</td>
                    <td id="upvotesCell">
                        <div id="upvotesDiv">
                            <a href="alexIntro.php">
                                <img src="Images/up.png" id="upArrow" />
                            </a>
                            <a href="alexIntro.php">
                                <img src="Images/down.png" id="downArrow" />
                            </a>
                            <p id="upvotesText">12</p>
                        </div>
                    </td>
                </tr>
                <tr height="125px">
                    <td>Crazy</td>
                    <td id="upvotesCell">
                        <div id="upvotesDiv">
                            <a href="alexIntro.php">
                                <img src="Images/up.png" id="upArrow" />
                            </a>
                            <a href="alexIntro.php">
                                <img src="Images/down.png" id="downArrow" />
                            </a>
                            <p id="upvotesText">12</p>
                        </div>
                    </td>
                </tr>
                <tr height="125px">
                    <td>Basically</td>
                    <td id="upvotesCell">
                        <div id="upvotesDiv">
                            <a href="alexIntro.php">
                                <img src="Images/up.png" id="upArrow" />
                            </a>
                            <a href="alexIntro.php">
                                <img src="Images/down.png" id="downArrow" />
                            </a>
                            <p id="upvotesText">12</p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <p style="height:30px; width:220px; position:absolute; margin-top: 555px; margin-left: 730px; font-size: 20px; text-align: center;">
        Questions answered:
    </p>
    <div id="questionsAnsweredHeader">
        <table class="table table-striped table-bordered" style="table-layout: fixed; word-wrap: break-word; overflow: hidden; width: 218px;">
            <col width="163px" />
            <col width="40px" />
            <col width="15px" />
            <thead>
                <tr>
                    <th>Question</th>
                    <th>Up</th>
                    <th></th>
                </tr>
            </thead>
        </table>
    </div>
    <div id="questionsAnsweredScrollable">
        <table class="table table-striped table-hover" style="table-layout: fixed; width: 203px;">
            <col width="163px" />
            <col width="40px" />
            <tbody>
                <tr height="125px">
                    <td>Absolutely</td>
                    <td id="upvotesCell">
                        <div id="upvotesDiv">
                            <a href="alexIntro.php">
                                <img src="Images/up.png" id="upArrow" />
                            </a>
                            <a href="alexIntro.php">
                                <img src="Images/down.png" id="downArrow" />
                            </a>
                            <p id="upvotesText">12</p>
                        </div>
                    </td>
                </tr>
                <tr height="125px">
                    <td>Definitely</td>
                    <td id="upvotesCell">
                        <div id="upvotesDiv">
                            <a href="alexIntro.php">
                                <img src="Images/up.png" id="upArrow" />
                            </a>
                            <a href="alexIntro.php">
                                <img src="Images/down.png" id="downArrow" />
                            </a>
                            <p id="upvotesText">12</p>
                        </div>
                    </td>
                </tr>
                <tr height="125px">
                    <td>Crazy</td>
                    <td id="upvotesCell">
                        <div id="upvotesDiv">
                            <a href="alexIntro.php">
                                <img src="Images/up.png" id="upArrow" />
                            </a>
                            <a href="alexIntro.php">
                                <img src="Images/down.png" id="downArrow" />
                            </a>
                            <p id="upvotesText">12</p>
                        </div>
                    </td>
                </tr>
                <tr height="125px">
                    <td>Basically</td>
                    <td id="upvotesCell">
                        <div id="upvotesDiv">
                            <a href="alexIntro.php">
                                <img src="Images/up.png" id="upArrow" />
                            </a>
                            <a href="alexIntro.php">
                                <img src="Images/down.png" id="downArrow" />
                            </a>
                            <p id="upvotesText">12</p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

<div id="footer">
    <img src="Images/FooterPic.png" id="footerPic" />
</div>
<script src="https://ecmx-active.cisco.com/web/fw/tools/iwe/asf-app/app-wrapper/1.0/js/cisco-bootstrap-bundle.js"></script>

</html>