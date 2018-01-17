<?php
/**
 * Created by PhpStorm.
 * User: agomez
 * Date: 11/01/2018
 * Time: 01:34 AM
 */
?>
<!DOCTYPE html><html ><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php
    \core\core::includeCSS('plugins/bootstrap/css/bootstrap.css',false);
    \core\core::includeCSS('plugins/fonts/font-awesome/css/font-awesome.min.css',false);
    \core\core::includeCSS('content/css/css_login.css',false);
    \core\core::includeCSS('content/css/AdminLTE.css',false);
    ?>
    <title><?=\core\core::APP_NAME()?></title></head><body class="full">

<div class="row animated fadeIn">
    
    <div class="col-sm-4 with-border border-right" style="height: auto;height: 100vh">

        <div class="content">
            <div class="row">
                <div class="col-md-12 text-center">
                    <br>
                    <img  style="width: 50%" src="content/img/logos/LogoEmpresa.png">
                </div>

                <div class="col-md-12 text-center">
                    <h2 class="text-bold "> <b class="text-primary">SIAC</b></h2>
                </div>

                <div class="col-md-12">
                    <form name="formlogIn01" action="#" onsubmit="fn_login(); return false;" method="post">
                        <div class="form-group hidden" >
                            <label class="text-left">Codigo de la empresa</label>
                            <input  type="text" placeholder="codigo de la empresa" class="input-login ">
                        </div>
                        <div class="form-group">
                            <label class="text-left">Correo</label>
                            <input id="login_user" type="text" placeholder="Correo / usuario" class="input-login ">
                        </div>
                        <div class="form-group margin-bottom">
                            <label class="text-left">Contraseña</label>
                            <input id="login_pass" type="password" placeholder="Contrsaeña" class="input-login ">
                        </div>
                        <div id="div_result"></div>
                        <div class="form-group col-md-6 no-padding" >
                            <button type="submit" data-loading-text="Loading..." autocomplete="off" id="btn_login" class="btn btn-block btn-instagram btn-sm bg-aqua-gradient text-bold text-white" value="Iniciar Sesion" ><i class="fa fa-sign-in"></i> Iniciar Sesi&oacute;n</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-12">
                    <br>
                    <p class="text-center">
                        <b>SIAC</b>
                        es un "Sistema Para la administración de Cobranza" para nuestros clientes, mejoramos los niveles de atención y tenemos mayor control de calidad en los servicios aplicados.
                    </p>
                </div>

            </div>
        </div>

    </div>
    <div class="col-sm-8 full no-padding with-border" style="background-color: #000;  opacity: 0.55;height: auto;height: 100vh">

        <img class="img-responsive" style="height: auto;height: 100vh"  src="content/img/wallpapers/working-8.jpg">

    </div>

</div>
<?php
\core\core::includeJS('plugins/jQuery/jQuery-2.2.0.min.js',false);
\core\core::includeJS('plugins/bootstrap/js/bootstrap.js',false);
\core\core::includeJS('plugins/bootstrap/js/bootbox.min.js',false);
\core\core::includeJS('content/js/jsLogin.js',false);
?>
</body>
</html>
