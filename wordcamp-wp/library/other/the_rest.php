<?php

    /**
        * I know, I know, not the best class and it violates
        * tons of design principles, but this class basically
        * adds stuff that is miscellanous work that WP does
    */



    class Misc {

        function __construct() {  //adds the hooks

          
            add_filter('upload_mimes', array($this, 'cc_mime_types') );
            add_action('admin_head', array($this,'fix_svg_thumb_display'));
            //$this->registerWidget();
           
        }


        public function cc_mime_types($mimes) {   //enable uploading SVG
            $mimes['svg'] = 'image/svg+xml';
            return $mimes;
        }


        public function fix_svg_thumb_display() { ////display SVG's in editor
            echo '<style>
                td.media-icon img[src$=".svg"], img[src$=".svg"].attachment-post-thumbnail { 
                width: 100% !important; 
                height: auto !important; 
            }</style>

            ';
        }

        
    }  //Misc

    
    $misc = new Misc();
	
?>