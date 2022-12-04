<?php
if(isset($_POST["login_btn"])){
    $email = $_POST['email'];
    $passw=$_POST['password'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($row['email']==$email && $row['password']==$passw){
        header("location:dashboard.html");
    }
  }
} else {
  echo "0 results";
}
$conn->close();
}


?>