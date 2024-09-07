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
        <title>Green Coffee-home page</title>
    </head>
    <body>
        <?php include 'header.php';?>
        <div class="main">
            <section class="home-section">
                <div class="slider">
                    <div class="slider__slider slide1">
                        <div class="overlay"></div>
                        <div class="slide-detail">
                            <h1>Lorem ipsum dolor sit, amet</h1>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis, placeat!</p>
                            <a href="view_products.php" class="btn">shop now</a>
                        </div>
                        <div class="hero-dec-top"></div>
                        <div class="hero-dec-bottom"></div>
                    </div>
                    <!-- slide end -->
                    <div class="slider__slider slide2">
                        <div class="overlay"></div>
                        <div class="slide-detail">
                            <h1>welcome to my shop</h1>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis, placeat!</p>
                            <a href="view_products.php" class="btn">shop now</a>
                        </div>
                        <div class="hero-dec-top"></div>
                        <div class="hero-dec-bottom"></div>
                    </div>
                    <!-- slide end -->
                    <div class="slider__slider slide3">
                        <div class="overlay"></div>
                        <div class="slide-detail">
                            <h1>Lorem ipsum dolor sit, amet</h1>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis, placeat!</p>
                            <a href="view_products.php" class="btn">shop now</a>
                        </div>
                        <div class="hero-dec-top"></div>
                        <div class="hero-dec-bottom"></div>
                    </div>
                    <!-- slide end -->
                    <div class="slider__slider slide4">
                        <div class="overlay"></div>
                        <div class="slide-detail">
                            <h1>Lorem ipsum dolor sit, amet</h1>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis, placeat!</p>
                            <a href="view_products.php" class="btn">shop now</a>
                        </div>
                        <div class="hero-dec-top"></div>
                        <div class="hero-dec-bottom"></div>
                    </div>
                    <!-- slide end -->
                    <div class="slider__slider slide5">
                        <div class="overlay"></div>
                        <div class="slide-detail">
                            <h1>Lorem ipsum dolor sit, amet</h1>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis, placeat!</p>
                            <a href="view_products.php" class="btn">shop now</a>
                        </div>
                        <div class="hero-dec-top"></div>
                        <div class="hero-dec-bottom"></div>
                    </div>
                    <!-- slide end -->
                    <div class="left-arrow"><i class="bx bxs-left-arrow"></i></div>
                    <div class="right-arrow"><i class="bx bxs-right-arrow"></i></div>
                </div>
            </section>
            <!-- home slider end -->
             <section class="thumb">
                <div class="box-container">
                    <div class="box">
                        <img src="image\img\thumb2.jpg">
                        <h3>green tea</h3>
                        <p>good quality green tea for you!</p>
                        <i class="bx bx-chevron-right"></i>
                    </div>
                    <div class="box">
                        <img src="image\img\thumb0.jpg">
                        <h3>green cofee latte</h3>
                        <p>premium green coffee latte for you!</p>
                        <i class="bx bx-chevron-right"></i>
                    </div>
                    <div class="box">
                        <img src="image\img\thumb1.jpg">
                        <h3>lemon tea</h3>
                        <p>Good quality lemon tea specially for you!</p>
                        <i class="bx bx-chevron-right"></i>
                    </div>
                    <div class="box">
                        <img src="image\img\thumb.jpg">
                        <h3>green coffee</h3>
                        <p>Quality green cofee made from premium coffee beans for you!</p>
                        <i class="bx bx-chevron-right"></i>
                    </div>
                </div>
             </section>
             <section class="container">
                <div class="box-container">
                    <div class="box">
                        <img src="image\img\about-us.jpg">
                        <span>healthy tea</span>
                        <h1>save upto 50% off</h1>
                </div>
             </section>
             <section class="shop">
                <div class="title">
                    <img src="image\img\download.png">
                    <h1>Trending Products</h1>
                </div>
                <div class="row">
                    <img src="image\img\about.jpg">
                    <div class="row-detail">
                        <img src="image\img\basil.jpg">
                        <div class="top-footer">
                            <h1>a cup of green tea makes you healthy</h1>
                        </div>
                    </div>
                </div>
                    <div class="box-container">
                        <div class="box">
                            <img src="image\img\card.jpg">
                            <a href="view_products.php"  class="btn">shop now</a>
                        </div>
                         <div class="box">
                            <img src="image\img\card0.jpg">
                            <a href="view_products.php" class="btn">shop now</a>
                        </div>
                        <div class="box">
                            <img src="image\img\card1.jpg">
                            <a href="view_products.php" class="btn">shop now</a>
                        </div>
                        <div class="box">
                            <img src="image\img\card2.jpg">
                            <a href="view_products.php" class="btn">shop now</a>
                        </div>
                        <div class="box">
                            <img src="image\img\10.jpg">
                            <a href="view_products.php" class="btn">shop now</a>
                        </div>
                        <div class="box">
                            <img src="image\img\6.webp">
                            <a href="view_products.php" class="btn">shop now</a>
                        </div>
                    </div>
             </section>
             <section class="shop-category">
                <div class="box-container">
                    <div class="box">
                        <img src="image\img\6.jpg">
                        <div class="detail">
                            <span>BIG OFFERS</span>
                            <h1>Extra 15% off</h1>
                            <a href="view_products.php" class="btn">shop now</a>
                        </div>
                    </div>
                    <div class="box">
                        <img src="image\img\7.jpg">
                        <div class="detail">
                            <span>new in taste</span>
                            <h1>coffee house</h1>
                            <a href="view_products.php" class="btn">shop now</a>
                        </div>
                    </div>
                </div>
             </section>
             <section class="services">
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
             <section class="brand">
                <div class="box-container">
                    <div class="box">
                        <img src="image\img\brand (1).jpg">
                    </div>
                    <div class="box">
                        <img src="image\img\brand (2).jpg">
                    </div>
                    <div class="box">
                        <img src="image\img\brand (3).jpg">
                    </div>
                    <div class="box">
                        <img src="image\img\brand (4).jpg">
                    </div>
                    <div class="box">
                        <img src="image\img\brand (5).jpg">
                        <!-- doubt -->
                    </div>
                </div>
             </section>
             <?php include 'footer.php';?>
        </div>
        <!-- <?php include 'footer.php';?> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <script src="script.js"></script>
        <?php include 'alert.php';?>
    </body>
</html>