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

<div class="modal fade" id="mdlNuevaGestionCallCenter">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Nueva Gestion Call Center
            </div>
            <div class="modal-body">

                <div class="row row-xs">

                    <div class="col-sm-6">
                        <div class="form-group">
                            Codigo Accion
                            <input class="form-control input-sm">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            Fecha y Hora Promesa
                            <input class="form-control input-sm">
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            Monto promesa
                            <input class="form-control input-sm">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            Fecha revision
                            <input class="form-control input-sm">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            Telefono uso
                            <input class="form-control input-sm">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            Telefono
                            <input class="form-control input-sm">
                        </div>
                    </div>

                    <div class="col-sm-8">
                        <div class="form-group">
                            Resultado de Llamada
                            <input class="form-control input-sm">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            Recordatorio
                            <select class="form-control input-sm">
                                <option value="1">NO</option>
                                <option value="2">SI</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            Origen de Llamada
                            <input class="form-control input-sm">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            Origen Inbound
                            <input class="form-control input-sm">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            Comentarios
                            <textarea class="form-control input-sm"></textarea>
                        </div>
                    </div>

                </div>

            </div>
            <div class="modal-footer">

                <button class="btn btn-sm btn-primary">Guardar</button>
                <button class="btn btn-sm btn-danger" data-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>

