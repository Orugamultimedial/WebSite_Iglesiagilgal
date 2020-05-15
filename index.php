<?php
if(!isset($_SESSION['id'])) { 
	session_start(); 
}

include('./includes/header.php');
include('./includes/social_buttons.php');
?>

<link rel="stylesheet" href="css/bienvenida.css">

    <div id="mostrarenmobile">
        <div>
            <a href="./includes/radio.php">
                <img src="./img/button_bienvenida_radio.png" alt="FM Gilgal 94.5 MHZ">
            </a>
        </div>
        <div>
            <a href="./includes/live.php">
                <img src="./img/button_bienvenida_video.png" alt="Prédicas en vivo">
            </a>
        </div>
        <div>
            <a onclick="clickenpagina()">
                <img src="./img/button_bienvenida_ingresar.png" alt="Iglesia Gilgal Oberá">
            </a>
        </div>
    </div>
    <div id="mostrarenpc">
        <?php 
            include('./includes/facebook_live.php');
            include('./includes/radio_online.php');
            include('./includes/contact.php');
            include('./includes/lateral_bar.php');
            include('./includes/info_index.php');
        ?>
    </div>


</body>
</html>

<script>
    function clickenpagina(){
        document.getElementById("mostrarenpc").style.display = "block";
        document.getElementById("mostrarenmobile").style.display = "none";
    }
</script>
