<div class='clear'></div>
</div>

<div class="container" id="bottom">
	<ul>

	<?php if ( !function_exists('dynamic_sidebar')
	        || !dynamic_sidebar("Footer") ) : ?>  
	
	<?php endif; ?>
	
	</ul>
	<div class='clear'></div>
</div>

<div id="footer" class="container">
	<div class="fcred">
		Copyright &copy; <?php echo date('Y');?> <a href="<?php bloginfo('siteurl'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> - <?php bloginfo('description'); ?>.<br />
		<a href="#" title="Website Design">Website Design</a> by <a href="http://vietnguyentien.com/" title="Viet Nguyen Tien">VNT</a>.
	</div>	
<div class='clear'></div>	
<?php wp_footer(); ?>
</div>
<div class='clear'></div>	
</div>
</body>
</html>      