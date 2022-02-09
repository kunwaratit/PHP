<html>

<head>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>
    <div class="navbar">
        <div class="logo">
            <img src="logo.png" alt="" srcset="" height="40px"><span> Chittha</span>
        </div>
        <ul class="links">
            <li><input type="search" placeholder="Search.."><i class="fas fa-search" style="color:red;"></i> </li>
            <li><a href="index.php">Home</a></li>

            <li><a href="#">Services</a></li>
            <li><a href="categories.php">Categories</a></li>
            <li><a href="contact.php">Contact</a></li>

            <?php
            $count = 0;
            if (isset($_SESSION['cart'])) {

                $count = count($_SESSION['cart']);
            }
            ?>
            <li><a href="cart.php">Cart<sup style="color:red;"><?php echo $count; ?> </sup>
                </a></li>
        </ul>
        <button type="menu" style="border-radius:25px; padding: 2px; margin:15px;"><i class="fas fa-user"></i></button>
    </div>

</body>

</html>