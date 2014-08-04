
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
            <li>GSQS</li>
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
    <div id="scrollableAnswersHeader">
        <table class="table table-striped table-bordered" style="table-layout: fixed; word-wrap: break-word; overflow: hidden; width: 688px;">
            <col width="557px" />
            <col width="75px" />
            <col width="40px" />
            <col width="16px" />
            <thead>
                <tr>
                    <th>Answer</th>
                    <th>User</th>
                    <th>Up</th>
                    <th></th>
                </tr>
            </thead>
        </table>
    </div>
    <div id="scrollableAnswersFeed">
        <table class="table table-striped table-hover" style="table-layout: fixed; width: 672px; font-size: 13px;">
            <col width="557px" />
            <col width="75px" />
            <col width="40px" />
            <tbody>
                <?php
                $link=mysqli_connect("localhost","root","root");
                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $result = mysqli_query($link,"SELECT * FROM my_db.Answers WHERE QID =".$_POST['QID']." ORDER BY Up desc");

                while($row = mysqli_fetch_assoc($result)) {

                echo "<tr height=\"125px\">";            
                echo    "<td>".$row['Answer']."</td>";
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

<form action = "processAnswer.php" name= "Answer_Form" id="Answer_Form" method = "post">
    <div id = "answerTitle">
        <h1>Question:</h1>
        <?php
        $link=mysqli_connect("localhost","root","root");
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        echo "<h2>".$_POST['question']." </h2>";
        echo "<h3> Asked by: ".$_POST['questionsUser']."</h3>";
        echo "<input type= \"hidden\" name=\"QID\" value = \"".$_POST['QID']."\"></input>";
        ?>
    </div>
    <div id = "questionAnswerBox">
        <h1>Answer</h1>
        <textarea name= "answerBox"></textarea>
    </div>  
    <div>
        <input class="button" type="image" src="Images/AnswerIT.jpg" style="position: absolute; margin-top: 585px; margin-left: 435px; height: 49px; width: 350px; border-radius: 5px;"></input>
    </div> <!-- closing div tag for layout row -->
</form>    

<div id="footer">
    <img src="Images/FooterPic.png" id="footerPic" />
</div>
<script src="https://ecmx-active.cisco.com/web/fw/tools/iwe/asf-app/app-wrapper/1.0/js/cisco-bootstrap-bundle.js"></script>

</html>

