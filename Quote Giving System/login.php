

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <link rel="stylesheet" href="http://localhost/copy/css/style.css">
    <link rel="stylesheet" href="http://localhost/copy/css/login.css">
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
   

       <form action="login_connection.php" method="POST">

       <div class="log">
        <label for="name"><h4>Enter Your Username/E_mail</h4></label><br>
        <input type="email" id="username" name="email" placeholder="Enter valid username/email" required>

        <br><br>

        <label for="password" id="pw"><h4>Password</h4></label><br>
        <input type="password" id="password" name="password" placeholder="Enter Your Password" required>


        <br><br>
        <center><h4><a href="forgotpassword.php">ForgetPassword</a></h4></center>
        <input type="submit" id="sb" value="Login" name="submit">
       </form>

       <br><br>

       Don't Have An Account?<a href="registration.php">Registration</a>
  

   
    
    </div>
</body>
</html>

