<?php get_header(); ?>


<div class="page-title"><h1>latest</h1></div>
<section class="main-container">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	
<?php get_template_part('content', get_post_format()); ?>

<?php endwhile; endif?>
</section>

<div class="hidden-pagination-container">
<div class="left-pagination pagination "><div class="pagination-btn pagination-btn-left"><?php next_posts_link('Older Posts'); ?></div></div>
<div> </div>
<div class="right-pagination pagination "><div class="pagination-btn pagination-btn-right"><?php previous_posts_link('Newer Posts'); ?></div></div>
</div>
<?php get_footer(); ?>