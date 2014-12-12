<div id="right" class="four columns" >

<!-- Sidebar widgets -->
<div class="sidebar">
<ul>
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar') ) : else : ?>
	<?php endif; ?>
  <?php include (TEMPLATEPATH . '/khach-hang-tieu-bieu.php'); ?>
  <?php include (TEMPLATEPATH . '/cong-trinh-tieu-bieu.php'); ?>
</ul>
</div>
<div class="clear"></div>

<?php //include (TEMPLATEPATH . '/sponsors.php'); ?>

</div>