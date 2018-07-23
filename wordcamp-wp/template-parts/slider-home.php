<?php

    /*  
        I need a custom loop, so I first set up its arguments which
        you can look on Wordpress Codex, and then I create the WP_query 
        My slider is scalable and easily editable
        More information of WP_Query: https://codex.wordpress.org/Class_Reference/WP_Query
    */

$args_slider = array(

    'post_type'         => 'slider',  //this is important. I am doign this as per the post type
    'posts_per_page'    => '-1',  //-1 means all
    'orderby'           => 'rand',  //random. If the client gripes, I change this.
    
);


$loop_slider = new WP_Query( $args_slider );   //instantiate my custom loop

while($loop_slider->have_posts()) : $loop_slider->the_post();  //run that dude. I should validate if none

    $bg_image = get_the_post_thumbnail_url(null, 'full' ); ?>

    <li class="slide" style="background-image:url('<?php echo $bg_image; ?>');">
       <h1><?php the_title(); ?></h1>
       <?php the_excerpt(); ?>
    </li>
   
<?php endwhile;

wp_reset_query();  //when you use the toilet you flush. This is the same.

?>
