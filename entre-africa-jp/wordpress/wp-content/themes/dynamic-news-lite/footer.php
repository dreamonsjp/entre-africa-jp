
	<?php do_action('dynamicnews_before_footer'); ?>
	
	<div id="footer-wrap">
	
		<footer id="footer" class="container clearfix" role="contentinfo">
			
			<nav id="footernav" class="clearfix" role="navigation">
				<?php 
					// Get Navigation out of Theme Options
					wp_nav_menu(array('theme_location' => 'footer', 'container' => false, 'menu_id' => 'footernav-menu', 'echo' => true, 'fallback_cb' => '', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'depth' => 1));
				?>
				<h4 id="footernav-icon"></h4>
			</nav>
			
			<div id="footer-text">
				<?php do_action('dynamicnews_footer_text'); ?>
			</div>
			
		</footer>
		
	</div>

</div><!-- end #wrapper -->

<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-81622908-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
