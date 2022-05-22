<html>
<meta charset="UTF-8"/>
<head>

</head>
<?php
$email = $_POST["email"];
$name = $_POST["name"];
$visitor_message=$_POST["visitor_message"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname="reservation";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
  die("Connection failed: " );
} 

$sql = "INSERT INTO reservation (email,name,visitor_message ) VALUES ('$name','$email ','$visitor_message')";

if ($conn->query($sql) == TRUE) {
  echo "welcome to our library"; 


  }
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close(); 


?>
</body>
</html>
