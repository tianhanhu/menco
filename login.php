<!DOCTYPE html>
<html>  
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "1Lakenakuru!";
$dbname = "myDB";

$q = $_REQUEST["q"];
$p = $_REQUEST["p"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT username, password FROM user_info";
$result = $conn->query($sql);
$judge = False;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      /*if (($_POST['username'] == $row['username']) && 
      	($_POST['password'] == $row['password'])){*/
      if (($q == $row['username']) &&
          ($p == $row['password'])){
        echo "Welcome " . $row["username"]. " <br>";
    	  $judge = True;
      }
    }

}

if ($judge == False){
  echo "wrong info";
}

$conn->close();
?>
</body>
</html>