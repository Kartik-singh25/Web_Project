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
  max-width: 650px;
    padding: 14px 14px 14px 14px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.8);
    align-self: center;
    background-color:#E2C073;
    border-radius: 15px;
    align-self: left;
height:100px;
    opacity: 80%;

}
    </style>
</head>
<body>
<div class="m-auto d-block" style="float: right;">
    <a href="logout.php" class="btn btn-danger m-auto">Sign Out</a>
</div>
<div class="container">
        <h2 class ="text-center card-header"><u><?php echo $_SESSION['username'];?> your room booked successfully !!!</u></h2>
            
    </div>    
<br>
</body>
</html>