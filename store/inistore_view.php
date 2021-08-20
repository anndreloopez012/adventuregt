
<div class="container">
<?php if($mensaje!=""){ ?>
    <div class="alert alert-success" role="alert">
        <?PHP echo $mensaje; ?>
        <a href="mostrar_carrito.php" class="badge badge-success ">VER CARRITO</a>
    </div>
<?php } ?>
</div>
<section>
    <div class=" banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    
<?php
if ( is_array($arrBannerc) && ( count($arrBannerc)>0 ) ){
    reset($arrBannerc);
    foreach( $arrBannerc as $rTMP['key'] => $rTMP['value'] ){
?> 
    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo  $rTMP["value"]['id']; ?>"></li>
<?PHP
        }
    }
?>   
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://i.ibb.co/MBhPz3b/images.jpg" alt="First slide">
    </div>
<?php
if ( is_array($arrBanner) && ( count($arrBanner)>0 ) ){
        reset($arrBanner);
        foreach( $arrBanner as $rTMP['key'] => $rTMP['value'] ){
?> 
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo  $rTMP["value"]['img']; ?>" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h4><?php echo  $rTMP["value"]['titulo']; ?> </h5>
        <p><?php echo  $rTMP["value"]['descrip']; ?></p>
      </div>
    </div>
<?PHP
        }
    }
?>


 
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
</section><br>
<div class="container">
<section>
    <div class="row">
    <?php

    if ( is_array($arrProducto) && ( count($arrProducto)>0 ) ){
            reset($arrProducto);
            foreach( $arrProducto as $rTMP['key'] => $rTMP['value'] ){
    ?>

<div class="col-md-4 col-sm-6 <?php echo  $rTMP["value"]['categori']; ?>">
             <div class="card-container manual-flip">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="<?php echo  $rTMP["value"]['img']; ?>"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name"><?php echo  $rTMP["value"]['nombre']; ?></h3>
                                <div class="progress">    
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-<?php echo  $rTMP["value"]['c_dificultad']; ?>" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo  $rTMP["value"]['n_dificultad']; ?>%"><?php echo  $rTMP["value"]['dificultad']; ?></div>
                                </div><br>
                                <div class="contenido">
                                    <p class="text-center">ARTISTA/TUTOR:<?php echo  $rTMP["value"]['artista']; ?> <br>
                                    <?php echo  $rTMP["value"]['conceptos']; ?></p>
                                    <form action="" method="post">
                                            <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt( $rTMP["value"]['id'],COD,KEY);  ?>">
                                            <input type="hidden" name="nombre" id="nombre" value="<?php echo  openssl_encrypt( $rTMP["value"]['nombre'],COD,KEY); ?>">
                                            <input type="hidden" name="precio" id="precio" value="<?php echo  openssl_encrypt( $rTMP["value"]['precio'],COD,KEY); ?>">
                                            <input type="hidden" name="tipo" id="tipo" value="<?php echo  openssl_encrypt( $rTMP["value"]['tipo'],COD,KEY); ?>">
                                            <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY); ?>">
                                            <div class="trans"> 
                                                <button class="btn btn-dark btn-responsive btninter centrado" name="btnAccion" value="agregar" type="submit"><i class="fas fa-shipping-fast"></i>Agregar</button>
                                            </div> <br> 
                                            <p class="text-center"><strike>P/U Q<?php echo  $rTMP["value"]['precio']; ?></strike> P/Desc Q<?php echo  $rTMP["value"]['precio']; ?></p>
                                    </form>
                                </div>
                            </div>
                            <div class="footer">
                                <button class="btn btn-simple" onclick="rotateCard(this)">
                                <i class="fas fa-eye"></i> Ver Descripcion
                                </button>
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                        <div class="header">
                            <h5 class="motto">DESCRIPCION CORTA</h5>
                        </div>
                        <div class="content">
                            <div class="main contenido">
                                <p class="text-center"><?php echo  $rTMP["value"]['descrip']; ?></p>
                            </div>
                        </div>
                        <div class="social-links text-center">
                                <a class="btn btn-danger btn-sm boton" name="viemore" value="viemore" href="curso_prev.php?id=<?php echo  $rTMP["value"]['id']; ?>"><i class="fas fa-eye"></i> VER MAS.</a>
                            </div>
                        <div class="footer">
                            <button class="btn btn-simple" rel="tooltip"  onclick="rotateCard(this)">
                                <i class="fa fa-reply"></i> Back
                            </button>
                            
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
        </div> <!-- end col sm 3 -->
<!--         <div class="col-sm-1"></div> -->
    <?PHP
            }
        }
    ?>  
    </div>

<style>

    b{
      font-size:0.8em;
      }
    h5{
      color:white;
      }


    center{
        text-align: center;
        width:100%;
    }

    center{
        text-align: center;
    }


    @media screen and (max-width: 400px) {
          
          button.menu {
              width:320px;
          }
          
    }
</style>
<style>
.trans{
  display: flex;
  justify-content: center;
}
.contenido{
    font-size: 12px;
}
</style>