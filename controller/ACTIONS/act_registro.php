<?php
        
        require_once (__DIR__."/../MDB/mdbUsuario.php");
        $home = "..";
	
		$errMsg = 'OK';

        
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id=null;
        
        
        leerUsuarios();
        $nuevousuario=NULL;
        $nuevousuario= new Usuario($id,$nombre,$email,$password);
        insertarUsuario($nuevousuario);

        header("Location: ../../view/login.php"); // ENVIAR AL HOMEPAGES DEL USUARIO
                            
                    
                    
    
        
        
?>