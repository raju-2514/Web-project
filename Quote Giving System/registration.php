<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration </title>
    <link rel="stylesheet" href="http://localhost/copy/css/style.css">
    <link rel="stylesheet" href="http://localhost/copy/css/registration.css">
</head>
<body>
   
<nav>
        <ul>
        <li><a href="home.php">LogOut</a></li>
            <li> <a  href="home.php">Home</a></li> 
            <li><a href="about.php">About</a> </li>
            <li> <a href="login.php">Login </a></li> 
            <li><a href="profile.php">Profile</a> </li> 
            <li><a href="give_quate.php">give quote</a></li>
            <li> <a href="registration.php">Registration</a></li>
            <li><input type="text" id="search" placeholder="Search">SEARCH</li> 
          </ul>
       </nav>
   
    
    
    <div class="container">
      <form action="connection.php" method="POST" enctype="multipart/form-data">
        
        
        <label for="title" id="reg"><b>Registration Form</b> </label><br><br>
        <label for="fname" id="fn" >First Name </label>
        <input type="text" id="fname" name="fname" placeholder="Your First name.." required>
      
      
        <br><br>
    
        <label for="lname" id="ln">Last Name </label>
        <input type="text" id="lname" name="lname" placeholder="Your last name.." required>
        
        <br><br>
    
        <label for="country" id="cn">Country </label>
        <input type="text" id="cname" name="cname" placeholder="Your Country.." required>
       
        <br><br>

        <label for="DOB" id="bd">Birthdate </label>
        <input type="text" id="dob" name="dob" placeholder="Your Birthdate.." required>
        
        <br><br>

        <label for="email" id="em">E_mail </label>
        <input type="email" id="email" name="email" placeholder="Enter a valid Mail.." required>
        
        <br><br>

        <label for="password" id="pw">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter password.." required>
        
        <br><br>
        
        
        <input type="submit" id="sb" value="Submit" name="submit">
<br><br>
        <center><p>Have An Account?<strong><a href="login.php"> Login</a> </strong> </p></center>
    
      </form>
    </div>
 
    
</body>
</html>