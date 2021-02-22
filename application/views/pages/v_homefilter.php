<?php
echo $this->load->view('template/v_menu', '', true);
?>
<section class="pt-6">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="Panel">
                    <nav>
                        <ul class="Tabs">
                            <li class="Tabs__tab active Tab"><a href="#">Persona</a></li>
                            <li class="Tabs__tab Tab"><a href="#">Negocio</a></li>
                            <li class="Tabs__presentation-slider" role="presentation"></li>
                        </ul>
                    </nav>
                    <div class="Panel__body">
                        <form class="g-3">
                            <div class="row mt-2">
                                <div class="col-4 center">
                                    <label for="profesion" class="visually-hidden align-middle">Profesión:</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="profesion" placeholder="Cerrajero">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-4 center">
                                    <label for="profesion" class="visually-hidden">Ubicación:</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="profesion" placeholder="Cerrajero">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-4 center">
                                    <label for="profesion" class="visually-hidden">Cerca de:</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="profesion" placeholder="Cerrajero">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-4 center">
                                    <label for="profesion" class="visually-hidden">Presupuesto:</label>
                                </div>
                                <div class="col-8">
                                    <div class="display">
                                        <span id="min">10</span>
                                        <span id="max">100</span>
                                    </div>
                                    <div class="range-slide">
                                        <div class="slide">
                                            <div class="line" id="line" style="left: 0%; right: 0%;"></div>
                                            <span class="thumb" id="thumbMin" style="left: 0%;"></span>
                                            <span class="thumb" id="thumbMax" style="left: 100%;"></span>
                                        </div>
                                        <input class="slideinput" id="rangeMin" type="range" max="100" min="10" step="5" value="0">
                                        <input class="slideinput" id="rangeMax" type="range" max="100" min="10" step="5" value="100">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="subtitle-grey">
                                    <i class="fa fa-cog"></i><span>Busqueda por nombre</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 center">
                                    <label for="profesion" class="visually-hidden">Nombre:</label>
                                </div>
                                <div class="col-8">
                                    <div class="right-inner-addon input-container">
                                        <i class="fa fa-search"></i>
                                        <input type="text"
                                               class="form-control"
                                               placeholder="Ronald Pérez" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-primary btn-block">Buscar</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-cyan btn-block" >Limpiar filtros</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="row">
                    <div class="col font-weight-bold">
                        <span class="text-primary">24 profesionales</span> cerca de ti
                    </div>
                </div>
                <hr class="hr-cyan">
                <div class="row">
                    <div class="col-4">
                        <div class="card mt-4">
                            <div class="card-horizontal">
                                <div class="img-square-wrapper">
                                    <img class="card_img" src="<?php echo base_url('public/img/') ?>card_image_perfil.png" alt="Card image cap">
                                </div>
                                <div class="card-body card_home">
                                    <div class="font-weight-bold text-primary">Rodolfo Zárate</div>
                                    <div class="font-weight-normal">Jardinero</div>
                                    <div class="card-text"><img class="card_img" src="<?php echo base_url('public/img/') ?>caritas.png" alt="Card image cap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card mt-4">
                            <div class="card-horizontal">
                                <div class="img-square-wrapper">
                                    <img class="card_img" src="<?php echo base_url('public/img/') ?>card_image_perfil.png" alt="Card image cap">
                                </div>
                                <div class="card-body card_home">
                                    <div class="font-weight-bold text-primary">Rodolfo Zárate</div>
                                    <div class="font-weight-normal">Jardinero</div>
                                    <div class="card-text"><img class="card_img" src="<?php echo base_url('public/img/') ?>caritas.png" alt="Card image cap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card mt-4">
                            <div class="card-horizontal">
                                <div class="img-square-wrapper">
                                    <img class="card_img" src="<?php echo base_url('public/img/') ?>card_image_perfil.png" alt="Card image cap">
                                </div>
                                <div class="card-body card_home">
                                    <div class="font-weight-bold text-primary">Rodolfo Zárate</div>
                                    <div class="font-weight-normal">Jardinero</div>
                                    <div class="card-text"><img class="card_img" src="<?php echo base_url('public/img/') ?>caritas.png" alt="Card image cap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="card mt-4">
                            <div class="card-horizontal">
                                <div class="img-square-wrapper">
                                    <img class="card_img" src="<?php echo base_url('public/img/') ?>card_image_perfil.png" alt="Card image cap">
                                </div>
                                <div class="card-body card_home">
                                    <div class="font-weight-bold text-primary">Rodolfo Zárate</div>
                                    <div class="font-weight-normal">Jardinero</div>
                                    <div class="card-text"><img class="card_img" src="<?php echo base_url('public/img/') ?>caritas.png" alt="Card image cap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card mt-4">
                            <div class="card-horizontal">
                                <div class="img-square-wrapper">
                                    <img class="card_img" src="<?php echo base_url('public/img/') ?>card_image_perfil.png" alt="Card image cap">
                                </div>
                                <div class="card-body card_home">
                                    <div class="font-weight-bold text-primary">Rodolfo Zárate</div>
                                    <div class="font-weight-normal">Jardinero</div>
                                    <div class="card-text"><img class="card_img" src="<?php echo base_url('public/img/') ?>caritas.png" alt="Card image cap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card mt-4">
                            <div class="card-horizontal">
                                <div class="img-square-wrapper">
                                    <img class="card_img" src="<?php echo base_url('public/img/') ?>card_image_perfil.png" alt="Card image cap">
                                </div>
                                <div class="card-body card_home">
                                    <div class="font-weight-bold text-primary">Rodolfo Zárate</div>
                                    <div class="font-weight-normal">Jardinero</div>
                                    <div class="card-text"><img class="card_img" src="<?php echo base_url('public/img/') ?>caritas.png" alt="Card image cap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="card mt-4">
                            <div class="card-horizontal">
                                <div class="img-square-wrapper">
                                    <img class="card_img" src="<?php echo base_url('public/img/') ?>card_image_perfil.png" alt="Card image cap">
                                </div>
                                <div class="card-body card_home">
                                    <div class="font-weight-bold text-primary">Rodolfo Zárate</div>
                                    <div class="font-weight-normal">Jardinero</div>
                                    <div class="card-text"><img class="card_img" src="<?php echo base_url('public/img/') ?>caritas.png" alt="Card image cap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card mt-4">
                            <div class="card-horizontal">
                                <div class="img-square-wrapper">
                                    <img class="card_img" src="<?php echo base_url('public/img/') ?>card_image_perfil.png" alt="Card image cap">
                                </div>
                                <div class="card-body card_home">
                                    <div class="font-weight-bold text-primary">Rodolfo Zárate</div>
                                    <div class="font-weight-normal">Jardinero</div>
                                    <div class="card-text"><img class="card_img" src="<?php echo base_url('public/img/') ?>caritas.png" alt="Card image cap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card mt-4">
                            <div class="card-horizontal">
                                <div class="img-square-wrapper">
                                    <img class="card_img" src="<?php echo base_url('public/img/') ?>card_image_perfil.png" alt="Card image cap">
                                </div>
                                <div class="card-body card_home">
                                    <div class="font-weight-bold text-primary">Rodolfo Zárate</div>
                                    <div class="font-weight-normal">Jardinero</div>
                                    <div class="card-text"><img class="card_img" src="<?php echo base_url('public/img/') ?>caritas.png" alt="Card image cap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="card mt-4">
                            <div class="card-horizontal">
                                <div class="img-square-wrapper">
                                    <img class="card_img" src="<?php echo base_url('public/img/') ?>card_image_perfil.png" alt="Card image cap">
                                </div>
                                <div class="card-body card_home">
                                    <div class="font-weight-bold text-primary">Rodolfo Zárate</div>
                                    <div class="font-weight-normal">Jardinero</div>
                                    <div class="card-text"><img class="card_img" src="<?php echo base_url('public/img/') ?>caritas.png" alt="Card image cap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card mt-4">
                            <div class="card-horizontal">
                                <div class="img-square-wrapper">
                                    <img class="card_img" src="<?php echo base_url('public/img/') ?>card_image_perfil.png" alt="Card image cap">
                                </div>
                                <div class="card-body card_home">
                                    <div class="font-weight-bold text-primary">Rodolfo Zárate</div>
                                    <div class="font-weight-normal">Jardinero</div>
                                    <div class="card-text"><img class="card_img" src="<?php echo base_url('public/img/') ?>caritas.png" alt="Card image cap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card mt-4">
                            <div class="card-horizontal">
                                <div class="img-square-wrapper">
                                    <img class="card_img" src="<?php echo base_url('public/img/') ?>card_image_perfil.png" alt="Card image cap">
                                </div>
                                <div class="card-body card_home">
                                    <div class="font-weight-bold text-primary">Rodolfo Zárate</div>
                                    <div class="font-weight-normal">Jardinero</div>
                                    <div class="card-text"><img class="card_img" src="<?php echo base_url('public/img/') ?>caritas.png" alt="Card image cap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="card mt-4">
                            <div class="card-horizontal">
                                <div class="img-square-wrapper">
                                    <img class="card_img" src="<?php echo base_url('public/img/') ?>card_image_perfil.png" alt="Card image cap">
                                </div>
                                <div class="card-body card_home">
                                    <div class="font-weight-bold text-primary">Rodolfo Zárate</div>
                                    <div class="font-weight-normal">Jardinero</div>
                                    <div class="card-text"><img class="card_img" src="<?php echo base_url('public/img/') ?>caritas.png" alt="Card image cap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card mt-4">
                            <div class="card-horizontal">
                                <div class="img-square-wrapper">
                                    <img class="card_img" src="<?php echo base_url('public/img/') ?>card_image_perfil.png" alt="Card image cap">
                                </div>
                                <div class="card-body card_home">
                                    <div class="font-weight-bold text-primary">Rodolfo Zárate</div>
                                    <div class="font-weight-normal">Jardinero</div>
                                    <div class="card-text"><img class="card_img" src="<?php echo base_url('public/img/') ?>caritas.png" alt="Card image cap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card mt-4">
                            <div class="card-horizontal">
                                <div class="img-square-wrapper">
                                    <img class="card_img" src="<?php echo base_url('public/img/') ?>card_image_perfil.png" alt="Card image cap">
                                </div>
                                <div class="card-body card_home">
                                    <div class="font-weight-bold text-primary">Rodolfo Zárate</div>
                                    <div class="font-weight-normal">Jardinero</div>
                                    <div class="card-text"><img class="card_img" src="<?php echo base_url('public/img/') ?>caritas.png" alt="Card image cap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col font-weight-bold" style="color: #8A8A8A">
                        Fin de los resultados...
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section>
<div class="container">
    <div class="row mt-5">
        <div class="col mt-5">
            <p class="h1 text-center font-weight-bold">Los profesionales más recomendados</p>
            <p class="h2 text-center">¿Buscas un abogado, maestro de obra, freelance?</p>
        </div>
    </div>
