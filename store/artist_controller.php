<?php 
 $arrProducto = array();
 $var_consulta= "SELECT * FROM instructores ORDER BY id DESC";
 
 $qTMP = mysqli_query($link, $var_consulta);
 while ( $rTMP = mysqli_fetch_assoc($qTMP) ){
     $arrProducto[$rTMP["id"]]["id"] = $rTMP["id"];
     $arrProducto[$rTMP["id"]]["nombre"] = $rTMP["nombre"];
     $arrProducto[$rTMP["id"]]["img"] = $rTMP["img"];
     $arrProducto[$rTMP["id"]]["foto"] = $rTMP["foto"];
     $arrProducto[$rTMP["id"]]["descrip"] = $rTMP["descrip"];
     $arrProducto[$rTMP["id"]]["instagram"] = $rTMP["instagram"];
     $arrProducto[$rTMP["id"]]["gmail"] = $rTMP["gmail"];
     $arrProducto[$rTMP["id"]]["whatsapp"] = $rTMP["whatsapp"];
     $arrProducto[$rTMP["id"]]["facebook"] = $rTMP["facebook"];
 }

 mysqli_free_result($qTMP);
?>