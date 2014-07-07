<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=8">
<link type="text/css" href="exportedStyles.css" rel="stylesheet"/>
<link type="text/css" href="newStyles.css" rel="stylesheet"/>
<style type="text/css">
body {
	margin:0px 0px 0px 0px;
	padding:0px 0px 0px 0px;
}
</style>


<title>Login</title>
</head>

<body class="yui-skin-sam normal_style" style="height:1000px;width:960px;overflow-x:scroll;overflow-y:scroll;">

<iframe frameborder="0" scrolling="no" marginwidth="0" marginheight="0"  src="master_Header.html" style="valign: top;width:960px;height:75px;margin-top:0px;margin-left:0px;"></iframe>
<!-- below widget out of position -->

<form action = "processLogin.php" name="Login_Form" id="Login_Form" style="width:104%;height:1000px;overflow-x:auto;overflow-y:auto;box-sizing:border-box;" method = "post">

	<!-- layout row -->
	<div style="margin-top:230px;min-height:50px;">
		<span id="CEC_Username" style="box-sizing:border-box;float:left;font-family:SansSerif;font-size:30px;margin-left:283px;">CEC Username</span>
		<input type="text" name="username_input" style="height:50px;width:107px;box-sizing:border-box;float:left;font-size:30px;" size="15"/>
	</div> <!-- closing div tag for layout row -->


	<!-- layout row -->
	<div style="margin-top:50px;min-height:50px;">
		<span id="CEC_Password" style="box-sizing:border-box;float:left;font-family:SansSerif;font-size:30px;margin-left:283px;">CEC Password</span>
		<input type="password" id="password_input" style="height:50px;width:107px;box-sizing:border-box;float:left;font-size:30px;" size="15"/>
	</div> <!-- closing div tag for layout row -->


	<!-- layout row -->
	<div style="margin-top:25px;min-height:50px;">
		<input id="Button" type="submit" value="Login" style="font:100% Myriad,Helvetica,Tahoma,Arial,clean,sans-serif;line-height: 1.25;padding-bottom: 0px;padding-left: 0px;padding-right: 0px;padding-top: 0px;text-transform: none;font-size:24px;margin-left:688px;width:100px" />
	</div> <!-- closing div tag for layout row -->

</form>
<!-- above widget out of position -->






</body>

</html>


