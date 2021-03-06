<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>El corte irlandés</title>
        <link rel="icon" href="logos/lepre.ico" type="image/x-icon">
        <style>

            body {

                font-family: Arial, Helvetica, sans-serif;
                font-size: medium;
            }

            /* estilos para los botones del menu */

            .btn, .btn-primary {

                background-color:#0E9C62;
                border-color: #0E9C62;
                border-radius: 0%;
                font-size:large;
            }

            .btn:hover, .btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active {

                background-color:#594038;
                border-color: #58DEA6;
            }

            .btn-primary:focus, .btn-primary:active, .btn-primary.active {

                box-shadow:0 0 0 0.1rem #FFB37B;
                background-color:#594038;
            }

            .dropdown-item:hover {

                background-color:#58DEA6;
            }

            .dropdown-item:focus {

                background-color:#FFB37B;
            }
            
            /* estilos para el menu en general */

            .marco-menu {
                border-left: none !important;
                border-right: none !important;
                border-color: #594038 !important;
                background-color: #E4E4E4;
            }

            /* estilos para el body */

            .articulos {

                /* background-color: #C5A094; */
                /* background-color:#FFB37B; */
                background-color: #E4E4E4;
            }

            /* estilos footer */
            .footer {

                background-color: #58DEA6;
            }

        </style>
    </head>
    <body>
        <!-- empieza el header donde irá el logo y será clickable para ir a la portada -->
        <header>
            <div class="container-fluid">
                <div class="row justify-content-center mt-2">
                    <div class="col-6 ">
                        <a href="#">
                            <img src="imagenes/banner-logo.png" class="img-fluid mx-auto" alt="Volver a portada">
                        </a>
                    </div>
                </div>
            </div>
        </header> 
        <!-- acaba el header, por ahora dejo el menu fuera -->
        <div class="container-fluid menu-principal mt-3"> <!-- empieza el menu  -->
            <div class="row border border-5 marco-menu mx-5">
                <div class="col-12  align-self-center text-center menu my-3">
                    <div class="btn-group"> <!-- empiezan los botones del menu -->
                        <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Electrodomésticos
                        </button>
                        <<div class="dropdown-menu">
                        <a class="dropdown-item" href="grandes.php">Grandes Electrodomésticos</a>
                        <a class="dropdown-item" href="pequeños.php">Pequeños Electrodomésticos</a>
                        <a class="dropdown-item" href="otros.php">Otros Electrodomésticos</a>
                        <div class="dropdown-divider"></div> <!-- esto lo vi interesante, por si quieres poner una seccion extra especial -->
                        <a class="dropdown-item" href="ofertas.php">Ofertas</a>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Mascotas
                        </button>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Sección 1</a>
                        <a class="dropdown-item" href="#">Sección 2</a>
                        <a class="dropdown-item" href="#">Sección 2</a>
                        <div class="dropdown-divider"></div> <!-- esto lo vi interesante, por si quieres poner una seccion extra especial -->
                        <a class="dropdown-item" href="#">Extra opcional</a>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Música
                        </button>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Sección 1</a>
                        <a class="dropdown-item" href="#">Sección 2</a>
                        <a class="dropdown-item" href="#">Sección 2</a>
                        <div class="dropdown-divider"></div> <!-- esto lo vi interesante, por si quieres poner una seccion extra especial -->
                        <a class="dropdown-item" href="#">Extra opcional</a>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Videojuegos
                        </button>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Sección 1</a>
                        <a class="dropdown-item" href="#">Sección 2</a>
                        <a class="dropdown-item" href="#">Sección 2</a>
                        <div class="dropdown-divider"></div> <!-- esto lo vi interesante, por si quieres poner una seccion extra especial -->
                        <a class="dropdown-item" href="#">Extra opcional</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- termina el menu aqui y empieza el cuerpo-->
        <div class="container mx-auto mb-5">
            <div class="row mx-5 justify-content-center"> <!-- filas para articulos -->
                <!-- cuidado con los offset si se añaden mas articulos de 6, hay que configurarlos bien para todos los tamaños aunque -->
                <!-- en teoria deberia ser copiar y pegar los 6 que hay y luego ir quitando desde el ultimo si son menos de los que hay -->
                <div class="col-sm-5 col-md-3 align-self-center text-center articulos mt-5"> 
                    <img src="logos/lepre_elegante_barba_trans.png" class="img-fluid mx-auto" alt="Elemento 1">
                    <p class="descripcion lead fs-4"><b>Neveras - 00.00€</b></p>
                </div>
                <div class="col-sm-5 col-md-3 offset-sm-1 align-self-center text-center articulos mt-5">
                    <img src="logos/lepre_elegante_barba_trans.png" class="img-fluid mx-auto" alt="Elemento 1">
                    <p class="descripcion lead fs-4"><b>Cocinas - 00.00€</b></p>
                </div>
                <div class="col-sm-5 col-md-3 offset-md-1 align-self-center text-center articulos mt-5">
                    <img src="logos/lepre_elegante_barba_trans.png" class="img-fluid mx-auto" alt="Elemento 1">
                    <p class="descripcion lead fs-4"><b>Hornos - 00.00€</b></p>
                </div> 
                <div class="col-sm-5 col-md-3 offset-sm-1 offset-md-0 align-self-center text-center articulos mt-5">
                    <img src="logos/lepre_elegante_barba_trans.png" class="img-fluid mx-auto" alt="Elemento 1">
                    <p class="descripcion lead fs-4"><b>Artículo Ejemplo - 00.00€</b></p>
                </div>
                <div class="col-sm-5 col-md-3 offset-md-1 align-self-center text-center articulos mt-5">
                    <img src="logos/lepre_elegante_barba_trans.png" class="img-fluid mx-auto" alt="Elemento 1">
                    <p class="descripcion lead fs-4"><b>Artículo Ejemplo - 00.00€</b></p>
                </div>
                <div class="col-sm-5 col-md-3 offset-sm-1 align-self-center text-center articulos mt-5">
                    <img src="logos/lepre_elegante_barba_trans.png" class="img-fluid mx-auto" alt="Elemento 1">
                    <p class="descripcion lead fs-4"><b>Artículo Ejemplo - 00.00€</b></p>
                </div>   
            </div>
        </div>
        <!-- empieza el footer -->
        <footer class="footer mt-auto py-3 bg-">
            <div class="container">
              <div class="row justify-content-between">
                <div class=" col-4 d-none d-md-block embed-responsive embed-responsive-4by3"> <!-- este mapa se muestra a partir de tamaño medio -->
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2381.8474119298544!2d-4.1273884966594885!3d40.602490826354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd410a35997dbf19%3A0xb08e3642aef992f!2sIES%20Juan%20de%20Herrera!5e0!3m2!1ses!2ses!4v1635513496436!5m2!1ses!2ses" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-6 d-md-none embed-responsive embed-responsive-4by3"> <!-- este mapa es uno pequeño para resoluciones muy bajas -->
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2381.8474119298544!2d-4.1273884966594885!3d40.602490826354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd410a35997dbf19%3A0xb08e3642aef992f!2sIES%20Juan%20de%20Herrera!5e0!3m2!1ses!2ses!4v1635513496436!5m2!1ses!2ses" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-4 text-center"> Ayuda y soporte</div>
              </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
© 2021 GitHub, Inc.
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About