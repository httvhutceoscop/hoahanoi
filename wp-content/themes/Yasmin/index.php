<?php get_header(); ?>

<?php if (of_get_option('w2f_feat_slide') == "1") { ?>
  <div class="container" id="feature">
    <div class="flexslider">
      <ul class="slides">

        <?php  $count = of_get_option('w2f_slide_number');
        $slidecat = of_get_option('w2f_slide_categories');
        $query = new WP_Query(array('cat' => $slidecat, 'posts_per_page' => $count));
        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();  ?>

          <li>
            <?php $image_attr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'top_feature'); ?>
            <a href="<?php the_permalink() ?>"> <img src="<?php echo $image_attr[0]; ?>"></a>

            <div class="flex-caption">
              <h3> <?php the_title(); ?></h3>
            </div>

          </li>

        <?php endwhile; endif; ?>
      </ul>
    </div>
  </div>

<?php } ?>

  <!-- end feature -->
<?php if (of_get_option('w2f_callout_box') == "1") { ?>
  <div class="container" id="callout">
    <p> <?php echo of_get_option('w2f_callout'); ?> </p>
  </div>
<?php } ?>

  <!-- end callout -->

  <div class="container" id="recent-posts">
    <div class="sixteen columns leftbox">
      <h2>Hoa tiêu biểu</h2>
    </div>

    <?php  $query = new WP_Query(array('posts_per_page' => '8'));
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();  ?>

      <div class="four columns rightbox">
        <?php $image_attr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'index_wide'); ?>
        <div class="item">
          <a href="<?php the_permalink() ?>"> <img src="<?php echo $image_attr[0]; ?>" class="index-wideimg scale-with-grid"></a>

          <div class="panelpost">
            <h2><a href="<?php the_permalink() ?>"> <?php the_title(); ?> </a></h2>
            <!--<span class="paneldate"><?php /*the_time('l, n F Y'); */?></span>-->
            <?php //wpe_excerpt('wpe_excerptlength_index', ''); ?>
          </div>
        </div>
      </div>

    <?php endwhile; endif; ?>
  </div>
  <!-- end posts -->

  <div class="container">
    <div id="left" class="twelve columns">
      <div class="leftbox">
        <h2>Hoa mới về</h2>
      </div>
      <?php  $query = new WP_Query(array('posts_per_page' => '12'));
      if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();  ?>

        <div class="six columns rightbox m-r-0">
          <?php $image_attr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'index_wide'); ?>
          <div class="item">
            <a href="<?php the_permalink() ?>"> <img src="<?php echo $image_attr[0]; ?>" class="index-wideimg scale-with-grid"></a>

            <div class="panelpost">
              <h2><a href="<?php the_permalink() ?>"> <?php the_title(); ?> </a></h2>
              <!--<span class="paneldate"><?php /*the_time('l, n F Y'); */?></span>-->
              <?php //wpe_excerpt('wpe_excerptlength_index', ''); ?>
            </div>
          </div>
        </div>

      <?php endwhile; endif; ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
<?php get_footer(); ?>