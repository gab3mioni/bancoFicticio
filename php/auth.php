<?php
function verificarCredenciais($cpf, $senha) {

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'bancoloreninter';

    try {
        $conexao = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "SELECT * FROM clientes WHERE cpf = :cpf AND senha = :senha";
        $stmt = $conexao->prepare($query);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            // As credenciais são corretas, o usuário está autenticado
            return true;
        } else {
            // Credenciais incorretas
            return false;
        }
    } catch (PDOException $e) {
        echo "Erro de conexão com o banco de dados: " . $e->getMessage();
        return false;
    }
}

?>