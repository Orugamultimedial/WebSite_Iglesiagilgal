<link rel="stylesheet" href="./css/facebook_live_url.css">

<?php
if(isset($_POST['url'])){
        $url = $_POST['url'];

        mysqli_query($connect,"UPDATE streaming SET url='$url', date = CURDATE() WHERE id=1");
        ?> 

        <div id="container_facebok_live_url">
            <img src="./img/check_fail.png" alt="" id="img_close" onclick="showFacebookUrl()">
        <div>
            <h2>Listo el enlace está disponible</h2>
        <div>
            <button>VER</button>
            <button onclick="showFacebookUrl()">SALIR</button>
        </div>
                

<?php
    }else{
        ?>
        <div id="container_facebok_live_url">
                <img src="./img/check_fail.png" alt="" id="img_close" onclick="showFacebookUrl()">
            <div>
                <h2>Ingresa la dirección de</h2>
                <img src="./img/facebook_live-icon.png" alt="Iglesia Gilgal Facebook Live" id="img_facebook_live">
            </div>
            <div>
                <form action="#" method="post">
                    <input type="text" name="url">
                    <input type="submit" name="" value="Cargar">
                </form>
            </div>
            <h5>El enlace permanecerá por 2hs. en el sitio web</h5>
        </div>

<?php
    }
    ?>