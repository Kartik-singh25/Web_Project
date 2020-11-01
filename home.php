<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'userdb');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="dhtmlxcalendar.css"/>

    <script src="dhtmlxcalendar.js"></script>
    <style type="text/css">
      body
{
    font-size: 20px;
    font-family: 'Arial';
    padding: auto;
    margin-top: 10px;
    background-color: black;
    background-image: url('bg.jpg');
     background-size: 1400px 680px;
    opacity: 120%;
}
.container
{
  max-width: 700px;
    padding: 14px 14px 14px 14px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.8);
    align-self: center;
    background-color:#E2C073;
    border-radius: 15px;
    align-self: left;
height:500px;
    opacity: 80%;

}
    </style>

<!--<script>
		var myCalendar;
		function doOnLoad()
			{
			myCalendar = new dhtmlXCalendarObject(["calendar","calendar2",]);
			}
		</script>
    -->
</head>
<body onload="doOnLoad();"style="">
<div class="m-auto d-block" style="float: right;">
    <a href="logout.php" class="btn btn-danger m-auto">Sign Out</a>
</div>
<br>




    <div class="container" style="text-align:center height:100px;">
        <div  style=" padding-top: 48px; padding-bottom: 32px;">
             <h3 style="text-align:center" >HOTEL MANAGEMENT SYSTEM</h3>
        </div>
        <div style="padding-left:100px">
<div id="check">
    <br>
	<form action="check.php" method="post">
		<div style="position:relative;height:80px;">
		<label for="in">Check in:</label> &nbsp;&nbsp;&nbsp;&nbsp;
            		<!--<input id="calendar" name="in" placeholder="2015-06-02" required="" type="text"> <br><br>-->
            		<inpt type='date' id="calendar" name="in" placeholder="2015-06-02" />
		</div>
		<div>
		<label for="in">Check out:</label> &nbsp;&nbsp;
            		<input id="calendar2" name="out" placeholder="2015-06-05" required="" type="date"> <br><br>

        </div>
        <div>
			Room Type:
                <select name="room">
                    <option value="A/C">A/C</option>
        			<option value="Non-A/C">Non-A/C</option>
                </select>
                <select name="type">
                    <option value="single">Single</option>
					<option value="double">Double</option>
                    <option value="three">Three</option>
                </select>
                <select name="price">
                    <option value="Rs.5000(Single A/C)">Rs.5000(Single A/C)</option>
                    <option value="Rs.4000(Double A/C)">Rs.4000(Double A/C)</option>
                    <option value="Rs.3000(Triple A/C)">Rs.3000(Triple A/C)</option>
                    <option value="Rs.4000(Single Non-A/C)">Rs.4000(Single Non-A/C)</option>
                    <option value="Rs.3000(Double Non-A/C)">Rs.3000(Double Non-A/C)</option>
                    <option value="Rs.2000(Triple Non-A/C)">Rs.2000(Triple Non-A/C)</option>
                </select>
</div>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" name="submit" value="Book" />
	<input type="reset" name="reset" value="Reset" />
</form>
   </div><!--check -->
   </div>
   </div>




</body>
</html>
