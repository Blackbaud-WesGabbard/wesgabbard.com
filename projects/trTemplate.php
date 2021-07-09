<?php
function trTemplate () {
	$title = 'TeamRaiser Baseline Template';
	$summary ='Template for bootstraping custom Blackbaud TeamRaiser web applications built with AngularJS, CoffeeScript, Bootstrap and Sass.';
	$cat = '';
	$overview = "Created component library for team members to use to build web applications on Blackbaud Luminate Online platform. Built with AngularJS, CoffeeScript, Bootstrap, Sass, Grunt and leveraging Blackbaud Luminate API.";
	$catlength = count($cat);
	$image = 'http://www.wesgabbard.com/images/trTemplate.jpg';
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
						<a class="button" target="_blank" href="http://psdemo.convio.net/site/TR?fr_id=1070&pg=entry">Demo Site</a>
						<!--<a class="button" target="_blank" href="https://github.com/convio/tr-baseline">Github</a>-->
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

trTemplate();
?>


