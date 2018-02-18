Javascript Library

Validation

function trim(str)
{
return str.replace(/^\s+|\s+$/g, '');
}

function validateEmail()

{

var email = document.getElementbyId('email').value;

if (email.match(/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/)

{
return true;
}

else

{
alert("Please enter a valid email address");

return false;
}
}


function validateUsername()

{

var firstName = document.getElementById('firstName').value;

{

if (firstName.match(== 0)

alert("This field must be completed");

return true;
}

else

{
return false
}

}

function validatePassword()

{

var password = document.getElementById('password').value;

if (password.length >= 8)

{
return true;
}

else
{
alert("Password must be a minimum of 8 characters long")

return false;
}
}


else return "";

}