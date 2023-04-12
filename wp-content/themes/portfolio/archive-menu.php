<?php get_header(); ?>



<div class="first-view">

  <div class="first-view__title">
    <h1><?php the_title(); ?></h1>
    <span><?php the_content(); ?></span>
  </div>

</div>

<?php if (function_exists('bcn_display')) : ?>
  <!-- breadcrumb -->
  <div class="breadcrumb">
    <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 
    ?>
  </div><!-- /breadcrumb -->
<?php endif; ?>

<section class="l-menu">


  <div class="l-tab-list">
    <ul class="p-tab-list">
      <li class="p-tab-list__item">
        <a href="">パスタ</a>
      </li>
      <li class="p-tab-list__item">
        <a href="">パスタ</a>
      </li>
      <li class="p-tab-list__item">
        <a href="">パスタ</a>
      </li>
      <li class="p-tab-list__item">
        <a href="">パスタ</a>
      </li>
    </ul>

  </div>

  <div class="l-menu-wrap">

    <div class="l-menu-list">
      <ul class="p-menu-list">
        <?php while(have_posts()) : the_post() ;?>
        <li class="p-menu-list__item">
          <div class="p-item-card">
            <div class="p-item-card__img">
              <img src="<?php echo get_template_directory_uri() ?>/img/img_pasta1.jpg" alt="">
            </div>
            <div class="p-item-card__content">
              <p class="p-item-card__title"><?php the_field('menu_title') ?></p>
              <p class="p-item-card__price"><?php the_field('price') ?></p>
            </div>
          </div>
        </li>
        <?php endwhile; ?>
        <li class="p-menu-list__item">
          <div class="p-item-card">
            <div class="p-item-card__img">
              <img src="img/img_pasta1.jpg" alt="">
            </div>
            <div class="p-item-card__content">
              <p class="p-item-card__title">パスタ</p>
              <p class="p-item-card__price">300円</p>
            </div>
          </div>
        </li>
        <li class="p-menu-list__item">
          <div class="p-item-card">
            <div class="p-item-card__img">
              <img src="img/img_pasta1.jpg" alt="">
            </div>
            <div class="p-item-card__content">
              <p class="p-item-card__title">パスタ</p>
              <p class="p-item-card__price">300円</p>
            </div>
          </div>
        </li>
        <li class="p-menu-list__item">
          <div class="p-item-card">
            <div class="p-item-card__img">
              <img src="img/img_pasta1.jpg" alt="">
            </div>
            <div class="p-item-card__content">
              <p class="p-item-card__title">パスタ</p>
              <p class="p-item-card__price">300円</p>
            </div>
          </div>
        </li>
        <li class="p-menu-list__item">
          <div class="p-item-card">
            <div class="p-item-card__img">
              <img src="img/img_pasta1.jpg" alt="">
            </div>
            <div class="p-item-card__content">
              <p class="p-item-card__title">パスタ</p>
              <p class="p-item-card__price">300円</p>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>





</section>















<?php get_footer(); ?>