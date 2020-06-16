<?php /* Template Name: Front Page */ ?>

<?php get_header();

  $welcome_title = get_field('welcome_title');
  $welcome_description = get_field('welcome_description');
  $welcome_link = get_field('welcome_link');
  $welcome_image = get_field('welcome_image');

  $main_title = get_field('main_title');
  $main_content = get_field('main_content');
  $main_image = get_field('main_image');

  ?>

  <div class="container">
    <section class="section welcome">
      <div class="section-content welcome-content">
        <h3 class="section-title"><?php echo $welcome_title; ?></h3>
        <p class="section-desc"><?php echo $welcome_description; ?></p>
        <div class="links-container">
          <a class="section-link" href="<?php echo $welcome_link; ?>">New Organs</a>
          <a class="section-link" href="<?php echo $welcome_link; ?>">Pipe Additions</a>
          <a class="section-link" href="<?php echo $welcome_link; ?>">Digital Stops</a>
        </div>
      </div>
      <div class="img-container welcome-img">
        <img
          class="section-img"
          src="<?php echo $welcome_image['url']; ?>"
        >
      </div>
    </section>
    <section class="section bio">
      <div class="section-content bio-content">
        <h3 class="section-title"><?php echo $main_title; ?></h3>
        <p class="section-desc"><?php echo $main_content; ?></p>
      </div>
      <div class="img-container bio-img">
        <img
          class="section-img"
          src="<?php echo $main_image['url']; ?>"
        >
      </div>
    </section>

    <?php if (have_posts()) : while(have_posts()) : the_post();?>
      <?php the_content;?>
    <?php endwhile; endif;?>

  </div>

<?php get_footer();?>