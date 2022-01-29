<?php
$error='';
if(isset($_GET['errors'])){
    $errors=unserialize($_GET['errors']);
    echo '<ul>';
    foreach ($errors as $error){
        echo "<li>$error</li>";

    }echo '</ul>';
}
?>

<html lang="en">
<head>

</head>
<body>
<form action="./signup.php" method="post">
   name:<input type="text" name="username"> <br>
    email: <input type="text" name="useremail"> <br>
    password: <input type="text" name="password"> <br>
    <input type="submit" value="submit">
</form>

</body>
</html>
