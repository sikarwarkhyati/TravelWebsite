<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <section class="header">
        <a href="home.php" class="logo">travel.</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    















<div class="heading" style="background:url('../images/header-bg-3.jpg') no-repeat">
    <h1>Book Now</h1>
</div>

<!--booking section starts-->
<section class="booking">
    <h1 class="heading-title">Book your trip!!</h1>

    <form action="book_form.php" method="post" class="book-form">

    <div class="flex">
        <div class="inputBox">
            <span>Name:</span>
            <input  type="text" placeholder="Name" name="name">
        </div>

        <div class="inputBox">
            <span>Email:</span>
            <input  type="email" placeholder="Email" name="email">
        </div>

        <div class="inputBox">
            <span>Phone:</span>
            <input  type="number" placeholder="Number" name="number">
        </div>

        <div class="inputBox">
            <span>Address:</span>
            <input  type="text" placeholder="Address" name="address">
        </div>

        <div class="inputBox">
            <span>Where to:</span>
            <input  type="text" placeholder="location" name="location">
        </div>

        <div class="inputBox">
            <span>How many:</span>
            <input  type="number" placeholder="guests" name="guests">
        </div>

        <div class="inputBox">
            <span>Arrivals:</span>
            <input  type="date" name="arrivals">
        </div>

        <div class="inputBox">
            <span>Leaving:</span>
            <input  type="date" name="leaving">
        </div>
    </div>

    <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>


<!--booking section ends-->


















    <section class="footer">

        <div class="box-container">

            <div class="box">
            <h3>Quick Links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i>home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
            </div>

            <div class="box">
            <h3>Extra Links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i>Ask Questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i>About us</a>
            <a href="#"> <i class="fas fa-angle-right"></i>Privacy Policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i>Terms of use</a>
            </div>


            <div class="box">
            <h3>Contact Info</h3>
            <a href="#"> <i class="fas fa-phone"></i>+123-456-7890</a>
            <a href="#"> <i class="fas fa-phone"></i>+111-222-3333</a>
            <a href="#"> <i class="fas fa-envelope"></i>abcdef@gmail.com</a>
            <a href="#"> <i class="fas fa-map"></i>Bangalore, India - 560093</a>
            </div>

            <div class="box">
            <h3>Follow Us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i>facebook</a>
            <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
            <a href="#"> <i class="fab fa-instagram"></i>instagram</a>
            <a href="#"> <i class="fab fa-linkedin"></i>linkedin</a>
            </div>

        </div>
        <div class="credit">created by <span>Khyati Sikarwar</span>| all rights reserved!</div>



    </section>














    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    
    <script src="script.js"></script>

</body>
</html>