<?php
function v4v () {
	$title = 'Victories for Veterans';
	$summary ='Fundraising website built with React, Redux, ES6, and Webpack.';
	$cat = '';
	$overview = "Fundraising website on Blackbaud EverydayHero platform leveraging the EverydayHero API using React, Redux, ES6, and Webpack with continuous integration with Travis CI to Amazon S3.";
	$catlength = count($cat);
	$image = 'http://www.wesgabbard.com/images/v4v.jpg';
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
						<a class="button" target="_blank" href="https://www.victoriesforveterans.com/">Victories for Veterans</a>
						<a class="button" target="_blank" href="https://github.com/blackbaud-services/victories-for-veterans">Github</a>
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

v4v();
?>


