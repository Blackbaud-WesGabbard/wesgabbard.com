<?php
function carolineProj () {
	$title = 'Caroline Wibbelsman';
	$summary ='Custom Wordpress site for Austin, TX based Psychotherapist';
	$cat = array('Responsive Development', 'CMS');
	$role = 'Lead Developer';
	$overview = "Developed custom theme on Wordpress that allows the client to update site with ease and no fear of disrupting code.";
	$catlength = count($cat);
	$image = 'http://www.wesgabbard.com/images/carolinePreview.jpg';
	$url = 'http://carolinewibbelsman.com/';
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
								<?php for($x=0;$x<$catlength;$x++){echo $cat[$x]; echo ", ";} ?>
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

carolineProj();
?>


