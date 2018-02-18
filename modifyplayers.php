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
            <form action="http://127.0.0.1/BIT695/TM2/signUp.php" method="post">
<?php

$conn = new mysqli('127.0.0.1', 'root', 'root', 'bit695');

if($conn->connect_error) {
	
	die("Connection failed: " . $conn->connect_error);
}
/*Delete row based on certain criteria*/

$sql = "DELETE FROM `players` WHERE `players`.`MembershipId` = 5";

if ($conn->query($sql) 
	
=== 

TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Record failed to delete: " . $conn->error;
}

/*Code to retrieve rows based on certain criteria ie contains gmail addresss */

$sql = "SELECT `MembershipId`,`FirstName`,`Surname`,`EmailAddress`,`PhoneNumber` FROM `players` WHERE `EmailAddress` LIKE '%gmail.com'";

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "MembershipId: " . $row["MembershipId"]. " - First Name: " . $row["firstname"]. " " . $row["surname"]. "<br>";
    }
} else {
    echo "0 results";
}

	
 
    </main>
    <footer>
        <p>Board games aficionados</p><p>1970-2015</p>
    </footer>
	
    

</html>