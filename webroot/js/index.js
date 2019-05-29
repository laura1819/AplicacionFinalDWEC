var db = openDatabase('app', '1.0', 'BD de app final', 100 * 1024);

$(document).ready(function() {

    console.info("Iniciando...");

    init();

    listarIntegrantes();

    console.info("Carga finalizada...");

    ////////////////////////////////////////////////////////////////////
    ////////////////////////////Funciones jquery///////////////////////
    ////////////////////////////////////////////////////////////////////
    $('#btn-guardar').click(function() {
        var txtId = $('#txt-id');
        var txtNombres = $('#txt-nombres');
        var txtApellidos = $('#txt-apellidos');

        if (txtNombres.val() === '' || txtApellidos.val() === '') {
            alert("Los campos nombres y apellidos son requeridos...");
            return;
        }

        var integrante = Object();

        integrante.nombres = txtNombres.val();
        integrante.apellidos = txtApellidos.val();

        if (txtId.val() === '') { //Lo guarda
            integrante.id = new Date().getTime();
            guardarIntegrante(integrante);
        } else { //Lo actualiza
            integrante.id = parseInt(txtId.val());
            actualizarIntegrante(integrante);
        }

        listarIntegrantes();

        txtNombres.val(null);
        txtApellidos.val(null);
        txtId.val(null);
    });

    $('#li-integrantes').on("click", ".btn-editar", function() {
        var idIntegrante = $(this).data("id");
        consultarIntegrante(idIntegrante);
    });

    $('#li-integrantes').on("click", ".btn-eliminar", function() {
        var idIntegrante = $(this).data("id");
        eliminarIntegrante(idIntegrante);
        listarIntegrantes();
    });

});

////////////////////////////////////////////////////////////////////
///////////////////////funciones para el CRUd///////////////////////
////////////////////////////////////////////////////////////////////
function init() {
    db.transaction(function(tx) {
        tx.executeSql('create table if not exists INTEGRANTE(ID, NOMBRES, APELLIDOS)');
    }, error, exito);
}

function listarIntegrantes() {
    db.readTransaction(function(t) {
        t.executeSql('SELECT ID, NOMBRES, APELLIDOS FROM INTEGRANTE', [], function(t, rs) {
            if (rs.rows.length > 0) {
                var lisHtml = '';
                for (var i = 0; i < rs.rows.length; i++) {
                    var integrante = rs.rows.item(i);
                    var id = integrante.ID;
                    lisHtml += '<li>' + integrante.NOMBRES + ' ' + integrante.APELLIDOS
                            + '<button class="btn-editar" type="button" data-id="' + id + '">Editar</button>'
                            + '<button class="btn-eliminar" type="button" data-id="' + id + '">Eliminar</Eliminar></li>';
                }
                $('#li-integrantes').html(lisHtml);
            }

        }, error);
    });
}

function guardarIntegrante(integrante) {
    db.transaction(function(tx) {
        tx.executeSql('INSERT INTO INTEGRANTE(ID, NOMBRES, APELLIDOS) VALUES(?, ?, ?)', [integrante.id, integrante.nombres, integrante.apellidos]);
    }, error, function() {
        alert("El integrante ha sido guardado con éxito");
    });
}

function consultarIntegrante(idIntegrante) {
    db.readTransaction(function(t) {
        t.executeSql('SELECT ID, NOMBRES, APELLIDOS FROM INTEGRANTE WHERE ID = ?', [idIntegrante], function(t, rs) {
            if (rs.rows.length > 0) {
                var integrante = new Object();
                integrante.nombres = rs.rows.item(0).NOMBRES;
                integrante.apellidos = rs.rows.item(0).APELLIDOS;

                $('#txt-id').val(rs.rows.item(0).ID);
                $('#txt-nombres').val(rs.rows.item(0).NOMBRES);
                $('#txt-apellidos').val(rs.rows.item(0).APELLIDOS);

            }
        }, error);
    });
}

function actualizarIntegrante(integrante) {
    db.transaction(function(tx) {
        tx.executeSql('UPDATE INTEGRANTE SET NOMBRES = ?, APELLIDOS = ? WHERE ID = ?', [integrante.nombres, integrante.apellidos, integrante.id]);
    }, error, function() {
        alert("El integrante ha sido actualizado con éxito");
    });
}

function eliminarIntegrante(idIntegrante) {
    db.transaction(function(tx) {
        tx.executeSql('DELETE FROM INTEGRANTE WHERE ID = ?', [idIntegrante]);
    }, error, function() {
        alert("El integrante ha sido eliminado con éxito");
    });
}


////////////////////////////////////////////////////////////////////
////////////////////////Funciones de logueo////////////////////
////////////////////////////////////////////////////////////////////
var error = function(err) {
    console.error(err);
};

var exito = function() {
    console.info("Tabla creada...");
};