<?php
require('./conection_db.php');
?>
<!--Import styles-->
<link rel="stylesheet" href="../css/login.css">

<?php
$user = isset($_POST['user_create']) ? mysqli_real_escape_string($connect, trim($_POST['user_create'])) : false;
$pass = isset($_POST['pass_create']) ? mysqli_real_escape_string($connect, trim($_POST['pass_create'])) : false;
$name = isset($_POST['name_create']) ? mysqli_real_escape_string($connect, trim($_POST['name_create'])) : false;
$surname = isset($_POST['surname_create']) ? mysqli_real_escape_string($connect, trim($_POST['surname_create'])) : false;
$mail = isset($_POST['mail_create']) ? mysqli_real_escape_string($connect, trim($_POST['mail_create'])) : false;

$_SESSION['newUser'] = $user;
$_SESSION['newPass'] = $pass;

//array errors
$errors = array();
//validation
//user
if (!empty($user)) {
    $user_validate = true;
} else {
    $user_validate = false;
    $errors['user'] = "El Usuario no es válido";
}
//pass
if (!empty($pass)) {
    $pass_validate = true;
} else {
    $pass_validate = false;
    $errors['pass'] = "La contraseña no es válida";
}
//name
if (!empty($name)) {
    $name_validate = true;
} else {
    $name_validate = false;
    $errors['name'] = "El nombre no es válido";
}
//surname
if (!empty($surname)) {
    $surname_validate = true;
} else {
    $surname_validate = false;
    $errors['surname'] = "El Apellido no es válido";
}
//mail
//name
if (!empty($mail) && filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    $mail_validate = true;
} else {
    $mail_validate = false;
    $errors['mail'] = "El E-mail no es válido";
}



if (count($errors) == 0) {

    //ENCODE PASSWORD
    $password_encode = password_hash($pass, PASSWORD_BCRYPT, ['cost' => 4]);

    $insertNewUser = "INSERT INTO users VALUES ('DEFAULT','$user','$password_encode','$name','$surname','$mail','admin')";

    $create = mysqli_query($connect, $insertNewUser);

    if ($create) {
        $_SESSION['createUserOk'] = true;
?>
        <link rel="stylesheet" href="../css/login.css">

        <div id='login'>
            <h1>Usuario Creado</h1>
            <h4>Recuerda estos datos</h4>
            <h3 style="color:white">Username: <?php echo $_SESSION['newUser'] ?></h3>
            <h3 style="color:white">Password: <?php echo $_SESSION['newPass'] ?></h3>
        </div>
        <script>setTimeout(function(){window.location.href = '../administration.php?user=$user&pass=$pass';}, 3000);</script>

    <?php
        //header("Location:../administration.php?user=$user&pass=$pass",8);
    } else {
        $_SESSION['createUserOk'] = false;
        $_SESSION['errors']['general'] = 'Error al cargar a la base de datos';
        echo "<script>setTimeout(function(){window.location.href = '../administration.php?user=$user&pass=$pass';}, 3000);</script>";
        die();
        //header("Location:../administration.php?user=$user&pass=$pass",8);
    ?>
        <div id='login'>
            <h1>Revisa estos datos</h1>
            <h3><?php var_dump($_SESSION['errors']); ?></h3>
        </div>
    <?php
    }
} else {
    $createUserOk = false;
    $_SESSION['error'] = $errors;
    ?>

    <div id='login'>
        <h1>Revisa estos datos</h1>
        <h3><?php var_dump($errors); ?></h3>
    </div>
    <script>setTimeout(function(){window.location.href = '../administration.php?user=$user&pass=$pass';}, 3000);</script>
<?php
    //header("Location:../administration.php?user=$user&pass=$pass",3);
}
?>