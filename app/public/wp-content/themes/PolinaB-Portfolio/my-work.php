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

  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> style="margin:0; padding:0; background-color:#FFFEF9;">

<!-- Навигация -->
<header>
  <nav class="main-nav-mywork">
    <div class="nav-container-mywork">
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
      <ul class="nav-links-mywork">
        <li><a href="<?php echo home_url(); ?>">Home</a></li>
        <li><a href="<?php echo get_permalink(get_page_by_path('about-me')); ?>">About Me</a></li>
      </ul>
    </div>
  </nav>
</header>

<!-- Заголовок -->
<section class="work-title-mywork">
  <h1><?php the_field('my_work_title'); ?></h1>
</section>

<!-- Кнопки -->
<section class="button-grid-mywork">
  <a href="#logos" class="mywork-button"><?php the_field('button_1_text'); ?></a>
  <a href="#posters" class="mywork-button"><?php the_field('button_2_text'); ?></a>
  <a href="#infographics" class="mywork-button"><?php the_field('button_3_text'); ?></a>
  <a href="#uxui" class="mywork-button"><?php the_field('button_4_text'); ?></a>
</section>

<!-- Logos -->
<section id="logos" class="logos-section-mywork">
  <h2 class="logos-title">Logos</h2>
  <div class="logos-grid">
    <?php
    $logos_ids = [];
    $logos = new WP_Query([
      'post_type' => 'works',
      'posts_per_page' => -1,
      'meta_query' => [['key' => 'work_category','value' => 'logos']]
    ]);
    if ($logos->have_posts()) {
      while ($logos->have_posts()) {
        $logos->the_post();
        $logos_ids[] = get_the_ID();
        $img = get_field('work_image');
        if ($img): ?>
          <div class="logo-item">
            <img src="<?php echo esc_url($img['url']); ?>" alt="<?php the_title(); ?>">
          </div>
        <?php endif;
      } wp_reset_postdata(); } ?>
  </div>
  <div class="logos-description-grid">
    <?php foreach ($logos_ids as $id) {
      $desc = get_field('work_description', $id);
      if ($desc): ?>
        <div class="logo-description">
          <p><?php echo esc_html($desc); ?></p>
        </div>
    <?php endif; } ?>
  </div>
</section>

<!-- Posters -->
<section id="posters" class="posters-section-mywork">
  <h2 class="posters-title">Posters</h2>
  <div class="posters-grid">
    <?php
    $posters_ids = [];
    $posters = new WP_Query([
      'post_type' => 'works',
      'posts_per_page' => -1,
      'meta_query' => [['key' => 'work_category','value' => 'posters']]
    ]);
    if ($posters->have_posts()) {
      while ($posters->have_posts()) {
        $posters->the_post();
        $posters_ids[] = get_the_ID();
        $img = get_field('work_image');
        if ($img): ?>
          <div class="poster-item">
            <img src="<?php echo esc_url($img['url']); ?>" alt="<?php the_title(); ?>">
          </div>
        <?php endif;
      } wp_reset_postdata(); } ?>
  </div>
  <div class="posters-description-grid">
    <?php foreach ($posters_ids as $id) {
      $desc = get_field('work_description', $id);
      if ($desc): ?>
        <div class="poster-description">
          <p><?php echo esc_html($desc); ?></p>
        </div>
    <?php endif; } ?>
  </div>
</section>

