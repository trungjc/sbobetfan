<?php get_header(); ?>



<div class="dc_main clearfix">

<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div id="breadcrumbs">','</div>');} ?>

	<div class="dc_content dc_single_content">
	
	<div class="dc_single_body clearfix">
	
		<div class="dc_single_catdate clearfix">
			<?php the_category(); ?>
			<?php the_date(); ?> 
		</div>
		
		<h1 class="dc_h1single"><?php the_title(); ?></h1>
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
<div class="dch_lastnews_title clearfix">
	<h3><a href="#" title="Must Watch">Must Watch</a></h3>
</div>	
	<div class="fb-comments" data-href="<?php the_permalink() ?>" data-width="100%" data-numposts="5"></div>	
		</div>

		</div>

<?php
$orig_post = $post;
global $post;
$tags = wp_get_post_tags($post->ID);
if ($tags) {
	$tag_ids = array();
	foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
	$args=array(
		'tag__in' => $tag_ids,
		'post__not_in' => array($post->ID),
		'posts_per_page'=>3,
		'caller_get_posts'=>1
	);
query_posts($args); ?>
<?php if ( have_posts() ) { ?>
	<div class="dc_related clearfix">
		<div class="dch_lastnews_title clearfix">
			<h3>Related Post</h3>
		</div>	
		<div class="dc_related_list clearfix">
<?php while( have_posts() ) { the_post(); ?>
		<div class="dc_related_item">
<?php if(has_post_thumbnail()) { ?>
			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img src="<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,'thumbnail', true); echo $image_url[0];  ?>" alt="<?php the_title(); ?>" /></a>
<?php } ?>
			<h4><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
			<?php the_category(); ?>
		</div>
<?php } ?>
		</div>
	</div>
<?php } ?>
<?php }
$post = $orig_post;
wp_reset_query();
?>


	</div>
	<div class="dc_widget">
		<?php get_sidebar(); ?>
	</div>
</div>


<?php get_footer(); ?>