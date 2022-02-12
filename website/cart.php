<?php
session_start();
//adding cart
if (isset($_POST['addCart'])) {
    if (isset($_SESSION['cart'])) {
        $count = count($_SESSION['cart']);
        $_SESSION['cart'][$count] = array(
            "image" => $_POST['image'],
            "name" => $_POST['bookname'],
            "price" => $_POST['price'],
            'quantity' => $_POST['quantity']
        );
    } else {
        $_SESSION['cart'][0] = array(
            "image" => $_POST['image'],
            "name" => $_POST['bookname'],
            "price" => $_POST['price'],
            'quantity' => $_POST['quantity']
        );
    }
}
?>
<!--html-->
<html>

<head>
</head>

<body>
    <?php require_once('format/header.php') ?>
    <div style="display:flex;justify-content:center; flex-wrap:wrap;">
        <div>




            <!--styling-->
            <style>
                table {
                    display: block;
                    font-size: 20px;
                    width: 100%;
                    line-height: 40px;
                }

                table td {

                    padding: 0px 15px;

                }

                table .row td {
                    height: 100px;
                    border-bottom: 2px solid red;
                    text-align: left;
                }

                h1 {
                    text-align: center;
                }
            </style>
            <h1>My CART</h1>
            <table cellspacing="0px">

                <tr style="text-align:center;color:white; background:orange;">
                    <td>Image</td>
                    <td>Name</td>
                    <td>Quantity</td>
                    <td>Price</td>
                    <td>Remove</td>

                </tr>
                <?php
                $total = 0;
                if (isset($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $key => $value) {

                        $total = $total + $value['price'] * $value['quantity'];
                        echo    "<tr class='row' >   
                                     <td>  $value[image] </td>
                                    <td>  $value[name] </td>
                                    <td >  $value[quantity]  </td>
                                    <td>  $value[price] </td>
                                   <td>   Remove</td>
                                </tr>";
                    }
                }
                ?>
                <tr>
                    <td colspan="2">Total</td>
                    <td style="background-color: aquamarine;">Buy</td>
                    <td>
                        <?php echo $total;  ?>
                    </td>
                </tr>
            </table>
        </div>
        <div><button style=" background-color:#2d2929d6;">
                <a href="index.php" style="text-decoration:none;color: white;">X</a></button>
        </div>
    </div>
    <div style="height:200px"></div>
    <!--footer-->
    <?php require_once('format/footer.php') ?>
</body>

</html>