<html>

<head></head>

<body>


    <?php require_once('format/header.php') ?>

    <div id="login">
        <form action="getin.php" method="post">
            <div class="formContent">

                <div id="form" style="display:block;">
                    <h2>Provide Your Information</h2>
                    <p id="val">
                        Username<input type="text" name="username" placeholder="Name">
                        <?php
                        if (isset($_GET['error'])) {
                            $nameerror = $_GET['error'];
                            echo "<span style='color:black;'>*" . $nameerror;
                            echo "</span>";
                        }
                        ?><br>
                        Email <input type="email" name="useremail" style="margin-left:45px;" placeholder="Email@abc.com">
                        <?php
                      
                        if (isset($_GET['error'])) {
                            $emailerror = $_GET['error'];
                            echo "<span style='color:black;'>*"  . $emailerror;
                            echo "</span>";
                        }
                        ?><br>
                        
                        <!-- Password <input type="text" name="password" placeholder="abc@1">
                        <? /*php 
                        if (isset($_GET['error'])) {
                            $passerror = $_GET['error'];
                            echo "<span style='color:black;'>*" . $passerror;
                            echo "</span>";
                        }
                      */ 
                       ?>
                        --><br>
                        <input type="submit" value="submit">
                    </p>
                </div>
                <div>
                    <!--<button type="button" id="hide" style="padding: 5px;">X<button>-->
                </div>
            </div>
        </form>
    </div>


    <?php require_once('format/footer.php') ?>
    <style>
        /*   #login {
            display: none;
            position: fixed;
            justify-content: center;
            margin-left: 25%;
            margin-top: 2%;
            background: rgba(1, 8, 73, 0.623);
            padding: 10%;
            border-radius: 20px;
        }*/



        #form {
            display: block;
            background: rgba(1, 8, 73, 0.623);
            margin: 5%;
            padding: 5%;
            border-radius: 20px;
        }

        #form h2 {
            text-decoration: underline;
        }


        .formContent {
            display: flex;
            justify-content: center;
            color: white;
            font-size: 24px;

        }
    </style>
    <!-- <script>
        document.getElementById('login-btn').addEventListener('click', show);
        document.getElementById('hide').addEventListener('click', hide);

        function show() {
            document.getElementById('login').style.display = "flex";

        }

        function hide() {
            document.getElementById('login').style.display = "none";
        }
    </script>-->
</body>

</html>