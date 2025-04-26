<?php
/*
Template Name: Home Page
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>

  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <?php wp_head(); ?>



  <?php
$petal = get_field( 'petal_image' );               // for Page-based field
// $petal = get_field( 'petal_image', 'option' );  // ← use this line if you stored the field in Options Page
if ( $petal ) : ?>
	<style>
		/* override the CSS file with the uploaded image */
		.petal {
			background-image: url('<?php echo esc_url( $petal ); ?>');
		}
	</style>
<?php endif; ?>

</head>
<body <?php body_class(); ?>>

<div class="petal-container"></div>
<script>
const container=document.querySelector('.petal-container');
function createPetal(){
  const p=document.createElement('div');
  p.classList.add('petal');
  p.style.left=Math.random()*100+'vw';
  p.style.animationDuration=5+Math.random()*5+'s';
  p.style.animationDelay=Math.random()*3+'s';
  container.appendChild(p);
  setTimeout(()=>p.remove(),10000);
}
setInterval(createPetal,500);
</script>

<!-- ─────────── NAVIGATION ─────────── -->
<header>
  <nav class="main-nav">
    <div class="nav-logo">
      <a href="<?php echo esc_url( home_url() ); ?>">
        <?php if ( function_exists('get_field') && get_field('site_logo') ) : ?>
          <img src="<?php echo esc_url( get_field('site_logo') ); ?>" alt="Logo">
        <?php else : ?>
          <span style="font-weight:bold;">LOGO</span>
        <?php endif; ?>
      </a>
    </div>

    <ul class="nav-links">
      <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'my-work' ) ) ); ?>">My Work</a></li>
      <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'about-me' ) ) ); ?>">About Me</a></li>
    </ul>
  </nav>
</header>

<!-- ─────────── HERO ─────────── -->
<header-box>
  <head-box-text>
    <h1><?php if ( function_exists('the_field') ) the_field('main_heading'); ?></h1>

    <?php

$peony = get_field( 'peony_illustration' );
$default = get_template_directory_uri() . '/assets/peony-placeholder.png'; // <-- optional
?>
<div class="peony-image">
    <img src="<?php echo esc_url( $peony ? $peony : $default ); ?>"
         alt="Peony Illustration">
</div>


    <div class="buttons">
      <a href="#video-section" class="button"><?php if ( function_exists('the_field') ) the_field('video_button'); ?></a>
      <?php if ( $resume = get_field( 'resume_pdf' ) ) : ?>
	<a href="<?php echo esc_url( $resume ); ?>" class="button" download>
		Resume
	</a>
<?php endif; ?>

    </div>
  </head-box-text>
</header-box>

<!-- ─────────── TEXT-BOX + LOGO ─────────── -->
<div class="header-box">
  <div class="text top-left"><?php if ( function_exists('the_field') ) the_field('top_left_text'); ?></div>
  <div class="text top-right"><?php if ( function_exists('the_field') ) the_field('top_right_text'); ?></div>
  <div class="text bottom-left"><?php if ( function_exists('the_field') ) the_field('bottom_left_text'); ?></div>
  <div class="text bottom-right"><?php if ( function_exists('the_field') ) the_field('bottom_right_text'); ?></div>

  <div class="center-logo">
    <?php if ( function_exists('get_field') && get_field('center_logo') ) : ?>
      <img src="<?php echo esc_url( get_field('center_logo') ); ?>" alt="Center Logo">
    <?php endif; ?>
  </div>
</div>

<!-- ─────────── INTRO BLOCK ─────────── -->
<section class="acf-intro">
  <div class="container">
    <?php if ( function_exists('the_field') ) the_field('main_text_block'); ?>
  </div>
</section>

<!-- ─────────── CATEGORIES ─────────── -->
<section id="categories-section">
  <div class="categories">
    <?php for ( $i=1; $i<=4; $i++ ) : ?>
      <div class="category">
        <h3><?php if ( function_exists('the_field') ) the_field("category_{$i}_title"); ?></h3>
        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'my-work' ) ) ); ?>" class="more-button">
          <?php if ( function_exists('the_field') ) the_field("category_{$i}_button_text"); ?>
        </a>
      </div>
    <?php endfor; ?>
  </div>
</section>

<?php if ( function_exists('get_field') && get_field('section_logo') ) : ?>
  <div class="section-logo">
    <img src="<?php echo esc_url( get_field('section_logo') ); ?>" alt="Section Logo">
  </div>
<?php endif; ?>

<!-- ─────────── RESUME / CARD BUTTONS ─────────── -->
<section class="button-block">
  <div class="button-container">
  <?php if ( $resume = get_field( 'resume_pdf' ) ) : ?>
	<a href="<?php echo esc_url( $resume ); ?>" class="custom-button" download>
		Resume
	</a>
<?php endif; ?>

<?php if ( $card = get_field( 'business_card_pdf' ) ) : ?>
	<a href="<?php echo esc_url( $card ); ?>" class="custom-button" download>
		Business Card
	</a>
<?php endif; ?>

  </div>
</section>

<!-- ─────────── VIDEO ─────────── -->
<section id="video-section" class="video-section">
  <div class="video-title"><?php if ( function_exists('the_field') ) the_field('video_section_title'); ?></div>
  <?php if ( $video = get_field( 'video_link' ) ) : ?>
    <div class="video-box">
        <?php echo wp_oembed_get( $video, [ 'width' => 990, 'height' => 557 ] ); ?>
    </div>
<?php endif; ?>

</section>

<!-- ─────────── FOOTER ─────────── -->
<footer>
  <div class="footer-content">
    <div class="footer-social">
      <a href="<?php if(function_exists('the_field')) the_field('instagram'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
      <a href="<?php if(function_exists('the_field')) the_field('facebook'); ?>"  target="_blank"><i class="fab fa-facebook"></i></a>
      <a href="<?php if(function_exists('the_field')) the_field('messenger'); ?>" target="_blank"><i class="fab fa-facebook-messenger"></i></a>
    </div>
    <div class="footer-logo">
      <?php if ( function_exists('get_field') && get_field('footer_logo') ) : ?>
        <img src="<?php echo esc_url( get_field('footer_logo') ); ?>" alt="Footer Logo">
      <?php endif; ?>
    </div>
    <div class="footer-contact">
      <p><?php if ( function_exists('the_field') ) the_field('email'); ?></p>
      <p><?php if ( function_exists('the_field') ) the_field('phone'); ?></p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
