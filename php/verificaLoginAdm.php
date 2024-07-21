<?php
session_start();
include_once('conn.php');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

if(!isset($_POST["entrar"])){
    header('Location:../administrador.html');
}

$usuario = preg_replace('/[^[:alpha:]_]/', '',$_POST['usuario']);
$senha = preg_replace('/[^[:alnum:]_]/', '',$_POST['senha']);

//echo $usuario;
//echo $senha;

$sql = "SELECT usuario, senha FROM administrador where usuario = '$usuario' and senha = '$senha'";


   
    $busca = $conn->prepare($sql);
    $busca->execute();

    /* Return number of rows that were deleted */
    $count = $busca->rowCount();

    if($count > 0){      
        $_SESSION['usuario'] = $usuario;
        header('Location:dashboard.php');
    }else{
        $_SESSION['MSG_loginErro'] = "<p style='color:white; background-color:red; padding:5px;'>usuário ou senha incorreto</p>";
        header('Location:administrador.php');
    }
    
