-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/07/2025 às 02:05
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sync360`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `imagem` varchar(266) NOT NULL,
  `nome` text NOT NULL,
  `idade` int(11) NOT NULL,
  `endereco` varchar(266) NOT NULL,
  `biografia` varchar(266) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `imagem`, `nome`, `idade`, `endereco`, `biografia`) VALUES
(3, '../uploads/686db2d2ec1bd_istockphoto-1326417862-612x612.jpg', 'Rosana Medeiros', 30, 'Rua das Acácias, 215 Bairro Jardim Primavera – São Paulo, SP', 'Rosana Medeiros é uma jovem criativa e determinada, apaixonada por inovação e impacto social. Natural de Recife, formou-se em Engenharia de Produção e atua com projetos voltados à sustentabilidade e tecnologia. Além de empreendedora, é engajada em causas sociais.'),
(5, '../uploads/686db8bfdd4d1_images.jfif', 'Suellen lua', 22, 'Rua Pedro Álvares Cabral, 402 Bairro Centro Histórico – Salvador, BA', 'Suelen Lua é uma apaixonada pela arte, pelas palavras e pelas pequenas histórias do cotidiano. Nascida em uma cidade interiorana, cresceu cercada por livros, cadernos e noites estreladas, de onde surgiu seu nome — inspirado na lua que tanto admirava.'),
(6, '../uploads/686db8d24adf9_images (1).jfif', 'Terry Jefford', 40, 'Rua do Ipê Roxo, 87 Bairro Lago Azul – Manaus, AM', 'Terry Jeffod Sargento é um profissional dedicado e disciplinado, conhecido por sua liderança firme e comprometimento com o dever. Com trajetória marcada por valores como honra, coragem e respeito, atuou por anos em serviços estratégicos, sempre prezando pela ética.'),
(8, '../uploads/686edfa911b9b_man-5022931_1280.jpg', 'Diego ruiz', 23, 'Rua João Batista, 1520 Bairro Santa Mônica – Belo Horizonte, MG', 'Diego Ruiz é um jovem sonhador e versátil, apaixonado por tecnologia, arte e desafios. Natural de São Paulo, sempre buscou transformar ideias em projetos reais, unindo criatividade e estratégia. Com um perfil inquieto e curioso, atua nas áreas de design digital.'),
(11, '../uploads/686f02c0b8b88_istockphoto-1289220545-612x612.jpg', 'isabela bela', 21, 'Rua Vitória Régia, 66 Bairro Boa Vista – Curitiba, PR', 'Isabela Bela é uma jovem carismática e determinada, conhecida por seu sorriso leve e sua vontade de fazer a diferença. Com um olhar sensível para o mundo e paixão por aprender, Isabela se destaca por sua criatividade e empatia.');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
