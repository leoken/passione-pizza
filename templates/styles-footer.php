<?php
  $footer_background_color = get_field('footer_background_color', 'options');
  $footer_min_height = get_field('footer_min_height', 'options');
  $footer_margin_top = get_field('footer_margin_top', 'options');
  $footer_padding_top = get_field('footer_padding_top', 'options');
  $footer_margin_bottom = get_field('footer_margin_bottom', 'options');
  $footer_padding_bottom = get_field('footer_padding_bottom', 'options');
?>
<style>
.content-info {
  <?php if( !empty($footer_background_color) ) { ?>
   background-color: <?php echo $footer_background_color; ?>;
  <?php } ?>
  <?php if( !empty($footer_min_height) ) { ?>
   min-height: <?php echo $footer_min_height; ?>px;
  <?php } ?>
  <?php if( !empty($footer_margin_top) ) { ?>
   margin-top: <?php echo $footer_margin_top; ?>px;
  <?php } ?>
  <?php if( !empty($footer_padding_top) ) { ?>
   padding-top: <?php echo $footer_padding_top; ?>px;
  <?php } ?>
  <?php if( !empty($footer_margin_bottom) ) { ?>
   margin-bottom: <?php echo $footer_margin_bottom; ?>px;
  <?php } ?>
  <?php if( !empty($footer_padding_bottom) ) { ?>
   padding-bottom: <?php echo $footer_padding_bottom; ?>px;
  <?php } ?>
}
</style>