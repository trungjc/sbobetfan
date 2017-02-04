<?php get_header(); ?>

<div class="dc_ad dcad_top clearfix">
	<?php the_field('ads_top', option); ?>
</div>

<div class="dc_main clearfix">
	<div class="dc_content">
	
		<div class="dc_feature clearfix">
<?php
$feature_cat = get_field('feature_not', option);
$feature_item = get_field('feature_item', option);
$feature = array(
	'cat' => ''.-$feature_cat.'',
	'posts_per_page' => 5,
);
query_posts($feature);
?>
	<?php if (have_posts()); { $post = $posts[0]; $c=0; ?>
	<?php while (have_posts()) { the_post(); ?>
	
	<?php $c++; if($c ==1) { ?>
		<div class="dc_feature_item dc_feature1">
			<?php the_category(); ?>
			<?php if(has_post_thumbnail()) { ?>
				<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="dch_news_img"><img src="<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,'img430x250', true); echo $image_url[0];  ?>" alt="<?php the_title(); ?>" /></a>
			<?php } ?>
				<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
		</div>
	<?php } elseif ($c==2) { ?>
		<div class="dc_feature_item dc_feature23">
			<?php the_category(); ?>
			<?php if(has_post_thumbnail()) { ?>
				<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="dch_news_img"><img src="<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,'thumbnail', true); echo $image_url[0];  ?>" alt="<?php the_title(); ?>" /></a>
			<?php } ?>
				<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
		</div>
	<?php } elseif ($c==3) { ?>
		<div class="dc_feature_item dc_feature23">
			<?php the_category(); ?>
			<?php if(has_post_thumbnail()) { ?>
				<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="dch_news_img"><img src="<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,'thumbnail', true); echo $image_url[0];  ?>" alt="<?php the_title(); ?>" /></a>
			<?php } ?>
				<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
		</div>
		<div class="clear"></div>
	<?php } else { ?>
		<div class="dc_feature_item dc_features">
			<?php the_category(); ?>
			<?php if(has_post_thumbnail()) { ?>
				<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="dch_news_img"><img src="<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,'thumbnail', true); echo $image_url[0];  ?>" alt="<?php the_title(); ?>" /></a>
			<?php } ?>
				<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
		</div>
	<?php } ?>
	
	
	<?php } ?>
	<?php } wp_reset_query(); ?>
		</div>
	
	<?php
		$args = array(
			'posts_per_page' => 5,
			'tax_query' => array(
				array(
					'taxonomy' => 'post_format',
					'field' => 'slug',
					'terms' => 'post-format-video'
				)
			)
		);
		query_posts( $args );
	?>
	<?php if (have_posts()); { $post = $posts[0]; $c=0; ?>
		<div class="dc_watch clearfix">
			<div class="dch_lastnews_title clearfix">
				<h2><a href="#" title="Must Watch">Must Watch</a></h2>
			</div>
	<?php while (have_posts()) { the_post(); ?>
				<?php $c++; if($c ==1) { ?>
				<div class="dc_watch_lagre">
<?php if(has_post_thumbnail()) { ?>
					<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img src="<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,'img430x250', true); echo $image_url[0];  ?>" alt="<?php the_title(); ?>" /></a>
	<?php } ?>
					<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
				</div>
				<?php } else { ?>
				<div class="dc_watch_item">
<?php if(has_post_thumbnail()) { ?>
					<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img src="<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,'thumbnail', true); echo $image_url[0];  ?>" alt="<?php the_title(); ?>" /></a>
	<?php } ?>
					<h4><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
				</div>
				<?php } ?>
				
	<?php } ?>
		</div>
	<?php } wp_reset_query(); ?>
	
		<div class="dch_lastnews clearfix">
			<div class="dch_lastnews_title">
				<h2>Latest News</h2>
			</div>
			<div class="dch_lastnews_list clearfix">
			<?php $news_item = get_field('last_news_item', option); ?>
			<?php echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="'.$news_item.'" category="football" scroll="false" button_label="Show"]'); ?>
			
<?php /*?><?php
$cat_news = get_field('last_news', option);
$cat_item = get_field('last_news_item', option);
?>
<?php
$args = array(
	'cat' => ''.$cat_news.'',
	'posts_per_page' => $cat_item,
);
query_posts($args);
?>
	<?php if (have_posts()); { ?>
	<?php while (have_posts()) { the_post(); ?>
				<div class="dch_lastnews_item clearfix">
	<?php if(has_post_thumbnail()) { ?>
					<a class="pull-left" href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img src="<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,'thumbnail', true); echo $image_url[0];  ?>" alt="<?php the_title(); ?>" /></a>
	<?php } ?>
					<?php the_category(); ?>
					<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
					<aside><?php the_excerpt(); ?></aside>
				</div>
	<?php } ?>
	<?php } wp_reset_query(); ?><?php */?>
			</div>
		</div>
	</div>
	<div class="dc_widget">
		<?php get_sidebar(); ?>
	</div>
</div>

<div class="dc_ad dcad_bottom clearfix">
	<?php the_field('ads_end', option); ?>
</div>

<?php get_footer(); ?>