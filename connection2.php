<?php
   
   
$email  = $_POST['email'];
 
$pass= $_POST['password'];
 




if ( !empty($email) || !empty($pass)  )
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$databasename="former";



 
      $conn = new mysqli ($host, $dbusername, $dbpassword, $databasename);
      if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .') '
          . mysqli_connect_error());
      }
      else{
        $SELECT = "SELECT * From register Where email = '$email'  && pass='$pass'";
        $result=mysqli_query($conn,$SELECT);
        $num =mysqli_num_rows($result);

          if($num==1){
              header('location:home.html');
          }
          else{
            header('location:index.html');
            echo "Login failed";

          }


          
      }
}
else {
    echo "All field are required";
    die();
   }
   
 
?>