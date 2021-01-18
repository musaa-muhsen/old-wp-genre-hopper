<article class="content-post post-aside">
	<article class="top-container"> 
		<div class="content-container">
			<?php the_content(); ?></div>
	</article>
		<section class="bottom-container"> 
		<div class="time-container"><p><?php the_time('d/j/Y'); ?></p></div>
		<div class="title-container"><p><?php the_title(); ?></p></div>
		<div class="tags-wrapper">
		<div class="tags-container"> 
<?php the_tags( '<ul class="ul-tags"><li>', '</li><li>', '</li></ul>' ); ?>	
	</div></div>
</section>
		 
</article>