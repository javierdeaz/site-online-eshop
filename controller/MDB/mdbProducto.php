<?php

    function buscarProductoPorId($id){
        require_once(__DIR__."/../../model/DAO/ProductoDAO.php");
        $dao=new ProductoDAO();
        $producto = $dao->buscarProductoPorId( $id);
        return $producto;
    }
    
    function leerProducto(){
        require_once(__DIR__."/../../model/DAO/ProductoDAO.php");
        $dao=new ProductoDAO();
        $producto = $dao->leerProducto();
        return $producto;
    }
   
    
    function insertarProducto($producto){
        require_once(__DIR__."/../../model/DAO/ProductoDAO.php");
        $dao=new ProductoDAO();
        $resultado=$dao->insertarProducto($producto);
        return $resultado;
    }

    function modificarProducto($producto){
        require_once(__DIR__."/../../model/DAO/ProductoDAO.php");
        $dao=new ProductoDAO();
        $resultado=$dao->modificarProducto($producto);
        return $resultado;
    }

    function borrarProducto($id){
        require_once(__DIR__."/../../model/DAO/ProductoDAO.php");
        $dao=new ProductoDAO();
        $resultado=$dao->borrarProducto($id);
        return $resultado;
    }
    
    ?>