<div class="modal fade" id="revistaModalEdt" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="revistaModalEdtLabel">ID: <span id="revista_idEdt">*</span> </h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-2">
						<img src="" id="portadaEdt" alt="Portada" style="width: 100px; height: auto; cursor: pointer;">
						<input type="file" id="portadaInput" accept="image/*" style="display: none;">
					</div>

					<div class="col-xs-12 col-sm-12 col-md-5">
						<label for="revistaEdt" class="col-form-label">Revista<span class="requerido">*</span></label>
						<input type="text" id="revistaEdt" class="form-control formato-texto1 req">
						<div id="revistaEdtErr" class="error1"></div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4">
						<label for="urlEdt" class="col-form-label">Url<span class="requerido">*</span></label>
						<input type="text" id="urlEdt" class="form-control formato-texto1 req">
						<div id="urlEdtErr" class="error1"></div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-1">
						<label for="anio_inicialEdt" class="col-form-label">Año<span class="requerido">*</span></label>
						<input type="text" id="anio_inicialEdt" class="form-control formato-texto1 req">
						<div id="anio_inicialEdtErr" class="error1"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<label for="descripcionEdt" class="col-form-label">Resúmen<span class="requerido">*</span></label>
						<textarea id="descripcionEdt" class="form-control formato-texto1 req"></textarea>></textarea>
						<div id="descripcionEdtErr" class="error1"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3">
						<label for="formatoEdt" class="col-form-label">Formato<span class="requerido">*</span></label>
						<div class="toggle-container">
							<input type="range" id="formatoEdt" min="1" max="3" step="1" value="1">
							<div class="toggle-labels">
								<span id="labelImpreso">Impreso</span>
								<span id="labelDigital">Digital</span>
								<span id="labelMixto">Mixto</span>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3">
						<label for="correo_revistaEdt" class="col-form-label">Correo revista<span
								class="requerido">*</span></label>
						<input type="email" id="correo_revistaEdt" class="form-control formato-texto1 req">
						<div id="correo_revistaEdtErr" class="error1"></div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3">
						<label for="editorialEdt" class="col-form-label">Editorial<span
								class="requerido">*</span></label>
						<select id="editorialEdt" class="form-control formato-texto1 req">
							<option>Selecciona una editorial</option>
						</select>
						<div id="editorialEdtErr" class="error1"></div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3">
						<label for="correo_editorEdt" class="col-form-label">Correo editorial<span class="requerido">*</span></label>
						<input type="email" id="correo_editorEdt" class="form-control formato-texto1 req" req>
						<div id="correo_editorEdtErr" class="error1"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3">
						<label for="deposito_legal_impresoEdt" class="col-form-label">Depósito legal impreso<span
								class="impreso requerido">*</span></label>
						<input type="text" id="deposito_legal_impresoEdt" class="form-control formato-texto1 req">
						<div id="deposito_legal_impresoEdtErr" class="error1"></div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3">
						<label for="deposito_legal_digitalEdt" class="col-form-label">Depósito legal digital<span
								class="digital requerido">*</span></label>
						<input type="text" id="deposito_legal_digitalEdt" class="form-control formato-texto1 req">
						<div id="deposito_legal_digitalEdtErr" class="error1"></div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3">
						<label for="issn_impresoEdt" class="col-form-label">ISSN impreso<span
								class="impreso requerido">*</span></label>
						<input type="text" id="issn_impresoEdt" class="form-control formato-texto1 req">
						<div id="issn_impresoEdtErr" class="error1"></div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3">
						<label for="issn_digitalEdt" class="col-form-label">ISSN digital<span
								class="digital requerido">*</span></label>
						<input type="text" id="issn_digitalEdt" class="form-control formato-texto1 req">
						<div id="issn_digitalEdtErr" class="error1"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3">
						<label for="indiceEdt" class="col-form-label">Índice<span class="requerido">*</span></label>
						<select id="indiceEdt" class="form-control formato-texto1 req">
							<option>Selecciona un índice</option>
						</select>
						<div id="indiceEdtErr" class="error1"></div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3">
						<label for="area_conocimientoEdt" class="col-form-label">Área de conocimiento<span
								class="requerido">*</span></label>
						<select id="area_conocimientoEdt" class="form-control formato-texto1 req">
							<option>Selecciona un área de conocimiento</option>
						</select>
						<div id="area_conocimientoEdtErr" class="error1"></div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3">
						<label for="idiomaEdt" class="col-form-label">Idioma<span class="requerido">*</span></label>
						<select id="idiomaEdt" class="form-control formato-texto1 req">
							<option>Selecciona un idioma</option>
						</select>
						<div id="idiomaEdtErr" class="error1"></div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3">
						<label for="periodicidadEdt" class="col-form-label">Periodicidad<span
								class="requerido">*</span></label>
						<select id="periodicidadEdt" class="form-control formato-texto1 req">
							<option>Selecciona la periodicidad</option>
						</select>
						<div id="periodicidadEdtErr" class="error1"></div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" id="btnCerrarEdición" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
				<button type="button" id="btnActualizar" class="btn btn-primary">Actualizar</button>
			</div>
		</div>
	</div>
</div>