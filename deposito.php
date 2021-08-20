<?php
    //require_once 'auth.php';

    require_once 'store/global/config.php';

    require_once 'config.php';

    include_once 'carrito.php';

    //require_once 'store/store_controller.php';

    require_once 'store/menu.php';

    //require_once 'store/store_view.php';
    
    //require_once 'store/store_model.php';

    require_once 'store/footer.php';
?>

<?php 


if(isset($_POST["btnAccion"])){
    $total=0;
    $SID=session_id();
    $idUsuer=$_SESSION["username"];
    
    

    if ( isset($_SESSION['CARRITO']) ){        
        reset($_SESSION['CARRITO']);
            foreach($_SESSION['CARRITO'] as $indice=>$producto){
                $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);
                $tipo=$producto['TIPO'];
            }

                $sql = "INSERT INTO `ventas` (`id`, `clave_transaccion`, `paypal_datos`, `fecha`, `user`, `correo`, `boleta`, `total`, `statuss`, `tipo`) VALUES (NULL, '".$SID."', NULL, CURRENT_TIMESTAMP, '".$idUsuer."', '".$_POST["email"]."', '".$_POST["boleta"]."', '".$total."', 'pendiente' , '".$tipo."')";

                    if (mysqli_query($link, $sql)) {
                        
                        echo "";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($link);
                    }

    }

    if ( isset($_SESSION['CARRITO']) ){        
        reset($_SESSION['CARRITO']);
            foreach($_SESSION['CARRITO'] as $indice=>$producto){

                $sql = "INSERT INTO `detalle_venta` (`id`, `id_producto`, `id_user`, `id_status`, `precio_uni`, `cantidad`) VALUES (NULL, '".$producto["ID"]."', '".$idUsuer."', 'pendiente' , '".$producto["PRECIO"]."', '".$producto["CANTIDAD"]."')";

                    if (mysqli_query($link, $sql)) {
                        echo "";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($link);
                    }

                  
            }

            mysqli_close($link);
            //echo "<h3>".$total."</h3>";
            //echo "<h3>".$idVenta."</h3>";
            //echo "<h3>".$tipo."</h3>";
    }
}
?>

<div class="jumbotron text-center">
    <h1 class="display-4">!Deposito Realizado!</h1>
    <hr class="my-4">
    <p class="lead">Se aprobara su compra en las siguientes 24 Horas, por el monto de 
        <h4> Q.<?php echo number_format($total,2); ?></h4>
    </p>
    
    <p>Su compra sera reflejada en "COMPRAS" para revisar el estado de su compra haz click en el siguiente boton. </p>

    <a class="alert alert-warning" href="compras.php">MIS COMPRAS</a>
</div>

<?php 
require_once 'store/footer.php';
?>

