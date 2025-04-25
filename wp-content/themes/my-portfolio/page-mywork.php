<?php
/*
Template Name: MyWork 
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Work</title>

  <!-- Стили сайта -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <!-- Иконки -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body style="margin:0; padding:0; background-color:#FFFEF9;">

<!-- НАВИГАЦИЯ НА ПОЛНУЮ ШИРИНУ -->
<header>
  <nav class="main-nav-mywork">
    <div class="nav-container-mywork">

      <!-- Логотип -->
      <div class="nav-logo-mywork">
        <a href="<?php echo home_url(); ?>">
          <?php $logo = get_field('logo_mywork'); ?>
          <?php if ($logo): ?>
            <img src="<?php echo esc_url($logo); ?>" alt="Logo">
          <?php else: ?>
            <span style="font-weight: bold;">LOGO</span>
          <?php endif; ?>
        </a>
      </div>

      <!-- Ссылки -->
      <ul class="nav-links-mywork">
        <li><a href="<?php echo home_url(); ?>">Home</a></li>
        <li><a href="<?php echo get_permalink(get_page_by_title('About Me')); ?>">About Me</a></li>
      </ul>

    </div>
  </nav>
</header>


<section class="work-title-mywork">
  <h1><?php the_field('my_work_title'); ?></h1>
</section>


<section class="button-grid-mywork">
  <a href="#logos" class="mywork-button"><?php the_field('button_1_text'); ?></a>
  <a href="#posters" class="mywork-button"><?php the_field('button_2_text'); ?></a>
  <a href="#infographics" class="mywork-button"><?php the_field('button_3_text'); ?></a>
  <a href="#uxui" class="mywork-button"><?php the_field('button_4_text'); ?></a>
</section>




<section id="logos" class="logos-section-mywork">
  <h2 class="logos-title"><?php the_field('logos_title'); ?></h2>

  <div class="logos-grid">
    <?php for ($i = 1; $i <= 3; $i++):
      $image = get_field("logos_image_$i");
      if ($image): ?>
        <div class="logo-item">
          <img src="<?php echo esc_url($image); ?>" alt="Logo <?php echo $i; ?>">
        </div>
    <?php endif; endfor; ?>
  </div>
</section>


<section id="posters" class="posters-section-mywork">
  <h2 class="posters-title"><?php the_field('posters_title'); ?></h2>

  <div class="posters-grid">
    <?php for ($i = 1; $i <= 2; $i++):
      $image = get_field("posters_image_$i");
      if ($image): ?>
        <div class="poster-item">
          <img src="<?php echo esc_url($image); ?>" alt="Poster <?php echo $i; ?>">
        </div>
    <?php endif; endfor; ?>
  </div>
</section>


<section id="infographics" class="infographics-section-mywork">
  <h2 class="infographics-title"><?php the_field('infographics_title'); ?></h2>

  <div class="infographics-grid">
    <?php for ($i = 1; $i <= 2; $i++):
      $image = get_field("infographics_image_$i");
      if ($image): ?>
        <div class="infographic-item">
          <img src="<?php echo esc_url($image); ?>" alt="Infographic <?php echo $i; ?>">
        </div>
    <?php endif; endfor; ?>
  </div>
</section>



<section id="uxui" class="uxui-section-new">
  <h2 class="uxui-title"><?php the_field('uxui_title_new'); ?></h2>

  <!-- Первый ряд -->
  <div class="uxui-row">
    <?php 
    $img1 = get_field('uxui_img_1');
    $img2 = get_field('uxui_img_2');
    if ($img1): ?>
      <div class="uxui-card"><img src="<?php echo esc_url($img1); ?>" alt="UX/UI 1"></div>
    <?php endif; ?>
    <?php if ($img2): ?>
      <div class="uxui-card"><img src="<?php echo esc_url($img2); ?>" alt="UX/UI 2"></div>
    <?php endif; ?>
  </div>

  <!-- Второй ряд -->
  <div class="uxui-row">
    <?php 
    $img3 = get_field('uxui_img_3');
    $img4 = get_field('uxui_img_4');
    if ($img3): ?>
      <div class="uxui-card"><img src="<?php echo esc_url($img3); ?>" alt="UX/UI 3"></div>
    <?php endif; ?>
    <?php if ($img4): ?>
      <div class="uxui-card"><img src="<?php echo esc_url($img4); ?>" alt="UX/UI 4"></div>
    <?php endif; ?>
  </div>
</section>


<footer class="footer-mywork">
  <div class="footer-inline-mywork">

    <!-- Соцсети -->
    <div class="footer-social-mywork">
      <a href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
      <a href="https://facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a>
      <a href="https://messenger.com" target="_blank"><i class="fa-brands fa-facebook-messenger"></i></a>
    </div>

    <!-- Логотип -->
    <div class="footer-logo-mywork">
      <img src="<?php echo esc_url(get_field('footer_logo_mywork')); ?>" alt="Footer Logo">
    </div>

    <!-- Контакты -->
    <div class="footer-contact-mywork">
      <p>polinab071@gmail.com</p>
      <p>+45 52 90 12 96</p>
    </div>

  </div>
</footer>
            







</body>
</html>
