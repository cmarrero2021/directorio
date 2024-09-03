import './bootstrap';
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
        <button class="btn btn-primary btn-sm" data-action="view" data-id="${row.id}" title="Ver">
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
            viewRecord(id);
        } else if (action === 'edit') {
            editRecord(id);
        } else if (action === 'delete') {
            deleteRecord(id);
        }
    }
};

// Funciones de acción
window.viewRecord = function(id) {
    console.log('Ver registro con ID:', id);
    // Implementa la lógica para ver el registro
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