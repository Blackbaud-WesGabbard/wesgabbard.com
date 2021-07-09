<?php
function caritas () {
	$title = 'Caritas of Austin';
	$summary ='Secure website built for local non-profit using Wordpress, requiring login for full access.';
	$cat = 'Responsive Development, Fundraising Solutions';
	$role = 'Lead Developer';
	$overview = 'Built Wordpress site for local non-profit Caritas and their Best Singel Source Program, which is used to communicate with partner agencies and stakeholders. Requires login to access full site. Includes forum tool, custom search, and calendar.';
	$catlength = count($cat);
	$image = 'http://www.wesgabbard.com/images/caritas.png';
	$url = 'http://bestsinglesourceplus.org/';
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
						<a class="button" target="_blank" href="http://bestsinglesourceplus.org/" title="Best Single Source">View Website</a>
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

caritas();
?>


