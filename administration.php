<?php
session_start();
include('./services/conection_db.php'); 


if(!isset($_SESSION['user'])){
	header("Location: index.php");
}

$id_user = $_SESSION['user']['id'];

$sql = "SELECT id, username FROM users WHERE id = '$id_user'";
$resultado = $connect->query($sql);
$row = $resultado->fetch_assoc();

$_SESSION['id'] = $id_user;

require('./includes/header.php');
?>
<link rel="stylesheet" href="./css/login.css">
<link rel="stylesheet" href="./css/administration.css">


    <body>
        <?php 
        require('./includes/radio_online.php');
        require('./includes/social_buttons.php');
        require('./includes/lateral_menu.php');
        require('./includes/create_user.php');
        require('./includes/contact.php');
        require('./includes/facebook_live_url.php');
        ?>

        <div id='container_administration_info'>
        <?php
        require('./includes/modify_activities.php');
        ?>
        </div>

    </body>
</html>


    