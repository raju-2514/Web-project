<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <link rel="stylesheet" href="http://localhost/copy/css/style.css">
    <link rel="stylesheet" href="http://localhost/copy/css/forgotpassword.css">
</head>
<body>
   
<nav>
        <ul>
            <li> <a  href="home.php">Home</a></li> 
            <li><a href="about.php">About</a> </li>
            <li> <a href="login.php">Login </a></li> 
            <li><a href="profile.php">Profile</a> </li> 
            <li><a href="give_quate.php">give quote</a></li>
            <li> <a href="registration.php">Registration</a></li>
            <li><input type="text" id="search" placeholder="Search">SEARCH</li> 
          </ul>
       </nav>
    <center>
    <form action="login.php" method="POST">
    <div class="forgot">
        <h5>Fill All OF Those Field</h5>
        <br>
    <input type="text" name="mail" placeholder="Enter your Mail" id="mailbox1">
    <br><br>

    <input type="text" name="vc" placeholder="Enter Varification Code"  class="Varificationcode">
    <br><br>

    <input type="text" name="password" placeholder="Enter New PassWord" id="np">
    <br><br>

    <input type="submit" id="sb" name="submit" value="SUBMIT">
   
    </div>
    

    </form>
    </center>


</body>
</html>