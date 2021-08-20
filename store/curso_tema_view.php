<br><br><br>
<div class="container">
  <?php

  if ( is_array($arrContent) && ( count($arrContent)>0 ) ){
          reset($arrContent);
          foreach( $arrContent as $rTMP['key'] => $rTMP['value'] ){
  ?>
  <section>
        
      <div clas="col-md-12">
            <div class="col-md-2 titulo">
                 <a href="curso_tema.php?id=<?php echo  number_format($rTMP["value"]['id']-1); ?>"><</a>
            </div>
            <div class="col-md-8 titulo">
                <h3><?php echo  $rTMP["value"]['subtitulo']; ?></h3>
            </div>
            <div class="col-md-2 titulo">
                <a href="curso_tema.php?id=<?php echo  number_format($rTMP["value"]['id']+1); ?>">></a>
            </div> 
      </div>
    
  </section><br><br>
  <section>
    <div class="col-md-12">
    <?php echo  $rTMP["value"]['video']; ?>  </div>
  </section>

  <section>
      <div class="container">
        <div class="content col-lg-12">
          <h6>Requisitos:</h6>
        </div>
        <P><?php echo  $rTMP["value"]['requisitos']; ?></P>
      </div>
        <div class="content col-lg-12">
          <h6>Contenido:</h6>
        </div>
        <P><?php echo  $rTMP["value"]['contenido']; ?></P>
      </div>
  </section>

  <?PHP
          }
      }
  ?> 
  </div>
  </section><br><br><br><br><br>




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