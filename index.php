<?php

get_header();
?>
<?php 

// koll om det finns några inlägg
if (have_posts()) : while (have_posts()) : the_post(); ?>
<!-- skriver ut inläggs sammanfattning, rubrik och länk till fullt inlägg -->
<div class="post">
   <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
   <?php 
   the_excerpt(); 
   the_post_thumbnail();
   ?>
</div>
<?php endwhile; endif;
get_footer(); 
?>