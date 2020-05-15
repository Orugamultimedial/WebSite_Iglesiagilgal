<?php
session_start();

require('./includes/header.php');
require('./includes/facebook_live.php');
require('./includes/social_buttons.php');
require('./includes/radio_online.php');
require('./includes/contact.php');


?>
</div>
<div id="container_shows">

    <div id="show_schedule">
        <?php
        require('./includes/schedule.php');
        ?>
    </div>
    <div id="show_activities">
        <?php
        require('./includes/activities.php');
        ?>
    </div>

</div>

    
</body>
</html>