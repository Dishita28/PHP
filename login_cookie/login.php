<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("username", $_POST["username"],time()+ 3600);
    header("Location: index.php");
}
?>
<html>
<body>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <button type="submit">Login</button>
    </form>
</body>
</html>
