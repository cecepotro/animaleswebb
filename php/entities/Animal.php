<?php

class Animal{
    public $id;
    public $apodo;
    public $especie;
    public $color;
}

function getAll(){
    $listaAnimales = [];
    $path = $_SERVER['DOCUMENT_ROOT'];
    include($path."/animaleswebb/php/connection/db.php");
    $sql = "SELECT id, apodo, especie, color FROM animal";
    $result = $connection->query($sql);
    if($result->num_rows >0){
        while($rows = $result->fetch_assoc()){
            $object = new Animal();
            $object->id = $rows["id"];
            $object->apodo = $rows["apodo"];
            $object->especie = $rows["especie"];
            $object->color = $rows["color"];
            $listaAnimales[] = $object;
        }
    }
    return $listaAnimales;
}
?>