<?php
/**
 * Created by PhpStorm.
 * User: agomez
 * Date: 10/01/2018
 * Time: 11:00 PM
 */
namespace HockSiac ;

use core\sesiones;
use core\views;
use core\core;

class App{

    public static function init(){

        include "core/core.php";
        include "core/sesiones.php";
        include "core/views.php";

        $vista = new views();
        $sesiones = new sesiones();

        if($sesiones->getExisteSesion()){

            $vista->call_view(
                array(
                    'home',
                    'Home'
                )
            );

        }else{

            $vista->call_view(
                array(
                    'login',
                    'Login'
                )
            );
        }
    }
}

App::init();