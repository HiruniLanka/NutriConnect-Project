<?php

include 'connect.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

if (isset($_POST['send'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $amount = $_POST['amount'];
    $method = mysqli_real_escape_string($conn, $_POST['method']);

    $select_message = mysqli_query($conn, "SELECT * FROM `money_donate` WHERE name = '$name' AND email = '$email' AND number = '$number' AND amount = '$amount' AND method = '$method'") or die('query failed');

    if (mysqli_num_rows($select_message) > 0) {
        $message[] = 'Sent Already!';
    } else {
        mysqli_query($conn, "INSERT INTO `money_donate`(user_id, name, email, number,amount, method) VALUES('$user_id', '$name', '$email', '$number', '$amount','$method')") or die('query failed');
        $message[] = ' Sent Successfully!';
    }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutri Connect </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/4801a7dc21.js" crossorigin="anonymous"></script>


    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/money2.css">
    <link rel="stylesheet" href="css/donateschool2.css">
    <link rel="stylesheet" href="css/checkoutNew2.css">

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
    </style>

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
                <li><a href="home.php">Home</a></li>
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

    <!-- search form  -->

    <form action="" id="search-form">
        <input type="search" placeholder="Search Here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

    </section>


    <div class="sch-container">

        <div class="sch-box-container">

            <div class="sch-box">
                <h3>Rs. 100</h3>
                <a href="moneyCheckout.php" class="sch-btn">Donate Now</a>
            </div>

            <div class="sch-box">
                <h3>Rs. 500</h3>
                <a href="moneyCheckout.php" class="sch-btn">Donate Now</a>
            </div>

            <div class="sch-box">
                <h3>Rs. 1000</h3>
                <a href="moneyCheckout.php" class="sch-btn">Donate Now</a>
            </div>

            <div class="sch-box">
                <h3>Rs. 2000</h3>
                <a href="moneyCheckout.php" class="sch-btn">Donate Now</a>
            </div>

            <div class="sch-box">
                <h3>Rs. 5000</h3>
                <a href="moneyCheckout.php" class="sch-btn">Donate Now</a>
            </div>

            <div class="sch-box">
                <h3>Rs. 10000</h3>
                <a href="moneyCheckout.php" class="sch-btn">Donate Now</a>
            </div>

            <div class="sch-box">
                <h3>Rs. 20000</h3>
                <a href="moneyCheckout.php" class="sch-btn">Donate Now</a>
            </div>

            <div class="sch-box">
                <h3>Rs. 50000</h3>
                <a href="moneyCheckout.php" class="sch-btn">Donate Now</a>
            </div>


        </div>

    </div>

    <!-- collect details form -->
    <section class="contact_us">

        <div class="row_us">

            <div class="image">
                <img src="img/mo.jpg" alt="">
            </div>

            <form action="" method="post">
                <h3>Fill Your Details</h3>
                <input type="text" name="name" maxlength="50" class="box" placeholder="Enter Your Name" required>
                <input type="text" name="number" min="0" max="9999999999" class="box"
                    placeholder="Enter Your Mobile Number" required maxlength="10">
                <input type="text" name="amount" min="0" max="9999999999" class="box" placeholder="Enter Donate Amount"
                    required maxlength="10">
                <input type="text" name="email" maxlength="50" class="box" placeholder="Credit Card Number" required>
                <select name="method" class="box">
                    <option value="month">Expire Month</option>
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

                <select name="year" class="box">
                    <option value="exp">Expire Year</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                </select>
                <input type="text" name="cvv" maxlength="50" class="box" placeholder="CVV" required>

                <input type="submit" value="Donate" name="send" class="btn"
                    onclick="return confirm('Are you confirm the donation?');">
            </form>

        </div>

    </section>

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