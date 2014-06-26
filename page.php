<?php theme_include('header'); ?>


<?php 
$in= page_content();
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
				
				<div id="filler">
				<div class="description">
									<bodytext>
										<h1><?php echo page_title(); ?></h1>
									</bodytext>
									<section class="yspace" ></section>
								</div>
						</div>
<div id="filler">
								<div class="description">
									<bodytext>
										<?php echo $out; ?>
									</bodytext>
									<section class="yspace" ></section>
								</div>
							</div>
					</div>
					
				</div>
</article>
	</div>

<?php theme_include('footer'); ?>