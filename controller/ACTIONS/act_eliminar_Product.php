<?php
        
        require_once (__DIR__."/../MDB/mdbProducto.php");
        require_once (__DIR__."/../../model/ENTITIES/Producto.php");
        $home = "..";
	
        $errMsg = 'OK';
        $id = $_GET['id'];
        //leerProducto();
        $producto_a_borrar=null;
        $producto_a_borrar=borrarProducto($id);
                header("Location: ../../view/adminproductos.php");
        
		

    
        
        
?>