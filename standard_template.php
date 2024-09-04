<?php /* Template Name: main with sidebar Template */
get_header();
?>


<div class="container">
     <div id="main">
          <h1><?php the_title()?></h1>
          <?php the_content(); ?>
     </div>
     <?php get_sidebar(); ?>
</div>
<?php
get_footer(); 
?>