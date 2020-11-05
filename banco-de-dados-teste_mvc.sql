-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 05-Nov-2020 às 21:05
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste_mvc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

DROP TABLE IF EXISTS `pessoa`;
CREATE TABLE IF NOT EXISTS `pessoa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `rg` int(11) DEFAULT NULL,
  `cpf` varchar(100) DEFAULT NULL,
  `endereco` text DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `genero` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `rg`, `cpf`, `endereco`, `email`, `genero`) VALUES
(1, 'joao', 55555555, '12314', 'rua joao da costa', 'joao@email', 'm'),
(2, 'paulo', 555555, '321324123', 'rua joao da costa', 'paulo@email', 'm'),
(3, 'marcos', 66666, '1431243', 'rua joao da costa', 'marcos@email', 'm'),
(4, 'maria', 33333, '3465346', 'rua joao da costa', 'maria@email', 'f'),
(5, 'joana', 22222, '54367456', 'rua joao da costa', 'joana@email', 'f'),
(13, 'teste', 234235, '23452345', 'Feliciano coelho de carvalho', 'joana_costa@email', 'm'),
(14, '$nome', 222, '222', '$endereco', '$email', 'm'),
(15, 'joao', 123, '123', 'joaobatisa', 'joaobatista@email', 'm'),
(16, '', 123, '222', 'joaobatisa', 'joaobatista@email', 'm'),
(17, 'teste', 99999999, '222', 'joaobatisa', 'joaobatista@email', 'm'),
(18, 'teste', 99999999, '123456', 'joaobatisa', 'joaobatista@email', 'm'),
(19, 'teste', 99999999, '123', 'joaobatisa', 'joaobatista1@email', 'm'),
(20, 'teste', 99999999, '999', 'joaobatisa', 'joaobatista2@email', 'm'),
(21, 'teste', 99999999, '3333333333', 'joaobatisa', 'joaobatista2@email', 'm'),
(22, 'teste', 99999999, '3333333333', 'Feliciano coelho de carvalho, 92, 92, 92', 'joaobatista03@gmail', 'm'),
(23, 'fulano01', 1121, '5551', 'rua maria1', '(1)@email.com', 'm'),
(24, 'fulano02', 1122, '5552', 'rua maria2', '(2)@email.com', 'm'),
(25, 'fulano03', 1123, '5553', 'rua maria3', '(3)@email.com', 'm'),
(26, 'fulano04', 1124, '5554', 'rua maria4', '(4)@email.com', 'm'),
(27, 'fulano05', 1125, '5555', 'rua maria5', '(5)@email.com', 'm'),
(28, 'fulano06', 1126, '5556', 'rua maria6', '(6)@email.com', 'm'),
(29, 'fulano07', 1127, '5557', 'rua maria7', '(7)@email.com', 'm'),
(30, 'fulano08', 1128, '5558', 'rua maria8', '(8)@email.com', 'm'),
(31, 'fulano09', 1129, '5559', 'rua maria9', '(9)@email.com', 'm'),
(32, 'fulano010', 11210, '55510', 'rua maria10', '(10)@email.com', 'm'),
(33, 'fulano011', 11211, '55511', 'rua maria11', '(11)@email.com', 'm'),
(34, 'fulano012', 11212, '55512', 'rua maria12', '(12)@email.com', 'm'),
(35, 'fulano013', 11213, '55513', 'rua maria13', '(13)@email.com', 'm'),
(36, 'fulano014', 11214, '55514', 'rua maria14', '(14)@email.com', 'm'),
(37, 'fulano015', 11215, '55515', 'rua maria15', '(15)@email.com', 'm'),
(38, 'fulano016', 11216, '55516', 'rua maria16', '(16)@email.com', 'm'),
(39, 'fulano017', 11217, '55517', 'rua maria17', '(17)@email.com', 'm'),
(40, 'fulano018', 11218, '55518', 'rua maria18', '(18)@email.com', 'm'),
(41, 'fulano019', 11219, '55519', 'rua maria19', '(19)@email.com', 'm'),
(42, 'fulano020', 11220, '55520', 'rua maria20', '(20)@email.com', 'm'),
(43, 'fulano021', 11221, '55521', 'rua maria21', '(21)@email.com', 'm'),
(44, 'fulano022', 11222, '55522', 'rua maria22', '(22)@email.com', 'm'),
(45, 'fulano023', 11223, '55523', 'rua maria23', '(23)@email.com', 'm'),
(46, 'fulano024', 11224, '55524', 'rua maria24', '(24)@email.com', 'm'),
(47, 'fulano025', 11225, '55525', 'rua maria25', '(25)@email.com', 'm'),
(48, 'fulano026', 11226, '55526', 'rua maria26', '(26)@email.com', 'm'),
(49, 'fulano027', 11227, '55527', 'rua maria27', '(27)@email.com', 'm'),
(50, 'fulano028', 11228, '55528', 'rua maria28', '(28)@email.com', 'm'),
(51, 'fulano029', 11229, '55529', 'rua maria29', '(29)@email.com', 'm'),
(52, 'fulano030', 11230, '55530', 'rua maria30', '(30)@email.com', 'm'),
(53, 'fulano031', 11231, '55531', 'rua maria31', '(31)@email.com', 'm'),
(54, 'fulano032', 11232, '55532', 'rua maria32', '(32)@email.com', 'm'),
(55, 'fulano033', 11233, '55533', 'rua maria33', '(33)@email.com', 'm'),
(56, 'fulano034', 11234, '55534', 'rua maria34', '(34)@email.com', 'm'),
(57, 'fulano035', 11235, '55535', 'rua maria35', '(35)@email.com', 'm'),
(58, 'fulano036', 11236, '55536', 'rua maria36', '(36)@email.com', 'm'),
(59, 'fulano037', 11237, '55537', 'rua maria37', '(37)@email.com', 'm'),
(60, 'fulano038', 11238, '55538', 'rua maria38', '(38)@email.com', 'm'),
(61, 'fulano039', 11239, '55539', 'rua maria39', '(39)@email.com', 'm'),
(62, 'fulano040', 11240, '55540', 'rua maria40', '(40)@email.com', 'm'),
(63, 'fulano041', 11241, '55541', 'rua maria41', '(41)@email.com', 'm'),
(64, 'fulano042', 11242, '55542', 'rua maria42', '(42)@email.com', 'm'),
(65, 'fulano043', 11243, '55543', 'rua maria43', '(43)@email.com', 'm'),
(66, 'fulano044', 11244, '55544', 'rua maria44', '(44)@email.com', 'm'),
(67, 'fulano045', 11245, '55545', 'rua maria45', '(45)@email.com', 'm'),
(68, 'fulano046', 11246, '55546', 'rua maria46', '(46)@email.com', 'm'),
(69, 'fulano047', 11247, '55547', 'rua maria47', '(47)@email.com', 'm'),
(70, 'fulano048', 11248, '55548', 'rua maria48', '(48)@email.com', 'm'),
(71, 'fulano049', 11249, '55549', 'rua maria49', '(49)@email.com', 'm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
