<?php
/*
Template Name: About Me
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Me</title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
<header>
  <nav class="main-nav-about">
    <div class="nav-container-about">

      <!-- Логотип -->
      <div class="nav-logo-about">
        <a href="<?php echo home_url(); ?>">
        <?php if (get_field('site_logo')) : ?>
  <img src="<?php the_field('site_logo'); ?>" alt="Logo">
<?php else : ?>
  <span style="font-weight: bold;">LOGO</span>
<?php endif; ?>
        </a>
      </div>

      <!-- Ссылки -->
      <ul class="nav-links-about">
        <li><a href="<?php echo home_url(); ?>">Home</a></li>
        <li><a href="<?php echo get_permalink(get_page_by_title('MyWork')); ?>">My Work</a></li>
      </ul>

    </div>
  </nav>
</header>



<section class="about-me-section">
  <div class="about-me-wrapper">

    <!-- Заголовок вне бокса -->
    <h1 class="about-me-heading">About Me</h1>

    <!-- Подложка для текста -->
    <div class="about-me-background">
      <div class="about-me-text">
        <?php the_field('about_me_text'); ?>
      </div>
    </div>

  </div>
</section>



<section class="about-me-row-section">
  <div class="about-me-row-wrapper">

    <!-- Левый блок -->
    <div class="about-column about-text">
      <?php the_field('about_me_text_button'); ?>
    </div>

    <!-- Правый блок -->
    <div class="about-column about-download">
      <h2 class="resume-heading">Want to know more?</h2>
      <a href="http://my-site.local/wp-content/uploads/2025/04/Resume-P.pdf" class="resume-button" download>Resume</a>
    </div>

  </div>
</section>






<footer class="footer-aboutme">
  <div class="footer-inline-aboutme">

    <!-- Соцсети -->
    <div class="footer-social-aboutme">
      <a href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
      <a href="https://facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a>
      <a href="https://messenger.com" target="_blank"><i class="fa-brands fa-facebook-messenger"></i></a>
    </div>

    <!-- Логотип -->
    <div class="footer-logo-aboutme">
      <img src="<?php echo esc_url(get_field('footer_logo_aboutme')); ?>" alt="Footer Logo">
    </div>

    <!-- Контакты -->
    <div class="footer-contact-aboutme">
      <p>polinab071@gmail.com</p>
      <p>+45 52 90 12 96</p>
    </div>

  </div>
</footer>
















</body>
</html>

