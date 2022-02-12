<html>

<head>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Chitta.com</title>
</head>

<body>
    <div class="navbar" style="display: block;">
        <div class="logo">

            <ul class="links">
                <li><a href="#"><img src="logo.png" alt="" srcset="" height="40px"><span> Chittha.com</span></a></li>
                <li><input type="search" placeholder="Search.." style="transform:translateY(5px); font-size:24px; width:100%;"></li>

            </ul>

        </div>
        <ul class="links nav" style="justify-content: center;">
            <li><a href="index.php">Home</a></li>

            <li id="categories">Categories</a>
                <ul class="categories-child">
                    <li> <a href="index.php#novels">Novels</a> </li>
                    <li>Children's</li>
                    <li>Historical</li>
                </ul>
                <style>
                    .nav li:hover {
                        background-color: rgb(102, 101, 101);
                    }

                    .categories-child {
                        display: none;
                        position: absolute;
                        background-color: white;
                    }

                    #categories:hover .categories-child {
                        display: block;
                    }
                </style>
            </li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="services.php">Services</a></li>

            <li id="login-btn"> <i class="fas fa-user" style="color:rgb(246, 190, 115);"><a href="form.php"> Login</a></i>

            </li>
            <li id="signup-btn"> <i class="fas fa-user" style="color:rgb(246, 190, 115);">
                    <!--<a href="signup/signup.php">-->Signup
                </i>
            </li>
        </ul>
    </div>

</body>

</html>