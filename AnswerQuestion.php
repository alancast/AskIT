
<html>

<head>
    <link type="text/css" rel="stylesheet" href="homeScreen.css">
    <title>AskIT</title>
    <div id="header">
        <img src="Images/CiscoLogo.png" id="headerLogoPic" />
        <button type="button" class="btn btn-default" onclick="location.href ='homeScreen.php'" style="position: absolute; margin-left: 160px; margin-top: 21px;">Home</button>
        <button type="button" class="btn btn-default" onclick="location.href ='editProfile.html'" style="position: absolute; margin-left: 580px; margin-top: 21px;">Edit Profile</button>
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
        <a href="webTopic.html">
            <li>Web</li>
        </a>
        <a href="iOSTopic.html">
            <li>iOS</li>
        </a>
        <a href="androidTopic.html">
            <li>Android</li>
        </a>
        <a href="javaTopic.html">
            <li>Java</li>
        </a>
        <a href="iRiseTopic.html">
            <li>iRise</li>
        </a>
        <a href="tableauTopic.html">
            <li>Tableau</li>
        </a>
        <a href="agileTopic.html">
            <li>Agile</li>
        </a>
        <a href="UXTopic.html">
            <li>UX</li>
        </a>
        <a href="routersTopic.html">
            <li>Routers</li>
        </a>
        <a href="webExTopic.html">
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
        ?>
    </div>
    <div id = "questionDescriptionBox">
        <h1>Describe Your Question</h1>
        <textarea name= "descriptionBox"></textarea>
    </div>
    <div id = "questionTagBox">
        <h1>Tag Your Question:</h1>
        <textarea name= "tagBox"></textarea>
    </div>    
    <div>
        <input class="button" type="image" src="Images/askITlongshort.jpg" style="position: absolute; margin-top: 655px; margin-left: 435px; height: 49px; width: 350px; border-radius: 5px;"></input>
    </div> <!-- closing div tag for layout row -->
</form>    


<div id="footer">
    <img src="Images/FooterPic.png" id="footerPic" />
</div>
<script src="https://ecmx-active.cisco.com/web/fw/tools/iwe/asf-app/app-wrapper/1.0/js/cisco-bootstrap-bundle.js"></script>

</html>

