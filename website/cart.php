<?php
session_start();
if (isset($_POST['addCart'])) {
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

<html>

<head>

</head>

<body>
    <?php require_once('format/header.php') ?>
    <div style="display:flex;justify-content:center;">
        <div>
            <style>
                table {
                    font-size: 20px;
                    width: 500px;
                    line-height: 40px;
                }

                table td {
                    border-bottom: 2px solid black;
                }
            </style>
            <table>

                <tr style="text-align:center;color:white; background:black;">
                    <td>Items</td>
                    <td>Price</td>
                    <td>Quantity</td>

                </tr>
                <?php
                $total = 0;
                if (isset($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $key => $value) {
                        $total = $total + $value['price'] * $value['quantity'];
                        echo "<tr><td>  $value[name] </td>
                <td>  $value[price] </td>
                <td >  $value[quantity]  </td>
                
               </tr>";
                    }
                }


                ?>
                <tr>
                    <td colspan="2">Total</td>
                    <td><?php echo $total;  ?></td>
                </tr>
            </table>
        </div>
        <div><button style=" background-color:#2d2929d6;">
                <a href="index.php" style="text-decoration:none;color: white;">X</a></button>
        </div>
    </div>
    <?php require_once('format/footer.php') ?>
</body>


</html>