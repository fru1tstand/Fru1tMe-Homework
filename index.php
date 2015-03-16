<!DOCTYPE html>

<html lang="en">
	<head>
		<title>Fru1tMe - Homework Thing</title>
		<meta charset="UTF-8" />
		<link href="/.site/css/compiled/global.css" rel="stylesheet" type="text/css">
		<link href="/.site/php/css/theme.php" rel="stylesheet" type="text/css">
		
<?php include(".site/php/ascii-art.php"); ?>

	</head>
	
	<body>
		<div id="global-menu-bar">
			<div id="global-logo">
				<h2><a href="#" class="sidebar-open" data-sidebar="global">&gt;</a></h2>
				<h2><a href="/">Lions and dragons</a></h2>
			</div>
			<div class="tabs" id="global-tabs">
				<!-- No, that's not a programming error. It's an HTML fix for
						whitespace poo in between display: inline-block; elements.
						-->
				<ul class="collapse-hidden"
					><li class="window-open" data-window="theone">The One</li
					><li class="window-open" data-window="thetwo">The Two</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		
		<div class="window-container">
			<div id="window-theone">
				<div class="window-close">Click to close</div>
			</div>
			<div id="window-thetwo">
				<div class="window-close">CLOSE MEEEE</div>
			</div>
		</div>
		
		<div class="sidebar-container">
			<div id="sidebar-global">
				<div class="titles">
					<h2>Homework Thing</h2>
					<h6>By Fru1tStudio</h6>
				</div>
				
				<ul class="expand-hidden">
					<li><a href="#" class="window-open" data-window="theone">The One</a></li>
					<li><a href="#" class="window-open" data-window="thetwo">The Two</a></li>
				</ul>
			</div>
		</div>
		

		
		<script src="/.site/js/global.js"></script>
	</body>
</html>