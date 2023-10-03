<?php
function trim_paragraph($para, $max_words = 22) {
    $words = explode(' ', $para);
    
    if (count($words) > $max_words) {
        return implode(' ', array_slice($words, 0, $max_words)) . '...';
    }
    
    return $para;
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome to Britannia Nutrition Foundation</title>
    <link rel="shortcut icon" href="fav.ico" />
    <meta id="metaTitle" name="title" content="Welcome to Britannia Nutrition Foundation" />
    <meta name="description" content="Britannia Nutrition Foundation" />
    <meta id="ogTitle" property="og:title" content="Welcome to Britannia Nutrition Foundation" />
    <meta id="ogDescription" property="og:description" content="Britannia Nutrition Foundation" />
    <meta id="ogImage" property="og:image" content="http://britannia.co.in/saycheese/images/fb.jpg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@Britannia" />
    <meta id="twitterTitle" name="twitter:title" content="Welcome to Britannia Nutrition Foundation" />
    <meta id="twitterDescription" name="twitter:description" content="Britannia Nutrition Foundation" />
    <meta id="twitterImage" name="twitter:image" content="http://britannia.co.in/saycheese/images/fb.jpg" />
    <!--css-->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
    <!--  -->
    <link rel="stylesheet" type="text/css" href="css/style.css?v=1.8.7">
    <link rel="stylesheet" type="text/css" href="css/media1400.css?v=1.1.3">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <!--css-->
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <script src="https://kit.fontawesome.com/fdb63405a8.js" crossorigin="anonymous"></script>
    <script>
        function toggleNav() {
        var list = document.querySelector(".nav-bar-list");
        list.classList.toggle("active");
        }
        $(document).ready(function() {
          $('img').each(function(){
              var attr = $(this).attr('alt');
            if (typeof attr == typeof undefined || attr == false) {
            var $img = $(this);
            var filename = $img.attr('src')
            $img.attr('alt', filename.substring(0, filename.lastIndexOf('.')));
            }
          });
          $('a').each(function(){
              var attr = $(this).attr('aria-label');
            if (typeof attr == typeof undefined || attr == false) {
            var $imga = $(this);
            $imga.attr('aria-label', 'Britannia');
            }
          });
        });
    </script>
</head>
<body>
    <div class="main">
        <div class="row m-0 a-nav-back p-0 border-0">
            <div class="col-2 a-middle  ml-5">
                <a href="#" class="a-logo-href"><img src="img/bnf-logo.png" class="logo"></a>
            </div>
            <div class="col-10 m-0 p-0">
<nav>
                <ul class="navbar-nav flex-row justify-content-end socialmedia">
                    <li class="a-nav">
                      <a class="a-href nav-link" href="#" aria-label="Britannia"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li class="a-nav">
                      <a class="a-href nav-link" href="#" aria-label="Britannia"><i class="fa-brands fa-x-twitter"></i></a>
                    </li>
                    <li class="a-nav">
                      <a class="a-href nav-link" href="#" aria-label="Britannia"><i class="fa-brands fa-youtube"></i></a>
                    </li>
                    <li class="a-nav">
                      <a class="a-href nav-link" href="#" aria-label="Britannia"><i class="fa-brands fa-linkedin"></i></a>
                    </li>
                    <li class="a-nav">
                      <a class="a-href nav-link" href="#" aria-label="Britannia"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                </ul>
</nav>
<nav class="mb-3 navbar navbar-expand-lg bg-body-tertiary  m-0 p-0">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="a-nav nav-item dropdown">
                      <a class="a-href nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        WHO WE ARE
                      </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a class="dropdown-item" href="#">Origin</a></li>
                            <li><a class="dropdown-item" href="#">Approach</a></li>
                            <li><a class="dropdown-item" href="#">Program(MRP + INP)</a></li>
                            <li><a class="dropdown-item" href="#">Irom Biscuit</a></li>
                            <li><a class="dropdown-item" href="#">Our Board</a></li>
                         </ul>
                    </li>
                    <li class="a-nav">
                      <a class="a-href nav-link" href="#" aria-label="Britannia">OUR REACH</a>
                    </li>
                    <li class="a-nav nav-item dropdown">
                      <a class="a-href nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        WHAT WE DO
                      </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Intervention</a></li>
                            <li><a class="dropdown-item" href="#">Flagship Initiative</a></li>
                            <li><a class="dropdown-item" href="#">Suposhan Sakhi</a></li>
                            <li><a class="dropdown-item" href="#">Nutrition Champion</a></li>
                         </ul>
                    </li>
                    <li class="a-nav nav-item dropdown">
                      <a class="a-href nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        OUR IMPACT
                      </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Malnutrition Anaemia Reduction Number</a></li>
                            <li><a class="dropdown-item" href="#">Case Story Link</a></li>
                         </ul>
                    </li>
                    <li class="a-nav nav-item dropdown">
                      <a class="a-href nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        PUBLICATIONS & MEDIA
                      </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Anual Report</a></li>
                            <li><a class="dropdown-item" href="#">Flip Book</a></li>
                            <li><a class="dropdown-item" href="#">Brochure</a></li>
                         </ul>
                    </li>
                    <li class="a-nav">
                      <a class="a-href nav-link" href="#" aria-label="Britannia">EMPLOYEE ENGAGEMENT</a>
                    </li>
                    <li class="a-nav">
                      <a class="a-href nav-link" href="#" aria-label="Britannia">CONTACT US</a>
                    </li>
                    <li class="a-nav nav-item dropdown">
                      <a class="a-href nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        CALCULATOR
                      </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">HB Calculator</a></li>
                            <li><a class="dropdown-item" href="#">SAM/MAM(0-5 Child)</a></li>
                            <li><a class="dropdown-item" href="#">UW(0-5 Child)</a></li>
                            <li><a class="dropdown-item" href="#">BMI(5.1-19)</a></li>
                            <li><a class="dropdown-item" href="#">BMI For Audlts(19.1-Above)</a></li>
                         </ul>
                    </li>
                </ul>
    </div>
</nav>
            </div>
        </div>