</div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card mt-4">
                    <div class="card-horizontal">
                        <div class="img-square-wrapper">
                            <img class="card_img" src="<?php echo base_url('public/img/') ?>card_image_perfil.png" alt="Card image cap">
                        </div>
                        <div class="card-body card_home">
                            <div class="font-weight-bold text-primary">Rodolfo Zárate</div>
                            <div class="font-weight-normal">Jardinero</div>
                            <div class="card-text"><img class="card_img" src="<?php echo base_url('public/img/') ?>caritas.png" alt="Card image cap"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mt-4">
                    <div class="card-horizontal">
                        <div class="img-square-wrapper">
                            <img class="card_img" src="<?php echo base_url('public/img/') ?>card_image_perfil.png" alt="Card image cap">
                        </div>
                        <div class="card-body card_home">
                            <div class="font-weight-bold text-primary">Rodolfo Zárate</div>
                            <div class="font-weight-normal">Jardinero</div>
                            <div class="card-text"><img class="card_img" src="<?php echo base_url('public/img/') ?>caritas.png" alt="Card image cap"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mt-4">
                    <div class="card-horizontal">
                        <div class="img-square-wrapper">
                            <img class="card_img" src="<?php echo base_url('public/img/') ?>card_image_perfil.png" alt="Card image cap">
                        </div>
                        <div class="card-body card_home">
                            <div class="font-weight-bold text-primary">Rodolfo Zárate</div>
                            <div class="font-weight-normal">Jardinero</div>
                            <div class="card-text"><img class="card_img" src="<?php echo base_url('public/img/') ?>caritas.png" alt="Card image cap"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card mt-4">
                    <div class="card-horizontal">
                        <div class="img-square-wrapper">
                            <img class="card_img" src="<?php echo base_url('public/img/') ?>card_image_perfil.png" alt="Card image cap">
                        </div>
                        <div class="card-body card_home">
                            <div class="font-weight-bold text-primary">Rodolfo Zárate</div>
                            <div class="font-weight-normal">Jardinero</div>
                            <div class="card-text"><img class="card_img" src="<?php echo base_url('public/img/') ?>caritas.png" alt="Card image cap"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mt-4">
                    <div class="card-horizontal">
                        <div class="img-square-wrapper">
                            <img class="card_img" src="<?php echo base_url('public/img/') ?>card_image_perfil.png" alt="Card image cap">
                        </div>
                        <div class="card-body card_home">
                            <div class="font-weight-bold text-primary">Rodolfo Zárate</div>
                            <div class="font-weight-normal">Jardinero</div>
                            <div class="card-text"><img class="card_img" src="<?php echo base_url('public/img/') ?>caritas.png" alt="Card image cap"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mt-4">
                    <div class="card-horizontal">
                        <div class="img-square-wrapper">
                            <img class="card_img" src="<?php echo base_url('public/img/') ?>card_image_perfil.png" alt="Card image cap">
                        </div>
                        <div class="card-body card_home">
                            <div class="font-weight-bold text-primary">Rodolfo Zárate</div>
                            <div class="font-weight-normal">Jardinero</div>
                            <div class="card-text"><img class="card_img" src="<?php echo base_url('public/img/') ?>caritas.png" alt="Card image cap"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card mt-4">
                    <div class="card-horizontal">
                        <div class="img-square-wrapper">
                            <img class="card_img" src="<?php echo base_url('public/img/') ?>card_image_perfil.png" alt="Card image cap">
                        </div>
                        <div class="card-body card_home">
                            <div class="font-weight-bold text-primary">Rodolfo Zárate</div>
                            <div class="font-weight-normal">Jardinero</div>
                            <div class="card-text"><img class="card_img" src="<?php echo base_url('public/img/') ?>caritas.png" alt="Card image cap"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mt-4">
                    <div class="card-horizontal">
                        <div class="img-square-wrapper">
                            <img class="card_img" src="<?php echo base_url('public/img/') ?>card_image_perfil.png" alt="Card image cap">
                        </div>
                        <div class="card-body card_home">
                            <div class="font-weight-bold text-primary">Rodolfo Zárate</div>
                            <div class="font-weight-normal">Jardinero</div>
                            <div class="card-text"><img class="card_img" src="<?php echo base_url('public/img/') ?>caritas.png" alt="Card image cap"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mt-4">
                    <div class="card-horizontal">
                        <div class="img-square-wrapper">
                            <img class="card_img" src="<?php echo base_url('public/img/') ?>card_image_perfil.png" alt="Card image cap">
                        </div>
                        <div class="card-body card_home">
                            <div class="font-weight-bold text-primary">Rodolfo Zárate</div>
                            <div class="font-weight-normal">Jardinero</div>
                            <div class="card-text"><img class="card_img" src="<?php echo base_url('public/img/') ?>caritas.png" alt="Card image cap"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <div class="text-center">
                    <button type="button" class="btn btn-primary btn-lg my-2 px-4 text-white my-sm-0 btn-redondo">Ver más</button>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<section>
    <div class="container">
        <div class="row mt-5">
            <div class="col mt-5">
                <p class="h1 text-center font-weight-bold">¿Qué negocio estás buscando?</p>
                <p class="h2 text-center">Quizás una ferreteria, sastrería, carwash...</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-4">
                <div class="card card-border-round">
                    <img class="card-img" src="<?php echo base_url('public/img/') ?>makilandia.png" alt="Makilandia">
                    <div class="card-img-overlay text-white d-flex flex-column">
                        <div class="ml-auto p-2">
                            <div class="tooltip-olverlay">ABIERTO</div>
                        </div>
                        <div class="mt-auto p-2">
                            <h8 class="card-subtitle mb-2 align-self-end">Miraflores</h8>
                            <h4 class="card-title font-weight-bold">Makilantia</h4>
                            <a href="" style="color: white; border-bottom: 1px solid white">Ver la carta</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card card-border-round">
                    <img class="card-img" src="<?php echo base_url('public/img/') ?>braseria.png" alt="Makilandia">
                    <div class="card-img-overlay text-white d-flex flex-column">
                        <div class="ml-auto p-2">
                            <div class="tooltip-olverlay">ABIERTO</div>
                        </div>
                        <div class="mt-auto">
                            <h8 class="card-subtitle mb-2 align-self-end">Miraflores</h8>
                            <h4 class="card-title font-weight-bold">La Brasería</h4>
                            <a href="" style="color: white; border-bottom: 1px solid white">Ver la carta</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card card-border-round">
                    <img class="card-img" src="<?php echo base_url('public/img/') ?>pizza_peperoni.png" alt="Makilandia">
                    <div class="card-img-overlay text-white d-flex flex-column">
                        <div class="ml-auto p-2">
                            <div class="tooltip-olverlay">ABIERTO</div>
                        </div>
                        <div class="mt-auto">
                            <h8 class="card-subtitle mb-2 align-self-end">Miraflores</h8>
                            <h4 class="card-title font-weight-bold">Pizza Pepe&Roni</h4>
                            <a href="" style="color: white; border-bottom: 1px solid white">Ver la carta</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row mt-5">
            <div class="col mt-5">
                <p class="h1 text-center font-weight-bold">¿Qué se te antoja hoy??</p>
                <p class="h2 text-center">Quizás una pizza, pollo a la brasa, makis...</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-4">
                <div class="card card-border-round">
                    <img class="card-img" src="<?php echo base_url('public/img/') ?>makilandia_2.png" alt="Makilandia">
                    <div class="card-img-overlay text-white d-flex flex-column">
                        <div class="ml-auto p-2">
                            <div class="tooltip-olverlay">ABIERTO</div>
                        </div>
                        <div class="mt-auto">
                            <h8 class="card-subtitle mb-2 align-self-end">Miraflores</h8>
                            <h4 class="card-title font-weight-bold">Makilantia</h4>
                            <a href="" style="color: white; border-bottom: 1px solid white">Ver la carta</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card card-border-round">
                    <img class="card-img" src="<?php echo base_url('public/img/') ?>braseria_2.png" alt="Makilandia">
                    <div class="card-img-overlay text-white d-flex flex-column">
                        <div class="ml-auto p-2">
                            <div class="tooltip-olverlay">ABIERTO</div>
                        </div>
                        <div class="mt-auto">
                            <h8 class="card-subtitle mb-2 align-self-end">Miraflores</h8>
                            <h4 class="card-title font-weight-bold">La Brasería</h4>
                            <a href="" style="color: white; border-bottom: 1px solid white">Ver la carta</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card card-border-round">
                    <img class="card-img" src="<?php echo base_url('public/img/') ?>pizza_peperoni_2.png" alt="Makilandia">
                    <div class="card-img-overlay text-white d-flex flex-column">
                        <div class="ml-auto p-2">
                            <div class="tooltip-olverlay">ABIERTO</div>
                        </div>
                        <div class="mt-auto">
                            <h8 class="card-subtitle mb-2 align-self-end">Miraflores</h8>
                            <h4 class="card-title font-weight-bold">Pizza Pepe&Roni</h4>
                            <a href="" style="color: white; border-bottom: 1px solid white">Ver la carta</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary pt-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo base_url('public/img/') ?>ubica-oficio-1.png" class="img-fluid"
                     style="height: auto">
            </div>
            <div class="col-sm-6">
                <div class="text-right text-white">
                    <img class="mb-4" src="<?php echo base_url('public/') ?>img/logo_inverse.png" alt=""
                         style="width: 15em">
                    <h2>
                        La única tarjeta digital del <br>Perú para todos
                    </h2>
                    <p>
                        Somos un <span class="text-info">buscador de servicios</span>, que brinda información de
                        contacto de personas con oficio, profesionales, negocios o empresas, a través de una <span
                                class="text-info">tarjeta de presentación digital.</span>
                    </p>
                    <div class="d-flex justify-content-end align-items-center">
                        <label class="font-weight-bold text-info">Siguenos: </label>
                        <a class="ml-4 link-white" target="_blank" href="<?php echo FACEBOOK; ?>"><i
                                    class="fa-lg fab fa-facebook-f"></i></a>
                        <a class="ml-4 link-white" target="_blank" href="<?php echo INSTAGRAM; ?>"><i
                                    class="fa-lg fab fa-instagram"></i></a>
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
	{{/
    slider}}

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
<script src="<?php echo base_url('public/js/'); ?>custom.js"></script>
<script src="<?php echo base_url('public/js/'); ?>fb_login.js"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
