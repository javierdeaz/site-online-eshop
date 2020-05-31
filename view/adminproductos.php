<?php 
        require_once (__DIR__."/../controller/ACTIONS/act_travelproduc.php");
        
        session_start();
       
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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


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
                                <a href="adminproductos.php"><i class="fa fa-fw fa-table"></i> Productos</a>
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


                <div class="col-md-8">
                    <h2>Tabla De Productos </h2>
                    <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE PRODUCTO</th>
                                <th>DESCRIPCION</th>
                                <th>PRECIO</th>   
                                <th>CANTIDAD</th>  
                                <th>IMAGEN</th> 
                                <th>ID CATEGORIA</th> 
                                <th>ACCIONES</th>             
                            </tr>           
                        </thead>
                        <tbody>
                             <?php 
                                 for($j=0;$j<sizeof($productos_activos);$j++){
                                    $producto=$productos_activos[$j];
                            ?>
                            <tr>
                                <td> <?php echo $producto->getId(); ?> </td>
                                <td> <?php echo $producto->getNombre_producto(); ?> </td>
                                <td> <?php echo $producto->getDescription(); ?> </td>
                                <td> <?php echo $producto->getPrecio(); ?> </td>
                                <td> <?php echo $producto->getCant(); ?> </td>
                                <td> <?php echo $producto->getImagen(); ?> </td>
                                <td> <?php echo $producto->getId_categoria(); ?> </td>
                                <td> 
                                <a href="modificarproducto.php?id=<?php echo  $producto->getId()?>
                                                            &nombre_producto=<?php echo  $producto->getNombre_producto();?>
                                                            &description=<?php echo  $producto->getDescription();?>
                                                            &precio=<?php echo  $producto->getPrecio();?>
                                                            &cant=<?php echo  $producto->getCant();?>
                                                            &imagen=<?php echo  $producto->getImagen();?>
                                                            &id_categoria=<?php echo  $producto->getId_categoria();?>
                                                            " class="btn btn-secondary">
                                <i class="fas fa-marker"></i>
                                </a> 
                                <a href="../controller/ACTIONS/act_eliminar_Product.php?id=<?php echo  $producto->getId();?>" class="btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                                </td>
                            </tr>
                            <?php } ?>
                            
                        </tbody>        
                    </table>    
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
