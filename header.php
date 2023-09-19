<?php
/**
 * The template for displaying the header.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body <?php lalita_body_schema();?> <?php body_class(); ?>>
<header>
        <nav>
            <ul class="nav-bar">
                <li class="logo"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="logo"></a></li>
                <input type="checkbox" id="check">
                <span class="menu">
                    <li><a href="#section1" style="color: yellow;">How it works?</a></li>
                    <li><a href="#section2">FAQ's</a></li>
                    <li><a href="#">About Us</a></li> 
                    <div class="login-signup">
                        <ul>
                            <li> <a class="btn btn-purple"  style="border: 2px solid yellow; color: #fffbff;" href="login.html">
                                <span class="name-description">Login</span>
                                <div class="btn-bg"></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
                </span>
                <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>    
            </ul>   
        </nav>
    </header>