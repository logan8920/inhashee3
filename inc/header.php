<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            $title = [
                "/" => "Home",
                "/products-detail" => "Products Detail",
                "/contact" => "Contact Us",
                "/about" => "About Us",
            ];
        ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inhashee | <?=$title[$_SERVER['REDIRECT_URL']] ?? 'Home'?></title>
        <link rel="stylesheet" href="assets/css/style.css?v=<?=rand(11111,999999)?>">
        <link rel="stylesheet" href="assets/css/responsive.css?v=<?=rand(11111,999999)?>">
        <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
        <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/fancybox.css">
        <!-- <link rel="stylesheet" type="text/css" href="assets/css/comparison.css?v=<?=rand(11111,999999)?>"> -->
        <link rel="stylesheet" type="text/css" href="assets/css/contact.css?v=<?=rand(11111,999999)?>">
        <style type="text/css">
        a.col-lg.product-item p {
            color: #000;
        }
        </style>
    </head>
    <body>

        <!-- Preloader  -->
        <div class="preloader" id="preloader">
            <div class="ring"></div>
        </div>
        <!-- Header -->
        <nav class="fixed-header" data-aos="fade-up">
            <header>
                <div class="container">
                    <div class="desktop-header">
                        <div class="logo">
                            <a href="/">
                                <img loading="lazy" src="assets/images/inhashee_logo.png" alt="">
                            </a>
                        </div>
                        <ul class="nav-links">
                            <li <?= $_SERVER['REDIRECT_URL'] == '/' || $_SERVER['REDIRECT_URL'] == '' ? 'class="active"' :'' ?>>
                                <a href="/">HOME</a>
                            </li>
                            <li class="products-menu <?= $_SERVER['REDIRECT_URL'] == '/products-detail' ? 'active' :'' ?>">
                                <a href="javascript:;">PRODUCTS</a>
                                <!-- Mega Dropdown -->
                                <div class="mega-menu" style="position: fixed;top: 75px;width: 100dvw;">
                                    <!-- Left Side - Categories -->
                                    <!-- <ul class="category-list">
                                        <li class="category active" data-category="xiaomi">Shampoo</li>
                                        <li class="category" data-category="redmi"> Conditioner</li>
                                    </ul> -->
                                    <!-- Right Side - Products -->
                                    <div class="products-list w-100">
                                        <div class="row product-category" id="xiaomi">
                                            <a href="products-detail.php" class="col-lg product-item">
                                                <img loading="lazy" src="assets/images/products/best_btx.png" alt="Xiaomi 15 Ultra">
                                                <p class="text-dark">Best BTX</p>
                                            </a>
                                            <div class=" col-lg product-item">
                                                <img loading="lazy" src="assets/images/products/ph_shampoo.png" alt="Xiaomi 15">
                                                <p>PH + Shampoo</p>
                                            </div>
                                            <div class=" col-lg  product-item">
                                                <img loading="lazy" src="assets/images/products/post_shampoo02.png" alt="Xiaomi 14 Civi">
                                                <p>POST Shampoo</p>
                                            </div>
                                            <div class=" col-lg  product-item">
                                                <img loading="lazy" src="assets/images/products/hair_serum.png" alt="Xiaomi 14 Civi">
                                                <p>Hair Serum</p>
                                            </div>
                                            <div class=" col-lg  product-item">
                                                <img loading="lazy" src="assets/images/products/nanoplastia.png" alt="Xiaomi 14 Civi">
                                                <p>Nanoplastia</p>
                                            </div>
                                        <!-- </div>
                                        <div class="row product-category" id="redmi" style="display: none;"> -->
                                            <div class="col-lg product-item">
                                                <img loading="lazy" src="assets/images/products/post_conditiner.png " alt="Redmi 10">
                                                <p>Post Conditiner</p>
                                            </div>
                                            <div class="col-lg product-item">
                                                <img loading="lazy" src="assets/images/products/hair_spa.png" alt="Redmi 12">
                                                <p>Hair Spa</p>
                                            </div>
                                            <div class="col-lg product-item">
                                                <img loading="lazy" src="assets/images/products/protein_collagen.png" alt="Redmi 13">
                                                <p>Protein & Collagen</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                            <li <?= $_SERVER['REDIRECT_URL'] == '/contact' ? 'class="active"' :'' ?>>
                                <a href="contact.php">CONTACTS</a>
                            </li>

                            <li <?= $_SERVER['REDIRECT_URL'] == '/about' ? 'class="active"' :'' ?>>
                                <a href="about.php">ABOUT US</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>
            <!-- Mobile Header -->
            <header class="mobile-header">
                <div class="logo">
                    <a href="/">
                        <img loading="lazy" src="assets/images/inhashee_logo.png" alt="">
                    </a>
                </div>
                <div class="menu-toggle" onclick="toggleMenu()">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </header>
            <!-- Mobile Navigation -->
            <ul class="mobile-nav">
                <li>
                    <a href="/">HOME</a>
                </li>
                <li>
                    <a href="about.php">ABOUT US</a>
                </li>
                <li>
                    <a href="products-detail.php">PRODUCTS</a>
                </li>
             
                <li>
                    <a href="contact.php">CONTACTS</a>
                </li>
            </ul>
        </nav>