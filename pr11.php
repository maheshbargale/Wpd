<!DOCTYPE html>
<html>
<head>
    <title>PHP String Functions</title>
</head>
<body>

<h2>PHP String Functions Output</h2>

<?php
$str = "Hello, World!";

echo "Original String: ".$str."<br>";
echo "Length: ".strlen($str)."<br>";
echo "Reversed String: ".strrev($str)."<br>";
echo "Substring: ".substr($str,7,5)."<br>";
echo "Uppercase: ".strtoupper($str)."<br>";
echo "Lowercase: ".strtolower($str)."<br>";
?>

</body>
</html>


////

<?php
$str = "Hello, World!";

// 1. Find length manually
$length = 0;
while (isset($str[$length])) {
    $length++;
}
echo "Original String: " . $str . "\n";
echo "Length: " . $length . "\n";

// 2. Reverse string manually
$reversed = "";
for ($i = $length - 1; $i >= 0; $i--) {
    $reversed .= $str[$i];
}
echo "Reversed String: " . $reversed . "\n";

// 3. Substring manually
$start = 7;   // starting index
$subLength = 5; // length of substring

$substring = "";
for ($i = $start; $i < $start + $subLength && isset($str[$i]); $i++) {
    $substring .= $str[$i];
}
echo "Substring: " . $substring . "\n";
?>



$reversed = "";
for ($i = $length - 1; $i >= 0; $i--) {
    $reversed .= $str[$i];
}



$start = 7;
$subLength = 5;

$substring = "";
for ($i = $start; $i < $start + $subLength && isset($str[$i]); $i++) {
    $substring .= $str[$i];
}

