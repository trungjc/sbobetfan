<?php get_header(); ?>



<div class="dc_main clearfix">

<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div id="breadcrumbs">','</div>');} ?>
	<div class="dc_content dc_single_content">
		<div class="dc_single_body clearfix">
	
		<h1><?php the_title(); ?></h1>
		<div class="clearfix">
<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
<?php the_content(); ?>
<?php }} wp_reset_query(); ?>

	<div class="dc_share clearfix">
		Share:
		<ul>
			<li><a onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php the_title(); ?>&amp;p[summary]=<?php echo get_excerpt(120);?>&amp;p[url]=<?php the_permalink(); ?>&amp;p[images][0]=<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,'full', true); echo $image_url[0];  ?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)">Share on Facebook</a></li>
		</ul>
	</div>
			
	<div class="fb-comments" data-href="<?php the_permalink() ?>" data-width="100%" data-numposts="5"></div>	
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