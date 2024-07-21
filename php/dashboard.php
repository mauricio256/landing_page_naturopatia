<?php
session_start();
include_once("conn.php");

if(!isset( $_SESSION['usuario'] )){
    header('Location:administrador.php');
};

/// Busca

    $filtro = 1 ;// $_POST["filtro"];
    $busca = 1 ;/// $_POST['busca'];	

    if(isset($_POST['btnBuscar'])){
        
        $filtro = $_POST["filtro"];
        $busca = $_POST['busca'];

    }

        $sth = $conn->prepare("SELECT * FROM `aluno` WHERE $filtro LIKE '%$busca%'");
        $sth->execute();

        $result = $sth->fetchAll();

        /////// contagem de registros
        $count = $sth->rowCount();



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
    
    <header> 
        <a href="./administrador.php"><img src="../img/sair.png" width="30"></a>
        <h3><strong>Administrador: </strong> <?php echo $_SESSION['usuario']; ?></h3><hr><br>
        <form action='dashboard.php' method='post'>
            <label>FILTRAR POR:</label>
            <select required name="filtro">
                <option value="nome">NOME</option>
                <option value="CPF">CPF</option>
                <option value="curso" >CURSO</option>
            </select>
            <a id="filtro" href="dashboard.php">Listar Todos</a><br><br>
    
            <input required type="text" name="busca" placeholder='Selecione o tipo de filtro'>
            <button type="submit" name="btnBuscar">Buscar</button>
        </form><br><br>

        <span>(<?php echo $count; ?>) Registro encontrados</span>
    </header>

    <?php  
        foreach ($result as &$valor) {    
    ?>

    <div id="box">
       <a id="icone" href="abrir.php?CPF=<?php echo $valor['CPF'];?>"><img width="20px" src="../img/iconeAbrir.png"></a>
       <h3><strong><?php echo $valor['nome']; ?></strong></h3>
       <label>CPF: </label> <?php echo $valor['CPF']; ?><br>
       <label>Telefone: </label> <?php echo $valor['telefone']; ?><br>
       <label>Curso: </label> <?php echo $valor['curso']; ?>
    </div>

    <?php 
        } 
        unset($valor); // quebra a referência com o último elemento
    ?>
    
</body>
</html>