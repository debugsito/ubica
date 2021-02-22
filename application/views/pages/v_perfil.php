<?php 
echo $this->load->view('template/v_menu', '', true);
?>

<section class="container pt-6">
    <div class="row">
        <div class="col-md-8 col-12">
            <div class="card">
                <img src="<?php echo base_url('public/img/')?>PortadaPerfil.png" class="card-img-top">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <img src="<?php echo base_url('public/img/')?>mi_perfil.png" class="img-fluid perfil-img border-info border-right">
                        </div>
                        <div class="col-md-3 offset-md-2">
                            <img src="<?php echo base_url('public/img/')?>level.png" class="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7">
                            <h3 class="text-primary font-weight-bold">Ronald Pérez</h3>
                            <h4>
                                <span class="border-right pr-2 border-info">Mécanico</span>
                                <span class="border-right pr-2 border-info">Planchador</span>
                                <span>Pintor</span>
                            </h4>
                            <p>Lima, San Isidro | 38 trabajos realizados con Ubica </p>
                        </div>
                        <div class="col-md-3 offset-md-2">
                            <button class="col-md-12 col-sm-3 btn btn-primary btn-lg btn-block rounded-pill">
                                <img src="<?php echo base_url('public/img/')?>icono-call.png" alt=""> Llamar
                            </button>
                               
                            <button class="col-md-12 col-sm-3 btn btn-primary btn-lg btn-block rounded-pill">
                                <img src="<?php echo base_url('public/img/')?>icono-wsp.png" alt=""> Mensaje
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-12">
            <div class="card p-3 ">
                <h3 class="mb-2 font-weight-bold">Acerca de <span class="text-primary">Ronald</span></h3>
                <p>Cuento con más de 20 años de experiencia en la marca Subaru atendiendo cualquier problea o avería de su auto.</p>

                <ul class="listAcercaDe pl-0">
                    <li class="font-font-weight-bold"><img src="<?php echo base_url('public/img/')?>dni-icono.png" class="img-fluid"> 45 años / DNI: 71507874</li>
                    <li class="font-font-weight-bold"><img src="<?php echo base_url('public/img/')?>call-icono.png" class="img-fluid"> 999 999 999</li>
                    <li class="font-font-weight-bold"><img src="<?php echo base_url('public/img/')?>message-icono.png" class="img-fluid"> ronaldperez@gmail.com</li>
                    <li class="font-font-weight-bold"><img src="<?php echo base_url('public/img/')?>ubicacion-icono.png" class="img-fluid"> San Isidro</li>
                </ul>

                <span class="col-md-12 mx-auto border-bottom border-info"></span>

                <h4 class="font-weight-bold pt-2">Actividad</h4>
                <ul class="listAcercaDe pl-0">
                    <li class="d-flex justify-content-between align-items-center">Años de experiencia <span class="text-primary">25</span></li>
                    <li class="d-flex justify-content-between align-items-center">Servicios realizados <span class="text-primary">11</span></li>
                    <li class="d-flex justify-content-between align-items-center">Incumplimientos <span class="text-primary">0</span></li>
                    <li class="d-flex justify-content-between align-items-center">Tiempo en Ubica <span class="text-primary">1 mes</span></li>
                </ul>

                <button class="btn btn-primary col-md-8 mx-auto rounded-pill">COMPARTIR</button>
            </div>
        </div>

    </div>

    <div class="row pt-4">
        <div class="col-md-8">
            <div class="card p-3">
                <h2 class="mb-0">Servicios que ofrezco</h2>

                <ul class="listAcercaDe pl-0">
                    <li class="text-primary"><img src="<?php echo base_url('public/img/')?>service-icon.png" alt=""> Mecánica general</li>
                    <li class="text-primary"><img src="<?php echo base_url('public/img/')?>service-icon.png" alt=""> Cambio de Aceite</li>
                    <li class="text-primary"><img src="<?php echo base_url('public/img/')?>service-icon.png" alt=""> Repuestos Originales</li>
                    <li class="text-primary"><img src="<?php echo base_url('public/img/')?>service-icon.png" alt=""> Planchado y pintura</li>
                    <li class="text-primary"><img src="<?php echo base_url('public/img/')?>service-icon.png" alt=""> Cambio de sistema de combustible</li>
                    
                </ul>
            </div>

            <div class="card mt-4">
                <h2 class="mb-0 p-3">Experiencia Laboral</h2>

                <div class="media p-3">
                    <img src="<?php echo base_url('public/img/')?>mi_perfil.png" class="img-fluid mr-3" style="width:70px;">
                    <div class="media-body">
                        <h5 class="text-primary font-weight-bold mb-0">Mécanico Senior</h5>
                        Taller mecánico Ronald Corporation
                        <p class="text-muted">Enero 2016 - Actualidad (5 años) </p>

                        <p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem.</p>
                    </div>
                </div>

                <span class="col-md-10 border-bottom border-info mx-auto mb-3"></span>

                <div class="media p-3">
                    <img src="<?php echo base_url('public/img/')?>mi_perfil.png" class="img-fluid mr-3" style="width:70px;">
                    <div class="media-body">
                        <h5 class="text-primary font-weight-bold mb-0">Mécanico Senior</h5>
                        Taller mecánico Ronald Corporation
                        <p class="text-muted">Enero 2016 - Actualidad (5 años) </p>

                        <p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem.</p>
                    </div>
                </div>

                <div class="card-footer text-center">
                    <span class="text-primary font-weight-bold">Ver más trabajos</span>
                </div>
            </div>

            <div class="card mt-4 px-4 py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="mb-0">Mis últimos trabajos</h2>

                    <i class="fa fa-next"></i>
                </div>
                

                <div class="row mt-3">
                    <div class="col-md-4"><img src="<?php echo base_url('public/img/')?>ultimos-trabajos.png" class="img-fluid"></div>
                    <div class="col-md-4"><img src="<?php echo base_url('public/img/')?>ultimos-trabajos.png" class="img-fluid"></div>
                    <div class="col-md-4"><img src="<?php echo base_url('public/img/')?>ultimos-trabajos.png" class="img-fluid"></div>
                </div>

                
            </div>


            <div class="card mt-4">
                <h2 class="mb-0 p-3">Recomendaciones</h2>

                <div class="media p-3">
                    <img src="<?php echo base_url('public/img/')?>mi_perfil.png" class="img-fluid mr-3" style="width:70px;">
                    <div class="media-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-primary font-weight-bold mb-0">Rodolfo Zárate</h5>
                            <img src="<?php echo base_url('public/img/')?>level.png" class="">
                        </div>
                        Jefe de mecánica Ronald Corporation
                        <p class="text-muted">28 de noviembre 2020</p>

                        <p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem.</p>
                    </div>
                </div>

                <span class="col-md-10 border-bottom border-info mx-auto mb-3"></span>

                <div class="media p-3">
                    <img src="<?php echo base_url('public/img/')?>mi_perfil.png" class="img-fluid mr-3" style="width:70px;">
                    <div class="media-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-primary font-weight-bold mb-0">Rodolfo Zárate</h5>
                            <img src="<?php echo base_url('public/img/')?>level.png" class="">
                        </div>
                        Jefe de mecánica Ronald Corporation
                        <p class="text-muted">28 de noviembre 2020</p>

                        <p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem.</p>
                    </div>
                </div>

                <div class="card-footer text-center">
                    <span class="text-primary font-weight-bold">Ver más recomendaciones</span>
                </div>
            </div>
        </div>


        <!-- OTROS MECANICOS PARTE DERECHA -->
        <div class="col-md-4">
            <div class="card p-3">
                <h2 class="mb-3">Otros mecánicos:</h2>

                <div class="media">
                    <img src="<?php echo base_url('public/img/')?>mi_perfil.png" class="img-fluid mr-3 rounded-circle align-self-center" style="width:50px;">
                    <div class="media-body">
                        <p class="mb-0"><strong>José Merino | Mecánico</strong></p>
                        <img src="<?php echo base_url('public/img/')?>level.png" alt="">
                    </div>
                </div>

                <div class="media mt-2">
                    <img src="<?php echo base_url('public/img/')?>mi_perfil.png" class="img-fluid mr-3 rounded-circle align-self-center" style="width:50px;">
                    <div class="media-body">
                        <p class="mb-0"><strong>José Merino | Mecánico</strong></p>
                        <img src="<?php echo base_url('public/img/')?>level.png" alt="">
                    </div>
                </div>

                <div class="media mt-2">
                    <img src="<?php echo base_url('public/img/')?>mi_perfil.png" class="img-fluid mr-3 rounded-circle align-self-center" style="width:50px;">
                    <div class="media-body">
                        <p class="mb-0"><strong>José Merino | Mecánico</strong></p>
                        <img src="<?php echo base_url('public/img/')?>level.png" alt="">
                    </div>
                </div>

                <div class="media mt-2">
                    <img src="<?php echo base_url('public/img/')?>mi_perfil.png" class="img-fluid mr-3 rounded-circle align-self-center" style="width:50px;">
                    <div class="media-body">
                        <p class="mb-0"><strong>José Merino | Mecánico</strong></p>
                        <img src="<?php echo base_url('public/img/')?>level.png" alt="">
                    </div>
                </div>

                <div class="media mt-2">
                    <img src="<?php echo base_url('public/img/')?>mi_perfil.png" class="img-fluid mr-3 rounded-circle align-self-center" style="width:50px;">
                    <div class="media-body">
                        <p class="mb-0"><strong>José Merino | Mecánico</strong></p>
                        <img src="<?php echo base_url('public/img/')?>level.png" alt="">
                    </div>
                </div>
                
            </div>
        </div>
    </div>


</section>

<section class="bg-primary mt-5">
    <div class="container p-5">
        <div class="row">
            <div class="col-md-9">
                <h2 class="text-white mb-0">¿Quieres crear una tarjeta digital como esta? Tú tammbien puedes tenerla completamente GRATIS</h2>
            </div>

            <div class="col-md-3">
                <button class="btn btn-light text-primary  rounded-pill font-weight-bold">
                    CREAR TARJETA
                </button>
            </div>
        </div>
    </div>
</section>

<style>
    .perfil-img{
        position : relative;
        margin-top : -30%;
    }

    .listAcercaDe{
        list-style:none;
    }

    .card-footer{
        border-top: 3px solid #21ECC8;
        background-color: rgba(0, 0, 0, 0.0);
    }
</style>