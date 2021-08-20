<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-576063ba40885df7"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <link href="store/css/pe-icon-7-stroke.css" rel="stylesheet" />

<!--     <link href='css/ct-navbar.css' rel='stylesheet' /> -->
    <link href='store/css/rotating-card.css' rel='stylesheet' />
    </head>
    <body oncontextmenu = "confirmar(); return false;" onselectstart = "confirmar(); return false;" onkeydown="confirmar(); return false;" ondragstart = "confirmar(); return false;"> 
<?php
//https://www.addthis.com/dashboard#tool-config/pub/ra-576063ba40885df7/widgetId/l2n9/socialnetworks
require_once 'config.php';
    $arrMenuHeader = array();
    $var_consulta= "SELECT * FROM menu ";

    //$var_resultado = $conexion->query($var_consulta);
    $qTMP = mysqli_query($link, $var_consulta);
    while ( $rTMP = mysqli_fetch_assoc($qTMP) ){
        $arrMenuHeader[$rTMP["id"]]["id"] = $rTMP["id"];
        $arrMenuHeader[$rTMP["id"]]["categoria"] = $rTMP["categoria"];
    }
    mysqli_free_result($qTMP);
?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="index.php"><img src="images/ico/logo.png" alt="Arte Urbano"></a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item  center">
                    <a class="nav-link" id="menu" href="index.php"><i class="fas fa-angle-double-left"></i>El Rayado </a>
                </li>
                <li class="nav-item  center">
                    <a class="nav-link" id="menu" href="inistore.php"><i class="fas fa-home"></i>Inicio</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle " href="store.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-th-list"></i>Categorias
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                  <?php
                  if ( is_array($arrMenuHeader) && ( count($arrMenuHeader)>0 ) ){
                          reset($arrMenuHeader);
                          foreach( $arrMenuHeader as $rTMP['key'] => $rTMP['value'] ){
                  ?>
                    <a class="dropdown-item" href="store.php?categoria=<?php echo  $rTMP["value"]['categoria']; ?>"><?php echo  $rTMP["value"]['categoria']; ?></a>
                  <?PHP
                          }
                      }
                  ?>  
                  </div>
                </li>
                <li class="nav-item  center">
                    <a class="nav-link" id="menu" href="artist.php"><i class="fab fa-artstation"></i>Artistas</a>
                </li>
                <li class="nav-item  center">
                    <a class="nav-link" id="menu" href="compras.php"><i class="fas fa-shopping-basket"></i>Compras</a>
                </li>
                <li class="nav-item  center">
                    <a class="nav-link" id="menu" href="miscursos.php"><i class="fas fa-bezier-curve"></i>Mis Cursos </a>
                </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item  navbar-right">
                            <a class="nav-link" id="menu" href="mostrar_carrito.php"><i class="fas fa-cart-plus"></i>(<?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']); ?>) </a>
                        </li>
                        <li class="nav-item  navbar-right">
                            <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>Salir</a>
                        </li>
                      
                        <li class="nav-item  navbar-right">
                            <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i>Ingresar</a>
                        </li>
                        <li class="nav-item  navbar-right">
                            <a class="nav-link" href="registration.php"><i class="fas fa-registered"></i>Registrate</a>
                        </li>
            </ul>
        </div>
    </nav><br><br>
    

    <style>
    
    
    </style>
    
<div class="addthis_horizontal_follow_toolbox"></div>

            
    

    
