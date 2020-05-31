<?php

class Producto{

    private $id;
    private $nombre_producto;
    private $description;
    private $precio;
    private $cant;
    private $imagen;
    private $id_categoria;
   
    public function __construct($id, $nombre_producto,$description,$precio,$cant,$imagen,$id_categoria){
        $this->id = $id;
    	$this->nombre_producto = $nombre_producto;
    	$this->description = $description;
        $this->precio = $precio;
        $this->cant = $cant;
        $this->imagen = $imagen;
        $this->id_categoria = $id_categoria;
        
    	
    }


    public function getId()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    public function getNombre_producto()
    {
        return $this->nombre_producto;
    }
    
    public function setNombre_producto($nombre_producto)
    {
        $this->nombre_producto = $nombre_producto;

        return $this;
    }




    public function getDescription()
    {
        return $this->description;
    }
    
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }



    public function getPrecio()
    {
        return $this->precio;
    }
    
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }





    public function getCant()
    {
        return $this->cant;
    }
    
    public function setCant($Cant)
    {
        $this->cant = $cant;

        return $this;
    }


    public function getImagen()
    {
        return $this->imagen;
    }
    
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }


    public function getId_categoria()
    {
        return $this->id_categoria;
    }
    
    public function setId_categoria($id_categoria)
    {
        $this->id_categoria = $id_categoria;

        return $this;
    }



    public function toArray() {
        $vars = get_object_vars ( $this );
        $array = array ();
        foreach ( $vars as $key => $value ) {
            $array [ltrim ( $key, '_' )] = $value;
        }
        return $array;
    }




}

?>