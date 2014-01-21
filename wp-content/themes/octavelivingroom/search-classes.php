<?php
/*
Template Name: search
*/
?>

<?php get_header(); ?>

	<?php $loop = new WP_Query( array( 'post_type' => 'classes', 'posts_per_page' => 100, 'meta_key' => 'class_date', 'orderby'		=> 'meta_value_num', 'order'	=> 'ASC' ) ); ?>
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	
	<div class="row">
		
		<div class="small-12 columns results">

			<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>

			<?php the_content(); ?>
			
		</div>
	</div>	
	
	<?php endwhile; ?>
      
<?php get_footer(); ?>