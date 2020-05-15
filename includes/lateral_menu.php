<link rel="stylesheet" href="./css/lateral_menu.css">
<?php $name = $_SESSION['user']['name'].' '.$_SESSION['user']['surname']?>

<div id="lateral_menu">
    <nav>
        <img src="./img/user_icon.png" alt="user icon">
        <h4><?=$name?> </h4>
        <ul>
            <li><button class="desactive" id="modifyInicio"      onclick='modifyInicio();buttonActived(this.id)'     >Inicio</button>        </li>
            <li><button class="desactive" id="modifyAbout"       onclick='modifyAbout();buttonActived(this.id)'      >Nosotros</button>      </li>
            <li><button class="desactive" id="modifyActivities"  onclick='modifyActivities();buttonActived(this.id)' >Actividades</button>   </li>
            <li><button class="desactive" id="modifyYoungsters"  onclick='modifyYoungsters();buttonActived(this.id)' >Jóvenes</button>       </li>
            <li><button class="desactive" id="modifyUser"        onclick='modifyUser();buttonActived(this.id)'       >Usuario</button>       </li>
            <li><button class="desactive" id="createUser"        onclick='createUser();buttonActived(this.id)'       >Crear Usuario</button> </li>
            <li><button class="desactive" id="modifyFacebookUrl" onclick='modifyFacebookUrl();buttonActived(this.id)'>Facebook Live</button> </li>
        </ul>
    </nav>
</div>
