<?php get_header(); ?>

      <section id="article-wrapper">

           <?php 
              if ( have_posts() ) : while ( have_posts() ) : the_post();
            
                get_template_part( 'content', get_post_format() );
          
              endwhile; endif; 
            ?>

        </section>


     

 <?php get_footer(); ?>
