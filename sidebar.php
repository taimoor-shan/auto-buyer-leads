<div class="sidebar-box row mb-3">
	<h2 class="text-uppercase">Latest News</h2>
	<?php
	$args = array(
		'post_type'      => '',
		'orderby'        => 'publish_date',
		'order'          => 'DSC',
		'posts_per_page' => 8
	);
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	 $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
		?>   
        <div class="post row">
        <div class="col-md-5 post-thumb">
			<a href="<?php the_permalink();?>"><img src="<?php echo $image[0];?>" class="img-fluid"></a>
			</div>
			 <div class="col-md-7 content g-0">
				 <h5><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h5>
			</div>
            
        </div>
	<?php
	endwhile;
	wp_reset_query();
	?>
</div>
