
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quote Page</title>
    <link rel="stylesheet" href="http://localhost/copy/css/style.css">
    <link rel="stylesheet" href="http://localhost/copy/css/quote.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" 
    href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Teko:wght@600&display=swap" 
    rel="stylesheet">
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
 
    
<form action="give_quation_connect.php" method="POST">
    <div class="qot">

        <label for="qt" id="qt"><h4>Give your Valuable Opinion</h4></label>


        



        <input type="text" id="quote" name="quote"  placeholder="Enter your valuable and Unique Opinion" required>
        <br><br>



        <input type="submit" id="sb" value="Submit" name="submit">
    
       </div>
</form>
  
  
</body>
</html>