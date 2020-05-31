<?php

require_once ("DataSource.php");
require_once (__DIR__."/../ENTITIES/Producto.php");

/**
 * Description of ProductoDAO
 *
 * @author Admin
 */
class ProductoDAO {
    

    
    public function buscarProductoPorId($id){
        $data_source = new DataSource();
        //password_hash("rasmuslerdorf", PASSWORD_DEFAULT)
        $data_table= $data_source->ejecutarConsulta("SELECT * FROM producto WHERE id = :id", 
                                                    array(':id'=>$id));
        $producto=null;
        if(count($data_table)==1){
            foreach($data_table as $indice => $valor){
                $producto = new Producto(
                        $data_table[$indice]["id"],
                        $data_table[$indice]["nombre_producto"],
                        $data_table[$indice]["description"],
                        $data_table[$indice]["precio"],
                        $data_table[$indice]["cant"],
                        $data_table[$indice]["imagen"],
                        $data_table[$indice]["id_categoria"],
                        );
            }
            return $producto;
        }else{
            return null;
        }
    }    
    
    public function leerProducto(){
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM producto");
        $producto=null;
        $productos=array();
        foreach($data_table as $indice=>$valor){
                $producto = new Producto(
                        $data_table[$indice]["id"],
                        $data_table[$indice]["nombre_producto"],
                        $data_table[$indice]["description"],
                        $data_table[$indice]["precio"],
                        $data_table[$indice]["cant"],
                        $data_table[$indice]["imagen"],
                        $data_table[$indice]["id_categoria"],
                        );
                array_push($productos,$producto);
        }
        return $productos;   
    }
    
    public function insertarProducto(Producto $producto){
        $data_source= new DataSource();
        $sql = "INSERT INTO producto VALUES (:id, :nombre_producto, :description, :precio, :cant, :imagen, :id_categoria)";
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':id'=>$producto->getId(),
            ':nombre_producto'=>$producto->getNombre_producto(),
            ':description'=>$producto->getDescription(),
            ':precio'=>$producto->getPrecio(),
            ':cant'=>$producto->getCant(),
            ':imagen'=>$producto->getImagen(),
            ':id_categoria'=>$producto->getId_categoria()
            )
        );
        
        return $resultado;
    }
    
    
    public function modificarProducto(Producto $producto){
        $data_source= new DataSource();
        $sql = "UPDATE producto SET nombre_producto= :nombre_producto, description= :description, precio= :precio, cant= :cant, imagen= :imagen, id_categoria= :id_categoria WHERE id = :id";

        $resultado = $data_source->ejecutarActualizacion($sql, array(
                ':id'=>$producto->getId(),
                ':nombre_producto'=>$producto->getNombre_producto(),
                ':description'=>$producto->getDescription(),
                ':precio'=>$producto->getPrecio(),
                ':cant'=>$producto->getCant(),
                ':imagen'=>$producto->getImagen(),
                ':id_categoria'=>$producto->getId_categoria()
            )
        );
        
        return $resultado;
    }
    
    public function borrarProducto($id){
        $data_source = new DataSource();
        $producto=  buscarProductoPorId($id);
        $resultado= $data_source->ejecutarActualizacion("DELETE FROM producto WHERE id = :id", array('id'=>$id));
        
        return $resultado;
    }
    
    
    
}