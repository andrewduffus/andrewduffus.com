<?php if(is_page_template('template-portfolio.php')) : ?>	 
			
	<?php if (of_get_option('portfolio_filter') == '1') { ?>	
		<div id="portfolio-filter" class="widget">
			<h3 class="widget-title"><?php _e('Filter', 'si_theme') ?></h3>
			<div class="sep"></div>
			<?php $cats_arr = get_terms('portfolio-category', 'hide_empty=1&hierarchical=0&parent=0');										
				if(!empty($cats_arr)){ ?>
					<ul id="filter" class="clearfix"> 
						<li class="all"><a class="active" href="#" data-filter="*" ><?php _e('All', 'si_theme') ?></a></li>
						<?php foreach($cats_arr as $key => $cat_item){ ?>
						<li class="cat-item <?php echo $cat_item->slug; ?>">
							<a href="#" data-filter=".<?php echo $cat_item->slug; ?>"><?php echo $cat_item->name; ?></a> 
						</li> 
						<?php } ?>
					</ul>
				<?php } 
					 ?>
		</div>
	<?php } ?>
	
<?php elseif(is_page_template('template-gallery-listing.php')) : ?>	
	<?php if (of_get_option('gallery_filter') == '1') { ?>	
		<div id="portfolio-filter" class="widget">
			<h3 class="widget-title"><?php _e('Filter', 'si_theme') ?></h3>
			<div class="sep"></div>
			<?php $cats_arr = get_terms('gallery-category', 'hide_empty=1&hierarchical=0&parent=0');										
				if(!empty($cats_arr)){ ?>
					<ul id="filter" class="clearfix"> 
						<li class="all"><a class="active" href="#" data-filter="*" ><?php _e('All', 'si_theme') ?></a></li>
						<?php foreach($cats_arr as $key => $cat_item){ ?>
						<li class="cat-item <?php echo $cat_item->slug; ?>">
							<a href="#" data-filter=".<?php echo $cat_item->slug; ?>"><?php echo $cat_item->name; ?></a> 
						</li> 
						<?php } ?>
					</ul>
				<?php } 
					 ?>
		</div>
	<?php } ?>
<?php else: ?>
	<div id="widgets-section">			
		<?php if (get_post_type() == 'portfolio' || get_post_type() == 'gallery' || is_tax( 'portfolio-category' ) || is_tax( 'gallery-category' )) :?>
		<?php elseif (is_home() || is_archive() || is_single() || is_search() ) : ?>
			 <?php dynamic_sidebar( 'Blog Sidebar' ); ?>
		<?php else :?>
			  <?php dynamic_sidebar( 'Main Sidebar' ); ?> 
		 <?php endif; ?>
		 
	</div>
<?php endif;?>