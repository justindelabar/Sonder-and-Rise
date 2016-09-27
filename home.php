<?php get_header(); ?>

      <div>

        <section class="col-sm-12 no-gutter">

     

            <?php
              $ids = array();
              query_posts('cat=2&showposts=1');
              while (have_posts()) : the_post();
              get_template_part( 'includes/hero', get_post_format() );
              ?>
             

              <?php $ids[]= $post->ID;
              endwhile; ?>

  
        </section><!-- /#hero -->

        <div class="clearfix"></div>


        <section id="articles">

            <div class="articles-container">

              <?php
                query_posts("cat=1,3,4,5,6,7,8,9&showposts=2");
                while (have_posts()) : the_post();
                if (!in_array($post->ID, $ids)) {
                  get_template_part( 'includes/two-articles', get_post_format() );
                  ?>
                 
                  <?php } $ids[]= $post->ID;
                  endwhile; ?>

           </div>

           <div class="clearfix"></div>

           <div class="featured-container">
        
          <?php
              query_posts("cat=2&showposts=2");
              while (have_posts()) : the_post();
              if (!in_array($post->ID, $ids)) {
                get_template_part( 'includes/one-article-left', get_post_format() );?>
              
             <?php } $ids[]= $post->ID;
                  endwhile; ?>

            </div>

             <div class="clearfix"></div>

            <div class="articles-container">
            
             <?php
              query_posts("cat=1,3,4,5,6,7,8,9&showposts=6");
              while (have_posts()) : the_post();
              if (!in_array($post->ID, $ids)) {
                get_template_part( 'includes/two-articles', get_post_format() );?>
              
             <?php } $ids[]= $post->ID;
                  endwhile; ?>

            </div>

        <div class="clearfix"></div>

         <div class="featured-container">
        
          <?php
              query_posts("cat=2&showposts=8");
              while (have_posts()) : the_post();
              if (!in_array($post->ID, $ids)) {
                get_template_part( 'includes/one-article-right', get_post_format() );?>
              
             <?php } $ids[]= $post->ID;
                  endwhile; ?>    

          </div>

        <div class="clearfix"></div>  

         <section id="pullquote">



         </section>

          <div class="clearfix"></div>  

            <div class="articles-container">     

              <?php
              query_posts("cat=1,3,4,5,6,7,8,9&showposts=8");
              while (have_posts()) : the_post();
              if (!in_array($post->ID, $ids)) {
                get_template_part( 'includes/two-articles', get_post_format() );?>
              
             <?php } $ids[]= $post->ID;
                  endwhile; ?>

              </div>
    

            </section>

           </div>

    </div><!-- /.row -->


            <div id="more-articles" class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">

                <a href="#" title="Link to more stories">More Stories</a>

            </div>

  <div class="clearfix"></div>

 <?php get_footer(); ?>

