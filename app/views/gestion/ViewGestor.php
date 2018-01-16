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
<div class="row row-sm">
    <div class="col-md-8">
        <div class="box box-success">
            <div class="box-header padding-x3">
                <h3 class="box-title"><i class="fa fa-list"></i> Gestiones Asignadas</h3>
            </div>
            <div class="box-body no-padding table-responsive">
                <table class="table table-bordered table-condensed table-hover">
                    <thead>
                    <tr>
                        <th colspan="2" class="text-center">id</th>
                        <th>Empresa</th>
                        <th>Cliente</th>
                        <th>Estatus</th>
                        <th>Deuda</th>
                        <th>Fecha Registro</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <button onclick="getGestor(1)" class="btn btn-default btn-xs"><i class="fa fa-folder"></i></button>
                            <button onclick="getGestor(2)" class="btn btn-default btn-xs"><i class="fa fa-folder-open"></i></button>
                            <button class="btn btn-default btn-xs"><i class="fa fa-comment"></i></button>
                        </td>
                        <td>00001</td>
                        <td>GO Credit</td>
                        <td>Pedro Luis Gomez Barron</td>
                        <td>Vigente</td>
                        <td>$ 5,234.00</td>
                        <td>2018-01-03</td>
                    </tr>
                    <tr>
                        <td>
                            <button onclick="getGestor(1)" class="btn btn-default btn-xs"><i class="fa fa-folder"></i></button>
                            <button onclick="getGestor(2)" class="btn btn-default btn-xs"><i class="fa fa-folder-open"></i></button>
                            <button class="btn btn-default btn-xs"><i class="fa fa-comment"></i></button>
                        </td>
                        <td>00001</td>
                        <td>GO Credit</td>
                        <td>Pedro Luis Gomez Barron</td>
                        <td>Credito Cerrado</td>
                        <td>$ 5,234.00</td>
                        <td>2018-01-03</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="box box-info">
            <div class="box-header padding-x3">
                <div class="box-title"><i class="fa fa-comment"></i> Ultimas Gestiones</div>
            </div>
            <div class="box-body">

            </div>
        </div>
    </div>

</div>