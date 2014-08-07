<?php
/*
Template Name: Single Page Layout Template
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'singlepagelayout'); ?>
<?php endwhile; ?>