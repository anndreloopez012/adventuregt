 <?php

 require_once 'config.php';

    $arrEquipo = array();
    $var_consulta= "select * from equipo";

    //$var_resultado = $conexion->query($var_consulta);
    $qTMP = mysqli_query($link, $var_consulta);
    while ( $rTMP = mysqli_fetch_assoc($qTMP) ){
        $arrEquipo[$rTMP["id"]]["id"] = $rTMP["id"];
        $arrEquipo[$rTMP["id"]]["nombre"] = $rTMP["nombre"];
        $arrEquipo[$rTMP["id"]]["red_1"] = $rTMP["red_1"];
        $arrEquipo[$rTMP["id"]]["red_2"] = $rTMP["red_2"];
        $arrEquipo[$rTMP["id"]]["red_3"] = $rTMP["red_3"];
        $arrEquipo[$rTMP["id"]]["puesto"] = $rTMP["puesto"];
        $arrEquipo[$rTMP["id"]]["img"] = $rTMP["img"];
    }
    mysqli_free_result($qTMP);

    //print "<pre>";
    //print_r($arrEquipo);
    //print "</pre>";

//INSERT------------------------------------------------ CORREO 
 if(isset($_POST["correos"])){
    require_once 'config.php';

        $sql = "INSERT INTO CORREOS (nombre, correo)
        VALUES ('".$_POST["nombre"]."','".$_POST["correo"]."')";

            if (mysqli_query($link, $sql)) {
                echo "";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($link);
            }

            mysqli_close($link);
    }
//FIN INSERT CORREO

include "menu.php";
?>
    <!--/#page-breadcrumb-->

    <section id="about-company" class="padding-top wow fadeInUp" data-wow-duration="400ms" data-wow-delay="400ms">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="images/ico/elrayado.jpg" class="margin-bottom" alt="">
                    <h1 class="margin-bottom">EL RAYADO</h1>
                    <p>Si eres un fanático del arte debes seguirnos en nuestras redes sociales. Te mostraremos las nuevas tendencias, que surgen día a día en el arte urbano.</p>
                    
                </div>
            </div>
        </div>
    </section><br><br>
    <!--/#action-->

    <section id="company-information" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="about-us">
                    <div class="col-sm-7 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="images/aboutus/about.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="col-sm-7">
                                <h3 class="top-zero">MISION</h3>
                                <p>Somos un medio encargado de fomentar y compartir el arte en Guatemala. <br> 
                                <h3 class="top-zero">VISION</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. <br> 
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <h3 class="top-zero">QUIENES SOMOS</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. <br> 
                        <h3 class="top-zero">A DONDE VAMOS</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. <br>     
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#company-information-->

    <section id="team">
        <div class="container">
            <div class="row">
                <h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">EQUIPO</h1>
                <div id="team-carousel" class="carousel slide wow fadeIn" data-ride="carousel" data-wow-duration="400ms" data-wow-delay="400ms">
                    <!-- Indicators -->
                    
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <?php
                                if ( is_array($arrEquipo) && ( count($arrEquipo)>0 ) ){
                                     reset($arrEquipo);
                                     while ( $rTMP = each($arrEquipo) ){
                                 ?>
                        <div class="item active">
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <a href="#"><img src="<?php echo  $rTMP["value"]['img']; ?>" class="img-responsive" alt=""></a>
                                        </div>
                                        <div class="social-profile">
                                            <ul class="nav nav-pills">
                                                <li><a href="<?php echo  $rTMP["value"]['red_1']; ?>"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="<?php echo  $rTMP["value"]['red_2']; ?>"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="<?php echo  $rTMP["value"]['red_3']; ?>"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <h2><?php echo  $rTMP["value"]['nombre']; ?></h2>
                                        <p><?php echo  $rTMP["value"]['puesto']; ?></p>
                                    </div>
                                </div>
                            </div> 
                        </div>
                         <?PHP
                                 }
                             }
                          ?> 
                    </div>

                    <!-- Controls -->
                    
                </div>
            </div>
        </div>
    </section>
     <section id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="row">
                        <div class="col-sm-6">
                             <h2><i class="fa fa-envelope-o"></i> SUBSCRIBETE</h2>
                            <p>Si deseas estar al tanto de nuestras publicaciones y noticias te invitamos a que te suscribas.</p>
                        </div>
                        <div class="col-sm-6 newsletter">
                            <form id="newsletter" action="" method="post">
                                <input class="form-control" type="nombre" name="nombre"  value="" placeholder="NOMBRE">
                                <input class="form-control" type="correo" name="correo"  value="" placeholder="ESCRIBE TU CORREO ELECTRONICO"><br />
                                <input type="submit" value=" ENVIAR " class="btn btn-xs btn-warning" name="correos"/><br />
                            </form>
                            <p>No se preocupe, no usaremos su correo electrónico para spam</p>
                        </div>    
                    </div>
                </div>     
            </div>
        </div> 
    </section>
    

   <?php include "footer.php"; ?>  
    