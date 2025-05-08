<?php
/*
Template Name: About Me
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>







<!-- Шапка -->
<header>
  <nav class="main-nav-about">
    <div class="nav-container-about">
      <div class="nav-logo-about">
        <a href="<?php echo home_url(); ?>">
          <?php $logo = get_field('site_logo'); ?>
          <?php if ($logo): ?>
            <img src="<?php echo esc_url($logo); ?>" alt="Logo">
          <?php else: ?>
            <span style="font-weight: bold;">LOGO</span>
          <?php endif; ?>
        </a>
      </div>

      <ul class="nav-links-about">
        <li><a href="<?php echo home_url(); ?>">Home</a></li>
        <li><a href="<?php echo get_permalink(get_page_by_path('my-work')); ?>">My Work</a></li>
      </ul>
    </div>
  </nav>
</header>

<!-- Блок About Me -->
<section class="about-me-section">
  <div class="about-me-wrapper">
    <h1 class="about-me-heading">About Me</h1>

    <div class="about-me-background">
      <div class="about-me-text">
        <?php the_field('about_me_text'); ?>
      </div>
    </div>
  </div>
</section>

<!-- Блок с кнопкой и резюме -->
<section class="about-me-row-section">
  <div class="about-me-row-wrapper">
    <div class="about-column about-text">
      <?php the_field('about_me_text_button'); ?>
    </div>

    <div class="about-column about-download">
      <h2 class="resume-heading">Want to know more?</h2>

      <?php
      // Пытаемся взять PDF из текущей страницы
      $resume = get_field('resume_pdf');

      // Если нет, пробуем взять с главной страницы
      if (!$resume) {
        $front_id = get_option('page_on_front');
        $resume = get_field('resume_pdf', $front_id);
      }
      ?>

      <?php if ($resume): ?>
        <a href="<?php echo esc_url($resume); ?>" class="resume-button" download>
          Resume
        </a>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Подвал -->
<footer class="footer-aboutme">
  <div class="footer-inline-aboutme">
    <div class="footer-social-aboutme">
      <a href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
      <a href="https://facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a>
      <a href="https://messenger.com" target="_blank"><i class="fa-brands fa-facebook-messenger"></i></a>
    </div>

    <div class="footer-logo-aboutme">
      <?php $footer_logo = get_field('footer_logo_aboutme'); ?>
      <?php if ($footer_logo): ?>
        <img src="<?php echo esc_url($footer_logo); ?>" alt="Footer Logo">
      <?php endif; ?>
    </div>

    <div class="footer-contact-aboutme">
      <p>polinab071@gmail.com</p>
      <p>+45 52 90 12 96</p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
