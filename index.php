<?php
  /*TODO: Llamando Cadena de Conexion */
  require_once("config/conexion.php");

  if(isset($_POST["enviar"]) and $_POST["enviar"]=="si"){
    require_once("models/Usuario.php");
    /*TODO: Inicializando Clase */
    $usuario = new Usuario();
    $usuario->login();
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="public/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="public/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Inicio Sesión Asociados - Acipet Unal</title>
  </head>
  <form action="" method="post">

  <body>

      <div class="login-container">
          <div class="login-info-container">
             <!-- Capturando mensaje de error -->
          <?php
            if (isset($_GET["m"])){
              switch($_GET["m"]){
                case "1";
                  ?>
                    <div class="alert alert-danger" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    <div class="d-flex align-items-center justify-content-start">
                        <i class="icon ion-ios-close alert-icon tx-24"></i>
                        <span><strong>¡Error!</strong> Contraseña o correo incorrecto</span>
                      </div><!-- d-flex -->
                    </div>
                  <?php
                break;

                case "2";
                  ?>
                    <div class="alert alert-danger" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <div class="d-flex align-items-center justify-content-start">
                        <i class="icon ion-ios-close alert-icon tx-24"></i>
                        <span><strong>¡Error!</strong> Ingrese su usuario y contraseña</span>
                      </div><!-- d-flex -->
                    </div>
                  <?php
                break;
              }
            }
          ?>
            <h1 class="title">¡Bienvenido!</h1>
            <p>Panel de administración Asociados Acipet Unal</p>
            <forms class="inputs-container">
                <input class="input" type="text" id="usu_correo" name="usu_correo" class="form-control" placeholder="Correo electronico">
                <input class="input" type="password" id="usu_pass" name="usu_pass" class="form-control" autocomplete="off" placeholder="Contraseña">
                <p>Administración Plataforma Generación certificados <a href="https://certificados.acipetunal.com" target="_blank"><span class="span"> Aquí</span></a></p>
                <input type="hidden" name="enviar" class="form-control" value="si">
                <button  type="submit" class="btn">Iniciar Sesión</button>
            </forms>
          </div>
            <img class="image-container" src="public/img/Logo Acipet Unal.png"  alt="Certificados Acipet Unal">
        </div>

    <script src="public/lib/jquery/jquery.js"></script>
    <script src="public/lib/popper.js/popper.js"></script>
    <script src="public/lib/bootstrap/bootstrap.js"></script>

  </body>
  <div class="footer">
  <footer><a class="creator" target="_blank" href="https://juanjosedeleon.com">By Juan José De León</a></footer>
  </div>
</html>