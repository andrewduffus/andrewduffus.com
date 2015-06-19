<div class="entry-meta-single clearfix">
		<div class="post-meta">
			<span class="entry-date"><strong><?php _e('Date', 'si_theme') ?>:</strong> <?php the_time( get_option('date_format') ); ?></span> 				
			<span class="author"><strong><?php _e('Author', 'si_theme') ?>:</strong> <?php the_author_posts_link();?></span> 
			<span class="comments-link"><strong><?php _e('Comments', 'si_theme') ?>:</strong> <?php comments_popup_link('0','1','%'); ?></span>	
			<span class="entry-categories"><strong><?php _e('Categories', 'si_theme') ?>:</strong> <?php the_category(' - ') ?></span>
			<?php if (has_tag()) { ?><span class="entry-tags"><?php the_tags(__('<strong>Tags:</strong> ','si_theme'),' - '); ?> </span> <?php }?>
			<?php edit_post_link( __('Edit', 'si_theme'), '<span class="edit-post">[', ']</span>' ); ?>
		</div>
		<div class="separator"></div>	
		<div class="entry-facebook clearfix"><strong><?php _e('Facebook', 'si_theme') ?>:</strong>
			<span class="facebook-btn">
				<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=button_count&amp;show_faces=false&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
			</span>
		</div>		
		<div class="entry-twitter clearfix"><strong><?php _e('Twitter', 'si_theme') ?>:</strong>
			<span class="twitter-btn"><script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
			<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo get_permalink($post->ID); ?>" data-text="<?php echo $post->post_title; ?>" data-count="horizontal">Tweet</a>
			</span>
		</div>						
		<div class="separator"></div>
		<div class="blog-navigation">
			<?php if( get_next_post() ) : ?>
				<span class="btn-prev"><?php next_post_link('%link', __('Previous', 'si_theme')) ?></span>
				<?php if( get_previous_post() ) : ?>  <span class="nav-sep">|</span> <?php endif; ?>
			<?php endif; ?>
			  <?php if( get_previous_post() ) : ?>
				<span class="btn-next"><?php previous_post_link('%link', __('Next', 'si_theme')) ?></span>
			<?php endif; ?>
		</div>
</div>