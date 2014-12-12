<?php get_header(); ?>

  <div id="left" class="twelve columns">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>

        <div class="breadcrumb pad-r-l-10">
          <div class="firstTab">
            <a href="<?php bloginfo('url'); ?>/"> Trang chủ </a>
          </div>
          <div class="topSeo">
            <span class="beforeArrowTab"></span>
            <div class="secondTab"><h2><?php the_category(', '); ?></h2></div>
            <span class="afterArrowTab"></span>
          </div>
        </div>

        <div class="post" id="post-<?php the_ID(); ?>">
          <div class="title">
            <h2><a href="<?php the_permalink() ?>" rel="bookmark"
                   title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>

<!--            <div class="postmeta"><span>Posted by --><?php //the_author_posts_link(); ?><!--</span> |-->
<!--              <span>--><?php //the_time('l, n F Y'); ?><!--</span> | <span>--><?php //the_category(', '); ?><!--</span></div>-->
          </div>

          <div class="post-img-featured">
            <?php $image_attr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post_feature'); ?>
            <img src="<?php echo $image_attr[0]; ?>" class="index-wideimg scale-with-grid">
          </div>

          <div class="entry">
            <div class="descriptions">
              <?php the_meta(); ?>
            </div>

            <?php the_content('Read the rest of this entry &raquo;'); ?>
            <div class="clear"></div>
            <?php wp_link_pages(array('before' => '<p><strong>Pages: </strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
          </div>
        </div>

        <div class="tabs comment">
          <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
          <label for="tab-1" class="tab-label-1"><i class="fa fa-facebook-square"></i>Facebook</label>

          <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
          <label for="tab-2" class="tab-label-2"><i class="fa fa-google-plus-square"></i>Google +</label>

          <!--        <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />-->
          <!--        <label for="tab-3" class="tab-label-3"><i class="fa fa-google-plus-square"></i>Google +</label>-->
          <div class="clear-shadow"></div>

          <div class="content-tab">
            <div class="tab-1 commentwrap">
              <h4 class="comment-title">
                <?php //print get_fb_comment_count(get_permalink($post->ID));?>
                Bình luận
              </h4>
              <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="685" data-numposts="15" data-colorscheme="light"></div>
            </div>
            <div class="tab-2">
              <script src="https://apis.google.com/js/plusone.js"></script>
              <div class="g-comments"data-href="<?php the_permalink(); ?>"data-width="685" data-first_party_property="BLOGGER" data-view_type="FILTERED_POSTMOD"></div>
            </div>
          </div>
        </div>

        <?php //comments_template(); ?>
      <?php endwhile; endif; ?>
  </div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>