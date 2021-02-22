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
					<label for="">Nombres: </label>
					<input type="text" class="form-control" name="nombres" required>
				</div>
				<div class="col-md-6">
					<label for="">Apellidos: </label>
					<input type="text" class="form-control" name="apellidos" required>
				</div>
				<div class="col-md-6">
					<label for="">Email: </label>
					<input type="email" class="form-control" name="email" autocomplete="off" required>>
				</div>
				<div class="col-md-6">
					<label for="">Contraseña: </label>
					<input type="password" class="form-control" name="password"  autocomplete="off" required>
				</div>
				<div class="col-md-6">
					<label for="">Telefono: </label>
					<input type="number" class="form-control" name="telefono" required>
				</div>
				<div class="col-md-6 my-auto ">
					<button class="btn btn-success  mx-auto float-right mt-4">Registrarse</button>
				</div>
			</div>


		</form>
	</div>


</div>
<script src="<?php echo base_url('public/js'); ?>/login.js"></script>
