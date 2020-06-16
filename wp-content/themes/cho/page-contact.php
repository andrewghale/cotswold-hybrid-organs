<?php /* Template Name: Contact */ ?>
<?php get_header();

  // $welcome_title = get_field('welcome_title');
  // $welcome_description = get_field('welcome_description');
  // $welcome_link = get_field('welcome_link');
  // $welcome_image = get_field('welcome_image');

  // $main_title = get_field('main_title');
  // $main_content = get_field('main_content');
  // $main_image = get_field('main_image');

  ?>

  <div class="container">
    <?php if (have_posts()) : while(have_posts()) : the_post();?>
      <?php the_content;?>
    <?php endwhile; endif;?>
  </div>

<?php the_footer();?>