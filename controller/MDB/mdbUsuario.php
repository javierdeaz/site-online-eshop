<?php

    function buscarUsuarioPorId($id){
        require_once(__DIR__."/../../model/DAO/UsuarioDAO.php");
        $dao=new UsuarioDAO();
        $usuario = $dao->buscarUsuarioPorId( $id);
        return $usuario;
    }

    function leerUsuarios(){
        require_once(__DIR__."/../../model/DAO/UsuarioDAO.php");
        $dao=new UsuarioDAO();
        $usuario = $dao->leerUsuarios();
        return $usuario;
    }
    
    function autenticarUsuario($email, $password){
        require_once(__DIR__."/../../model/DAO/UsuarioDAO.php");
        $dao=new UsuarioDAO();
        $usuario = $dao->autenticarUsuario($email, $password);
        return $usuario;
    }
    
    function insertarUsuario($usuario){
        require_once(__DIR__."/../../model/DAO/UsuarioDAO.php");
        $dao=new UsuarioDAO();
        $resultado=$dao->insertarUsuario($usuario);
        return $resultado;
    }

    function modificarUsuario($usuario){
        require_once(__DIR__."/../../model/DAO/UsuarioDAO.php");
        $dao=new UsuarioDAO();
        $resultado=$dao->modificarUsuario($usuario);
        return $resultado;
    }

    function borrarUsuario($id){
        require_once(__DIR__."/../../model/DAO/UsuarioDAO.php");
        $dao=new UsuarioDAO();
        $resultado=$dao->borrarUsuario($id);
        return $resultado;
    }
    