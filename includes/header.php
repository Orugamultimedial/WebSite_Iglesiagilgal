<?php
require('./services/conection_db.php');
header("Content-Type: text/html;charset=utf-8");
require('./helpers.php');

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Iglesia Gilgal</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/headers.css">
        <link rel="stylesheet" href="./css/login.css">
        <script src="main.js"></script>
    </head>

<header style="margin-top:0px;">
    
    <img src="./img/logo_iglesia_gilgal.png" id="imagen_logo" alt="logo Iglesia Gilgal">
    
    
    
        <h1 id="title-bar"><a href='./index.php'>Iglesia Gilgal</a></h1>
    
    
    <ul>
        <li id="index_btn">
            <a href='./index.php'>Inicio</a>
        </li>
        <li>
            <a href='./about.php'>Nosotros</a>
        </li>
        <li>
            <a href="./activities.php">Actividades</a>
        </li>
        <li>
            <a href='./youngsters.php'>Jóvenes</a>
        </li>

    <?php
    if(isset($_SESSION['id'])){ 
        "<li>";
        echo "<a href='./administration.php'>Admin</a>";
        echo "</li>";
    };
    ?>

    </ul>
    <!--div id='logout-ico'>
        <a href='#' onclick='queryClosed()'>
            <img id='login_icon' src='./img/logout.png' alt='Iglesia Gilgal login'>
        </a>
        <div id='query'> 
            <span>¿salir?</span>
            
            <button  onclick='<?php closeSession()?>;queryClosed()'>Si</button>
            <button onclick='queryClosed()'>No</button>           
        </div>
    </div-->
    <div id='login-ico'>
        <a href='./login.php'>
            <img id='login_icon' src='./img/login.png' alt='Iglesia Gilgal login'>
        </a>    
    </div>
</header>

<script>
    let sessionStatus = localStorage.status;
    if (sessionStatus == 'ok'){
        var logout = document.getElementById('logout-ico');
        logout.style.display = 'block';
        var login = document.getElementById('login-ico');
        login.style.display = 'none';
    }else{
        var logout = document.getElementById('logout-ico');
        logout.style.display = 'none';
        var login = document.getElementById('login-ico');
        login.style.display = 'block';    
    }
        
    function queryClosed(){
        e = document.getElementById('query');
        if(e.style.display == 'none'){
            e.style.display = 'block';
        }else{
            e.style.display = 'none';
        }
    }
</script>
