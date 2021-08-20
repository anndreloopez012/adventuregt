 <?php 
require_once 'config.php';

    $arrBlog = array();
    $var_consulta= "SELECT * FROM blog ORDER BY id DESC ";
    
    $qTMP = mysqli_query($link, $var_consulta);
    while ( $rTMP = mysqli_fetch_assoc($qTMP) ){
        $arrBlog[$rTMP["id"]]["id"] = $rTMP["id"];
        $arrBlog[$rTMP["id"]]["titulo"] = $rTMP["titulo"];
        $arrBlog[$rTMP["id"]]["descrip"] = $rTMP["descrip"];
        $arrBlog[$rTMP["id"]]["img_portada"] = $rTMP["img_portada"];
        
    }
    mysqli_free_result($qTMP);


//die(); no sabia que chingaba eso 

//INSERT------------------------------------------------ CORREO 
 if(isset($_POST["correos"])){
        $sql = "INSERT INTO correos (nombre, correo)
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
    <!--/#action-->
<style>
.segmento {
    margin:10px;
}
img{
    max-height:230px;
}
</style>
    <section id="blog" class="padding-top">
        <div class="container" >
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                        <?php
                            if ( is_array($arrBlog) && ( count($arrBlog)>0 ) ){
                                 reset($arrBlog);
                                 foreach( $arrBlog as $rTMP['key'] => $rTMP['value'] ){
                             ?>
                         <div class="col-md-12 col-sm-12 blog-padding-right segmento">
                            <div class="single-blog two-column">
                                <div class="post-thumb col-sm-6">
                                    <a href="blogdetails.php?id=<?php echo  $rTMP["value"]['id']; ?>"><img src="<?php echo  $rTMP["value"]['img_portada']; ?>" class="img-responsive" alt="Responsive image"></a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="blogdetails.php?id=<?php echo  $rTMP["value"]['id']; ?>"></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow col-sm-6">
                                    <h1 class="post-title bold"><a href="blogdetails.php?id=<?php echo  $rTMP["value"]['id']; ?>"><?php echo  $rTMP["value"]['titulo']; ?></a></h1>
                                    <p><?php echo  $rTMP["value"]['descrip']; ?></p>
                                    <a href="blogdetails.php?id=<?php echo  $rTMP["value"]['id']; ?>" class="read-more">Ver mas...</a>
                                </div>
                            </div>
                        </div>
                        <hr/><hr/>
                         <?PHP
                                 }
                             }
                          ?>  
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
 
    <?php

    include "footer.php"; 

    ?>    
   