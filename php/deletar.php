<?php
include_once("conn.php");

$CPF = $_GET["CPF"];

$del = $conn->prepare("DELETE FROM aluno WHERE `aluno`.`CPF` = '$CPF'");
$del->execute();


$cont = $del->rowCount();

if($cont > 0 ){
    echo"
        <script>   
            alert('DELETADO COM SUCESSO!');
            javascript:window.location='dashboard.php';
        </script>
    ";
    
}else{
    echo "<script> alert('Algo deu errado. Contate o desenvovedor do sistema!');</script>";
}
