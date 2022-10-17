-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.24-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para minhasnotas
CREATE DATABASE IF NOT EXISTS `minhasnotas` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `minhasnotas`;

-- Copiando estrutura para tabela minhasnotas.anotacoes
CREATE TABLE IF NOT EXISTS `anotacoes` (
  `id_notas` int(3) NOT NULL AUTO_INCREMENT,
  `titulo_notas` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao_notas` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_notas` date NOT NULL,
  `hora_notas` time NOT NULL,
  PRIMARY KEY (`id_notas`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela minhasnotas.anotacoes: ~1 rows (aproximadamente)
INSERT INTO `anotacoes` (`id_notas`, `titulo_notas`, `descricao_notas`, `data_notas`, `hora_notas`) VALUES
	(9, 'Uhhuu! ?', 'Deu tudo certo com a conexão com o banco de dados! ??', '2022-10-13', '04:24:00');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
