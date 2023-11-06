<?php
session_start();

if (isset($_POST['login'])) {
    $cpf = $_POST['cpf']; // Obtém o CPF do formulário
    $senha = $_POST['senha']; // Obtém a senha do formulário

    require('../php/auth/auth.php'); // Inclui o arquivo auth.php

    $idclientes = obterIdClientesPorCredenciais($cpf, $senha);

    if ($idclientes !== false) {
        // Credenciais são corretas, o usuário está autenticado
        $_SESSION['idclientes'] = $idclientes; // Armazena o idclientes na sessão
        header('Location: dfisica.php'); // Redireciona para o dashboard de pessoa física
        exit();
    } else {
        // Credenciais incorretas
        echo '<center>Credenciais incorretas. Tente novamente.</center>';
    }
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

    <title>Entrar como Pessoa Física</title>
</head>
<body>

    <div class="container">
        <div class="row">

                <div class="d-flex justify-content-center">
                    <div class="mt-5">
                        <h2 class="h1 fw-bolder">ENTRAR</h2>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <div class="mb-5"> 

                    <form action="pfisica.php" method="POST">

                    <div class="my-3">
                        CPF: <input type="number" required class="form-control" id="cpf" name="cpf">
                    </div>

                    <div class="my-3">
                        Senha: <input type="password" required class="form-control" id="senha" name="senha">
                    </div>

                    <div class="d-flex justify-content-center mt-3 mb-5">
                        <input class="btn btn-primary btn-lg" type="submit" name="login" value="Entrar">
                    </div>

                </form>

                </div>
            </div>
        </div>

        <footer>

            <div class="bg-gray mt-5">
                <div class="container">
                    <div class="row">
    
                        <div class="col-12 col-md-4 text-center text-md-start p-4">
                            <div class="fw-medium text-blue">
                                <p>Atendimento ao Cliente <br> 0800 000 000</p>
                                <p>Deficientes Auditivos/Fala <br> 0800 000 000</p>
                            </div>
                        </div>
    
                        <div class="col-12 col-md-4 text-center text-md-start p-4">
                            <div class="fw-medium text-blue">
                                <p>SAC <br> 0800 000 000</p>
                                <p>WhatsApp <br> 00 0000 0000</p>
                            </div>
                        </div>
    
                        <div class="col-12 col-md-4 text-center text-md-start p-4">
                            <div class="fw-medium text-blue">
                                <p>Ouvidoria LorenInter <br> 0800 000 000</p>
                                <p>Central de Relacionamentos <br> 0000 0000 / 00 0000 0000</p>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
    
            <div class="bg-yellow">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-12 text-center text-md-start p-4">
                            <div class="fw-medium text-blue">
                                <p>Banco Loreninter S/A - CNPJ 00.000.000/0000-00 <br> Rua Infinita, 000, Brasília-DF, Brasil - CEP 00000-000</p>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
          </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>