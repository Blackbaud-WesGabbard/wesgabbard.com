<?php
function mda () {
	$title = 'MDA';
	$summary ='Responsive Fundraising website templates for 5 different event programs covering over 6,000 events held nationwide. Included custom API event search with Geo-Location.';
	$cat = 'Responsive Development, Fundraising Solutions';
	$role = 'Lead Developer';
	$overview = "Created website templates for 5 different event programs (Muscle Walk, Lock-Up, team Momentum, Golf MDA, and DIY) to be used for over 6,000 events nationwide. Built custom interactive peer-to-peer fundraising modules that supply tools for particpants to raise more money. Created custom API event search tool to enable user to locate nearby events. Also built national team pages that allow users to register and be associated with national sponsors.";
	$catlength = count($cat);
	$image = 'http://www.wesgabbard.com/images/mda.jpg';
	$url = 'https://secure2.convio.net/mda/site/SPageServer?pagename=musclewalk_splash';
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
						<a class="button" target="_blank" href="http://www.musclewalk.org" title="Muscle Walk">MDA Muscle Walk</a>
						
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

mda();
?>


