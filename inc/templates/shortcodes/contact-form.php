<form id="cperkoContactForm" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php') ?>">

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Your Name" id="name" name="name" required="required" />
    </div>

    <div class="form-group">
        <input type="email" class="form-control" placeholder="Your Email" id="email" name="email" required="required" />
    </div>

    <div class="form-group">
        <?php 
            $phoneRequired = get_option( 'require_phone' );
            $message = @$phoneRequired == 1 ? '' : '(Optional)';
            $required = @$phoneRequired == 1 ? 'required' : '';
        ?>
        <input type="tel" class="form-control" placeholder="Your Phone Number <?php echo $message; ?>" id="phone" name="phone" <?php echo $required; ?> />
    </div>

    <div class="form-group">
        <textarea name="message" id="message" class="form-control" required="required" placeholder="Your Message"></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-default cperko-button">Submit</button>
    </div>

    <div class="message-sent">
        <?php
            $message1 = esc_attr( get_option( 'success_message_1', 'Your message has been sent.' ) );
            $message2 = esc_attr( get_option( 'success_message_2', 'I will be in touch with you soon!' ) );
        ?>
        <h2><?php echo $message1; ?></h2>
        <h4><?php echo $message2; ?></h4>
    </div>

</form>