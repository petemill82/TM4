/*php - conducts serverside validation and stores data into playersDatabase*/

/*The code checks to see if all the fields all contain values and that the values are in the correct format.  If it doesnt contain the correct 
values, it posts the corresponding error message.  If all fields contain the correct values, it posts the value to the server.*/

<?php
// define variables and set to empty values
$firstnameerror = $surnameerror = $emailErr = $phoneErr = "";
$firstName = $surname = $email = $phone = "";



  if (empty($_POST["firstName"])) {
    $firstNameErr = "First Name is required";
  } else {
    $firstName = test_input($_POST["firstName"]);
	// check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z]*$/",$firstName)) {
      $firstNameErr = "Only letters and white space allowed"; 
    }
  }
  
 if (empty($_POST["familyName"])) {
    $familyNameErr = "Family Name is required";
  } else {
    $familyName = test_input($_POST["familyName"]);
	// check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z]*$/",$familyName)) {
      $familyNameErr = "Only letters and white space allowed"; 
    }
  }
 
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
	// check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format"; 
  }

  if (empty($_POST["phone"])) {
    $phoneErr = "Phone Number is required";
  } else {
    $phone = test_input($_POST["phone"]);
	// check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]*$/",$phone)) {
      $phoneErr = "Only numbers and white space allowed"; 
    }
  }

}
?>