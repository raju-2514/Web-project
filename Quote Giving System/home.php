
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home </title>
    <link rel="stylesheet" href="http://localhost/copy/css/style.css">
    <link rel="stylesheet" href="http://localhost/copy/css/view.css">
    <script src="https://kit.fontawesome.com/616fb309b8.js" crossorigin="anonymous"></script>
    
</head>
<body>
   
       <nav>
        <ul>
            <li><a href="home.php">LogOut</a></li>
            <li> <a  href="home.php">Home</a></li> 
            <li><a href="about.php">About</a> </li>
            <li> <a href="login.php">Login </a></li>

            <!-- <script>

              function show()
              {
                alert("Please Login First");
              }

              onclick="show()"
            </script> -->

            <li  ><a href="profile.php" >Profile</a> </li> 
            <li><a href="give_quate.php">give quote</a></li>  
            


            <li> <a href="registration.php">Registration</a></li>
            <li><input type="text" id="search" placeholder="Search">SEARCH</li> 
          </ul>
       </nav>
      
       
          
        
        <?php
$host="localhost";
$username="root";
$password="";
$dbname="copy";

$conn=mysqli_connect($host,$username,$password,$dbname);

$sql="SELECT quote FROM quotation";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "<div id='danger'>";
   echo "Quote: " . $row["quote"]."<br>";
   echo "

<label id='number-display'> 0 </label>
 <button type='checkbox' id='my-button'><label class='fa-regular fa-thumbs-up' > </label> </button> 

 
<label id='dislike-display'>0</label> 
   <button type='checkbox' id='my-button1'><label class='fa-regular fa-thumbs-down' ></label> </button> 


<script>

const button = document.getElementById('my-button');
const numberDisplay = document.getElementById('number-display');
let number = 0;
let isIncreasing = true;

button.addEventListener('click', () => {
  if (isIncreasing) {

      button.style.backgroundColor = 'MediumSpringGreen';
    number++;
  } else {
    number--;
    button.style.backgroundColor = 'white';
  }

  numberDisplay.textContent = number;
  isIncreasing = !isIncreasing;
});



const button1 = document.getElementById('my-button1');
const numberDisplay1 = document.getElementById('dislike-display');
let number1 = 0;
let isIncreasing1 = true;

button1.addEventListener('click', () => {
  if (isIncreasing1) {
     
    number1++;
    button1.style.backgroundColor = 'MediumSpringGreen';
  } else {
    number1--;
    button1.style.backgroundColor = 'white';
  }

  numberDisplay1.textContent = number1;
  isIncreasing1 = !isIncreasing1;
});


</script>
   
   
   </div>";
   
    
  }
  }

?>


</body>
</html>