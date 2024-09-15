import './bootstrap';
import 'bootstrap/dist/js/bootstrap.bundle.min';
import 'bootstrap-table/dist/bootstrap-table.min.css';
import 'bootstrap-table';
import 'bootstrap-icons/font/bootstrap-icons.css';
import toastr from 'toastr';
import 'toastr/build/toastr.min.css';
import $ from 'jquery';
import Swal from 'sweetalert2';
import './revistas.js';
window.$ = window.jQuery = $;
toastr.options = {
    "closeButton": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "timeOut": "5000",
  };
console.log('app.js loaded at:', new Date());
window.imageFormatter = function(value, row, index) {
    return `<img src="/portadas/${value}" alt="Portada" style="width: 100px; height: auto;" />`;
};
window.actionFormatter = function(value, row, index) {
    return `
        <button class="btn btn-primary btn-sm" data-action="view" data-bs-toggle="modal" data-bs-target = "#revistaModal" data-id="${row.id}" title="Ver">
            <i class="bi bi-eye"></i>
        </button>
        <button class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target = "#revistaModalEdt"  data-action="edit" data-id="${row.id}" title="Editar">
            <i class="bi bi-pencil"></i>
        </button>
        <button class="btn btn-danger btn-sm" data-action="delete" data-id="${row.id}" title="Eliminar">
            <i class="bi bi-trash"></i>
        </button>
    `;
};
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
window.viewRecord = function(id,revista) {
    $("#btnGuardar").hide()
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
        $("#correo_editor").val(data.revista.correo_editor);
        $("#revista_id").val(data.revista.id);
    })
    .catch(error => {
        console.error('Hubo un problema con la solicitud Fetch:', error);
    });
};
window.editRecord = function(id,revista) {
    window.cambioPortada = false;
    $("#btnGuardar").hide();
    const slider = document.getElementById('formatoEdt');
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
        window.portadaOriginal = data.revista.portada;
        $("#portadaEdt").attr('src','/portadas/'+data.revista.portada);
        $("#revista_idEdt").html(data.revista.id+" - "+data.revista.revista);
        $("#revistaEdt").val(data.revista.revista.toLowerCase().charAt(0).toUpperCase() + data.revista.revista.toLowerCase().slice(1));
        $("#urlEdt").val(data.revista.url);
        $("#anio_inicialEdt").val(data.revista.anio_inicial);
        $("#indiceEdt").val(data.revista.indices_id);
        $("#editorialEdt").val(data.revista.editorial_id);
        $("#area_conocimientoEdt").val(data.revista.area_conocimiento_id);
        $("#idiomaEdt").val(data.revista.lenguajes_id);
        $("#periodicidadEdt").val(data.revista.periodicidad_id);
        $("descripcionEdt").text(data.revista.resumen);
        $("#deposito_legal_impresoEdt").val(data.revista.deposito_legal_impreso);
        $("#deposito_legal_digitalEdt").val(data.revista.deposito_legal_digital);
        $("#issn_impresoEdt").val(data.revista.issn_impreso);
        $("#issn_digitalEdt").val(data.revista.issn_digital);
        $("#correo_revistaEdt").val(data.revista.correo_revista);
        $("#correo_editorEdt").val(data.revista.correo_editor);
        $("#revista_idEdt").val(data.revista.id);
        slider.value = data.revista.formato_id;
        formato(data.revista.formato_id);
    })
    .catch(error => {
        console.error('Hubo un problema con la solicitud Fetch:', error);
    });
};

window.deleteRecord = function(id) {
    console.log('Eliminar registro con ID:', id);
    //Implementa la lógica para eliminar el registro
};

