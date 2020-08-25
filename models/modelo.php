<?php
    class Modelo{
        public function enlacesModel($enlaces){
            if($enlaces=="nosotros"||
               $enlaces=="servicios"||
               $enlaces=="contactenos"||
               $enlaces=="dojos-items"){
               $module = "views/modules/".$enlaces.".php";
               }else if($enlaces=="index"){
                $module = "views/modules/inicio.php"; 
               }else{
                $module = "views/modules/inicio.php";     
               }
            return $module;
        }
    }
?>