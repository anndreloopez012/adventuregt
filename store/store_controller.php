<?php 

    $arrProducto = array();
    $intCategoria = $_GET["categoria"];
    $var_consulta= "SELECT * FROM producto
    WHERE categori = '$intCategoria' ";
    
    $qTMP = mysqli_query($link, $var_consulta);
    while ( $rTMP = mysqli_fetch_assoc($qTMP) ){
        $arrProducto[$rTMP["id"]]["id"] = $rTMP["id"];
        $arrProducto[$rTMP["id"]]["nombre"] = $rTMP["nombre"];
        $arrProducto[$rTMP["id"]]["precio"] = $rTMP["precio"];
        $arrProducto[$rTMP["id"]]["descrip"] = $rTMP["descrip"];
        $arrProducto[$rTMP["id"]]["dificultad"] = $rTMP["dificultad"];
        $arrProducto[$rTMP["id"]]["n_dificultad"] = $rTMP["n_dificultad"];
        $arrProducto[$rTMP["id"]]["c_dificultad"] = $rTMP["c_dificultad"];
        $arrProducto[$rTMP["id"]]["artista"] = $rTMP["artista"];
        $arrProducto[$rTMP["id"]]["conceptos"] = $rTMP["conceptos"];
        $arrProducto[$rTMP["id"]]["img"] = $rTMP["img"];
        $arrProducto[$rTMP["id"]]["tipo"] = $rTMP["tipo"];
        $arrProducto[$rTMP["id"]]["categori"] = $rTMP["categori"];
        $arrProducto[$rTMP["id"]]["categorib"] = $rTMP["categorib"];
    }

    mysqli_free_result($qTMP);

    $arrMenu = array();
    $var_consulta= "SELECT
                    m.id, m.categoria, s.categoriab
                    FROM menu m
                    LEFT JOIN submenu s
                    ON s.id_menu=m.id";

    //$var_resultado = $conexion->query($var_consulta);
    $qTMP = mysqli_query($link, $var_consulta);
    while ( $rTMP = mysqli_fetch_assoc($qTMP) ){
        $arrMenu[$rTMP["id"]]["id"] = $rTMP["id"];
        $arrMenu[$rTMP["id"]]["categoria"] = $rTMP["categoria"];
        $arrMenu[$rTMP["id"]]["categoriab"] = $rTMP["categoriab"];
    }
    mysqli_free_result($qTMP);

?>
