<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
        <meta name="autor" content="Agustín Ludi">
        <Title>TVulpis</Title>
        <link rel="stylesheet" href="<?php echo base_url();?>public/Styles.CSS">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    <body>
        <div class="container">
            <form action="<?php echo base_url('/login')?>" method="POST">
                <div class="formulario">
                    <div class="cont-form"><!--
                        <img src="<?php echo base_url();?>public/Img/Logo2.png" alt="Tvulpis logo" class="nav-brand">
                        <br>-->
                        <div>
                            <h3>Inicio de sesion</h3>
                        </div>
                        <div>
                            <input type="text" placeholder="Usuario o Email" name="usuario" required>
                        </div>
                        <div>
                            <input type="password" placeholder="Contraseña" name="password" required>
                            <div>
                                <a href="#">Has olvidado tu contraseña?</a>
                            </div>
                        </div>
                        <div>
                            <button>Iniciar sesion</button>
                            <p>No tienes cuenta? <a href="#">Crea una aqui</a></p>
                        </div>
                    </div>
                </div>
                
            </form>
        </div>
    </body>
</html>