<?php
session_start();
if(isset($_SESSION['user'])){
    $userLogged = true;
}else{
    $userLogged = false;
};

include('./header.php');
include('./social_buttons.php');
?>

<link rel="stylesheet" href="../css/radio.css">

<div id="container_multimedia">
    <img src="../img/logo_radio.png" alt="logo FM Gilgal" id="logo_radio">
    
    <div id="border_player">
        <h2>Donde el viento del Espíritu de Dios nunca cesa</h2>

        <iframe id="audio_radio" name="contenedorPlayer" class="cuadroBordeado" allow="autoplay" width="100%" height="150px" marginwidth=0 marginheight=0 hspace=0 vspace=0 frameborder=0 scrolling=no  src="http://cp.usastreams.com/html5-player-barra-responsive.aspx?stream=http://stream.valenzuelasistemas.com:8000/fmgilgal&fondo=03&formato=aacp&color=3&titulo=2&autoStart=1&vol=9&botonPlay=2&server=http://stream.valenzuelasistemas.com:8000/status.xslCHUMILLASmount=/fmgilgal"></iframe>

    </div>
</div>
