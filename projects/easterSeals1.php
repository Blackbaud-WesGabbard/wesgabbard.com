<?php
function projectVars () {
	$title = 'Easter Seals';
	$summary ='Full site deployment for national office and 60 affiliate sites on Blackbaud Luminate CMS. Named by Social Driver as one of top websites of 2014.';
	$cat = 'Responsive Development, CMS, Website Deployment';
	$role = 'Supporting Developer';
	$overview = 'Create new website for national office, as well as creating 60 local chapter sites on Convio CMS. Named by <a target="_blank" href="http://socialdriver.com/2014/03/05/65-best-responsive-website-design-examples-2014/#nonprofits">Social Driver</a> as one of the top websites of 2014.';
	$catlength = count($cat);
	$image = 'http://www.wesgabbard.com/images/esPreview.jpg';
	$url = 'http://www.easterseals.com';
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
						<a class="button" target="_blank" href="<?php echo $url; ?>" title="<?php echo $title; ?>">View Website</a>
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

projectVars();
?>


