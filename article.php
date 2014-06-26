<?php theme_include('header'); ?>

<?php 
$in= article_markdown();
$out = preg_replace_callback(
    "(\[image\](.*?)\[/image\])is",
    function($m) {
        static $id = 0;
        $id++;
        return "</bodytext> </div> </div> <img src=".$m[1]." /> <div id=\"filler\"> <div class=\"description\"> <bodytext>";
    },
    $in);
	?>

	<?php 
$in= $out;
$out = preg_replace_callback(
    "(\[img\](.*?)\[/img\])is",
    function($m) {
        static $id = 0;
        $id++;
        return "<img src=".$m[1]." style=\"width:50%;padding:10px;\"/>";
    },
    $in);
	?>
	
	<?php 
$in= $out;
$out = preg_replace_callback(
    "(\[icon\](.*?)\[/icon\])is",
    function($m) {
        static $id = 0;
        $id++;
        return "<img src=".$m[1]." style=\"width:25%;padding:10px;\"/>";
    },
    $in);
	?>
	
	<?php 
$in= $out;
$out = preg_replace_callback(
    "(\[images\](.*?)\[/images\])is",
    function($m) {
        static $id = 0;
        $id++;
        return "</bodytext> </div> </div> ".$m[1]."<div id=\"filler\"> <div class=\"description\"> <bodytext>";
    },
    $in);
	?>
	
	<?php 
$in= $out;
$out = preg_replace_callback(
    "(\[centerimg\](.*?)\[/centerimg\])is",
    function($m) {
        static $id = 0;
        $id++;
        return "</bodytext> </div> </div> <div class=\"centerimg\"><img src=".$m[1]." /></div><div id=\"filler\"> <div class=\"description\"> <bodytext>";
    },
    $in);
	?>
	
<div class="bg2">
	<article class="wrapper" >
<div class="post">
				
					<?php if(article_custom_field('image', '')!=""): ?>
						<img src="<?php echo article_custom_field('image', ''); ?>" />
					<?php else: ?>
						<?php echo article_html(); ?>
					<?php endif; ?>
					
					<?php if(article_custom_field('image', '') !=""): ?>
					
						<div id="filler">
							<div class="description">
								<bodytext>
									<?php echo $out; ?>
								</bodytext>
							</div>
						</div>	
						
					<?php else: ?>
					
						<?php if(article_description() !=""): ?>
							<div id="filler">
								<div class="description">
									<bodytext>
										<?php echo article_description(); ?>
									</bodytext>
								</div>
							</div>
						<?php endif; ?>
						
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
				
				
				
				<?php if(comments_open()): ?>
				<div class="post">
					<div id="filler">
						<bodytext>
							<form id="comment" class="commentform commentbox" method="post" action="<?php echo comment_form_url(); ?>#comment">
								<?php echo comment_form_notifications(); ?>

								<p class="name">
									<label for="name">Your name:</label>
									<?php echo comment_form_input_name('placeholder="Your name"'); ?>
								</p>

								<p class="email">
									<label for="email">Your email address:</label>
									<?php echo comment_form_input_email('placeholder="Your email (won’t be published)"'); ?>
								</p>

								<p class="textarea">
									<label for="text">Your comment:</label>
									<?php echo comment_form_input_text('placeholder="Your comment"'); ?>
								</p>

								<p class="submit">
									<?php echo comment_form_button(); ?>
								</p>
							</form>
						</bodytext>
					</div>
					
				</div>
				
				
				<?php if(has_comments()): ?>
			
				<?php $i = 0; while(comments()): $i++; ?>
				
				<div class="post">
							
					<div id="filler">
						<div class="description">
							<bodytext>
								<h1><?php echo comment_name(); ?></h1>
							</bodytext>
									
						</div>
					</div>
							
					<div id="filler">
						<div class="description">
							<bodytext>
								<?php echo comment_text(); ?>
							</bodytext>
						</div>
					</div>
							
					<section class="yspace" ></section>
							
					<div class="datestamp">
						<stamptext><?php echo relative_time(comment_time()); ?></stamptext>
					</div>
					
					<div class="authorstamp">
						<stamptext>Comment #<?php echo comment_id(); ?></stamptext>
					</div>
					
					<section class="yspace" ></section>
					
				</div>
				
				<?php endwhile; ?>
			
			<?php endif; ?>
				
			<?php endif; ?>
</article>
	</div>


<?php theme_include('footer'); ?>