<!-- Infographics -->
<section id="infographics" class="infographics-section-mywork">
  <h2 class="infographics-title">Infographics</h2>
  <div class="infographics-grid">
    <?php
    $infographics_ids = [];
    $infographics = new WP_Query([
      'post_type' => 'works',
      'posts_per_page' => -1,
      'meta_query' => [['key' => 'work_category','value' => 'infographics']]
    ]);
    if ($infographics->have_posts()) {
      while ($infographics->have_posts()) {
        $infographics->the_post();
        $infographics_ids[] = get_the_ID();
        $img = get_field('work_image');
        if ($img): ?>
          <div class="infographic-item">
            <img src="<?php echo esc_url($img['url']); ?>" alt="<?php the_title(); ?>">
          </div>
        <?php endif;
      } wp_reset_postdata(); } ?>
  </div>
  <div class="infographics-description-grid">
    <?php foreach ($infographics_ids as $id) {
      $desc = get_field('work_description', $id);
      if ($desc): ?>
        <div class="infographic-description">
          <p><?php echo esc_html($desc); ?></p>
        </div>
    <?php endif; } ?>
  </div>
</section>

<!-- UX/UI -->
<!-- UX/UI -->
<section id="uxui" class="uxui-section-new">
  <h2 class="uxui-title">UX/UI</h2>

  <!-- Верхний ряд (2 изображения + 2 описания) -->
  <div class="uxui-row">
    <?php
    $uxui_top_ids = [];
    $uxui_top = new WP_Query([
      'post_type' => 'works',
      'posts_per_page' => 2,
      'meta_query' => [
        ['key' => 'work_category', 'value' => 'uxui']
      ]
    ]);
    if ($uxui_top->have_posts()) {
      while ($uxui_top->have_posts()) {
        $uxui_top->the_post();
        $uxui_top_ids[] = get_the_ID();
        $img = get_field('work_image');
        if ($img): ?>
          <div class="uxui-card">
            <img src="<?php echo esc_url($img['url']); ?>" alt="<?php the_title(); ?>">
          </div>
        <?php endif;
      }
      wp_reset_postdata();
    }
    ?>
  </div>

  <div class="uxui-description-grid">
    <?php foreach ($uxui_top_ids as $id):
      $desc = get_field('work_description', $id);
      if ($desc): ?>
        <div class="uxui-description">
          <p><?php echo esc_html($desc); ?></p>
        </div>
    <?php endif; endforeach; ?>
  </div>

  <!-- Нижний ряд (ещё 2 изображения + 2 описания) -->
  <div class="uxui-row">
    <?php
    $uxui_bottom_ids = [];
    $uxui_bottom = new WP_Query([
      'post_type' => 'works',
      'posts_per_page' => 2,
      'offset' => 2,
      'meta_query' => [
        ['key' => 'work_category', 'value' => 'uxui']
      ]
    ]);
    if ($uxui_bottom->have_posts()) {
      while ($uxui_bottom->have_posts()) {
        $uxui_bottom->the_post();
        $uxui_bottom_ids[] = get_the_ID();
        $img = get_field('work_image');
        if ($img): ?>
          <div class="uxui-card">
            <img src="<?php echo esc_url($img['url']); ?>" alt="<?php the_title(); ?>">
          </div>
        <?php endif;
      }
      wp_reset_postdata();
    }
    ?>
  </div>

  <div class="uxui-description-grid">
    <?php foreach ($uxui_bottom_ids as $id):
      $desc = get_field('work_description', $id);
      if ($desc): ?>
        <div class="uxui-description">
          <p><?php echo esc_html($desc); ?></p>
        </div>
    <?php endif; endforeach; ?>
  </div>
</section>


<!-- Подвал -->
<footer class="footer-mywork">
  <div class="footer-inline-mywork">
    <div class="footer-social-mywork">
      <a href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
      <a href="https://facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a>
      <a href="https://messenger.com" target="_blank"><i class="fa-brands fa-facebook-messenger"></i></a>
    </div>
    <div class="footer-logo-mywork">
      <?php $footer_logo = get_field('footer_logo_mywork'); ?>
      <?php if ($footer_logo): ?>
        <img src="<?php echo esc_url($footer_logo); ?>" alt="Footer Logo">
      <?php endif; ?>
    </div>
    <div class="footer-contact-mywork">
      <p>polinab071@gmail.com</p>
      <p>+45 52 90 12 96</p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
