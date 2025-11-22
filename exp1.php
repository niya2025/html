<!DOCTYPE HTML>
<html>
<head>
<title>Registration Form</title>
<script>
function validateForm() {
    var name = document.forms["regForm"]["Name"].value;
    var email = document.forms["regForm"]["Email"].value;
    var password = document.forms["regForm"]["Password"].value;
    var phone = document.forms["regForm"]["Phone"].value;
    var gender = document.forms["regForm"]["gender"].value;

    // Check required fields
    if (name == "" || email == "" || password == "" || phone == "" || gender == "") {
        alert("Please fill all required fields!");
        return false;
    }

    // Validate email
    var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
    if (!emailPattern.test(email)) {
        alert("Invalid email address!");
        return false;
    }

    // Validate phone (10 digits)
    var phonePattern = /^[0-9]{10}$/;
    if (!phonePattern.test(phone)) {
        alert("Phone number must be exactly 10 digits!");
        return false;
    }

    // Validate password length
    if (password.length < 6) {
        alert("Password must be at least 6 characters!");
        return false;
    }

    alert("Form submitted successfully!");
    return true;
}
</script>
</head>

<body bgcolor="pink">
<center><h1><u>REGISTRATION FORM</u></h1></center>

<form name="regForm" method="post" action="" onsubmit="return validateForm()">
 Name:<input type="text" name="Name"><br><br>

 Email ID:<input type="email" name="Email"><br><br>

 Password:<input type="password" name="Password"><br><br>

 Date of Birth:<input type="date" name="dob"><br><br>

 Phone Number:<input type="text" name="Phone"><br><br>

 Address:<textarea name="Address" rows="2" cols="30"></textarea><br><br>

 Course:
 <select name="course">
   <option value="MCA">MCA</option>
   <option value="MBA">MBA</option>
   <option value="B.Tech">B.Tech</option>
   <option value="CS">CS</option>
 </select><br><br>

 Gender:
 <input type="radio" name="gender" value="Male">Male
 <input type="radio" name="gender" value="Female">Female
 <input type="radio" name="gender" value="Other">Other
 <br><br>

 <center>
   <input type="submit" value="Submit">
   <input type="reset" value="Reset">
 </center>
</form>

</body>
</html>