<div class="row row-xs">

    <div class="col-sm-8">


        <div class="row row-xs">

            <div class="col-sm-12">

                <button onclick="getMenu(4,0)" class="btn btn-default btn-xs">Regresar</button>
                <button onclick="setOpenModal('mdlNuevaGestionCallCenter')" class="btn btn-default btn-xs">Nuevo</button>

                <div class="btn hidden btn-group">
                    <button class="btn btn-default btn-xs">1</button>
                    <button class="btn btn-default btn-xs">1</button>
                    <button class="btn btn-default btn-xs">1</button>
                    <button class="btn btn-default btn-xs">1</button>
                </div>

            </div>

            <div class="col-sm-1">
                <div class="form-group">
                    <small>id</small>
                    <input class="form-control input-sm" />
                </div>
            </div>
            <div class="col-sm-1">
                <div class="form-group">
                    <small>id Cte.</small>
                    <input class="form-control input-sm" />
                </div>
            </div>

            <div class="col-sm-1">
                <div class="form-group">
                    <small>Tipo</small>
                    <input class="form-control input-sm" />
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                   <small>No. Cuenta</small>
                    <input class="form-control input-sm" />
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group">
                    <small>Fecha Asignacion</small>
                    <input class="form-control input-sm" />
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group">
                    <small>Fecha Vencimieno</small>
                    <input class="form-control input-sm" />
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group">
                    <small>Estatus</small>
                    <input class="form-control bg-alert1  input-sm" />
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <small>Cliente</small>
                    <input class="form-control input-sm">
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group">
                    <small>Tipo Cartera</small>
                    <input class="form-control bg-alert2  input-sm" />
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <small>Referencia</small>
                    <input class="form-control bg-alert2  input-sm" />
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group">
                    <small>Días Venc.</small>
                    <input class="form-control input-sm">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <small>Bucket</small>
                    <input class="form-control input-sm">
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <small>Importante</small>
                    <textarea class="form-control bg-alert2 input-sm" rows="1"></textarea>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <small>Gestor</small>
                    <input class="form-control text-bold text-black bg-teal no-border input-sm">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <small>Campaña</small>
                    <input class="form-control text-bold text-black bg-teal no-border input-sm">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <small>Prioridad</small>
                    <input class="form-control text-bold text-black bg-teal no-border input-sm">
                </div>
            </div>


        </div>

        <div class="row row-xs">

            <div class="col-sm-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#general" data-toggle="tab"><i class="fa fa-list"></i> Datos Generales</a></li>
                        <li><a href="#convenios" data-toggle="tab"><i class="fa fa-file-archive-o"></i> Convenios</a></li>
                        <li><a href="#gestion_visita" data-toggle="tab"><i class="fa fa-truck"></i> Gestion Visitas</a> </li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="general">

                            <div class="row row-xs">
                                <div class="col-sm-6">
                                    <table>
                                        <tr>
                                            <td style="width: 60px"></td>
                                            <td class="small">Nombre</td>
                                            <td class="small">Tel. Casa</td>
                                            <td class="small">Tel.Movil</td>
                                            <td class="small">Tel. Oficina</td>
                                        </tr>
                                        <tr>
                                            <td class="small">Titular</td>
                                            <td style="width: 120px"><input class="form-control input-sm"></td>
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
                                            <td class="small">Comentarios</td>
                                            <td colspan="4">
                                                <textarea class="form-control input-sm" rows="1"></textarea>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-sm-6">
                                    <table>
                                        <td style="width: 50px"></td>
                                        <td class="small">Nombre</td>
                                        <td class="small">Tel. Casa</td>
                                        <td class="small">Tel.Movil</td>
                                        <td class="small">Tel. Oficina</td>
                                        <tr>
                                            <td class="small">Ref. 1</td>
                                            <td style="width: 120px"><input class="form-control input-sm"></td>
                                            <td><input class="form-control input-sm"></td>
                                            <td><input class="form-control input-sm"></td>
                                            <td><input class="form-control input-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="small">Ref. 2</td>
                                            <td><input class="form-control input-sm"></td>
                                            <td><input class="form-control input-sm"></td>
                                            <td><input class="form-control input-sm"></td>
                                            <td><input class="form-control input-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="small">Ref. 3</td>
                                            <td><input class="form-control input-sm"></td>
                                            <td><input class="form-control input-sm"></td>
                                            <td><input class="form-control input-sm"></td>
                                            <td><input class="form-control input-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="small">Ref. 4</td>
                                            <td><input class="form-control input-sm"></td>
                                            <td><input class="form-control input-sm"></td>
                                            <td><input class="form-control input-sm"></td>
                                            <td><input class="form-control input-sm"></td>
                                        </tr>

                                    </table>
                                </div>

                                <div class="col-sm-12">
                                    <table class="table table-bordered table-condensed table-hover table-striped">

                                        <thead>
                                        <tr>
                                            <th class="small">Fecha</th>
                                            <th class="small">Act.Code</th>
                                            <th class="small">Gestor</th>
                                            <th class="small">Fch.Promesa</th>
                                            <th class="small">Monto</th>
                                            <th class="small">Resultado</th>
                                            <th class="small">Tel</th>
                                            <th class="small">Teléfono</th>
                                            <th class="small">Comentarios</th>
                                            <th class="small">KP</th>
                                        </tr>
                                        </thead>

                                    </table>
                                </div>

                            </div>

                        </div>

                        <div class=" tab-pane" id="convenios">

                            Convenios

                        </div>
                        <div class=" tab-pane" id="gestion_visita">

                            Gestion Visita

                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <div class="col-sm-4">

        <div class="row row-sm">
            <div class="col-sm-12">
                <div class="box box-success">

                    <div class="box-body padding-x3">

                        <div class="row row-xs">
                            <div class="col-sm-6">


                                <b class="small">Saldos</b><br>
                                <div class="row row-xs">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <small>Saldo 30%</small>
                                            <input class="form-control input-sm">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <small>Fecha ult. pago</small>
                                            <input class="form-control input-sm">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <small>Saldo real</small>
                                            <input class="form-control input-sm">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <small>Minimo</small>
                                            <input class="form-control input-sm">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <small>MV SGC</small>
                                            <input class="form-control input-sm">
                                        </div>
                                    </div>
                                </div>

                                <b class="small">Referencia de Pago</b><br>
                                <div class="row row-xs">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control bg-alert2 input-sm">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control bg-alert2 input-sm">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control bg-alert2 input-sm">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control bg-alert2 input-sm">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control bg-alert2 input-sm">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control bg-alert2 input-sm">
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="btn bg-green btn-app">
                                    Gestiones<br>
                                    <b>0</b>
                                </div>
                                <div class="btn bg-light-blue btn-app">
                                    Gestiones<br>
                                    <b>0</b>
                                </div><div class="btn bg-red btn-app">
                                    Gestiones<br>
                                    <b>0</b>
                                </div><div class="btn bg-orange btn-app">
                                    Gestiones<br>
                                    <b>0</b>
                                </div>

                                <table class="table table-bordered table-condensed">
                                    <thead>
                                    <tr>
                                        <th>fecha_pago</th>
                                        <th>monto_pago</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>


                            </div>
                        </div>





                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="box box-success">
                    <div class="box-header padding-x3">
                        <b class="small"> (-) Demograficos</b>
                    </div>
                    <div class="box-body bg-light-blue padding-x3">

                        <div class="row row-sm">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <small>Dirección</small>
                                    <input class="form-control input-sm" />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <small>Colonia</small>
                                    <input class="form-control input-sm" />
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <small>Entre Calles</small>
                                    <input class="form-control input-sm" />
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <small>Ciudad</small>
                                    <input class="form-control input-sm" />
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <small>Estado</small>
                                    <input class="form-control input-sm" />
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <small>CP</small>
                                    <input class="form-control input-sm" />
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <small>Pais</small>
                                    <input class="form-control input-sm" />
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <small>Ocupación</small>
                                    <input class="form-control input-sm" />
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <small>Email</small>
                                    <input class="form-control input-sm" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>