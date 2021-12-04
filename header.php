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
    <header class="header">
        <div class="header__wrapper container">          
                <a class="header__logo logo" href="<?php bloginfo('url'); ?>">
                    <img class="logo__img" src="<?php echo IMG_DIR; ?>/header/header-logo.svg" alt="logo">
                </a>     

                <ul class="header__contacts">
                    
                    <li class="header__item">
                    <a href="https://t.me/adore_women
                        " class="header__link">
                            <img class="header__img" src="<?php echo IMG_DIR; ?>/header/Telegram.svg" alt="Telegram">
                        </a>
                    </li>
                </ul>                
            </div>         
</header>