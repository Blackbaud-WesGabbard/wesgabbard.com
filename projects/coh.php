<?php
function cohProj () {
	$title = 'City of Hope';
	$summary ='Created 4 responsive event fundraising websites, including peer-to-peer fundraising tools modules and custom Flickr API feed.';
	$cat = 'Fundraising Solutions, Responsive Devlopment';
	$role = 'Lead Developer';
	$overview = "Developed 4 different event fundraising websites (Yoga for Hope, Walk for Hope, Hope Sweat and Cures, and Independent Fundraising). Also, created peer-to-peer moduals that allow users to log in an utilize a variety of tools to fundraise, as well as custom photo feed using Flickr API.";
	$catlength = count($cat);
	$image = 'http://www.wesgabbard.com/images/coh.jpg';
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
								Fundraising Solutions, Responsive Development
							</span>
						</div>
						<div class="row">
							<h3><span class="whiteMask">Role</span></h3>
							<span class="detail"><?php echo $role; ?></span>
						</div>
						<div class="row">
							<h3><span class="whiteMask">Overview</span></h3>
							<p><?php echo $overview; ?></p>
						</div>
						<a class="button" href="http://nationalevents.cityofhope.org/site/PageNavigator/yoga_splash.html" title="<?php echo $title; ?>">Yoga for Hope</a>
						<a class="button" href="http://nationalevents.cityofhope.org/site/PageNavigator/events.html" title="<?php echo $title; ?>">City of Hope Events Page</a>
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

cohProj();
?>
