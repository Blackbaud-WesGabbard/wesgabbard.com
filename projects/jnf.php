<?php
function jnfProj () {
	$title = 'Jewish National Foundation';
	$summary ='6 fundraising microsites templates on the Convio TeamRaiser platform, including peer-to-peer fundraising tools modules.';
	$cat = 'Fundraising Solutions';
	$role = 'Lead Developer';
	$overview = "Developed 6 different microsite templates for client to use for their fundraising programs. These included 3 peer-to-peer microsites (Create Your Own Event, Tribute, and Memorials), as well as the client's main fundraising event (Alternative Spring Break). Also, created peer-to-peer moduals that allow users to log in an utilize a variety of tools to fundraise.";
	$catlength = count($cat);
	$image = 'http://www.wesgabbard.com/images/jnfPreview.jpg';
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
								<?php echo $summary; ?>
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
						<a class="button" href="http://support.jnf.org/site/TR?fr_id=1920&pg=entry" title="<?php echo $title; ?>">Alternative Spring Break</a>
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

jnfProj();
?>
