<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<head>
		<title>Smart Door</title>
		<style type="text/css">
			div.toast {
			    visibility: hidden; /* Hidden by default. Visible on click */
			    min-width: 250px; /* Set a default minimum width */
			    margin-left: -125px; /* Divide value of min-width by 2 */
			    background-color: #009688; /* Black background color */
			    color: #fff; /* White text color */
			    text-align: center; /* Centered text */
			    border-radius: 2px; /* Rounded borders */
			    padding: 16px; /* Padding */
			    position: fixed; /* Sit on top of the screen */
			    z-index: 1; /* Add a z-index if needed */
			    left: 50%; /* Center the snackbar */
			    bottom: 30px; /* 30px from the bottom */
			}

			/* Show the snackbar when clicking on a button (class added with JavaScript) */
			div.toast.show {
			    visibility: visible; /* Show the snackbar */

			/* Add animation: Take 0.5 seconds to fade in and out the snackbar. 
			However, delay the fade out process for 2.5 seconds */
			    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
			    animation: fadein 0.5s, fadeout 0.5s 2.5s;
			}

			/* Animations to fade the snackbar in and out */
			@-webkit-keyframes fadein {
			    from {bottom: 0; opacity: 0;} 
			    to {bottom: 30px; opacity: 1;}
			}

			@keyframes fadein {
			    from {bottom: 0; opacity: 0;}
			    to {bottom: 30px; opacity: 1;}
			}

			@-webkit-keyframes fadeout {
			    from {bottom: 30px; opacity: 1;} 
			    to {bottom: 0; opacity: 0;}
			}

			@keyframes fadeout {
			    from {bottom: 30px; opacity: 1;}
			    to {bottom: 0; opacity: 0;}
			}

			div.buttons{
			  margin-left:auto;
			  margin-right:auto;
			  display:block;
			  margin-top:10%;
			  margin-bottom:10%;
			}

		</style>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body style="background:#263238;">
		<center><h1 style="color: white">Smart Door Control Center</h1></center>
		<div class="buttons">
			<div class="container">
				<button class="w3-button w3-xlarge w3-circle w3-teal w3-card-4" onclick="unlock()" style="width:300px; height: 300px"><i class="large material-icons" style="font-size: 100px">lock_open</i></button>
				<button class="w3-button w3-xlarge w3-circle w3-teal w3-card-4" onclick="picture()" style="width:300px; height: 300px"><i class="large material-icons" style="font-size: 100px">camera_alt</i></button>
				<button class="w3-button w3-xlarge w3-circle w3-teal w3-card-4" onclick="network()" style="width:300px; height: 300px"><i class="large material-icons" style="font-size: 100px">network_wifi</i></button>
			</div>
		</div>
		<div id="unlocked" class="toast">Door Unlocked</div>
		<div id="camera" class="toast">Photo captured and will be sent to your email</div>
		<div id="host" class="toast">Stream is available at 192.168.1.12</div>

		<?php

		$file = "/buttonStatus.txt";
		$handle = fopen($file,'w+');
		if (isset($_POST['test']))
		{
		$onstring = "1";
		fwrite($handle,$onstring);
		fwrite($handle,$_POST['test'])
		fclose($handle);
		print "";
		}
		else if(isset($_POST['2']))
		{
		$offstring = "2";
		fwrite($handle, $offstring);
		fclose($handle);
		print "";
		}
		else if(isset($_POST['3']))
		{
		$offstring = "3";
		fwrite($handle, $offstring);
		fclose($handle);
		print "";
		}

		?>
		
		<script>
			$(document).ready(function(){
			    $('.tooltipped').tooltip({delay: 50});
			});
			function unlock() {
			    var x = document.getElementById("unlocked")
			    var y = document.getElementById("camera")
			    x.className = "show toast";
			    setTimeout(function(){ y.className = y.className.replace("show toast", "toast"); }, 0);
			    setTimeout(function(){ x.className = x.className.replace("show toast", "toast"); }, 3000);
			}
			function picture() {
				var x = document.getElementById("camera")
				var y = document.getElementById("host")
				x.className = "show toast";
				setTimeout(function(){ y.className = y.className.replace("show toast", "toast"); }, 0);

				setTimeout(function(){ x.className = x.className.replace("show toast", "toast"); }, 3000);
			}
			function network() {
			    var x = document.getElementById("host")
			    var y = document.getElementById("camera")
			    x.className = "show toast";
			    setTimeout(function(){ y.className = y.className.replace("show toast", "toast"); }, 0);
			    setTimeout(function(){ x.className = x.className.replace("show toast", "toast"); }, 3000);
			}
		</script>
	</body>
</html>