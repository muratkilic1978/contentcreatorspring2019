<?php
/*
*Plugin Name: Simple WordPress Contact Form Plugin
*Plugin URI: http://localhost
*Description: This is a simple plugin based on HTML5, CSS and PHP with an Contact Form
*Version: 0.0.1
*Author: Murat Kilic
*Author URI: http://localhosts
*License: GPL2
*/



    function my_form()
    {
        /* Creating my HTML Form within PHP */
        $content = '';
        
        $content .= '<form method="post" action="#">';
        
        $content .= '<input type="text" name="fullname" placeholder="Your Fullname" id="fullname" >';
        
        $content .= '<input type="email" name="emailaddress" placeholder="Email address" id="emailaddress" >';
        
        $content .= '<input type="text" name="phonenumber" placeholder="Phone Number" id="phonenumber" >';
        
        $content .= '<textarea placeholder="Describe yourself here...." name="comments" id="comments" cols="15" rows="3"></textarea>';
        
        $content .= '<input type="submit" name="submit_form" value="SUBMIT YOUR INFORMATION" id="submitBtn" >';
        
        return $content;
        
    }

    add_shortcode('show_form_plugin', 'my_form');

    // Register stylesheet with the name - "register_plugin_styles
    add_action('wp_enqueue_scripts', 'register_plugin_styles');


    function register_plugin_styles() {
        
        wp_register_style('form_plugin_style', plugins_url('formplugin/css/style.css') );
        
        wp_enqueue_style('form_plugin_style');        
    }


?>