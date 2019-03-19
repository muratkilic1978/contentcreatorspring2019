<?php
/*
*Plugin Name: Simple WordPress Contact Form Plugin
*Plugin URI: http://localhost
*Description: This is a simple plugin based on HTML5, CSS and PHP with an Contact Form
*Version: 0.1.0
*Author: Murat Kilic
*Author URI: http://localhosts
*License: GPL2
*/

function my_form()
{
    $content = '';
    
    $content .= '<div class="login-form">';
    $content .= '<div class="popupCloseButton">X</div>';
    $content .= '<div class="login-face">';
    $content .= '<img src="'.plugins_url("formplugin/img/bog-billede.png").'"';
    $content .= 'alt="login-face"></div>';
    $content .= '<div id="promotion-header">';
    $content .= '<h1 id="promotion-header-title">STÆRK OG SLANK I <span>2019</span></h1></div>';
    $content .= '<section class="form">';
    $content .= '<form action="https://kilic.dk/wordpressseo/index.php/tak-for-din-tilmelding/">';
    $content .= '<div id="promotion-body">';
    $content .= '<p id="promotion-body-text">Tilmeld dig vores nyhedsbrev og få 5 geniale hjemmetrænings-programmer, der nemt og effektivt angriber alle de ømme punkter!</p>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="text" id="username" placeholder="Dit navn" name="username" required><i class="fa fa-user fa-1x"></i>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="email" id="email" placeholder="Din e-mail" name="email" required><i class="fa fa-envelope fa-1x"></i>';
    $content .= '</div>';
    $content .= '<p class="error-msg">Error Message!!!</p>';
    $content .= '<div id="submitForm">';
    $content .= '<input type="submit" id="submitBtn" name="submitBtn" value="JA TAK – TILMELD NYHEDSBREV!">';
    $content .= '</div>';
    $content .= '<div id="promotion-footer">';
    $content .= '<p id="promotion-footer-text">Ja tak, jeg vil gerne modtage I FORMs nyhedsbrev med spændende artikler samt markedsføring om I FORM via e-mail. Du kan til enhver tid afmelde dig igen. Læs mere!</p>';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</section>';
    $content .= '</div>';
    
    return $content;
}

    add_shortcode('show_form_plugin', 'my_form');

    // Register stylesheet with the name - "register_plugin_styles
    add_action('wp_enqueue_scripts', 'register_plugin_styles');


    function register_plugin_styles() {

        /* 
        Syntaks for hvordan man linker/enqueue et stylesheet - eksternt
        wp_enqueue_style('et-unikt-navn','stien til ressourcen');
        For more info - check - https://developer.wordpress.org/themes/basics/including-css-javascript/
        */        
        wp_enqueue_style('fontAwesomeCdn','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('CustomFontMontserrat','https://fonts.googleapis.com/css?family=Montserrat:300,400,800');
        wp_enqueue_style('CustomFontRoboto','https://fonts.googleapis.com/css?family=Roboto:400,500');
        
        wp_register_style('form_plugin_style', plugins_url('formplugin/css/style.css'));
        
        wp_enqueue_style('form_plugin_style');
        
        /* 
        Syntaks for hvordan man linker/enqueue et stylesheet - eksternt
        wp_enqueue_script('et-unikt-navn','stien til ressourcen','array()','1.7.1','true');
        */        
        wp_deregister_script('jquery');
	    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        //wp_enqueue_script('Customjquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', array(), '1.7.1', true);
        wp_enqueue_script('Customscript', plugins_url('formplugin/js/script.js'), array('jquery'), 'null', true);
        
    }


?>