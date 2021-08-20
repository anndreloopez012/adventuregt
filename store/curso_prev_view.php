<br><br><br>
<div class="container">
  <?php

  if ( is_array($arrContent) && ( count($arrContent)>0 ) ){
          reset($arrContent);
          foreach( $arrContent as $rTMP['key'] => $rTMP['value'] ){
  ?>
  <section>   
      <div clas="col-md-12">
          
          <div class="col-md-12 titulo">
              <h3><?php echo  $rTMP["value"]['nombre']; ?></h3>
          </div>
          
      </div>
  </section><br><br>
  <section>
    <div class="col-md-12">
    <?php echo  $rTMP["value"]['videou']; ?>  </div>
  </section>

  <section>
      <div class="container">
        <div class="content col-lg-12">
          <h6>INFORMACION GENERAL SOBRE EL CURSO</h6>
        </div>
        <P><?php echo  $rTMP["value"]['descrip']; ?></P>
      </div>
  </section>

  <?PHP
          }
      }
  ?> 
  </div>
  <section>

  <div class="container">
    <div class="content col-lg-12">
      <h6>TEMAS Y SUBTEMAS</h6>
    </div>
    <div id="accordion">
      
  <?php
  if ( is_array($arrContentd) && ( count($arrContentd)>0 ) ){
          reset($arrContentd);
          foreach( $arrContentd as $rTMP['key'] => $rTMP['value'] ){
  ?>
      <div class="card">
        <div class="card-header">
          <h6 class="collapsed card-link text" data-toggle="collapse" href="#a<?php echo  $rTMP["value"]['id']; ?>a">
          <?php echo  $rTMP["value"]['titulo']['texto']; ?>
        </h6>
        </div>
          <div id="a<?php echo  $rTMP["value"]['id']; ?>a" class="collapse" data-parent="#accordion">
              <?php
                foreach ( $rTMP['value']['titulo']['subtitulos'] as $key => $value) {
              ?>
                    <div class="card-body">
                      <a ><?php echo $value; ?></a><hr>
                    </div>
              <?PHP
                  }
              ?>   
          </div>
      </div>
  <?PHP
      }
  }
  ?> 

  </div>
  </section><br>

  <section>
      <div class="container">
        <div class="content col-lg-12 ">
          <h6>COMENTARIOS</h6>
        </div>
        <form method="post" action="">
          <div class="form-group col-md-12">
            <textarea class="form-control" id="coment" rows="3" placeholder="Ingresa comentario..."></textarea>
          </div>
            <div class="col-md-12 coment cboton">
              <a type="submit" class="btn btn-dark">Enviar</a>
          </div>  
        </form>
      </div>
  </section><br>

  <section>
      <div class="container">

  <?php

    if ( is_array($arrComent) && ( count($arrComent)>0 ) ){
            reset($arrComent);
            foreach( $arrComent as $rTMP['key'] => $rTMP['value'] ){
  ?>

        <div class="col-md-12">
          <div class="border">
            <div class="col-md-12 user">
              <h6><?php echo  $rTMP["value"]['username']; ?></h6>
            </div>
            <div class="col-md-12 comentario">
              <p><?php echo  $rTMP["value"]['comentario']; ?></p>
            </div>
          </div>
        </div><br>
      
  <?PHP
          }
      }
  ?> 
    </div>
  </section><br>
  <section>

  <div class="container"><br>
  <div class="row">

      <?php

      if ( is_array($arrProducto) && ( count($arrProducto)>0 ) ){
              reset($arrProducto);
              foreach( $arrProducto as $rTMP['key'] => $rTMP['value'] ){
      ?>

      <div class="gallery_product col-sm-12 col-md-4 col-lg-3 filter <?php echo  $rTMP["value"]['categori']; ?>">
          <div class="card">
              <img class="card-img-top" src="<?php echo  $rTMP["value"]['img']; ?>" alt="" title="producto" height="100px">
              <div class="card-body" >
                  <b class="card-title"><?php echo  $rTMP["value"]['nombre']; ?></b>
                    <div class="progress">    
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-<?php echo  $rTMP["value"]['c_dificultad']; ?>" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo  $rTMP["value"]['n_dificultad']; ?>%"><?php echo  $rTMP["value"]['dificultad']; ?></div>
                    </div>
                      <a>ARTISTA:<span>Nombre </span></a>
                      <form action="" method="post">
                          <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt( $rTMP["value"]['id'],COD,KEY);  ?>">
                          <input type="hidden" name="nombre" id="nombre" value="<?php echo  openssl_encrypt( $rTMP["value"]['nombre'],COD,KEY); ?>">
                          <input type="hidden" name="precio" id="precio" value="<?php echo  openssl_encrypt( $rTMP["value"]['precio'],COD,KEY); ?>">
                          <input type="hidden" name="tipo" id="tipo" value="<?php echo  openssl_encrypt( $rTMP["value"]['tipo'],COD,KEY); ?>">
                          <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY); ?>">
                          <div class="center">    
                              <button class="btn btn-dark btn-text-white btn-sm boton" name="btnAccion" value="agregar" type="submit"><i class="fas fa-shipping-fast"></i>Q<?php echo  $rTMP["value"]['precio']; ?></button>
                              <a class="btn btn-danger btn-sm boton" name="viemore" value="viemore" href="curso_prev.php?id=<?php echo  $rTMP["value"]['id']; ?>"><i class="fas fa-eye"></i></a>
                          </div>
                  </form>
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
    .card-header{
        color:white;
        background: #343a40 ;
    }

    .text{
        color:white;
    }
    .nal{
        color:white;
        background: #343a40;
        border-left-color:white;
        float:left;
        text-align: right;
    }
    .nar{
        color:white;
        border-right-color:white;
        background: #343a40;
        float:left;
        text-align: left;
    }
    .titulo{
        color:white;
        background: #343a40;
        float:left;
        text-align: center;
    }
    .content{
        color:white;
        background: #343a40;
        float:left;
        text-align: center;
    }
    .acordiona{
        float:left;
    }

    .cboton{
        color:white;
        background: #343a40;
        text-align: center;
    }
    .border{
      border-color: #343a40;
    }
    .card-body{
      padding:3px 3px 3px 3px;
      text-align: center;
    }
    .card-body:hover{
      background: #F7C5C5;
      text-align: center;
    }
    a:hover {
    
    color: #c82333;
    background: #F7C5C5;
    }
    a {
    color: black;
    text-decoration: none;
    background-color: transparent;
    }
</style>