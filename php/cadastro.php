<?php
include_once('conn.php');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

if(isset($_POST['submit']) == NULL){
    header('Location:../index.html');
}
$curso = $_POST['curso'];
$nome = mb_strtoupper($_POST['name'], 'UTF-8');
$CPF = $_POST['CPF'];
$RG = $_POST['RG'];
$nascimento = $_POST['nascimento'];
$CEP = $_POST['CEP'];
$UF = $_POST['UF'];
$cidade = mb_strtoupper($_POST['cidade'], 'UTF-8');
$endereco = mb_strtoupper($_POST['endereco'], 'UTF-8');
$filiacao = mb_strtoupper( $_POST['filiacao'], 'UTF-8');
$estadoCivil = $_POST['estadoCivil'];
$atividade = mb_strtoupper($_POST['atividade'], 'UTF-8');
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$escolaridade = mb_strtoupper($_POST['escolaridade'], 'UTF-8');
$dataConclusao = $_POST['dataConclusao'];
$indicacao = mb_strtoupper($_POST['indicacao'], 'UTF-8');

/*
echo $nome."<br>";
echo $CPF."<br>";
echo $RG."<br>";
echo $nascimento."<br>";
echo $CEP."<br>";
echo $UF."<br>";
echo $cidade."<br>";
echo $endereco."<br>";
echo $filiacao."<br>";
echo $estadoCivil."<br>";
echo $atividade."<br>";
echo $telefone."<br>";
echo $email."<br>";
echo $escolaridade."<br>";
echo $dataConclusao."<br>";
echo $indicacao."<br>";
*/

$sql = "INSERT INTO `aluno` (`CPF`, `RG`, `Nome`, `nascimento`, `Endereco`, `cidade`, `CEP`, `UF`, `filiacao`, `estadoCivil`, `atividade`, `Telefone`, `email`, `escolaridade`, `escolaridadeData`, `indicacao`, `curso`, `dataCreate`, `dataUpdate`) VALUES ('$CPF', '$RG', '$nome', '$nascimento', '$endereco', '$cidade', '$CEP', '$UF', '$filiacao', '$estadoCivil', '$atividade', '$telefone', '$email', '$escolaridade', '$dataConclusao', '$indicacao', '$curso', NOW(), DEFAULT)";

try {
    if($conn->exec($sql)):
        
    ////// EMAIL DE CONFIRMAO DE INSCRICAO            
    $msg = "First line of text\nSecond line of text";

    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);

    // send email
    mail("mauriciodossantosfranca@hotmail.com","Nova inscrição realizada",$msg);

    echo"<script>
            alert('CADASTRADO COM SUCESSO!');
            alert('Entraremos em contato com você em breve através desse número: $telefone ou pelo e-mail: $email');
            javascript:window.location='../formulario.html';
        </script>";  
    else:

    echo"<script>
            alert('ERRO AO CADASTRAR, tente novamente.');
            javascript:window.location='../formulario.html';
        </script>";   
    endif;
} catch (Exception $e) {  
    echo "<div style='max-width: 20em; text-align:center; border-radius:5px;  padding:20px; background-color:red; color:yellow;'>
            <h2>Esse CPF já possui cadastro!</h2><br>
            <a href='javascript:history.back()' style='text-decoration:none; border-radius:5px; color:gray; background-color:white; padding: 10px; '>Tentar outro</a>
            <a href='../index.html' style='text-decoration:none; border-radius: 5px; color:white; background-color:gray; padding: 10px; '>Sair</a>
         </div>"; 
}