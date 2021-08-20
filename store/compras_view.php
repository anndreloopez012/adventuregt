
<br>
<div class="container">
<table class="table table-lithg table-bordered table-hover">
<tbody>
<thead>
    <tr>
        <th width="40%" class="text-center">NOMBRE</th>
        <th width="15%" class="text-center">PRECIO</th>
        <th width="15%" class="text-center">DIFICULTAD</th>
        <th width="15%" class="text-center">TIPO</th>
        <th width="15%" class="text-center">ESTATUS</th>
    </tr>
</thead>
   
    <?php if ( is_array($arrCompra) && ( count($arrCompra)>0 ) ){
                 reset($arrCompra);
                 foreach( $arrCompra as $rTMP['key'] => $rTMP['value'] ){ ?>
    <tr>
        <td width="40%" class="text-center"><?php echo  $rTMP["value"]['nombre']; ?></td>
        <td width="15%" class="text-center"><?php echo  $rTMP["value"]['precio']; ?></td>
        <td width="20%" class="text-center"><?php echo  $rTMP["value"]['dificultad']; ?></td>
        <td width="20%" class="text-center"><?php echo  $rTMP["value"]['tipo']; ?></td>
        <td width="5%" class="text-center <?php echo  $rTMP["value"]['id_status']; ?>"><?php echo  $rTMP["value"]['id_status']; ?> </td>

    </tr>

    <?PHP
        }
    }
    ?> 
</tbody>
</table>

</div>
<style>

.container{
  max-width:75%;
}

.pendiente{
    background:#C0392B;
    color:white;
}
.aprobado{
    background:#7FB3D5;
    color:white;
}
th{
    background:#212529;
    color:white; 
}
    @media screen and (max-width: 800px) {
       table {
           width:100%;
       }
       thead {
           display: none;
       }
       tr:nth-of-type(2n) {
           background-color: inherit;
       }
       tr td:first-child {
           background: #f0f0f0;
           font-weight:bold;
           font-size:1.3em;
       }
       tbody td {
        width:100%;
           display: block;
           text-align:center;
       }
       tbody td:before {
           content: attr(data-th);
           display: block;
           text-align:center;
       }
}
</style>