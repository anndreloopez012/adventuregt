<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>EL RAYADO</title>
    
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/css/font-awesome.min.css" rel="stylesheet"> 
    <link rel="stylesheet" href="admin/js/jquery-ui-1.12.1/jquery-ui.min.css">
    <script type="text/javascript" src="admin/js/jquery.js"></script>
    <script type="text/javascript" src="admin/js/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="admin/js/bootstrap.min.js"></script>

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style3.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="sidebar-header">
                <h3>ADMIN</h3>
            </div>

            <ul class="list-unstyled components">
                <p><a href="index.php">EL RAYADO</a> </p>
                <li>
                    <a href="#pagemenu" data-toggle="collapse" aria-expanded="false">CONTENIDO</a>
                    <ul class="collapse list-unstyled" id="pagemenu">
                        <li>
                            <a href="anuncio.php">Anuncio</a>
                        </li>
                        <li>
                            <a href="instagram.php">Instagram</a>
                        </li>
                        <li>
                            <a href="equipo.php">Equipo</a>
                        </li>
                        <li>
                            <a href="admin_blog.php">Blog</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">TIENDA</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="admin_aprob_vent.php">Aprobar Ventas</a>
                        </li>
                        <li>
                            <a href="admin_detalle_venta.php">Detalle Ventas</a>
                        </li>
                        <li>
                            <a href="addproducto.php">Cursos</a>
                        </li>
                        <li>
                            <a href="addmenu.php">Menu Categorias</a>
                        </li>
                    </ul>
                <li>
                    <a href="logout.php">SALIR</a>

                </li>
            </ul>
        </nav>


 <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>MENU</span>
                    </button>
                </div>
            </nav>
