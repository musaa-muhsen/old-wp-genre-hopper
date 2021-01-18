<?php 

/*
Template Name: page explore 
*/

get_header(); 
?>
<div class="page-title"><h1><?php the_title(); ?></h1></div>


<section class="exlpore-container"> 

<div class="archive-container">
<?php if(is_active_sidebar('sidebar-1')) : ?> 
  <?php dynamic_sidebar('sidebar-1'); ?>
</div>
<?php endif; ?>
<div class="tags-container">
<?php if(is_active_sidebar('sidebar-2')) : ?> 
  <?php dynamic_sidebar('sidebar-2'); ?>
</div>
<?php endif; ?>
</section>

<?php get_footer(); ?>