<?php settings_errors(); ?>

<form method="post" action="options.php">

  <?php settings_fields( 'cperko-options-group' ); ?>
  <?php do_settings_sections( 'cperko' ); ?>

  <?php submit_button(); ?>

</form>