<?php

//funcion que muestra multiples productos y cantidad de productos como parametros

function obtenerproductos($cantidad = 10 ){
    include 'conexion.php';

    try {

        $sql = " SELECT * FROM productos LIMIT $cantidad";
        $resultado = $bd->query( $sql );
    } catch(Exception $e) {
        echo $e->getMessage();
        return array ();
    }

    return $resultado;
}

function obtenerproducto($id_producto){
    include 'conexion.php';
    try {
        $sql = "SELECT nombre, imagen_completa, precio, descripcion, descripcion_corta FROM productos WHERE id= $id_producto";
        $resultado = $bd->query($sql);
    } catch(Exception $e){
        echo $e->getMessage();
        return array();
} return $resultado;
}


