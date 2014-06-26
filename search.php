<?php theme_include('header'); ?>

<div class="bg2">
	<article class="wrapper" >
	<section class="yspace" ></section>
	<nav class="bg1">
		<section class="yspace" ></section>
		<div class="datestamp" style="width:100%; text-align:center;">
			<h1><i>&rdquo;<?php echo search_term(); ?>&rdquo;</i></h1>
		</div>
		<section class="yspace" ></section>
	</nav>


<?php if(has_search_results()): ?>

	<?php $results = total_search_results();
		if($results> posts_per_page()):
			$results=posts_per_page();
		endif;
		$results=$results/2;
		$results=ceil($results);
		?>

	<section class="smallspace" ></section>
		<section class="column">
		<?php $newColumn=false ?>
			<?php $i = 0; while(search_results() ): $i++; ?>
			<?php if($i <= $results): ?>
			
				<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>">
				<div class="post">
				
					<?php if(article_custom_field('image', '')!=""): ?>
						<img src="<?php echo article_custom_field('image', ''); ?>" />
					<?php else: ?>
						<?php echo article_html(); ?>
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
				
			<?php else: ?>
				<?php if($newColumn==false):
					$newColumn=true; ?>
					</section>
		
					<section class="spacer" ></section>
						
					<section class="column">
				<?php endif; ?>
				
				<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>">
				<div class="post">
				
					<?php if(article_custom_field('image', '')!=""): ?>
						<img src="<?php echo article_custom_field('image', ''); ?>" />
					<?php else: ?>
						<?php echo article_html(); ?>
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
				<stamptext><?php echo search_prev(); ?></stamptext>
			</div>
			<div class="authorstamp">
				<stamptext><?php echo search_next(); ?></stamptext>
			</div>
			<section class="yspace" ></section>
		</nav>
		<section class="spacer" ></section>
		<?php endif; ?>
		
	<?php else: ?>
	<section class="yspace" ></section>
	<nav class="bg1">
		<section class="yspace" ></section>
		<div class="datestamp" style="width:100%; text-align:center;">
			<h1>Nothing found for &ldquo;<?php echo search_term(); ?>&ldquo;</h1>
		</div>
		<section class="yspace" ></section>
		</div>
		
	<?php endif; ?>
	
	</article>
	</div>
	

<?php theme_include('footer'); ?>