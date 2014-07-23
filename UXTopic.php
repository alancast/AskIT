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
    <div id="askItButton">
        <a href="AskQuestion.php">
            <img src="Images/havequestionlongshort.jpg" onmouseover="this.src='Images/askITLongShort.jpg';" onmouseout="this.src='Images/havequestionlongshort.jpg';" height=98 width=700></img>
        </a>
    </div>
    <p style="height:30px; width:700px; position:absolute; margin-top: 210px; margin-left: 250px; font-size: 40px; text-align: center;">
        #UX
    </p>
    <p style="height:30px; width:340px; position:absolute; margin-top: 250px; margin-left: 250px; font-size: 24px; text-align: center;">
        Unanswered
    </p>
    <div id="topicUnansweredScrollableHeader">
        <table class="table table-striped table-bordered" style="table-layout: fixed; word-wrap: break-word; overflow: hidden; width: 338px;">
            <col width="208px" />
            <col width="75px" />
            <col width="40px" />
            <col width="15px" />
            <thead>
                <tr>
                    <th>Question</th>
                    <th>User</th>
                    <th>Up</th>
                    <th></th>
                </tr>
            </thead>
        </table>
    </div>
    <div id="topicUnansweredScrollable">
        <table class="table table-striped table-hover" style="table-layout: fixed; width: 323px;">
            <col width="208px" />
            <col width="75px" />
            <col width="40px" />
            <tbody>
                <?php
                $link=mysqli_connect("localhost","root","root");
                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $result = mysqli_query($link,"SELECT * FROM my_db.Questions WHERE Tags='UX' AND NOT EXISTS (SELECT * FROM my_db.Answers WHERE my_db.Answers.QID = my_db.Questions.QID) ORDER BY Up desc");

                while($row = mysqli_fetch_assoc($result)) {
                echo "<tr height=\"125px\">";
                echo "<form action = \"AnswerQuestion.php\" name = \"AnswerForm\" id = \"AnswerForm\" method = \"post\"> ";
                echo "<input type= \"hidden\" name=\"question\" value = \"".$row['Question']."\"></input>";
                echo "<input type= \"hidden\" name=\"questionsUser\" value = \"".$row['Username']."\"></input>";
                echo "<input type= \"hidden\" name=\"QID\" value = \"".$row['QID']."\"></input>";                
                echo    "<td> <button class = \"button\"  type = \"submit\">".$row['Question']."</button></td>";
                echo "</form>";
                echo    "<td>".$row['Username']."</td>";
                echo    "<td id=\"upvotesCell\">";
                echo        "<div id=\"upvotesDiv\">";
                echo            "<a href=\"alexIntro.php\">";
                echo                "<img src=\"Images/up.png\" id=\"upArrow\" />";
                echo            "</a>";
                echo            "<a href=\"alexIntro.php\">";
                echo                "<img src=\"Images/down.png\" id=\"downArrow\" />";
                echo            "</a>";
                echo            "<p id=\"upvotesText\">".$row['Up']."</p>";
                echo        "</div>";
                echo    "</td>";
                echo "</tr>";

                }
                mysqli_close($link);
                ?>
            </tbody>
        </table>
    </div>
    <p style="height:30px; width:340px; position:absolute; margin-top: 250px; margin-left: 610px; font-size: 24px; text-align: center;">
        Recently answered
    </p>
    <div id="topicRecentlyAnsweredScrollableHeader">
        <table class="table table-striped table-bordered" style="table-layout: fixed; word-wrap: break-word; overflow: hidden; width: 338px;">
            <col width="208px" />
            <col width="75px" />
            <col width="40px" />
            <col width="15px" />
            <thead>
                <tr>
                    <th>Question</th>
                    <th>User</th>
                    <th>Up</th>
                    <th></th>
                </tr>
            </thead>
        </table>
    </div>
    <div id="topicRecentlyAnsweredScrollable">
        <table class="table table-striped table-hover" style="table-layout: fixed; width: 323px;">
            <col width="208px" />
            <col width="75px" />
            <col width="40px" />
            <tbody>
                <?php
                $link=mysqli_connect("localhost","root","root");
                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $result = mysqli_query($link,"SELECT DISTINCT my_db.Questions.Question, my_db.Questions.Username, my_db.Questions.Up FROM my_db.Questions join my_db.Answers USING(QID) WHERE Tags='UX' ORDER BY my_db.Questions.Up desc");

                while($row = mysqli_fetch_assoc($result)) {
                echo "<tr height=\"125px\">";
                echo "<form action = \"AnswerQuestion.php\" name = \"AnswerForm\" id = \"AnswerForm\" method = \"post\"> ";
                echo "<input type= \"hidden\" name=\"question\" value = \"".$row['Question']."\"></input>";
                echo "<input type= \"hidden\" name=\"questionsUser\" value = \"".$row['Username']."\"></input>";
                echo "<input type= \"hidden\" name=\"QID\" value = \"".$row['QID']."\"></input>";                
                echo    "<td> <button class = \"button\"  type = \"submit\">".$row['Question']."</button></td>";
                echo "</form>";
                echo    "<td>".$row['Username']."</td>";
                echo    "<td id=\"upvotesCell\">";
                echo        "<div id=\"upvotesDiv\">";
                echo            "<a href=\"alexIntro.php\">";
                echo                "<img src=\"Images/up.png\" id=\"upArrow\" />";
                echo            "</a>";
                echo            "<a href=\"alexIntro.php\">";
                echo                "<img src=\"Images/down.png\" id=\"downArrow\" />";
                echo            "</a>";
                echo            "<p id=\"upvotesText\">".$row['Up']."</p>";
                echo        "</div>";
                echo    "</td>";
                echo "</tr>";

                }
                mysqli_close($link);
                ?>
            </tbody>
        </table>
    </div>
</body>
<div id="footer">
    <img src="Images/FooterPic.png" id="footerPic" />
</div>
<script src="https://ecmx-active.cisco.com/web/fw/tools/iwe/asf-app/app-wrapper/1.0/js/cisco-bootstrap-bundle.js"></script>

</html>