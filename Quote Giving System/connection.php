<?php
$host="localhost";
$username="root";
$password="";
$dbname="copy";

$conn=mysqli_connect($host,$username,$password,$dbname);



// if(!empty($_SESSION["id"])){
//     header("Location: registration.php");
//   }

if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $cname=$_POST['cname'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    
    $duplicate = mysqli_query($conn, "SELECT * FROM registration WHERE  email = '$email'");
    if(mysqli_num_rows($duplicate) > 0)
    {
      echo
      "<script> alert('Username or Email Has Already Taken'); </script>";
      header("Location: registration.php");
    }
    else
    {
        $sql="INSERT INTO registration (fname,lname,cname,dob,email,password)
        VALUES('$fname',' $lname','$cname','$dob','$email','$password') ";
          
          if(mysqli_query($conn,$sql))
          {
            echo
            "<script> alert('Registration Successful'); </script>";
            header("Location: login.php");
          }

        
       
      }

      mysqli_close($conn);
    }
    
    // $sql="INSERT INTO registration (fname,lname,cname,dob,email,password)
    // VALUES('$fname',' $lname','$cname','$dob','$email','$password') ";
      
    //   if(mysqli_query($conn,$sql))
    //   {
    //       echo "Registration done Successfully";
    //   }
    //   else{
  
    //       echo "Fill again and Submit".mysqli_error($conn);
    //   }
  
    //   mysqli_close($conn);
  
  ?>
  