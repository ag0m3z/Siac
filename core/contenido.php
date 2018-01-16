<?php
/**
 * Created by PhpStorm.
 * User: agomez
 * Date: 22/09/2017
 * Time: 11:05 PM
 */

namespace core;
include "seguridad.php";

class contenido extends seguridad
{

    public function getFormatFolio($Folio = null,$Cantidad = 4,$String = "0"){

    }

    public function getFormatoMoneda($numero, $moneda){
        $final='';
        $longitud = strlen($numero);
        $punto = substr($numero, -1,1);
        $punto2 = substr($numero, 0,1);
        $separador = ".";
        if($punto == "."){
            $numero = substr($numero, 0,$longitud-1);
            $longitud = strlen($numero);
        }
        if($punto2 == "."){
            $numero = "0".$numero;
            $longitud = strlen($numero);
        }
        $num_entero = strpos ($numero, $separador);
        $centavos = substr ($numero, ($num_entero));
        $l_cent = strlen($centavos);
        if($l_cent == 2){$centavos = $centavos."0";}
        elseif($l_cent == 3){$centavos = $centavos;}
        elseif($l_cent > 3){$centavos = substr($centavos, 0,3);}
        $entero = substr($numero, -$longitud,$longitud-$l_cent);
        if(!$num_entero){
            $num_entero = $longitud;
            $centavos = ".00";
            $entero = substr($numero, -$longitud,$longitud);
        }

        $start = floor($num_entero/3);
        $res = $num_entero-($start*3);
        if($res == 0){$coma = $start-1; $init = 0;}else{$coma = $start; $init = 3-$res;}
        $d= $init; $i = 0; $c = $coma;
        while($i <= $num_entero){
            if($d == 3 && $c > 0){$d = 0; $sep = ","; $c = $c-1;}else{$sep = "";}
            $final .=  $sep.$entero[$i];
            $i = $i+1; // todos los digitos
            $d = $d+1; // poner las comas
        }
        if($moneda == "pesos")  {$moneda = "$";
            return $moneda." ".$final.$centavos;
        }
        elseif($moneda == "dolares"){$moneda = "USD";
            return $moneda." ".$final.$centavos;
        }
        elseif($moneda == "euros")  {$moneda = "EUR";
            return $final.$centavos." ".$moneda;
        }
    }

    public function getValidarCorreo($Correo = null){
        if (filter_var($Correo, FILTER_VALIDATE_EMAIL)) {
            return true;
        }else{
            return false;
        }
    }

    public function getExisteCorreo($Correo,$NameTable = 'usuarios',$Campo='Correo'){
        $this->_query = "SELECT ".$Campo." FROM ".$NameTable." WHERE ".$Campo." = '$Correo' ";
        $this->get_result_query();
        if(count($this->_rows) > 0 ){
            return true;
        }else{
            return false;
        }
    }



}