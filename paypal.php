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
            }

                $sql = "INSERT INTO `ventas` (`id`, `clave_transaccion`, `paypal_datos`, `fecha`, `user`, `correo`, `total`, `status`) VALUES (NULL, '".$SID."', NULL, CURRENT_TIMESTAMP, '".$idUsuer."', '".$_POST["email"]."', '".$total."', 'pendiente')";

                    if (mysqli_query($link, $sql)) {
                        $idVenta= mysqli_insert_id($link);
                        echo "";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($link);
                    }

    }

    if ( isset($_SESSION['CARRITO']) ){        
        reset($_SESSION['CARRITO']);
            foreach($_SESSION['CARRITO'] as $indice=>$producto){

                $sql = "INSERT INTO `detalle_venta` (`id`, `id_venta`, `id_producto`, `id_user`, `precio_uni`, `cantidad`) VALUES (NULL, '".$idVenta."', '".$producto["ID"]."', '".$idUsuer."', '".$producto["PRECIO"]."', '".$producto["CANTIDAD"]."')";

                    if (mysqli_query($link, $sql)) {
                        echo "";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($link);
                    }

                  
            }

            mysqli_close($link);
            //echo "<h3>".$total."</h3>";
            //echo "<h3>".$idVenta."</h3>";
    }
}
?>

<script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD"></script>

<div class="jumbotron text-center">
    <h1 class="display-4">!Paso Final!</h1>
    <hr class="my-4">
    <p class="lead">Estas a punto de pagar con paypal la cantidad de:
        <h4> Q.<?php echo number_format($total,2); ?></h4>
        <div id="paypal-button-container"></div>
    </p>
    
    <p>Se enviara una copia del pedido y se redireccionara a COMPRAS. </p>
</div>

<script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            // Set up the transaction
            createOrder: function(data, actions) {
                return fetch('/demo/checkout/api/paypal/order/create/', {
                    method: 'post'
                }).then(function(res) {
                    return res.json();
                }).then(function(data) {
                    return data.orderID;
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                return fetch('/demo/checkout/api/paypal/order/' + data.orderID + '/capture/', {
                    method: 'post'
                }).then(function(res) {
                    return res.json();
                }).then(function(details) {
                    // Show a success message to the buyer
                    alert('Transaction completed by ' + details.payer.name.given_name + '!');
                });
            }


        }).render('#paypal-button-container');
    </script>
    



<?php 
require_once 'store/footer.php';
?>

