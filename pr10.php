<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name =$_POST['name'];
    $email =$_POST['email'];
}
?>

<!DOCTYPE html> 
<html> 
<body> 
 
<form method="post"> 
    Name: <input type="text" name="name"><br><br> 
    Email: <input type="email" name="email"><br><br> 
    <input type="submit" value="Submit"> 
</form> 
 
<?php 
if (isset($name)) { 
    echo "<h3>Submitted Data:</h3>"; 
    echo "Name: " . $name . "<br>"; 
    echo "Email: " . $email; 
} 
?>
</body>
</html>