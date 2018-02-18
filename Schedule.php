<DOCTYPE html>
<html>
<!-- BIT695 Web Technologies -->
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="set_form_date.js"></script>
    <title>Events</title>
</head>

<body>
    <header>
        <h1>Board games aficionados</h1>
        <nav id="follow_me">
            <ul>
                <li><a href="events.html">Weekly Calender</a></li>
                <li><a href="about.html">About Us</a></li>
				<li><a href="signUp.html">Sign Up</a></li>
				<li><a href="boardgames.html">Boardgames</a></li>
				<li><a href="Schedule.html">Game Schedule</a></li>
				<li><a href="assigned_players.html">Assigned Board Games</a></li>
				<li><a href="highscore.html">High Scores</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="content_pages">
            <img style="padding-top: 50px" id="left_semcircle" src="half_circle_left.gif" alt="">
            <img style="padding-top: 50px" id="right_semcircle" src="half_circle_right.gif" alt="">
            <h2 style="padding-top: 70px">Game Sign Up</h2>

<?php

$conn = new mysqli('127.0.0.1', 'root', 'root', 'bit695');

if($conn->connect_error) {
	
	die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE schedule (`Game` VARCHAR(30) NOT NULL , `Date` DATE NOT NULL , `Venue` VARCHAR(50) NOT NULL , PRIMARY KEY (`Game`))";


$game=$_POST['game'];
$date=$_POST['date'];
$venue=$_POST['venue'];



$sql = 'SELECT * FROM schedule';

$sql  = "INSERT INTO `schedule` (`Game`, `Date`, `Venue`) VALUES ('$game', '$date', '$venue')";

if ($conn->query($sql) 
	
===

TRUE) {
	echo
	'Thank you your details have been entered';
	
}
	
else  {
	echo
	'Failed to input details please check they are correct and try again';
	
	
	
}


	
	
	
?>

   </main>
    <footer>
        <p>Board games aficionados</p><p>1970-2015</p>
    </footer>
	
    

</html>
