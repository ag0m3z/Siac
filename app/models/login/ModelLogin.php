<?php
/**
 * Created by PhpStorm.
 * User: agomez
 * Date: 11/01/2018
 * Time: 02:07 AM
 */

namespace models\Login;

use core\contenido;

include "../../../core/contenido.php";

class ModelLogin extends contenido
{
    public $_user;
    public $_pass;


    public function getLogin($Usuario = null,$Pass = null){

        $this->_user = $this->get_sanatiza($Usuario);
        $this->_pass = $this->get_sanatiza($Pass);


        $this->_query = "CALL spLoginIn('$this->_user','$this->_pass')";
        $this->get_result_query(true);

        if(count($this->_rows)>0){

            $this->_confirm = true;
            $this->_message = "Login Correcto";

        }else{
            $this->_confirm = false;
            $this->_message = "Usuario no encontrado";
        }

    }

}