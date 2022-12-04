<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";


$name=$_POST['name'];
$proname=$_POST['proname'];
$sid=$_POST['sid'];
$pdate=$_POST['pdate'];
$edate=$_POST['edate'];
$bill=$_POST['bill'];
$remark=$_POST['remark'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `addnew` (`id`, `category`, `product`, `serial_id`, `purchase_date`, `expiry_date`, `bill`, `remark`) VALUES (NULL, '$name', '$proname', '$sid', '$pdate', '$edate', '$bill', '$remark');";

if ($conn->query($sql) === TRUE) {
    header("location:product.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>