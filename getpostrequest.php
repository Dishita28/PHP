// get post request
//rum form 
<?php
if (isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];   
    echo "Username: " . $username . "<br>";
    echo "Password: " . $password . "<br>";
}
?>
