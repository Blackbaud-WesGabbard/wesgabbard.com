<?php
function obProj () {
	$title = 'Obliteride';
	$summary ='Created fundraising peer-to-peer module, custom search using Luminate API, as well as improved event registration and donation user flows.';
	$cat = array('Fundraising Solutions', 'Responsive Development');
	$role = 'Lead Developer';
	$overview = "Created fundraising peer-to-peer module, custom donor and participant search using Luminate API, as well as improved event registration and donation user flows for annual event website.";
	$catlength = count($cat);
	$image = 'http://www.wesgabbard.com/images/obPreview.jpg';
	$url = 'http://www.obliteride.org';
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

obProj();
?>
