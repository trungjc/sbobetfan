<footer id="dc_footer" class="clearfix">
	<div class="dc_main">
		<div class="dc_footer_content clearfix">
				<?php the_field('dc_footer',option); ?>
		</div>
	</div>
</footer>
<div id="footer_bottom" class="clearfix">
	<div class="dc_main">
		<div class="footer_bottom">
			<?php the_field('footer_end',option); ?>
		</div>
	</div>
</div>



<?php wp_footer(); ?>

<script type="text/javascript" >
	

$(document).ready(function(){
	$('.menu_mobile').on('click',function(){
		$(this).toggleClass('active');
	});
	$('.dcs_search').click(function(e) {
	    $('.dch_search').slideToggle();
	    $(this).toggleClass('dcs_open');
	});
})	
	
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>