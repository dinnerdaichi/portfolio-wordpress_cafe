<?php get_header(); ?>

<?php if (function_exists('bcn_display')) : ?>
  <!-- breadcrumb -->
  <div class="breadcrumb">
    <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 
    ?>
  </div><!-- /breadcrumb -->
<?php endif; ?>

<div class="first-view">

  <h1 class="first-view__header">
    <span class="first-view__header-en">NEWS</span>
    <span class="first-view__header-ja">ニュース</span>
  </h1>
  <div class="first-view__img">
    <img src="<?php echo get_template_directory_uri() ?>/img/img_firstview.jpg" alt="">
  </div>


</div>

<div class="archive-head m_description">
  <div class="archive-description">
    <p><?php the_archive_description(); //説明を表示 
        ?></p>
  </div><!-- /archive-description -->
</div><!-- /archive-head -->

<section class="single">
  <div class="section__inner">
    <?php
    $category = get_the_category();
    if ($category[0]) : ?>
      <div class="category">
        <a href="<?php echo esc_url(get_the_category($category[0]->term_id)); ?>"><?php get_the_category($category[0]->cat_name); ?></a>
      </div>
    <?php endif; ?>
    <div class="entry-img">
      <?php if (has_post_thumbnail()) {
        the_post_thumbnail('large');
      }
      ?>
    </div>
    <div class="entry-body">
      <h1 class="category__title"><?php the_title(); ?></h1>
      <div class="entry-time">
        <p>公開日<?php the_time(); ?></p>
      </div>
      <div class="entry-update">
        <p>最終更新日<?php the_modified_time();  ?></p>
      </div>
      <p class="entry-content"><?php the_content(); ?></p>
    </div>

  <?php /*
    <?php $post_tags = get_the_tags(); ?>
    <div class="entry-tag-items">
      <div class="entry-tag-head">
        <?php if ($post_tags) : ?>
          <?php foreach ($post_tags as $tag) : ?>
            <div class="entry-tag-item">
              <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"><?php echo esc_html($tag->name); ?></a>
            <?php endforeach; ?>
          <?php endif; ?>
            </div>
      </div>
    </div>
<!-- タグいらないので一旦削除 -->
*/ ?>


    <div class="entry-related">
      <div class="relate-title">関連記事</div>

      <?php if (has_category()) {
        $post_cats = get_the_category();
        $cat_ids = array();
        foreach ($post_cats as $cat) {
          $cat_ids[] = $cat->term_id;
        }
      }

      $myposts = get_posts(array(
        'post_type' => 'post',
        'posts_per_page' => 8,
        'post__not_in' => array($post->ID),
        'category__in' => $cat_ids,
        'orderby' => 'rand'
      ));
      if ($myposts) : ?>
        <div class="related-items">
          <?php foreach ($myposts as $post) : setup_postdata($post); ?>
            <a href="<?php the_permalink(); ?>">
              <div class="related-item-img">
                <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail('medium');
                } else {
                  echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                } ?>
              </div>
              <div class="related-item-title">
                <?php the_title(); ?>
              </div>
            </a>
          <?php endforeach;
          wp_reset_postdata(); ?>
        </div>
      <?php endif; ?>
    </div>

    <div class="related-button">
      <a href="">記事一覧</a>
    </div>

  </div>
</section>






<?php get_footer(); ?>