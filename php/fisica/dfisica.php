<?php
include("../auth/config.php");

session_start();

if (isset($_SESSION['idclientes'])) {
    $idclientes = $_SESSION['idclientes'];

    // Consulta para recuperar o nome, saldo, futuros e limite do cliente
    $sqlCliente = "SELECT nome, saldo, futuros, limite FROM clientes WHERE idclientes = :idclientes";
    $stmtCliente = $conexao->prepare($sqlCliente);
    $stmtCliente->bindParam(':idclientes', $idclientes, PDO::PARAM_INT);
    $stmtCliente->execute();

    $resultCliente = $stmtCliente->fetch(PDO::FETCH_ASSOC);

    if ($resultCliente) {
        $nome = $resultCliente['nome'];
        $saldo = $resultCliente['saldo'];
        $futuros = $resultCliente['futuros'];
        $limite = $resultCliente['limite'];
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/global.css">
    <link rel="stylesheet" href="../../css/style.css">

    <title>Pessoa Física</title>
</head>

<body>

    <header class="bg-yellow  border-bottom border-4 border-primary text-blue">
        <div class="container">
            <section class="row">

                <div class="col-12 p-5">
                    <div>
                        <?php if (isset($nome)) { ?>
                        <h2 class="h4">
                            <?php echo "Olá, " . $nome ?>
                        </h2>
                        <?php } else { ?>
                        <p>Erro: Cliente não encontrado</p>
                        <?php } ?>
                    </div>
                </div>
            </section>
        </div>
    </header>

    <main>

        <div class="bg-gray">
            <div class="container">
                <div class="row">

                    <div class="col-6 p-5">
                        <div>
                            <?php if (isset($nome)) { ?>
                            <h2 class="h4">
                                <?php echo "Saldo: " .  $saldo ?>
                            </h2>
                            <?php } else { ?>
                            <p>Não foi possível atualizar seu saldo. Tente novamente mais tarde.</p>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="col-6 p-5">
                        <div>
                            <?php if (isset($nome)) { ?>
                                <h2 class="h4"><?php echo "Lançamentos Futuros: " .  $futuros ?></h2>
                            <?php } else { ?>
                                <p>Não foi possível atualizar seus lançamentos futuros. Tente novamente mais tarde.</p>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="row bg-gray p-4">

                        <div class="col-3">
                            <figure>
                                <a href="../../index.html">
                                    <img src="../../img/icons/depositar.svg" width="50" height="50" class="w-100 rounded-circle" alt="depositar">
                                </a>
                            </figure>

                            <div class="text-center">
                                <a class="text-decoration-none text-dark" href="../../index.html">Depositar</a>
                            </div>
                        </div>
                        
                        <div class="col-3">
                            <figure>
                                <a href="../../index.htm">
                                    <img src="../../img/icons/transferir.svg" width="50" height="50" class="w-100 rounded-circle" alt="transferir">
                                </a>
                            </figure>

                            <div class="text-center">
                                <a class="text-decoration-none text-dark" href="../../index.html">Transferir</a>
                            </div>
                        </div>

                        <div class="col-3">
                            <figure>
                                <a href="../../index.html">
                                    <img src="../../img/icons/card.svg" width="50" height="50" class="w-100 rounded-circle" alt="cartoes">
                                </a>
                            </figure>

                            <div class="text-center">
                                <a class="text-decoration-none text-dark" href="../../index.html">Meus Cartões</a>
                            </div>
                        </div>

                        <div class="col-3">
                            <figure>
                                <a href="../../index.html">
                                    <img src="../../img/icons/emprestimo.svg" width="50" height="50" class="w-100 rounded-circle" alt="emprestimo">
                                </a>
                            </figure>

                            <div class="text-center">
                                <a class="text-decoration-none text-dark" href="../../index.html">Empréstimo</a>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 p-4">
                    <?php if (isset($nome)) { ?>
                        <h2 class="h4"><?php echo "Limite disponível: " .  $limite ?></h2>
                    <?php } else { ?>
                        <p>Não foi possível atualizar seus limite. Tente novamente mais tarde.</p>
                    <?php } ?>
                </div>
                
            </div>
        </div>
    </main>

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
                            <p>Banco Loreninter S/A - CNPJ 00.000.000/0000-00 <br> Rua Infinita, 000, Brasília-DF,
                                Brasil - CEP 00000-000</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>