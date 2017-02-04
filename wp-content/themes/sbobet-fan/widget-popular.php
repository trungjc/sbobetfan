<div class="dcw_popular_title">
	<h3>Popular Post</h3>
</div>
<?php if( have_rows('list_popular', $acfw) ) { ?>
<div class="dcw_popular clearfix">
<?php while ( have_rows('list_popular', $acfw) ) { the_row(); ?>

<?php $post_id = get_sub_field('post_popular'); ?>
<?php
$args = array(
	'p' => ''.$post_id.'',
);
query_posts($args);
?>
<?php if (have_posts()); { ?>
<?php while (have_posts()) { the_post(); ?>
	<div class="dcw_popular_item clearfix">
<?php if(has_post_thumbnail()) { ?>
		<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img src="<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,'thumbnail', true); echo $image_url[0];  ?>" alt="<?php the_title(); ?>" /></a>
<?php } ?>
		<h4><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
	</div>
<?php } ?>
<?php } ?>

<?php } ?>
</div>
<?php } ?>
