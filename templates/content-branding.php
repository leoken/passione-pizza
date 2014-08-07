<?php
        $brandimage = get_field('brand_image', 'options');
        $brandimagewhite = get_field('brand_image_white', 'options');
        $brandimagevertical = get_field('brand_image_vertical', 'options');
        $brandimagehorizontal = get_field('brand_image_horizontal', 'options');
        $primarycolor = get_field('primary_color', 'options');
        $secondarycolor = get_field('secondary_color', 'options');
        $tertiarycolor = get_field('tertiary_color', 'options');
        $navbarbackgroundcolor = get_field('top_navbar_background_color', 'options');
        $navbarlinkcolor = get_field('top_navbar_link_color', 'options');

        $navbar_rgb = hex2rgba($navbarbackgroundcolor);
        $navbar_rgba = hex2rgba($navbarbackgroundcolor, 1.0);
        $navbar_affix_rgba = hex2rgba($navbarbackgroundcolor, 0.7);

        if( !empty($brandimage) ):

          // vars
          $url = $brandimage['url'];
          $title = $brandimage['title'];
          $alt = $brandimage['alt'];
          $caption = $brandimage['caption'];

          // sizes
          $size = 'full';
          $med = $brandimage['sizes'][ $size ];
          $medwidth = $brandimage['sizes'][ $size . '-width' ];
          $medheight = $brandimage['sizes'][ $size . '-height' ];

          // vars
          $urlwhite = $brandimagewhite['url'];
          $titlewhite = $brandimagewhite['title'];
          $altwhite = $brandimagewhite['alt'];
          $captionwhite = $brandimagewhite['caption'];

          // sizes
          $sizewhite = 'full';
          $medwhite = $brandimagewhite['sizes'][ $size ];
          $medwidthwhite = $brandimagewhite['sizes'][ $size . '-width' ];
          $medheightwhite = $brandimagewhite['sizes'][ $size . '-height' ];

?>

  <style>
    .banner.affix-top .navbar-brand {
      background-image: url(<?php echo $urlwhite; ?>);
    }
    .banner.affix-top .navbar-brand,
    .banner.affix-top .navbar-brand .brand-text {
      color: <?php echo $navbarlinkcolor; ?>!important;
    }
    .banner.affix .navbar-brand {
      background-image: url(<?php echo $url; ?>);
    }
    .banner.affix .navbar-brand,
    .banner.affix .navbar-brand .brand-text {
      color: <?php echo $navbarlinkcolor; ?>!important;
    }
    .navbar-custom,
    .navbar-custom.affix-top {
      background-color: <?php echo $navbar_rgba; ?>;
      color: <?php echo $navbarlinkcolor; ?>;
    }
    .banner a,
    .navbar-custom a {
      color: <?php echo $navbarlinkcolor; ?>!important;
    }
    .navbar-custom.affix {
      background-color: <?php echo $navbar_affix_rgba; ?>;
    }
    .banner.affix a,
    .navbar-custom.affix a {
      color: <?php echo $navbarlinkcolor; ?>!important;
    }
  </style>

<?php endif; ?>