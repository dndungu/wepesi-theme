<?php get_header(); ?>
<main class="main">
	<?php if(have()); ?>
	<?php while(have_posts()) : the_post();?>
		<article <?php post_class()?>>
			<h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
			<?php the_content('')?>
			<ul class="meta">
				<li><?php the_time()?></li>
				<li>Posted in <?php the_category(', ')?></li>
				<li><?php comments_number('No Comments', '1 Comment', '% Comments') ?></li>
			</ul>
		</article>
	<?php endwhile; ?>
	<div class="pagination">
		<ul>
			<li class="older"><?php next_posts_link('Older')?></li>
			<li class="older"><?php previous_posts_link('Newer')?></li>
		</ul>
	</div>
	<?php else : ?>
		<h2>Nothing Found</h2>
		<p>Sorry but what you are looking for is not here</p>
		<p><a href="<?php print get_option('home')?>">Return to the homepage</a></p>
	<?php endif; ?>
</main>
<?php get_footer(); ?>
