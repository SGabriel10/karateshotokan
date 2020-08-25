<?php
    class Controller{
        public function mostrar(){
            include "views/template.php";
        }
        public function enlacesPaginas(){
            if(isset($_GET['action'])){
                 $enlaces= $_GET['action'];
            }
            else{
                $enlaces="index";
            }
            $respond = Modelo::enlacesModel($enlaces);
            include $respond;
        }
    }

?>