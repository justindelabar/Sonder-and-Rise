<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

<div style="background-image: url('<?php echo $thumb['0'];?>');" class="dual article-card col-lg-6 col-md-6 col-sm-6 col-xs-12">

	<section class="article-intro hvr-float">
	  <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
	  <?php the_title(); ?></a></h2>
	

	   <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" class="read-more">Read More</a>

	</section>


</div><!-- /#two-articles-container -->