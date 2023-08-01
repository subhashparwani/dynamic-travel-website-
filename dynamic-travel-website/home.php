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
  <body onload="myfunction()">
    <div id="loading"></div>
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

    <!-- home section starts  -->

    <section class="home">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <!-- slide-1 -->
          <div class="swiper-slide slide" style="background:url(images/slide-1.jpg) no-repeat">
            <div class="content">
              <span>explore, discoer, travel</span>
              <h3>travael arond world</h3>
              <a href="package.php" class="btn">discover more</a>
            </div>
          </div>
          <!-- slide-2 -->
          <div class="swiper-slide slide" style="background:url(images/slide-2.jpg) no-repeat">
            <div class="content">
              <span>explore, discoer, travel</span>
              <h3>travael arond world</h3>
              <a href="package.php" class="btn">discover more</a>
            </div>
          </div>
          <!-- slide-3  -->
          <div class="swiper-slide slide" style="background:url(images/slide-3.jpg) no-repeat">
            <div class="content">
              <span>explore, discoer, travel</span>
              <h3>travael arond world</h3>
              <a href="package.php" class="btn">discover more</a>
            </div>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </section>

    <!-- home section ends  -->

    <!-- services section starts  -->
    <section class="services">
      <h1 class="heading-title">Our Services</h1>
      <div class="box-container">
        <div class="box" >
          <img src="images/hiking.png" alt="hello">
          <h3>adventures</h3>
        </div>
        <div class="box">
          <img src="images/tourist.png" alt="hello">
          <h3>adventures</h3>
        </div>
        <div class="box">
          <img src="images/hiking.png" alt="">
          <h3>adventures</h3>
        </div>
        <div class="box">
          <img src="images/tourist.png" alt="">
          <h3>adventures</h3>
        </div>
        <div class="box">
          <img src="images/hiking.png" alt="">
          <h3>adventures</h3>
        </div>
        <div class="box">
          <img src="images/tourist.png" alt="">
          <h3>adventures</h3>
        </div>
        <div class="box">
          <img src="images/hiking.png" alt="">
          <h3>adventures</h3>
        </div>
      </div>
    </section>

    <!-- sevices section ends  -->


    <!-- home about section starts  -->

    <section class="home-about">
      <div class="image">
        <img src="images/aboutus.jpg" alt="">
      </div>
      <div class="content">
        <h3>About Us</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quisquam laboriosam cupiditate ea explicabo quis vitae officiis vel, repudiandae adipisci iure ratione dolorem mollitia facere tempore repellendus quas blanditiis quidem.</p>
        <a href="about.php" class="btn">read more</a>
      </div>
    </section>

    <!-- home about section ends  -->


    <!-- home packages section starts  -->

    <section class="home-package">
      <h1 class="heading-title">our packages</h1>
      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="images/aboutus.jpg" alt="">
          </div>
          <div class="content">
            <h3>adventures</h3>
            <p>accusamus aliquid deserunt, delectus molestias laboriosam enim earum beatae quod magni perspiciatis 
              nesciunt officiis eaque.</p>
            <a href="book.php" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/aboutus.jpg" alt="">
          </div>
          <div class="content">
            <h3>adventures</h3>
            <p>accusamus aliquid deserunt, delectus molestias laboriosam enim earum beatae quod magni perspiciatis 
              nesciunt officiis eaque.</p>
            <a href="book.php" class="btn">book now</a>
          </div>
        </div>


        <div class="box">
          <div class="image">
            <img src="images/aboutus.jpg" alt="">
          </div>
          <div class="content">
            <h3>adventures</h3>
            <p>accusamus aliquid deserunt, delectus molestias laboriosam enim earum beatae quod magni perspiciatis 
              nesciunt officiis eaque.</p>
            <a href="book.php" class="btn">book now</a>
          </div>
        </div>


      </div>


      <div class="load-more"><a href="package.php" class="btn">load more</a></div>


    </section>

    <!-- home packages section ends  -->




    <!-- home offer section starts  -->

    <section class="home-offer">
      <div class="content">
        <h3>upto 50% off</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero totam tempora iste, deleniti reprehenderit porro nihil quidem amet dolorem non, necessitatibus laudantium. Rem pariatur debitis, necessitatibus ullam architecto eius labore?</p>
        <a href="book.php" class="btn">book now</a>
      </div>
    </section>


    <!-- home offer section ends  -->








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

    <script>
      var preloader=document.getElementById('loading');
      function myfunction(){
        preloader.style.display="none";
      }
    </script>

    <!-- js swiper link  --> 
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- custom js file link  -->
    <script src="js/script.js"></script>
  </body>
</html>
