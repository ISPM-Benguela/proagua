<?php

 require_once('backend/config.php');
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>proagua · Login</title>


    <!-- Bootstrap core CSS -->
   <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link href="css/login.css" rel="stylesheet" >

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
  <body class="text-center">
    <form class="form-signin" action="" method="post">
        <img class="mb-4" src="img/logo.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Fazer o login</h1>
        <label for="inputEmail" class="sr-only">Nome</label>
        <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Endereco de email"  autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Informe a tua senha" >
        <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Me lembrar
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" name="Submit" type="submit">Fazer login</button>
  
  <?php 
  
   if(isset($_POST['Submit'])){

    @$username = $_POST['username'];
    @$password = $_POST['password'];

    if(empty($username) && empty($password)){
    
    ?>

        <div class="alert mt-4 alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Atenção!</strong> Email ou senha em branco.
        </div>

    <?php
      return;
    }

    if($_POST['username'] == $username && $_POST['password'] == $password){

      $query = "select * from usuario where username = '". $username . "' and senha='" . $password . "'";
      $result = mysqli_query($con, $query) or die(mysqli_error($con));
      $count = mysqli_num_rows($result);

      if ($count == 1){

        echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";

        $_SESSION['uname'] = $username;
        header('Location: painel.php');
        
        }else{
        ?>
        <div class="alert mt-4 alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Atenção!</strong> Email ou senha incorrecta.
        </div>
        <?php
        }
      
    }else { 
    ?>
     <div class="alert mt-4 alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Atenção!</strong> Error no servidor.
    </div>
    <?php
    }
  }
  ?>  
  
  <p class="mt-5 mb-3 text-muted">&copy; 2019</p>
</form>
</body>
</html>
