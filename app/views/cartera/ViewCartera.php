<?php
/**
 * Created by PhpStorm.
 * User: agomez
 * Date: 11/01/2018
 * Time: 06:11 PM
 */


include "../../../core/core.php";
include "../../../core/sesiones.php";
include "../../../core/contenido.php";

$connect = new \core\contenido();

$connect->getValidaConexion();
?>
<div class="box box-success">
    <div class="box-header padding-x3">
        <button class="btn btn-sm btn-default">Empresas</button> <button class="btn btn-sm btn-default">Clientes</button>
    </div>
    <div class="box-body">

    </div>
</div>