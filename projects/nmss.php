<?php
function nmssProj () {
	$title = 'National MS Society';
	$summary ='Responsive fundraising web application built with AngularJS, CoffeeScript, Bootstrap and Sass used for events on Blackbaud TeamRaiser.';
	$overview = "Created website templates for 5 different event programs (Bike MS, Walk MS, Challenge Walk, Finish MS, and DIY) to be used for over 6,000 events nationwide. Built with AngularJS, CoffeeScript, Bootstrap and Sass while leveragin Blackbaud Luminate API.";
	$catlength = count($cat);
	$image = 'http://www.wesgabbard.com/images/nmssPreview.jpg';
	$url = 'http://www.bikems.org';
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
						<a class="button" href="http://bikems.org/" title="Bike MS Event">Bike MS Event</a>
						<a class="button" href="https://github.com/NationalMSSociety/nmss-luminate">Github</a>
						<!--<a class="button" href="http://walkms.org/" title="Bike MS Event">Walk MS Event</a>
						<a class="button" href="https://secure3.convio.net/nmss/site/SPageNavigator/CW_HOM_splash.html" title="Challenge Walk Event">Challenge Walk Event</a>-->
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

nmssProj();
?>


