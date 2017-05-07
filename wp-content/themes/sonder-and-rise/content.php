<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

<header id="article-header" style="background-image: url('<?php echo $thumb['0'];?>');">
 
</header>

<!--  <p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p> -->

 <section id="content-container">

 	 <h2 class="article-title"><?php the_title(); ?></h2>
 
 	<?php the_content(); ?>

 </section>