<!-- Modal -->
<div class="modal fade" id="revistaModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="revistaModalLabel">Modal title</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<input type="hidden" id="revista_id">
				<!--  -->
				<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-2">
							 <img src="" id="portada" alt="Portada" style="width: 100px; height: auto;">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-5">
							<label for="revista" class="col-form-label">Revista</label>
							<input type="text" id="revista" class="form-control formato-texto1">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4">
							<label for="anio_inicial" class="col-form-label">Url</label>
							<input type="text" id="anio_inicial" class="form-control formato-texto1">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-1">
							<label for="anio_inicial" class="col-form-label">Año</label>
							<input type="text" id="anio_inicial" class="form-control formato-texto1">
						</div>
					</div>
				<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-3">
							<label for="deposito_legal_impreso" class="col-form-label">Depósito legal impreson</label>
							<input type="text" id="deposito_legal_impreso" class="form-control formato-texto1">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3">
							<label for="deposito_legal_digital" class="col-form-label">Depósito legal digital</label>
							<input type="text" id="deposito_legal_digital" class="form-control formato-texto1">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3">
							<label for="issn_impreso" class="col-form-label">ISSN impreso</label>
							<input type="text" id="issn_impreso" class="form-control formato-texto1">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3">
							<label for="issn_digital" class="col-form-label">ISSN digital</label>
							<input type="text" id="issn_digital" class="form-control formato-texto1">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-3">
							<label for="indice" class="col-form-label">Índice</label>
							<input type="text" id="indice" class="form-control formato-texto1">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3">
							<label for="area_conocimiento" class="col-form-label">Área de conocimiento</label>
							<input type="text" id="area_conocimiento" class="form-control formato-texto1">
						</div>						
						<div class="col-xs-12 col-sm-12 col-md-3">
							<label for="idioma" class="col-form-label">Idioma</label>
							<input type="text" id="idioma" class="form-control formato-texto1">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3">
							<label for="periodicidad" class="col-form-label">Periodicidad</label>
							<input type="text" id="periodicidad" class="form-control formato-texto1">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-3">
							<label for="formato" class="col-form-label">Formato</label>
							<input type="text" id="formato" class="form-control formato-texto1">
						</div>							
						<div class="col-xs-12 col-sm-12 col-md-3">
							<label for="correo_revista" class="col-form-label">Correo revista</label>
							<input type="email" id="correo_revista" class="form-control formato-texto1">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3">
							<label for="editorial" class="col-form-label">Editorial</label>
							<input type="text" id="editorial" class="form-control formato-texto1">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3">
							<label for="correo_editor" class="col-form-label">Correo Editorial</label>
							<input type="email" id="correo_editor" class="form-control formato-texto1">
						</div>
					</div>
				<!--  -->
			</div>
			<div class="modal-footer">
				<button type="button" id="btnGenerarPDF" class="btn btn-success">Generar PDF</button>
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
				<button type="button" id= "btnGuardar" class="btn btn-primary">Guardar</button>
			</div>
		</div>
	</div>
</div>