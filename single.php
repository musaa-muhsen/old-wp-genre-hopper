
<?php get_header(); ?>


<section class="single-container">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	
<?php get_template_part('content', get_post_format()); ?>

<?php endwhile; endif?>
</section>



<?php get_footer(); ?>
