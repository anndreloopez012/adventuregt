<?php 
function fntDrawFila($intIdRow = 0,$boolNew = true, $rTMP = array()){
    $boolShow = ($boolNew)?true:false;
    $strClassView = ($boolNew)?'hidden':'';
    $strClassEdit = ($boolNew)?'':'hidden';
    
    $strNombre = isset($rTMP["value"]['nombre'])?$rTMP["value"]['nombre']:'';
    $strPrecio = isset($rTMP["value"]['precio'])?$rTMP["value"]['precio']:'';
    $strCantidad = isset($rTMP["value"]['cantidad'])?$rTMP["value"]['cantidad']:'';
    $strContent = isset($rTMP["value"]['content'])?$rTMP["value"]['content']:'';    
    $strItinerario = isset($rTMP["value"]['itinerario'])?$rTMP["value"]['itinerario']:'';    
    $strIncluye = isset($rTMP["value"]['incluye'])?$rTMP["value"]['incluye']:'';    
    $strTarifas = isset($rTMP["value"]['tarifas'])?$rTMP["value"]['tarifas']:'';    
    $strHospedaje = isset($rTMP["value"]['hospedaje'])?$rTMP["value"]['hospedaje']:'';    
    $strFaq = isset($rTMP["value"]['faq'])?$rTMP["value"]['faq']:'';    
    $strFaq_uno = isset($rTMP["value"]['img_faq_1'])?$rTMP["value"]['img_faq_1']:'';    
    $strFaq_dos = isset($rTMP["value"]['img_faq_2'])?$rTMP["value"]['img_faq_2']:'';    
    $strFaq_tres = isset($rTMP["value"]['img_faq_3'])?$rTMP["value"]['img_faq_3']:'';    
    $strFaq_cuatro = isset($rTMP["value"]['img_faq_4'])?$rTMP["value"]['img_faq_4']:'';    
    $strRecomendacion = isset($rTMP["value"]['recomendacion'])?$rTMP["value"]['recomendacion']:'';    
    $strRequisitos = isset($rTMP["value"]['requisitos'])?$rTMP["value"]['requisitos']:'';    
    $strAlimentacion = isset($rTMP["value"]['alimentacion'])?$rTMP["value"]['alimentacion']:'';    
    $strImg = isset($rTMP["value"]['img'])?$rTMP["value"]['img']:'';    
    $strImg_uno = isset($rTMP["value"]['img_1'])?$rTMP["value"]['img_1']:'';    
    $strImg_dos = isset($rTMP["value"]['img_2'])?$rTMP["value"]['img_2']:'';    
    $strImg_tres = isset($rTMP["value"]['img_3'])?$rTMP["value"]['img_3']:'';    
    $strImg_cuatro = isset($rTMP["value"]['img_4'])?$rTMP["value"]['img_4']:'';    
    $strImg_portada = isset($rTMP["value"]['img_portada'])?$rTMP["value"]['img_portada']:'';    
    $strEstado = isset($rTMP["value"]['estado_v'])?$rTMP["value"]['estado_v']:'';    
    $strPais = isset($rTMP["value"]['pais'])?$rTMP["value"]['pais']:'';    
    $strFecha_Partida = isset($rTMP["value"]['fecha_partida'])?$rTMP["value"]['fecha_partida']:'';    
    $strFecha_Retorno = isset($rTMP["value"]['fecha_retorno'])?$rTMP["value"]['fecha_retorno']:'';    
    ?>
<style>
    h5 { 
        color: #4664CA;
        font-size: 11px;
    }
    .borde{
            border-style: outset;
            background: #EBEDEF;
            word-wrap: break-word;
            height: 300px;
            margin: auto;

    }
    .boton{
        text-align: center;
    }
</style>
       <div class="center">                       
        <div class=" borde col-md-6 " >
            <div class="col-md-12" >
                <div id='divView_<?php print $intIdRow; ?>_Nombre' class='<?php print $strClassView; ?>' >
                    <h5>NOMBRE:</h5><h6><?php echo $strNombre; ?></h6>
                </div>
                <div id='divEdit_<?php print $intIdRow; ?>_Nombre' class='<?php print $strClassEdit; ?>'>
                    <p></p><input type="text" name="nombre_<?php print $intIdRow; ?>" id="nombre_<?php print $intIdRow; ?>" required="required" class="form-control" placeholder="TITULO" value='<?php print $strNombre; ?>'/>
                    <input type="hidden" name="hdnId_<?php print $intIdRow; ?>" id="hdnId_<?php print $intIdRow; ?>" value="<?php print isset($rTMP["key"])?$rTMP["key"]:0; ?>">
                    <input type="hidden" name="hdnEditar_<?php print $intIdRow; ?>" id="hdnEditar_<?php print $intIdRow; ?>" value="0">
                    <input type="hidden" name="hdnEliminar_<?php print $intIdRow; ?>" id="hdnEliminar_<?php print $intIdRow; ?>" value="0">
                </div>
            </div>
        
            <div class="col-md-12" >
                <div id='divView_<?php print $intIdRow; ?>_Precio' class='<?php print $strClassView; ?>' >
                    <h5>PRECIO:</h5><h6><?php echo  $strPrecio; ?></h6>
                </div>
                <div id='divEdit_<?php print $intIdRow; ?>_Precio' class='<?php print $strClassEdit; ?>'>
                    <p></p><input type="text" value='<?php echo  $strPrecio; ?>' name="precio_<?php print $intIdRow; ?>" id="precio_<?php print $intIdRow; ?>" required="required" class="form-control" placeholder="DESCRIPCION" />
                </div>
            </div>
            <div class="col-md-12">
                <div id='divView_<?php print $intIdRow; ?>_Cantidad' class='<?php print $strClassView; ?>'>
                    <h5>CANTIDAD:</h5><h6><?php echo $strCantidad; ?></h6>
                </div>
                <div id='divEdit_<?php print $intIdRow; ?>_Cantidad' class='<?php print $strClassEdit; ?>'>
                    <p></p><input type="text" value='<?php echo  $strCantidad; ?>' name="cantidad_<?php print $intIdRow; ?>" id="cantidad_<?php print $intIdRow; ?>" required="required" class="form-control" placeholder="ENLACE" size="10" />
                </div>
            </div>
            <div class="col-md-12">
                <div id='divView_<?php print $intIdRow; ?>_Content' class='<?php print $strClassView; ?>'>
                    <h5>CONTENIDO:</h5><h6><?php echo $strContent; ?></h6>
                </div>
                <div id='divEdit_<?php print $intIdRow; ?>_Content' class='<?php print $strClassEdit; ?>'>

                    <p></p><input type="text" value='<?php echo  $strContent; ?>' name="content_<?php print $intIdRow; ?>" id="content_<?php print $intIdRow; ?>" required="required" class="form-control" placeholder="IMAGEN" size="10" />
                </div>
            </div>
            <div class="col-md-12">
                <div id='divView_<?php print $intIdRow; ?>_Itinenario' class='<?php print $strClassView; ?>'>
                    <h5>ITINERARIO:</h5><h6><?php echo $strItinerario; ?></h6>
                </div>
                <div id='divEdit_<?php print $intIdRow; ?>_Itinenario' class='<?php print $strClassEdit; ?>'>

                    <p></p><input type="text" value='<?php echo  $strItinerario; ?>' name="itinerario_<?php print $intIdRow; ?>" id="itinerario_<?php print $intIdRow; ?>" required="required" class="form-control" placeholder="IMAGEN" size="10" />
                </div>
            </div>
            <div class="col-md-12">
                <div id='divView_<?php print $intIdRow; ?>_Incluye' class='<?php print $strClassView; ?>'>
                    <h5>INCLUYE:</h5><h6><?php echo $strIncluye; ?></h6>
                </div>
                <div id='divEdit_<?php print $intIdRow; ?>_Incluye' class='<?php print $strClassEdit; ?>'>

                    <p></p><input type="text" value='<?php echo  $strIncluye; ?>' name="incluye_<?php print $intIdRow; ?>" id="incluye_<?php print $intIdRow; ?>" required="required" class="form-control" placeholder="IMAGEN" size="10" />
                </div>
            </div>
            <div class="col-md-12">
                <div id='divView_<?php print $intIdRow; ?>_Tarifas' class='<?php print $strClassView; ?>'>
                    <h5>TARIFAS:</h5><h6><?php echo $strTarifas; ?></h6>
                </div>
                <div id='divEdit_<?php print $intIdRow; ?>_Tarifas' class='<?php print $strClassEdit; ?>'>

                    <p></p><input type="text" value='<?php echo  $strTarifas; ?>' name="tarifas_<?php print $intIdRow; ?>" id="tarifas_<?php print $intIdRow; ?>" required="required" class="form-control" placeholder="IMAGEN" size="10" />
                </div>
            </div>
            <div class="col-md-12">
                <div id='divView_<?php print $intIdRow; ?>_Hospedaje' class='<?php print $strClassView; ?>'>
                    <h5>HOSPEDAJE:</h5><h6><?php echo $strHospedaje; ?></h6>
                </div>
                <div id='divEdit_<?php print $intIdRow; ?>_Hospedaje' class='<?php print $strClassEdit; ?>'>

                    <p></p><input type="text" value='<?php echo  $strHospedaje; ?>' name="hospedaje_<?php print $intIdRow; ?>" id="hospedaje_<?php print $intIdRow; ?>" required="required" class="form-control" placeholder="IMAGEN" size="10" />
                </div>
            </div>
            <div class="col-md-12">
                <div id='divView_<?php print $intIdRow; ?>_Faq' class='<?php print $strClassView; ?>'>
                    <h5>FAQ:</h5><h6><?php echo $strFaq; ?></h6>
                </div>
                <div id='divEdit_<?php print $intIdRow; ?>_Faq' class='<?php print $strClassEdit; ?>'>

                    <p></p><input type="text" value='<?php echo  $strFaq; ?>' name="faq_<?php print $intIdRow; ?>" id="faq_<?php print $intIdRow; ?>" required="required" class="form-control" placeholder="IMAGEN" size="10" />
                </div>
            </div>
            <div class="col-md-12">
                <div id='divView_<?php print $intIdRow; ?>_Img_faq_1' class='<?php print $strClassView; ?>'>
                    <h5>IMAGEN FAQ UNO:</h5><h6><?php echo $strFaq_uno; ?></h6>
                </div>
                <div id='divEdit_<?php print $intIdRow; ?>_Img_faq_1' class='<?php print $strClassEdit; ?>'>

                    <p></p><input type="text" value='<?php echo  $strFaq_uno; ?>' name="img_faq_1_<?php print $intIdRow; ?>" id="img_faq_1_<?php print $intIdRow; ?>" required="required" class="form-control" placeholder="IMAGEN" size="10" />
                </div>
            </div>
            <div class="col-md-12">
                <div id='divView_<?php print $intIdRow; ?>_Img_faq_2' class='<?php print $strClassView; ?>'>
                    <h5>IMAGEN FAQ DOS:</h5><h6><?php echo $strFaq_dos; ?></h6>
                </div>
                <div id='divEdit_<?php print $intIdRow; ?>_Img_faq_2' class='<?php print $strClassEdit; ?>'>

                    <p></p><input type="text" value='<?php echo  $strFaq_dos; ?>' name="img_faq_2_<?php print $intIdRow; ?>" id="img_faq_2_<?php print $intIdRow; ?>" required="required" class="form-control" placeholder="IMAGEN" size="10" />
                </div>
            </div>
            <div class="col-md-12">
                <div id='divView_<?php print $intIdRow; ?>_Img_faq_3' class='<?php print $strClassView; ?>'>
                    <h5>IMAGEN FAQ TRES:</h5><h6><?php echo $strFaq_tres; ?></h6>
                </div>
                <div id='divEdit_<?php print $intIdRow; ?>_Img_faq_3' class='<?php print $strClassEdit; ?>'>

                    <p></p><input type="text" value='<?php echo  $strFaq_tres; ?>' name="img_faq_3_<?php print $intIdRow; ?>" id="img_faq_3_<?php print $intIdRow; ?>" required="required" class="form-control" placeholder="IMAGEN" size="10" />
                </div>
            </div>
            <div class="col-md-12">
                <div id='divView_<?php print $intIdRow; ?>_Img_faq_4' class='<?php print $strClassView; ?>'>
                    <h5>IMAGEN FAQ CUATRO:</h5><h6><?php echo $strFaq_cuatro; ?></h6>
                </div>
                <div id='divEdit_<?php print $intIdRow; ?>_Img_faq_4' class='<?php print $strClassEdit; ?>'>

                    <p></p><input type="text" value='<?php echo  $strFaq_cuatro; ?>' name="img_faq_4_<?php print $intIdRow; ?>" id="img_faq_4_<?php print $intIdRow; ?>" required="required" class="form-control" placeholder="IMAGEN" size="10" />
                </div>
            </div>
            <div class="col-md-12">
                <div id='divView_<?php print $intIdRow; ?>_Recomendacion' class='<?php print $strClassView; ?>'>
                    <h5>RECOMENDACIONES:</h5><h6><?php echo $strRecomendacion; ?></h6>
                </div>
                <div id='divEdit_<?php print $intIdRow; ?>_Recomendacion' class='<?php print $strClassEdit; ?>'>

                    <p></p><input type="text" value='<?php echo  $strRecomendacion; ?>' name="recomendacion_<?php print $intIdRow; ?>" id="recomendacion_<?php print $intIdRow; ?>" required="required" class="form-control" placeholder="IMAGEN" size="10" />
                </div>
            </div>
            <div class="col-md-12">
                <div id='divView_<?php print $intIdRow; ?>_Requisitos' class='<?php print $strClassView; ?>'>
                    <h5>REQUISITOS:</h5><h6><?php echo $strRequisitos; ?></h6>
                </div>
                <div id='divEdit_<?php print $intIdRow; ?>_Requisitos' class='<?php print $strClassEdit; ?>'>

                    <p></p><input type="text" value='<?php echo  $strRequisitos; ?>' name="requisitos_<?php print $intIdRow; ?>" id="requisitos_<?php print $intIdRow; ?>" required="required" class="form-control" placeholder="IMAGEN" size="10" />
                </div>
            </div>
            <div class="col-md-12">
                <div id='divView_<?php print $intIdRow; ?>_Alimentacion' class='<?php print $strClassView; ?>'>
                    <h5>ALIMENTACION:</h5><h6><?php echo $strAlimentacion; ?></h6>
                </div>
                <div id='divEdit_<?php print $intIdRow; ?>_Alimentacion' class='<?php print $strClassEdit; ?>'>

                    <p></p><input type="text" value='<?php echo  $strAlimentacion; ?>' name="alimentacion_<?php print $intIdRow; ?>" id="alimentacion_<?php print $intIdRow; ?>" required="required" class="form-control" placeholder="IMAGEN" size="10" />
                </div>
            </div>
            <div class="col-md-12">
                <div id='divView_<?php print $intIdRow; ?>_Img' class='<?php print $strClassView; ?>'>
                    <h5>IMAGEN :</h5><h6><?php echo $strImg; ?></h6>
                </div>
                <div id='divEdit_<?php print $intIdRow; ?>_Img' class='<?php print $strClassEdit; ?>'>

                    <p></p><input type="text" value='<?php echo  $strImg; ?>' name="img_<?php print $intIdRow; ?>" id="img_<?php print $intIdRow; ?>" required="required" class="form-control" placeholder="IMAGEN" size="10" />
                </div>
            </div>
            <div class="col-md-12">
                <div id='divView_<?php print $intIdRow; ?>_Img_1' class='<?php print $strClassView; ?>'>
                    <h5>IMAGEN UNO:</h5><h6><?php echo $strImg_uno; ?></h6>
                </div>
                <div id='divEdit_<?php print $intIdRow; ?>_Img_1' class='<?php print $strClassEdit; ?>'>

                    <p></p><input type="text" value='<?php echo  $strImg_uno; ?>' name="img_1_<?php print $intIdRow; ?>" id="img_1_<?php print $intIdRow; ?>" required="required" class="form-control" placeholder="IMAGEN" size="10" />
                </div>
            </div>
            <div class="col-md-12">
                <div id='divView_<?php print $intIdRow; ?>_Img_2' class='<?php print $strClassView; ?>'>
                    <h5>IMAGEN DOS:</h5><h6><?php echo $strImg_dos; ?></h6>
                </div>
                <div id='divEdit_<?php print $intIdRow; ?>_Img_2' class='<?php print $strClassEdit; ?>'>

                    <p></p><input type="text" value='<?php echo  $strImg_dos; ?>' name="img_2_<?php print $intIdRow; ?>" id="img_2_<?php print $intIdRow; ?>" required="required" class="form-control" placeholder="IMAGEN" size="10" />
                </div>
            </div>
            <div class="col-md-12">
                <div id='divView_<?php print $intIdRow; ?>_Img_3' class='<?php print $strClassView; ?>'>
                    <h5>IMAGEN TRES:</h5><h6><?php echo $strImg_tres; ?></h6>
                </div>
                <div id='divEdit_<?php print $intIdRow; ?>_Img_3' class='<?php print $strClassEdit; ?>'>

                    <p></p><input type="text" value='<?php echo  $strImg_tres; ?>' name="img_3_<?php print $intIdRow; ?>" id="img_3_<?php print $intIdRow; ?>" required="required" class="form-control" placeholder="IMAGEN" size="10" />
                </div>
            </div>
            <div class="col-md-12">
                <div id='divView_<?php print $intIdRow; ?>_Img_4' class='<?php print $strClassView; ?>'>
                    <h5>IMAGEN CUATRO:</h5><h6><?php echo $strImg_cuatro; ?></h6>
                </div>
                <div id='divEdit_<?php print $intIdRow; ?>_Img_4' class='<?php print $strClassEdit; ?>'>

                    <p></p><input type="text" value='<?php echo  $strImg_cuatro; ?>' name="img_4_<?php print $intIdRow; ?>" id="img_4_<?php print $intIdRow; ?>" required="required" class="form-control" placeholder="IMAGEN" size="10" />
                </div>
            </div>
            <div class="col-md-12">
                <div id='divView_<?php print $intIdRow; ?>_Img_portada' class='<?php print $strClassView; ?>'>
                    <h5>PORTADA:</h5><h6><?php echo $strImg_portada; ?></h6>
                </div>
                <div id='divEdit_<?php print $intIdRow; ?>_Img_portada' class='<?php print $strClassEdit; ?>'>

                    <p></p><input type="text" value='<?php echo  $strImg_portada; ?>' name="img_portada_<?php print $intIdRow; ?>" id="img_portada_<?php print $intIdRow; ?>" required="required" class="form-control" placeholder="IMAGEN" size="10" />
                </div>
            </div>
            <div class="col-md-12">
                <div id='divView_<?php print $intIdRow; ?>_Estado_v' class='<?php print $strClassView; ?>'>
                    <h5>ESTADO:</h5><h6><?php echo $strEstado; ?></h6>
                </div>
                <div id='divEdit_<?php print $intIdRow; ?>_Estado_v' class='<?php print $strClassEdit; ?>'>

                    <p></p><input type="text" value='<?php echo  $strEstado; ?>' name="estado_v_<?php print $intIdRow; ?>" id="estado_v_<?php print $intIdRow; ?>" required="required" class="form-control" placeholder="IMAGEN" size="10" />
                </div>
            </div>
            <div class="col-md-12">
                <div id='divView_<?php print $intIdRow; ?>_Pais' class='<?php print $strClassView; ?>'>
                    <h5>PAIS:</h5><h6><?php echo $strPais; ?></h6>
                </div>
                <div id='divEdit_<?php print $intIdRow; ?>_Pais' class='<?php print $strClassEdit; ?>'>

                    <p></p><input type="text" value='<?php echo  $strPais; ?>' name="pais_<?php print $intIdRow; ?>" id="pais_<?php print $intIdRow; ?>" required="required" class="form-control" placeholder="IMAGEN" size="10" />
                </div>
            </div>
            <div class="col-md-12">
                <div id='divView_<?php print $intIdRow; ?>_Fecha_partida' class='<?php print $strClassView; ?>'>
                    <h5>FECHA DE PARTIDA:</h5><h6><?php echo $strFecha_Partida; ?></h6>
                </div>
                <div id='divEdit_<?php print $intIdRow; ?>_Fecha_partida' class='<?php print $strClassEdit; ?>'>

                    <p></p><input type="text" value='<?php echo  $strFecha_Partida; ?>' name="fecha_partida_<?php print $intIdRow; ?>" id="fecha_partida_<?php print $intIdRow; ?>" required="required" class="form-control" placeholder="IMAGEN" size="10" />
                </div>
            </div>
            <div class="col-md-12">
                <div id='divView_<?php print $intIdRow; ?>_Fecha_retorno' class='<?php print $strClassView; ?>'>
                    <h5>FECHA DEL RETORNO:</h5><h6><?php echo $strFecha_Retorno; ?></h6>
                </div>
                <div id='divEdit_<?php print $intIdRow; ?>_Fecha_retorno' class='<?php print $strClassEdit; ?>'>

                    <p></p><input type="text" value='<?php echo  $strFecha_Retorno; ?>' name="fecha_retorno_<?php print $intIdRow; ?>" id="fecha_retorno_<?php print $intIdRow; ?>" required="required" class="form-control" placeholder="IMAGEN" size="10" />
                </div>
            </div>
            <div class="col-md-col-md-12 col-centrada boton">
                <?php 
                if(!$boolNew){
                    ?>
                    <button title='Editar' type="button" onclick="fntEditar(<?php print $intIdRow; ?>)" class="btn btn-xs btn-warning">EDITAR</button>
                    <button title='Eliminar' onclick="fntEliminar(<?php print $intIdRow; ?>)" class="btn btn-xs btn-danger">ELIMINAR</button>
                    <?php
                }else{
                    ?>
                    <input type="button" onclick='$(this).parent().parent().remove()'  value="ELIMINAR" class="btn btn-xs btn-danger" name="anuncio"/>
                    <?php
                }
                ?>
            </div>
        </div>
      </div> 
    
    <?php    
}
?>
<?php
 if(isset($_POST["travel"])){
        $sql = "INSERT INTO travel (titulo, descrip, img, url)
        VALUES ('".$_POST["titulo"]."','".$_POST["descrip"]."','".$_POST["img"]."','".$_POST["url"]."')";

            if (mysqli_query($link, $sql)) {
                echo "REGISTRO INGRESADO CON EXITO";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($link);
            }

    }


