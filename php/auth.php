<?php
function verificarCredenciais($cpf, $senha) {

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'bancoloreninter';

    try {
        $conexao = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "SELECT idclientes FROM clientes WHERE cpf = :cpf AND senha = :senha";
        $stmt = $conexao->prepare($query);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            // As credenciais são corretas, o usuário está autenticado
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row['idclientes']; // Retorna o idclientes
        } else {
            // Credenciais incorretas
            return false;
        }
    } catch (PDOException $e) {
        echo "Erro de conexão com o banco de dados: " . $e->getMessage();
        return false;
    }
}
function obterIdClientesPorCredenciais($cpf, $senha) {
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'bancoloreninter';

    try {
        $conexao = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "SELECT idclientes FROM clientes WHERE cpf = :cpf AND senha = :senha";
        $stmt = $conexao->prepare($query);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row['idclientes'];
        } else {
            return false;
        }
    } catch (PDOException $e) {
        echo "Erro de conexão com o banco de dados: " . $e->getMessage();
        return false;
    }
}

function obertSaldo($cpf, $senha) {
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'bancoloreninter';

    try {
        $conexao = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "SELECT saldo FROM clientes WHERE cpf = :cpf AND senha = :senha";
        $stmt = $conexao->prepare($query);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row['saldo'];
        } else {
            return false;
        }
    } catch (PDOException $e) {
        echo "Erro de conexão com o banco de dados: " . $e->getMessage();
        return false;
    }
}

?>
