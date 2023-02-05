<?php get_header(); ?>



<div class="first-view">

  <div class="first-view__title">
    <h1><?php the_title();?></h1>
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

<section class="concept">
  <div class="section__inner">

    <div class="concept__content">
      <div class="concept__text">
        <h3 class="concept__head">美味しいコーヒーと食事で、<br>最高のひとときを。</h3>
        <p class="concept__sub-head">ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
          ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
          ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
          ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。</p>
      </div>
      <div class="concept__img">
        <img src="<?php echo get_template_directory_uri() ?>/img/img_concept1.png" alt="">
      </div>
    </div>

    <div class="concept__content reverse">
      <div class="concept__text">
        <h3 class="concept__head">本場イタリアで培った<br>自慢のパスタ</h3>
        <p class="concept__sub-head">ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
          ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
          ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
          ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。</p>
      </div>
      <div class="concept__img">
        <img src="<?php echo get_template_directory_uri() ?>/img/img_concept2.png" alt="">
      </div>
    </div>

    <div class="concept__content">
      <div class="concept__text">
        <h3 class="concept__head">ほどよい甘さの<br>自家製こだわりクロワッサン</h3>
        <p class="concept__sub-head">ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
          ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
          ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
          ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。</p>
      </div>
      <div class="concept__img">
        <img src="<?php echo get_template_directory_uri() ?>/img/img_concept2.png" alt="">
      </div>
    </div>



  </div>
</section>







<?php get_footer(); ?>