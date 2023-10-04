<?php
function trim_paragraph($para, $max_words = 22)
{
  $words = explode(' ', $para);

  if (count($words) > $max_words) {
    return implode(' ', array_slice($words, 0, $max_words)) . '...';
  }

  return $para;
}
?>
<!DOCTYPE html>
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
  <!--  -->
  <link rel="stylesheet" type="text/css" href="css/style.css?v=1.8.7">
  <link rel="stylesheet" type="text/css" href="css/media1400.css?v=1.1.3">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

  <!--css-->
  <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
  <script src="https://kit.fontawesome.com/fdb63405a8.js" crossorigin="anonymous"></script>
  <script>
    function toggleNav() {
      var list = document.querySelector(".nav-bar-list");
      list.classList.toggle("active");
    }
    $(document).ready(function () {
      $('img').each(function () {
        var attr = $(this).attr('alt');
        if (typeof attr == typeof undefined || attr == false) {
          var $img = $(this);
          var filename = $img.attr('src')
          $img.attr('alt', filename.substring(0, filename.lastIndexOf('.')));
        }
      });
      $('a').each(function () {
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