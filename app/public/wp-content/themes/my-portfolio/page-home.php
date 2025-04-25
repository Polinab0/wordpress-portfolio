<?php
/*
Template Name: Home Page
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>


<div class="petal-container"></div>
<script>
  const container = document.querySelector('.petal-container');

  function createPetal() {
    const petal = document.createElement('div');
    petal.classList.add('petal');
    
    // Случайная позиция и длительность
    petal.style.left = Math.random() * 100 + 'vw';
    petal.style.animationDuration = 5 + Math.random() * 5 + 's'; // 5–10s
    petal.style.animationDelay = Math.random() * 3 + 's';

    container.appendChild(petal);

    // Удаляем лепесток после окончания анимации
    setTimeout(() => {
      petal.remove();
    }, 10000);
  }

  setInterval(createPetal, 500); // создаём лепесток каждые 0.5 секунды
</script>



<body>

<!-- Навигация -->
<header>
  <nav class="main-nav">
    <div class="nav-logo">
      <a href="<?php echo home_url(); ?>">
        <?php if (get_field('site_logo')) : ?>
          <img src="<?php the_field('site_logo'); ?>" alt="Logo">
        <?php else : ?>
          <span style="font-weight:bold;">LOGO</span>
        <?php endif; ?>
      </a>
    </div>

    



      <!-- ССЫЛКИ -->
      <ul class="nav-links">
        <li><a href="<?php echo get_permalink(get_page_by_title('MyWork')); ?>">My Work</a></li>
        <li><a href="<?php echo get_permalink(get_page_by_title('About Me')); ?>">About Me</a></li>
      </ul>
    </div>
  </nav>
</header>




<!-- Главный заголовок и кнопки -->
<header-box>
  <head-box-text>
    <h1><?php the_field('main_heading'); ?></h1>

    <div class="peony-image">
      <img src="http://my-site.local/wp-content/uploads/2025/04/ChatGPT-Image-Apr-23-2025-at-01_51_44-PM-300x300.png" alt="Peony Illustration">
    </div>

    <div class="buttons">
      <a href="#video-section" class="button"><?php the_field('video_button'); ?></a>
      <a href="http://my-site.local/wp-content/uploads/2025/04/Resume-P.pdf" class="button" download>Resume</a>

    </div>
  </head-box-text>
</header-box>

<!-- Текст в 4 углах и логотип -->
<div class="header-box">
  <div class="text top-left"><?php the_field('top_left_text'); ?></div>
  <div class="text top-right"><?php the_field('top_right_text'); ?></div>
  <div class="text bottom-left"><?php the_field('bottom_left_text'); ?></div>
  <div class="text bottom-right"><?php the_field('bottom_right_text'); ?></div>

  <div class="center-logo">
    <?php if (get_field('center_logo')) : ?>
      <img src="<?php the_field('center_logo'); ?>" alt="Center Logo">
    <?php endif; ?>
  </div>
</div>


<!-- Главный текст / описание -->
<section class="acf-intro">
  <div class="container">
    <?php the_field('main_text_block'); ?>
  </div>
</section>

<!-- Категории работ -->
<section id="categories-section">
  <div class="categories">
    <?php for ($i = 1; $i <= 4; $i++) : ?>
      <div class="category">
        <h3><?php the_field("category_{$i}_title"); ?></h3>
        <a href="<?php echo get_permalink(get_page_by_path('my-work')); ?>" class="more-button">
          <?php the_field("category_{$i}_button_text"); ?>
        </a>
      </div>
    <?php endfor; ?>
  </div>
</section>






<?php if (get_field('section_logo')) : ?>
  <div class="section-logo">
    <img src="<?php the_field('section_logo'); ?>" alt="Section Logo">
  </div>
<?php endif; ?>

<!-- Кнопки: резюме и визитка -->
<section class="button-block">
  <div class="button-container">
    <a href="http://my-site.local/wp-content/uploads/2025/04/Resume-P.pdf" class="custom-button" download>Resume</a>
    <a href="http://my-site.local/wp-content/uploads/2025/04/Business-card.pdf" class="custom-button" download>Business Card</a>
  </div>
</section>


<!-- Видео -->
<section id="video-section" class="video-section">
  <div class="video-title"><?php the_field('video_section_title'); ?></div>
  <div class="video-box">
    <iframe width="990" height="557" src="<?php the_field('video_link'); ?>" title="CV video" frameborder="0" allowfullscreen></iframe>
  </div>
</section>

<!-- Футер -->
<footer>
  <div class="footer-content">
    <div class="footer-social">
      <a href="<?php the_field('instagram'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
      <a href="<?php the_field('facebook'); ?>" target="_blank"><i class="fab fa-facebook"></i></a>
      <a href="<?php the_field('messenger'); ?>" target="_blank"><i class="fab fa-facebook-messenger"></i></a>
    </div>
    <div class="footer-logo">
  <?php if (get_field('footer_logo')) : ?>
    <img src="<?php the_field('footer_logo'); ?>" alt="Footer Logo">
  <?php endif; ?>
</div>

    <div class="footer-contact">
      <p><?php the_field('email'); ?></p>
      <p><?php the_field('phone'); ?></p>
    </div>
  </div>
</footer>

</body>
</html>
