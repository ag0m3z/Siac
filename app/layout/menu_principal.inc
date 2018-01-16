<?php
/**
 * Created by PhpStorm.
 * User: alejandro.gomez
 * Date: 06/01/2017
 * Time: 01:07 PM
 */
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- sidebar menu: : style can be found in sidebar.less -->

        <ul class="sidebar-menu">

            <li class="active"><a href="#"onclick="location.reload()"><i class="fa fa-dashboard  "></i> <span>Dashboard</span></a></li>
            <li><a href="#" onclick="getMenu(2,0)"><i class="fa fa-desktop  "></i> <span>Supervisor</span> </a></li>

            <li class="treeview hidden">
                <a href="#">
                    <i class="fa fa-bookmark"></i>
                    <span>Cartera</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Empresas</a></li>
                    <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Clientes</a></li>
                </ul>
            </li>
            <li><a href="#" onclick="getMenu(3,0)"><i class="fa fa-bookmark-o  "></i> <span>Cartera</span> </a></li>
            <li><a href="#" onclick="getMenu(4,0)"><i class="fa fa-table  "></i> <span>Gestion</span> </a></li>
            <li><a href="#" onclick="getMenu(5,0)"><i class="fa fa-line-chart  "></i> <span>Reportes</span> </a></li>

            <?php
            $OptionView = 0;
            for($i=0;$i<count($_SESSION['data_menu']);$i++){

                $NombreModulo = $_SESSION['data_menu'][$i]['nombre'];
                $FaIcon = $_SESSION['data_menu'][$i]['icon'];
                $ScriptEventOnClick = $_SESSION['data_menu'][$i]['onclick'];

                $OptionView = ($_SESSION['data_menu'][$i]['consultar'] + $_SESSION['data_menu'][$i]['agregar'] + $_SESSION['data_menu'][$i]['editar'] + $_SESSION['data_menu'][$i]['eliminar']);

                if($OptionView > 0){
                    echo '<li><a href="#" '.$ScriptEventOnClick.' ><i class="fa '.$FaIcon.'"></i> <span>'.$NombreModulo.'</span>  </a> </li>';
                }

            }


            ?>
            <li><a href="#" onclick="getMenu(7,0)"><i class="fa fa-gears  "></i> <span>Configuración</span>  </a></li>
            <!--<li><a href="#" onclick="gn_menu_principal(5,5)"><i class="fa fa-database  "></i> <span>Almacen</span> </a></li>
            <li><a href="#" onclick="gn_menu_principal(6,6)"><i class="fa fa-truck  "></i> <span>Compras</span> </a></li>
            <li><a href="#" onclick="gn_menu_principal(7,7)"><i class="fa fa-list-alt  "></i> <span>Catálogos</span>  </a></li>
            <li><a href="#" onclick="gn_menu_principal(14,14)"><i class="fa fa-gears  "></i> <span>Configuración</span>  </a></li>-->

            <li><a href="#" onclick="gnlogin_out()"><i class="fa fa-sign-out text-red"></i>  <span>Salir</span><i class="fa fa-close text-red pull-right"></i></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
