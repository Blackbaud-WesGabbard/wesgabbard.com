<?php
function TSB () {
	$title = 'TSB Fundraising Hub';
	$summary ='Fundraising hub for TSB built with React, Redux, ES6, and Webpack.';
	$cat = '';
	$overview = "Fundraising website on Blackbaud JustGiving platform leveraging the JustGiving API using React, Redux, ES6, and Webpack with continuous integration with Travis CI to Amazon S3.";
	$catlength = count($cat);
	$image = 'http://www.wesgabbard.com/images/tsb.png';
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
						<a class="button" target="_blank" href="https://fundraising.tsb.co.uk/">TSB</a>
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

TSB();
?>


