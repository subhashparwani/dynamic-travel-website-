<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <!-- swiper css link  -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- header section starts  -->
    <section class="header">
      <a href="home.php" class="logo">travel.</a>
      <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="package">Package</a>
        <a href="book.php">Book</a>
      </nav>
      <div id='menu-btn' class="fas fa-bars"></div>
    </section>
    <!-- header section ends  -->


    <div class="heading" style="background:url(images/aboutus.jpg) no-repeat">
      <h1>book now</h1>
    </div>

    <!-- booking section starts  -->


    <section class="booking">
      <h1 class="heading-title">book your trip</h1>
      <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
          <div class="inputBox">
            <span>name: </span>
            <input type="text" placeholder="enter your name" name="name">
          </div>
          <div class="inputBox">
            <span>email: </span>
            <input type="email" placeholder="enter your email" name="email">
          </div>
          <div class="inputBox">
            <span>phone: </span>
            <input type="number" placeholder="enter your phone" name="phone">
          </div>
          <div class="inputBox">
            <span>address: </span>
            <input type="text" placeholder="enter your address" name="address">
          </div>
          <div class="inputBox">
            <span>where to: </span>
            <input type="text" placeholder="enter you want to visit" name="location">
          </div>
          <div class="inputBox">
            <span>how many: </span>
            <input type="number" placeholder="number of guests" name="guests">
          </div>
          <div class="inputBox">
            <span>arrivals: </span>
            <input type="date" name="arrivals">
          </div><div class="inputBox">
            <span>leaving: </span>
            <input type="date" name="leaving">
          </div>
        </div>
        <input type="submit" value="submit" class="btn" name="send">
      </form>
    </section>


    <!-- booking section ends  -->

    <!-- footer section starts  -->

    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>Quick Links</h3>
          <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
          <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
          <a href="package"><i class="fas fa-angle-right"></i>Package</a>
          <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
        </div>

        <div class="box">
          <h3>Extra Links</h3>
          <a href="#"><i class="fas fa-angle-right"></i>Ask Questions</a>
          <a href="#"><i class="fas fa-angle-right"></i>About Us</a>
          <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
          <a href="#"><i class="fas fa-angle-right"></i>Facebook</a>
        </div>

        <div class="box">
          <h3>Contact Info</h3>
          <a href="#"><i class="fas fa-phone"></i>+923353075646</a>
          <a href="#"><i class="fas fa-phone"></i>+923353075646</a>
          <a href="#"><i class="fas fa-envelope"></i>+923353075646</a>
          <a href="#"><i class="fas fa-map"></i>+923353075646</a>
        </div>


        <div class="box">
          <h3>follow us</h3>
          <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
          <a href="#"><i class="fab fa-twitter"></i>twitter</a>
          <a href="#"><i class="fab fa-instagram"></i>instagram</a>
          <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
        </div>


      </div>
      <div class="credit">
        created by <span>Mr Subhash Chandar</span> | All rights reserved
      </div>
    </section>

    <!-- footer section ends  -->


    <!-- js swiper link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- custom js file link  -->
    <script src="js/script.js"></script>
  </body>
</html>
