<?php get_header(); ?>

<div class="dc_main clearfix">

<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div id="breadcrumbs">','</div>');} ?>

	<div class="dc_content dc_single_content">
		<div class="dc_single_body clearfix">
	
<?php $catid = get_query_var('cat'); ?>
<div class="dcar_des clearfix">
	<?php echo category_description( $catid ); ?>
</div>

		<div class="dch_lastnews clearfix">
			<div class="dch_lastnews_list clearfix">

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
	<?php } wp_reset_query(); ?>

			</div>
		</div>

		</div>
	</div>
	<div class="dc_widget">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>