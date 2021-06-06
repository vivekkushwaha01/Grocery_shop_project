<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="about.css">

      <!--the link below having  href="favicon.ico" is used to put ICON on the TAB-->
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>About Us</title>
</head>

<body>
    <!-----------------------------------------------navbar-------------------------------------------------------------------->
   
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
   
    <!-----------------------------------------------------body content---------------------------------------------------------->
    <div class="container2">
        <h1>The GroceryShop Story</h1>
        <div class="row">
            <div class="col-6">
                <h3>What is GroceryShop.com ?</h3>
                <p> GroceryShop.com (Innovative Retail Concepts Private Limited) is India’s largest online food and
                    grocery
                    store. With over 18,000 products and over a 1000 brands in our catalogue you will find everything
                    you
                    are looking for. Right from fresh Fruits and Vegetables, Rice and Dals, Spices and Seasonings to
                    Packaged products, Beverages, Personal care products– we have it all.
                    Choose from a wide range of options in every category, exclusively handpicked to help you find the
                    best
                    quality available at the lowest prices. Select a time slot for delivery and your order will be
                    delivered
                    right to your doorstep, anywhere in Muzaffarpur, Darbhanga, Sitamarhi,


                    Patna. You can pay online using your
                    by cash on delivery.
                    We guarantee on time delivery, and the best quality!
                </p>
            </div>
            <div class="col-7">
                <img src="images/vegpic.webp">
            </div>
        </div>
    </div>




    <div class="container2">
        <div class="row2">
            <div class="col-8">
                <img src="images/shopping.webp">
            </div>
            <div class="col-9">
                <h3>Why Should I Use GroceryShop ?</h3>
                <p>GroceryShop.com allows you to walk away from the drudgery of grocery shopping and welcome an easy
                    relaxed way of browsing and shopping for groceries. Discover new products and shop for all your food
                    and grocery needs from the comfort of your home or office. No more getting stuck in traffic jams,
                    paying for parking, standing in long queues and carrying heavy bags – get everything you need, when
                    you need, right at your doorstep. Food shopping online is now easy as every product on your monthly
                    shopping list, is now available online at GroceryShop.com, India’s best online grocery store.
                </p>
            </div>
        </div>
    </div>




    <div class="container2">
        <h2>How do i Order ?</h2>
        <div class="row3">
            <div class="col-10">
                <p><b>1. Browse GroceryShop.com for products</b></p>
                <img src="images/lap1.webp" alt="">
            </div>
            <div class="col-10">
                <p><b>2. Add item to your Cart</b></p>
                <img src="images/lap2.webp" alt="">
            </div>
            <hr>
            <div class="row5">
                <div class="col-11">
                    <p><b>3. Choose a convenient delivery time</b></p>
                    <table id="timetable">
                        <tr>
                            <th>Time Slots</th>
                        </tr>
                        <tr>
                            <td>7:00 am - 8:00 am</td>
                        </tr>
                        <tr>
                            <td>12:00 am - 1:00 pm</td>
                        </tr>
                        <tr>
                            <td>5:00 pm - 7:00 pm</td>
                        </tr>
                        <tr>
                            <td>8:00 pm - 9:00 pm</td>
                        </tr>
                    </table>
                </div>
                <div class="col-11">
                    <p><b>4. Pay!<br> Right now,we are only accepting
                            <br> Cash on Delivery(COD)<br>Sorry! For the Inconvenience.</b></p>
                </div>
            </div>
        </div>
    </div>






    <div class="container2">
        <div class="row6">
            <h1>Our Aim.</h1>
            <p style=" border:2px solid red;max-width:500px;margin:auto;margin-bottom:4px;">To enhance the sell of small
                shopkepers by upgrading them.<br>To provide world class purchase experience
                to costumers.</p>
        </div>
    </div>





    <!-----------------------------------------------------footer----------------------------------------------------->
    <?php require "footermain.php" ?>










</body>

</html>