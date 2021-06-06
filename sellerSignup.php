<?php
 $successAlert=false;
 $errorAlert=false;
 if($_SERVER["REQUEST_METHOD"]=="POST"){
    include "DATABASEconnect.php";
    $yourname=$_POST["Yourname"];
    $shopname=$_POST["Shopname"];
    $password=$_POST["Password"];
    $cpassword=$_POST["Cpassword"];

    $phone=$_POST["Phone"];
    $shopid=$_POST["Shopid"];
    $city=$_POST["City"];
    $pin=$_POST["Pin"];
    $address=$_POST["Address"];
    if($password==$cpassword){
        $sql="insert into `shop_reg`(`YourName`,`ShopName`,`Password`,`Phone`,`Shopid`,`City`,`Pin`,`Address`,`DateTime`) values('$yourname','$shopname','$password','$phone','$shopid','$city','$pin','$address', current_timestamp())";
        $result=mysqli_query($conn,$sql);
    if($result){
        $successAlert=true;
    }
    
    }
    else{
        $errorAlert=true;
    }
 }


?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="about.css">

      <!--the link below having  href="favicon.ico" is used to put ICON on the TAB-->
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Seller SignUp</title>

    <style>
    .formcontainer {
        border: 2px solid red;
        width: 70%;
        margin: 0 auto;
        /*Alings the box to center*/
        padding: 16px;
        border-radius: 10px 10px;
        background-color: white;
        margin-top: 15px;
        margin-bottom: 15px;
    }

    .formcontainer:hover {
        box-shadow: 8px 8px gray;
    }

    h2 {
        text-align: center;
    }

    .box1 {
        width: 250px;
        margin: 10px 10px;
        /*border: 1px solid black;*/
    }

    .box1:hover {
        border: 2px solid blue;
    }

    #submit {
        padding: 2px 2px;
        width: 150px;
        margin-left: 300px;
    }

    #submit:hover {
        background-color: #21b1ff;
        color: white;
        cursor: pointer;
        border-radius: 5px;
        border: 2px solid black;
    }
    </style>
</head>

<body>

    <?php
if($successAlert){
echo'
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your Seller account is created successfully,now you can Login..
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';}
?>

    <?php
if($errorAlert){
echo'
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Failed!</strong> Password and confirm password should be same.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';}
?>

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
                            <p><a href="costumerSignUp.php">SignUp</a></p>
                            <p><a href="sellerSignup.php">Register as Seller</a></p>
                        </div>
                    </div>
                </li>
                <li><a href="#">My Cart</a></li>
            </ul>
        </nav>
    </div>






    <!--------------------------------------------Form--------------------------------------------------------------------->
    <form action="sellerSignup.php" method="post">
        <div class="formcontainer">
            <h2>Seller Signup</h2>
            <table>
                <tr>
                    <td>Your name:</td>
                    <td><input type="text" class="box1" name="Yourname"></td>
                    <td>Shop name:</td>
                    <td><input type="text" class="box1" name="Shopname" required></td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td><input type="password" class="box1" name="Password"></td>
                    <td>Confirm Password:</td>
                    <td><input type="password" class="box1" name="Cpassword"></td>
                </tr>

                <tr>
                    <td>Phone:</td>
                    <td><input type="text" class="box1" name="Phone" required></td>
                    <td>Shop id:</td>
                    <td><input type="text" class="box1" name="Shopid"></td>
                </tr>

                <tr>
                    <td>City/Village:</td>
                    <td><input type="text" class="box1" name="City"></td>
                    <td>Pin:</td>
                    <td><input type="text" class="box1" name="Pin"></td>
                </tr>

                <tr>
                    <td>Shop Address:</td>
                    <td><textarea rows=5 cols=46 name="Address"></textarea></td>
                </tr>




            </table>
            <div><input type="submit" class="button" id="submit" value="submit"></div>

            <hr>
            <div id="click">
                <p>If already have account <a href="sellerLogin.php">Click Here</a> to login.</p>
            </div>

        </div>
    </form>

    <?php require "footermain.php" ?>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>