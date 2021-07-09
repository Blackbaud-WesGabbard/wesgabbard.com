<?php
function nkfProj () {
	$title = 'National Kidney Foundation';
	$summary ='Developed new responsive site for annual Kidney Walk, including custom API event search, peer-to-peer fundraising modual.';
	$cat = 'Fundraising Solutions, Responsive Development';
	$role = 'Lead Developer';
	$overview = "Developed new responsive site for annual Kidney Walk, including custom API event search, peer-to-peer fundraising module.";
	$catlength = count($cat);
	$image = 'http://www.wesgabbard.com/images/nkf.jpg';
	$url = 'http://www.kidneywalk.org';
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
						<a target="_blank" class="button" href="<?php echo $url; ?>" title="<?php echo $title; ?>">View Website</a>
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

nkfProj();
?>
