<!DOCTYPE html>
<html>
<body>
<?php
$fruits = array("Apple", "Banana", "Mango", "Orange");

echo "<b>Displaying using for loop:</b><br>";

for($i=0; $i<count($fruits); $i++)
{
    echo $fruits[$i]."<br>";
}

echo "<br>";

echo "<b>Displaying using foreach loop:</b><br>";

foreach($fruits as $fruit)
{
    echo $fruit."<br>";
}
?>
</body>
</html>