if ( isset($_GET["validaciones"]) && !empty($_GET["validaciones"]) ){
  
    //ELIMINAR----------------------------------------------- travel
        if ( $_GET["validaciones"] == "eliminaranuncio" ){

                $intId = isset($_GET["key"]) ? intval($_GET["key"]) : 0;

                if ( intval($intId) ){

                    $var_consulta = "DELETE FROM travel WHERE id = '{$intId}'";
                    $qTMP = mysqli_query($link, $var_consulta);  
                    mysqli_free_result($qTMP);

                }

            }
        if ( $_GET["validaciones"] == "updateanuncio" ){

                $intId = isset($_GET["key"]) ? intval($_GET["key"]) : 0;

                if ( intval($intId) ){

                    $var_consulta = "UPDATE FROM travel WHERE id = '{$intId}'";
                    $qTMP = mysqli_query($link, $var_consulta);  
                    mysqli_free_result($qTMP);

                }

            }
    
      die();
}else if ( isset($_REQUEST['agregarfila']) && $_REQUEST['agregarfila'] == 'true' ){
    $intFila = isset($_REQUEST['fila'])?intval($_REQUEST['fila']):0;
    fntDrawFila($intFila, true);
    die();   
}
else if ( isset($_REQUEST['process']) && $_REQUEST['process'] == 'true' ){
    foreach($_POST as $key => $value){
        $arrExplode = explode('_',$key);
        if( isset($arrExplode[0]) && $arrExplode[0] == 'hdnId' ){
            $intEdit = isset( $_POST["hdnEditar_{$arrExplode[1]}"] )?$_POST["hdnEditar_{$arrExplode[1]}"]:0;
            $intDelete = isset( $_POST["hdnEliminar_{$arrExplode[1]}"] )?$_POST["hdnEliminar_{$arrExplode[1]}"]:0;
            $intId = isset( $_POST["hdnId_{$arrExplode[1]}"] )?$_POST["hdnId_{$arrExplode[1]}"]:0;
            
            
            $strNombre = isset( $_POST["nombre_{$arrExplode[1]}"]  )? $_POST["nombre_{$arrExplode[1]}"]  :'';
            $strPrecio = isset( $_POST["precio_{$arrExplode[1]}"]  )? $_POST["precio_{$arrExplode[1]}"]  :'';
            $strCantidad = isset( $_POST["cantidad_{$arrExplode[1]}"]  )? $_POST["cantidad_{$arrExplode[1]}"]  :'';
            $strContent = isset( $_POST["content_{$arrExplode[1]}"]  )? $_POST["content_{$arrExplode[1]}"]  :'';            
            $strItinerario = isset( $_POST["itinerario_{$arrExplode[1]}"]  )? $_POST["itinerario_{$arrExplode[1]}"]  :'';            
            $strIncluye = isset( $_POST["incluye_{$arrExplode[1]}"]  )? $_POST["incluye_{$arrExplode[1]}"]  :'';            
            $strTarifas = isset( $_POST["tarifas_{$arrExplode[1]}"]  )? $_POST["tarifas_{$arrExplode[1]}"]  :'';            
            $strHospedaje = isset( $_POST["hospedaje_{$arrExplode[1]}"]  )? $_POST["hospedaje_{$arrExplode[1]}"]  :'';            
            $strFaq = isset( $_POST["faq_{$arrExplode[1]}"]  )? $_POST["faq_{$arrExplode[1]}"]  :'';            
            $strFaq_uno = isset( $_POST["img_faq_1_{$arrExplode[1]}"]  )? $_POST["img_faq_1_{$arrExplode[1]}"]  :'';            
            $strFaq_dos = isset( $_POST["img_faq_2_{$arrExplode[1]}"]  )? $_POST["img_faq_2_{$arrExplode[1]}"]  :'';            
            $strFaq_tres = isset( $_POST["img_faq_3_{$arrExplode[1]}"]  )? $_POST["img_faq_3_{$arrExplode[1]}"]  :'';            
            $strFaq_cuatro = isset( $_POST["img_faq_4_{$arrExplode[1]}"]  )? $_POST["img_faq_4_{$arrExplode[1]}"]  :'';            
            $strRecomendacion = isset( $_POST["recomendacion_{$arrExplode[1]}"]  )? $_POST["recomendacion_{$arrExplode[1]}"]  :'';            
            $strRequisitos = isset( $_POST["requisitos_{$arrExplode[1]}"]  )? $_POST["requisitos_{$arrExplode[1]}"]  :'';            
            $strAlimentacion = isset( $_POST["alimentacion_{$arrExplode[1]}"]  )? $_POST["alimentacion_{$arrExplode[1]}"]  :'';            
            $strImg = isset( $_POST["img_{$arrExplode[1]}"]  )? $_POST["img_{$arrExplode[1]}"]  :'';            
            $strImg_uno = isset( $_POST["img_1_{$arrExplode[1]}"]  )? $_POST["img_1_{$arrExplode[1]}"]  :'';            
            $strImg_dos = isset( $_POST["img_2_{$arrExplode[1]}"]  )? $_POST["img_2_{$arrExplode[1]}"]  :'';            
            $strImg_tres = isset( $_POST["img_3_{$arrExplode[1]}"]  )? $_POST["img_3_{$arrExplode[1]}"]  :'';            
            $strImg_cuatro = isset( $_POST["img_4_{$arrExplode[1]}"]  )? $_POST["img_4_{$arrExplode[1]}"]  :'';            
            $strImg_portada = isset( $_POST["img_portada_{$arrExplode[1]}"]  )? $_POST["img_portada_{$arrExplode[1]}"]  :'';            
            $strEstado = isset( $_POST["estado_v_{$arrExplode[1]}"]  )? $_POST["estado_v_{$arrExplode[1]}"]  :'';            
            $strPais = isset( $_POST["pais_{$arrExplode[1]}"]  )? $_POST["pais_{$arrExplode[1]}"]  :'';            
            $strFecha_Partida = isset( $_POST["fecha_partida_{$arrExplode[1]}"]  )? $_POST["fecha_partida_{$arrExplode[1]}"]  :'';            
            $strFecha_Retorno = isset( $_POST["fecha_retorno_{$arrExplode[1]}"]  )? $_POST["fecha_retorno_{$arrExplode[1]}"]  :'';            
            
            if( $intId == 0){
                $sql = "INSERT INTO travel (nombre, precio, cantidad, content, itinerario, incluye, tarifas, hospedaje, faq, img_faq_1, img_faq_2, img_faq_3, img_faq_4, recomendacion, requisitos, alimentacion, img, img_1, img_2, img_3, img_4, img_portada, estado_v, pais, fecha_partida, fecha_retorno)
                    VALUES ('".$strNombre."','".$strPrecio."','".$strCantidad."','".$strContent."','".$strItinerario."','".$strIncluye."','".$strTarifas."','".$strHospedaje."','".$strFaq."','".$strFaq_uno."','".$strFaq_dos."','".$strFaq_tres."','".$strFaq_cuatro."','".$strRecomendacion."','".$strRequisitos."','".$strAlimentacion."','".$strImg."','".$strImg_uno."','".$strImg_dos."','".$strImg_tres."','".$strImg_cuatro."','".$strImg_portada."','".$strEstado."','".$strPais."','".$strFecha_Partida."','".$strFecha_Retorno."')";

                        if (mysqli_query($link, $sql)) {
                            echo "REGISTRO INGRESADO CON EXITO";
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($link);
                        }
                
            }
            else if($intDelete == 1 && $intId > 0 ){
                $sql = "DELETE FROM travel  WHERE id = {$intId}";
                print $sql;
                    if (mysqli_query($link, $sql)) {
                        echo "REGISTRO ELIMINADO CON EXITO";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($link);
                    }
            }
            else if($intEdit == 1 && $intId > 0){
                $sql = "UPDATE travel 
                set nombre = '".$strNombre."', 
                precio = '".$strPrecio."', 
                cantidad = '".$strCantidad."',
                content = '".$strContent."',
                itinerario = '".$strItinerario."',
                incluye = '".$strIncluye."',
                tarifas = '".$strTarifas."',
                hospedaje = '".$strHospedaje."',
                faq = '".$strFaq."',
                img_faq_1 = '".$strFaq_uno."',
                img_faq_2 = '".$strFaq_dos."',
                img_faq_3 = '".$strFaq_tres."',
                img_faq_4 = '".$strFaq_cuatro."',
                recomendacion = '".$strRecomendacion."',
                requisitos = '".$strRequisitos."',
                alimentacion = '".$strAlimentacion."',
                img = '".$strImg."',
                img_1 = '".$strImg_uno."',
                img_2 = '".$strImg_dos."',
                img_3 = '".$strImg_tres."',
                img_4 = '".$strImg_cuatro."',
                img_portada = '".$strImg_portada."',
                estado_v = '".$strEstado."',
                pais = '".$strPais."',
                fecha_partida = '".$strFecha_Partida."',
                fecha_retorno = '".$strFecha_Retorno."'
                WHERE id = {$intId}";

                    if (mysqli_query($link, $sql)) {
                        echo "REGISTRO ACTUALIZADO CON EXITO";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($link);
                    }
            }
            
        }
        
    }
    
    
    die();   
}

