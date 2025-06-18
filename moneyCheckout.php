<?php

include 'connect.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

if (isset($_POST['order_btn'])) {
    echo "<script>alert('Successfully Money Donated !! Thank you for join with our Donation Fund!!')</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkout</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/checkoutNew.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            margin: 0;
            padding-top: 70px;
            /* Adjust to prevent content from hiding behind the navbar */
        }

        .home-nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 10%;
            background-color: #fff;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            padding: 1vw 8vw;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.15);
            z-index: 1000;
        }

        .home-nav img {
            width: 100px;
            cursor: pointer;
        }

        .home-nav .navigation ul {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .home-nav .navigation ul li {
            list-style: none;
            margin-left: 35px;
        }

        .home-nav .navigation ul li a {
            text-decoration: none;
            color: #1B515E;
            font-size: 16px;
            font-weight: 600;
            transition: 0.3s ease;
        }

        .home-nav .navigation ul li a:hover {
            color: #F47920;
        }

        .heading {
            margin-top: 100px;
        }
    </style>

</head>

<body>

    </head>

    <body>


    <!--navigation bar -->
    <nav class="home-nav">
        <div class="nav-logo">
            <img src="images/logo1.png" width="50" height="50" alt="NutriConnect_logo">
            NutriConnect
        </div>
        <div class="navigation">
            <ul>
                <li><a href="Home.html">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="treatment.php">Treatments</a></li>
                <li><a href="donation.php">Food Donate</a></li>
                <li><a href="money.php">Money Donate</a></li>
                <li><a href="menu.php">Order</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="profile.php"><i class="fa-solid fa-circle-user fa-2x"></i></a></li>
            </ul>
        </div>
    </nav>


        <div class="heading">
            <h3>Money Checkout</h3>
        </div>


        <div class="container">

            <form action="" method="post">

                <div class="row">

                    <div class="col">

                        <h3 class="title">Payment Details</h3>

                        <div class="inputBox">
                            <span>Cards Accepted :</span>
                            <img src="images/card_img.png" alt="">
                        </div>
                        <div class="inputBox">
                            <span>Name on Card :</span>
                            <input type="text" name="cname" placeholder="John Perera">
                        </div>
                        <div class="inputBox">
                            <span>Credit Card Number :</span>
                            <input type="text" name="method" placeholder="2222 3333 4444 5555">
                        </div>
                        <div class="inputBox">
                            <span>Expire Month :</span>
                            <select name="month">
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                        </div>

                        <div class="inputBox">
                            <span>Expire Year :</span>
                            <select name="year">
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                                <option value="2028">2028</option>
                            </select>
                            <!-- <input type="text" name="cvv" placeholder="123"> -->

                        </div>
                        <div class="inputBox">
                            <span>CVV :</span>
                            <input type="text" name="cvv" placeholder="123">
                        </div>

                    </div>

                </div>

                <input type="submit" value="Pay Now" class="submit-btn" name="order_btn"
                    onclick="return confirm('Do you need to confirm Donation?');">

            </form>

        </div>


        <!-- footer -->
        <section class="footer">

            <div class="box-container">

                <div class="box">
                    <h3>Follow Us On :</h3>
                    <div class="share">
                        <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                        <a href="https://twitter.com/login" class="fab fa-twitter"></a>
                        <a href="https://www.instagram.com/accounts/login/" class="fab fa-instagram"></a>
                        <a href="https://www.linkedin.com/login" class="fab fa-linkedin"></a>
                    </div>
                </div>

                <div class="box">
                    <h3>Contact Info</h3>
                    <a href="#" class="links"> <i class="fas fa-phone"></i> +94 77 656 6326</a>
                    <a href="#" class="links"> <i class="fas fa-phone"></i> +94 77 274 5029 </a>
                    <a href="#" class="links"> <i class="fas fa-envelope"></i></a>
                    <a href="mailto:vishadisr@gmail.com" class="links"> vishadisr@gmail.com </a>
                    <a href="mailto:mayumishehara2601@gmail.com" class="links"> mayumishehara2601@gmail.com </a>
                    <a href="mailto:hirunilanka@gmail.com" class="links"> hirunilanka@gmail.com </a>
                    <a href="mailto:heshansiriwardhana@gmail.com" class="links"> heshansiriwardhana@gmail.com </a>
                    <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Colombo, Sri Lanka</a>
                </div>

                <div class="box">
                    <h3>Quick Links</h3>
                    <a href="home.php" class="links"> <i class="fas fa-arrow-right"></i> Home </a>
                    <a href="donation.php" class="links"> <i class="fas fa-arrow-right"></i> Donation </a>
                    <a href="menu.php" class="links"> <i class="fas fa-arrow-right"></i> Order </a>
                    <a href="treatment.php" class="links"> <i class="fas fa-arrow-right"></i> Treatment </a>
                    <a href="contact.php" class="links"> <i class="fas fa-arrow-right"></i> Contact Us </a>
                </div>

                <div class="box">
                    <h3>Newsletter</h3>
                    <p>Subscribe for latest updates</p>
                    <input type="email" placeholder="Your Email" class="email">
                    <input type="submit" value="Subscribe" class="btn">
                    <img src="images/payment.png" class="payment-img" alt="Payment Methods">
                </div>

            </div>

            <div class="credit">&copy;2025 Created by <span> Team Four Fronts </span> | All Rights Reserved </div>

        </section>

        <!-- custom js file link  -->
        <script src="js/script.js"></script>

    </body>

</html>