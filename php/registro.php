<?php

if(isset($_POST['submit']))
{

    include_once('config.php');

    $nome = $_POST['nome'];
    $datanasc = $_POST['datanasc'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $pdoQuery = "INSERT INTO `aprovacao`(`nome`, `datanasc`, `cpf`, `rg`, `email`, `password`) VALUES (:nome,:datanasc,:cpf,:rg,:email,:senha)";

    $pdoResult = $conexao->prepare($pdoQuery);

    $pdoExec = $pdoResult->execute (array(":nome"=>$nome,":datanasc"=>$datanasc,":cpf"=>$cpf,":rg"=>$rg,":email"=>$email,":senha"=>$senha));
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>Cadastro Enviado</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class=" col-12 p-4 mt-5">
                <div class="d-block text-center text-blue fw-bolder">

                <h2>Cadastro Enviado</h2>

                <p>Suas informações foram enviadas para análise e serão validadas em até 48 horas úteis.</p>

                <div class="mt-5 mb-5">
                    <a href="../index.html" class="text-decoration-none text-blue fw-bolder">VOLTAR</a>
                </div>
            </div>
            </div>
        </div>
    </div>

    <footer class="bg-yellow sticky-bottom">
        <section class="container">
            <div class="row">

          <div class="col-6 p-4">
            <p class="fw-medium text-blue">Banco Loreninter S/A - CNPJ 00.000.000/0000-00 <br> Rua Infinita, 000, Brasília-DF, Brasil - CEP 00000-000</p>
          </div>

          <div class="col-6 p-4">
            <div class="fw-medium text-blue">
                <p>SAC 0800-000-000<br>
                    Atendimento ao Cliente 0800-000-000</p>
            </div>
          </div>
        </div>
        </section>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>