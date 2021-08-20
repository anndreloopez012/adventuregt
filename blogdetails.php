 <?php

require_once 'config.php';

    $arrBlog = array();
    $intId = $_GET["id"];
    $var_consulta= "SELECT * FROM blog WHERE id = '{$intId}' LIMIT 1 ";

    //$var_resultado = $conexion->query($var_consulta);
    $qTMP = mysqli_query($link, $var_consulta);
    while ( $rTMP = mysqli_fetch_assoc($qTMP) ){
        $arrBlog[$rTMP["id"]]["id"] = $rTMP["id"];
        $arrBlog[$rTMP["id"]]["titulo"] = $rTMP["titulo"];
        $arrBlog[$rTMP["id"]]["content"] = $rTMP["content"];
        $arrBlog[$rTMP["id"]]["img_portada"] = $rTMP["img_portada"];
        $arrBlog[$rTMP["id"]]["youtube"] = $rTMP["youtube"];
        $arrBlog[$rTMP["id"]]["img_1"] = $rTMP["img_1"];
        $arrBlog[$rTMP["id"]]["img_2"] = $rTMP["img_2"];
        $arrBlog[$rTMP["id"]]["img_3"] = $rTMP["img_3"];
        $arrBlog[$rTMP["id"]]["img_4"] = $rTMP["img_4"];
        $arrBlog[$rTMP["id"]]["img_5"] = $rTMP["img_5"];
        $arrBlog[$rTMP["id"]]["img_6"] = $rTMP["img_6"];
        $arrBlog[$rTMP["id"]]["img_7"] = $rTMP["img_7"];
        $arrBlog[$rTMP["id"]]["img_8"] = $rTMP["img_8"];
        $arrBlog[$rTMP["id"]]["img_9"] = $rTMP["img_9"];
        $arrBlog[$rTMP["id"]]["img_10"] = $rTMP["img_10"];
        $arrBlog[$rTMP["id"]]["img_11"] = $rTMP["img_11"];
        $arrBlog[$rTMP["id"]]["img_12"] = $rTMP["img_12"];
        $arrBlog[$rTMP["id"]]["img_13"] = $rTMP["img_13"];
        $arrBlog[$rTMP["id"]]["img_14"] = $rTMP["img_14"];
        $arrBlog[$rTMP["id"]]["img_15"] = $rTMP["img_15"];
        $arrBlog[$rTMP["id"]]["img_16"] = $rTMP["img_16"];
        $arrBlog[$rTMP["id"]]["img_17"] = $rTMP["img_17"];
        $arrBlog[$rTMP["id"]]["img_18"] = $rTMP["img_18"];
        $arrBlog[$rTMP["id"]]["img_19"] = $rTMP["img_19"];
        $arrBlog[$rTMP["id"]]["img_20"] = $rTMP["img_20"];
        $arrBlog[$rTMP["id"]]["img_21"] = $rTMP["img_21"];
        $arrBlog[$rTMP["id"]]["img_22"] = $rTMP["img_22"];
        $arrBlog[$rTMP["id"]]["img_23"] = $rTMP["img_23"];
        $arrBlog[$rTMP["id"]]["img_24"] = $rTMP["img_24"];
        $arrBlog[$rTMP["id"]]["img_25"] = $rTMP["img_25"];
        $arrBlog[$rTMP["id"]]["img_26"] = $rTMP["img_26"];
        $arrBlog[$rTMP["id"]]["img_27"] = $rTMP["img_27"];
        $arrBlog[$rTMP["id"]]["img_28"] = $rTMP["img_28"];
        $arrBlog[$rTMP["id"]]["img_29"] = $rTMP["img_29"];
        $arrBlog[$rTMP["id"]]["img_30"] = $rTMP["img_30"];
        $arrBlog[$rTMP["id"]]["img_31"] = $rTMP["img_31"];
        $arrBlog[$rTMP["id"]]["img_32"] = $rTMP["img_32"];
        $arrBlog[$rTMP["id"]]["img_33"] = $rTMP["img_33"];
        $arrBlog[$rTMP["id"]]["img_34"] = $rTMP["img_34"];
        $arrBlog[$rTMP["id"]]["img_35"] = $rTMP["img_35"];
        $arrBlog[$rTMP["id"]]["img_36"] = $rTMP["img_36"];
        $arrBlog[$rTMP["id"]]["img_37"] = $rTMP["img_37"];
        $arrBlog[$rTMP["id"]]["img_38"] = $rTMP["img_38"];
        $arrBlog[$rTMP["id"]]["img_39"] = $rTMP["img_39"];
        $arrBlog[$rTMP["id"]]["img_40"] = $rTMP["img_40"];
        
    }
    mysqli_free_result($qTMP);

    //print "<pre>";
    //print_r($arrBlog);
    //print "</pre>";

//INSERT------------------------------------------------ CORREO 
 if(isset($_POST["correos"])){
    require_once 'config.php';

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
   
    <!--/#page-breadcrumb-->
    <?php
         if ( is_array($arrBlog) && ( count($arrBlog)>0 ) ){
            reset($arrBlog);
            foreach( $arrBlog as $rTMP['key'] => $rTMP['value'] ){
    ?>
<style type="text/css">
         .col-centrada{ float: none; margin: 0 auto;}
</style>
    <section id="blog-details" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                         <div class="col-md-6 col-sm-12">
                            <div class="single-blog blog-details">
                                <div class="post-content overflow">
                                    <h1 class="post-title bold"><a href="#"><?php echo  $rTMP["value"]['titulo']; ?></a></h1>
                                    <p><?php echo  $rTMP["value"]['content']; ?> 
                                    
                                    <div class="blog-share">
                                        <span class='st_facebook_hcount'></span>
                                        <span class='st_twitter_hcount'></span>
                                        <span class='st_pinterest_hcount'></span>
                                        <span class='st_email_hcount'></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="single-blog blog-details">
                                <div class="post-content overflow">
                                    <p><?php echo  $rTMP["value"]['youtube']; ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </section>
 
    <section id="portfolio">
        <div class="container">
                <div class="portfolio-items">
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_1']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_1']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded folio">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_2']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_2']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_3']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_3']; ?>"  data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_4']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_4']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded mobile">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_5']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_5']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded mockup">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_6']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_6']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded folio">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_7']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_7']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_8']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_8']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_9']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_9']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded mockup">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_10']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_10']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design folio">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_11']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_11']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded mockup">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_12']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_12']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design mobile">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_13']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_13']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_14']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_14']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_15']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_15']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_16']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_16']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_17']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_17']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_18']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_18']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_19']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_19']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_20']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_20']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_21']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_21']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_22']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_22']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_23']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_23']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_24']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_24']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_25']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_25']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_26']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_26']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_27']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_27']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_28']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_28']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_29']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_29']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_30']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_30']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_31']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_31']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_32']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_32']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_33']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_33']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_34']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_34']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_35']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_35']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_36']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_36']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_37']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_37']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_38']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_38']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_39']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_39']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo  $rTMP["value"]['img_40']; ?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo  $rTMP["value"]['img_40']; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
  

    <?PHP
         }
     }
    ?>
    
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
