<?php 
include_once("conn.php");

$CPF = $_GET['CPF'];

///// busca todos os registros
$sth = $conn->prepare("SELECT * FROM `aluno` WHERE CPF = '$CPF'");
$sth->execute();

$result = $sth->fetchAll();

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/dashboard.css">
    <title>Dashboard</title>
</head>
<body>

    <?php  
        foreach ($result as &$valor) {    
    ?>
    
    <header> 
        <a id="icone" href="dashboard.php"><img width="30px" src="../img/sair.png"></a>
        <h2>Relatório</h2><hr><br>
    </header>
    <div id="box"> 
       <h2><u><strong><?php echo $valor['nome']; ?></strong></u></h2>
       <label>CPF</label><br> 
       <strong><?php echo $valor['CPF']; ?></strong><hr>
       <label>Nascimento</label><br> 
       <strong><?php echo $valor['nascimento']; ?></strong><hr>
       <label>Curso:</label><br> 
       <Strong><?php echo $valor['curso']; ?></Strong><hr>
       <label>Endereço</label><br> 
       <strong><?php echo $valor['endereco']; ?></strong><hr>
       <label>UF</label><br> 
       <strong><?php echo $valor['UF']; ?></strong><hr>
       <label>Cidade</label><br> 
       <strong><?php echo $valor['cidade']; ?></strong><hr> 
       <label>CEP</label><br> 
       <strong><?php echo $valor['CEP']; ?></strong><hr> 
       <label>Filiação</label><br> 
       <strong><?php echo $valor['filiacao']; ?></strong><hr> 
       <label>Estado Civil</label><br> 
       <strong><?php echo $valor['estadoCivil']; ?></strong><hr> 
       <label>Atividade</label><br> 
       <strong><?php echo $valor['atividade']; ?></strong><hr> 
       <label>Telefone</label><br> 
       <strong><?php echo $valor['telefone']; ?></strong><hr> 
       <label>E-mail</label><br> 
       <strong><?php echo $valor['email']; ?></strong><hr> 
       <label>Escolaridade</label><br> 
       <strong><?php echo $valor['escolaridade']; ?></strong><hr> 
       <label>Conclusão:</label><br> 
       <strong><?php echo $valor['escolaridadeData']; ?></strong><hr>
       <label>Indicação</label><br> 
       <strong><?php echo $valor['indicacao']; ?></strong><hr>
       <label>Inscrição:</label><br> 
       <strong><?php echo $valor['dataCreate']; ?></strong><hr>
       <label>Última Modifição:</label><br> 
       <strong><?php echo $valor['dataUpdate']; ?></strong><hr><br>

        <div>
            <ul>
                <li><a>Editar</a></li>
                <li><a onclick="return confirma()" href="deletar.php?CPF=<?php echo $valor['CPF']; ?>">Deletar</a></li>
            </ul>
        </div>

    </div>
   
    <?php 
        } 
        unset($valor); // quebra a referência com o último elemento
    ?>
    <script>
        
        function confirma(){

            if (confirm('Deseja mesmo DELETAR?') == true) {
                return true;
            } else {
               return false;
            }
        }

    </script>
</body>
</html>