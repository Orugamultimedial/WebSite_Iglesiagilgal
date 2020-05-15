<?php
session_start();

require('./includes/header.php');
require('./includes/social_buttons.php');
require('./includes/contact.php');



//Login
if(!empty($_POST)){
	$user=mysqli_real_escape_string($connect,$_POST['user']);
	$pass=mysqli_real_escape_string($connect,$_POST['pass']);
	$password_encriptada = sha1($pass);
	$sql = "SELECT * FROM users
				WHERE username = '$user' AND pass = '$password_encriptada' ";
	$resultado = $connect->query($sql);
	$data = $resultado->num_rows;

	if($data > 0){
        //si los datos son correctos redirijo a admin.php
        
        $datauser = $resultado->fetch_assoc();
        $_SESSION['user'] = $datauser;
		$username = $_SESSION['user']['username'];
		?>
		<script>
		    localStorage.clear();

			if (typeof(Storage) !== 'undefined') {
				// Código cuando Storage es compatible

				localStorage.setItem('status','ok');
				localStorage.setItem('username','$username');
				setTimeout(function(){window.location.href = './administration.php';});

			} else {
			// Código cuando Storage NO es compatible
				alert('NO se puede guardar la sesiòn');
			};

		</script>
		
		<?php
		/*header("Location:administration.php");*/


	}else{
		//si los datos son incorrectos
		echo "<script>
		alert('Error de usuario o contraseña');
		window.location='login.php';
		</script>";
	}
}


?>

<link rel="stylesheet" href="./css/login.css">

        <div id='container_login'>
            <img id='logo_login' src='./img/logo_iglesia_gilgal.png' alt='Logo Iglesia Gilgal'>
            <div id='login'>
                <h1>LogIn</h1>
                <form action="<?php $_SERVER["PHP_SELF"]; ?>" method='post'>
                    <input type='text' placeholder='Nombre de usuario' id='user' name='user' required>
                    <span class='error-span' id='error-input-username'>Ingresa un Usuario</span>
                    <input type='text' placeholder='Contraseña' id='pass' name='pass' required>
                    <span class='error-span' id='error-input-password'>Ingresa tu contraseña</span>
                    <input type='submit' value='Ingresar'>
                </form>
            </div>
        </div>

    
</body>
</html-->

