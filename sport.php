<!-- // Include the database connection file -->
<?php include('partials-front/menu.php'); ?>

    </div>
</div>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Sport Slider</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/nsbm.css">
</head>
<body>
<div class="bodyslide">
<!-- 
<div class="container">
<div class="navbar">
        <div class="log">
           <a href="nsbm1.html"> <img src="images/SportxpertT.png" width="125px"></a>
        </div>
        <nav>
            <ul id="menuItems">
                <li><a href="nsbm1.html">Home</a></li>
                <li><a href="product.html">Product</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contactpage.html">Contact</a></li>
                <li><a href="account.html">Account</a></li>
            </ul>
        </nav>
        <img src="images/cart.png" width="30px" height="30px">
        <img src="images/menu.png" class="menu-icon" 
        onclick="menutoggle()">
    </div>
</div> -->
    <!-- Slider -->
    <div class="slider">
        <!-- Radio Controllers -->
        <input type="radio" name="sld" id="sld1">
        <input type="radio" name="sld" id="sld2">
        <input type="radio" name="sld" id="sld3">
        <input type="radio" name="sld" id="sld4">
        <input type="radio" name="sld" id="sld5">

        <!-- Slides -->
        <div class="slides">
            <!-- Slide 01 -->
            <div class="slide curr">
                <img src="./images/slider1.jpg" alt="">
                <div class="desc">
                    <h2>Cricket</h2>
                    <p>Discover the essence of excellence with our curated selection of premium cricket equipment and clothing from Kokupura brand. Elevate your game with gear crafted for performance and durability, ensuring you're always at the top of your cricketing prowess. Whether you're a seasoned professional or a budding enthusiast, our collection offers everything you need to excel on the pitch. </p>
                    <a href="cricket.php">View More</a>
                </div>
            </div>
            <!-- Slide 02 -->
            <div class="slide">
                <img src="./images/slider2.jpg" alt="">
                <div class="desc">
                    <h2>Football</h2>
                    <p>Discover the essence of excellence with our curated selection of premium football equipment and clothing from top brands like Nike,Addidas and Puma. Elevate your game with gear crafted for performance and durability, ensuring you're always at the top of your football prowess. Whether you're a seasoned professional or a budding enthusiast, our collection offers everything you need to excel on the field.</p>
                    <a href="football.php">View More</a>
                </div>
            </div>
            <!-- Slide 03 -->
            <div class="slide">
                <img src="./images/slider3.jpg" alt="">
                <div class="desc">
                    <h2>Basketball</h2>
                    <p>Reach new heights on the court with our top-tier basketball equipment and apparel from brands like Nike,Addidas and Puma. Engineered for durability and performance, our gear supports your every move, ensuring you stay at the peak of your game. From training sessions to competitive matches, our collection has everything you need to excel</p>
                    <a href="basketball.php">View More</a>
                </div>
            </div>
            <!-- Slide 04 -->
            <div class="slide">
                <img src="./images/slider4.jpg" alt="">
                <div class="desc">
                    <h2>Badmiton</h2>
                    <p>Elevate your badminton game with our high-quality equipment and clothing from top brands like Yonex. Our collection features gear designed for agility, precision, and power, helping you dominate the court. Whether you're playing a friendly match or competing at the highest level, you'll find everything you need to enhance your performance.</p>
                    <a href="badmition.php">View More</a>
                </div>
            </div>
            <!-- Slide 05 -->
            <div class="slide">
                <img src="./images/slider5.jpg" alt="">
                <div class="desc">
                    <h2>Swimming</h2>
                    <p>Dive into excellence with our premium range of swimming gear and apparel from brands like Nike and Addidas. Designed for comfort and performance, our selection ensures you glide through the water with ease and speed. From training essentials to professional swimwear, we have everything you need to make a splash in the pool.</p>
                    <a href="swimming.php">View More</a>
                </div>
            </div>
        </div>
        <!-- Arrow Navigation -->
        <a href="#" class="arrow left"><i class="fas fa-arrow-circle-left"></i></a>
        <a href="#" class="arrow right"><i class="fas fa-arrow-circle-right"></i></a>

        <!-- Radio Navigation -->
        <div class="rad-nav">
            <label for="sld1" class="rad-btn active"></label>
            <label for="sld2" class="rad-btn"></label>
            <label for="sld3" class="rad-btn"></label>
            <label for="sld4" class="rad-btn"></label>
            <label for="sld5" class="rad-btn"></label>
        </div>
    </div>

    <!-- footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download our App</h3>
                <p>Download App for Android and ios mobile phone.</p>
                <div class="app-logo">
                    <img src="images/play-store.png">
                    <img src="images/app-store.png">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="images/SportxpertT.png">
                <p>Our purpose Is to sustainably make the pleasure and
                    Benefits of sports Accessible to the Many.</p>
            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog post</li>
                    <li>Return policy</li>
                    <li>Join Affilate</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>YouYube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="Copyright">Copyright sportexpert</p>
    </div>
