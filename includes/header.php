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

                        <?php if(isset($_SESSION['uname'])) echo "<li class='nav-item'> <a class='btn btn-primary' href='http://localhost/site/painel.php'><i class='fa fa-user'></i> ". $_SESSION['uname'] ."</a></li>" ?>
                        <?php if(!isset($_SESSION['uname'])) echo "<li class='nav-item'> <a class='btn btn-primary' href='http://localhost/site/login.php'><i class='fa fa-user'></i> Fazer login</a></li>" ?>
                       
                    </ul>

                </div>
            </nav>
        </div>
    </div>
</div>
</header>