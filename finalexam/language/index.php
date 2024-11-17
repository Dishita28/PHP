<?php
$preferredLanguage = $_COOKIE["preferred_language"];
$languages = ["en" => "English", "es" => "Spanish", "fr" => "French", "de" => "German"];
$currentLanguage = $languages[$preferredLanguage];
?>

<html>
<body>
    <p>Your preferred language is: <?php echo $currentLanguage; ?></p>
    <a href="language.php">Change Language</a>
</body>
</html>
