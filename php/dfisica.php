<?php
include("config.php");

session_start();

if (isset($_SESSION['idclientes'])) {
    $idclientes = $_SESSION['idclientes'];

    // Consulta para recuperar o nome do cliente
    $sqlNome = "SELECT nome FROM clientes WHERE idclientes = :idclientes";
    $stmtNome = $conexao->prepare($sqlNome);
    $stmtNome->bindParam(':idclientes', $idclientes, PDO::PARAM_INT);
    $stmtNome->execute();
    
    // Consulta para recuperar o saldo do cliente
    $sqlSaldo = "SELECT saldo FROM clientes WHERE idclientes = :idclientes";
    $stmtSaldo = $conexao->prepare($sqlSaldo);
    $stmtSaldo->bindParam(':idclientes', $idclientes, PDO::PARAM_INT);
    $stmtSaldo->execute();
    
    $resultNome = $stmtNome->fetch(PDO::FETCH_ASSOC);
    $resultSaldo = $stmtSaldo->fetch(PDO::FETCH_ASSOC);

    if ($resultNome && $resultSaldo) {
        $nome = $resultNome['nome'];
        $saldo = $resultSaldo['saldo'];
    } else {
        echo "Cliente não encontrado";
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

    <title>Pessoa Física</title>
</head>
<body>

    <header class="container">
        <section class="row">

            <div class="col-6 p-5">
                <div>
                <?php if (isset($nome)) { ?>
                    <h2 class="h4">Olá, <?php echo $nome ?></h2>
                <?php } else { ?>
                    <p>Erro: Cliente não encontrado</p>
                <?php } ?>
                </div>
            </div>

            <div class="col-6 p-5">
                <div>
                <?php if (isset($nome)) { ?>
                    <h2 class="h4">Saldo: <?php echo $saldo ?></h2>
                <?php } else { ?>
                    <p>Não foi possível atualizar seu saldo. Tente novamente mais tarde.</p>
                <?php } ?>
                </div>
            </div>

        </section>
    </header>

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