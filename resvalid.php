<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "passport";
$Email=$_POST['Email'];
$Roll=$_POST['Roll'];
$Branch=$_POST['Branch'];
$Year=$_POST['Year'];
$pass=$_POST['pass'];
$Codechef=$_POST['Codechef'];
$CodeForces=$_POST['CodeForces'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}






$sql = "INSERT INTO `users`(`username`, `password`, `rollno`, `branch`, `year`, `codechef`, `codeforces`) VALUES ('$Email','$pass','$Roll','$Branch','$Year','$Codechef','$CodeForces')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>