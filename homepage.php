<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="footer.css">
    <title>Homepage</title>
</head>

<body>

    <!--------------------------------------------navbar-------------------------------------------->

    <div class="navbar">
        <div class="logo">
            <a href="homepage.php"><img src="images/logo1.png" alt="" width="100px"></a>
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
                <li><a href="about3.php" title="About">About</a></li>
                <li><a href="contact.php" title="contact us">Contact Us</a></li>
                <li>
                    <div class="dropdown">
                        <span>Account</span>
                        <div class="dropdown_content">
                            <p><a href="costumerLogin.php">Login</a></p>
                            <p><a href="costumerSignUp.php">SignUp</a></p>
                            <p><a href="sellerSignup.php">Register as Seller</a></p>
                        </div>
                    </div>
                </li>
                <li><a href="#">My Cart</a></li>
            </ul>
        </nav>
    </div>


    <!-------------------------------------------------body content------------------------------------------------------------>
    <!--------------------carousel--------------------->
    <div class="container2">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/cola.jpg" class="d-block w-100" alt="..." height="300px">
                </div>
                <div class="carousel-item">
                    <img src="images/s.jpg" class="d-block w-100" alt="..." height="300px">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>



    <!---------------------------------------------------------homepage Product items------------------------------------------>
    <div class="container2">
        <h3>Today's Deals</h3>
        <hr>
        <div class="row">
            <div class="col-123">
                <p><a href="#"><img src="images/channa-dal.webp" alt="">
                        channa dal<br>
                        MRP: Rs 120</a></p>
            </div>
            <div class="col-123">
                <p><a href="#"><img src="images/chips.webp" alt="">
                        Lays chips<br>
                        MRP: Rs 10</a></p>
            </div>
            <div class="col-123">
                <p><a href="#"><img src="images/oats.webp" alt="">
                        Quakes Oats<br>
                        MRP: Rs 240</a></p>
            </div>
            <div class="col-123">
                <p><a href="#"><img src="images/oil.webp" alt="">
                        NatureFresh Oil<br>
                        MRP: Rs 120</a></p>
            </div>
        </div>

    </div>

    <div class="container2">
        <h3>Drinks and Beverages</h3>
        <hr>
        <div class="row">
            <div class="col-124">
                <p><a href="#"><img src="images/coffee.webp" alt=""></a></p>
            </div>
            <div class="col-124">
                <p><a href="#"><img src="images/tea.webp" alt=""></a></p>
            </div>
            <div class="col-124">
                <p><a href="#"><img src="images/healthdrinks.webp" alt=""></a></p>
            </div>
            <div class="col-124">
                <p><a href="#"><img src="images/juices.webp" alt=""></a></p>
            </div>
        </div>

    </div>

    <div class="container2">
        <h3>Snacks Store-upto 40% off</h3>
        <hr>
        <div class="row">
            <div class="col-11111">
                <p><a href="#"><img src="images/chip.webp" alt=""></a></p>
            </div>
            <div class="col-22222">
                <div class="row">
                    <div class="col-33333">
                        <p><a href="#"><img src="images/chocolate.webp" alt=""></a></p>
                    </div>
                    <div class="col-33333">
                        <p><a href="#"><img src="images/snacks.webp" alt=""></a></p>
                    </div>
                    <div class="row">
                        <div class="col-55555">
                            <p><a href="#"><img src="images/sweets.webp" alt=""></a></p>
                        </div>
                        <div class="col-55555">
                            <p><a href="#"><img src="images/biscuit.webp" alt=""></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>













    <!--------------------carousel--------------------->
    <div class="container2">
        <div id="carouselExampleControls" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/s.jpg" class="d-block w-100" alt="..." height="300px">
                </div>
                <div class="carousel-item">
                    <img src="images/cola.jpg" class="d-block w-100" alt="..." height="300px">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>



    <?php require "footermain.php" ?>







    <!----------------------------------------  jquery first then bootstrap js--------------------------------------------->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>