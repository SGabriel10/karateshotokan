<?php
class ConnectDb{
    public function conection_db(){
        $link_db= new PDO("mysql:host=localhost;dbname=karatedb","root","");
        return $link_db;
        
    }
}
?>