<?php /* Template Name: Process */ ?>
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

    <section class="section organs">
      <div class="section-content organs-content">
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