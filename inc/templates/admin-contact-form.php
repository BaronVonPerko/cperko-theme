<?php settings_errors(); ?>
<h1>Contact Form</h1>

<p>Use this <strong>shortcode</strong> to activate the Contact Form inside a Page or a Post.</p>
<p><code>[contact_form]</code></p>

<form method="post" action="options.php">

  <?php settings_fields( 'cperko-contact-options' ); ?>
  <?php do_settings_sections( 'cperko_contact' ); ?>

  <?php submit_button(); ?>

</form>