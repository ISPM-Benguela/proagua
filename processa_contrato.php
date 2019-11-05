<?php

  require_once('backend/config.php');


  $id = $_GET['delete'];


$sql = "DELETE FROM contracto WHERE id=$id";

if (mysqli_query($con, $sql)) {
    //echo "Login Credentials verified";
    echo "<script type='text/javascript'>alert('Contrato eliminado com sucesso')</script>";
    $_SESSION['success'] = "sucess";
    header('Location: painel.php');

} else {
    echo "<script type='text/javascript'>alert('Este contrato nao exites.')</script>";
    header('Location: painel.php');
}

mysqli_close($con);
?>