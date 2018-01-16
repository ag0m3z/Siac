<?php
/**
 * Created by PhpStorm.
 * User: agomez
 * Date: 11/01/2018
 * Time: 03:33 AM
 */
include '../../../core/core.php';
include "../../../core/sesiones.php";

$sesiones = new \core\sesiones();
$sesiones->delete_sesion();

if(!$sesiones->getExisteSesion()){
    sleep(3);
    echo json_encode(array("result"=>true,"message"=>"Sesion eliminada","data"=>$_SESSION));
}
