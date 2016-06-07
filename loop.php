
<?php



if (have_posts()):
    while (have_posts()) : the_post();
        ?>
        <a href="<?php echo get_permalink(); ?>">     <?php the_title() ?>  </a>  <p>
            <?php
            endwhile;
    endif;
    ?>
   <p> <div class="navigation"><p>
           
           <?php
global $wp_query;

$big = 999999999; // need an unlikely integer


echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $wp_query->max_num_pages
) );
?>
           
           
       </p></div>                    

