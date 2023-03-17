<?php
    require_once("../config/conexion.php");
    require_once("../models/Usuario.php");
    $usuario = new Usuario();

    switch($_GET["op"]){
            case "mostrar":
               $datos = $usuario->get_usuario_x_id($_POST["usu_id"]);
               if(is_array($datos)==true and count($datos)<>0){
                    foreach($datos as $row){
                      $output["usu_id"] = $row["usu_id"];
                      $output["usu_nom"] = $row["usu_nom"];
                      $output["usu_apep"] = $row["usu_apep"];
                      $output["usu_apem"] = $row["usu_apem"];
                      $output["usu_correo"] = $row["usu_correo"];
                      $output["usu_sex"] = $row["usu_sex"];
                      $output["usu_pass"] = $row["usu_pass"];
                      $output["usu_telf"] = $row["usu_telf"];
                }
                echo json_encode($output);
            }
            break;

        }

?>