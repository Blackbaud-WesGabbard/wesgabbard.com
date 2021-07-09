<?php
function alaProj () {
	$title = 'American Lung Association';
	$summary ='Developed fundraising websites for Fight for Air Climb and Lungforce events held across the nation.';
	$cat = 'Fundraising Solutions, Responsive Development';
	$role = 'Lead Developer';
	$overview = "Created responsive websites Fight for Air Climb event and for the new Lungforce initiative. Events to be held across the nation and allow for particpants to register, donate, and fundraise. Highligts for projects include event search using using Geo-Location and Convio API to provide nearby events.";
	$catlength = count($cat);
	$image = 'http://www.wesgabbard.com/images/lungPreview.jpg';
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
							<h3><span class="whiteMask">Role</span></h3>
							<span class="detail"><?php echo $role; ?></span>
						</div>
						<div class="row">
							<h3><span class="whiteMask">Overview</span></h3>
							<p><?php echo $overview; ?></p>
						</div>
						<a target="_blank" class="button" href="http://www.lungforce.org" title="Lungforce">Lungforce</a>
						<a target="_blank" class="button" href="http://action.lung.org/site/PageNavigator/FFA_splash.html" title="Fight For Air Climb">Fight For Air Climb</a>
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

alaProj();
?>
