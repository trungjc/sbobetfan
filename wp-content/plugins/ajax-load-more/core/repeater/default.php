<div class="dch_lastnews_item clearfix">
	<?php if(has_post_thumbnail()) { ?>
					<a class="pull-left" href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img src="<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,'thumbnail', true); echo $image_url[0];  ?>" alt="<?php the_title(); ?>" /></a>
	<?php } ?>
					<?php the_category(); ?><?php the_date( $format, $before, $after, $echo ); ?> 
					<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
					<aside><?php the_excerpt(); ?></aside>
				</div>