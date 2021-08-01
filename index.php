<?php 
require 'db.php'; 

$select = "SELECT * FROM posts";
$query = mysqli_query($connect, $select);








?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/readit/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Jan 2021 20:51:12 GMT -->
<head>
<title>meda 360 story website</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="css/ionicons.min.css">
<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/myStyle.css">
<style>
    h6{
    font-size: 10px;
    }
    @media screen and (max-width:570px){
   
    h6{
        font-size: 7px;
    }
    }
    #meda{
        color:white;
    }
    @media screen and (min-width:800px){
        #meda{
            color:black;
        }
    }
</style>
</head>

<body>
<nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" id="meda" >Meda<i>360</i>.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item active"><a href="blog_post.php" class="nav-link">post Articles</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link">About us</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="hero-wrap js-fullheight" style="background-image: url('images/person_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-md-12 ftco-animate">
                    <h2 class="subheading">Hello! Welcome to</h2>
                    <h1 class="mb-4 mb-md-0">Meda 360 blog</h1>
                    <div class="row">
                    <div class="col-md-7">
                        <div class="text">
                            <p>Refill your ink with the Arabian ink, Inspire yourself with the cries of the squirrels. Explore the world like the hawk</p>
                            <a class="navbar-brand" style="color:white">Meda<i>360</i>.</a>
                            <div class="mouse">
                                <a href="#" class="mouse-icon">
                                    <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
                                </a>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<form method="get">
<section class="ftco-section bg-light" style="margin-top:-40px">
    <div class="container">


        <div class="grid">
            <!-- <div class="first child ftco-animate">
                    <div class="image" style="background-image:url(images/defaultImg.jpg); background-size:cover" >

                    </div>
                    <h3 style="color:black;">This post is a default post</h3>
                    <p>About the life of a Renowned Scholar (may Allah forgive his shortcomings).</p>
                    <h6>posted on 25th march at 10:48a:m</h6>
            </div> -->

           


       <?php
       
       while($row = mysqli_fetch_assoc($query)){
           $post = $row['post'];
           $title = $row['title'];
           $image = $row['image'];
           $intro = $row['intro'];
           $ids = $row['id']; 
           $date = $row['date'];
           $time = $row['time'];          
           echo "
                <div class='third child ftco-animate'>
                <div class='image' style='background-image:url(images/$image);background-size:cover'; background-repeat:no-repeat)'>

                </div>
                
                <h3 style='color:black;'>$title</h3>
                <p>$intro</p>
                <h6>posted on $date at $time</h6>
                <p><button style='color:goldenrod; border:0px; background:white' value='$ids' name='btn'><span class='ion-ios-arrow-round-forward mr-3'></span>Read more</button></p>
            </div> 
           ";
       }

        if(isset($_GET['btn'])){
            $ID = $_GET['btn'];
            echo $ID;
            $_SESSION['id'] = $ID;
            echo "<script>window.location = 'singlepost.php'</script>";
        }
       
       
       
       ?>
              

            

        
    </div>
</section>
</form>


<!-- website footer -->
<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
            <div class="row mb-5">

                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="logo"><a href="#">meda<span>360</span>.</a></h2>
                        <p>Far far away, behind the word mountains, far from the depth of sheol, there live the blind texts.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="https://ads.twitter.com/mobile/v1/tweets/all"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.facebook.com/owolabi.hammed.3994"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="https://api.whatsapp.com/send?phone=${+2347015713905}&text= Hi Owolabi Hammed"><span class="icon-whatsapp"></span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                    
                        <h2 class="ftco-heading-2">Inspirational Quotes</h2>

                        <div class="block-21 mb-4 d-flex">
                            <a class="img mr-4 rounded" style="background-image: url(images/image_1.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                                <div class="meta">
                                    <div><a href="#"></span> february 2020</a></div>
                                    <div><a href="#"></span> Admin</a></div>
                                    <div><a href="#"></span> 19</a></div>
                                </div>
                            </div>
                        </div>

                        <div class="block-21 mb-4 d-flex">
                            <a class="img mr-4 rounded" style="background-image: url(images/image_2.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                                <div class="meta">
                                    <div><a href="#"></span> february 2020</a></div>
                                    <div><a href="#"></span> Admin</a></div>
                                    <div><a href="#"></span> 19</a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Information</h2>
                        <ul class="list-unstyled">
                            <li><a href="index.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Home</a></li>
                            <li><a href="about.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>About</a></li>
                            <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Articles</a></li>
                            <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Off Obafemi Awolowo University campus</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">07015713905</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text"><span class="__cf_email__" data-cfemail="9ef7f0f8f1dee7f1ebecfaf1f3fff7f0b0fdf1f3">[email&#160;protected]</span></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>



        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | @meda360 software <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Owolabi Hamid</a>
                </p>
            </div>
        </div>


    </div>
</footer>

<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>
<script src="js/jquery.min.js"></script>
<script src="js/post.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/readit/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Jan 2021 20:51:12 GMT -->
</html>