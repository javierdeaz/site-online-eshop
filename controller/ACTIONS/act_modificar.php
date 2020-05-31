<?php
        
        require_once (__DIR__."/../MDB/mdbUsuario.php");
        require_once (__DIR__."/../../model/ENTITIES/Usuario.php");
        $home = "..";
	
		$errMsg = 'OK';
    
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
       
        
        
        echo $id;
        echo $nombre;
        echo $email;
        echo $password;
        $nuevousuario=NULL;
        $nuevousuario= new Usuario($id,$nombre,$email,$password);

        modificarUsuario($nuevousuario);
                    //modificarusuarioporparametros($id,$username,$email,$name,$password);
                    //echo $nuevousuario->getID();
                    //echo $nuevousuario->getUsername();
                   header("Location: ../../view/adminusuarios.php");

		

    
        
        
?>