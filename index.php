<!DOCTYPE html> 
<html lang="en">

<head> 
    <link rel="stylesheet" href="asets/css/estilos.css"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Login y Register - MagtimusPro</title> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="assets/css/estilos.css"> <!-- Vincula otra hoja de estilos CSS externa al documento HTML -->
</head>

<body> 

    <main>  <!--lo pronsipal deuna pagina o lo mas importante -->

        <div class="contenedor__todo"> <!-- Div prinsipal-->
            <div class="caja__trasera"> 
                <div class="caja__trasera-login"> 
                    <h3>¿Ya tienes una cuenta?</h3> 
                    <p>Inicia sesión para entrar en la página</p> 
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button> 
                </div>
                <div class="caja__trasera-register"> 
                    <h3>¿Aún no tienes una cuenta?</h3> 
                    <p>Regístrate para que puedas iniciar sesión</p> 
                    <button id="btn__registrarse">Regístrarse</button> 
                </div>
            </div>

 
            <div class="contenedor__login-register">
             

                <form action="php/login_usuario_be.php" class="formulario__login" method="POST">
                    <h2>Iniciar Sesión</h2> 
                    <input type="text" placeholder="Correo Electronico" name="correo"> 
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button> 
                </form>

             
                <form action="php/registro_usuario_be.php" class="formulario__register" method="POST"> 
                    <h2>Regístrarse</h2> 
                    <input type="text" placeholder="Nombre completo" name="nombre_completo"> 
                    <input type="text" placeholder="Correo Electronico" name="correo"> 
                    <input type="text" placeholder="Usuario" name="usuario"> 
                    <input type="password" placeholder="Contraseña" name="contrasena"> 
                    <button>Regístrarse</button> 
                </form>
            </div>
        </div>
    </main>
        <script src="asets/js/script.js"></script>
</body>
</html>
