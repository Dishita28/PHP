<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("preferred_language", $_POST["language"]);
    header("Location: index.php");
    exit();
}
?>

<html>
<body>
    <form method="post">
        <select name="language">
            <option value="en">English</option>
            <option value="es">Spanish</option>
            <option value="fr">French</option>
            <option value="de">German</option>
        </select>
        <button type="submit">Save</button>
    </form>
</body>
</html>
