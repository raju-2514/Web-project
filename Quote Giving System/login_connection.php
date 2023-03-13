

<?php
$host="localhost";
$username="root";
$password="";
$dbname="copy";


session_start();

$conn=mysqli_connect($host,$username,$password,$dbname);

// if(!empty($_SESSION["id"])){
//   header("Location: index.php");
// }



if(isset($_POST["submit"])){
  
  $email = $_POST["email"];
  $password = $_POST["password"];


  
  $result = mysqli_query($conn, "SELECT * FROM registration WHERE email = '$email' AND password = '$password'");
  $row = mysqli_fetch_assoc($result);

  if(mysqli_num_rows($result) > 0){
    if($password == $row['password'] && $email==$row['email'])
    {
    
      $_SESSION['user_mail'] = $email;
				$_SESSION['user_password'] = $password;

      header("location: home.php");
    }

    else
    {
      echo
      "<script> alert('E-mail or  Password Wrong'); </script>";
    
    }

  }


}
?>