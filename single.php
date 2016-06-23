            <?php get_header(); ?>
          
       <?php
        
        if ( have_posts()):
            
             while ( have_posts() ) : the_post();
        ?>
            <article id="single-content"> 
                <h1><?php  the_title() ?> </h1>
                <div id="sub_title">  <?php echo the_category(); ?>  </div>
                <div>
                    <?php  the_content() ?> 
                </div>
            </article>
            

<div> 

    <?php comments_template(); ?>



                
        <?php  endwhile; ?>
        
        
        
     <?php   endif;  ?>

     



        </div>


       

         <?php wp_footer(); ?>  
    </body>
    
</html>