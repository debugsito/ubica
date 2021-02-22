<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand" href="#"><img src="<?php echo base_url('public/') ?>img/logo-pucp.png" alt="" style="width: 120px"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('sitios') ?>">Sitios</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('articulos') ?>">Articulos</a>
				</li>
			</ul>
			<div class="form-inline my-2 my-lg-0">
				<a href="<?php echo base_url('admin/') ?>logout" class="btn btn-danger mr-auto">Salir</a>
			</div>
		</div>
	</div>
</nav>