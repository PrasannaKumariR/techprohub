<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php include("header.html")
?>
<center> <h1>Registration Form</h1> </center>  
<center>    
<div class="login">
    <form action="connect.php" method="post">

        <label for="name">Name</label>
        <input type="text" id="name" size="40" placeholder="Enter your name" name="n" required />

        <label for="age">Age</label>
        <input type="number" id="age" name="a" required />

        <label for="dob">DOB</label>
        <input type="date" id="dob" name="d" required />

        <left>
        <label for="gender">Gender</label>
        <input type="radio" id="male" name="g" value="male" required />
        <label for="male">Male</label>
        <input type="radio" id="female" name="g" value="female" />
        <label for="female">Female</label>
        </left>
        <label for="email">Email</label>
        <input type="email" id="email" size="40" placeholder="Enter your email" name="e" required />

        <label for="pwd">Password</label>
        <input type="password" id="pwd" minlength="4" maxlength="8" name="p" required />

        <label for="dept">Department</label>
        <select id="dept" name="s">
            <option value="bca">BCA</option>
            <option value="bcomca">BCOM CA</option>
            <option value="cse">CSE</option>
            <option value="ece">ECE</option>
            <option value="eee">EEE</option>
            <option value="it">IT</option>
        </select>

        <label for="course">Select course</label>
        <select id="course" name="c">
            <option value="Web development">WEB DEVELOPMENT</option>
            <option value="Data Science">DATA SCIENCE</option>
            <option value="Machine Learning">MACHINE LEARNING</option>
            <option value="Cyber security">CYBER SECURITY</option>
            <option value="Cloud Computing">CLOUD COMPUTING</option>
            <option value="Devops">DEVOPS</option>
        </select>

        <input type="submit" value="Register" />
        <input type="reset" value="Reset" />
    </form>
</div>
</center>
</body>
<?php include("footer.html")
?>
</html>