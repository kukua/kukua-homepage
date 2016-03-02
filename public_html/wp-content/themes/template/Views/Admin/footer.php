<?php /* WP-Admin footer */ ?>

<div class="wrap">
    <?php if ($notify == True): ?>
        <div id="message" class="updated notice notice-success is-dismissible"><p>Settings saved.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>
    <?php endif; ?>

    <h2>Footer settings</h2>
    <form method="POST" action="">
        <table class="form-table">
            <tr valign="top">
                <th scope="row">
                    <label for="title">Title</label> 
                </th>
                <td>
                    <input type="text" name="title" id="title" size="25" value="<?= $footer->getTitle(); ?>">
                </td>
            </tr>
        </table>
        <input type="hidden" name="update_appearance_footer" value="1">
        <input type="submit" value="Save settings" class="button-primary"/>
    </form>
</div>
