<header>
    <nav class="navbar navbar-expand-lg navbar-lg navbar-dark bg-dark landing">
        <div class="container">
            <a class="navbar-brand" href="#"><img width="110" src="vistas/estilos/images/logo/logo-house.png" alt="lead-ui-kit logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#leadUIMainNav" aria-controls="leadUIMainNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="leadUIMainNav">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#quienes_somos">Quienes somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#proyectos">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contactos">Contactos</a>
                    </li>
                </ul>
                <div class="form-inline">
                    <?php
                    $item = null;
                    $valor = null;

                    $contarUsuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
                    if(count($contarUsuarios)<= 0){
                    ?>
                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#registro_usuario" data-whatever="@fat">Registrarse</button>
                    <?php
                    }else{
                    ?>
                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#iniciar_sesion" data-whatever="@fat">Iniciar Sesión</button>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </nav>
    <div class="landing-sass-header-content bg-dark">
        <div class="container">
            <h1 class="text-center font-weight-bold pt-5 pb-30px mb-0 text-white">Proyectos de calidad <br>Cambiando vidas</h1>
            <div class="text-center mb-5 "><button class="btn btn-light mr-3">Ver mas...</button><button class="btn btn-outline-light">Contactos</button></div>
        </div>
    </div>
    <div class="text-center landing-sass-header-img-wrapper"><img src="vistas/estilos/images/dash/dash_3.png" alt="header-img" class="img-fluid" width="707px"></div>
</header>

<main>
    <div class="container">
        <!-- ============ QUIENES SOMOS =============== -->
        <section class="mb-5" id="quienes_somos">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="mb-3">¿Quienes somos?</h1>
                    <p class="text-muted">En P House E.I.R.L. Construcciones, nos dedicamos a materializar sueños y construir futuros sólidos. Desde [año de inicio], hemos sido líderes en la industria de la construcción, llevando a cabo proyectos que van más allá de estructuras; creamos espacios que inspiran y perduran.</p>
                    <p class="text-muted">En el mundo de la construcción, somos más que constructores; somos creadores de entornos que inspiran, edificamos hogares que albergan sueños y levantamos estructuras que definen comunidades. Desde nuestra fundación en [año de inicio], hemos liderado el camino en la industria, fusionando la visión innovadora con la artesanía tradicional.</p>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-sm-6 mb-5 d-flex align-items-center justify-content-center">
                            <span class="h1 mb-0 mr-2 text-primary font-weight-bold">320</span>
                            <span>Proyectos</span>
                        </div>
                        <div class="col-sm-6 mb-5 d-flex align-items-center justify-content-center">
                            <span class="h1 mb-0 mr-2 text-primary font-weight-bold">100</span>
                            <span>Trabajadores</span>
                        </div>
                        <div class="col-sm-6 mb-5 d-flex align-items-center justify-content-center">
                            <span class="h1 mb-0 mr-2 text-primary font-weight-bold">199</span>
                            <span>Clientes</span>
                        </div>
                        <div class="col-sm-6 mb-5 d-flex align-items-center justify-content-center">
                            <span class="h1 mb-0 mr-2 text-primary font-weight-bold">240</span>
                            <span>Máquinas</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card border-0 mb-3">
                            <div class="card-body">
                                <h3 class="font-weight-bold">Misión</h3>
                                <p class="text-gray mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, cupiditate soluta? Animi dolore voluptatem dignissimos vel.</p>
                                <a href="#!" class="font-weight-bold">Leer mas...</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0 mb-3">
                            <div class="card-body">
                                <h3 class="font-weight-bold">Visión</h3>
                                <p class="text-gray mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, cupiditate soluta? Animi dolore voluptatem dignissimos vel.</p>
                                <a href="#!" class="font-weight-bold">Leer mas..</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ LISTA DE PROYECTOS ==================== -->
        <section class="py-5" id="proyectos">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <p class="h1 text-center">Proyectos</p>
                        <p class="text-gray text-center">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card border-0 mb-3">
                            <img src="vistas/estilos/images/dash/dash_1.jpg" alt="blog" class="card-img-top rounded-0">
                            <div class="card-body">
                                <span class="text-muted small font-weight-bold d-inline-block mb-2">22 Dec 2020</span>
                                <h3 class="font-weight-bold">Floating architecture is making waves </h3>
                                <p class="text-gray mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, cupiditate soluta? Animi dolore voluptatem dignissimos vel.</p>
                                <a href="#!" class="font-weight-bold">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0 mb-3">
                            <img src="vistas/estilos/images/dash/dash_2.jpg" alt="blog" class="card-img-top rounded-0">
                            <div class="card-body">
                                <span class="text-muted small font-weight-bold d-inline-block mb-2">27 Sep 2020</span>
                                <h3 class="font-weight-bold">Learn design with our new course.</h3>
                                <p class="text-gray mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, cupiditate soluta? Animi dolore voluptatem dignissimos vel.</p>
                                <a href="#!" class="font-weight-bold">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<div class="container pb-5">
    <footer class="lead-footer shadow px-5">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="footer-brand-wrapper"><img src="https://demo.bootstrapdash.com/dashflat/template/images/logo.svg" alt="logo white"></div>
                <p class="pb-2 mb-4">Premium Support. Join over 40,000 satisfied customers who use Medium Rare
                    templates.</p>
            </div>
            <div class="col-lg-6 ml-md-auto">
                <div class="row">
                    <div class="col-sm">
                        <nav class="nav footer-nav nav-vertical my-5 my-md-0">
                            <a href="#!" class="nav-link">Inicio</a>
                            <a href="#!" class="nav-link">Quienes somos</a>
                            <a href="#!" class="nav-link">Proyectos</a>
                            <a href="#!" class="nav-link">Contactos</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex flex-column flex-sm-row flex-wrap justify-content-between mt-4">
                <nav class="lead-social-menu mb-4 mb-sm-0">
                    <a href="#!"><i class="mdi mdi-twitter-box"></i></a>
                    <a href="#!"><i class="mdi mdi-facebook-box"></i></a>
                    <a href="#!"><i class="mdi-linkedin-box"></i></a>
                    <a href="#!"><i class="mdi mdi-instagram"></i></a>
                </nav>
                <p class="footer-text text-gray order-sm-first">©2020 Lead. All rights reserved.</p>
            </div>
        </div>
    </footer>
</div>



<!-- ========================
LOGIN
======================== -->

<!-- =====================================
MODAL INICIAR SESION
===================================== -->

<div class="col-md-6 col-xl-4 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="modal fade" id="iniciar_sesion" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="ModalLabel"><b>Iniciar Sessión</b></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="pt-2" method="post" enctype="multipart/form-data">

                                <!-- ====================================
                                INGRESANDO USUARIO
                                ==================================== -->
                                <div class="form-group">
                                    <label for="Usuario">Usuario</label>
                                    <input type="text" class="form-control form-control-lg" name="ingUsuario"  placeholder="Usuario">
                                </div>

                                <!-- ====================================
                                INGRESANDO CONTRASEÑA
                                ==================================== -->
                                <div class="form-group">
                                    <label for="Usuario">Constraseña</label>
                                    <input type="password" class="form-control form-control-lg" name="ingPassword"  placeholder="Constraseña">
                                </div>

                                <!-- ====================================
                                BOTON DE INGRESAR
                                ==================================== -->
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Ingresar</button>
                                </div>

                                <!-- ====================================
                                CONTROLADOR INGRESO USUARIO
                                ==================================== -->

                                <?php

                                    $login = new ControladorUsuarios();
                                    $login->ctrIngresoUsuario();
                                    
                                ?>

                            </form>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- =====================================
MODAL REGISTRAR USUARIOS
===================================== -->
<div class="col-md-6 col-xl-4 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="modal fade" id="registro_usuario" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="ModalLabel"><b>Registrarse</b></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="pt-2" method="post" enctype="multipart/form-data">

                                <!-- ENTRADA DE NOMBRE -->
                                <div class="form-group">
                                    <label for="Usuario">Nombre</label>
                                    <input type="text" class="form-control" name="nuevoNombre" placeholder="Ingresar nombre">
                                </div>

                                <!-- ENTRADA DE USUARIO -->
                                <div class="form-group">
                                    <label for="Usuario">Usuario o correo</label>
                                    <input type="text" class="form-control" name="nuevoUsuario" placeholder="Ingresar usuario o correo">
                                </div>

                                <!-- ENTRADA DE CONTRASEÑA -->
                                <div class="form-group">
                                    <label for="Usuario">Constraseña</label>
                                    <input type="password" class="form-control" name="nuevoPassword" placeholder="Ingresar constraseña">
                                </div>

                                <!-- ENTRADA DE PERFIL -->
                                <div class="form-group">
                                    <label for="Usuario">Constraseña</label>
                                    <select class="form-control form-control-lg" name="nuevoPerfil">
                                        <option value="">Seleccionar perfil</option>
                                        <option value="Administrador">Administrador</option>
                                        <option value="Especial">Especial</option>
                                    </select>
                                </div>

                                <!-- BOTON PARA GUARDAR -->
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Registrar</button>
                                </div>


                                <!-- ===============================
                                REGISTRAMOS
                                =============================== -->
                                <?php
                                    $crearUsuario = new ControladorUsuarios();
                                    $crearUsuario->ctrCrearUsuario();
                                ?>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>