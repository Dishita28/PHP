//rum form 
<?php 
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "user_db";
$conn = new mysqli($servername, $username, $password, $dbname); 
$username = $_POST['username']; 
$password = $_POST['password']; 
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')"; 
if ($conn->query($sql) === TRUE) { 
    echo "Registration successful!"; 
} else { 
    echo "Error in insertion"; 
}
$conn->close();
?>
