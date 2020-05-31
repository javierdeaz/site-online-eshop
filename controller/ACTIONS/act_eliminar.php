<?php
        
        require_once (__DIR__."/../MDB/mdbUsuario.php");
        $home = "..";
	
        $errMsg = 'OK';
        $id = $_GET['id'];
        leerUsuarios();
        $usuario_a_borrar=null;
        $usuario_a_borrar=borrarUsuario($id);
                header("Location: ../../view/adminusuarios.php");
        
		

    
        
        
?>