<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = array();
    $success = array();
    $name = $_POST['username'];
    $email = $_POST['useremail'];
    $pass = $_POST['password'];
    $repass = $_POST['repassword'];
    if (empty($name) || empty($email) || empty($pass)) {
        header('location:signup.php?empty=* marked field should be filled.');
    } else {
        if (!preg_match('/^[A-Za-z]+\s[A-Za-z]+(\s[A-Za-z]+)?$/', $name)) {
            $errors['name'] = "Invalid Pattern";
        } else {
            $success['name'] = 'sucess';
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Invalid Pattern";
        } else {
            $success['email'] = "sucess";
        }
        if (strlen($pass) < 6) {
            $errors['password'] = "invalid pattern";
        } elseif (!strcmp($pass, $repass) == 0) {
            $errors['password'] = "password not matched";
        } else {
            $success['password'] = 'password matched';
        }
    }
    if (count($errors) == 0) {
        echo $name . '<br>' . $email;
    } else {
        header('location:signup.php?errors=' . serialize($errors) . '&success=' . serialize($success) . '&formdata=' . serialize($_POST));
    }
} else {
    header('location:signup.php?submission=Needs to be submitted first');
}
