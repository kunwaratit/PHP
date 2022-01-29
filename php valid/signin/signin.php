<html>

<head></head>

<body>
    <form action="./process_signin.php" method="post">
        name :<input type="text" name="username">
        <?php
        if (isset($_GET['error'])) {
            $nameerror = $_GET['error'];
            echo "<span style='color:red;'>*" . $nameerror;
            echo "</span>";
        }
        ?><br>
        email :<input type="text" name="useremail">
        <?php
        if (isset($_GET['error'])) {
            $emailerror = $_GET['error'];
            echo "<span style='color:red;'>*"  . $emailerror;
            echo "</span>";
        }
        ?><br>
        password <input type="text" name="password">
        <?php
        if (isset($_GET['error'])) {
            $passerror = $_GET['error'];
            echo "<span style='color:red;'>*" . $passerror;
            echo "</span>";
        }
        ?><br>
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