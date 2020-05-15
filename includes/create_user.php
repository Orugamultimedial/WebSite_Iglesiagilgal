<link rel="stylesheet" href="./css/create_user.css">


    <div id='create_user'>
        <h1>Crear usuario</h1>
        <form action="./services/create_user.php" method="post">
            <input type="text" placeholder='Nombre de usuario / e-mail' id="user_create" name="user_create" required>
            <span class='error-span' id='error-input-user_create_user'>Ingresa un Usuario</span>
            <input type="text" placeholder='Contraseña' id="pass_create" name="pass_create" required>
            <span class='error-span' id='error-input-pass_create_user'>Ingresa tu contraseña</span>
            <input type="text" placeholder='Su nombre' id="name_create" name="name_create" required>
            <span class='error-span' id='error-input-name_create_user'>Ingresa tu nombre</span>
            <input type="text" placeholder='Su apellido' id="surname_create" name="surname_create" required>
            <span class='error-span' id='error-input-surname_create_user'>Ingresa tu Apellido</span>
            <input type="text" placeholder='Su e-mail' id="mail_create" name="mail_create" required>
            <span class='error-span' id='error-input-mail_create_user'>Ingresa tu E-mail</span>
            <input type="submit" value="Crear">
        </form>
    </div>