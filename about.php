<?php include('partials-front/menu.php'); ?>
    </div>
</div>

<!DOCTYPE html>
<html>
    <title>About</title>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="nsbm.css">
<link  href="https://fonts.googleapis.com/css2?
family=poppins:@300;400;500;600;700&display=swap"
rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">

<style>
    h1 {
        font-size: 4.2rem;
        margin-bottom: 20px;
    }

    .about {
        width: 100%;
        padding: 78px 20px;
        background-color: white;
    }

    .about img {
        height: auto;
        width: 55%;
        padding-right: 10%;
    }

    .about-text {
        width: 40%;
    }

    .main {
        max-width: 95%;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .mid {
        letter-spacing: 1px;
         margin-bottom: 30px;
         font-size: 1.2rem;

    }

    button {
        background-color: red;
        color: black;
        text-decoration: none;
        border: 2px solid transparent;
        font-weight: bold;
        padding: 13px 30px;
        border-radius: 30px;
    }

    button:hover {
        background: transparent;
        border: 2px solid red;
        cursor: pointer;
        transition-duration: 1s;
    }

    span {
        color: red;
    }

    .p1 {
        font-size: 35px;
        padding: 0;
        margin-bottom: 0;
        margin-top: 0px;
    }

    .p2 {
        font-size: 3rem;
        padding: 0;
        margin-top: 1px;
       
    }

    .p3 {
        font-size: 50px;
        color: red;
        padding: 0;
        margin-bottom: 2px;
    }
    .p4{
        line-height:2 ;

    }

    @media (max-width: 768px) {
        .main{
            flex-direction: column;
        }

        .about img{
            width: 100%;
            padding-right: 0;
            margin-bottom: 1.25rem;
        }

        .about-text{
            width: 100%;
        }

        h1{
            font-size: 3rem;
        }

        .p1{
            font-size: 1.5rem;
        }

        .p2{
            font-size: 1.8rem;
        }

        .p3{
            font-size: 2rem;
        }

        button {
            padding: 0.6rem 1.25rem;
        }
    }

    @media (max-width: 480px) {
        h1  
        {
            font-size: 2.5rem;
        }

        .p1  {
            font-size: 1.2rem;
        }

        .p2 {
            font-size: 1.5rem;
        }

        .p3 {
            font-size: 1.8rem;
        }

        .mid {
            font-size: 1rem;
        }

        button {
            padding: 0.5rem 1rem;
        }
    }
</style>

<body> 
<section class="about">
    <div class="main">
        <img src="images/image1.png" alt="About Image">
        <div class="about-text">
            <h1>About us</h1>
            <hr>
            <div class="mid">
                <p class="p1">Discover</p>
                <p class="p2">Your Passion at</p>
                <p class="p3">SportXpert</p>
                <p class="p4">Welcome to SportXpert, the ultimate e-commerce platform where your sporting dreams come true.
                    We are here to provide sport enthusiasts with high-quality equipment and help to improve your performance.
                    Our shop includes sport shoes, T-shirts, jerseys, sport equipment, and many more.
                    We carefully store our products to ensure that you will meet the best standards of quality and reliability.
                </p>
            </div>
            <button><a href="index.php">Shop now</a></button>   
        </div>
    </div>
</section>

<!--footer-->
       


    <script src="js.js"></script>
</body>
</html>




<?php include('partials-front/footer.php'); ?>