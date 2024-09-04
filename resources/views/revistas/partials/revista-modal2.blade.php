<!-- Modal -->
<div class="modal fade" id="revistaModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="revistaModalLabel">Modal title</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<!--  -->
				<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-3">
							<!-- <label for="portada" class="col-form-label">Portada</label> -->
							<!-- <input type="text" id="portada" class="form-control formato-texto1"> -->
							 <img src="" id="portada" alt="Portada" style="width: 100px; height: auto;">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-7">
							<label for="revista" class="col-form-label">Revista</label>
							<input type="text" id="revista" class="form-control formato-texto1">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-2">
							<label for="anio_inicial" class="col-form-label">Año</label>
							<input type="text" id="anio_inicial" class="form-control formato-texto1">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6">
							<label for="indice" class="col-form-label">Índice</label>
							<input type="text" id="indice" class="form-control formato-texto1">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6">
							<label for="editorial" class="col-form-label">Editorial</label>
							<input type="text" id="editorial" class="form-control formato-texto1">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-3">
							<label for="area_conocimiento" class="col-form-label">Áreas conocimiento</label>
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
						<div class="col-xs-12 col-sm-12 col-md-3">
							<label for="formato" class="col-form-label">Formato</label>
							<input type="text" id="formato" class="form-control formato-texto1">
						</div>
					</div>
				<!--  -->
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
				<button type="button" id= "btnGuardar" class="btn btn-primary">Guardar</button>
			</div>
		</div>
	</div>
</div>