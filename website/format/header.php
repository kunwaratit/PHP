<html>

<head>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <div class="navbar" style="display: block;">
        <div class="logo" style="display: flex; justify-content:center;">
            <img src="logo.png" alt="" srcset="" height="40px"><span> Chittha</span>
            <ul class="links">
                <li><input type="search" placeholder="Search.." style="font-size:24px; width:500px;"><i
                        class="fas fa-search" style="color:red;"></i> </li>
                <?php
                $count = 0;
                if (isset($_SESSION['cart'])) {
                    $count = count($_SESSION['cart']);
                }
                ?>
                <li><a href="cart.php">Cart<sup style="color:red;">
                            <?php echo $count; ?>
                        </sup>
                    </a></li>
            </ul>
            <button id="login-btn" type=" menu" style=" border-radius:25px; padding: 2px; margin:15px;">
                <i class="fas fa-user" style="color:rgb(246, 190, 115);"> Login</i>
            </button>
            <button id="signup-btn" type=" menu" style=" border-radius:25px; padding: 2px; margin:15px;">
                <i class="fas fa-user" style="color:rgb(246, 190, 115);"> Signup</i>
            </button>
        </div>
        <ul class="links" style="justify-content: center;">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="categories.php">Categories</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
    <?php require_once('login/form.php') ?>
</body>

</html>