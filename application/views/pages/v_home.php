<?php 
echo $this->load->view('template/v_menu', '', true);
?>
<section class="div-home p-relative" >
	<div class="container h-100 d-flex justify-content-md-center align-items-center" >
		<div class="row" style="overflow: hidden; width: 100%">
			<div class="col-md-6 bienvenido" data-wow-duration="1s">
				<h1 class="bienvenido-text wow bounceInLeft nexa-bold">Hagamos que<br>más personas <br><span class="text-primary">te encuentren</span></h1>
				<p class="wow bounceInLeft bienvenido-parrafo">Crea tu tarjeta digital totalmente gratis y llega a todo el Perú.</p>
				<div class="wow fadeInDown" data-wow-delay="1s">
					<button class="btn btn-primary">REGISTRARSE</button>
				</div>
			</div>
			<div class="col-md-4">
			</div>
		</div>
	</div>
	<img class="img-banner wow fadeInUp" src="<?php echo base_url('public/img/') ?>banner.png">
</section>
<section class="pt-6">
	<div class="container">
		<div class="text-center">
			<h2 class="wow fadeInUp">Más de 20 Beneficios con <span class="text-primary">Ubica</span></h2>
		</div>
		<div class="owl-carousel" id="beneficios">
			<?php foreach ($beneficios as $key => $value): ?>
				<div class="slider wow bounceInUp">
					<span><?php echo $value->posicion; ?></span>
					<h5><?php echo $value->title->rendered; ?></h5>
					<?php echo $value->content->rendered; ?>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</section>
<section class="pt-6">
	<div class="container">
		<h2 class="wow fadeInUp">Así será tu <span class="text-primary">Tarjeta Digital</span></h2>
		<div class="row">
			<div class="col-md-8 d-flex justify-content-between flex-wrap align-content-center">
				<?php 
				foreach ($detalle as $key => $value) {
					?>
					<div class="detalles wow bounceInUp col-sm-6">
						<div class="icono">
							<span class="fa-2x <?php echo $value->icono; ?>"></span>
						</div>
						<div class="detalle">
							<h5><?php echo $value->title->rendered; ?></h5>
							<?php echo $value->content->rendered; ?>
						</div>
					</div>
					<?php 
				}
				?>
			</div>
			<div class="col-md-4">
				<img src="<?php echo base_url('public/img/');?>ubica-ref-1.png">
			</div>
		</div>
	</div>
</section>
<section class="pt-6">
	<div class="container">
		<h2 class="wow fadeInUp">
			Crea tu tarjeta digital <span class="text-primary">¡GRATIS!</span>
		</h2>
		<div class="d-flex justify-content-center">
			<div class="col-6">
				<form id="formRegistro" autocomplete="off">
					<div class="row">
						<div class="col-md-6 form-group">
							<label for="">Nombres: </label>
							<input type="text" class="form-control" name="nombres" required>
						</div>
						<div class="col-md-6 form-group">
							<label for="">Apellidos: </label>
							<input type="text" class="form-control" name="apellidos" required>
						</div>
						<div class="col-md-6 form-group">
							<label for="">Email: </label>
							<input type="email" class="form-control" name="email" autocomplete="off" required>
						</div>
						<div class="col-md-6 form-group">
							<label for="">Telefono: </label>
							<input type="number" class="form-control" name="telefono" required>
						</div>
						<div class="col-md-6 form-group">
							<label for="">Contraseña: </label>
							<input type="password" class="form-control" name="password"  autocomplete="off" required>
						</div>
						<div class="col-md-12 form-group text-center">
							<button class="btn btn-primary px-5 btn-redondo">REGISTRARME</button>
						</div>
						


					</div>
				</form>
				<button class="btn btn-success" id="btnLoginFb">FACEBOOK LOGIN</button>
				<div class="g-signin2" data-onsuccess="onSignIn"></div>

			</div>
		</div>
	</div>
</section>
<section class="bg-primary pt-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<img src="<?php echo base_url('public/img/') ?>ubica-oficio-1.png" class="img-fluid"  style="height: auto">
			</div>
			<div class="col-sm-6">
				<div class="text-right text-white">
					<img class="mb-4" src="<?php echo base_url('public/') ?>img/logo_ubica.png" alt="" style="width: 120px">
					<h2>
						La única tarjeta digital del <br>Perú para todos
					</h2>
					<p>
						Somos un <span class="text-info">buscador de servicios</span>, que brinda información de contacto de personas con oficio, profesionales, negocios o empresas, a través de una <span class="text-info">tarjeta de presentación digital.</span>
					</p>
					<div class="d-flex justify-content-end align-items-center">
						<label class="font-weight-bold text-info">Siguenos: </label> 
						<a class="ml-4 link-white" target="_blank" href="<?php echo FACEBOOK; ?>"><i class="fa-lg fab fa-facebook-f"></i></a>
						<a class="ml-4 link-white" target="_blank" href="<?php echo INSTAGRAM; ?>"><i class="fa-lg fab fa-instagram"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- <section class="bg-black text-white pt-5 pb-5">
	<div class="container">
		<div class="row">
			
			<div class="col-md-3">
				<img class="mb-4" src="<?php echo base_url('public/') ?>img/logo_ubica.png" alt="" style="width: 120px">
				<p>
					tarjetas digitales para personas con oficio, profesionales y negocios.
				</p>
				<div class="d-flex align-items-center">
					<a class="mr-4 link-white" target="_blank" href="<?php echo FACEBOOK; ?>"><i class="fa-lg fab fa-facebook-f"></i></a>
					<a class="mr-4 link-white" target="_blank" href="<?php echo INSTAGRAM; ?>"><i class="fa-lg fab fa-instagram"></i></a>
				</div>
			</div>
			<div class="col-md-3">
				<label class="text-info">Sobre Nosotros</label>
			</div>
			<div class="col-md-3">
				<label class="text-info">Planes</label>
				
			</div>
			<div class="col-md-3">
				<label class="text-info">Suscribete para más noticias</label>
			</div>
		</div>
	</div>
	<div class="container d-flex justify-content-between pt-4">
		<div>
			Todos los derechos reservados
		</div>
		<div>
			Desarrollado por: <a class="link-info link-none te" target="_blank" href="<?php echo LINK_GRUPO_CARHUA; ?>">Grupo Carhua</a>

		</div>
	</div>
</section> -->


<script id="tmpSlider" type="x-tmpl-mustache">
	{{#slider}}
	<div class="slider wow bounceInUp">
		<span>{{posicion}}</span>
		<h5>{{{title.rendered}}}</h5>
		<p>{{{content.rendered}}}
		</p>
	</div>
	{{/slider}}
</script>

<script id="tmpLogin" type="x-tmpl-mustache">

	<form id="formLogin" method="post">
		<div class="form-group">
			<label for="">Correo Eléctronico: </label>
			<input type="text" class="form-control" name="email" autocomplete="off" required>
		</div>
		<div class="form-group">
			<label for="">Contraseña: </label>
			<input type="password" class="form-control" name="password" autocomplete="off" required>
		</div>

	</form>
	
	
</script>
<script src="<?php echo base_url('public/js/'); ?>fb_login.js"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
