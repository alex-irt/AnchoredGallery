<?php theme_include('header'); ?>

<?php $showTitles=true ?>

	<?php if(has_posts()): ?>
	
	<div class="bg2">
	<article class="wrapper" >
	<section class="smallspace" ></section>
		<section class="column">
			<?php $i = 0; while(posts()): ?>
			<?php $i++; ?>
			<?php if($i%2 != 0): ?>
			
				<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>">
				<div class="post">
				
					<?php if($showTitles): ?>
					<div id="filler">
							<div class="description">
								<bodytext>
									<h1><?php echo article_title(); ?></h1>
								</bodytext>
							</div>
						</div>
						<section class="yspace" ></section>
					<?php endif; ?>
					
					<?php if(article_custom_field('image', '')!=""): ?>
						<img src="<?php echo article_custom_field('image', ''); ?>" />
					<?php endif; ?>
					
					<?php if(article_description() !=""): ?>
						<div id="filler">
							<div class="description">
								<bodytext>
									<?php echo article_description(); ?>
								</bodytext>
							</div>
						</div>
					<?php endif; ?>
					<section class="yspace" ></section>
					<div class="datestamp">
						<stamptext><?php echo article_date(); ?></stamptext>
					</div>
					<div class="authorstamp">
						<stamptext><?php echo article_author(); ?></stamptext>
					</div>
					<section class="yspace" ></section>
				</div>
				</a>
				
			<?php endif; ?>
			<?php endwhile; ?>
			
		</section>
		
		<section class="spacer" ></section>
		
		<section class="column">
		
			<?php $i = 0; while(posts()): ?>
			<?php $i++; ?>
			<?php if($i%2 == 0): ?>
			<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>">
				<div class="post">
				
					<?php if($showTitles): ?>
					<div id="filler">
							<div class="description">
								<bodytext>
									<h1><?php echo article_title(); ?></h1>
								</bodytext>
							</div>
						</div>
						<section class="yspace" ></section>
					<?php endif; ?>
				
					<?php if(article_custom_field('image', '')!=""): ?>
						<img src="<?php echo article_custom_field('image', ''); ?>" />
					<?php endif; ?>
					
					<?php if(article_description() !=""): ?>
						<div id="filler">
							<div class="description">
								<bodytext>
									<?php echo article_description(); ?>
								</bodytext>
							</div>
						</div>
					<?php endif; ?>
					<section class="yspace" ></section>
					<div class="datestamp">
						<stamptext><?php echo article_date(); ?></stamptext>
					</div>
					<div class="authorstamp">
						<stamptext><?php echo article_author(); ?></stamptext>
					</div>
					<section class="yspace" ></section>
				</div>
				</a>
			<?php endif; ?>
			<?php endwhile; ?>
			
		</section>
		
		<?php if(has_pagination()): ?>
		<nav class="bg1">
		<section class="yspace" ></section>
			<div class="datestamp">
				<stamptext><?php echo posts_prev(); ?></stamptext>
			</div>
			<div class="authorstamp">
				<stamptext><?php echo posts_next(); ?></stamptext>
			</div>
			<section class="yspace" ></section>
		</nav>
		<section class="spacer" ></section>
		<?php endif; ?>
		
		
	</article>
	</div>
	
		

	<?php else: ?>
		<p>Looks like you have some writing to do!</p>
	<?php endif; ?>


<?php theme_include('footer'); ?>