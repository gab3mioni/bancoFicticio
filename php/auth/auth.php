<?php
function conectarBanco() {
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'bancoloreninter';

    try {
        $conexao = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexao;
    } catch (PDOException $e) {
        die("Erro de conexão com o banco de dados: " . $e->getMessage());
    }
}

function verificarCredenciais($cpf, $senha) {
    try {
        $conexao = conectarBanco();

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
        die("Erro ao verificar credenciais: " . $e->getMessage());
    }
}

function obterSaldo($cpf, $senha) {
    try {
        $conexao = conectarBanco();

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
        die("Erro ao obter saldo: " . $e->getMessage());
    }
}

?>
