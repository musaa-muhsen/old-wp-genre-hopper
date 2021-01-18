<?php get_header(); ?>

     <?php if(have_posts()) :?>

<header class="page-title"><h1> <?php 
     if(is_category()) {
          single_cat_title();
     } elseif(is_tag()) {
          single_tag_title();
     } elseif (is_author()) {
          the_post();
     echo 'Author Archives: '. get_the_author();
       rewind_posts();
     } elseif (is_day()) {
     echo 'Daily Archives: '. get_the_date(); 
     } elseif(is_month()) {
     echo 'Monthly Archives: ' . get_the_date('F Y');
     } elseif (is_year()){
     echo 'Yearly Archives: ' . get_the_date('Y');
     } else {
          echo 'Archives: ';
     }
?></h1></header>
<section class="main-container">
     <?php while(have_posts()) : the_post(); ?>
          
<?php get_template_part('content', get_post_format()); ?>
 

<?php endwhile; endif?>
</section>

<div class="left-pagination pagination "><div class="pagination-btn pagination-btn-left"><?php next_posts_link('Older Posts'); ?></div></div>
<div> </div>
<div class="right-pagination pagination "><div class="pagination-btn pagination-btn-right"><?php previous_posts_link('Newer Posts'); ?></div></div>

<?php get_footer(); ?>