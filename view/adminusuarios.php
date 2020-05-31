
<?php 
        require_once (__DIR__."/../controller/ACTIONS/act_traveluser.php");
        
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

<!-- 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
-->


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
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fas fa-expand-arrows-alt"></i> Usuarios <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="adminusuarios.php"><i class="fa fa-fw fa-table"></i> Usuarios</a>
                            </li>
                            <li>
                                <a href="agregarusuario.php"><i class="fa fa-fw fa-edit"></i> Agregar Usuarios</a>
                            </li>
                        </ul>
                    </li>


                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fas fa-expand-arrows-alt"></i> Productos <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
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
                    <h2>Tabla De Usuarios </h2>
                    <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>EMAIL</th>
                                <th>PASSWORD</th>   
                                <th>ACCIONES</th>             
                            </tr>           
                        </thead>
                        <tbody>
                             <?php 
                                 for($j=0;$j<sizeof($usuarios_activos);$j++){
                                    $usuario=$usuarios_activos[$j];
                            ?>
                            <tr>
                                <td> <?php echo $usuario->getId(); ?> </td>
                                <td> <?php echo $usuario->getNombre(); ?> </td>
                                <td> <?php echo $usuario->getEmail(); ?> </td>
                                <td> <?php echo $usuario->getPassword(); ?> </td>
                                <td> 
                                <a href="modificarusuario.php?id=<?php echo  $usuario->getId();?>
                                                            &nombre=<?php echo  $usuario->getNombre();?>
                                                            &email=<?php echo  $usuario->getEmail();?>
                                                            &password=<?php echo  $usuario->getPassword();?>
                                                            
                                                            " class="btn btn-secondary">
                                <i class="fas fa-marker"></i>
                                </a> 
                                <a href="../controller/ACTIONS/act_eliminar.php?id=<?php echo  $usuario->getId();?>" class="btn btn-danger">
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
