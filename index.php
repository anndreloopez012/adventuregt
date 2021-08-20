<?php
     require_once 'config.php';

    $arrPhoto = array();
    $var_consulta= "select * from anuncios";

    //$var_resultado = $conexion->query($var_consulta);
    $qTMP = mysqli_query($link, $var_consulta);
    while ( $rTMP = mysqli_fetch_assoc($qTMP) ){
        $arrPhoto[$rTMP["id"]]["id"] = $rTMP["id"];
        $arrPhoto[$rTMP["id"]]["img"] = $rTMP["img"];
        $arrPhoto[$rTMP["id"]]["url"] = $rTMP["url"];
    }
    mysqli_free_result($qTMP);

    //print "<pre>";
    //print_r($arrPhoto);
    //print "</pre>";

    $arrInsta = array();
    $var_consulta= "select * from instagram";

    //$var_resultado = $conexion->query($var_consulta);
    $qTMP = mysqli_query($link, $var_consulta);
    while ( $rTMP = mysqli_fetch_assoc($qTMP) ){
        $arrInsta[$rTMP["id"]]["id"] = $rTMP["id"];
        $arrInsta[$rTMP["id"]]["insta"] = $rTMP["insta"];
        $arrInsta[$rTMP["id"]]["nombre"] = $rTMP["nombre"];
        $arrInsta[$rTMP["id"]]["img"] = $rTMP["img"];
    }
    mysqli_free_result($qTMP);

    //print "<pre>";
    //print_r($arrInsta);
    //print "</pre>";

    $arrBlog = array();
    $var_consulta= "SELECT * FROM blog LIMIT 4";
    
    $qTMP = mysqli_query($link, $var_consulta);
    while ( $rTMP = mysqli_fetch_assoc($qTMP) ){
        $arrBlog[$rTMP["id"]]["id"] = $rTMP["id"];
        $arrBlog[$rTMP["id"]]["titulo"] = $rTMP["titulo"];
        $arrBlog[$rTMP["id"]]["descrip"] = $rTMP["descrip"];
        $arrBlog[$rTMP["id"]]["img_portada"] = $rTMP["img_portada"];
        
    }
    mysqli_free_result($qTMP);

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
    <link rel="stylesheet" href="assets/css/docs.theme.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.js"></script>
    <script src="assets/vendors/highlight.js"></script>
    <script src="assets/js/app.js"></script>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
        <!--/#action-->
    <section id="demos">
          <div class="owl-carousel owl-theme large-12 columns">
            <?php
            if ( is_array($arrPhoto) && ( count($arrPhoto)>0 ) ){
                 reset($arrPhoto);
                 foreach( $arrPhoto as $rTMP['key'] => $rTMP['value'] ){
             ?>
            <div >
              <a href="<?php echo  $rTMP["value"]['url']; ?>"><img src="<?php echo  $rTMP["value"]['img']; ?>" ></a>
            </div>
          <?PHP
                 }
             }
          ?>    
          </div>
         
          <script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 1
                  },
                  1000: {
                    items: 1
                  }
                }
              })
            })
              
          </script>
    </section><br>
    <!--/#home-slider-->
    
    <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                        <?php
                            if ( is_array($arrBlog) && ( count($arrBlog)>0 ) ){
                                 reset($arrBlog);
                                 foreach( $arrBlog as $rTMP['key'] => $rTMP['value'] ){
                             ?>
                         <div class="col-md-6 col-sm-6 blog-padding-right">
                            <div class="single-blog two-column">
                                <div class="post-thumb">
                                    <a href="blogdetails.php?id=<?php echo  $rTMP["value"]['id']; ?>"><img src="<?php echo  $rTMP["value"]['img_portada']; ?>" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="blogdetails.php?id=<?php echo  $rTMP["value"]['id']; ?>"></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h5 class="post-title bold"><a href="blogdetails.php?id=<?php echo  $rTMP["value"]['id']; ?>"><?php echo  $rTMP["value"]['titulo']; ?></a></h5>
                                    <a href="blogdetails.php?id=<?php echo  $rTMP["value"]['id']; ?>" class="read-more">Ver mas...</a>
                                </div>
                            </div>
                        </div>
                         <?PHP
                                 }
                             }
                          ?>  
                    </div>
                 </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                   <?php
                        if ( is_array($arrInsta) && ( count($arrInsta)>0 ) ){
                             reset($arrInsta);
                             foreach( $arrInsta as $rTMP['key'] => $rTMP['value'] ){
                         ?>
                <div class="col-sm-6 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                   
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <?php echo  $rTMP["value"]['img']; ?>
                        </div>
                        <h2><?php echo  $rTMP["value"]['nombre']; ?></h2>
                        <?php echo  $rTMP["value"]['insta']; ?>
                    </div>
                </div>
                    <?PHP
                             }
                        }
                    ?> 
            </div>
        </div>
    </section>
    <!--/#action-->

    <section id="features">
        <div class="container">
            <div class="row">
                <div class="single-features col-sm-8" >
                   <div class="owl-carousel owl-theme">
                       <?php
                        if ( is_array($arrBlog) && ( count($arrBlog)>0 ) ){
                             reset($arrBlog);
                             while ( $rTMP = each($arrBlog) ){
                         ?>
                        <div class="item">
                            <a href="blogdetails.php?id=<?php echo  $rTMP["value"]['id']; ?>"><img src="<?php echo  $rTMP["value"]['img_portada']; ?>" class="img-responsive" alt=""></a>
                        </div>
                        <?PHP
                                 }
                            }
                        ?>
                    </div> 
                    
                    
                </div>
                <div class="single-features col-sm-4">
                    <img src="images/home/noti.jpg" class="img-responsive" alt="">
                </div>
                
            </div>
        </div>
    </section>
     <!--/#features-->
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
    
     <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="images/home/under.png" class="img-responsive inline" alt="">
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Your Company 2014. All Rights Reserved.</p>
                        <p>Crafted by <a target="_blank" href="">Servicios Profesionales De Informatica</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

</body>
</html>
