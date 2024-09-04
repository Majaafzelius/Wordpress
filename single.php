<?php 
get_header();

// skriver ut inlägg i sin helhet
if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="main">
  <h1><?php the_title(); ?></h1>
  <?php the_content();?></div>
  <?php endwhile; endif; 
get_footer();
?>