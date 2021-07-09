<?php
function aha () {
  $title = 'AHA';
  $summary ='Responsive Fundraising websites utilizing Angular and Bootstrap';
  $cat = 'Responsive Development, Fundraising Solutions';
  $overview = "Fundraising websites for American Heart's Youth Market including their Jump Rope for Heart program. Utlized AngularJS, Sass and CoffeeScript in building custom school search and integrations with their prize fullfilment database. ";
  $catlength = count($cat);
  $image = 'http://www.wesgabbard.com/images/aha.png';
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
              <h3><span class="whiteMask">Overview</span></h3>
              <p><?php echo $overview; ?></p>
            </div>
            <a class="button" target="_blank" href="http://american.heart.org/jump-hoops/" title="Jump Rope for Heart">Jump Rope for Heart</a>
            <a class="button" target="_blank" href="https://github.com/chiragchhita/aha-luminate">Github</a>

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
aha();
?>


