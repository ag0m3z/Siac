<?php
/**
 * Created by PhpStorm.
 * User: agomez
 * Date: 11/01/2018
 * Time: 01:59 AM
 */

include "../../../core/core.php";
include "../../../core/sesiones.php";

include "../../models/login/ModelLogin.php";

\core\core::HeaderContetType();

if($_SERVER["REQUEST_METHOD"] == "GET"){


    //Validar que no vengan vacios los campos de Usuario y Contraseña

    if($_GET['user']== ""){

        \core\core::JsonError("El nombre del usuario no debe estar en blanco");

    }else if($_GET['pass'] == ""){

        \core\core::JsonError("La contraseña no debe estar en blanco");
    }else{


        $Login = new \models\Login\ModelLogin();

        $Login->getLogin($_GET['user'],$_GET['pass']);

        if($Login->_confirm){

            $sesiones = new \core\sesiones();

            $sesiones->set('DataLogin',array(
                    'idusuario'=>$Login->_rows[0]['idusuario'],
                    'idempleado'=>$Login->_rows[0]['idEmpleado'],
                    'nombre'=>$Login->_rows[0]['NickName'],
                    'nickname'=>$Login->_rows[0]['NickName'],
                    'idperfil'=>$Login->_rows[0]['idperfil'],
                    'idestado'=>$Login->_rows[0]['idestado']
                )
            );

            $sesiones->set('DataHome',
                array(
                    'idusuario'=>$Login->_rows[0]['idusuario'],
                    'idempleado'=>$Login->_rows[0]['idEmpleado'],
                    'nombre'=>$Login->_rows[0]['NickName'],
                    'idperfil'=>$Login->_rows[0]['idperfil'],
                    'idestado'=>$Login->_rows[0]['idestado']
                )
            );

            echo json_encode(array(
                "result"=>true,
                "message"=>$Login->_message,
                "data"=>$Login->_rows
            ));


        }else{
            \core\core::JsonError($Login->_message);
        }

    }


}else{
    \core\core::JsonError("Metodo Invalido");
}

sleep(1);