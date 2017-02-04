<?php get_header(); ?>



<div class="dc_main clearfix">

<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div id="breadcrumbs">','</div>');} ?>
<div class="dc_widget_top">
	<div class="dc_main">
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Widget Content')) : ?><?php endif;?>
	</div>
</div>

	<div class="dc_content dc_single_content">
		<div class="dc_single_body clearfix">

<h1><?php echo single_cat_title(); ?></h1>

<?php $catid = get_query_var('cat'); ?>
<div class="dcar_des clearfix">
	<?php echo category_description( $catid ); ?>
</div>

<div class="dch_lastnews clearfix">
			<div class="dch_lastnews_title">
				<h2>Latest News</h2>
			</div>
			<div class="dch_lastnews_list clearfix">
<?php $catslug = get_cat_slug($catid); ?>
			<?php echo do_shortcode('[ajax_load_more post_type="post" category="'.$catslug.'" scroll="false" button_label="Show"]'); ?>

			</div>
		</div>

		</div>
	</div>
	<div class="dc_widget">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>