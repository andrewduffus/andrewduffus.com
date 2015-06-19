<?php 
        $args = array(
            'orderby'			=> 'menu_order',
			'order' 			=> 'ASC',
            'post_type'   		=> 'attachment',
            'post_parent'  		=> get_the_ID(),
            'post_mime_type'	=> 'image',
            'post_status'    	=> null,
            'numberposts'    	=> -1,
        );
        $attachments = get_posts($args);   
   ?>
		
<div class="post-gallery">
		<?php if ($attachments) : ?>
			<div class="flexslider">	
				<ul class="slides">		
					<?php foreach ($attachments as $attachment) : ?>                    
						<?php $src = wp_get_attachment_image_src( $attachment->ID, 'gallery-format-thumb');	?>
						<li> 
							<img src="<?php echo $src[0]; ?>" alt="<?php echo apply_filters('the_title', $attachment->post_title); ?>" />
						</li>    
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endif; ?>
</div>
			

<?php get_template_part('includes/postformats/post-meta'); ?>
<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'si_theme'), get_the_title()); ?>"><?php the_title(); ?></a></h2>
<div class="sep"></div>
<div class="entry-content">	
	<?php the_content('');?>	
</div>
