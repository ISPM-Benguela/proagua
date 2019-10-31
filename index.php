<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        <meta content="" name="description">
        <meta content="Mark Otto, Jacob Thornton, and Bootstrap contributors" name="author">
        <meta content="Jekyll v3.8.5" name="generator">
        <title>Proagua - incio</title>

        <link href="https://getbootstrap.com/docs/4.3/examples/pricing/" rel="canonical">

        <!-- Bootstrap core CSS -->
        <link crossorigin="anonymous" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet">
        <link href="css/fontawesome/css/all.css" rel="stylesheet">

        <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
        <!-- Custom styles for this template -->
        <link href="css/preco.css" rel="stylesheet">
    </head>
    <body>
        <header class="navigation-wrap start-header start-style sticky-top bg-white nd-navbar">

            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <nav class="navbar  navbar-expand-md navbar-light">
                            <a class="navbar-brand text-uppercase" href="/">
                                <img src="img/logo.svg" width="100" height="54" alt=""> ProAgua
                            </a>
                            <button aria-controls="nd-navbar" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#nd-navbar" data-toggle="collapse" type="button">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="nd-navbar">
                                <ul class="navbar-nav ml-auto py-2 py-md-0">
                                    <li class="nav-item active">
                                        <a href="http://localhost/site/" class="nav-link active">
                                            <i class="fa fa-home"></i>
                                            Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#servico" class="nav-link">
                                            <i class="fa fa-briefcase"></i>
                                            Serviços</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#preco" class="nav-link">
                                            <i class="fa fa-dollar"></i>
                                            Preços</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#contacto" class="nav-link">
                                            <i class="fa fa-phone"></i>
                                            Contactos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="login.php" class="btn btn-outline-primary" class="nav-link">
                                            <i class="fa fa-user"></i>
                                            Fazer Login</a>
                                    </li>
                                </ul>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <div class="carousel slide nd-carousel" data-ride="carousel" id="myCarousel">
            <ol class="carousel-indicators">
                <li class="active" data-slide-to="0" data-target="#myCarousel"></li>
                <li data-slide-to="1" data-target="#myCarousel"></li>
                <li data-slide-to="2" data-target="#myCarousel"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img alt="" class="img-fluid" height="100%" src="img/1.jpeg" width="100%">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>CONSTRUÇÃO DE PSINAS.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p>
                                <a class="btn btn-lg btn-primary" href="#" role="button">
                                    <i class="fa fa-check"></i>
                                    Fazer o contrato</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img alt="" class="img-fluid" height="100%" src="img/2.jpg" width="100%">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>CANALIZAÇÃO DOMICILIAR.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p>
                                <a class="btn btn-lg btn-primary" href="#" role="button">
                                    <i class="fa fa-check"></i>
                                    Fazer o contrato</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img alt="" class="img-fluid" height="100%" src="img/3.jpeg" width="100%">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>PRODUÇÃO DE AGUA MINERAL.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p>
                                <a class="btn btn-lg btn-primary" href="#" role="button">
                                    <i class="fa fa-check"></i>
                                    Fazer o contrato</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" data-slide="prev" href="#myCarousel" role="button">
                <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" data-slide="next" href="#myCarousel" role="button">
                <span aria-hidden="true" class="carousel-control-next-icon"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <h3 id="servico" class="text-center">Nossos Serviços</h3>

        <div  class="container marketing">


            <!-- Three columns of text below the carousel -->
            <div class="row mt-5">
                <div class="col-lg-4">
                    <img src="img/water.svg" height="140" alt="">
                        
                    <h2>Produção de agua mineral</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                    <p>
                        <a class="btn btn-secondary" href="#" role="button" data-toggle="modal" data-target="#mineralModal">Saber mais &raquo;</a>
                   
                        <!-- Modal -->
                        <div class="modal fade" id="mineralModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Produção da agua mineral</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Nós produzimos agua mineral de qualidade, para reseres um revendedores dos nossos produtos
                                dirija - se ao nosso escritorio e assine o contrato de revendedor.</p>

                                <h6>Contactos</h6>

                                <p>994 874 443</p>
                                <p>994 874 443</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                <button type="button" class="btn btn-primary">OK</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="img/pool.svg" height="140" alt="">    
                    <h2>Canalização domiciliar</h2>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                    <p>
                        <a class="btn btn-secondary" href="#" role="button">Saber mais &raquo;</a>
                    </p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="img/tap.svg" height="140" alt="">
                    <h2>Construção de psinas</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p>
                        <a class="btn btn-secondary" href="#" role="button">Saber mais &raquo;</a>
                    </p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
                                                                                                                                                                                                                                                                                                                                                                                                                                                
                                                                                                                                                                                                                                                                                                                                                                                                                                                
                                                                                                                                                                                                                                                                                                                                                                                                                                               <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div id="preco" class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                <h1 class="display-4">Preços</h1>
                <p class="lead">A proagua é uma empresa lider, na produção de agua mineral, canalização domiciliar e na construção de piscina, confira abaixo os preços do serviços.</p>
            </div>


            <div class="container">
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Agua Mineral</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title" style="font-size: 22px;">Kz 1.000.00 <br />
                                <small class="text-muted"> Embalegem</small>
                            </h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>10 carrafas</li>
                                <li>8 meses de validade</li>
                            </ul>
                            <button class="btn btn-lg btn-block btn-outline-primary" type="button">Fazer contracto</button>
                        </div>
                    </div>
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Canalização</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title" style="font-size: 22px;">Kz 7.000.00 <br />
                                <small class="text-muted"> por metro</small>
                            </h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>+10 metros fica cada 5.000</li>
                                <li>suporte gratis até 2 meses</li>
                            </ul>
                            <button class="btn btn-lg btn-block btn-primary" type="button">Fazer contracto</button>
                        </div>
                    </div>
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Construção de piscina</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title" style="font-size: 22px;">Kz 200.000 <br />
                                <small class="text-muted" style="font-size: 19px;">3 metros cubicos</small>
                            </h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>+4 metros cub 150.000</li>
                                <li>se manunteção conosco desconto 10%</li>
                            </ul>
                            <button class="btn btn-lg btn-block btn-primary" type="button">Contact us</button>
                        </div>
                    </div>
                </div>


                <hr class="featurette-divider">

            <div class="container" id="contacto">
                <div class="card">
                   <div class="card-body p-5" >
                   <h3 class="card-title">Escreva para nós</h3>
                   <form action="" >
                        <div class="group-form">
                        <label for="">Email</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="group-form">
                        <label for="">Texto</label>
                            <textarea name="" class="form-control" id="" cols="6" rows="4"></textarea>
                        </div>
                        <div class="group-form pt-3">
                          <input type="submit" class="btn btn-primary" value="Enviar mensagem">
                        </div>
                    </form>
                   </div>
                </div>
            </div>

                <footer class="pt-4 my-md-5 pt-md-5 border-top">
                    <div class="row">
                        <div class="col-12 col-md">
                            <img alt="" class="mb-2" height="54" src="img/logo.svg" width="54">
                            <small class="d-block mb-3 text-muted">&copy; 2019</small>
                        </div>
                        <div class="col-6 col-md">
                            <h5>Navegação</h5>
                            <ul class="list-unstyled text-small">
                                <li>
                                    <a class="text-muted" href="#">Inicio</a>
                                </li>
                                <li>
                                    <a class="text-muted" href="#">Preços</a>
                                </li>
                                <li>
                                    <a class="text-muted" href="#">Serviços</a>
                                </li>
                                <li>
                                    <a class="text-muted" href="#">Contactos</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-md">
                            <h5>Nossa Empresa</h5>
                            <ul class="list-unstyled text-small">
                                <li>
                                    <a class="text-muted" href="#">Vagas</a>
                                </li>
                                <li>
                                    <a class="text-muted" href="#">Palestras</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-md">
                            <h5>Sobre</h5>
                            <ul class="list-unstyled text-small">
                                <li>
                                    <a class="text-muted" href="#">Nossa equipa</a>
                                </li>
                                <li>
                                    <a class="text-muted" href="#">Localização</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </footer>
            </div>
            <script src="js/jquery-3.4.1.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
        </body>
    </body>
</html>
