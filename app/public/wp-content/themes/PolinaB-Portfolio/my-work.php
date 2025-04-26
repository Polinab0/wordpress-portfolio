<?php
/*
Template Name: MyWork
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>">
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> style="margin:0;padding:0;background-color:#FFFEF9;">

<!-- ─────────── NAVIGATION ─────────── -->
<header>
  <nav class="main-nav-mywork">
    <div class="nav-container-mywork">
      <div class="nav-logo-mywork">
        <a href="<?php echo esc_url( home_url() ); ?>">
          <?php if ( function_exists('get_field') && get_field('logo_mywork') ): ?>
            <img src="<?php echo esc_url( get_field('logo_mywork') ); ?>" alt="Logo">
          <?php else : ?><span style="font-weight:bold;">LOGO</span><?php endif; ?>
        </a>
      </div>

      <ul class="nav-links-mywork">
        <li><a href="<?php echo esc_url( home_url() ); ?>">Home</a></li>
        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'about-me' ) ) ); ?>">About Me</a></li>
      </ul>
    </div>
  </nav>
</header>

<!-- ─────────── TITLE ─────────── -->
<section class="work-title-mywork">
  <h1><?php if ( function_exists('the_field') ) the_field('my_work_title'); ?></h1>
</section>

<!-- ─────────── CATEGORY BUTTONS ─────────── -->
<section class="button-grid-mywork">
  <a href="#logos"        class="mywork-button"><?php if ( function_exists('the_field') ) the_field('button_1_text'); ?></a>
  <a href="#posters"      class="mywork-button"><?php if ( function_exists('the_field') ) the_field('button_2_text'); ?></a>
  <a href="#infographics" class="mywork-button"><?php if ( function_exists('the_field') ) the_field('button_3_text'); ?></a>
  <a href="#uxui"         class="mywork-button"><?php if ( function_exists('the_field') ) the_field('button_4_text'); ?></a>
</section>

<!-- ─────────── LOGOS ─────────── -->
<section id="logos" class="logos-section-mywork">
  <h2 class="logos-title"><?php if ( function_exists('the_field') ) the_field('logos_title'); ?></h2>

  <div class="logos-grid">
    <?php if ( function_exists('get_field') ) :
      for ( $i=1; $i<=3; $i++ ) :
        if ( $img = get_field( "logos_image_$i" ) ) : ?>
          <div class="logo-item"><img src="<?php echo esc_url( $img ); ?>" alt="Logo <?php echo $i; ?>"></div>
    <?php endif; endfor; endif; ?>
  </div>
</section>

<!-- ─────────── POSTERS ─────────── -->
<section id="posters" class="posters-section-mywork">
  <h2 class="posters-title"><?php if ( function_exists('the_field') ) the_field('posters_title'); ?></h2>

  <div class="posters-grid">
    <?php if ( function_exists('get_field') ) :
      for ( $i=1; $i<=2; $i++ ) :
        if ( $img = get_field( "posters_image_$i" ) ) : ?>
          <div class="poster-item"><img src="<?php echo esc_url( $img ); ?>" alt="Poster <?php echo $i; ?>"></div>
    <?php endif; endfor; endif; ?>
  </div>
</section>

<!-- ─────────── INFOGRAPHICS ─────────── -->
<section id="infographics" class="infographics-section-mywork">
  <h2 class="infographics-title"><?php if ( function_exists('the_field') ) the_field('infographics_title'); ?></h2>

  <div class="infographics-grid">
    <?php if ( function_exists('get_field') ) :
      for ( $i=1; $i<=2; $i++ ) :
        if ( $img = get_field( "infographics_image_$i" ) ) : ?>
          <div class="infographic-item"><img src="<?php echo esc_url( $img ); ?>" alt="Infographic <?php echo $i; ?>"></div>
    <?php endif; endfor; endif; ?>
  </div>
</section>

<!-- ─────────── UX/UI ─────────── -->
<section id="uxui" class="uxui-section-new">
  <h2 class="uxui-title"><?php if ( function_exists('the_field') ) the_field('uxui_title_new'); ?></h2>

  <!-- Первый ряд -->
  <div class="uxui-row">
    <?php if ( function_exists('get_field') ) :
      foreach ( [1,2] as $n ) :
        $img = get_field( "uxui_img_$n" );
        if ( $img ) : ?>
          <div class="uxui-card"><img src="<?php echo esc_url( $img ); ?>" alt="UX/UI <?php echo $n; ?>"></div>
    <?php endif; endforeach; endif; ?>
  </div>

  <!-- Второй ряд -->
  <div class="uxui-row">
    <?php if ( function_exists('get_field') ) :
      foreach ( [3,4] as $n ) :
        $img = get_field( "uxui_img_$n" );
        if ( $img ) : ?>
          <div class="uxui-card"><img src="<?php echo esc_url( $img ); ?>" alt="UX/UI <?php echo $n; ?>"></div>
    <?php endif; endforeach; endif; ?>
  </div>
</section>

<!-- ─────────── FOOTER ─────────── -->
<footer class="footer-mywork">
  <div class="footer-inline-mywork">
    <div class="footer-social-mywork">
      <a href="https://instagram.com"  target="_blank"><i class="fa-brands fa-instagram"></i></a>
      <a href="https://facebook.com"   target="_blank"><i class="fa-brands fa-facebook"></i></a>
      <a href="https://messenger.com"  target="_blank"><i class="fa-brands fa-facebook-messenger"></i></a>
    </div>

    <div class="footer-logo-mywork">
      <?php if ( function_exists('get_field') && get_field('footer_logo_mywork') ) : ?>
        <img src="<?php echo esc_url( get_field('footer_logo_mywork') ); ?>" alt="Footer Logo">
      <?php endif; ?>
    </div>

    <div class="footer-contact-mywork">
      <p>polinab071@gmail.com</p>
      <p>+45&nbsp;52&nbsp;90&nbsp;12&nbsp;96</p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
