<?php
$day = array();
$day = conseguirAgenda($connect);
?>

<link rel="stylesheet" href="./css/schedule.css">

    <div id='schedule'>
        <div class='activities' id="info_monday">
            <?php

                              
                $data = mysqli_fetch_assoc($day);

                //verify
                $id = trim($data['id']);
                $day = trim($data['day']);
                $title = trim($data['title']);
                $subtitle = trim($data['subtitle']);
                $description = trim($data['description']);
                $tags = trim($data['tags']);
                $date = trim($data['date']);
                ?>
                
                <h3><?php echo $day?></h3>    
                <p><?php echo $description?></p>

                
            <?php      
            ?>
        </div>
    </div>
