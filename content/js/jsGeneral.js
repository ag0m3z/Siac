/**
 * Created by agomez on 29/11/2016.
 *  SenderAjax(urlPhp,nameView,params,idDiv,is_type,stringData)
 * Created by alejandro.gomez on 14/11/2016.
 */

/**
 * Funciones Generales del Sistema
 * SIAC ( Sistema de Administracion y Cobranza )
 * @type {boolean}
 */

var validar_cierre = false;
var buttonBootBox = {

    confirm: {
        label: '<i class="fa fa-check"></i> Aceptar',
        className: 'btn-default'
    },cancel: {
        label: '<i class="fa fa-times"></i> Cancelar',
        className: 'btn-danger'
    },
};

function jsRemoveWindowLoad() {
    // eliminamos el div que bloquea pantalla
    $("#WindowLoad").remove();

}

function jsShowWindowLoad(mensaje) {
    //eliminamos si existe un div ya bloqueando
    jsRemoveWindowLoad();

    //si no enviamos mensaje se pondra este por defecto
    if (mensaje === undefined) mensaje = " ";

    //centrar imagen gif
    height = 20;//El div del titulo, para que se vea mas arriba (H)
    var ancho = 0;
    var alto = 0;

    //obtenemos el ancho y alto de la ventana de nuestro navegador, compatible con todos los navegadores
    if (window.innerWidth == undefined) ancho = window.screen.width;
    else ancho = window.innerWidth;
    if (window.innerHeight == undefined) alto = window.screen.height;
    else alto = window.innerHeight;

    //operación necesaria para centrar el div que muestra el mensaje
    var heightdivsito = alto/2 - parseInt(height)/2;//Se utiliza en el margen superior, para centrar

    //imagen que aparece mientras nuestro div es mostrado y da apariencia de cargando
    imgCentro = "<div style='text-align:center;height:" + alto + "px;'><div class='text-white text-bold'  style='margin-top:" + heightdivsito + "px; font-size:20px;'>" +
        "<div class='preloader pl-size-l'><div class='spinner-layer pl-teal'><div class='circle-clipper left'><div class='circle'></div> </div><div class='circle-clipper right'><div class='circle'></div> </div></div></div></div></div>";

    //creamos el div que bloquea grande------------------------------------------
    div = document.createElement("div");
    div.id = "WindowLoad";
    div.style.width = ancho + "px";
    div.style.height = alto + "px";
    $("body").append(div);

    //creamos un input text para que el foco se plasme en este y el usuario no pueda escribir en nada de atras
    input = document.createElement("input");
    input.id = "focusInput";
    input.type = "text"

    //asignamos el div que bloquea
    $("#WindowLoad").append(input);

    //asignamos el foco y ocultamos el input text
    $("#focusInput").focus();
    $("#focusInput").hide();

    //centramos el div del texto
    $("#WindowLoad").html(imgCentro);

}

function fnloadSpinner(opc){


    switch (opc){
        // mostrar fa-Spinner
        case 1:
            jsShowWindowLoad();
            break;
        case 2:
            // Ocultar fa-Spinner
            jsRemoveWindowLoad();
            break;
        default :
            MyAlert("error no se encontro la opci&oacute;n solicitada","error");
            break;
    }
}

function MyAlert(message,isType){

    bootbox.dialog({
        title:"Alerta",
        message:message,
        size:"small",
        buttons:{
            ok:{
                label:"Aceptar",
                className:"btn-primary btn-sm"
            }
        }
    });

}

var getthowError = function (jqXHR,textStatus) {

    if (jqXHR.status === 0) {

        MyAlert('Not connect: Verify Network.','danger');

    } else if (jqXHR.status == 404) {

        MyAlert('Requested page not found [404]','danger');

    } else if (jqXHR.status == 500) {

        MyAlert('Internal Server Error [500].','danger');

    } else if (textStatus === 'parsererror') {

        MyAlert('Requested JSON parse failed.','danger');

    } else if (textStatus === 'timeout') {

        MyAlert('Time out error.','danger');

    } else if (textStatus === 'abort') {

        MyAlert('Ajax request aborted.','danger');

    } else {

        MyAlert('Uncaught Error: ' + jqXHR.responseText,'danger');

    }

};

function setRemoveDiv(idDiv) {
    $("#content"+idDiv).remove();
}
function setOpenModal(idmodal){
    $('#'+idmodal).modal('toggle');

    setTimeout(function() { $('.modal-body').find('input:text').first().focus(); }, 700);


    $("#"+idmodal).draggable({
        handle: ".modal-header"
    });
}
/**
 * ### END Funciones Generales
 */

/**
 * Funciones de la Aplicacion General
 */
function gnlogin_out(){

    bootbox.confirm({
        title: "Salir del Sistema",
        message: "Esta seguro de salir del sistema.",
        size:"small",
        buttons: {
            cancel: {
                label: '<i class="fa fa-times"></i> Cancelar'
            },
            confirm: {
                label: '<i class="fa fa-check"></i> Aceptar'
            }
        },
        callback: function (result) {

            if(result){

                $.ajax({
                   url:"app/controller/login/ControllerLogOut.php",
                   type:"POST",
                    dataType:"json",
                    data:{},
                    beforeSend:function () {
                        fnloadSpinner(1);
                    }
                }).done(function (response) {

                    if(response.result){
                        location.reload();
                    }


                }).fail(function (jqhr,textStatus,errno) {

                    fnloadSpinner(2);
                    getthowError(jqhr,textStatus);

                });

            }
        }
    });


}

function getMenu(idMenu,param){


    switch (idMenu){
        case 1: //Dashboard
            break;
        case 2: //Supervisor
            $("#div_general").load("app/views/supervisor/ViewSupervisor.php");
            break;
        case 3: //Cartera
            $("#div_general").load("app/views/cartera/ViewCartera.php");
            break;
        case 4: //Pantalla de Gestor
                $("#div_general").load("app/views/gestion/ViewGestor.php");
            break;
        case 5: //Reportes
            $("#div_general").load("app/views/reportes/ViewReportes.php");
            break;
        case 6: //Cuentas y Clientes
            break;
        case 7: //Configuracioón
            $("#div_general").load("app/views/configuraciones/ViewConfig.php");
            break;
        case 8: //Pantalla de Gestion Cliente
            $("#div_general").load("app/views/gestion/ViewGestion.php");
            break;
    }

}

function getGestor(opc) {

    if (opc == 1){
        $("#div_general").load("app/views/gestion/ViewGestion.php");

    }else{
        $("#div_general").load("app/views/gestion/ViewGestion2.php");

    }

}