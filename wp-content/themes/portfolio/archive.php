<?php get_header(); ?>

<?php if (function_exists('bcn_display')) : ?>
  <!-- breadcrumb -->
  <div class="breadcrumb">
    <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 
    ?>
  </div><!-- /breadcrumb -->
<?php endif; ?>

<div class="archive-head m_description">
  <div class="archive-lead">ARCHIVE</div>
  <h1 class="archive-title m_category"><?php the_archive_title();?></h1><!-- /archive-title -->
  <div class="archive-description">
    <p><?php the_archive_description(); //説明を表示 
        ?></p>
  </div><!-- /archive-description -->
</div><!-- /archive-head -->
<section class="news">
  <div class="section__inner">
    <h2>
      <?php
      $category = get_the_category();
      if($category[0]){
        echo '<h2>'. $category[0]->cat_name . '</h2>';
      }  ?>
    <div class="news__content">
      <?php while (have_posts()) : the_post(); ?>
        <?php if (is_first()) : ?>
          <div class="news__content-first">
            <ul>
              <li>
                <div class="news__content-category">
                  <?php the_category(); ?>
                </div>
                <a href="<?php echo get_permalink(); ?>">
                  <div class="news__content-img">
                    <?php if (has_post_thumbnail()) {
                      the_post_thumbnail('thumbnail');
                    } else {
                      echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                    }
                    ?>

                  </div>
                  <div class="news__content-title"><?php the_title(); ?></div>
                  <div class="news__content-text"><?php the_excerpt(); ?></div>
                  <div class="news__content-date"><?php the_date(`Y/m/d`); ?></div>
              </li>
              </a>
            </ul>
          </div>
          <div class="news__content-other">
            <ul>
            <?php else : ?>
              <li>
                <div class="news__content-img">
                  <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('thumbnail');
                  } else {
                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                  } ?>
                </div>
                <div class="news__content-title"><?php the_title(); ?></div>
                <div class="news__content-text"><?php the_excerpt(); ?></div>
                <div class="news__content-date"><?php the_date(`Y/m/d`); ?></div>
              </li>
            <?php endif; ?>
          <?php endwhile; ?>
            </ul>
          </div>

    </div>
    <a href="" class="section__link">過去のお知らせ</a>
  </div>
</section>






<?php get_footer(); ?>