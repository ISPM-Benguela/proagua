
<?php
include "backend/config.php";
?>

<!doctype html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        <meta content="" name="description">
        <title>Proagua - contracto</title>


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
       
        <link href="css/main.css" rel="stylesheet">
    </head>
    <body>
       <?php require_once('includes/header.php') ?>

       <section class="jumbotron nd-jumbotron   ">
        <h4 class="text-center">celebrar contracto de
        <?php

            if($_GET['tipo'] == 'mineral'){
                echo "Agua mineral";
            }
            if($_GET['tipo'] == 'piscina'){
                echo "Construção de piscina";
            }
            if($_GET['tipo'] == 'canalizacao'){
                echo "Construção de Canalização";
            }
         
         ?></h4>
       </section>

        <section class="container">
            <div class="row">
                <div class="col-md-4">
                   <?php

                    if($_GET['tipo'] == 'mineral'){
                    ?>
                      <img src="img/water.svg" width="300" alt="">
                    <?php
                    }
                    if($_GET['tipo'] == 'piscina'){

                    ?>
                    <img src="img/pool.svg" width="300" alt="">

                    <?php
                    }
                    if($_GET['tipo'] == 'canalizacao'){
                    ?>
                        <img src="img/tap.svg" width="300" alt="">
                    <?php
                     }
                    ?>
                </div>
                <div class="col-md-8">
                
                <?php
                    if(isset($_POST['Submit'])){

                        @$nome = $_POST['nome'];
                        @$nif = $_POST['nif'];
                        @$bi = $_POST['bi'];
                        @$data = $_POST['data'];
                        @$provincia = $_POST['provincia'];
                        @$telefone = $_POST['telefone'];
                        @$tipo = $_POST['tipo'];

                      if(empty($nome) && empty($nif) && empty($data) && empty($provincia) && empty($tipo) ){
                        ?>
                            <div class="alert alert-danger" role="alert">
                            Os campos do contrato nao podem estar vazios
                            </div>
                        <?php
                      }else{
                          
                        if($con->connect_error){
                            die('connection failed: ' . $con->connection_error);
                        }else {
                            $sql = "INSERT INTO contracto (titular, nif, bi, valido, provincia, telefone, tipo)
                                VALUES ('$nome', '$nif', '$bi','$data', '$provincia', '$telefone','$tipo')";

                                if ($con->query($sql) === TRUE) {
                                    ?>
                                    <div class="alert alert-success" role="alert">
                                     Contrato enviado com sucesso, aguarde o nosso feedback.
                                    </div>
                                  
                                <?php
                                } else {
                                    ?>

                                    <div class="alert alert-success" role="alert">
                                    Houve um erro no servidor tente mais tarde.
                                    </div>
                                <?php
                                }

                                $con->close();
                        }
                      }
                    }
                ?>
                <div class="card">
                    <div class="card-body">
                    <h3 class="card-title">Celebração do contracto <span class="nd-contrato">
                    (
                        <?php

                            if($_GET['tipo'] == 'mineral'){
                                echo "Agua mineral";
                            }
                            if($_GET['tipo'] == 'piscina'){
                                echo "Construção de piscina";
                            }
                            if($_GET['tipo'] == 'canalizacao'){
                                echo "Construção de Canalização";
                            }
                        
                        ?>    
                    )
                    </span></h3>

                      <form action="" method="POST">
                          <p>Primeiro Ortogrante <input name="nome" placeholder="teu nome" >, NIF
                           <input placeholder="teu nif ou da empresa" name="nif" >, titular do Cartão de Cidadão n.º
                            <input placeholder="teu bi" name="bi" >, válido até <input type="date" name="data" placeholder="valido" >,
                             emitido pela República de Angola, residente na Provincia de
                              <input placeholder="tua provincia" name="provincia" >, com teminal telefonico <input type="number" name="telefone" placeholder="telefone" />, adiante designado por Segundo Outorgante;</p>
                     
                          <p>SEGUNDOS: Proagua Lda, NIF 130000000, empresa com instalaçoes na provincia de Benguela,  adiante designado por Segundo Outorgante ;</p>

                          <p>É livremente e de boa fé celebrado e reduzido a escrito, o presente Contrato de Fornecimento de agua mineral ao primeiro Ortogante.</p>
                          <input type="hidden" name="tipo" value="<?php echo $_GET['tipo'] ?>" />
                          <button type="submit" name="Submit" class="btn btn-primary"> Enviar o contrato</button>
                        </form>

                       
                    </div>
                    </div>
                </div>
            </div>
        </section>
                    
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        </body>
    </body>
</html>
