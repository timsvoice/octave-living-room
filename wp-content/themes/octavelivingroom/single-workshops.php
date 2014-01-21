<?php get_header(); ?>

		<div class="row">
			<div class="small-12 columns workshop">
				<div class="workshop-title">
					<h2><?php the_title() ?></h2>
					<h3>workshop</h3>
					<p class="workshop-duration"><?php the_field('workshop_duration');?></p>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="small-12 columns workshop-details">
				
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
				<p class="price"><?php echo '¥', the_field('price');?></p>
				<div class="small-6 small-centered columns button dark">sign up</div>
			</div>
			
			<div class="small-12 columns workshop-description">
				<p>
					<?php the_field('workshop_description');?> 
				</p>
				<div class="workshop-takeaways">
					<h2>takeaways</h2>
					<p><?php the_field('takeaways');?></p>
				</div>
			</div>

			<div class="small-12 columns instructor">
				<h2>your instructor</h2>
				<img src="<?php bloginfo('template_url'); ?>/css/assets/yoga-instructor.jpg" alt="" class="small-4 columns alpha instructor-image" />
				<div class="instructor-name">	
					<h4><a href="<?php echo 'http://', the_field('instructor_website');?>"><?php the_field('instructor_name');?></a></h4>
					<p><?php the_field('instructor_title');?></p>
				</div>
				<div class="instructor-bio">
					<p>
						<?php the_field('instructor_bio');?>
					</p>
				</div>
			</div>
		</div>
		<div class="row clearfix">
			<div class="small-12 small-centered columns">
				<div class="small-12 small-centered columns button dark">sign up</div>
			</div>
		</div>	
			<!-- <dl class="accordion" data-accordion>
				<dd>
					<a href="#smartyoga">details</a>
					<div id="smartyoga" class="content">
						
					</div>
				</dd>
			</dl> -->
		

	<div class="row">      
	</div>
      
<?php get_footer(); ?>