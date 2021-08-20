<style type="text/css">
        table td {
            text-align: center;
        }
           
           .delete-row{
               background-color: #d9534f;
           }
</style>
   <div class="panel ">
<div id="DivTravel" class="col-md-12 col-centrada">
   <button onclick="fntGuardar();" class="btn btn-sm btn-success"><b class="nuevo" id="nuevo">GUARDAR</b></button>
    <table id='tbTravel' class="table">
        <tbody>
        <tr>
            <td>
                <button onclick="fntAddtravel();" class="btn btn-sm btn-info"><b class="nuevo" id="nuevo">AGREGAR</b></button>
                <button onclick="fntGuardar();" class="btn btn-sm btn-success"><b class="nuevo" id="nuevo">GUARDAR</b></button>
            </td>
        </tr>
            <?php
            if ( is_array($arrAnuncio) && ( count($arrAnuncio)>0 ) ){
                reset($arrAnuncio);
                $intCorr = 0;
                foreach( $arrAnuncio as $rTMP['key'] => $rTMP['value'] ){
                    $intCorr++;
                    fntDrawFila($intCorr,false, $rTMP);
                }
            }
            ?>
            <script type="application/javascript">
                var intFilasTravel = parseInt('<?php print $intCorr; ?>',10);
            </script>
        </tbody>
    </table>
</div>
</div>


