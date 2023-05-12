<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Payment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="common.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="payment.css">
    <link rel="stylesheet" href="media_queries.css">
</head>
<body>
    <header>
        <div id="logo">
            <img src="logo.png" alt="logo">
        </div>

        <ul class="nav">
            <li><a href="index.html">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="multimedia.html">MULTIMEDIA</a></li>
            <li><a href="product.html">PRODUCT</a></li>
            <li>
                <a href="#">PAGES</a>
                <ul class="dropdown">
                    <li><a href="login.html">Login</a></li>
                    <li><a href="payment.html">Payment</a></li>
                    <li><a href="register.html">Sign Up</a></li>
                    <li><a href="login.html">Logout</a></li>
                </ul>
            </li>
            <li><a href="contact.html">CONTACT</a></li>
        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </header>
    <div class="payment-card">
    <h1>Get all phones at 15% Discount!</h1>  
    </div>
    <div class="payment-content">
        <h3>Get all phones at 15% Discount!</h3> 
        <form action="">
            <div class="payment-address">
                <h2>Billing Address</h2>
                <label for="fullname">Full Name</label> <br>
                <input type="text" name="fullname" placeholder="Enter Your Name" required> <br><br>
                <label for="email">Email</label><br>
                <input type="text" name="email" placeholder="Enter Your Email" required><br><br>
                <label for="number">Phone Number</label><br>
                <input type="number" name="number" placeholder="Your Phone Number"> <br><br>
                <label for="country">Country</label><br>
                <input type="text" name="country" placeholder="Enter Your Country"><br><br>
                <label for="zip">Zip Code</label><br>
                <input type="number" name="zip" placeholder="Enter Zip Code">
            </div>
            <div class="payment-type">
                <h2>Payment</h2>
                <div class="accepted-cards">
                    <i class="fab fa-cc-visa" style="color:navy;"></i>
        
                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                </div>
                <label for="name">Name</label><br>
                <input type="text" name="name" placeholder="Enter Your Name"><br><br>
                <label for="number">Card Number</label><br>
                <input type="number" name="number" placeholder="Enter Card Number"><br><br>
                <label for="month">Expiration Date</label> <br>
                <input type="month"><br><br>
                <label for="cv">CVV</label><br>
                <input type="text" name="cvv"> <br><br>
                <button type="submit" id="btn">Send</button>
            </div>
        </form>
    </div>
     
    <footer class="footer-wrapper">
        <div class="footer-column">
            <h4>VISIT OUR SHOWROOM</h4>
            <a href="gallery.html"> <img src="showroom.jpg" alt="Img" height="230" width="350"></a>
            <p>
                KK216 Street,Niboye Sector <br>
                Kigali-RWANDA, P0 B0X: 10078<br>
                <a href="index.html">info@jtechmobileshop.com</a>
            </p>
        </div>

        <div class="footer-column">
            <h4>Contact Us</h4>
            Phone: +250787405492<br>
            Whatsapp: +250787405492<br>
            Email: jonahmensonit@gmail.com
        </div>

        <div class="footer-column">
            <h4>Follow us on Social Media</h4>
            <a href="https://www.facebook.com/" target="_blank"><img src="fB.png" alt="" /></a>
            <a href="https://www.linkedin.com/" target="_blank"><img src="linkedin.png" alt="" /></a>
            <a href="https://twitter.com/" target="_blank"><img src="twitter.png" alt="" /></a>
            <a href="https://www.instagram.com/" target="_blank"><img src="instagram.png"  alt=""></a>
            <a href="https://web.whatsapp.com/" target="_blank"><img src="whatsapp.png" alt=""></a>
            <a href="https://web.telegram.org/z/" target="_blank"><img src="telegram.png" alt=""></a>
        </div>
    </footer>
    <div class="footnote">
        <div class="copyright">
            &copy; All Rights Reserved! By Group Four (4), <br> Human-Computer Interaction, UNILAK-KIGALI 2023!
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>