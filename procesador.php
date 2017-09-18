<?php
$lat=$_REQUEST("lat");
$lon=$_REQUEST("lon");
$enlace= mysqli_connect(localhost, root, armando99, ejemplo, 3306);
$cadena="INSERT INTO catastro (preio,lat,lon)VALUES(NULL,'",$lat,"','",$lon,"')";
mysqli_query($enlace, $cadena);
?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

