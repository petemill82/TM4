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

$sql = "CREATE TABLE highscore ( `Game` VARCHAR(30) NOT NULL, `Current_high_score` INT NOT NULL ,  `MembershipId` INT NOT NULL , `First_Name` VARCHAR(30) NOT NULL , `Next_Game_Date` DATE NOT NULL , PRIMARY KEY (`Game`))";


$game=$_POST['game'];
$high_score=$_POST['high_score'];
$memberid=$_POST['memberid'];
$firstname=$_POST['firstname'];
$date=$_POST['date'];



$sql = 'SELECT * FROM highscore';

$sql  = "INSERT INTO `highscore` (`Game`, `Current_High_Score`, `MembershipId`, `First_Name`, `Next_Game_Date`) VALUES ('$game', '$high_score', '$memberid', '$firstname', '$date')";
 
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
