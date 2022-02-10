<?php //adding to cart
if (isset($_POST['addCart'])) {
    session_start();
    if (isset($_SESSION['cart'])) {
        $count = count($_SESSION['cart']);
        $_SESSION['cart'][$count] = array(
            "name" => $_POST['bookname'],
            "price" => $_POST['price'],
            'quantity' => $_POST['quantity']
        );
    } else {
        $_SESSION['cart'][0] = array(
            "name" => $_POST['bookname'],
            "price" => $_POST['price'],
            'quantity' => $_POST['quantity']
        );
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>
    <!--bodycontainer-->
    <div class="container">
        <!--header-->
        <?php require_once('format/header.php') ?>
        <!--Holder-->
        <div class="mainx" >
            <!--quotes-->
            <div class="whitespace">
                <p style="text-align: center; font-size:32px; margin:0px 100px ; "> <q> A book is a version of the
                        world. If
                        you
                        do not like it, ignore it; or offer your own version in return.
                    </q>
                </p>
            </div>
            <!--container for books-->
            <div class="main"><span class="categories">New Arrivals </span><br>
                <div class="books" style="display: flex;">
                    <?php
                    $con = mysqli_connect("localhost", "root", "");
                    mysqli_select_db($con, "shopping cart");
                    $query = "SELECT  `id`,`name`, `image`, `price`, `discount` FROM `product items` order by id ASC ";
                    $queryfire = mysqli_query($con, $query);
                    $num = mysqli_num_rows($queryfire);
                    if ($num > 0) {
                        while ($product = mysqli_fetch_array($queryfire)) {
                    ?>
                            <!--ggetting data from databases-->
                            <div class="cover">

                                <form action="" method="POST">
                                    <img src="<?php echo $product['image']; ?>" alt="" srcset="" name=image>
                                    <div class="info" style="text-align: center;">
                                        <h4><?php echo $product['name']; ?></h4>
                                        <h5>Price : <?php echo $product['price']; ?></h5>
                                        <p>Discount : <?php echo $product['discount']; ?> </p>
                                        <input type="hidden" name="bookname" value="<?php echo $product['name']; ?>">
                                        <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
                                        <input type="number" name="quantity" value="1">
                                        <button type="submit" name="addCart">Add to cart</button>
                                    </div>
                                </form>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <!--quotes-->
            <div class="whitespace">

                <p style="text-align: center; font-size:32px; margin:0px 100px ; "> <q>That’s the thing about books.
                        They let you travel without moving your feet.</q>
                </p>
            </div>

            <!--container for books-->
            <div class="main"><span class="categories"> Novels </span><br>

                <div class="books" style="display: flex;">
                    <?php
                    $con = mysqli_connect("localhost", "root", "");
                    mysqli_select_db($con, "shopping cart");
                    $query = "SELECT  `id`,`name`, `image`, `price`, `discount` FROM `product items` order by id ASC ";
                    $queryfire = mysqli_query($con, $query);
                    $num = mysqli_num_rows($queryfire);
                    if ($num > 0) {
                        while ($product = mysqli_fetch_array($queryfire)) {
                    ?>
                            <div class="cover">
                                <!--getting data info from databases-->
                                <form action="" method="POST">
                                    <img src="<?php echo $product['image']; ?>" alt="" srcset="" name=image>
                                    <div class="info" style="text-align: center;">
                                        <h4><?php echo $product['name']; ?></h4>
                                        <h5>Price : <?php echo $product['price']; ?></h5>
                                        <p>Discount : <?php echo $product['discount']; ?> </p>
                                        <input type="hidden" name="bookname" value="<?php echo $product['name']; ?>">
                                        <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
                                        <input type="number" name="quantity" value="1">
                                        <button type="submit" name="addCart">Add to cart</button>
                                    </div>
                                </form>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--footer-->
    <?php require_once('format/footer.php') ?>

</body>

</html>