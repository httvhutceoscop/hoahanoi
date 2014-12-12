<?php get_header(); ?>

<div id="left" class="twelve columns" >
  <div class="leftbox">
    <h2><?php the_category(', '); ?></h2>
  </div>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

    <div class="six columns rightbox m-r-0">
      <?php $image_attr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'index_wide'); ?>
      <div class="item">
        <a href="<?php the_permalink() ?>">	<img src="<?php echo $image_attr[0]; ?>" class="index-wideimg scale-with-grid"></a>

        <div class="panelpost">
          <h2><a href="<?php the_permalink() ?>"> <?php the_title(); ?> </a></h2>
          <!--<span class="paneldate"><?php /*the_time('l, n F Y'); */?></span>-->
          <?php //wpe_excerpt('wpe_excerptlength_index', ''); ?>
        </div>
      </div>
    </div>
	
<!--	<div class="post" id="post---><?php //the_ID(); ?><!--">-->
<!--		<div class="title">-->
<!--			<h2><a href="--><?php //the_permalink() ?><!--" rel="bookmark" title="Permanent Link to --><?php //the_title(); ?><!--">--><?php //the_title(); ?><!--</a></h2>-->
<!--			<div class="postmeta"> 	<span>Posted by --><?php //the_author_posts_link(); ?><!--</span> | <span>--><?php //the_time('l, n F Y'); ?><!--</span> | <span>--><?php //the_category(', '); ?><!--</span> </div>-->
<!--		</div>-->
<!--	-->
<!--		<div class="entry">-->
<!--				--><?php //wpe_excerpt('wpe_excerptlength_archive', ''); ?>
<!--				<div class="clear"></div>-->
<!--			-->
<!--		</div>-->
<!--	</div>-->

<?php endwhile; ?>

<?php getpagenavi(); ?>

<?php else : ?>

	<h1 class="title">Không tìm thấy</h1>
	<p>Xin lỗi, thông tin bạn muốn tìm không có ở đây.</p>

<?php endif; ?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>