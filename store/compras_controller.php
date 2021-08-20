<?php 

$strUserName = $_SESSION["username"];

$arrCompra = array();
$var_consulta= "SELECT
p.id, p.nombre, p.dificultad, p.tipo, dv.id_status, dv.id_user, dv.precio_uni
FROM producto p
JOIN detalle_venta dv
ON dv.id_producto=p.id
WHERE dv.id_user= '{$strUserName}'";

//$var_resultado = $conexion->query($var_consulta);
$qTMP = mysqli_query($link, $var_consulta);
while ( $rTMP = mysqli_fetch_assoc($qTMP) ){
    $arrCompra[$rTMP["id"]]["id"] = $rTMP["id"];
    $arrCompra[$rTMP["id"]]["nombre"] = $rTMP["nombre"];
    $arrCompra[$rTMP["id"]]["dificultad"] = $rTMP["dificultad"];
    $arrCompra[$rTMP["id"]]["tipo"] = $rTMP["tipo"];
    $arrCompra[$rTMP["id"]]["id_status"] = $rTMP["id_status"];
    $arrCompra[$rTMP["id"]]["id_user"] = $rTMP["id_user"];
    $arrCompra[$rTMP["id"]]["precio"] = $rTMP["precio_uni"];
}
mysqli_free_result($qTMP);

?>