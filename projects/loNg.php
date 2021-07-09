<?php
function ngLib () {
	$title = 'Luminate AngularJS Library';
	$summary ='Component library for web applications on Blackbaud Luminate Online built with AngularJS, CoffeeScript, Bootstrap and Sass.';
	$cat = '';
	$overview = "Created component library for team members to use to build web applications on Blackbaud Luminate Online platform. Built with AngularJS, CoffeeScript, Bootstrap, Sass, Grunt and leveraging Blackbaud Luminate API.";
	$catlength = count($cat);
	$image = 'http://www.wesgabbard.com/images/ngLib.png';
	echo '' ?>
	<h2><?php echo $title; ?></h2>
	<figure class="effectHover">
			<img src="<?php echo $image; ?>" alt="preview image of <?php echo $title; ?>'s website" />
			<figcaption>
			<p><?php echo $summary; ?></p>
			<a class="lightboxFire" href="javascript:void(0);"></a>
			<div class="lightboxData">
				<div class="text">
					<div class="left">
						<h2><span class="whiteMask"><?php echo $title; ?></span></h2>
						<div class="row">
							<h3><span class="whiteMask">Overview</span></h3>
							<p><?php echo $overview; ?></p>
						</div>
						<a class="button" target="_blank" href="https://convio.github.io/luminate-angularjs-library/docs/index.html#/">Documentation</a>
						<!--<a class="button" target="_blank" href="https://github.com/Blackbaud-WesGabbard/luminate-ng-library">Github</a>-->
					</div>
				</div>
				<div class="img">
					<div class="right">
						<img src="<?php echo $image; ?>" alt="preview image of <?php echo $title; ?>'s website" />
					</div>
				</div>
			</div>
		</figcaption>
	</figure>
	<?php;
}

ngLib();
?>


