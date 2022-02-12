<?php
//session_start();

$errors = array();
$name = $email = $pass = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
       $name = $_POST['username'];
    $email = $_POST['useremail'];
    //$pass = $_POST['password'];

    if (
        empty($name) || empty($email) //|| empty($pass)
    ) {
        header('location:form.php?error=required field');
    } else {
        if (isset($_POST['username'])) {

            $name = $_POST['username'];
        }
        if (isset($_POST['useremail'])) {

            $email = $_POST['useremail'];
        }
        //    if (isset($pass)) {

        //        $pass = $_POST['password'];
        //    }
        echo "<h2>Welcome " . $name . " </h2>";
        echo "<h2>You are now logged in</h2><a href='index.php'>Click here</a> ";
    }
} else {
    header('location:form.php?errors=Error!You must submit the form.');
}
