
-- Copiando estrutura do banco de dados para bancoloreninter
DROP DATABASE IF EXISTS `bancoloreninter`;
CREATE DATABASE IF NOT EXISTS `bancoloreninter` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `bancoloreninter`;

-- Copiando estrutura para tabela bancoloreninter.aprovacao
DROP TABLE IF EXISTS `aprovacao`;
CREATE TABLE IF NOT EXISTS `aprovacao` (
  `idaprovacao` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `datanasc` date NOT NULL,
  `cpf` varchar(12) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`idaprovacao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela bancoloreninter.clientes
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `idclientes` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `datanasc` date NOT NULL,
  `cpf` varchar(12) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`idclientes`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela bancoloreninter.funcionarios
DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE IF NOT EXISTS `funcionarios` (
  `idfuncionarios` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`idfuncionarios`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Exportação de dados foi desmarcado.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
