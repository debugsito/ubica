<div class="col-12 bg-light pt-3 pb-3 text-left border-bottom">
	<div class="container">
		<img src="<?php echo base_url('public/') ?>img/logo_ubica.png" alt="" style="width: 120px">
	</div>
</div>
<div class="mt-4">
	<div class="col-md-7 m-auto card pt-3 pb-3">
		<form id="formRegistro" autocomplete="off">

			<div class="form-row">
				<div class="col-md-6">
				<label for="">Nombre de la persona/negocio </label>
					<input type="text" class="form-control" name="nombre_negocio">
				</div>
				<div class="col-md-6">
				<label for="">Descripción de la persona/negocio: </label>
					<input type="text" class="form-control" name="descripcion">
				</div>
			</div>

			<div class="form-row">
				<div class="col-md-4">
				<label for="">D.N.I/RUC: </label>
					<input type="number" class="form-control" name="documento" autocomplete="off">
				</div>
				<div class="col-md-4">
				<label for="">Teléfono/Celular </label>
					<input type="number" class="form-control" name="telefono"  autocomplete="off">
				</div>
                <div class="col-md-4">
				<label for="">Correo Electrónico </label>
					<input type="email" class="form-control" name="email"  autocomplete="off">
				</div>
			</div>

			<div class="form-row">
				<div class="col-md-6">
				    <label>Rubro (Máx. 3) </label>
                    <select class="selectpicker form-control" multiple data-max-options="3" name="cmbRubro">
                        <option>Electricidad</option>
                        <option>Mecanica</option>
                        <option>Software</option>
                        <option>Construccion</option>
                        <option>Arquitectura</option>
                        <option>Costura</option>
                    </select>
				</div>

				<div class="col-md-6">
				    <label>Lista de Servicios (Máx. 5) </label>
                    <select class="selectpicker form-control" multiple data-max-options="5" name="cmbServicios">
                        <option>Electricidad</option>
                        <option>Mecanica</option>
                        <option>Software</option>
                        <option>Construccion</option>
                        <option>Arquitectura</option>
                        <option>Costura</option>
                    </select>
				</div>

			</div>


		</form>
	</div>


</div>
<script src="<?php echo base_url('public/js'); ?>/datos.js"></script>
