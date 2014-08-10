<?php
  $headerheight = get_field('header_height', 'options');
  $image = get_field('header_image');

  if( !empty($image) ):

  // vars
  $url = $image['url'];
  $title = $image['title'];
  $alt = $image['alt'];
  $caption = $image['caption'];

  // thumbnail
  $size = 'large';
  $thumb = $image['sizes'][ $size ];
  $width = $image['sizes'][ $size . '-width' ];
  $height = $image['sizes'][ $size . '-height' ];

?>
<div class="container-fluid">
  <div class="row">
    <div id="header-image" class="">
      <div class="header-inner">
          <style>
           #header-image {
            background-image: url(<?php echo $url; ?>);
            height: <?php echo $headerheight; ?>px;
          }
          </style>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>