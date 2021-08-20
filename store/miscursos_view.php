
<div class="container"><br><br>
<br>
<section>
    <div class="row">
    <?php

    if ( is_array($arrProducto) && ( count($arrProducto)>0 ) ){
            reset($arrProducto);
            foreach( $arrProducto as $rTMP['key'] => $rTMP['value'] ){
    ?>

<div class="gallery_product col-sm-12 col-md-4 col-lg-3 filter ">
        <div class="card">
            <img class="card-img-top" src="<?php echo  $rTMP["value"]['img']; ?>" alt="" title="producto" height="100px">
            <div class="card-body" >
                <b class="card-title"><?php echo  $rTMP["value"]['nombre']; ?></b>
                  <div class="progress">    
                      <div class="progress-bar progress-bar-striped progress-bar-animated bg-<?php echo  $rTMP["value"]['c_dificultad']; ?>" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo  $rTMP["value"]['n_dificultad']; ?>%"><?php echo  $rTMP["value"]['dificultad']; ?></div>
                  </div>
                    <a>ARTISTA:<span>Nombre </span></a>
                        <div class="center">    
                            <a class="btn btn-danger btn-sm boton" name="viemore" value="viemore" href="curso.php?id=<?php echo  $rTMP["value"]['id']; ?>"><i class="fas fa-eye"></i></a>
                        </div>
            </div>
        </div>
    </div>
    <?PHP
            }
        }
    ?>  
    </div>
</section>





<style>
.center {
  text-align: center;
}
</style>

