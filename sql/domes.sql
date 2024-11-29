SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `primeiro_nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `genero` enum('Feminino','Masculino','Outros') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `cep` varchar(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `estado` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `municipio` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `bairro` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `numero` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `foto_perfil` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



INSERT INTO `usuarios` (`id`, `primeiro_nome`, `sobrenome`, `email`, `celular`, `senha`, `genero`, `cep`, `estado`, `municipio`, `bairro`, `numero`, `complemento`, `foto_perfil`) VALUES
(1, 'Marta', 'Mendes', 'martamendes@gmail.com', '123456789', 'senha990', 'Feminino', '29300000', 'Espírito Santo', 'Cariacica', 'Bela Aurora', '400', NULL, NULL),
(2, 'Carlos', 'Almeida', 'carlos.almeida@example.com', '4444444444', 'senha555', 'Masculino', '29400000', 'Espírito Santo', 'Guarapari', 'Ipiranga', '500', 'Bloco B', NULL),
(3, 'Paula', 'Santos', 'paula.santos@example.com', '5555555555', 'senha666', 'Feminino', '29500000', 'Espírito Santo', 'Anchieta', 'Centro', '600', 'Apto 203', NULL),
(4, 'Marcos', 'Silva', 'marcos.silva@example.com', '6666666666', 'senha777', 'Masculino', '29600000', 'Espírito Santo', 'Linhares', 'Três Barras', '700', NULL, NULL),
(5, 'Juliana', 'Costa', 'juliana.costa@example.com', '7777777777', 'senha888', 'Feminino', '29700000', 'Espírito Santo', 'Colatina', 'Maria das Graças', '800', 'Casa 2', NULL),
(6, 'Eduardo', 'Martins', 'eduardo.martins@example.com', '8888888888', 'senha999', 'Masculino', '29800000', 'Espírito Santo', 'Nova Venécia', 'Centro', '900', NULL, NULL),
(7, 'Fernanda', 'Rodrigues', 'fernanda.rodrigues@example.com', '9999999999', 'senha1010', 'Feminino', '29900000', 'Espírito Santo', 'São Mateus', 'Guriri', '1000', 'Apto 405', NULL),
(8, 'Lucas', 'Oliveira', 'lucas.oliveira@example.com', '1010101010', 'senha1111', 'Masculino', '30000000', 'Espírito Santo', 'Viana', 'Marcílio de Noronha', '1100', NULL, NULL),
(9, 'Raquel', 'Moreira', 'raquel.moreira@example.com', '1111111111', 'senha1212', 'Feminino', '30100000', 'Espírito Santo', 'Afonso Cláudio', 'Centro', '1200', 'Casa', NULL),
(10, 'Pedro', 'Gomes', 'pedro.gomes@example.com', '1212121212', 'senha1313', 'Masculino', '30200000', 'Espírito Santo', 'Santa Teresa', 'Centro', '1300', 'Apto 305', NULL),
(21, 'Soraia', 'Dorminhoca', 'soraiasoninhobom@paisdossono.com', '99999999', '1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);


ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
