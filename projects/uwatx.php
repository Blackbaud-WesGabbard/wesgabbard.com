<?php
function uwProj () {
	$title = 'United Way for Greater Austin';
	$summary ='Project Lead for website redesign project built on Wordpress.';
	$cat = 'CMS';
	$role = 'Lead Developer';
	$overview = "Project lead for website redesign project and migration to Wordpress site, which allowed for staff to make updates to website. ";
	$catlength = count($cat);
	$image = 'http://www.wesgabbard.com/images/uwatx.png';
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
						<a target="_blank" class="button" href="http://www.uwatx.org" title="Fight for Air Climb">United Way Greater Austin</a>
			
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

uwProj();
?>
