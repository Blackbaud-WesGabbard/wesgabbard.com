<?php
function npfProj () {
	$title = 'National Parkinson Foundation';
	$summary ='Responsive website built in Drupal, along with custom Donation form utilizing Convio API.';
	$cat = 'Responsive Development, Fundraising Solutions';
	$role = 'Lead Developer';
	$overview = "New responsive website built in Drupal, along with custom Donation form utilizing Convio API.";
	$catlength = count($cat);
	$image = 'http://www.wesgabbard.com/images/npf.jpg';
	$url = 'http://parkinson.org/';
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
							<h3><span class="whiteMask">Role</span></h3>
							<span class="detail"><?php echo $role; ?></span>
						</div>
						<div class="row">
							<h3><span class="whiteMask">Overview</span></h3>
							<p><?php echo $overview; ?></p>
						</div>
						<a class="button" href="http://parkinson.org/" title="National Parkinson Foundation">View Website</a>
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

npfProj();
?>


