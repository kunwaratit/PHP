<?php
$errors = array();
$name = $email = $pass = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['username'];
    $email = $_POST['useremail'];
    $pass = $_POST['password'];
    if (empty($name) || empty($email) || empty($pass)) {
        header('location:signin.php?error=required field');
    } else {
        if (isset($_POST['username'])) {

            $name = $_POST['username'];
        }
        if (isset($_POST['useremail'])) {

            $email = $_POST['useremail'];
        }
        if (isset($pass)) {

            $pass = $_POST['password'];
        }
        echo "name:" . $name . "<br>email : " . $email . "<br>password:" . $pass;
    }
} else {
    header('location:hsignin.php?errors=Error!You must submit the form.');
}
