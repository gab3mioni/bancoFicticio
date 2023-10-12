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

            <div class=" col-12 p-4 my-5">
                <div class="text-center text-blue fw-bolder">

                <h2>CADASTRO ENVIADO</h2>

                <p class="my-4">Suas informações foram enviadas para análise e serão validadas em até 48 horas úteis.</p>

                <div class="mt-5">
                    <a href="../index.html" class="text-decoration-none text-blue fw-bolder">VOLTAR</a>
                </div>
            </div>
            </div>
        </div>
    </div>

    <aside>
        <div class="col-12 p-4 bg-yellow">
            <div class="d-block text-center text-blue fw-bolder">
                <h2>OUTROS SERVIÇOS DO LORENINTER</h2>
            </div>
        </div>

        <div class="container">
            <div class="row">
                
            <div class="col-6 p-4 mt-4">
                <div class="text-blue fw-bold">
                    <h2 class="h5">CARTÕES ADICIONAIS</h2>
                </div>

                <div class="fw-medium">
                    <p>Você pode solicitar até 6 cartões de crédito adicionais sem custo (cobrança apenas para 2ª via de qualquer adicional).</p>
                </div>
            </div>

            <div class="col-6 p-4 mt-4">
                <div class="text-blue fw-bold">
                    <h2 class="h5">SUA VIAGEM EM OUTRO NÍVEL</h2>
                </div>

                <div class=" fw-medium">
                    <p>Aceso ilimitado à sala VIP Loren Black em Guarulhos e 4 acessos/ano a salas LoungeKey e Z Premium  (compartilhados entre cartão titular e adicionais).</p>
                </div>
            </div>

            <div class="col-6 p-4 mt-4">
                <div class="text-blue fw-bold">
                    <h2 class="h5">CONTA EM DÓLAR E EURO</h2>
                </div>

                <div class=" fw-medium">
                    <p>Clientes Loreninter podem comprar, sacar e transferir em dólar e euro.</p>
                </div>
            </div>

            <div class="col-6 p-4 mt-4">
                <div class="text-blue fw-bold">
                    <h2 class="h5">CARTEIRAS DIGITAIS</h2>
                </div>

                <div class=" fw-medium">
                    <p>Compatível com Apple Pay, Carteira do Google e Samsung Wallet.</p>
                </div>
            </div>
            
            </div>
        </div>

    </aside>

    <footer>

        <div class="bg-gray">
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