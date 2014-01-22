<?php get_header(); ?>

<img class="banner-image" src="<?php bloginfo('template_url'); ?>/assets/images/banner-image.png" alt="baner image">

	
	<?php
		$the_query = new WP_Query( 'page_id=28' );
		while ( $the_query->have_posts() ) :
			$the_query->the_post();?>
		        <div class="classes-index">
					<div class="row">
						<div class="small-12 medium-6 columns">
					        <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
					        <div class="alpha"><p><?php the_content(); ?></p></div>					     

					    	<a href="<?php the_permalink() ?>"><div class="button"><p>sign up for a class</p></div></a>

					    </div>
					    <div class="small-4 columns">
					    	<img class="banner-image show-for-medium-up" src="<?php bloginfo('template_url'); ?>/assets/images/classes-image.png" alt="classes image">
					    </div>				
					</div>
				</div>
		<?php 
		endwhile;
		wp_reset_postdata();
		?>


	<div class="row">		
	<?php $loop = new WP_Query( array( 'post_type' => 'classes', 'posts_per_page' => 4, 'meta_key' => 'class_date', 'orderby'		=> 'meta_value_num', 'order'	=> 'ASC' ) ); ?>
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	

		<div class="small-12 medium-6 large-6 left columns class-summary">

			<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
			<p class=" large-6 colunms class-description">
				<?php the_field('class_description');?> 
			</p>
			
			<div class="large-6 columns class-details">

				<div class="calendar-icon">
					<p>
						<?php 

						$date = DateTime::createFromFormat('Ymd', get_field('class_date'));
						echo $date->format('d');

						?>
					</p>
				</div>
				
				<p class="date">
					<?php 

					$date = DateTime::createFromFormat('Ymd', get_field('class_date'));
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
	</div>

	<?php
		$the_query = new WP_Query( 'page_id=8' );
		while ( $the_query->have_posts() ) :
			$the_query->the_post();?>
		        <div class="workshops-index">
					<div class="row">
						<div class="small-12 medium-6 columns">
					        <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
					        <div class="alpha"><p><?php the_content(); ?></p></div>					     

					    	<a href="<?php the_permalink() ?>"><div class="button"><p>enroll in a course</p></div></a>

					    </div>
					    <div class="small-4 columns">
					    	<img class="banner-image show-for-medium-up" src="<?php bloginfo('template_url'); ?>/assets/images/workshops-image.png" alt="workshops image">
					    </div>				
					</div>
				</div>
		<?php 
		endwhile;
		wp_reset_postdata();
		?>

	<div class="row">		
	<?php $loop = new WP_Query( array( 'post_type' => 'workshops', 'posts_per_page' => 2, 'meta_key' => 'start_date', 'orderby'		=> 'meta_value_num', 'order'	=> 'ASC' ) ); ?>
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