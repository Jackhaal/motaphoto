
<?php
 
if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
  wpcf7_enqueue_scripts();
}
 
if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
  wpcf7_enqueue_styles();
}
 
?>
<div id="modal1" class="modal" role="dialog" aria-modal="false" style="display:none;">
  <div class="close"></div>
  <div class="modal-wrapper js-modal-stop">
    <div class="formContactHeader"></div>
    <?php echo do_shortcode('[contact-form-7 id="7fe3f8e" title="modale"]') ?>
  </div>
</div>