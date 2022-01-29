<?php
$errors = '';
$success = '';
$formdata = '';
if (isset($_GET['errors'])) {
    $errors = unserialize($_GET['errors']);
}
if (isset($_GET['success'])) {
    $success = unserialize($_GET['success']);
}
if (isset($_GET['formdata'])) {
    $formdata = unserialize($_GET['formdata']);
}

?>
<html>

<head></head>

<body>
    <h5>
        <?php
        if (isset($_GET['empty'])) {
            $empty = $_GET['empty'];
            echo "<span style='color:red; font-size:18px;'>" . $empty . "</span>";
        }
        if (isset($_GET['submission'])) {
            $notsubmit = $_GET['submission'];
            echo "<span style='color:red; font-size:18px; letter-spacing:2px;'>" . $notsubmit . "</span>";
        }
        ?>
    </h5>
    <form action="process_signup.php" method="post">
        Name: <input type="text" name='username' placeholder="atit kunwar" value="<?php if (isset($formdata['username'])) {
                                                                                        echo $formdata['username'];
                                                                                    } ?>">
        <?php
        if (isset($errors['name'])) {
            echo $errors['name'];
        } elseif (isset($success['name'])) {
            echo $success['name'];
        }
        ?>
        <br>
        email:
        <input type="email" name="useremail" placeholder="atitkunwar2015@gmail.com" value="<?php
                                                                                            if (isset($formdata['useremail']))
                                                                                                echo $formdata['useremail'];
                                                                                            ?>">
        <?php
        if (isset($errors['email'])) {
            echo $errors['email'];
        } elseif (isset($success['email'])) {
            echo $success['email'];
        }
        ?>
        <br>
        password: <input type="password" name="password" placeholder="123456...." value="<?php
                                                                                            if (isset($formdata['password']))
                                                                                                echo $formdata['password'];
                                                                                            ?>">
        <?php
        if (isset($errors['password'])) {
            echo $errors['password'];
        } elseif (isset($success['password'])) {
            echo $success['password'];
        }        ?>
        <br>
        Re-password: <input type="password" name="repassword" value="<?php
                                                                        if (isset($formdata['repassword']))
                                                                            echo $formdata['repassword'];
                                                                        ?>">
        <?php
        if (isset($errors['password'])) {
            echo $errors['password'];
        } elseif (isset($success['password'])) {
            echo $success['password'];
        } ?>
        <br>
        <input type="submit" value="submit">
    </form>
    <style>
        * {
            margin: 5px;
            font-size: 24px;
        }
    </style>
</body>

</html>