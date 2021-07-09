<?php
function breadProj () {
	$title = 'Project Bread';
	$summary ='Website built on Convio CMS that included several automated randomized content components as well as updatable widgets.';
	$cat = 'CMS, Responsive Development, Website Deployment';
	$role = 'Supporting Developer';
	$overview = "Worked under Lead Developer Adam Kaye to build organization's website in Convio CMS. Main responsibilities included internal landing page templates, internal page template, automated random image mosaic, as well as setting up system for updatable components.";
	$catlength = count($cat);
	$image = 'http://www.wesgabbard.com/images/breadPreview.jpg';
	$url = 'http://www.projectbread.org';
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

breadProj();
?>
