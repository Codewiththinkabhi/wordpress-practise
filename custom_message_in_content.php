<?php
function my_custom_message() {
    echo '<div class="custom-message" style="padding:10px; background:#f0f0f0; border-left:5px solid #0073aa;">
            <p>This is a custom message from your plugin.</p>
          </div>';
}
add_action('admin_notices', 'my_custom_message');


?>
