<?php
$error = '';
if (isset($_GET['error'])) {
    $error = $_GET['error'];
}
?>
<html lang="en">

<head>

</head>

<body>

    <p>
        <?php echo $error; ?>
    </p>
    <form action="./signin.php" method="post">
        name: <input type="text" name="username"><br>
        email: <input type="text" name="useremail"><br>
        <input type="submit" value="submit">
    </form>
</body>

</html>