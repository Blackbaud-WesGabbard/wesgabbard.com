<?php?>
<div class="left">
	<h2><span class="whiteMask"><?php echo $title; ?></span></h2>
	<div class="row">
		<h3><span class="whiteMask">Type</span></h3>
		<span class="detail"><?php for($x=0;$x<$catlength;$x++){echo $cat[$x]; echo ", ";} ?></span>
	</div>
	<div class="row">
		<h3><span class="whiteMask">Role</span></h3>
		<span class="detail"><?php echo $role; ?></span>
	</div>
	<div class="row">
		<h3><span class="whiteMask">Overview</span></h3>
		<p><?php echo $overview; ?></p>
	</div>