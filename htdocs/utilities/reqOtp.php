<?php
@session_start();
if(isset($_POST['submit']))
{
    $_SESSION['otp']=123456;
    $url='http://'.$_SERVER['HTTP_HOST']."/telecomacademy.co.in/OTPReg.php";
    header('Location:'.$url);
}
?>   
<html>
<head>
	<title>Sign in through OTP</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" media="screen" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.min.css">
	<link rel="stylesheet" type="text/css" href="style/OTPstyle.css">
    <script type="text/javascript" src="js/jsFunctions.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				    <h2 class="text-center login title" align="center">Sign in to your account</h2>
				<div class="account-wall well">
					<form class="form-signin" name="f1" id="f1" method="POST" class="form-horizontal">
						<img class="profile-img" align="center" src="https://cdn2.iconfinder.com/data/icons/luchesa-part-3/128/SMS-512.png">
						<h3><b>Enter a verification code</b></h3><h4 id="msg"> A text message with a verification code Will Be Sent to your Mobile Phone</h4>
						
						<div class="form-group">	
							<label for="Mobile">Mobile Number</label>
							<div class="input-group input-group-md">
								<input onkeyup="document.getElementById('otp_err').innerHTML=''" type="number" name="OTP"  id="Mobile" maxlength="6" placeholder="Enter Your Mobile Number Here.." class="form-control" required>
							</div>
						</div>	
                        <small id="otp_err" style="color:#a94442"></small>
                        <br/>
                        <br/>
						<div id="sb"><input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="Verify OTP"/></div>		
					</form>
				</div>
			</div>
		</div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap-social/4.12.0/bootstrap-social.css">    
    <link href='http://fonts.googleapis.com/css?family=Roboto:400' rel='stylesheet' type='text/css'>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"></script>

    <script type="text/javascript">
    		$(document).ready(function () {
		var validator = $("#f1").bootstrapValidator({
			feedbackIcons: {
				valid: "glyphicon glyphicon-ok",
				invalid: "glyphicon glyphicon-remove", 
				validating: "glyphicon glyphicon-refresh"
			},
			live: 'enabled',
			submitButtons: 'button[type="Submit"]',			 
			fields : {
				OTP : {
					validators: {
						notEmpty : {
							message : "Please provide an OTP"
						},
						stringLength : {
							min: 6,
							max: 6,
							message: "OTP must be 6 characters long"
						},
						regexp:{
							regexp: /^[0-9][0-9][0-9][0-9][0-9][0-9]$/,
							message: "OTP must be a numeric value"
						}, 						 
					}
				}, 				
			}
		});
	
	});
    </script>
</body>
</html>
<?php


?>