<?php
function fearProj () {
	$title = 'Canadian Cancer Society';
	$summary ='Responsive TeamRaiser fundraising site utilizing PHP and MySQL database.';
	$cat = 'Responsive Development, Fundraising Solutions';
	$role = 'Lead Developer';
	$overview = "Fundriasing microsite with stremlined registration flow that stores registrants information in MySQL database. Registrant information, including challenge and status poulated in personal fundraising module and fundraising page.";
	$catlength = count($cat);
	$image = 'http://www.wesgabbard.com/images/fearless.jpg';
	$url = 'http://convio.cancer.ca/site/TR?fr_id=19672&pg=entry';
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
						<a class="button" href="http://convio.cancer.ca/site/TR?fr_id=19672&pg=entry" title="Fearless Challenge">View Website</a>
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

fearProj();
?>


