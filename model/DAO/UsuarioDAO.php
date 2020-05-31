<?php

require_once ("DataSource.php");
require_once (__DIR__."/../ENTITIES/Usuario.php");

/**
 * Description of UsuarioDAO
 *
 * @author Admin
 */
class UsuarioDAO {
    
    public function autenticarUsuario($email, $password){
        $data_source = new DataSource();
     
        $data_table= $data_source->ejecutarConsulta("SELECT * FROM usuario WHERE email = :email AND password = :password", 
                                                    array(':email'=>$email,':password'=>$password));
        $usuario=null;
        if(count($data_table)==1){
            foreach($data_table as $indice => $valor){
                $usuario = new Usuario(
                        $data_table[$indice]["id"],
                        $data_table[$indice]["nombre"],
                        $data_table[$indice]["email"],
                        $data_table[$indice]["password"],
                        );
            }
            return $usuario;
        }else{
            return null;
        }
    }
    
    public function buscarUsuarioPorId($id){
        $data_source = new DataSource();
        //password_hash("rasmuslerdorf", PASSWORD_DEFAULT)
        $data_table= $data_source->ejecutarConsulta("SELECT * FROM usuario WHERE id = :id", 
                                                    array(':id'=>$id));
        $usuario=null;
        if(count($data_table)==1){
            foreach($data_table as $indice => $valor){
                $usuario = new Usuario(
                        $data_table[$indice]["id"],
                        $data_table[$indice]["nombre"],
                        $data_table[$indice]["email"],
                        $data_table[$indice]["password"],
                        );
            }
            return $usuario;
        }else{
            return null;
        }
    }    
    
    public function leerUsuarios(){
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM usuario");
        $usuario=null;
        $usuarios=array();
        foreach($data_table as $indice=>$valor){
                $usuario = new Usuario(
                        $data_table[$indice]["id"],
                        $data_table[$indice]["nombre"],
                        $data_table[$indice]["email"],
                        $data_table[$indice]["password"],
                        );
                array_push($usuarios,$usuario);
        }
        return $usuarios;   
    }
    
    public function insertarUsuario(Usuario $usuario){
        $data_source= new DataSource();
        $sql = "INSERT INTO usuario VALUES (:id, :nombre, :email, :password)";
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':id'=>$usuario->getId(),
            ':nombre'=>$usuario->getNombre(),
            ':email'=>$usuario->getEmail(),
            ':password'=>$usuario->getPassword()
            )
        );
        
        return $resultado;
    }
    
    
    public function modificarUsuario(Usuario $usuario){
        $data_source= new DataSource();
        $sql = "UPDATE usuario SET nombre= :nombre, email= :email, password= :password WHERE id = :id";

        $resultado = $data_source->ejecutarActualizacion($sql, array(
                ':id'=>$usuario->getId(),
                ':nombre'=>$usuario->getNombre(),
                ':email'=>$usuario->getEmail(),
                ':password'=>$usuario->getPassword()
            )
        );
        
        return $resultado;
    }
    
    public function borrarUsuario($id){
        $data_source = new DataSource();
        $usuario=  buscarUsuarioPorId($id);
        $resultado= $data_source->ejecutarActualizacion("DELETE FROM usuario WHERE id = :id", array('id'=>$id));
        
        return $resultado;
    }
    
    
    
}
