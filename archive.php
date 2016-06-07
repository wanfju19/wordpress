<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Lunchroom
 */
?>

            <?php get_header(); ?>


            <div id="container-left">  
                <?php get_template_part("loop") ?>
            </div>

            <div  id="container-middle">
                
            </div>        
            <div  id="container-right">
              <?php get_sidebar();
              ?>
            </div>
            <div style="clear:both">
            </div>

            <div>
                
            </div>

        

        <div>
            <?php wp_footer(); ?>  
            
        
            
        </div>
         </div>
    </body>

</html>
