<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
		.row::after {content: "";clear: both; display: table;}
		*{box-sizing: border-box;}

.column { float:left;width: 25%; padding: 5px;}
    </style>
</head>
<body >
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
	
	
	
	
	
	
	<div class="row">
  <div class="column">
   

<img id="myImage" src="images/led_off.jpg" style="width:80%">
<button onclick="document.getElementById('myImage').src='images/led_on.jpg'">Turn on </button>
<button onclick="document.getElementById('myImage').src='images/led_off.jpg'">Turn off </button>
  </div>
  <div class="column">
<img id="myImage2" src="images/led_off.jpg" style="width:80%">
<button onclick="document.getElementById('myImage2').src='images/led_on.jpg'">Turn on </button>
<button onclick="document.getElementById('myImage2').src='images/led_off.jpg'">Turn off </button>  </div>
  <div class="column">
<img id="myImage3" src="images/led_off.jpg" style="width:80%">
<button onclick="document.getElementById('myImage3').src='images/led_on.jpg'">Turn on </button>
<button onclick="document.getElementById('myImage3').src='images/led_off.jpg'">Turn off </button>  </div>
    <div class="column">
<img id="myImage4" src="images/led_off.jpg" style="width:80%">
<button onclick="document.getElementById('myImage4').src='images/led_on.jpg'">Turn on </button>
<button onclick="document.getElementById('myImage4').src='images/led_off.jpg'">Turn off </button>  </div> 
</div>
<div class="row">
  <div class="column">
<img id="myImage5" src="images/led_off.jpg" style="width:80%">
<button onclick="document.getElementById('myImage5').src='images/led_on.jpg'">Turn on </button>
<button onclick="document.getElementById('myImage5').src='images/led_off.jpg'">Turn off </button>  </div>
  <div class="column">
<img id="myImage6" src="images/led_off.jpg" style="width:80%">
<button onclick="document.getElementById('myImage6').src='images/led_on.jpg'">Turn on </button>
<button onclick="document.getElementById('myImage6').src='images/led_off.jpg'">Turn off </button>  </div>
  <div class="column">
<img id="myImage7" src="images/led_off.jpg" style="width:80%">
<button onclick="document.getElementById('myImage7').src='images/led_on.jpg'">Turn on </button>
<button onclick="document.getElementById('myImage7').src='images/led_off.jpg'">Turn off </button>  </div>
    <div class="column">
<img id="myImage8" src="images/led_off.jpg" style="width:80%">
<button onclick="document.getElementById('myImage8').src='images/led_on.jpg'">Turn on </button>
<button onclick="document.getElementById('myImage8').src='images/led_off.jpg'">Turn off </button>  </div> 
</div>
<div class="row">
  <div class="column">
<img id="myImage9" src="images/led_off.jpg" style="width:80%">
<button onclick="document.getElementById('myImage9').src='images/led_on.jpg'">Turn on </button>
<button onclick="document.getElementById('myImage9').src='images/led_off.jpg'">Turn off </button>  </div>
  <div class="column">
<img id="myImage10" src="images/led_off.jpg" style="width:80%">
<button onclick="document.getElementById('myImage10').src='images/led_on.jpg'">Turn on </button>
<button onclick="document.getElementById('myImage10').src='images/led_off.jpg'">Turn off </button>  </div>
  <div class="column">
<img id="myImage11" src="images/led_off.jpg" style="width:80%">
<button onclick="document.getElementById('myImage11').src='images/led_on.jpg'">Turn on </button>
<button onclick="document.getElementById('myImage11').src='images/led_off.jpg'">Turn off </button>  </div>
    <div class="column">
<img id="myImage12" src="images/led_off.jpg" style="width:80%">
<button onclick="document.getElementById('myImage12').src='images/led_on.jpg'">Turn on </button>
<button onclick="document.getElementById('myImage12').src='images/led_off.jpg'">Turn off </button>  </div> 
</div>
<div class="row">
  <div class="column">
<img id="myImage13" src="images/led_off.jpg" style="width:80%">
<button onclick="document.getElementById('myImage13').src='images/led_on.jpg'">Turn on </button>
<button onclick="document.getElementById('myImage13').src='images/led_off.jpg'">Turn off </button>  </div>
  <div class="column">
<img id="myImage14" src="images/led_off.jpg" style="width:80%">
<button onclick="document.getElementById('myImage14').src='images/led_on.jpg'">Turn on </button>
<button onclick="document.getElementById('myImage14').src='images/led_off.jpg'">Turn off </button>  </div>
  <div class="column">
<img id="myImage15" src="images/led_off.jpg" style="width:80%">
<button onclick="document.getElementById('myImage15').src='images/led_on.jpg'">Turn on </button>
<button onclick="document.getElementById('myImage15').src='images/led_off.jpg'">Turn off </button>  </div>
    <div class="column">
<img id="myImage16" src="images/led_off.jpg" style="width:80%">
<button onclick="document.getElementById('myImage16').src='images/led_on.jpg'">Turn on </button>
<button onclick="document.getElementById('myImage16').src='images/led_off.jpg'">Turn off </button>  </div> 
</div>

</body>
</html>