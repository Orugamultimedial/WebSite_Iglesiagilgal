
<link rel="stylesheet" href="./css/contact.css" >

    <?php

    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $consult = $_POST['consult'];

        $cuerpo_mensaje = "Nombre: ".$name."\r\n"."E-mail: ".$mail."\r\n"."Consulta: ".$consult."\r\n";
        $cuerpo_respuesta = "Gracias por contactarnos ".$name." hemos recibido su mensaje. En breve le enviaremos una respuesta."."\r\n"."Saludos"."\r\n"."Iglesia Gilgal";

        mail("orugamultimedial@gmail.com", "Recibiste una consultaen el sitio web", $cuerpo_mensaje);

        mail($mail,"Nos ha llegado su mensaje", $cuerpo_respuesta);

        mysqli_query($connect,"INSERT INTO consults VALUES ('DEFAULT','$name','$mail','$consult', CURDATE())");

        ?>
        <div id='container_contact'>
            <div id='contact'>
                <img src="./img/check_fail.png" alt="cancel contact" onclick="showContact()">
                <div>
                    <h1>Gracias!!</h1>
                    <h4>Hemos recibido tu mensaje</h4>
                    <h5>Te responderemos pronto</h5>
                </div>
            </div>
        </div>
        <?php
        header( "Refresh:2; url=./index.php", true, 303);
    }else{
        ?>
        <div id='container_contact'>
        <div id='contact'>
                <img src="./img/check_fail.png" alt="cancel contact" onclick="showContact()">
                <div>
                    <h1>Contáctanos</h1>
                    <h4>Déjanos tu consulta</h4>
                    <form action="#" method="post">
                        <input type="text" placeholder='Su Nombre y Apellido' name="name" required>
                        <input type="text" placeholder='su e-mail' name="mail" required>
                        <textarea rows="4" placeholder='Escribe tu consulta' name="consult" required></textarea>
                        
                        <input type="submit" value="Enviar">
                    </form>
                </div>
            </div>
        </div>
        <?php
    }
    ?>

