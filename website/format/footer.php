<div class="footer">
    <div class="footer-content">
        <div class="sample aj" >
            <p>chitta is an online Bookstore where we can buy popular books. chitta also do
                free delivery service
                inside kathmandu .For international delivery, U need to pay an extra charges. </p>
        </div>
        <style>

        </style>
        <div class="sample contact">
            <p><span> Contact </span><br>

                Phone:<a href="tel:+9842803777">9842803777</a><br>
                mail <a href="mailto:atitkunwar2015@gmail.com">atitkunwar2015@gmail.com</a>
                <br> kalanki -12,kathmandu
            </p>
        </div>
        <div class="sample footlinks">
            <p><span>Links</span><br>
                <a href="blog.html" style="color: cadetblue;">Blog</a><br>
                <a href="portfolio.cc" style="color: cadetblue;">Portfolio</a>
            </p>
        </div>
        <div class="sample">
            <p><span>Payment</span><br>
                <a href="http://" target="_blank" rel="noopener noreferrer">Khalti</a><br>
                <a href="http://" target="_blank" rel="noopener noreferrer">Esewa</a><br>
                <a href="">Paypal</a>
            </p>
        </div>
        <div class="sample help">
            <p><span>Help</span><br>
                <a href="About.html" style="color: cadetblue;">Contact Us</a><br>
                <a href="About.html" style="color: cadetblue;">About Us</a><br>
                <a href="privacy.html" style="color: cadetblue;">Privacy and Policy</a><br>
                <a href="terms.html" style="color: cadetblue;">Terms and Conditions</a>
            </p>
        </div>
    </div>
    <p id="connect" style=" color: cadetblue;background: rgb(1, 8, 73);text-align:center;">
        <span>Connect with us : </span>
        <span id="facebook"> <a href="http://facebook.com/9847392832" target="_blank"> <i class="fab fa-facebook-f"></i></a>
        </span>
        <span id="insta"> <a href=" http://instagram.com/atitkunwar" target="_blank"><i class="fab fa-instagram"></i></a>
        </span> <span id="twitter"> <a href=" http://twitter.com/atitkunwar2" target="_blank"> <i class="fab fa-twitter"></i></a>
        </span> <span id="github"> <a href="http://github.com/atitkunwar" target="_blank"> <i class="fab fa-github"></i></a>
        </span><br><br>
    </p>
    <p class="copy" style="padding: 10px; ">copyright&copy;atitkunwar</p>

</div>
<?php
$count = 0;
if (isset($_SESSION['cart'])) {
    $count = count($_SESSION['cart']);
}
?>
<button style="float:right;position:sticky;bottom:10px;padding:10px 5px; background:green;border-radius:25px;margin-bottom:-50px;"> <a href="cart.php" style="padding:10px 5px;font-weight:600; color:white;font-size:15px;">Cart<sup style=" color:red;">
            <?php echo $count; ?>
        </sup>
    </a></button>