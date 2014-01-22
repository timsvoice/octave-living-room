<?php
/*
Template Name: Workshops
*/
?>


<?php get_header(); ?>

	<div class="row">
		<div class="small-12 columns workshops">
			<h1><?php the_title(); ?></h1>
			<h1 class="workshop-byline"><?php the_field('byline'); ?></h1>
			<p>
				<?php 
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post(); 
							
							the_content();

						} // end while
					} // end if
				?>
			</p>
		</div>
	</div>

	<div class="row">
		<div class="small-12 columns small-centered panel filter-programs">
			<?php wp_dropdown_categories('show_option_none=Filter Workshops by Topic&show_count=0&orderby=name&taxonomy=workshop_category&hierarchical=1&depth=2&hide_if_empty=1'); ?>

			<script type="text/javascript"><!--
			    var dropdown = document.getElementById("cat");
			    function onCatChange() {
					if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
						location.href = "<?php echo get_option('home');
			?>/?page_id=22&cat="+dropdown.options[dropdown.selectedIndex].value;
					}
			    }
			    dropdown.onchange = onCatChange;
			--></script>
		</div>
	</div>


<div class="row">		
	<?php $loop = new WP_Query( array( 'post_type' => 'workshops', 'posts_per_page' => 100, 'meta_key' => 'start_date', 'orderby'		=> 'meta_value_num', 'order'	=> 'ASC' ) ); ?>
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	

		<div class="small-12 medium-6 large-6 left columns workshop-summary">

			<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
			<p class=" large-6 colunms workshop-description">
				<?php the_field('workshop_description');?> 
			</p>
			
			<div class="large-6 columns workshop-details">

				<div class="calendar-icon">
					<p>
						<?php 

						$date = DateTime::createFromFormat('Ymd', get_field('start_date'));
						echo $date->format('d');

						?>
					</p>
				</div>
				
				<p class="date">
					<?php 

					$date = DateTime::createFromFormat('Ymd', get_field('start_date'));
					echo $date->format('l, d F');

					?>				
				</p>

				<p class="time"><?php the_field('meeting_time');?></p>

			</div>

			<div class="large-6 columns instructor show-for-large-up">
				<img src="<?php the_field('instructor_image');?>" alt="" class="small-3 alpha columns instructor-image" />
				<div class="large-9 alpha beta columns instructor-name">	
					<p><a href="<?php echo 'http://', the_field('instructor_website');?>"><?php the_field('instructor_name');?></a></p>
					<p><?php the_field('instructor_title');?></p>
				</div>
			</div>

		</div>
	
	<?php endwhile; ?>

      
<?php get_footer(); ?>