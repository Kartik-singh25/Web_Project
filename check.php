<?php
 session_start();
  include_once('connection.php');
	// Escape user inputs for security
	$id=mysqli_real_escape_string($link, $_SESSION['id']);
	$username = mysqli_real_escape_string($link, $_SESSION['username']);
    $check_in = mysqli_real_escape_string($link, $_POST['in']);
    $check_out = mysqli_real_escape_string($link, $_POST['out']);
	$room = mysqli_real_escape_string($link, $_POST['room']);
	$room_type = mysqli_real_escape_string($link, $_POST['type']);
    $prices=mysqli_real_escape_string($link, $_POST['price']);
	

    // attempt insert query execution
    $sql = "INSERT INTO booking (u_id,username,check_in, check_out, room, room_type,prices) VALUES ('$id','$username','$check_in', '$check_out', '$room', '$room_type','$prices')";

    if(mysqli_query($link, $sql)){
		header("location: payment.html");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // close connection
    mysqli_close($link);
?>