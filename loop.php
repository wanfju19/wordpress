
<?php



if (have_posts()):
    while (have_posts()) : the_post();
        ?>
       <div class="onerow" stlye="clear:both"> 
	   <div style="display:inline-block">
	 <?php
          if ( has_post_thumbnail() ) {
	      the_post_thumbnail(array(60,60));
          }	?>
	  </div>
	   <div style="display:inline-block;">
	   <a href="<?php echo get_permalink(); ?>">   <strong>  <?php the_title() ?> </strong> </a> 
	   <br>  <?php echo mb_substr(get_the_excerpt(),0,100); ?> 
	   </div>
       </div>
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

