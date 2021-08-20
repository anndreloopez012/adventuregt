<?php
session_start();

$mensaje="";

if(isset($_POST['btnAccion'])){
    switch($_POST['btnAccion']){
        case 'agregar':
            if(is_numeric(openssl_decrypt( $_POST['id'],COD,KEY))){
                $ID=openssl_decrypt( $_POST['id'],COD,KEY);
                $mensaje.="ID ".$ID;
              }else{
                  $mensaje.="UPPSS...... ID INCORRECTO".$ID."</br>";
                }

            if(is_string(openssl_decrypt( $_POST['nombre'],COD,KEY))){
              $NOMBRE=openssl_decrypt( $_POST['nombre'],COD,KEY);
              $mensaje.="NOMBRE ".$NOMBRE;
              }else{
                  $mensaje.="UPPSS...... NOMBRE INCORRECTO"."</br>"; break;}

            if(is_numeric(openssl_decrypt( $_POST['precio'],COD,KEY))){
              $PRECIO=openssl_decrypt( $_POST['precio'],COD,KEY);
              $mensaje.="PRECIO ".$PRECIO;
              }else{
                  $mensaje.="UPPSS...... PRECIO INCORRECTO"."</br>"; break;}

            if(is_string(openssl_decrypt( $_POST['tipo'],COD,KEY))){
              $TIPO=openssl_decrypt( $_POST['tipo'],COD,KEY);
              $mensaje.="TIPO ".$TIPO;
              }else{
                  $mensaje.="UPPSS...... TIPO INCORRECTO"."</br>"; break;}

            if(is_numeric(openssl_decrypt( $_POST['cantidad'],COD,KEY))){
              $CANTIDAD=openssl_decrypt( $_POST['cantidad'],COD,KEY);
              $mensaje.="CANTIDAD ".$CANTIDAD;
              }else{
                  $mensaje.="UPPSS...... CANTIDAD INCORRECTO"."</br>"; break;}

              if(!isset($_SESSION['CARRITO'])){
                $producto=array(
                  'ID'=>$ID,
                  'NOMBRE'=>$NOMBRE,
                  'PRECIO'=>$PRECIO,
                  'CANTIDAD'=>$CANTIDAD,
                  'TIPO'=>$TIPO
                );
                $_SESSION['CARRITO'][0]=$producto;
                $mensaje= "Producto agregado al carrito";

              }else{

                $idProductos=array_column($_SESSION['CARRITO'],"ID");

                if(in_array($ID,$idProductos)){
                  echo "<script> alert('El producto ya a sido seleccionado..')</script>";
                  $mensaje= "";
                }else{
                $NumeroProductos=count($_SESSION['CARRITO']);
                $producto=array(
                  'ID'=>$ID,
                  'NOMBRE'=>$NOMBRE,
                  'PRECIO'=>$PRECIO,
                  'CANTIDAD'=>$CANTIDAD,
                  'TIPO'=>$TIPO
                );
                $_SESSION['CARRITO'][$NumeroProductos]=$producto;
                $mensaje= "Producto agregado al carrito";
                }
              }

              //$mensaje= print_r($_SESSION,true);
              
              
              
        break;

        case "eliminar";
            if(is_numeric(openssl_decrypt( $_POST['id'],COD,KEY))){
                $ID=openssl_decrypt( $_POST['id'],COD,KEY);

                foreach($_SESSION['CARRITO'] as $indice=>$producto){
                  if($producto['ID']==$ID){
                      unset($_SESSION['CARRITO'][$indice]);
                  }

                }

            }else{
                $mensaje.="UPPSS...... ID INCORRECTO";
              }
        break;
    }
}

?>