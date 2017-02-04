<!doctype html>
<html <?php language_attributes(); ?>>
<head>

<title><?php wp_title(); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

</head>
<body <?php body_class(); ?>>
<div class="dc_bar clearfix">
<?php $navt = get_field('menu_top', option); ?>
	<nav class="dc_navtop clearfix">
		<ul class="dcf_menu">
			<?php wp_nav_menu( array( 'menu' =>$navt, 'container' => false, 'items_wrap' => '%3$s' ) ); ?>
		</ul>
	</nav>
</div>

<header id="dc_header" class="clearfix">
	<div class="menu_mobile" style="display: none">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<div class="dc_main clearfix">
		<div class="dc_logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php the_field('dc_logo', option) ?>" alt="Logo"></a>
		</div>
		<nav class="dc_nav">
			<ul class="dc_menu">
				<?php $nav = get_field('menu_header', option); ?>
				<?php wp_nav_menu( array( 'menu' =>$nav, 'container' => false, 'items_wrap' => '%3$s' ) ); ?>
			</ul>
		</nav>
		<div class="dc_search">
			<div class="dcs_search">
				<i class="fa fa-search"></i>
			</div>
			<div class="dch_search">
			<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
				<input name="s" type="text" onfocus="if(this.value=='Search...') this.value='';" onblur="if(this.value=='') this.value='Search...';" value="Search..." />
				<button type="submit">Search</button>
			</form>
			</div>
		</div>
	</div>
</header>
