<?php 

//ARREGLO PARA MOSTRAR EL CONTENIDO DEL PRODUCTO INICIAL
$arrContent = array();
$intId = $_GET["id"];
$var_consulta= "SELECT
p.id, p.nombre, p.descrip, p.videou, ct.id_producto,
 ct.titulo
FROM producto p
LEFT JOIN content_t ct
ON ct.id_producto=p.id
WHERE p.id = '$intId' LIMIT 1 
";

$qTMP = mysqli_query($link, $var_consulta);
while ( $rTMP = mysqli_fetch_assoc($qTMP) ){
    $arrContent[$rTMP["id"]]["id"] = $rTMP["id"];
    $arrContent[$rTMP["id"]]["nombre"] = $rTMP["nombre"];
    $arrContent[$rTMP["id"]]["descrip"] = $rTMP["descrip"];
    $arrContent[$rTMP["id"]]["videou"] = $rTMP["videou"];
    $arrContent[$rTMP["id"]]["titulo"] = $rTMP["titulo"];
    
}

//ARREGLO DEL MENU PARA TITULOS Y SUBTITULOS

$arrContentd = array();
$var_consulta= "SELECT
ct.id, cs.id csid, cs.id_content_t, ct.titulo, cs.subtitulo
FROM content_t ct
JOIN content_s cs
ON cs.id_content_t=ct.id
WHERE ct.id_producto='$intId'
";

$qTMP = mysqli_query($link, $var_consulta);
while ( $rTMP = mysqli_fetch_assoc($qTMP) ){
    $arrContentd[$rTMP["id"]]["id"] = $rTMP["id"];
    $arrContentd[$rTMP['id']]['titulo']['texto'] = $rTMP['titulo'];
    $arrContentd[$rTMP['id']]['titulo']['subtitulos'][$rTMP['csid']] = $rTMP['subtitulo'];
}

mysqli_free_result($qTMP);

//ARREGLO PARA LOS COMENTARIOS
    $arrComent = array();
    $var_consulta= "SELECT
    u.id, u.username, c.id cid, c.id_user, c.comentario
    FROM users u
    LEFT JOIN comentarios c
    ON c.id_user=u.id";
    
    $qTMP = mysqli_query($link, $var_consulta);
    while ( $rTMP = mysqli_fetch_assoc($qTMP) ){
        $arrComent[$rTMP["cid"]]["cid"] = $rTMP["cid"];
        $arrComent[$rTMP["cid"]]["username"] = $rTMP["username"];
        $arrComent[$rTMP["cid"]]["id_user"] = $rTMP["id_user"];
        $arrComent[$rTMP["cid"]]["comentario"] = $rTMP["comentario"];
     
    }


mysqli_free_result($qTMP);


//ARREGLO PARA MOSTRAR LOS PRODUCTOS IGUALES AL PRODUCTO SELECCIONADO
$arrProducto = array();
$var_consulta= "SELECT *
FROM producto 
ORDER BY id
DESC LIMIT 4";

$qTMP = mysqli_query($link, $var_consulta);
while ( $rTMP = mysqli_fetch_assoc($qTMP) ){
    $arrProducto[$rTMP["id"]]["id"] = $rTMP["id"];
    $arrProducto[$rTMP["id"]]["nombre"] = $rTMP["nombre"];
    $arrProducto[$rTMP["id"]]["precio"] = $rTMP["precio"];
    $arrProducto[$rTMP["id"]]["descrip"] = $rTMP["descrip"];
    $arrProducto[$rTMP["id"]]["dificultad"] = $rTMP["dificultad"];
    $arrProducto[$rTMP["id"]]["n_dificultad"] = $rTMP["n_dificultad"];
    $arrProducto[$rTMP["id"]]["c_dificultad"] = $rTMP["c_dificultad"];
    $arrProducto[$rTMP["id"]]["img"] = $rTMP["img"];
    $arrProducto[$rTMP["id"]]["tipo"] = $rTMP["tipo"];
    $arrProducto[$rTMP["id"]]["categori"] = $rTMP["categori"];
    $arrProducto[$rTMP["id"]]["categorib"] = $rTMP["categorib"];
}

mysqli_free_result($qTMP);


?>