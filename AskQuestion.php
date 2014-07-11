
<html>

<head>
    <link type="text/css" rel="stylesheet" href="homeScreen.css">
    <title>AskIT</title>
    <div id="header">
        <img src="Images/CiscoLogo.png" id="headerLogoPic" />
        <button type="button" class="btn btn-default" onclick="location.href ='alexIntro.html'" style="position: absolute; margin-left: 160px; margin-top: 21px;">Home</button>
        <button type="button" class="btn btn-default" onclick="location.href ='alexIntro.html'" style="position: absolute; margin-left: 580px; margin-top: 21px;">Edit Profile</button>
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
        <a href="alexIntro.html">
            <li>Web</li>
        </a>
        <a href="alexIntro.html">
            <li>iOS</li>
        </a>
        <a href="www.google.com">
            <li>Android</li>
        </a>
        <a href="www.google.com">
            <li>Java</li>
        </a>
        <a href="www.google.com">
            <li>iRise</li>
        </a>
        <a href="www.google.com">
            <li>Tableau</li>
        </a>
        <a href="www.google.com">
            <li>Agile</li>
        </a>
        <a href="www.google.com">
            <li>UX</li>
        </a>
        <a href="www.google.com">
            <li>Routers</li>
        </a>
        <a href="www.google.com">
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

<form action = "processQuestion.php" name= "Question_Form" id="Question_Form" method = "post">
    <div id = "questionPage">
        <h1>Format Your Question:</h1>
    </div> 
    <div id = "questionBox">
        <textarea name= "questionBox"></textarea>
    </div>
    <div>
        <input id="questionButton" type="submit" value="Submit Question"></input>
    </div> <!-- closing div tag for layout row -->
</form>    


<div id="footer">
    <img src="Images/FooterPic.png" id="footerPic" />
</div>
<script src="https://ecmx-active.cisco.com/web/fw/tools/iwe/asf-app/app-wrapper/1.0/js/cisco-bootstrap-bundle.js"></script>

</html>

