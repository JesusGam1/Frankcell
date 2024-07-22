<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/stlyecatalogo_celulares.css">
    <title>Catalogo</title>
</head>
<body>
    <!-- Navbar Parte superior -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">FranKarcel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav, #navbarNavBottom" aria-controls="navbarNav navbarNavBottom" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto d-flex flex-grow-1" style="max-width: 600px;">
                    <input type="text" class="form-control buscar-producto" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Buscar producto">
                </div>
                <button type="button" class="btn btn-primary ms-3 btn-is" data-bs-toggle="modal" data-bs-target="#loginModal">Iniciar sesión</button>
            </div>
        </div>
    </nav>

    <!-- Modal Iniciar sesión -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Iniciar sesión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="correo" placeholder="Ingrese su correo electrónico">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña">
                        </div>
                        <button type="submit" class="btn btn-primary">Iniciar sesión</button> <br>
                        <div class="mt-3">
                            <label for="form-label">¿Aún no tienes cuenta?</label>
                            <a href="#">Regístrate</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Parte inferior -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-height">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavBottom">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="catalogo_celulares_responsivo.html">Celulares</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="catalogo_celulares_responsivo.html">Accesorios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="servici_tecnico.html">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="acercade.html">Acerca de</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="contenedor celulares" style="align-items: center; text-align: center;">
        <img src="Imagenes/bannercelular.webp" alt="" class="img-fluid" width="100%">
        <br><br>
        <h3>Catalogo Celulares</h3>
        <br><br>
        <div class="carrusel_de_marcas">
            <div class="row">
                <div class="col-6 col-sm-4 col-lg-2">
                    <img src="Imagenes/apple.png" alt="" class="img-fluid mb-3">
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <img src="Imagenes/samsungmarca.png" alt="" class="img-fluid mb-3">
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <img src="Imagenes/googlemarca.png" alt="" class="img-fluid mb-3">
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <img src="Imagenes/Motorolamarca.webp" alt="" class="img-fluid mb-3">
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <img src="Imagenes/oppomarca.png" alt="" class="img-fluid mb-3">
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <img src="Imagenes/lgmarca.png" alt="" class="img-fluid mb-3">
                </div>
            </div>
        </div>
        <br><br>
        <h3>Lo mas vendido</h3>
        <br><br>

        <!-- Empieza las imágenes, cards -->
         
        <div class="container mb-3 mt-3">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-lg-3 mb-3">
                    <div class="card">
                        <img src="Imagenes/moto edge40 telefono.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Moto Edge 40 Pro</h5>
                            <h3 class="card-title">$9,000</h3>
                            <p class="card-text">Con el nuevo motorola edge 40 pro acelera toda tu experiencia gracias a la plataforma móvil Snapdragon® 8 Gen 2,
                                sistema de 3 cámaras con 50 MP y un</p>
                            <a class="btn btn-primary btn-icono" data-bs-toggle="collapse" href="#collapse-card-1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Abrir detalles
                            </a>
                        </div>
                    </div>
                </div>


    <!--carrusel1-->
    <div class="collapse collapse_celulares mt-3 collapse-card-1" id="collapse-card-1" style=" margin:auto;">
        <div class="card carta_collapse">
            <!-- Main container with flexbox -->
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
                <!-- Vertical image container -->
                <div class="Catalogo_celulares_img_vertical mb-3 mb-md-0 collapse-img-vertical-1" >
                    <div class="d-flex flex-md-column">
                        <img src="Imagenes/moto edge40 telefono.png" alt="" class="miniatura  mb-2" style="width: 100px; height: auto; margin-bottom: 10px;">
                        <img src="Imagenes/motogimagen.jpg" alt="" class="miniatura  mb-2" style="width: 100px; height: auto; margin-bottom: 10px;">
                        <img src="Imagenes/moto edge40 telefono.png" alt="" class="miniatura  mb-2" style="width: 100px; height: auto; margin-bottom: 10px;">
                        <img src="Imagenes/moto edge40 telefono.png" alt="" class="miniatura mb-2" style="width: 100px; height: auto; margin-bottom: 10px;">
                    </div>
                </div>
                <!-- Carousel -->
                <div id="carouselExample" class="carousel slide mb-3 mb-md-0 mx-3" >
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Imagenes/moto edge40 telefono.png" class="d-block " style="width: auto;max-height: 300px;" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="Imagenes/motogimagen.jpg" class="d-block " style="width: auto;max-height: 300px;" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="Imagenes/moto edge40 telefono.png" class="d-block " style="width: auto;max-height: 300px;" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="Imagenes/moto edge40 telefono.png" class="d-block " style="width: auto;max-height: 300px;" alt="...">
                        </div>
                    </div>
             <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                </div>
                <!-- Carousel text -->
                <div class="texto_carrusel text-start" style="text-align: left;">
                    <h3>Motorola Moto G Edge 40 plus card1</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium sunt ducimus, dignissimos aspernatur nobis quidem tempore harum ex minima id architecto eos blanditiis quos aliquid quis odio. Ullam, aliquid doloremque!</p>
                    <a href="#" class="btn btn-primary btn-icono-comprar">Comprar</a>
                </div>
            </div>
        </div>
    </div>
    
     <!-- Aquí acaba el carrusel -->







             <!-- card2 -->

                <div class="col-12 col-sm-6 col-lg-3 mb-3">
                    <div class="card">
                        <img src="Imagenes/moto edge40 telefono.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Moto Edge 40</h5>
                            <h3 class="card-title">$9,000</h3>
                            <p class="card-text">Con el nuevo motorola edge 40 pro acelera toda tu experiencia gracias a la plataforma móvil Snapdragon® 8 Gen 2,
                                sistema de 3 cámaras con 50 MP y un</p>
                            <a class="btn btn-primary btn-icono" data-bs-toggle="collapse" href="#collapse-card-2" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Abrir detalles
                            </a>
                        </div>
                    </div>
                </div>
 <!--carrusel2-->
 <div class="collapse collapse_celulares mt-3 collapse-card-2" id="collapse-card-2" style="width: 75%;  margin:auto;">
    <div class="card carta_collapse">
        <!-- Main container with flexbox -->
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
            <!-- Vertical image container -->
            <div class="Catalogo_celulares_img_vertical mb-3 mb-md-0 collapse-img-vertical-2" >
                <div class="d-flex flex-md-column">
                    <img src="Imagenes/moto edge40 telefono.png" alt="" class="miniatura  mb-2" style="width: 100px; height: auto; margin-bottom: 10px;">
                    <img src="Imagenes/motogimagen.jpg" alt="" class="miniatura  mb-2" style="width: 100px; height: auto; margin-bottom: 10px;">
                    <img src="Imagenes/moto edge40 telefono.png" alt="" class="miniatura  mb-2" style="width: 100px; height: auto; margin-bottom: 10px;">
                    <img src="Imagenes/moto edge40 telefono.png" alt="" class="miniatura mb-2" style="width: 100px; height: auto; margin-bottom: 10px;">
                </div>
            </div>
            <!-- Carousel -->
            <div id="carouselExample" class="carousel slide mb-3 mb-md-0 mx-3" >
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Imagenes/moto edge40 telefono.png" class="d-block " style="width: auto;max-height: 300px;" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Imagenes/motogimagen.jpg" class="d-block " style="width: auto;max-height: 300px;" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Imagenes/moto edge40 telefono.png" class="d-block " style="width: auto;max-height: 300px;" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Imagenes/moto edge40 telefono.png" class="d-block " style="width: auto;max-height: 300px;" alt="...">
                    </div>
                </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
            </div>
            <!-- Carousel text -->
            <div class="texto_carrusel text-start" style="text-align: left;">
                <h3>Motorola Moto G Edge 40 plus card2</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium sunt ducimus, dignissimos aspernatur nobis quidem tempore harum ex minima id architecto eos blanditiis quos aliquid quis odio. Ullam, aliquid doloremque!</p>
                <a href="#" class="btn btn-primary btn-icono-comprar">Comprar</a>
            </div>
        </div>
    </div>
