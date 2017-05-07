<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

<section id="hero" style="background-image: url('<?php echo $thumb['0'];?>');">

	<section id="article-intro" class="col-lg-6 col-md-6 col-sm-8 pull-right hvr-float">
	  <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	   <p><?php the_excerpt(); ?></p>

	   <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" class="read-more">Read More</a>

	</section>





</section>