<!doctype html>


<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">

		<link rel="stylesheet" href="<?php echo theme_url('/css/reset.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">
		
		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">
		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script>var base = '<?php echo theme_url(); ?>';</script>
		<script src="<?php echo asset_url('/js/zepto.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/main.js'); ?>"></script>
		
		<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

	    <meta name="viewport" content="width=600">
	    <meta name="generator" content="Anchor CMS">

	    <meta property="og:title" content="<?php echo site_name(); ?>">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?php echo e(current_url()); ?>">
	    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo site_description(); ?>">

		<?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	</head>
	
	
	<body class="<?php echo body_class(); ?>">
	
			<div style="background-image:url('<?php echo theme_url($append = '/img/header.png'); ?> '); overflow:hidden; background-position:center;">
	<article class="wrapper" >
		<a href="<?php echo base_url(); ?>">
			<header>
				<titletext><?php echo site_name(); ?></titletext>
			</header>
		</a>
		
		<?php if(has_menu_items()): ?>
			<?php $n =0; ?>
			<?php while(menu_items()): 
			$n++;
			endwhile; ?>
			
			<?php if(total_categories()!=1): 
			$n+=total_categories();
			endif;
			?>
		
			<div class="pagewrapper" style="width:<?php echo ($n *160); ?>px">
				<?php while(menu_items()): ?>
					<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
						<div class="page">
								<stamptext><?php echo menu_name(); ?></stamptext>
						</div>
					</a>
				<?php endwhile; ?>
				
				<?php if(total_categories()!=1): ?>
					<?php while(categories()): ?>
					<a href="<?php echo category_url(); ?>" title="<?php echo category_title(); ?>">
						<div class="page">
								<stamptext><?php echo category_title(); ?> (<?php echo category_count(); ?>)</stamptext>
						</div>
					</a>
					<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
		<?php endif; ?>
	</article>
	</div>