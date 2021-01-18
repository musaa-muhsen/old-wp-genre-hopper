<?php get_header(); ?>

<section class="error-404 not-found">
<p>Sorry, content not found  ¯\_(ツ)_/¯ <br>Explore other options<br> &darr; Links below &darr;</p>
</section>
<section class="exlpore-container"> 

<div class="archive-container"> 
  <?php dynamic_sidebar('sidebar-1'); ?>
</div>
<div class="tags-container"> 
  <?php dynamic_sidebar('sidebar-2'); ?>
</div>
</section>

<?php get_footer(); ?>