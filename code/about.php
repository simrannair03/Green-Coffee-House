<?php 
include 'connection.php';
session_start();
if(isset($_SESSION['user_id'])){
    $user_id=$_SESSION['user_id'];
}else{
    $user_id='';
}
if(isset($_POST['logout'])){
    session_destroy();
    header("location:login.php");
}
?>
<style type="text/css">
    <?php include 'style.css';?>
</style>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>Green Coffee-about us page</title>
    </head>
    <body>
        <?php include 'header.php';?>
        <div class="main">
            <div class="banner">
                <h1>about us</h1>
            </div>
            <div class="title2">
                <a href="home.php">home</a><span>/ about</span>
            </div>
            <div class="about-category">
                <div class="box">
                    <img src="image\img\3.webp">
                    <div class="detail">
                        <span>coffee</span>
                        <h1>lemon green</h1>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div>
                </div>
                <div class="box">
                    <img src="image\img\2.webp">
                    <div class="detail">
                        <span>coffee</span>
                        <h1>lemon green</h1>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div>
                </div>
                <div class="box">
                    <img src="image\img\about.png">
                    <div class="detail">
                        <span>coffee</span>
                        <h1>lemon Teaname</h1>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div>
                </div>
                <div class="box">
                    <img src="image\img\1.webp">
                    <div class="detail">
                        <span>coffee</span>
                        <h1>lemon green</h1>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div>
                </div>
            </div>
            <section class="services">
                <div class="title">
                    <img src="image\img\download.png" class="logo">
                    <h1>why choose us?</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis, placeat!</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="image\img\icon2.png">
                        <div class="detail">
                            <h3>great savings</h3>
                            <p>save big in every order</p>
                        </div>
                    </div>
                    <div class="box">
                        <img src="image\img\icon1.png">
                        <div class="detail">
                            <h3>24*7 support</h3>
                            <p>one-on-one support</p>
                        </div>
                    </div>
                    <div class="box">
                        <img src="image\img\icon0.png">
                        <div class="detail">
                            <h3>gift vouchers</h3>
                            <p>vouchers on every festivals</p>
                        </div>
                    </div>
                    <div class="box">
                        <img src="image\img\icon.png">
                        <div class="detail">
                            <h3>worldwide delivery</h3>
                            <p>dropship worldwide</p>
                        </div>
                    </div>
                </div>
             </section>
             <div class="about">
                <div class="row">
                    <div class="img-box">
                        <img src="image\img\3.png">
                    </div>
                    <div class="detail">
                        <h1>visit our beautiful showroom!</h1>
                        <p>"Located in Navi Mumbai(Maharashtra) You can walk in to taste and smell the variety of green tea that we have for you!"</p>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div>
                </div>
             </div>
             <div class="testimonial-container">
                <div class="title">
                    <img src="image\img\download.png" class="logo">
                    <h1>What people say about us!</h1>
                    <p>Hear from our customers..</p>
                </div>    
                    <div class="container">
                        <div class="testimonial-item active">
                            <img src="image\img\01.jpg">
                            <h1>sara smith</h1>
                            <p>Nice Website to purchase good quality tea from a wide variety that they offer!</p>
                        </div>
                        <div class="testimonial-item">
                            <img src="image\img\02.jpg">
                            <h1>john smith</h1>
                            <p>Nice Website to purchase good quality tea from a wide variety that they offer!</p>
                        </div>
                        <div class="testimonial-item">
                            <img src="image\img\03.jpg">
                            <h1>selena ansari</h1>
                            <p>Nice Website to purchase good quality tea from a wide variety that they offer!</p>
                        </div>
                        <div class="left-arrow" onclick="nextSlide()"><i class="bx bxs-left-arrow-alt"></i></div>
                        <div class="right-arrow" onclick="prevSlide()"><i class="bx bxs-right-arrow-alt"></i></div>
                    </div>
                </div>
            <?php include 'footer.php';?>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <script src="script.js"></script>
        <script type="text/javascript">
            let slides=document.querySelectorAll('.testimonial-item');
            let index=0;

            function nextSlide(){
                slides[index].classList.remove('active');
                index=(index+1)%slides.length;
                slides[index].classList.add('active');
            }
            function prevSlide(){
                slides[index].classList.remove('active');
                index=(index-1 + slides.length)%slides.length;
                slides[index].classList.add('active');
            }
        </script>
        <?php include 'alert.php';?>
    </body>
</html>