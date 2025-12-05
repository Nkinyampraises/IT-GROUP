<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AITG</title>
   <?php wp_head();?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    

</head>
  <body>
    
      <nav class="navbar navbar-expand-lg navbar-light navbar-custom ">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="<?php bloginfo('template_directory');?>/assets/images/logo_light.png" alt="AITG Logo" style="height: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
            aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
             <?php wp_nav_menu(
      array(

          'theme_location' => 'top_menu',
          'menu' => 'main-menu',
          'container' => 'ul',
          'menu_class' => 'navbar-nav navbar-nav-hover mx-auto',
      )
      );?> 
            <!-- <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sevices.html">Products and Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news.html">News</a>
                </li>
            </ul> -->
            <a class="btn btn-contact mb-lg-1" href="contact">CONTACT</a>
        </div>
    </div>
</nav>
