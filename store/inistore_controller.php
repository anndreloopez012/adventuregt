<?php 

    $arrBanner = array();
    $var_consulta= "SELECT *
    FROM inistore 
    ORDER BY id DESC";

    $qTMP = mysqli_query($link, $var_consulta);
    while ( $rTMP = mysqli_fetch_assoc($qTMP) ){
        $arrBanner[$rTMP["id"]]["id"] = $rTMP["id"];
        $arrBanner[$rTMP["id"]]["img"] = $rTMP["img"];
        $arrBanner[$rTMP["id"]]["titulo"] = $rTMP["titulo"];
        $arrBanner[$rTMP["id"]]["descrip"] = $rTMP["descrip"];
       
    }

    mysqli_free_result($qTMP);

    $arrBannerc = array();
    $var_consulta= "SELECT *
    FROM inistore 
    ORDER BY id ";

    $qTMP = mysqli_query($link, $var_consulta);
    while ( $rTMP = mysqli_fetch_assoc($qTMP) ){
        $arrBannerc[$rTMP["id"]]["id"] = $rTMP["id"];
    }

    mysqli_free_result($qTMP);

    $arrProducto = array();
    $var_consulta= "SELECT * FROM producto ";
    
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

  
?>
