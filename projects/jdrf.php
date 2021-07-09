<?php
function jdrf () {
	$title = 'JDRF';
	$summary ='Fundraising websites on Blackbaud TeamRaiser platform built using AngularJS and Angular Material';
	$cat = 'Responsive Development, Fundraising Solutions';
	$overview = "Fundraising websites on Blackbaud TeamRaiser platform built with AngularJS, CoffeeScript, Angular Material, Sass and using Deploybot for Continous Integration. This includes a new DIY program launched by JDRF in 2017, as well as their popular JDRF Ride program.";
	$catlength = count($cat);
	$image = 'http://www.wesgabbard.com/images/jdrf.jpg';
	$url = 'http://www.jdrf.org/yourway';
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
							<h3><span class="whiteMask">Type</span></h3>
							<span class="detail">
								<?php echo $cat; ?>
							</span>
						</div>
						<div class="row">
							<h3><span class="whiteMask">Overview</span></h3>
							<p><?php echo $overview; ?></p>
						</div>
						<a class="button" target="_blank" href="https://www2.jdrf.org/site/SPageServer?pagename=diy_homepage" title="jdrf Your Way">JDRF DIY</a>
						<a class="button" target="_blank" href="https://www2.jdrf.org/site/SPageServer/?pagename=ride_homepage" title="jdrf Ride">JDRF Ride</a>
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

jdrf();
?>