</div>

 <!-- Aquí acaba el carrusel -->















                <div class="col-12 col-sm-6 col-lg-3 mb-3">
                    <div class="card">
                        <img src="Imagenes/moto edge40 telefono.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Moto Edge</h5>
                            <h3 class="card-title">$9,000</h3>
                            <p class="card-text">Con el nuevo motorola edge 40 pro acelera toda tu experiencia gracias a la plataforma móvil Snapdragon® 8 Gen 2,
                                sistema de 3 cámaras con 50 MP y un</p>
                            <a class="btn btn-primary btn-icono" data-bs-toggle="collapse" href="#collapse_celulares" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Abrir detalles
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 mb-3">
                    <div class="card">
                        <img src="Imagenes/moto edge40 telefono.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Moto</h5>
                            <h3 class="card-title">$9,000</h3>
                            <p class="card-text">Con el nuevo motorola edge 40 pro acelera toda tu experiencia gracias a la plataforma móvil Snapdragon® 8 Gen 2,
                                sistema de 3 cámaras con 50 MP y un</p>
                            <a class="btn btn-primary btn-icono" data-bs-toggle="collapse" href="#collapse_celulares" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Abrir detalles
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br>

      
        

                    </div>
                    
                </div>
                
        </div>
        <!-- Más cards de celulares -->
        <div class="container mb-3 mt-3">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-lg-3 mb-3">
                    <div class="card">
                        <img src="Imagenes/moto edge40 telefono.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Moto Edge 40 Pro</h5>
                            <h3 class="card-title">$9,000</h3>
                            <p class="card-text">Con el nuevo motorola edge 40 pro acelera toda tu experiencia gracias a la plataforma móvil Snapdragon® 8 Gen 2,
                                sistema de 3 cámaras con 50 MP y un</p>
                            <a class="btn btn-primary btn-icono" data-bs-toggle="collapse" href="#collapse-card-1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Abrir detalles
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 mb-3">
                    <div class="card">
                        <img src="Imagenes/moto edge40 telefono.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Moto Edge 40</h5>
                            <h3 class="card-title">$9,000</h3>
                            <p class="card-text">Con el nuevo motorola edge 40 pro acelera toda tu experiencia gracias a la plataforma móvil Snapdragon® 8 Gen 2,
                                sistema de 3 cámaras con 50 MP y un</p>
                            <a class="btn btn-primary btn-icono" data-bs-toggle="collapse" href="#collapse_celulares" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Abrir detalles
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 mb-3">
                    <div class="card">
                        <img src="Imagenes/moto edge40 telefono.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Moto Edge</h5>
                            <h3 class="card-title">$9,000</h3>
                            <p class="card-text">Con el nuevo motorola edge 40 pro acelera toda tu experiencia gracias a la plataforma móvil Snapdragon® 8 Gen 2,
                                sistema de 3 cámaras con 50 MP y un</p>
                            <a class="btn btn-primary btn-icono" data-bs-toggle="collapse" href="#collapse_celulares" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Abrir detalles
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 mb-3">
                    <div class="card">
                        <img src="Imagenes/moto edge40 telefono.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Moto</h5>
                            <h3 class="card-title">$9,000</h3>
                            <p class="card-text">Con el nuevo motorola edge 40 pro acelera toda tu experiencia gracias a la plataforma móvil Snapdragon® 8 Gen 2,
                                sistema de 3 cámaras con 50 MP y un</p>
                            <a class="btn btn-primary btn-icono" data-bs-toggle="collapse" href="#collapse_celulares" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Abrir detalles
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br>
    </div>

</script>    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
