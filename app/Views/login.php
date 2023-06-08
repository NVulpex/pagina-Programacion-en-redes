<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
        <meta name="autor" content="Agustín Ludi">
        <Title>TVulpis login</Title>
        <link rel="stylesheet" href="<?php echo base_url();?>public/Styles.CSS">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <meta name="viewport" content="width=device-width, initial-sacle=1.0">
    </head>

    <body>
        <div class="container">
            <form action="<?php echo base_url('/login')?>" method="POST" autocomplete="off">
                <div class="formulario">
                    <div class="cont-form">
                        <div>
                            <h1>Inicio de sesion</h1>
                        </div>
                        <div>
                            <input type="text" placeholder="Email" name="usuario" required="">
                        </div>
                        <div>
                            <input type="password" placeholder="Contraseña" name="password" required="">
                        </div>
                        <div class="link-contraseña">
                            <a href="#">Has olvidado tu contraseña?</a>
                        </div>
                        <div>
                            <button>Iniciar sesion</button>
                            <p>No tienes cuenta? <a class="link-registro" href="<?php echo base_url('/registro')?>">Crea una aqui</a></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>