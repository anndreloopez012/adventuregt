
<br><br>
<div class="container"><br>
<?php if($mensaje!=""){ ?>
    <div class="alert alert-success" role="alert">
        <?PHP echo $mensaje; ?>
        <a href="mostrar_carrito.php" class="badge badge-success ">VER CARRITO</a>
    </div>
<?php } ?>



<div class="container"><br>
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
</section>







<span class="ir-arriba icon-arrow-up2"></span>

<style>
.trans{
  display: flex;
  justify-content: center;
}
.contenido{
    font-size: 12px;
}
</style>