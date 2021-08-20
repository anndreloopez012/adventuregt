<?php 

$strUserName = $_SESSION["username"];

$arrProducto = array();
$var_consulta= "SELECT
p.id, p.nombre, p.dificultad, p.c_dificultad, p.n_dificultad, p.tipo, p.img, dv.id_status, dv.id_user
FROM producto p
JOIN detalle_venta dv
ON dv.id_producto=p.id
WHERE dv.id_user= '{$strUserName}' AND dv.id_status='aprobado' AND p.tipo='online'";

//$var_resultado = $conexion->query($var_consulta);
$qTMP = mysqli_query($link, $var_consulta);
while ( $rTMP = mysqli_fetch_assoc($qTMP) ){
    $arrProducto[$rTMP["id"]]["id"] = $rTMP["id"];
    $arrProducto[$rTMP["id"]]["nombre"] = $rTMP["nombre"];
    $arrProducto[$rTMP["id"]]["dificultad"] = $rTMP["dificultad"];
    $arrProducto[$rTMP["id"]]["c_dificultad"] = $rTMP["c_dificultad"];
    $arrProducto[$rTMP["id"]]["n_dificultad"] = $rTMP["n_dificultad"];
    $arrProducto[$rTMP["id"]]["tipo"] = $rTMP["tipo"];
    $arrProducto[$rTMP["id"]]["img"] = $rTMP["img"];
    $arrProducto[$rTMP["id"]]["id_status"] = $rTMP["id_status"];
    $arrProducto[$rTMP["id"]]["id_user"] = $rTMP["id_user"];
}
mysqli_free_result($qTMP);

?>