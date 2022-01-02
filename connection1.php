<?php


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$email  = $_POST['email'];
$mobile = $_POST['mobile'];
$gender= $_POST['gender'];
$pass= $_POST['pass'];
$cpass= $_POST['cpass'];




if (!empty($fname) ||  !empty($lname) ||!empty($username) || !empty($email) || !empty($mobile ) || !empty($gender) || !empty($pass)|| !empty($cpass)  )
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$databasename="former";



// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $databasename);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $SELECT = "SELECT email From register Where email = ? Limit 1";
  $INSERT = "INSERT Into register(firstname,lname,username,email, gender, pass, cpass, mobile)values(?,?,?,?,?,?,?,?)";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssssss", $fname,$lname,$username,$email,$gender,$pass,$cpass,$mobile);
      $stmt->execute();
      echo "Account has been created";
      header('location:index.html');
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>