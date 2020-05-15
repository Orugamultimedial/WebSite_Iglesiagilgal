<?php
session_start();

require('./includes/header.php');
?>

<link rel="stylesheet" href="./css/login.css">

<?php
    if(!empty($_POST)){ 
                             
        $user = trim($_POST['user']);
        $pass = trim($_POST['pass']);

            //user data
            $sql = "SELECT * FROM users WHERE username = '$user'";
            $login = mysqli_query($connect, $sql);
            

            if($login && mysqli_num_rows($login) == 1){
                    
                    $usuario = mysqli_fetch_assoc($login);

                    //password verify
                    $verify = password_verify($pass, $usuario['password']);

                    if($verify){
                        $_SESSION['user'] = $usuario;
                        echo "<div id='container_login'>";
                        echo "  <div id='login'>";
                        echo "    <img src='./img/check_ok.png' alt='check ok'><h1>identificado</h1>";
                        echo "    <br>";
                        echo "    <h4>Hola $user, Bienvenido!</h4>";
                        echo "  </div>"; 
                        echo "</div>";
                        echo "<script>setTimeout(function(){window.location.href = './administration.php';}, 2000);</script>";
                        die();
                        //header( "Refresh:2; url=/administration.php", true, 303);
                    }else{
                        $_SESSION['error_login'] = "Login Incorrecto";
                        $error_session = $_SESSION['error_login'];
                        echo  "<div id='container_login'>";
                        echo        "<div id='login'>";
                        echo            "<img src='./img/check_fail.png' alt='check ok'>";
                        echo            "<h2 style='color:white'>Hay un error $error_session</h2>";
                        echo  "     </div>"; 
                        echo  "</div>";
                        echo "<script>setTimeout(function(){window.location.href = './login.php';}, 2000);</script>";
                        die();
                        //header( "Refresh:2; url=./login.php", true, 303);
                    };
            }else{
                echo  "<div id='container_login'>";
                echo        "<div id='login'>";
                echo            "<img src='./img/check_fail.png' alt='check ok'>";
                echo            "<h4 style='color:white'>Error, el usuario o la contraseña son incorrectos</h4>";
                echo  "     </div>"; 
                echo  "</div>";
                echo "<script>setTimeout(function(){window.location.href = './login.php';}, 2000);</script>";
                die();
                //header( "Refresh:2; url=./login.php", true, 303);
            }
    }else{
        echo  "<div id='container_login'>";
        echo        "<div id='login'>";
        echo            "<img src='./img/check_fail.png' alt='check ok'>";
        echo            "<h2 style='color:white'>error al recibir la variable por POST</h2>";
        echo  "     </div>"; 
        echo  "</div>";
        echo "<script>setTimeout(function(){window.location.href = './login.php';}, 2000);</script>";
        die();
        //header( "Refresh:2; url=./login.php", true, 303);
    }
?>
 
    
</body>
</html>