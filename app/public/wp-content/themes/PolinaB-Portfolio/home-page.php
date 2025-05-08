<?php
/*
Template Name: Home Page
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

  <?php
  $petal = get_field('petal_image');
  if ($petal) {
    echo '<style>.petal { background-image: url(' . esc_url($petal) . '); }</style>';
  }
  ?>
</head>

<?php
$bg_img = get_field('background_illustration');
if ($bg_img): ?>
  <style>
    body {
      background-image: url('<?php echo esc_url($bg_img['url']); ?>');
      background-size: cover;
      background-position: top center;
      background-repeat: no-repeat;
      background-color: #fffef9; /* твой бежевый фон */
    }
  </style>
<?php endif; ?>



<body <?php body_class(); ?>>

<!-- Летающие лепестки -->
<div class="petal-container"></div>
<script>
const container = document.querySelector('.petal-container');
function createPetal() {
  const p = document.createElement('div');
  p.classList.add('petal');
  p.style.left = Math.random() * 100 + 'vw';
  p.style.animationDuration = 5 + Math.random() * 5 + 's';
  p.style.animationDelay = Math.random() * 3 + 's';
  container.appendChild(p);
  setTimeout(() => p.remove(), 10000);
}
setInterval(createPetal, 500);
</script>

<!-- Навигация -->
<header>
  <nav class="main-nav">
    <div class="nav-logo">
      <a href="<?php echo home_url(); ?>">
        <?php $logo = get_field('site_logo'); ?>
        <?php if ($logo) { ?>
          <img src="<?php echo esc_url($logo); ?>" alt="Logo">
        <?php } else { ?>
          <span style="font-weight: bold;">LOGO</span>
        <?php } ?>
      </a>
    </div>

    <ul class="nav-links">
      <li><a href="<?php echo get_permalink(get_page_by_path('my-work')); ?>">My Work</a></li>
      <li><a href="<?php echo get_permalink(get_page_by_path('about-me')); ?>">About Me</a></li>
    </ul>
  </nav>
</header>

<!-- HERO -->
<header-box>
  <head-box-text>
    <h1><?php the_field('main_heading'); ?></h1>

    <?php
    $peony = get_field('peony_illustration');
    $default = get_template_directory_uri() . '/assets/peony-placeholder.png';
    ?>
    <div class="peony-image">
      <img src="<?php echo $peony ? esc_url($peony) : esc_url($default); ?>" alt="Peony Illustration">
    </div>

    <div class="buttons">
      <a href="#video-section" class="button"><?php the_field('video_button'); ?></a>
      <?php $resume = get_field('resume_pdf'); ?>
      <?php if ($resume) { ?>
        <a href="<?php echo esc_url($resume); ?>" class="button" download>Resume</a>
      <?php } ?>
    </div>
  </head-box-text>
</header-box>

<!-- Четыре текстовых блока + логотип в центре -->
<div class="header-box">
  <div class="text top-left"><?php the_field('top_left_text'); ?></div>
  <div class="text top-right"><?php the_field('top_right_text'); ?></div>
  <div class="text bottom-left"><?php the_field('bottom_left_text'); ?></div>
  <div class="text bottom-right"><?php the_field('bottom_right_text'); ?></div>

  <div class="center-logo">
    <img src="<?php echo esc_url(get_field('center_logo')); ?>" alt="Center Logo">
  </div>
</div>

<!-- Вводный текст -->
<section class="acf-intro">
  <div class="container">
    <?php the_field('main_text_block'); ?>
  </div>
</section>

<!-- Категории (4 штуки) -->
<section id="categories-section">
  <div class="categories">

    <?php
    $args = array(
      'post_type' => 'custom_categories',
      'posts_per_page' => 4
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {

      while ($query->have_posts()) {
        $query->the_post();

        $button_link = get_field('button_link');
        $button_text = get_field('button_text');
    ?>

        <div class="category">
          <h3><?php the_title(); ?></h3>

          <?php if ($button_link): ?>
            <a href="<?php echo $button_link['url']; ?>" class="more-button" target="<?php echo $button_link['target']; ?>">
              <?php echo $button_text; ?>
            </a>
          <?php endif; ?>
        </div>

    <?php
      }

      wp_reset_postdata();
    }
    ?>

  </div>
</section>


<!-- Логотип секции -->
<div class="section-logo">
  <img src="<?php echo esc_url(get_field('section_logo')); ?>" alt="Section Logo">
</div>

<!-- Кнопки: резюме и визитка -->
<section class="button-block">
  <div class="button-container">
    <?php $resume = get_field('resume_pdf'); ?>
    <?php if ($resume) { ?>
      <a href="<?php echo esc_url($resume); ?>" class="custom-button" download>Resume</a>
    <?php } ?>

    <?php $card = get_field('business_card_pdf'); ?>
    <?php if ($card) { ?>
      <a href="<?php echo esc_url($card); ?>" class="custom-button" download>Business Card</a>
    <?php } ?>
  </div>
</section>

<!-- Видео секция -->
<section id="video-section" class="video-section">
  <div class="video-title"><?php the_field('video_section_title'); ?></div>
  <?php
  $video = get_field('video_link');
  if ($video) {
    echo '<div class="video-box">';
    echo wp_oembed_get($video, ['width' => 990, 'height' => 557]);
    echo '</div>';
  }
  ?>
</section>

<!-- Подвал -->
<footer>
  <div class="footer-content">
    <div class="footer-social">
      <a href="<?php the_field('instagram'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
      <a href="<?php the_field('facebook'); ?>" target="_blank"><i class="fab fa-facebook"></i></a>
      <a href="<?php the_field('messenger'); ?>" target="_blank"><i class="fab fa-facebook-messenger"></i></a>
    </div>

    <div class="footer-logo">
      <img src="<?php echo esc_url(get_field('footer_logo')); ?>" alt="Footer Logo">
    </div>

    <div class="footer-contact">
      <p><?php the_field('email'); ?></p>
      <p><?php the_field('phone'); ?></p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
