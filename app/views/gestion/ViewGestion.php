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

<div class="row row-xs">
    <div class="col-md-8">

        <div class="row row-xs">
            <div class="col-md-1">
                <div class="form-group">
                    <small>id</small>
                    <input class="form-control input-sm">
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group">
                    <small>id cliente</small>
                    <input class="form-control input-sm">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <small>No. Cuenta</small>
                    <input class="form-control input-sm">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <small>Fecha Asignacion</small>
                    <input class="form-control input-sm">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <small>Tipo Cliente</small>
                    <input class="form-control input-sm">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <small>Estatus</small>
                    <input class="form-control input-sm">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <small>Fecha Vencimiento</small>
                    <input class="form-control input-sm">
                </div>
            </div>
        </div>

        <div class="row row-xs">
            <div class="col-md-3">
                <div class="form-group">
                    <small>Cliente</small>
                    <input class="form-control input-sm">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <small>Tipo Cartera</small>
                    <input class="form-control input-sm">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <small>Referencia</small>
                    <input class="form-control input-sm">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <small>Importante</small>
                    <textarea rows="1" class="form-control input-sm"></textarea>
                </div>
            </div>
        </div>

        <div class="row row-xs">
            <div class="col-md-8  table-responsive">
                <table>
                    <tr>
                        <td style="width: 70px"></td>
                        <td class="small">Nombre</td>
                        <td class="small">Tel. Casa</td>
                        <td class="small">Tel.Movil</td>
                        <td class="small">Tel. Oficina</td>
                    </tr>
                    <tr>
                        <td class="small">Titular</td>
                        <td><input class="form-control input-sm"></td>
                        <td><input class="form-control input-sm"></td>
                        <td><input class="form-control input-sm"></td>
                        <td><input class="form-control input-sm"></td>
                    </tr>
                    <tr>
                        <td class="small">Conyuge</td>
                        <td><input class="form-control input-sm"></td>
                        <td><input class="form-control input-sm"></td>
                        <td><input class="form-control input-sm"></td>
                        <td><input class="form-control input-sm"></td>
                    </tr>
                    <tr>
                        <td class="small">Aval</td>
                        <td><input class="form-control input-sm"></td>
                        <td><input class="form-control input-sm"></td>
                        <td><input class="form-control input-sm"></td>
                        <td><input class="form-control input-sm"></td>
                    </tr>
                    <tr>
                        <td class="small">Referencia 1</td>
                        <td><input class="form-control input-sm"></td>
                        <td><input class="form-control input-sm"></td>
                        <td><input class="form-control input-sm"></td>
                        <td><input class="form-control input-sm"></td>
                    </tr>
                    <tr>
                        <td class="small">Referencia 1</td>
                        <td><input class="form-control input-sm"></td>
                        <td><input class="form-control input-sm"></td>
                        <td><input class="form-control input-sm"></td>
                        <td><input class="form-control input-sm"></td>
                    </tr>
                    <tr>
                        <td class="small">Referencia 1</td>
                        <td><input class="form-control input-sm"></td>
                        <td><input class="form-control input-sm"></td>
                        <td><input class="form-control input-sm"></td>
                        <td><input class="form-control input-sm"></td>
                    </tr>
                    <tr>
                        <td class="small">Referencia 1</td>
                        <td><input class="form-control input-sm"></td>
                        <td><input class="form-control input-sm"></td>
                        <td><input class="form-control input-sm"></td>
                        <td><input class="form-control input-sm"></td>
                    </tr>
                    <tr>
                        <td class="small">Comentarios</td>
                        <td colspan="4"><textarea rows="5" class="form-control input-sm"></textarea></td>
                    </tr>
                </table>
            </div>

            <div class="col-md-4 bg-info">
                <table>
                    <tr>
                        <td class="small" style="width: 50px">Ext</td>
                        <td class="small" style="width: 120px">Tel.Bloqueo</td>
                        <td class="small">Dictamen de la cuenta</td>
                    </tr>
                    <tr>
                        <td><input class="form-control input-sm"></td>
                        <td><input class="form-control input-sm"></td>
                        <td><select class="form-control input-sm"></select></td>
                    </tr>
                </table>

                <small class="text-bold">Demograficos</small>
                <div class="col-md-12 no-padding">
                    <div class="form-group no-padding no-margin">
                        <small>Dirección</small>
                        <input class="form-control input-sm">
                    </div>
                </div>
                <div class="col-md-12 no-padding">
                    <div class="form-group no-padding no-margin">
                        <small>Dirección</small>
                        <input class="form-control input-sm">
                    </div>
                </div>
                <div class="col-md-12 no-padding">
                    <div class="form-group no-padding no-margin">
                        <small>Dirección</small>
                        <input class="form-control input-sm">
                    </div>
                </div>
                <div class="col-md-12 no-padding">
                    <div class="form-group no-padding no-margin">
                        <small>Dirección</small>
                        <input class="form-control input-sm">
                    </div>
                </div>
                <div class="col-md-12 no-padding">
                    <div class="form-group no-padding no-margin">
                        <small>Dirección</small>
                        <input class="form-control input-sm">
                    </div>
                </div>

            </div>
        </div>

        <div class="row row-xs">
            <div class="col-md-12">
                <table class="table table-bordered teble-condensed table-striped">
                    <thead>
                    <tr class="bg-warning">
                        <th>Fecha</th>
                        <th>Act Code</th>
                        <th>Gestor</th>
                        <th>Fch Promesa</th>
                        <th>Monto</th>
                        <th>Resultado</th>
                        <th>Telefono</th>
                        <th>Comentarios</th>
                        <th>KP</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1212121212</td>
                        <td>1212121212</td>
                        <td>1212121212</td>
                        <td>1212121212</td>
                        <td>1212121212</td>
                        <td>1212121212</td><td>1212121212</td>
                        <td>1212121212</td><td>1212121212</td>
                    </tr>
                    <tr>
                        <td>1212121212</td>
                        <td>1212121212</td>
                        <td>1212121212</td>
                        <td>1212121212</td>
                        <td>1212121212</td>
                        <td>1212121212</td><td>1212121212</td>
                        <td>1212121212</td><td>1212121212</td>
                    </tr>
                    <tr>
                        <td>1212121212</td>
                        <td>1212121212</td>
                        <td>1212121212</td>
                        <td>1212121212</td>
                        <td>1212121212</td>
                        <td>1212121212</td><td>1212121212</td>
                        <td>1212121212</td><td>1212121212</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <div class="col-md-4">

        <div class="row row-sm">

            <div class="col-md-6">
                <div class="box box-info">
                    <div class="box-header padding-x3">
                        <small class="text-bold">Estrategias</small>
                    </div>
                    <div class="box-body padding-x3">
                        <address>
                            Gestor: <span class="text-red">Sin Agente</span><br>
                            Compañia: <span class="text-red">Sin Compañia</span> <br>
                            Prioridad: <span class="text-red">Sin Gestion</span> <br>
                        </address>
                    </div>
                </div>
                <div class="box box-info">
                    <div class="box-header padding-x3">
                        <small class="text-bold">Saldos</small>
                    </div>
                    <div class="box-body padding-x3">
                        <table class="table">
                            <tr>
                                <td>Saldo 30%</td>
                                <td>Fecha Ult. Pago</td>
                            </tr>
                            <tr>
                                <td>Saldo 30%</td>
                                <td>Fecha Ult. Pago</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box box-info">
                    <div class="box-body padding-x3">

                        <div class="btn btn-app">
                            Gestiones<br>
                            <b>0</b>
                        </div>
                        <div class="btn btn-app">
                            Gestiones<br>
                            <b>0</b>
                        </div><div class="btn btn-app">
                            Gestiones<br>
                            <b>0</b>
                        </div><div class="btn btn-app">
                            Gestiones<br>
                            <b>0</b>
                        </div>

                    </div>
                </div>
            </div>



        </div>

        <div class="row row-sm">

            <div class="col-md-6">
                <div class="box box-info">
                    <div class="box-body">
                        <address>
                            Gestor: Sin Agente<br>
                            Gestor: Sin Agente<br>
                            Gestor: Sin Agente<br>
                        </address>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box box-info">
                    <div class="box-body">
                        <address>
                            Gestor: Sin Agente<br>
                            Gestor: Sin Agente<br>
                            Gestor: Sin Agente<br>
                        </address>
                    </div>
                </div>
            </div>



        </div>


    </div>
</div>