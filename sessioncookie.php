//run form first 
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION['username'] = $username;
    setcookie('password', $password);
    echo "Username stored in session: " . $_SESSION['username'] . "<br>";
    echo "Username stored in cookie: " . $_COOKIE['password'] . "<br>";
} else {
    echo "Please submit the form.";
}   
?>
