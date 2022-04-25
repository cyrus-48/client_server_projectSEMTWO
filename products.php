<?php session_start();
    


if (empty($_SESSION['id'])) :
    header('Location:products.php');
endif;




?>


 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCESSORIES ONLINE STORE</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> ESHOP</a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#features">features</a>
        <a href="#products">products</a>
        <a href="#categories">categories</a>
        <a href="logoutprocess.php">logout</a>
       
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/phone3.png" alt="">
            <div class="content">
                <h3>phone</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 4</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/drone2.jpeg" alt="">
            <div class="content">
                <h3>drone</h3>
                <span class="price">$14.99/-</span>
                <span class="quantity">qty : 5</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/tv3.jpg" alt="">
            <div class="content">
                <h3>television</h3>
                <span class="price">$27.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="total"> total : $19.69/- </div>
        <a href="#" class="btn">checkout</a>
    </div>

    <form action="" class="login-form">
        <h3> your profile </h3>
                        <h2> <label>FIRSTNAME:</label> <p><?php echo $_SESSION['firstname']; ?></p></h2><
                         <h2><label>SECONDNAME: </label><p><?php echo $_SESSION['secondname']; ?></p> </h2>
                         <h2> <label>GENDER:</label><p><?php echo $_SESSION['gender']; ?></p> </h2> 
                         <h2><label>COUNTRY:</label><p><?php echo $_SESSION['country']; ?></p></h2>
                        <h2><label>COUNTY:</label><p><?php echo $_SESSION['county']; ?></p></h2>
                        <h2> <label>EMAIL:</label><p><?php echo $_SESSION['email']; ?></h2>
    </form>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>ELECTRONIC  <span>DEVICES</span> AND ACCESSORIES</h3>
        <p> Legit electronic devices and accessories from ESHOP to your home is one click away.</p>
    </div>

</section>

<!-- home section ends -->

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> our <span>features</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/photo-1527977966376-1c8408f9f108.jpeg" alt="">
            <h3>Good conditions</h3>
            <p>Our products are of good conditions and incase of any faults we offer 1 year Guarante to every product we sell</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="image/photo-1527977966376-1c8408f9f108.jpeg" alt="">
            <h3>free delivery</h3>
            <p>We offer free delivery to area around Nairobi and for products less than 5 kilgrams of mass</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="image/feature-img-3.png" alt="">
            <h3>easy payments</h3>
            <p>We use the most convenient modes of payment including mobile transactio through Safaricom Mpesa </p>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- features section ends -->

<!-- products section starts  -->

<section class="products" id="products">

    <h1 class="heading"> our <span>products</span> </h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                
                <img src="image/phone2.jpeg" alt="">
                <h3>PHONES </h3>
                <div class="price"> Ksh 20,000 </div>
               
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/tv3.jpg" alt="">
                <h3>TELEVISON </h3>
                <div class="price"> Ksh 30,000</div>
                
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/buds4.jpeg" alt="">
                <h3>EAR BUDS</h3>
                <div class="price"> Ksh 2,000</div>
               
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/drone1.jpg" alt="">
                <h3>HD DRONE</h3>
                <div class="price"> Ksh 27,000</div>
                
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </div>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/phone1.jpg" alt="">
                <h3>PHONES</h3>
                <div class="price"> Ksh 25,000</div>
              
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/lap4.jpeg" alt="">
                <h3>LAPTOP</h3>
                <div class="price"> Ksh 45,000 </div>
                
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/tv2.jpg" alt="">
                <h3>TV SET</h3>
                <div class="price"> Ksh 20,000</div>
               
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/lap3.jpeg" alt="">
                <h3>TELEVISON SET</h3>
                <div class="price"> Ksh 30,000</div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </div>


</section>

<!-- products section ends -->

<!-- categories section starts  -->

<section class="categories" id="categories">

    <h1 class="heading"> product <span>categories</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/phone3.png" alt="">
            <h3>PHONES</h3>
            <p>upto 30% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="image/buds4.jpeg" alt="">
            <h3>ACCESSORIES</h3>
            <p>upto 30% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="image/lap4.jpeg" alt="">
            <h3>COMPUTERS</h3>
            <p>upto 30% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="image/drone2.jpeg" alt="">
            <h3>DRONES AND CAMERAS</h3>
            <p>upto 15% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

    </div>

</section>

<!-- categories section ends -->
 

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3> ESHOP<i class="fas fa-shopping-basket"></i> </h3>
            <p>Legit electronic devices and accessories from ESHOP to your home is one click away. </p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +2541115645217</a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> cyrusmwendwa370@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> nairobi- 1920334 , kenya</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> features </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> products </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
          
        </div>
 
    </div>

    <div class="credit"> created by <span> cyrus mwendwa  </span> | all rights reserved </div>

</section>

<!-- footer section ends -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>