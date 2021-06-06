<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--the link below having  href="favicon.ico" is used to put ICON on the TAB-->
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Document</title>
    <style>
    * {
        margin: 0;
        padding: 0;
    }

    footer {
        background-color: black;
        color: white;
    }

    .foot p {
        color: #c9c6c6;

    }

    .foot {
        margin-left: 40px;
    }

    .footertable td {
        float: right;
        margin-left:50px;
    }

    .btw {
        margin: 20px 10px;
    }

    ul li {
        list-style: none;
    }

    ul li a {
        text-decoration: none;
        color: #c9c6c6;
    }

    ul li a:hover {
        text-decoration: underline;
    }

    .copyright p {
        color: white;
        text-align: center;
    }
    </style>
</head>

<body>
    <footer>
        <div class="foot">
            <table class="footertable">
                <tr>
                    <td class="btw">
                        <h3>Download Our App</h3>
                        <p>Download App for Android device.</p>
                        <div class="images">
                            <a href="https://play.google.com/store"><img src="images/gplay2.png" width="100px"></a>
                            <a href="#"><img class="ios" src=""></a>
                        </div>
                    </td>
                    <td class="btw">
                        <h3>Connect With Us</h3>
                        <ul>
                            <li><a href="https://www.facebook.com/">Facebook</a></li>
                            <li><a href="https://www.instagram.com/">Instagram</a></li>
                            <li><a href="https://twitter.com/">Twitter</a></li>
                            <li><a href="https://www.youtube.com/">YouTube</a></li>
                        </ul>
                    </td>
                    <td class="btw">
                        <h3>Help</h3>
                        <ul>
                            <li><a href="homepage.php">Home</a></li>
                            <li><a href="about3.php">About</a></li>
                            <li><a href="contact.php">Contact us</a></li>
                            <li><a href="sellerSignup.php">Register as seller</a></li>
                        </ul>
                    </td>
                    <td class="btw">
                        <h3>Registerd Office</h3>
                        <p>Sitamarhi Institute of Technology<br>
                            Village - Janipur, P.S.- Nanpur,<br>
                            Dist - Sitamarhi-843333,<br>
                            Bihar, India
                        </p>
                    </td>
                </tr>
            </table>
        </div>
        <hr>
        <div class="copyright">
            <p>Copyright &copy; 2020 - GroceryStore.com<br>Designed by ProjectOne Group</p>
        </div>
    </footer>
</body>

</html>