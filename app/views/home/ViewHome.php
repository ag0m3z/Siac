<?php
/**
 * Created by PhpStorm.
 * User: agomez
 * Date: 11/01/2018
 * Time: 03:19 AM
 */

?>
<!DOCTYPE html><html><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"><?php
    //framework Bootstrap
    \core\core::includeCSS("plugins/bootstrap/css/bootstrap.css",false);
    //frameworks fontawesome fonts
    \core\core::includeCSS("plugins/fonts/font-awesome/css/font-awesome.min.css",false);
    // estilo para select buscador
    \core\core::includeCSS("plugins/select2/select2.min.css",false);
    //tema de la aplicacion
    \core\core::includeCSS("content/css/AdminLTE.css",false);
    //themas
    \core\core::includeCSS("content/css/skins/_all-skins.css",false);

    \core\core::includeCSS("plugins/pnotify/pnotify.custom.min.css",false);

    // Nombre de la pagina
    ?><title><?=\core\core::APP_NAME()?></title></head><body class="<?=\core\core::THEME_APP()?>   fixed sidebar-collapse sidebar-mini">
<div class="wrapper animated fadeIn">
    <?php include "app/layout/header.inc";
    include "app/layout/menu_principal.inc";?>
    <div class="content-wrapper">

        <div id="getBell"></div>
        <div id="show_modal"></div>
        <div id="idgeneral" ></div>
        <!-- Main content -->
        <section id="div_general" class="content  ">

            <?php  //var_dump($_SESSION); ?>

            <div class="row row-sm animated fadeInLeft">

                <div class="col-lg-3 col-xs-6 hoverable">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>00</h3>
                            <p>Clientes</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user-plus"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mas Información  <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>00</h3>
                            <p>Deudas</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-dollar"></i>
                        </div>
                        <a href="#" data-toggle="tooltip" data-target="top" title="Prueba" class="small-box-footer">Mas Información <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-orange">
                        <div class="inner">
                            <h3>00</h3>
                            <p>No Vencidas</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-bar-chart"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mas Información  <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>00</h3>
                            <p>Pagos</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-money"></i>
                        </div>
                        <a href="#" data-toggle="modal" data-target="#mdl_nueva_categoria_producto" class="small-box-footer">Mas Información<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->

            </div><!-- /.row -->

            <div class="row row-sm hidden">
                <div class="col-md-6">

                    <div class="row row-sm">
                        <div class="col-md-6">
                            <!-- Widget: user widget style 1 -->
                            <div class="box box-success ">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="box-header bg-success">
                                    Top 5 Pendientes
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>
                                        <li><a href="#">Tasks <span class="pull-right badge bg-aqua">05</span></a></li>
                                        <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>
                                        <li><a href="#">Followers <span class="pull-right badge bg-red">42</span></a></li>
                                    </ul>
                                </div>
                            </div><!-- /.widget-user -->
                        </div><!-- /.col -->
                        <div class="col-md-6">
                            <!-- Widget: user widget style 1 -->
                            <div class="box box-danger ">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="box-header bg-danger">
                                    Top 5 Pendientes
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>
                                        <li><a href="#">Tasks <span class="pull-right badge bg-aqua">05</span></a></li>
                                        <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>
                                        <li><a href="#">Followers <span class="pull-right badge bg-red">42</span></a></li>
                                    </ul>
                                </div>
                            </div><!-- /.widget-user -->
                        </div><!-- /.col -->
                        <div class="col-md-6">
                            <!-- Widget: user widget style 1 -->
                            <div class="box box-warning ">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="box-header bg-warning">
                                    Top 5 Pendientes
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>
                                        <li><a href="#">Tasks <span class="pull-right badge bg-aqua">05</span></a></li>
                                        <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>
                                        <li><a href="#">Followers <span class="pull-right badge bg-red">42</span></a></li>
                                    </ul>
                                </div>
                            </div><!-- /.widget-user -->
                        </div><!-- /.col -->
                        <div class="col-md-6">
                            <!-- Widget: user widget style 1 -->
                            <div class="box box-info ">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="box-header bg-info">
                                    Top 5 Pendientes
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>
                                        <li><a href="#">Tasks <span class="pull-right badge bg-aqua">05</span></a></li>
                                        <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>
                                        <li><a href="#">Followers <span class="pull-right badge bg-red">42</span></a></li>
                                    </ul>
                                </div>
                            </div><!-- /.widget-user -->
                        </div><!-- /.col -->

                    </div>
                </div>

                <div class="col-md-6">
                    <div id="grafica_sucursales"></div>
                </div>

            </div>

        </section>
        <!-- /.content -->

    </div>
    <?php //include "app/layout/pie_de_pagina.inc"?>
    <?php include "app/layout/menu_right.inc"?>
</div>
<?php
\core\core::includeJS("plugins/jQuery/",true);
\core\core::includeJS("content/js/app.js",false);
\core\core::includeJS("plugins/jQueryUI/jQuery-ui.js",false);
\core\core::includeJS("plugins/bootstrap/js/bootstrap.js",false);
\core\core::includeJS("plugins/bootstrap/js/bootbox.min.js",false);
//\core\core::includeJS("plugins/slimScroll/jquery.slimscroll.min.js",false);

\core\core::includeJS("plugins/datatables/jquery.dataTables.js",false);
\core\core::includeJS("plugins/datatables/dataTables.bootstrap.js",false);
\core\core::includeJS("plugins/datatables/extensions/TableTools/js/dataTables.tableTools.js",false);

\core\core::includeJS("plugins/select2/select2.full.min.js",false);
\core\core::includeJS("plugins/pnotify/pnotify.custom.min.js",false);

\core\core::includeJS("content/js/iKroAnimate.js",false);
\core\core::includeJS("content/js/jsGeneral.js",false);
?>
<script language="JavaScript">
    $(document).ready(function(){

        $(".select2").select2();
        $("#head_buscar_cliente").focus();

        $('.sidebar-menu li').click(
            function () {
                $(".sidebar-menu li").removeClass("active");
                $(this).addClass("active");
            }
        );

    });
</script>
</body>
</html>

