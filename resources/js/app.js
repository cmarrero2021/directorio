import './bootstrap';
import 'bootstrap/dist/js/bootstrap.bundle.min';

import 'bootstrap-table/dist/bootstrap-table.min.css';
import 'bootstrap-table';
import './revistas.js';
import 'bootstrap-icons/font/bootstrap-icons.css';
import $ from 'jquery';
window.$ = window.jQuery = $;
console.log('app.js loaded at:', new Date());
window.imageFormatter = function(value, row, index) {
    return `<img src="/portadas/${value}" alt="Portada" style="width: 100px; height: auto;" />`;
};
// Formatter para la columna de acciones
window.actionFormatter = function(value, row, index) {
    return `
        <button class="btn btn-primary btn-sm" data-action="view" data-bs-toggle="modal" data-bs-target = "#revistaModal" data-id="${row.id}" title="Ver">
            <i class="bi bi-eye"></i>
        </button>
        <button class="btn btn-warning btn-sm" data-action="edit" data-id="${row.id}" title="Editar">
            <i class="bi bi-pencil"></i>
        </button>
        <button class="btn btn-danger btn-sm" data-action="delete" data-id="${row.id}" title="Eliminar">
            <i class="bi bi-trash"></i>
        </button>
    `;
};

// Eventos para los botones de la columna de acciones
window.actionEvents = {
    'click .btn': function (e, value, row, index) {
        const action = $(e.currentTarget).data('action');
        const id = $(e.currentTarget).data('id');
        if (action === 'view') {
            viewRecord(id,row.revista);
        } else if (action === 'edit') {
            editRecord(id);
        } else if (action === 'delete') {
            deleteRecord(id);
        }
    }
};

// Funciones de acción
window.viewRecord = function(id,revista) {
    $("#btnGuardar").hide()
    console.log("revista: ",revista)
    $("#revistaModalLabel").text("Editar revista "+revista)
    fetch('/revistas/'+(id), {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok ' + response.statusText);
        }
        return response.json();
    })
    .then(data => {
        console.log(data);
        $("#portada").attr('src','/portadas/'+data.revista.portada);
        $("#revista").val(data.revista.revista);
        $("#anio_inicial").val(data.revista.anio_inicial);
        $("#indice").val(data.revista.indice);
        $("#editorial").val(data.revista.editorial);
        $("#area_conocimiento").val(data.revista.area_conocimiento);
        $("#idioma").val(data.revista.idioma);
        $("#periodicidad").val(data.revista.periodicidad);
        $("#formato").val(data.revista.formato);
        $("#deposito_legal_impreso").val(data.revista.deposito_legal_impreso);
        $("#deposito_legal_digital").val(data.revista.deposito_legal_digital);
        $("#issn_impreso").val(data.revista.issn_impreso);
        $("#issn_digital").val(data.revista.issn_digital);
        $("#correo_revista").val(data.revista.correo_revista);
        $("#nombres_editor").val(data.revista.nombres_editor);
        $("#correo_editor").val(data.revista.correo_editor);
        $("#estado").val(data.revista.estado);
        
        $("#ciudad").val(data.revista.ciudad);
        $("#direccion").val(data.revista.direccion);

        console.log("revista: ",data.revista);
    })
    .catch(error => {
        console.error('Hubo un problema con la solicitud Fetch:', error);
    });

    
};

window.editRecord = function(id) {
    console.log('Editar registro con ID:', id);
    // Implementa la lógica para editar el registro
};

window.deleteRecord = function(id) {
    console.log('Eliminar registro con ID:', id);
    // Implementa la lógica para eliminar el registro
};

window.addCustomButton = function() {
    $('#btn-nuevo').click(function() {
        console.log('Botón "Nuevo" clickeado');
        // Implementa la lógica para el botón "Nuevo"
    });
};
document.addEventListener('DOMContentLoaded', function() {
    $('#tbl-revistas').bootstrapTable({
        // Añade tu botón personalizado en la opción de toolbar
        buttons: [
            {
                text: 'Añadir revista',
                icon: 'fas fa-plus',
                class: 'btn btn-success',
                event: function() {
                    console.log('Botón "Nuevo" clickeado');
                    // Implementa la lógica para el botón "Nuevo"
                }
            }
        ]
    });
    $('#tbl-revistas').bootstrapTable({
        toolbar: '#toolbar',
    });
    $('[name="0"]').removeClass('btn-secondary');
    $('[name="0"]').addClass('btn-success');
    $('[name="0"]').attr('title','Cargar revista');
    let agregarBtn = $('[name="0"]');
    $('[name="0"]').appendTo('.columns-right ')
});