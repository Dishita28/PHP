//multidimenstional arrayy
<?php
$students = array(
    array("Dishita", 18, "A+")
);
echo "Name of 1st person: " , $students[0][0],"<br>";
echo "age of the person: ", $students[0][1];
?>

//associative array 
<?php
$person = array(
    "name" => "John Doe",
    "age" => 30,
    "city" => "New York"
);
echo "Name: " , $person["name"] , "<br>";
echo "Age: " , $person["age"] , "<br>";
echo "City: " , $person["city"];
?>

//indexed array
<?php
$students = array("chudasama","dishita");
echo $students[1];
?>
