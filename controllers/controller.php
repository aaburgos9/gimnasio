<?php


class MvcController{

 #LLAMADA A LA PLANTILLA

    public function pagina(){
        include "views/template.php";
    }

    #ENLACES
    public function enlacesPaginasController(){

        if(isset($_GET['action'])){

            $enlacesController = $_GET['action'];
        }
        else{
            $enlacesController = "index";
        }

        $respuesta = Paginas::enlacesPaginasModel($enlacesController);

        include $respuesta;
    }

     #Registrar Usuarios

    public function RegistroUsuarioController(){
        if (isset($_POST["usuarioRegistro"])) {

            $datosController=array("usuario"=>$_POST["usuarioRegistro"],
                                    "password"=>$_POST["passwordRegistro"],
                                    "email"=>$_POST["emailRegistro"],
                                    "rol"=>$_POST["rolRegistro"]);

            $respuesta=Datos::registroUsuarioModel($datosController,"usuarios");
            if ($respuesta=="success") {
              header("location:index.php?action=ok");
            }

        else{
              header("location:index.php");
        }
    }
}
      #ingrso del login
      public function ingresarUsuariosController(){
          if (isset($_POST["usuarioIngreso"])) {

              $datosController=array("usuario"=>$_POST["usuarioIngreso"],
                                      "password"=>$_POST["passwordIngreso"]);
              $respuesta=Datos::ingresarUsuariosModel($datosController,"usuarios");
              if ($respuesta["usuario"]==$_POST["usuarioIngreso"] && $respuesta["password"]==$_POST["passwordIngreso"]){

                  header("location:index.php?action=usuarios");
              }
              else{
                  header("location:index.php?action=fallo");
              }

            }

          }


        }
?>