$arrTravel = array();
$var_consulta= "SELECT * FROM travel";

$qTMP = mysqli_query($link, $var_consulta);
while ( $rTMP = mysqli_fetch_assoc($qTMP) ){
    $arrTravel[$rTMP["id"]]["id"] = $rTMP["id"];
    $arrTravel[$rTMP["id"]]["nombre"] = $rTMP["nombre"];
    $arrTravel[$rTMP["id"]]["precio"] = $rTMP["precio"];
    $arrTravel[$rTMP["id"]]["cantidad"] = $rTMP["cantidad"];
    $arrTravel[$rTMP["id"]]["content"] = $rTMP["content"];
    $arrTravel[$rTMP["id"]]["itinerario"] = $rTMP["itinerario"];
    $arrTravel[$rTMP["id"]]["incluye"] = $rTMP["incluye"];
    $arrTravel[$rTMP["id"]]["tarifas"] = $rTMP["tarifas"];
    $arrTravel[$rTMP["id"]]["hospedaje"] = $rTMP["hospedaje"];
    $arrTravel[$rTMP["id"]]["faq"] = $rTMP["faq"];
    $arrTravel[$rTMP["id"]]["img_faq_1"] = $rTMP["img_faq_1"];
    $arrTravel[$rTMP["id"]]["img_faq_2"] = $rTMP["img_faq_2"];
    $arrTravel[$rTMP["id"]]["img_faq_3"] = $rTMP["img_faq_3"];
    $arrTravel[$rTMP["id"]]["img_faq_4"] = $rTMP["img_faq_4"];
    $arrTravel[$rTMP["id"]]["recomendacion"] = $rTMP["recomendacion"];
    $arrTravel[$rTMP["id"]]["requisitos"] = $rTMP["requisitos"];
    $arrTravel[$rTMP["id"]]["alimentacion"] = $rTMP["alimentacion"];
    $arrTravel[$rTMP["id"]]["img"] = $rTMP["img"];
    $arrTravel[$rTMP["id"]]["img_1"] = $rTMP["img_1"];
    $arrTravel[$rTMP["id"]]["img_2"] = $rTMP["img_2"];
    $arrTravel[$rTMP["id"]]["img_3"] = $rTMP["img_3"];
    $arrTravel[$rTMP["id"]]["img_4"] = $rTMP["img_4"];
    $arrTravel[$rTMP["id"]]["img_portada"] = $rTMP["img_portada"];
    $arrTravel[$rTMP["id"]]["estado_v"] = $rTMP["estado_v"];
    $arrTravel[$rTMP["id"]]["pais"] = $rTMP["pais"];
    $arrTravel[$rTMP["id"]]["fecha_partida"] = $rTMP["fecha_partida"];
    $arrTravel[$rTMP["id"]]["fecha_retorno"] = $rTMP["fecha_retorno"];
    
}

mysqli_close($link);

?>
