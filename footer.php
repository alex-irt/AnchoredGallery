		<div class="bg1">
		<footer class="wrapper">
			
			<footer class="footer">
	                <div class="fiftyfifty" style="padding:10px;"><bodytext>&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>. All rights reserved.</bodytext></div>
					<div class="fiftyfifty" ><form id="search" action="<?php echo search_url(); ?>" method="post">
					<bodytext>Search: </bodytext>
					<input type="search" style="width:300px; padding:10px; border: 1px solid #e8e8e8;
						-webkit-border-radius: 3px;
						-moz-border-radius: 3px;
						border-radius: 3px;"
						id="term" name="term" placeholder="Type here and hit enter to search" value="<?php echo search_term(); ?>"></div>
					</form>
			</footer>
			 
        </footer>
		</div>
    </body>
</html>