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
</article>
	</div>


<?php theme_include('footer'); ?>