window.addCustomButton = function() {
    $('#btn-nuevo').click(function() {
        console.log('Botón "Nuevo" clickeado');
        //Implementa la lógica para el botón "Nuevo"


    });
};
document.addEventListener('DOMContentLoaded', function() {
    const portadaEdt = document.getElementById('portadaEdt');
    const portadaInput = document.getElementById('portadaInput');
    window.portadaOriginal = $("#portadaEdt").attr("src");
    portadaEdt.addEventListener('click', function () {
        window.cambioPortada = true;
        portadaInput.click();
    });   
    portadaInput.addEventListener('change', function (event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                portadaEdt.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });
    let url = `auxiliares`;
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    fetch(url, {
        method: 'GET',
        headers: {
            'X-CSRF-TOKEN': token,
            'Content-Type': 'application/json'
        }
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Error al obtener los auxiliares');
        }
        return response.json();
    })
    .then(data => {
        populateSelect(data);
    })
    .catch(error => {
        console.error('Error al procesar los auxiliares:', error);
    });
    function populateSelect(data) {
        let controles = [
            'indiceEdt',
            'area_conocimientoEdt',
            'idiomaEdt',
            'periodicidadEdt',
            'editorialEdt',
        ];
        let n=0;
        let control;
        let option;
        Object.keys(data).forEach(key => {
            if (key !== 'formatos') {
                control = $("#"+controles[n])[0];
                data[key].forEach(element => {
                    option = document.createElement('option');
                    option.value = element.id;
                    option.text = element.valor.charAt(0).toUpperCase() + element.valor.slice(1).toLowerCase();
                    control.appendChild(option);                
                });
                n++;
            }
        });        
    }
    $('#tbl-revistas').bootstrapTable({
        buttons: [
            {
                text: 'Añadir revista',
                icon: 'fas fa-plus',
                class: 'btn btn-success',
                event: function() {
                    console.log('Botón "Nuevo" clickeado');
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
    $('#btnGenerarPDF').on('click', function() {
        let id = $('#revista_id').val();
        let url = `/revista/generar-pdf/${id}`;
        let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        fetch(url, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': token,
                'Content-Type': 'application/json'
            },
            responseType: 'blob'
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Error al generar el PDF');
            }
            return response.blob();
        })
        .then(blob => {
            let link = document.createElement('a');
            link.href = window.URL.createObjectURL(blob);
            link.download = 'revista_' + id + '.pdf';
            link.click();
        })
        .catch(error => {
            console.error('Error al generar el PDF:', error);
        });
    });
});
const slider = document.getElementById('formatoEdt');
slider.addEventListener('input', function() {
    formato(slider);
});
function formato(formato) {
    switch (slider.value) {
        case '1':
            $("#deposito_legal_impresoEdt").attr('readonly',false);
            $("#deposito_legal_impresoEdt").addClass('formato-texto1');
            $("#deposito_legal_impresoEdt").addClass('req');
            $("#deposito_legal_impresoEdt").removeClass('deshabilitado1');
            $("#issn_impresoEdt").attr('readonly',false);
            $("#issn_impresoEdt").addClass('formato-texto1');
            $("#issn_impresoEdt").addClass('req');
            $("#issn_impresoEdt").removeClass('deshabilitado1');
            $("#deposito_legal_digitalEdt").attr('readonly',true);
            $("#deposito_legal_digitalEdt").removeClass('formato-texto1');
            $("#deposito_legal_digitalEdt").removeClass('req');
            $("#deposito_legal_digitalEdt").addClass('deshabilitado1');
            $("#issn_digitalEdt").attr('readonly',true);
            $("#issn_digitalEdt").removeClass('formato-texto1');
            $("#issn_digitalEdt").removeClass('req');
            $("#issn_digitalEdt").addClass('deshabilitado1');
            $(".impreso").show();
            $(".digital").hide();
            break;
        case '2':
            $("#deposito_legal_impresoEdt").attr('readonly',true);
            $("#deposito_legal_impresoEdt").removeClass('formato-texto1');
            $("#deposito_legal_impresoEdt").removeClass('req');
            $("#deposito_legal_impresoEdt").addClass('deshabilitado1');
            $("#issn_impresoEdt").attr('readonly',true);
            $("#issn_impresoEdt").removeClass('formato-texto1');
            $("#issn_impresoEdt").removeClass('req');
            $("#issn_impresoEdt").addClass('deshabilitado1');
            $("#deposito_legal_digitalEdt").attr('readonly',false);
            $("#deposito_legal_digitalEdt").addClass('formato-texto1');
            $("#deposito_legal_digitalEdt").addClass('req');
            $("#deposito_legal_digitalEdt").removeClass('deshabilitado1');
            $("#issn_digitalEdt").attr('readonly',false);
            $("#issn_digitalEdt").addClass('formato-texto1');
            $("#issn_digitalEdt").addClass('req');
            $("#issn_digitalEdt").removeClass('deshabilitado1');
            $(".impreso").hide();
            $(".digital").show();
            break;
        case '3':
            $("#deposito_legal_impresoEdt").attr('readonly',false);
            $("#deposito_legal_impresoEdt").addClass('formato-texto1');
            $("#deposito_legal_impresoEdt").addClass('req');
            $("#deposito_legal_impresoEdt").removeClass('deshabilitado1');
            $("#issn_impresoEdt").attr('readonly',false);
            $("#issn_impresoEdt").addClass('formato-texto1');
            $("#issn_impresoEdt").addClass('req');
            $("#issn_impresoEdt").removeClass('deshabilitado1');
            $("#deposito_legal_digitalEdt").attr('readonly',false);
            $("#deposito_legal_digitalEdt").addClass('formato-texto1');
            $("#deposito_legal_digitalEdt").addClass('req');
            $("#deposito_legal_digitalEdt").removeClass('deshabilitado1');
            $("#issn_digitalEdt").attr('readonly',false);
            $("#issn_digitalEdt").addClass('formato-texto1');
            $("#issn_digitalEdt").addClass('req');
            $("#issn_digitalEdt").removeClass('deshabilitado1');
            $(".impreso").show();
            break;
    }
}
const btnActualizar = document.getElementById("btnActualizar")
btnActualizar.addEventListener('click', async function() {
    let data = {
        'revistaEdt':$("#revistaEdt").val(),//
        'urlEdt':$("#urlEdt").val(),
        'anio_inicialEdt':$("#anio_inicialEdt").val(),
        'indiceEdt':$("#indiceEdt").val(),//
        'editorialEdt':$("#editorialEdt").val(),
        'area_conocimientoEdt':$("#area_conocimientoEdt").val(),//
        'idiomaEdt':$("#idiomaEdt").val(),//
        'periodicidadEdt':$("#periodicidadEdt").val(),
        'descripcionEdt':$("#descripcionEdt").val(),
        'deposito_legal_impresoEdt':$("#deposito_legal_impresoEdt").val(),
        'deposito_legal_digitalEdt':$("#deposito_legal_digitalEdt").val(),
        'issn_impresoEdt':$("#issn_impresoEdt").val(),
        'issn_digitalEdt':$("#issn_digitalEdt").val(),
        'correo_revistaEdt':$("#correo_revistaEdt").val(),
        'correo_editorEdt':$("#correo_editorEdt").val(),
        'revista_idEdt':$("#revista_idEdt").val(),
    };
    let captions = {
        'revistaEdt':'Revista',
        'urlEdt':'Url',
        'anio_inicialEdt':'Año',
        'indiceEdt':'Índice',
        'editorialEdt':'Editorial',
        'area_conocimientoEdt':'Área de conocimiento',
        'idiomaEdt':'Idioma',
        'periodicidadEdt':'Periodicidad',
        'descripcionEdt':'Descripción',
        'deposito_legal_impresoEdt':'Depósito legal impreso',
        'deposito_legal_digitalEdt':'Depósito legal digital',
        'issn_impresoEdt':'ISSN Impreso',
        'issn_digitalEdt':'ISSN Digital',
        'correo_revistaEdt':'Correo revista',
        'correo_editorEdt':'Correo editorial',
    };
    const modal = document.getElementById('revistaModalEdt');
    const elementos = modal.querySelectorAll('.req');
    let errores=[];
    let error
    let frmt = document.getElementById('formatoEdt').value;
    let alerta = false
    elementos.forEach(elemento => {
        switch (elemento.id) {
            case 'deposito_legal_impresoEdt':
                if (elemento.value === "" || frmt ===1 || frmt === 3) {
                    alerta = true
                } 
                break;
            case 'deposito_legal_digitalEdt':
                if (elemento.value === "" || frmt ===1 || frmt === 3) {
                    alerta = true
                }                 
                break;
            case 'issn_impresoEdt':
                if (elemento.value === "" || frmt ===1 || frmt === 3) {
                    alerta = true
                }                 
                break;
            case 'issn_digitalEdt':
                if (elemento.value === "" || frmt ===1 || frmt === 3) {
                    alerta = true
                }                 
                break;
            default:
                alerta=false;
                break
        }
        if ((elemento.value === "" || elemento.value.indexOf("Selecc") > -1) || alerta) {
            error = captions[elemento.id] + " no puede estar vacio";
            errores.push(error)
            $("#"+elemento.id+"Err").html('No puede estar vacio')
        }
    });
    if (errores.length > 0) {
        Swal.fire({
            title: 'Se han conseguido los siguientes errores',
            html: `<ul>${errores.map(error => `<li>${error}</li>`).join('')}</ul>`,
            icon: 'error',
            confirmButtonText: 'OK'
        });
        return;
    }
    
    const id = $("#revista_idEdt").val()[0];
    const formData = new FormData();
    const portadaFile = document.getElementById('portadaInput').files[0];
    formData.append('portada', portadaFile);
    formData.append('id', document.getElementById('revista_idEdt').textContent);
    if ($("#portadaInput").val().length > 0) {
        const porta = await cargarPortada(formData);
        window.portadaRevista = porta;
    }
    if (window.cambioPortada) {
        data.portada = window.portadaRevista;
    } else {
        data.portada = window.portadaOriginal;
    }
    data.formato = document.getElementById('formatoEdt').value
    try {
        const response = await fetch(`revistas/${id}`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify(data)
        });
        const resultado = await response.json();
        if (resultado.hasOwnProperty('errors')) {
            let errores = '';
            for (const [campo, mensajes] of Object.entries(resultado.errors)) {
                mensajes.forEach(mensaje => {
                    errores += `<li>${mensaje}</li>`;
                });
            }
            Swal.fire({
                title: 'Se han encontrado los siguientes errores',
                html: `<ul>${errores}</ul>`,
                icon: 'error',
                confirmButtonText: 'OK'
            });
        } else {
            toastr.success('Revista actualizada exitosamente.');
            $('#tbl-revistas').bootstrapTable('refresh');
            $("#btnCerrarEdición").trigger("click");

        }
    } catch (error) {
        toastr.error('Error de red o del servidor.');
    }
    
});    
async function cargarPortada(formData) {
    try {
        const response = await fetch('portada', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        });
        const data = await response.json();
        if (data.success) {
            window.portadaRevista = data.portada;
            return await  data.portada;
        } else {
            Swal.fire({
                title: 'HA OCURRIDO UN ERROR',
                text: 'Ha ocurrido un error al cargar la imagen1; intente de nuevo',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }
    } catch (error) {
        Swal.fire({
            title: 'HA OCURRIDO UN ERROR',
            text: 'Ha ocurrido un error al cargar la imagen; intente de nuevo',
            icon: 'error',
            confirmButtonText: 'OK'
        });
    }
}
const captions = {
    'revistaEdt':'Revista',
    'urlEdt':'Url',
    'anio_inicialEdt':'Año',
    'indiceEdt':'Índice',
    'editorialEdt':'Editorial',
    'area_conocimientoEdt':'Área de conocimiento',
    'idiomaEdt':'Idioma',
    'periodicidadEdt':'Periodicidad',
    'descripcionEdt':'Descripción',
    'deposito_legal_impresoEdt':'Depósito legal impreso',
    'deposito_legal_digitalEdt':'Depósito legal digital',
    'issn_impresoEdt':'ISSN Impreso',
    'issn_digitalEdt':'ISSN Digital',
    'correo_revistaEdt':'Correo revista',
    'correo_editorEdt':'Correo editorial',
};

function validarElemento(elemento) {
    const idElemento = elemento.id;
    const errorDiv = document.getElementById(idElemento + 'Err');
    if (elemento.tagName === 'SELECT') {
        if (elemento.value.startsWith('Selecc')) {
            errorDiv.textContent = captions[idElemento] + ' no puede estar vacío';
        } else {
            errorDiv.textContent = '';
        }
    } else {
        if (elemento.value.trim() === '') {
            errorDiv.textContent = captions[idElemento] + ' no puede estar vacío';
        } else {
            errorDiv.textContent = '';
        }
    }
}
function validarControles() {
    const elementos = document.querySelectorAll('.req');
    elementos.forEach(elemento => {
        elemento.addEventListener('input', () => validarElemento(elemento));
        elemento.addEventListener('blur', () => validarElemento(elemento));
    });
}
document.addEventListener('DOMContentLoaded', validarControles);
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('revistaModalEdt');
    modal.addEventListener('show.bs.modal', function (event) {
        $(".error1").html('')
    });
    modal.addEventListener('hidden.bs.modal', function (event) {
        $(".error1").html('')
    });
});
