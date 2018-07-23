<?php

    /**
        * I know, I know, not the best class and it violates
        * tons of design principles, but this class basically
        * adds stuff that is miscellanous work that WP does
    */



    class Setup {

        function __construct() {  //adds the hooks
            add_action('after_setup_theme', array($this, 'themeSupport'));  //what our theme supports

            add_action('init', array($this, 'initSupport'));  //what our theme supports
       
            add_filter('admin_init', array($this, 'settingSupport'));
        }


        public function themeSupport() {

            /*
		    * Make theme available for translation.
            * Translations can be filed in the /languages/ directory.
            * If you're building a theme based on wordcamp, use a find and replace
            * to change 'wordcamp' to the name of your theme in all the template files.
            */
            load_theme_textdomain( 'wordcamp', get_template_directory() . '/languages' );

            /*
		    * Let WordPress manage the document title.
		    * By adding theme support, we declare that this theme does not use a
		    * hard-coded <title> tag in the document head, and expect WordPress to
		    * provide it for us.
		    */
            add_theme_support( 'title-tag' );
            
            /*
		    * Enable support for Post Thumbnails on posts and pages.
		    *
		    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		    */
            add_theme_support( 'post-thumbnails' );
            
            // This theme uses wp_nav_menu() in one location.
		    register_nav_menus( array(
			    'menu-mobile' => esc_html__( 'Primary', 'wordcamp' )
            ) );
            

            /*
		    * Switch default core markup for search form, comment form, and comments
		    * to output valid HTML5.
		    */
            add_theme_support( 'html5', array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            ) );

           
            /**
             * Add support for core custom logo.
             *
             * @link https://codex.wordpress.org/Theme_Logo
             */
            add_theme_support( 'custom-logo', array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true
            ) );
	    }



        public function initSupport() {
            remove_action('wp_head', 'rsd_link');
            remove_action('wp_head', 'wlwmanifest_link');
            remove_action('wp_head', 'wp_generator');
        }  //removeHeadLinks



        public function settingSupport() {  

            register_setting('general', 'phone_field', 'esc_attr');
            //add_settings_field('phone_field', '<label for="phone_field">'.__('Site Phone' , 'phone_field' ).'</label>' , array($this, 'phoneDisplaySettings'), 'general');

            register_setting('general', 'email_field', 'esc_attr');
            //add_settings_field('email_field', '<label for="email_field">'.__('Site Email' , 'email_field' ).'</label>' , array($this, 'emailDisplaySettings'), 'general');


        } //settingSupport


   

    }  //Setup



    
    $set = new Setup();
	

?>