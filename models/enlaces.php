<?php
    class Paginas{

        public function enlacesPaginasModel ($enlaces){

            if($enlaces == "login" ||
                $enlaces == "usuarios" ||
                $enlaces == "editar" ||
                $enlaces == "salir"){

                    $module = "views/modulos/".$enlaces.".php";
            }

            else if($enlaces == "index"){

                $module = "views/modulos/registro.php";
            }

            else if($enlaces == "ok"){

                $module = "views/modulos/registro.php";
            }

            else if($enlaces == "fallo"){

                $module = "views/modulos/login.php";
            }

            else if($enlaces == "cambio"){

                $module = "views/modulos/salas.php";
            }

            else{

                $module = "views/modulos/registro.php";
            }

            return $module;

        }


    }

?>
