<?php
    
    /*  I am doing a rgular loop, however its loop output is controlled
        by the pre_get_posts hook I declared previously under library/functionality folder
        in my functions.php file. I alter the main loop so I get what I need
        instead of validating once I have the loop. Its much more efficient
    */


if(have_posts()): while(have_posts()): the_post(); 
    $terms  = array();
    $terms = get_the_terms( $post->ID, 'lugar'); //this needs better work because I am getting all the terms
    ?>

    <article class="post">

        <figure>
			<?php the_post_thumbnail(); ?>
		</figure>
        
        <span class="meta-data"><?php echo $terms[0]->name; ?> / <?php the_time('F j, Y'); ?></span>
        <h2><?php the_title(); ?></h2>
        <a href="<?php the_permalink(); ?>" class="button">Leer mas</a>
    
    </article>

   

<?php endwhile; endif; ?>

