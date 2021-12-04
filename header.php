<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/fonts/fonts.css">    
    <title><?php echo bloginfo('description'); ?></title>
	 <?php wp_head(); ?> 
</head>

<body>    
    <Header class="header">
        <nav class="header__nav">
            <div class="header__wrapper">
                <img class="header__logo logo" src="./assets/images/logo.svg" alt="">
                <ul class="header__list">
                    <li class="header__item"> <a class="header__link" href="#">Design Gallery</a> </li>
                    <li class="header__item"><a class="header__link" href="#">List of Architect</a></li>
                    <li class="header__item"><a class="header__link" href="#">Articles</a></li>
                    <li class="header__item"><a class="header__link" href="#">How it Works</a></li>
                </ul>
            </div>
            <div class="header__wrap">
                <button class="header__btn header__btn--search"><img src="./assets/images/Search.svg" alt=""></button>
                <button class="header__btn header__btn--left">Sign In</button>
                <button class="header__btn header__btn--right">Sign Up</button>
            </div>
        </nav>
        <div class="burger"></div>
        <div class="container">
            <main class="main">
                <h1 class="main__title">Build Your <br>
                    Dream <span class="main__title--orange">House</span> </h1>
                <div class="main__wrapper">
                    <div class="main__wrap">
                        <p class="main__text">The first and most trusted marketplace of design & build house in The
                            World.
                            100% guaranteed Build safe, comfortable and transparent with a project management for the
                            best
                            result</p>
                        <button class="main__btn">Free Consultation</button>
                    </div>
                    <img class="main__img" src="./assets/images/main.png" alt="">
                </div>
            </main>
        </div>
    </Header>