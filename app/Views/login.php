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
            <h1>Inicio de sesion</h1>
            <form action="<?php echo base_url('/login')?>" method="POST">
                <div class="formulario">
                    <label for="usuario">Usuario</label>
                    <input type="text" name="usuario" required>
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" required>
                    <br>
                    <button>Entrar</button>
                </div>
            </form>
        </div>
    </body>
</html>