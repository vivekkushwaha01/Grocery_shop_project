<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--the link below having  href="favicon.ico" is used to put ICON on the TAB-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Contact-us</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-------------------------------------------------navbar------------------------------------------------------>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="homepage.php"><img src="images/logo1.png" width="100px"></a>
            </div>

            <nav>
                <ul>
                    <li>
                        <div class=boxbtn>
                            <input class="searchbox" type="search" placeholder="Search for products...">
                            <button class="searchbtn" type="submit">Search</button>
                        </div>
                    </li>
                    <li><a href="homepage.php" title="Home">Home</a></li>
                    <li><a href="about3.php" title="about">About</a></li>
                    <li><a href="contact.php" title="contact us">Contact Us</a></li>
                    <li>
                        <div class="dropdown">
                            <span>Account</span>
                            <div class="dropdown_content">
                                <p><a href="costumerLogin.php">Login</a></p>
                                <p><a href="CostumerSignUp.php">SignUp</a></p>
                                <p><a href="sellerSignup.php">Register as Seller</a></p>
                            </div>
                        </div>
                    </li>
                    <li><a href="#">My Cart</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--------------------------------------------------------------body----------------------------------------------------------->
    <div class="container2">
        <div class="contact1">

            <h2>Contact Us:</h2>
            <p>To reach our customer service team please email us at:<a
                    href="sitsitamarhi2016@gmail.com">sitsitamarhi2016@gmail.com</a></p>
            <hr>
            <h2>Office Address:</h2>
            <p>Sitamarhi Institute of Technology<br>
                Village - Janipur, P.S.- Nanpur,<br>
                Dist - Sitamarhi-843333,</br>
                Bihar, India</p>
            <hr>
            <p>Email-id:<a href="sitsitamarhi2016@gmail.com">sitsitamarhi2016@gmail.com</a></p>
            <hr>
            <p>To Reach us call us at:+91 9162752285</p>
        </div>
    </div>




    <!-----------------------------------------------------footer----------------------------------------------------->
    <?php require "footermain.php" ?>




</body>

</html>