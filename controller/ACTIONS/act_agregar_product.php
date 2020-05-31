<?php
        
        require_once (__DIR__."/../MDB/mdbProducto.php");
        require_once (__DIR__."/../../model/ENTITIES/Producto.php");
        $home = "..";
	
		$errMsg = 'OK';

        
        $nombre_producto = $_POST['nombre_producto'];
        $description = $_POST['description'];
        $precio = $_POST['precio'];
        $cant = $_POST['cant'];
        $imagen = $_POST['imagen'];
        $id_categoria = $_POST['id_categoria'];
        $id=null;
        
        echo $nombre_producto;
        echo $description;
        echo $precio;
        echo $cant;
        echo $imagen;
        echo $id_categoria;

        //leerProducto();
        $nuevoproducto=NULL;
        $nuevoproducto= new Producto($id,$nombre_producto,$description,$precio,$cant,$imagen,$id_categoria);
        insertarProducto($nuevoproducto);

        header("Location: ../../view/adminproductos.php"); // ENVIAR AL HOMEPAGES DEL USUARIO
                            
                    
                    
    
        
        
?>