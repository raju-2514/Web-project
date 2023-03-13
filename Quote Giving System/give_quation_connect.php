
<?php
$host="localhost";
$username="root";
$password="";
$dbname="copy";

$conn=mysqli_connect($host,$username,$password,$dbname);




if(isset($_POST['submit']))
{
    $quote=$_POST['quote'];
   
    
    
    $sql="INSERT INTO quotation(quote)
    VALUES('$quote') ";
      
      if(mysqli_query($conn,$sql))
      {
        echo
        "<script> alert('Thanks To Give A Valuable Opinion'); </script>";

        header('location:home.php');
      }
      else{
  
          echo "Fill again and Submit".mysqli_error($conn);
      }
  
      mysqli_close($conn);
  }
  ?>