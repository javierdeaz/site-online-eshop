<?php 
       require_once (__DIR__."/../controller/ACTIONS/act_travelproduc.php");
       //require("adminproductos.php");
      include("adminproductos.php");
      $id = $_GET['id'];
      $nombre_producto = $_GET['nombre_producto'];
      $description = $_GET['description'];
      $precio = $_GET['precio'];
      $cant = $_GET['cant'];
      $imagen = $_GET['imagen'];
      $id_categoria = $_GET['id_categoria'];
     
    
     /* $i=1;
      $producto=$productos_activos[$i];
      for($j=0;$j<sizeof($productos_activos);$j++){
        if($id==$producto->getId()){
            $producto=$productos_activos[$j];
        }
      }
     
       
       $nombre_producto = $producto->getNombre_producto();
       $description = $producto->getDescription();
       $precio = $producto->getPrecio();
       $cant = $producto->getCant();
       */
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="adminusuarios.php">Seccion Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">                        
                        <li>
                            <a href="../controller/ACTIONS/act_logout.php"><i class="fa fa-fw fa-power-off"></i> Salir</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                    
                    <li>
                        <a href="adminusuarios.php"><i class="fa fa-fw fa-table"></i> Usuarios</a>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Productos <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="adminprodutos.php"><i class="fa fa-fw fa-table"></i> Productos</a>
                            </li>
                            <li>
                                <a href="agregarproductos.php"><i class="fa fa-fw fa-edit"></i> Agregar Producto</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">


                

                <div class="container p-4">
                    <div class="row">
                        <div class="col-md-4 mx-auto">
                          <div class="card card-body">
                          
                          <form action="../controller/ACTIONS/act_modificar_product.php?id=<?php echo  $id = $_GET['id'];?>" method="POST">
                          
                          <div class="form-group">
                          <input name="nombre_producto" type="text" class="form-control" value="<?php echo $nombre_producto; ?>" placeholder="Update Title">
                          </div>
              
                          <div class="form-group">
                          <input name="description" type="text" class="form-control" value="<?php echo $description; ?>" placeholder="Update Title">
                          </div>
              
                          <div class="form-group">
                          <input name="precio" type="text" class="form-control" value="<?php echo $precio; ?>" placeholder="Update Title">
                          </div>
              
                          <div class="form-group">
                          <input name="cant" type="text" class="form-control" value="<?php echo $cant; ?>" placeholder="Update Title">
                          </div>

                          <div class="form-group">
                          <input name="imagen" type="text" class="form-control" value="<?php echo $imagen; ?>" placeholder="Update Title">
                          </div>

                          <div class="form-group">
                          <input name="id_categoria" type="text" class="form-control" value="<?php echo $id_categoria; ?>" placeholder="Update Title">
                          </div>
              
                          <div class="d-flex justify-content-between">
                          <button class="btn-success" name="EDITAR"> EDITAR </button>
                          <a href="adminproductos.php"> Cancelar</a>
                          </div>
                          
                      </form>
              
                          </div>
                        </div>
                    </div>
                  </div>


               

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
