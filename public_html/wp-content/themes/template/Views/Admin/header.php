<?php /* WP-Admin header */ ?>

<div class="wrap">
    <?php if ($notify == True): ?>
        <div id="message" class="updated notice notice-success is-dismissible"><p>Settings saved.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>
    <?php endif; ?>

    <h2>Header settings</h2>
    <form method="POST" action="">
        <table class="form-table">
            <tr valign="top">
                <th scope="row">
                    <label for="title">Title</label> 
                </th>
                <td>
                    <input type="text" name="title" id="title" size="25" value="<?= $header->getTitle(); ?>">
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <label for="subtitle">Subtitle</label> 
                </th>
                <td>
                    <input type="text" name="subtitle" id="subtitle" size="25" value="<?= $header->getSubtitle(); ?>">
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <label for="image">Background image</label> 
                </th>
                <td>
                    <input class="header_logo_url" type="text" name="image" size="25" value="<?= $header->getImage(); ?>">
                    <a href="#" class="js-image button">Upload</a>
                </td>
            </tr>
        </table>
        <input type="hidden" name="update_appearance_header" value="1">
        <input type="submit" value="Save settings" class="button-primary"/>
    </form>
</div>

<script>
    jQuery(document).ready(function($) {
        $('.js-image').click(function(e) {
            e.preventDefault();

            var custom_uploader = wp.media({
                title: 'Custom Image',
                button: {
                    text: 'Upload Image'
                },
                multiple: false  // Set this to true to allow multiple files to be selected
            })
            .on('select', function() {
                var attachment = custom_uploader.state().get('selection').first().toJSON();
                $('.header_logo').attr('src', attachment.url);
                $('.header_logo_url').val(attachment.url);

            })
            .open();
        });
    });
</script>
