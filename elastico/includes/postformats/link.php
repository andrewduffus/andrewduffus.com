<?php get_template_part('includes/postformats/post-meta'); ?>

<?php $url = get_post_meta(get_the_ID(), 'si_link_url', true); ?>
						
<h2 class="entry-title">
	<span class="icon"></span>
	<a target="_blank" href="<?php echo $url; ?>"><?php the_title(); ?></a>
</h2>
<div class="sep"></div>
<div class="entry-content">
	<?php the_content(''); ?>
</div>