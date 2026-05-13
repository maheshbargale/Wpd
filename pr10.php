<html>
<body>

<form method="post">

Name: <input type="text" name="name">

<input type="submit">

</form>

<?php

if($_POST)
{
    echo "Name: " . $_POST['name'];
}

?>

</body>
</html>
