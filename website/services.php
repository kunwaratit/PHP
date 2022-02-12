<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <?php require_once('format/header.php') ?>
    <div class="holder">
        <div class="heading">
            <h2>MY SERVICES</h2>
            <p>
            <p>chitta is an online Bookstore where we can buy popular books. chitta also do
                free delivery service
                inside kathmandu .For international delivery, U need to pay an extra charges. </p>
            </p>
        </div>
        <div>
            <h2>
                Payment Methods
            </h2>
            <div id="payment">

                <a href=" http://" target="_blank" rel="noopener noreferrer">Khalti</a>
                <a href="http://" target="_blank" rel="noopener noreferrer">Esewa</a>
                <a href="">Paypal</a>
                </p>
            </div>
        </div>
        <div>
            <h2>Contact</h2>
            Phone:<a href="tel:+9842803777">9842803777</a><br>
            mail <a href="mailto:atitkunwar2015@gmail.com">atitkunwar2015@gmail.com</a>
            <br> kalanki -12,kathmandu
        </div>

    </div>
    <style>
        div {
            text-align: center;
        }

        #payment a {
            margin: 1%;
        }

        #payment {
            display: flex;

            justify-content: center;
        }

        .holder {
            margin: 2%;
        }

        h2 {
            text-align: center;
        }
    </style>
    <?php require_once('format/footer.php') ?>
</body>

</html>