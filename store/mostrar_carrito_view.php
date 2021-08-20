<br>
<div class="container">
<div class="table-responsive">
<h3>Lista Del Carrito</h3>
<?php if(!empty($_SESSION['CARRITO'])){ ?> 
<table class="table table-dark table-bordered">
    <tbody>
    <thead>
        <tr>
            <th width="40%">Descripcion</th>
            <th width="15%" class="text-center">Cantidad</th>
            <th width="20%" class="text-center">Precio</th>
            <th width="20%" class="text-center">Total</th>
            <th width="5%"></th>
        </tr>
    </thead>
        <?php $total=0; ?>
        <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){ ?>
        <tr>
            <td width="40%"><?php echo $producto['NOMBRE'] ?></td>
            <td width="15%" class="text-center"><?php echo $producto['CANTIDAD'] ?></td>
            <td width="20%" class="text-center">Q<?php echo $producto['PRECIO'] ?></td>
            <td width="20%" class="text-center">Q<?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2);?></td>
            <td width="5%">
            

                <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt( $producto['ID'],COD,KEY);  ?>">

                    <button class="btn btn-danger" name="btnAccion" value="eliminar" type="submit"><i class="fas fa-ban"></i></button>
                </form>
            </td>
        </tr>
        <?php $total=$total+($producto['PRECIO']*$producto['CANTIDAD']); ?>
        <?php }?>
        <tr>
            <td colspan="3" aling="right">Total</td>
            <td aling="right"><h4>Q<?php echo number_format($total,2); ?></h4></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="5">

            <p>
            <button class="btn btn-info text-center col-lg-12" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Deposito
            </button>
            </p>
            <div class="collapse" id="collapseExample">
            <div class="alert alert-secondary">
            <div class="card card-body">  
                <form action="deposito.php" method="post">
                
                    
                    <div class="form-group">
                        <label for="my-input">DEPOSITO BANCARIO</label>
                        <small id="emailHelp" class="form-text text-muted">
                        CUENTA MONETARIA BANCO INDUSTRIAL: <b>123456798</b>  <br>
                        NOMBRE DE LA CUENTA: <b>BYRON</b> 
                    </small> <br>
                        <input id="boleta" name="boleta" class="form-control" type="text" placeholder="Por favor escribe tu numero de boleta" required>
                    </div>
                    <div class="form-group">
                        <input id="email" name="email" class="form-control" type="email" placeholder="Por favor escribe tu correo" required>
                    </div>
                    <small id="emailHelp" class="form-text text-muted">
                        Los cursos se alojaran en el segmento MIS COMPRAS y se podra visualizar el contenido cuando este en estado "APROBADO".
                    </small> <br>
                
                    <button class="btn btn-success btn-lg btn-block" type="submit" value="paypal" name="btnAccion">Enviar</button> 

                </div> 
                </form>
            </div>
            </div>


            <!-- BOTON PAYPAL
            <form action="paypal.php" method="post">
            <div class="alert alert-success">
             
                <div class="form-group">
                    <label for="my-input">Correo de contacto</label>
                    <input id="email" name="email" class="form-control" type="email" placeholder="Por favor escribe tu correo" required>
                </div>
                <small id="emailHelp" class="form-text text-muted">
                    Los cursos se alojaran en el segmento MIS CURSOS y se enviara un respaldo de enlace a este correo electronico.
                </small>
             </div> 
                <button class="btn btn-primary btn-lg btn-block" type="submit" value="paypal" name="btnAccion">Paypal</button> 
             </form> -->

            </td>
        </tr>
    </tbody>
</table>
<?php }else{ ?>
    <div class="alert alert-success">
      No hay productos en el carrito  
    </div>
<?php } ?>
</div>
</div>
<style>
    .container{
        max-width:70%;
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