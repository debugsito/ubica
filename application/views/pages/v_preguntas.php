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
<section class="py-6">
	<div class="container">
		<h1 class="text-center">Preguntas Frecuentes</h1>
        <p class="text-center col-md-8 mx-auto">Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum.</p>

        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Collapsible Group Item #1
                    </button>
                </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Collapsible Group Item #2
                    </button>
                </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Collapsible Group Item #3
                    </button>
                </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
                </div>
            </div>
        </div>

	</div>
</section>

<section class="bg-primary pt-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
                <img src="<?php echo base_url('public/img/') ?>ubica-oficio-1.png" class="img-fluid"  style="height: 95%">
            </div>
			<div class="col-sm-6">
				<div class="text-right text-white">
					<img class="mb-4" src="<?php echo base_url('public/') ?>img/logo_ubica.png" alt="" style="width: 120px">
					<h2>
						La única tarjeta digital del <br>Perú para todos
					</h2>
					<p class="text-right">
                        Creando una tarjeta digital en Ubica obtendrás más que una tarjeta tradicional. Tendrás más opciones para que te contacten, sabrás si la usan, promocionarás tu imagen o negocio, venderás tus productos y más.	
                    </p>
					<div class="d-flex justify-content-end align-items-center">
						<!-- <label class="font-weight-bold text-info">Siguenos: </label> 
						<a class="ml-4 link-white" target="_blank" href="<?php echo FACEBOOK; ?>"><i class="fa-lg fab fa-facebook-f"></i></a>
						<a class="ml-4 link-white" target="_blank" href="<?php echo INSTAGRAM; ?>"><i class="fa-lg fab fa-instagram"></i></a> -->
                        <button class="btn btn-light text-primary font-weight-bold">
                            REGISTRARSE GRATIS
                        </button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



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