</div>
<style>

    
/* -----Common----- */
.bodyslide{
    height: 100vh;
    width: 100%;
    background-color: #fcfffd;
}

input[type="radio"]{
    display: none;
}

/* -----Slider----- */
.slider{
    width: 100%;
    height: 100%;
    background: radial-gradient(#f5f4ed,#f6fa04);

}

.slider .slides{
    position: relative;
    width: 100%;
    height: 100%;
    display: flex;
    overflow: hidden;
}

/* Slide */
.slider .slides .slide{
    position: absolute;
    width: 100%;
    height: 100%;
    opacity: 0;
    display: flex;
    transition: all 0.5s ease-in;
}

.slider .slides .curr{
    opacity: 1;
}

/* Overlay */
.slider .slides .slide::after{
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #000;
    opacity: 0.4;
    z-index: 1;
}

/* Images */
.slides .slide img{
    min-width: 100%;
    min-height: 100%;
    object-fit: cover;
    transform: scale(0.8);
    transition: all 0.5s ease-in;
}

.slides .curr img{
    transform: scale(1);
}

/* Description */
.slides .slide .desc{
    position: absolute;
    max-width: 700px;
    min-width: 550px;
    top: -50%;
    left: 150px;
    transform: translateY(50%);
    z-index: 2;
    padding: 25px;
    transition: all 0.5s ease-in;
}

.slides .curr .desc{
    top: 50%;
    transform: translateY(-50%);
}

.slide .desc h2{
    font-size: 5rem;
    color: #fff;
    line-height: 5rem;
}

.slide .desc p{
    font-size: 1rem;
    margin: 25px 0px;
    color: #fff;
    line-height: 1.2rem;
}

.slide .desc a{
    display: inline-block;
    text-decoration: none;
    font-size: 1rem;
    color: #fff;
    background-color: #e7af15;
    padding: 20px 50px;
    transition: all 0.3s ease-in;
}

.slide .desc a:hover{
    background-color: #000;
    color: #fff;
    border-radius: 10px;
}

/* -----Navigation Arrows----- */
.slider .arrow{
    position: absolute;
    text-decoration: none;
    z-index: 20;
    color: #fff;
    top: 60%;
    transform: translateY(-50%);
    opacity: 0.5;
    transition: all 0.3s ease-in;
}

.slider .arrow:hover{
    opacity: 1;
}

.slider .arrow i{
    font-size: 3rem;
}

.slider .left{
    left: 70px;
}

.slider .right{
    right: 70px;
}

/* -----Radio Navigation----- */
.slider .rad-nav{

    width: 100%;
    position: absolute;
    bottom: 10px;
    z-index: 10;
    display: flex;
    justify-content: center;
    align-items: center;
}

.slider .rad-nav .rad-btn{
    width: 25px;
    height: 25px;
    border: 2px solid #fff;
    border-radius: 50%;
    margin: 0px 5px;
    cursor: pointer;
    transition: all 0.3s ease-in;
}

.slider .rad-nav .rad-btn:hover{
    background-color: #fff;
    border-radius: 30%;
}

.active{
    background-color: #fff;
}

/* -----Responsive----- */
@media(max-width: 1100px){
    /* Slide Description */
    .slides .slide .desc{
        left: 50%;
        transform: translateX(-50%);
        text-align: center;
    }

    .slides .curr .desc{
        left: 50%;
        transform: translate(-50%, -50%);
    }
}

@media(max-width: 800px){
    /* Slide Description */
    .slides .slide .desc{
        width: 70%;
        min-width: 200px;
    }

    .slide .desc h2{
        font-size: 2.5rem;
        line-height: 2.8rem;
    }

    .slide .desc p{
        font-size: 0.8rem;
        margin: 10px 0px;
    }

    .slide .desc a{
        font-size: 0.8rem;
        padding: 10px 30px;
    }

    /* Navigation Arrows */
    .slider .arrow i{
        font-size: 2rem;
    }

    .slider .left{
        left: 20px;
    }

    .slider .right{
        right: 20px;
    }

    /* Radio Navogation */
    .slider .rad-nav .rad-btn{
        width: 15px;
        height: 15px;
    }
}

/* media query for menu */

@media only screen and (max-width: 800px){

    nav ul{
        position: absolute;
        top: 70px;
        left: 0;
        background: #333;
        width: 100%;
        overflow: hidden;
        transition: max-height 0.5s;
    }
    nav ul li{
        display: block;
        margin-right: 50px;
        margin-top: 10px;
        margin-bottom: 10x;
    }
    nav ul li a{

        color: #fff;
    }
    .menu-icon{
        display: block;
        cursor: pointer;    
    }
}
</style>



    <!-- Scripts -->
    <script src="js/script.js"></script>
</body>
</html>