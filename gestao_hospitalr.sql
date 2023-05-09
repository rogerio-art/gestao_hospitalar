-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 11:34 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestao_hospitalr`
--

-- --------------------------------------------------------

--
-- Table structure for table `addappointment`
--

CREATE TABLE `addappointment` (
  `id` int(20) NOT NULL,
  `patient` varchar(25) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `app_date` varchar(100) NOT NULL,
  `hora` varchar(40) DEFAULT NULL,
  `especialidade` varchar(100) DEFAULT NULL,
  `preco` int(11) NOT NULL,
  `sms` enum('0','1') NOT NULL,
  `namepatient` varchar(50) DEFAULT NULL,
  `estado` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=REDUNDANT;

--
-- Dumping data for table `addappointment`
--

INSERT INTO `addappointment` (`id`, `patient`, `doctor`, `app_date`, `hora`, `especialidade`, `preco`, `sms`, `namepatient`, `estado`) VALUES
(1, '130', 'Rosa Andre', '2030-03-06', '03:04', 'Cardiologista', 100, '1', 'Rosa Andre', '1'),
(2, '130', 'BrÃ¡ulio Ferrares', '2022-03-10', '06:05', 'ClÃ­nica Geral', 200, '1', 'Rosa Andre', '3'),
(3, '130', 'BrÃ¡ulio Ferrares', '2022-01-18', '21:03', 'ClÃ­nica Geral', 200, '1', 'Robson AndrÃ©\r\n', '1'),
(4, '162', 'Rosa Andre', '2022-09-01', '07:07', 'Cardiologista', 100, '1', 'PACIDIO ', '1'),
(5, '130', 'BrÃ¡ulio Ferrares', '2022-09-03', '08:47', 'ClÃ­nica Geral', 200, '1', 'Rosa Andre', '1'),
(10, '130', 'BrÃ¡ulio Ferrares', '2022-09-10', '12:36', 'ClÃ­nica Geral', 200, '1', 'Rosa AndrÃ©', '1'),
(11, '163', 'Rosa Andre', '2022-09-15', '13:04', 'Cardiologista', 100, '1', 'rogerio Alfredo ', '1'),
(12, '163', 'Rosa Andre', '2023-03-29', '09:08', 'Cardiologista', 100, '1', 'rogerio Alfredo', '2'),
(13, '163', 'BrÃ¡ulio Ferrares', '2023-03-31', '05:59', 'ClÃ­nica Geral', 200, '1', 'rogerio Alfredo', '1'),
(14, '163', 'Rosa Andre', '2023-03-29', '00:00', 'Cardiologista', 100, '1', 'rogerio Alfredo', '1'),
(15, '163', 'BrÃ¡ulio Ferrares', '2023-03-30', '09:08', 'ClÃ­nica Geral', 200, '1', 'rogerio Alfredo', '1'),
(16, '163', 'Selecione o Médico', '2023-03-27', '07:06', 'Neurologista', 400, '1', 'rogerio Alfredo', '3');

-- --------------------------------------------------------

--
-- Table structure for table `adddeposit`
--

CREATE TABLE `adddeposit` (
  `id` int(11) NOT NULL,
  `patient` int(11) NOT NULL,
  `invoice` int(20) NOT NULL,
  `depositammount` int(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `addfiles`
--

CREATE TABLE `addfiles` (
  `id` int(20) NOT NULL,
  `doc_date` varchar(100) NOT NULL,
  `patient` varchar(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `file` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `addmedicalhistory`
--

CREATE TABLE `addmedicalhistory` (
  `id` int(20) NOT NULL,
  `date` date NOT NULL,
  `patient` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=REDUNDANT;

-- --------------------------------------------------------

--
-- Table structure for table `addnewmedicine`
--

CREATE TABLE `addnewmedicine` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `genericname` varchar(30) NOT NULL,
  `company` varchar(30) NOT NULL,
  `effect` varchar(30) NOT NULL,
  `expiredate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addnewmedicine`
--

INSERT INTO `addnewmedicine` (`id`, `name`, `category`, `price`, `quantity`, `genericname`, `company`, `effect`, `expiredate`) VALUES
(1, 'Paracetamol', 'Comprimido', 23, 2, 'qee', 'lameira soft', 'qwqw', '2022-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `addnewpres`
--

CREATE TABLE `addnewpres` (
  `id` int(11) NOT NULL,
  `id_patient` int(5) NOT NULL,
  `date` varchar(20) NOT NULL,
  `patient` varchar(30) NOT NULL,
  `history` text NOT NULL,
  `medication` text NOT NULL,
  `note` text NOT NULL,
  `peso` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `addnewpres`
--

INSERT INTO `addnewpres` (`id`, `id_patient`, `date`, `patient`, `history`, `medication`, `note`, `peso`) VALUES
(1, 158, '2022-09-03', 'PACIDIO', '<p>12</p>\r\n', '<p>ww</p>\r\n', '<p>ww</p>\r\n', 12),
(2, 163, '2022-09-03', 'rogerio Alfredo', '<p>teste</p>\r\n', '<p>teste</p>\r\n', '<p>teste teeeee</p>\r\n', 34),
(3, 163, '2022-09-03', '  Bismark dede', '<p>teete teste 2</p>\r\n', '<p>teete teste2</p>\r\n', '<p>teete teste2</p>\r\n', 76);

-- --------------------------------------------------------

--
-- Table structure for table `addpayment`
--

CREATE TABLE `addpayment` (
  `id` int(11) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `patient` int(30) NOT NULL,
  `refdbydoctor` varchar(30) NOT NULL,
  `categoryselect` varchar(30) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `addp_discount` int(11) NOT NULL,
  `grosstotal` int(11) NOT NULL,
  `amountreceived` int(11) NOT NULL,
  `depositammount` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `vatper` int(100) NOT NULL,
  `discount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(10) UNSIGNED NOT NULL,
  `emaildoadmin` varchar(50) DEFAULT NULL,
  `nomeadmin` varchar(50) DEFAULT NULL,
  `senhadoadmin` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPRESSED;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_admin`, `emaildoadmin`, `nomeadmin`, `senhadoadmin`) VALUES
(1, 'rogeriolameira2017@gmail.com', 'rogerio', 'e'),
(2, 'rogeriolameira2017e@gmail.com', 'rogerio', 'e'),
(3, 'admin@gmail.com', 'rogerio Alfredo', 'Rosaandre2017'),
(4, 'admin2@gmail.com', 'ADMIN', '123'),
(5, 'a@a.com', 'Rogerio', '123'),
(12, 'x@s.comg', 'gg', 'gg');

-- --------------------------------------------------------

--
-- Table structure for table `altas`
--

CREATE TABLE `altas` (
  `id` int(11) NOT NULL,
  `Idpatient` int(11) NOT NULL,
  `data` varchar(25) NOT NULL,
  `descricao` text NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sala` text NOT NULL,
  `datafim` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `altas`
--

INSERT INTO `altas` (`id`, `Idpatient`, `data`, `descricao`, `nome`, `sala`, `datafim`) VALUES
(22, 155, '2022-01-18', '<p>kljl&ccedil;opoppuopu&ordm;u&ordm;</p>\r\n', 'teste ', ' 6767   ', '2022-01-18'),
(23, 155, '2022-02-13', '<p>www</p>\r\n', 'Robson Manuel', ' 12   ', '2022-02-13'),
(24, 131, '2022-02-02', '<p>treret</p>\r\n', 'Hernani ', ' 3   ', '2022-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `beneficiario`
--

CREATE TABLE `beneficiario` (
  `id_bef` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `namebenif` varchar(30) DEFAULT NULL,
  `endereco` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `idade` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beneficiario`
--

INSERT INTO `beneficiario` (`id_bef`, `id`, `namebenif`, `endereco`, `email`, `telefone`, `genero`, `idade`) VALUES
(19, 130, 'Robson AndrÃ©', 'Zango 0', 'rogeriolameira2017@gmail.com', '944259591', 'Masculino', '90'),
(22, 155, 'Robson Manuel', 'viana', 'teste@teste.com', '944259591', 'Masculino', '6'),
(23, 158, 'teste', 'viana', 'teste@teste.com', '944259591', 'Masculino', '6');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent` int(11) DEFAULT 0,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_added` int(11) DEFAULT NULL,
  `last_modified` int(11) DEFAULT NULL,
  `font_awesome_class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('t8pp5hhhnn8t371r4029af2m4s4n85e5', '::1', 1645892515, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634353839323531353b636172745f6974656d737c613a303a7b7d),
('s9pfna2mi4j1jf4f2nmri3lb6oi6nao8', '::1', 1645893113, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634353839333131333b636172745f6974656d737c613a303a7b7d),
('oaj2vmcr1uheb1olal74eugb4bb9djjn', '::1', 1645893909, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634353839333930393b636172745f6974656d737c613a303a7b7d),
('tgt228mtf7hedv8r45cg2m8qhg75gcsj', '::1', 1645894927, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634353839343932373b636172745f6974656d737c613a303a7b7d),
('h9k4nqbk1t5civcpshmr0fql4hrm8mmv', '::1', 1645895011, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634353839343932373b636172745f6974656d737c613a303a7b7d),
('2k38r2pm6u3shja7j30cdlveukq0hlvb', '::1', 1645968807, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634353936383830373b636172745f6974656d737c613a303a7b7d757365725f69647c733a313a2233223b726f6c655f69647c733a313a2232223b726f6c657c733a343a2255736572223b6e616d657c733a31303a22726f736120416e647265223b757365725f6c6f67696e7c733a313a2231223b),
('1fu5ari95ah29d8ueh7fuo9p9bqmnftf', '::1', 1645970349, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634353937303334393b636172745f6974656d737c613a303a7b7d757365725f69647c733a313a2233223b726f6c655f69647c733a313a2232223b726f6c657c733a343a2255736572223b6e616d657c733a31303a22726f736120416e647265223b757365725f6c6f67696e7c733a313a2231223b),
('2dsoi3rkdrniih40k8dfbhs1hjtu6or0', '::1', 1645970708, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634353937303730383b636172745f6974656d737c613a303a7b7d757365725f69647c733a313a2233223b726f6c655f69647c733a313a2232223b726f6c657c733a343a2255736572223b6e616d657c733a31303a22726f736120416e647265223b757365725f6c6f67696e7c733a313a2231223b),
('modvodlpv1r3p2ktkdeaddmojpo5i4rd', '::1', 1645971463, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634353937313436333b636172745f6974656d737c613a303a7b7d757365725f69647c733a313a2233223b726f6c655f69647c733a313a2232223b726f6c657c733a343a2255736572223b6e616d657c733a31303a22726f736120416e647265223b757365725f6c6f67696e7c733a313a2231223b),
('m9p8ukg51i3d8or9843es6q65trfju36', '::1', 1645972027, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634353937323032373b636172745f6974656d737c613a303a7b7d757365725f69647c733a313a2233223b726f6c655f69647c733a313a2232223b726f6c657c733a343a2255736572223b6e616d657c733a31303a22726f736120416e647265223b757365725f6c6f67696e7c733a313a2231223b),
('52recej1j8pcfg04omsj40c6cq1d826u', '::1', 1645972743, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634353937323734333b636172745f6974656d737c613a303a7b7d757365725f69647c733a313a2233223b726f6c655f69647c733a313a2232223b726f6c657c733a343a2255736572223b6e616d657c733a31303a22726f736120416e647265223b757365725f6c6f67696e7c733a313a2231223b),
('amjdtqae5299paaccaqirh7pasrqnj03', '::1', 1645972908, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634353937323734333b636172745f6974656d737c613a303a7b7d757365725f69647c733a313a2233223b726f6c655f69647c733a313a2232223b726f6c657c733a343a2255736572223b6e616d657c733a31303a22726f736120416e647265223b757365725f6c6f67696e7c733a313a2231223b),
('fqctt6f4s1jqad4araqsj2ng0pc1io2d', '::1', 1646496468, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363439363436383b636172745f6974656d737c613a303a7b7d),
('h6c44p3j79rn6q4n3ssodj5mk83ld1qb', '::1', 1646496468, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363439363436383b636172745f6974656d737c613a303a7b7d),
('t8pp5hhhnn8t371r4029af2m4s4n85e5', '::1', 1645892515, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634353839323531353b636172745f6974656d737c613a303a7b7d),
('s9pfna2mi4j1jf4f2nmri3lb6oi6nao8', '::1', 1645893113, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634353839333131333b636172745f6974656d737c613a303a7b7d),
('oaj2vmcr1uheb1olal74eugb4bb9djjn', '::1', 1645893909, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634353839333930393b636172745f6974656d737c613a303a7b7d),
('tgt228mtf7hedv8r45cg2m8qhg75gcsj', '::1', 1645894927, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634353839343932373b636172745f6974656d737c613a303a7b7d),
('h9k4nqbk1t5civcpshmr0fql4hrm8mmv', '::1', 1645895011, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634353839343932373b636172745f6974656d737c613a303a7b7d),
('2k38r2pm6u3shja7j30cdlveukq0hlvb', '::1', 1645968807, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634353936383830373b636172745f6974656d737c613a303a7b7d757365725f69647c733a313a2233223b726f6c655f69647c733a313a2232223b726f6c657c733a343a2255736572223b6e616d657c733a31303a22726f736120416e647265223b757365725f6c6f67696e7c733a313a2231223b),
('1fu5ari95ah29d8ueh7fuo9p9bqmnftf', '::1', 1645970349, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634353937303334393b636172745f6974656d737c613a303a7b7d757365725f69647c733a313a2233223b726f6c655f69647c733a313a2232223b726f6c657c733a343a2255736572223b6e616d657c733a31303a22726f736120416e647265223b757365725f6c6f67696e7c733a313a2231223b),
('2dsoi3rkdrniih40k8dfbhs1hjtu6or0', '::1', 1645970708, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634353937303730383b636172745f6974656d737c613a303a7b7d757365725f69647c733a313a2233223b726f6c655f69647c733a313a2232223b726f6c657c733a343a2255736572223b6e616d657c733a31303a22726f736120416e647265223b757365725f6c6f67696e7c733a313a2231223b),
('modvodlpv1r3p2ktkdeaddmojpo5i4rd', '::1', 1645971463, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634353937313436333b636172745f6974656d737c613a303a7b7d757365725f69647c733a313a2233223b726f6c655f69647c733a313a2232223b726f6c657c733a343a2255736572223b6e616d657c733a31303a22726f736120416e647265223b757365725f6c6f67696e7c733a313a2231223b),
('m9p8ukg51i3d8or9843es6q65trfju36', '::1', 1645972027, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634353937323032373b636172745f6974656d737c613a303a7b7d757365725f69647c733a313a2233223b726f6c655f69647c733a313a2232223b726f6c657c733a343a2255736572223b6e616d657c733a31303a22726f736120416e647265223b757365725f6c6f67696e7c733a313a2231223b),
('52recej1j8pcfg04omsj40c6cq1d826u', '::1', 1645972743, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634353937323734333b636172745f6974656d737c613a303a7b7d757365725f69647c733a313a2233223b726f6c655f69647c733a313a2232223b726f6c657c733a343a2255736572223b6e616d657c733a31303a22726f736120416e647265223b757365725f6c6f67696e7c733a313a2231223b),
('amjdtqae5299paaccaqirh7pasrqnj03', '::1', 1645972908, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634353937323734333b636172745f6974656d737c613a303a7b7d757365725f69647c733a313a2233223b726f6c655f69647c733a313a2232223b726f6c657c733a343a2255736572223b6e616d657c733a31303a22726f736120416e647265223b757365725f6c6f67696e7c733a313a2231223b),
('fqctt6f4s1jqad4araqsj2ng0pc1io2d', '::1', 1646496468, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363439363436383b636172745f6974656d737c613a303a7b7d),
('h6c44p3j79rn6q4n3ssodj5mk83ld1qb', '::1', 1646496468, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363439363436383b636172745f6974656d737c613a303a7b7d),
('ph5liv5gmpse1ha70brqknq3tlhp099n', '::1', 1648171670, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634383137313637303b636172745f6974656d737c613a303a7b7d),
('l5nre3fh1iono91j0purq8duu7kp5tvp', '::1', 1648171704, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634383137313637303b636172745f6974656d737c613a303a7b7d),
('75q8ceegvn7na8jv2espjukad2r9nlif', '::1', 1680888755, 0x5f5f63695f6c6173745f726567656e65726174657c693a313638303838383735353b636172745f6974656d737c613a303a7b7d),
('s6hmf9g2h9eqecmo5463j6ktpo9drbj6', '::1', 1680888829, 0x5f5f63695f6c6173745f726567656e65726174657c693a313638303838383735353b636172745f6974656d737c613a303a7b7d),
('ghiiepcnbl5e2i1iln4tbdv4jpnn281g', '::1', 1681574789, 0x5f5f63695f6c6173745f726567656e65726174657c693a313638313537343738393b636172745f6974656d737c613a303a7b7d),
('bnkfhb19hmgf0jrjgpmpnj67gmib145v', '::1', 1681575059, 0x5f5f63695f6c6173745f726567656e65726174657c693a313638313537343738393b636172745f6974656d737c613a303a7b7d757365725f69647c733a323a223433223b726f6c655f69647c733a313a2232223b726f6c657c733a343a2255736572223b6e616d657c733a31373a22726f676572696f20416c667265646f202e223b666c6173685f6d6573736167657c733a32373a2242656d2056696e646f20726f676572696f20416c667265646f202e223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d757365725f6c6f67696e7c733a313a2231223b);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) UNSIGNED NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `commentable_id` int(11) DEFAULT NULL,
  `commentable_type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_added` int(11) DEFAULT NULL,
  `last_modified` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `assunto` varchar(50) NOT NULL,
  `mensagem` varchar(5000) NOT NULL,
  `telefone` int(20) NOT NULL,
  `ContactType` varchar(50) NOT NULL,
  `file` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacto`
--

INSERT INTO `contacto` (`id`, `name`, `email`, `assunto`, `mensagem`, `telefone`, `ContactType`, `file`) VALUES
(110, 'zabo', 'rogeriolameira2017@gmail.com', 'trtrtr', 'efeffg', 76896786, 'Candidatura', 'cedencia.jpg'),
(111, 'wwwwww', 'tesfddsdte@teste.com', 'wwwwwww', 'wwwwwww', 944259591, 'Contacto', ''),
(112, 'kkkkk', 'rosaandre@gmail.com', 'kk', 'kkkkk', 66666, 'Contacto', 'config.txt'),
(113, 'rrrrrrrrrrr', 'teste@teste.com', 'rrrr', 'rrrrrrr', 944259591, 'Contacto', 'config.txt'),
(114, 'teste', 'teste', 'teste', 'teste', 0, 'Contacto', '3da9ec0d6f773fb549aa0e54c88b5c50 (1).jpg'),
(115, 'teste1', 'teste1', 'teste1', 'teste1', 0, 'Contacto', ''),
(116, 'rogerio Alfredo', 'rogeriolameira2017@gmail.com', 'teste', 'teste', 222, 'Candidatura', '');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_description` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `outcomes` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `section` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `requirements` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `discount_flag` int(11) DEFAULT 0,
  `discounted_price` int(11) DEFAULT NULL,
  `level` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_added` int(11) DEFAULT NULL,
  `last_modified` int(11) DEFAULT NULL,
  `visibility` int(11) DEFAULT NULL,
  `is_top_course` int(11) DEFAULT 0,
  `is_admin` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `course_overview_provider` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_free_course` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `symbol` varchar(255) DEFAULT NULL,
  `paypal_supported` int(11) DEFAULT NULL,
  `stripe_supported` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`id`, `name`, `code`, `symbol`, `paypal_supported`, `stripe_supported`) VALUES
(1, 'Leke', 'ALL', 'Lek', 0, 1),
(2, 'Dollars', 'USD', '$', 1, 1),
(3, 'Afghanis', 'AFN', '؋', 0, 1),
(4, 'Pesos', 'ARS', '$', 0, 1),
(5, 'Guilders', 'AWG', 'ƒ', 0, 1),
(6, 'Dollars', 'AUD', '$', 1, 1),
(7, 'New Manats', 'AZN', 'ман', 0, 1),
(8, 'Dollars', 'BSD', '$', 0, 1),
(9, 'Dollars', 'BBD', '$', 0, 1),
(10, 'Rubles', 'BYR', 'p.', 0, 0),
(11, 'Euro', 'EUR', '€', 1, 1),
(12, 'Dollars', 'BZD', 'BZ$', 0, 1),
(13, 'Dollars', 'BMD', '$', 0, 1),
(14, 'Bolivianos', 'BOB', '$b', 0, 1),
(15, 'Convertible Marka', 'BAM', 'KM', 0, 1),
(16, 'Pula', 'BWP', 'P', 0, 1),
(17, 'Leva', 'BGN', 'лв', 0, 1),
(18, 'Reais', 'BRL', 'R$', 1, 1),
(19, 'Pounds', 'GBP', '£', 1, 1),
(20, 'Dollars', 'BND', '$', 0, 1),
(21, 'Riels', 'KHR', '៛', 0, 1),
(22, 'Dollars', 'CAD', '$', 1, 1),
(23, 'Dollars', 'KYD', '$', 0, 1),
(24, 'Pesos', 'CLP', '$', 0, 1),
(25, 'Yuan Renminbi', 'CNY', '¥', 0, 1),
(26, 'Pesos', 'COP', '$', 0, 1),
(27, 'Colón', 'CRC', '₡', 0, 1),
(28, 'Kuna', 'HRK', 'kn', 0, 1),
(29, 'Pesos', 'CUP', '₱', 0, 0),
(30, 'Koruny', 'CZK', 'Kč', 1, 1),
(31, 'Kroner', 'DKK', 'kr', 1, 1),
(32, 'Pesos', 'DOP ', 'RD$', 0, 1),
(33, 'Dollars', 'XCD', '$', 0, 1),
(34, 'Pounds', 'EGP', '£', 0, 1),
(35, 'Colones', 'SVC', '$', 0, 0),
(36, 'Pounds', 'FKP', '£', 0, 1),
(37, 'Dollars', 'FJD', '$', 0, 1),
(38, 'Cedis', 'GHC', '¢', 0, 0),
(39, 'Pounds', 'GIP', '£', 0, 1),
(40, 'Quetzales', 'GTQ', 'Q', 0, 1),
(41, 'Pounds', 'GGP', '£', 0, 0),
(42, 'Dollars', 'GYD', '$', 0, 1),
(43, 'Lempiras', 'HNL', 'L', 0, 1),
(44, 'Dollars', 'HKD', '$', 1, 1),
(45, 'Forint', 'HUF', 'Ft', 1, 1),
(46, 'Kronur', 'ISK', 'kr', 0, 1),
(47, 'Rupees', 'INR', 'Rp', 0, 1),
(48, 'Rupiahs', 'IDR', 'Rp', 0, 1),
(49, 'Rials', 'IRR', '﷼', 0, 0),
(50, 'Pounds', 'IMP', '£', 0, 0),
(51, 'New Shekels', 'ILS', '₪', 1, 1),
(52, 'Dollars', 'JMD', 'J$', 0, 1),
(53, 'Yen', 'JPY', '¥', 1, 1),
(54, 'Pounds', 'JEP', '£', 0, 0),
(55, 'Tenge', 'KZT', 'лв', 0, 1),
(56, 'Won', 'KPW', '₩', 0, 0),
(57, 'Won', 'KRW', '₩', 0, 1),
(58, 'Soms', 'KGS', 'лв', 0, 1),
(59, 'Kips', 'LAK', '₭', 0, 1),
(60, 'Lati', 'LVL', 'Ls', 0, 0),
(61, 'Pounds', 'LBP', '£', 0, 1),
(62, 'Dollars', 'LRD', '$', 0, 1),
(63, 'Switzerland Francs', 'CHF', 'CHF', 1, 1),
(64, 'Litai', 'LTL', 'Lt', 0, 0),
(65, 'Denars', 'MKD', 'ден', 0, 1),
(66, 'Ringgits', 'MYR', 'RM', 1, 1),
(67, 'Rupees', 'MUR', '₨', 0, 1),
(68, 'Pesos', 'MXN', '$', 1, 1),
(69, 'Tugriks', 'MNT', '₮', 0, 1),
(70, 'Meticais', 'MZN', 'MT', 0, 1),
(71, 'Dollars', 'NAD', '$', 0, 1),
(72, 'Rupees', 'NPR', '₨', 0, 1),
(73, 'Guilders', 'ANG', 'ƒ', 0, 1),
(74, 'Dollars', 'NZD', '$', 1, 1),
(75, 'Cordobas', 'NIO', 'C$', 0, 1),
(76, 'Nairas', 'NGN', '₦', 0, 1),
(77, 'Krone', 'NOK', 'kr', 1, 1),
(78, 'Rials', 'OMR', '﷼', 0, 0),
(79, 'Rupees', 'PKR', '₨', 0, 1),
(80, 'Balboa', 'PAB', 'B/.', 0, 1),
(81, 'Guarani', 'PYG', 'Gs', 0, 1),
(82, 'Nuevos Soles', 'PEN', 'S/.', 0, 1),
(83, 'Pesos', 'PHP', 'Php', 1, 1),
(84, 'Zlotych', 'PLN', 'zł', 1, 1),
(85, 'Rials', 'QAR', '﷼', 0, 1),
(86, 'New Lei', 'RON', 'lei', 0, 1),
(87, 'Rubles', 'RUB', 'руб', 0, 1),
(88, 'Pounds', 'SHP', '£', 0, 1),
(89, 'Riyals', 'SAR', '﷼', 0, 1),
(90, 'Dinars', 'RSD', 'Дин.', 0, 1),
(91, 'Rupees', 'SCR', '₨', 0, 1),
(92, 'Dollars', 'SGD', '$', 1, 1),
(93, 'Dollars', 'SBD', '$', 0, 1),
(94, 'Shillings', 'SOS', 'S', 0, 1),
(95, 'Rand', 'ZAR', 'R', 0, 1),
(96, 'Rupees', 'LKR', '₨', 0, 1),
(97, 'Kronor', 'SEK', 'kr', 1, 1),
(98, 'Dollars', 'SRD', '$', 0, 1),
(99, 'Pounds', 'SYP', '£', 0, 0),
(100, 'New Dollars', 'TWD', 'NT$', 1, 1),
(101, 'Baht', 'THB', '฿', 1, 1),
(102, 'Dollars', 'TTD', 'TT$', 0, 1),
(103, 'Lira', 'TRY', 'TL', 0, 1),
(104, 'Liras', 'TRL', '£', 0, 0),
(105, 'Dollars', 'TVD', '$', 0, 0),
(106, 'Hryvnia', 'UAH', '₴', 0, 1),
(107, 'Pesos', 'UYU', '$U', 0, 1),
(108, 'Sums', 'UZS', 'лв', 0, 1),
(109, 'Bolivares Fuertes', 'VEF', 'Bs', 0, 0),
(110, 'Dong', 'VND', '₫', 0, 1),
(111, 'Rials', 'YER', '﷼', 0, 1),
(112, 'Zimbabwe Dollars', 'ZWD', 'Z$', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `enrol`
--

CREATE TABLE `enrol` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `date_added` int(11) DEFAULT NULL,
  `last_modified` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `especialidade`
--

CREATE TABLE `especialidade` (
  `Id` int(11) NOT NULL,
  `Nome` varchar(30) NOT NULL,
  `Preco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `especialidade`
--

INSERT INTO `especialidade` (`Id`, `Nome`, `Preco`) VALUES
(1, 'Cardiologista', 100),
(2, 'ClÃ­nica Geral', 200),
(3, 'Fisioterapia', 300),
(4, 'Neurologista', 400),
(5, 'Urologista', 500),
(6, 'CirurgiÃ£o', 600),
(7, 'Angiologista', 700);

-- --------------------------------------------------------

--
-- Table structure for table `exame`
--

CREATE TABLE `exame` (
  `id` int(11) NOT NULL,
  `patiente` varchar(11) NOT NULL,
  `data` varchar(30) NOT NULL,
  `nameexame` varchar(2000) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `preco` int(11) DEFAULT NULL,
  `patientname` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `note` varchar(2000) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exame`
--

INSERT INTO `exame` (`id`, `patiente`, `data`, `nameexame`, `preco`, `patientname`, `note`) VALUES
(1, '75', '2021-09-08', '', 20000, ' rogeriow ', '<p>Notas do exame para o paciente</p>\r\n'),
(13, '130', '3342-03-04', '<p>ewrew</p>\r\n', 0, 'Robson AndrÃ©', '<p>ew</p>\r\n'),
(14, '130', '2022-01-18', '<p>jhfdfg</p>\r\n\r\n<p>kl&ccedil;fdk&ccedil;fd</p>\r\n\r\n<p>l&ccedil;kfdgfd</p>\r\n\r\n<p>fd&ccedil;gfd</p>\r\n\r\n<p>&nbsp;</p>\r\n', 4343, 'Rosa Andre ', '<p>rttyrtyttryy</p>\r\n\r\n<p>ytr</p>\r\n\r\n<p>try</p>\r\n'),
(15, '163', '2022-09-03', '<p>teste</p>\r\n', 32, 'rogerio Alfredo ', '<p>teste</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `formulario`
--

CREATE TABLE `formulario` (
  `idformulario` int(10) UNSIGNED NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `mensagem` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `frontend_settings`
--

CREATE TABLE `frontend_settings` (
  `id` int(11) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` longtext COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `frontend_settings`
--

INSERT INTO `frontend_settings` (`id`, `key`, `value`) VALUES
(1, 'banner_title', 'Learn on your schedule'),
(2, 'banner_sub_title', 'Study any topic, anytime. Explore thousands of courses for the lowest price ever!'),
(4, 'about_us', '<p></p><h2>This is about us</h2><p><span xss=\"removed\" xss=removed>Welcome to Academy. It will help you to learn in a new ways</span></p>'),
(10, 'terms_and_condition', '<h2>Terms and Condition</h2>This is the Terms and condition page for your companys'),
(11, 'privacy_policy', '<h2>Privacy Policy</h2>This is the Privacy Policy page for your companys'),
(13, 'theme', 'default');

-- --------------------------------------------------------

--
-- Table structure for table `internamento`
--

CREATE TABLE `internamento` (
  `id` int(11) NOT NULL,
  `data` varchar(25) NOT NULL,
  `patient` int(11) NOT NULL,
  `descricao` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nome` varchar(60) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `sala` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internamento`
--

INSERT INTO `internamento` (`id`, `data`, `patient`, `descricao`, `nome`, `sala`) VALUES
(23, '2022-01-11', 132, '<p>opkiop</p>\r\n', 'Marta Cabral ', '12'),
(36, '2022-02-13', 80, '<p>eweeew</p>\r\n', '  Bismark dede ', '4009');

-- --------------------------------------------------------

--
-- Table structure for table `jsssh`
--

CREATE TABLE `jsssh` (
  `id` int(20) NOT NULL,
  `yearsOld` int(3) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(2000) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `bloodgroup` varchar(20) NOT NULL,
  `imageupload` varchar(80) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `cartaodesaude` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `justify`
--

CREATE TABLE `justify` (
  `id` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL,
  `date` date NOT NULL,
  `patient` varchar(100) NOT NULL,
  `titulo` varchar(1000) NOT NULL,
  `descriacao` varchar(1000) NOT NULL,
  `descricao2` varchar(200) NOT NULL,
  `descricao3` varchar(200) NOT NULL,
  `data1` varchar(15) NOT NULL,
  `data2` varchar(15) NOT NULL,
  `dotorname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `justify`
--

INSERT INTO `justify` (`id`, `id_patient`, `date`, `patient`, `titulo`, `descriacao`, `descricao2`, `descricao3`, `data1`, `data2`, `dotorname`) VALUES
(17, 130, '2021-12-13', 'Rosa Andre ', 'DeclaraÃ§Ã£o MÃ©dica para Justificativo de Faltas ao ServiÃ§o', 'Rogerio Alfredo, MÃ©dico(a) em serviÃ§o neste Hospital, declaro ter observado o (a) paciente ', ' nesta unidade hospitalar no dia ', '  onde foi observado(a) e medicado(a). Deve beneficiar de repouso do dia ', '2021-12-22', '2021-12-31', ''),
(38, 130, '2022-03-05', 'Rosa Andre ', 'DeclaraÃ§Ã£o MÃ©dica para Justificativo de Faltas ao ServiÃ§o', 'Rogerio Alfredo, MÃ©dico(a) em serviÃ§o neste Hospital, declaro ter observado o (a) paciente ', ' nesta unidade hospitalar no dia ', '  onde foi observado(a) e medicado(a). Deve beneficiar de repouso do dia ', '2022-03-05', '2022-03-05', 'Rogerio Alfredo'),
(39, 130, '2022-03-05', 'Robson AndrÃ©', 'DeclaraÃ§Ã£o MÃ©dica para Justificativo de Faltas ao ServiÃ§o', 'Rogerio Alfredo, MÃ©dico(a) em serviÃ§o neste Hospital, declaro ter observado o (a) paciente ', ' nesta unidade hospitalar no dia ', '  onde foi observado(a) e medicado(a). Deve beneficiar de repouso do dia ', '2022-03-05', '2022-03-05', 'Rogerio Alfredo'),
(42, 80, '2022-07-16', '  Bismark dede ', 'DeclaraÃ§Ã£o MÃ©dica para Justificativo de Faltas ao ServiÃ§o', 'RogÃ©rio Alfredo, MÃ©dico(a) em serviÃ§o neste Hospital, declaro ter observado o (a) paciente ', ' nesta unidade hospitalar no dia ', '  onde foi observado(a) e medicado(a). Deve beneficiar de repouso do dia ', '2022-07-16', '2022-07-16', 'RogÃ©rio Alfredo'),
(43, 155, '2023-03-29', 'Robson Manuel', 'Declaração Médica para Justificativo de Faltas ao Serviço', 'r e, Médico(a) em serviço neste Hospital, declaro ter observado o (a) paciente ', ' nesta unidade hospitalar no dia ', '  onde foi observado(a) e medicado(a). Deve beneficiar de repouso do dia ', '2023-03-29', '2023-03-29', 'r e');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `phrase_id` int(11) NOT NULL,
  `phrase` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `english` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `Bengali` longtext COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Bengali`) VALUES
(1, 'manage_profile', NULL, NULL),
(140, 'category_code', NULL, NULL),
(3, 'dashboard', NULL, NULL),
(4, 'categories', NULL, NULL),
(5, 'courses', NULL, NULL),
(6, 'students', NULL, NULL),
(7, 'enroll_history', NULL, NULL),
(8, 'message', NULL, NULL),
(9, 'settings', NULL, NULL),
(10, 'system_settings', NULL, NULL),
(11, 'frontend_settings', NULL, NULL),
(12, 'payment_settings', NULL, NULL),
(13, 'manage_language', NULL, NULL),
(14, 'edit_profile', NULL, NULL),
(15, 'log_out', NULL, NULL),
(16, 'first_name', NULL, NULL),
(17, 'last_name', NULL, NULL),
(18, 'email', NULL, NULL),
(19, 'facebook_link', NULL, NULL),
(20, 'twitter_link', NULL, NULL),
(21, 'linkedin_link', NULL, NULL),
(22, 'a_short_title_about_yourself', NULL, NULL),
(23, 'biography', NULL, NULL),
(24, 'photo', NULL, NULL),
(25, 'select_image', NULL, NULL),
(26, 'change', NULL, NULL),
(27, 'remove', NULL, NULL),
(28, 'update_profile', NULL, NULL),
(29, 'change_password', NULL, NULL),
(30, 'current_password', NULL, NULL),
(31, 'new_password', NULL, NULL),
(32, 'confirm_new_password', NULL, NULL),
(33, 'delete', NULL, NULL),
(34, 'cancel', NULL, NULL),
(35, 'are_you_sure_to_update_this_information', NULL, NULL),
(36, 'yes', NULL, NULL),
(37, 'no', NULL, NULL),
(38, 'system settings', NULL, NULL),
(39, 'system_name', NULL, NULL),
(40, 'system_title', NULL, NULL),
(41, 'slogan', NULL, NULL),
(42, 'system_email', NULL, NULL),
(43, 'address', NULL, NULL),
(44, 'phone', NULL, NULL),
(45, 'youtube_api_key', NULL, NULL),
(46, 'get_youtube_api_key', NULL, NULL),
(47, 'vimeo_api_key', NULL, NULL),
(48, 'purchase_code', NULL, NULL),
(49, 'language', NULL, NULL),
(50, 'text-align', NULL, NULL),
(51, 'update_system_settings', NULL, NULL),
(52, 'update_product', NULL, NULL),
(53, 'file', NULL, NULL),
(54, 'install_update', NULL, NULL),
(55, 'system_logo', NULL, NULL),
(56, 'update_logo', NULL, NULL),
(57, 'get_vimeo_api_key', NULL, NULL),
(58, 'add_category', NULL, NULL),
(59, 'category_title', NULL, NULL),
(60, 'sub_categories', NULL, NULL),
(61, 'actions', NULL, NULL),
(62, 'action', NULL, NULL),
(63, 'manage_sub_categories', NULL, NULL),
(64, 'edit', NULL, NULL),
(65, 'add_course', NULL, NULL),
(66, 'select_category', NULL, NULL),
(67, 'title', NULL, NULL),
(68, 'category', NULL, NULL),
(69, '#_section', NULL, NULL),
(70, '#_lesson', NULL, NULL),
(71, '#_enrolled_user', NULL, NULL),
(72, 'view_course_details', NULL, NULL),
(73, 'manage_section', NULL, NULL),
(74, 'manage_lesson', NULL, NULL),
(75, 'student', NULL, NULL),
(76, 'add_student', NULL, NULL),
(77, 'name', NULL, NULL),
(78, 'date_added', NULL, NULL),
(79, 'enrolled_courses', NULL, NULL),
(80, 'view_profile', NULL, NULL),
(81, 'admin_dashboard', NULL, NULL),
(82, 'total_courses', NULL, NULL),
(83, 'number_of_courses', NULL, NULL),
(84, 'total_lessons', NULL, NULL),
(85, 'number_of_lessons', NULL, NULL),
(86, 'total_enrollment', NULL, NULL),
(87, 'number_of_enrollment', NULL, NULL),
(88, 'total_student', NULL, NULL),
(89, 'number_of_student', NULL, NULL),
(90, 'manage_sections', NULL, NULL),
(91, 'manage sections', NULL, NULL),
(92, 'course', NULL, NULL),
(93, 'add_section', NULL, NULL),
(94, 'lessons', NULL, NULL),
(95, 'serialize_sections', NULL, NULL),
(96, 'add_lesson', NULL, NULL),
(97, 'edit_section', NULL, NULL),
(98, 'delete_section', NULL, NULL),
(99, 'course_details', NULL, NULL),
(100, 'course details', NULL, NULL),
(101, 'details', NULL, NULL),
(102, 'instructor', NULL, NULL),
(103, 'sub_category', NULL, NULL),
(104, 'enrolled_user', NULL, NULL),
(105, 'last_modified', NULL, NULL),
(106, 'manage language', NULL, NULL),
(107, 'language_list', NULL, NULL),
(108, 'add_phrase', NULL, NULL),
(109, 'add_language', NULL, NULL),
(110, 'option', NULL, NULL),
(111, 'edit_phrase', NULL, NULL),
(112, 'delete_language', NULL, NULL),
(113, 'phrase', NULL, NULL),
(114, 'value_required', NULL, NULL),
(115, 'frontend settings', NULL, NULL),
(116, 'banner_title', NULL, NULL),
(117, 'banner_sub_title', NULL, NULL),
(118, 'about_us', NULL, NULL),
(119, 'blog', NULL, NULL),
(120, 'update_frontend_settings', NULL, NULL),
(121, 'update_banner', NULL, NULL),
(122, 'banner_image', NULL, NULL),
(123, 'update_banner_image', NULL, NULL),
(124, 'payment settings', NULL, NULL),
(125, 'paypal_settings', NULL, NULL),
(126, 'client_id', NULL, NULL),
(127, 'sandbox', NULL, NULL),
(128, 'production', NULL, NULL),
(129, 'active', NULL, NULL),
(130, 'mode', NULL, NULL),
(131, 'stripe_settings', NULL, NULL),
(132, 'testmode', NULL, NULL),
(133, 'on', NULL, NULL),
(134, 'off', NULL, NULL),
(135, 'test_secret_key', NULL, NULL),
(136, 'test_public_key', NULL, NULL),
(137, 'live_secret_key', NULL, NULL),
(138, 'live_public_key', NULL, NULL),
(139, 'save_changes', NULL, NULL),
(141, 'update_phrase', NULL, NULL),
(142, 'check', NULL, NULL),
(143, 'settings_updated', NULL, NULL),
(144, 'checking', NULL, NULL),
(145, 'phrase_added', NULL, NULL),
(146, 'language_added', NULL, NULL),
(147, 'language_deleted', NULL, NULL),
(148, 'add course', NULL, NULL),
(149, 'add_courses', NULL, NULL),
(150, 'add_course_form', NULL, NULL),
(151, 'basic_info', NULL, NULL),
(152, 'short_description', NULL, NULL),
(153, 'description', NULL, NULL),
(154, 'level', NULL, NULL),
(155, 'beginner', NULL, NULL),
(156, 'advanced', NULL, NULL),
(157, 'intermediate', NULL, NULL),
(158, 'language_made_in', NULL, NULL),
(159, 'is_top_course', NULL, NULL),
(160, 'outcomes', NULL, NULL),
(161, 'category_and_sub_category', NULL, NULL),
(162, 'select_a_category', NULL, NULL),
(163, 'select_a_category_first', NULL, NULL),
(164, 'requirements', NULL, NULL),
(165, 'price_and_discount', NULL, NULL),
(166, 'price', NULL, NULL),
(167, 'has_discount', NULL, NULL),
(168, 'discounted_price', NULL, NULL),
(169, 'course_thumbnail', NULL, NULL),
(170, 'note', NULL, NULL),
(171, 'thumbnail_size_should_be_600_x_600', NULL, NULL),
(172, 'course_overview_url', NULL, NULL),
(173, '0%', NULL, NULL),
(174, 'manage profile', NULL, NULL),
(175, 'edit_course', NULL, NULL),
(176, 'edit course', NULL, NULL),
(177, 'edit_courses', NULL, NULL),
(178, 'edit_course_form', NULL, NULL),
(179, 'update_course', NULL, NULL),
(180, 'course_updated', NULL, NULL),
(181, 'number_of_sections', NULL, NULL),
(182, 'number_of_enrolled_users', NULL, NULL),
(183, 'add section', NULL, NULL),
(184, 'section', NULL, NULL),
(185, 'add_section_form', NULL, NULL),
(186, 'update', NULL, NULL),
(187, 'serialize_section', NULL, NULL),
(188, 'serialize section', NULL, NULL),
(189, 'submit', NULL, NULL),
(190, 'sections_have_been_serialized', NULL, NULL),
(191, 'select_course', NULL, NULL),
(192, 'search', NULL, NULL),
(193, 'thumbnail', NULL, NULL),
(194, 'duration', NULL, NULL),
(195, 'provider', NULL, NULL),
(196, 'add lesson', NULL, NULL),
(197, 'add_lesson_form', NULL, NULL),
(198, 'video_type', NULL, NULL),
(199, 'select_a_course', NULL, NULL),
(200, 'select_a_course_first', NULL, NULL),
(201, 'video_url', NULL, NULL),
(202, 'invalid_url', NULL, NULL),
(203, 'your_video_source_has_to_be_either_youtube_or_vimeo', NULL, NULL),
(204, 'for', NULL, NULL),
(205, 'of', NULL, NULL),
(206, 'edit_lesson', NULL, NULL),
(207, 'edit lesson', NULL, NULL),
(208, 'edit_lesson_form', NULL, NULL),
(209, 'login', NULL, NULL),
(210, 'password', NULL, NULL),
(211, 'forgot_password', NULL, NULL),
(212, 'back_to_website', NULL, NULL),
(213, 'send_mail', NULL, NULL),
(214, 'back_to_login', NULL, NULL),
(215, 'student_add', NULL, NULL),
(216, 'student add', NULL, NULL),
(217, 'add_students', NULL, NULL),
(218, 'student_add_form', NULL, NULL),
(219, 'login_credentials', NULL, NULL),
(220, 'social_information', NULL, NULL),
(221, 'facebook', NULL, NULL),
(222, 'twitter', NULL, NULL),
(223, 'linkedin', NULL, NULL),
(224, 'user_image', NULL, NULL),
(225, 'add_user', NULL, NULL),
(226, 'user_update_successfully', NULL, NULL),
(227, 'user_added_successfully', NULL, NULL),
(228, 'student_edit', NULL, NULL),
(229, 'student edit', NULL, NULL),
(230, 'edit_students', NULL, NULL),
(231, 'student_edit_form', NULL, NULL),
(232, 'update_user', NULL, NULL),
(233, 'enroll history', NULL, NULL),
(234, 'filter', NULL, NULL),
(235, 'user_name', NULL, NULL),
(236, 'enrolled_course', NULL, NULL),
(237, 'enrollment_date', NULL, NULL),
(238, 'biography2', NULL, NULL),
(239, 'home', NULL, NULL),
(240, 'search_for_courses', NULL, NULL),
(241, 'total', NULL, NULL),
(242, 'go_to_cart', NULL, NULL),
(243, 'your_cart_is_empty', NULL, NULL),
(244, 'log_in', NULL, NULL),
(245, 'sign_up', NULL, NULL),
(246, 'what_do_you_want_to_learn', NULL, NULL),
(247, 'online_courses', NULL, NULL),
(248, 'explore_a_variety_of_fresh_topics', NULL, NULL),
(249, 'expert_instruction', NULL, NULL),
(250, 'find_the_right_course_for_you', NULL, NULL),
(251, 'lifetime_access', NULL, NULL),
(252, 'learn_on_your_schedule', NULL, NULL),
(253, 'top_courses', NULL, NULL),
(254, 'last_updater', NULL, NULL),
(255, 'hours', NULL, NULL),
(256, 'add_to_cart', NULL, NULL),
(257, 'top', NULL, NULL),
(258, 'latest_courses', NULL, NULL),
(259, 'added_to_cart', NULL, NULL),
(260, 'admin', NULL, NULL),
(261, 'log_in_to_your_udemy_account', NULL, NULL),
(262, 'by_signing_up_you_agree_to_our', NULL, NULL),
(263, 'terms_of_use', NULL, NULL),
(264, 'and', NULL, NULL),
(265, 'privacy_policy', NULL, NULL),
(266, 'do_not_have_an_account', NULL, NULL),
(267, 'sign_up_and_start_learning', NULL, NULL),
(268, 'check_here_for_exciting_deals_and_personalized_course_recommendations', NULL, NULL),
(269, 'already_have_an_account', NULL, NULL),
(270, 'checkout', NULL, NULL),
(271, 'paypal', NULL, NULL),
(272, 'stripe', NULL, NULL),
(273, 'step', NULL, NULL),
(274, 'how_would_you_rate_this_course_overall', NULL, NULL),
(275, 'write_a_public_review', NULL, NULL),
(276, 'describe_your_experience_what_you_got_out_of_the_course_and_other_helpful_highlights', NULL, NULL),
(277, 'what_did_the_instructor_do_well_and_what_could_use_some_improvement', NULL, NULL),
(278, 'next', NULL, NULL),
(279, 'previous', NULL, NULL),
(280, 'publish', NULL, NULL),
(281, 'search_results', NULL, NULL),
(282, 'ratings', NULL, NULL),
(283, 'search_results_for', NULL, NULL),
(284, 'category_page', NULL, NULL),
(285, 'all', NULL, NULL),
(286, 'category_list', NULL, NULL),
(287, 'by', NULL, NULL),
(288, 'go_to_wishlist', NULL, NULL),
(289, 'hi', NULL, NULL),
(290, 'my_courses', NULL, NULL),
(291, 'my_wishlist', NULL, NULL),
(292, 'my_messages', NULL, NULL),
(293, 'purchase_history', NULL, NULL),
(294, 'user_profile', NULL, NULL),
(295, 'already_purchased', NULL, NULL),
(296, 'all_courses', NULL, NULL),
(297, 'wishlists', NULL, NULL),
(298, 'search_my_courses', NULL, NULL),
(299, 'students_enrolled', NULL, NULL),
(300, 'created_by', NULL, NULL),
(301, 'last_updated', NULL, NULL),
(302, 'what_will_i_learn', NULL, NULL),
(303, 'view_more', NULL, NULL),
(304, 'other_related_courses', NULL, NULL),
(305, 'updated', NULL, NULL),
(306, 'curriculum_for_this_course', NULL, NULL),
(307, 'about_the_instructor', NULL, NULL),
(308, 'reviews', NULL, NULL),
(309, 'student_feedback', NULL, NULL),
(310, 'average_rating', NULL, NULL),
(311, 'preview_this_course', NULL, NULL),
(312, 'includes', NULL, NULL),
(313, 'on_demand_videos', NULL, NULL),
(314, 'full_lifetime_access', NULL, NULL),
(315, 'access_on_mobile_and_tv', NULL, NULL),
(316, 'course_preview', NULL, NULL),
(317, 'instructor_page', NULL, NULL),
(318, 'buy_now', NULL, NULL),
(319, 'shopping_cart', NULL, NULL),
(320, 'courses_in_cart', NULL, NULL),
(321, 'student_name', NULL, NULL),
(322, 'amount_to_pay', NULL, NULL),
(323, 'payment_successfully_done', NULL, NULL),
(324, 'filter_by', NULL, NULL),
(325, 'instructors', NULL, NULL),
(326, 'reset', NULL, NULL),
(327, 'your', NULL, NULL),
(328, 'rating', NULL, NULL),
(329, 'course_detail', NULL, NULL),
(330, 'start_lesson', NULL, NULL),
(331, 'show_full_biography', NULL, NULL),
(332, 'terms_and_condition', NULL, NULL),
(333, 'about', NULL, NULL),
(334, 'terms_&_condition', NULL, NULL),
(335, 'sub categories', NULL, NULL),
(336, 'add_sub_category', NULL, NULL),
(337, 'sub_category_title', NULL, NULL),
(338, 'add sub category', NULL, NULL),
(339, 'add_sub_category_form', NULL, NULL),
(340, 'sub_category_code', NULL, NULL),
(341, 'data_deleted', NULL, NULL),
(342, 'edit_category', NULL, NULL),
(343, 'edit category', NULL, NULL),
(344, 'edit_category_form', NULL, NULL),
(345, 'font', NULL, NULL),
(346, 'awesome class', NULL, NULL),
(347, 'update_category', NULL, NULL),
(348, 'data_updated_successfully', NULL, NULL),
(349, 'edit_sub_category', NULL, NULL),
(350, 'edit sub category', NULL, NULL),
(351, 'sub_category_edit', NULL, NULL),
(352, 'update_sub_category', NULL, NULL),
(353, 'course_added', NULL, NULL),
(354, 'user_deleted_successfully', NULL, NULL),
(355, 'private_messaging', NULL, NULL),
(356, 'private messaging', NULL, NULL),
(357, 'messages', NULL, NULL),
(358, 'select_message_to_read', NULL, NULL),
(359, 'new_message', NULL, NULL),
(360, 'email_duplication', NULL, NULL),
(361, 'your_registration_has_been_successfully_done', NULL, NULL),
(362, 'profile', NULL, NULL),
(363, 'account', NULL, NULL),
(364, 'add_information_about_yourself_to_share_on_your_profile', NULL, NULL),
(365, 'basics', NULL, NULL),
(366, 'add_your_twitter_link', NULL, NULL),
(367, 'add_your_facebook_link', NULL, NULL),
(368, 'add_your_linkedin_link', NULL, NULL),
(369, 'credentials', NULL, NULL),
(370, 'edit_your_account_settings', NULL, NULL),
(371, 'enter_current_password', NULL, NULL),
(372, 'enter_new_password', NULL, NULL),
(373, 're-type_your_password', NULL, NULL),
(374, 'save', NULL, NULL),
(375, 'update_user_photo', NULL, NULL),
(376, 'update_your_photo', NULL, NULL),
(377, 'upload_image', NULL, NULL),
(378, 'updated_successfully', NULL, NULL),
(379, 'invalid_login_credentials', NULL, NULL),
(380, 'blank_page', NULL, NULL),
(381, 'no_section_found', NULL, NULL),
(382, 'select_a_message_thread_to_read_it_here', NULL, NULL),
(383, 'send', NULL, NULL),
(384, 'type_your_message', NULL, NULL),
(385, 'date', NULL, NULL),
(386, 'total_price', NULL, NULL),
(387, 'payment_type', NULL, NULL),
(388, 'edit section', NULL, NULL),
(389, 'edit_section_form', NULL, NULL),
(390, 'reply_message', NULL, NULL),
(391, 'reply', NULL, NULL),
(392, 'log_in_to_your_account', NULL, NULL),
(393, 'no_result_found', NULL, NULL),
(394, 'enrollment', NULL, NULL),
(395, 'enroll_a_student', NULL, NULL),
(396, 'report', NULL, NULL),
(397, 'admin_revenue', NULL, NULL),
(398, 'instructor_revenue', NULL, NULL),
(399, 'instructor_settings', NULL, NULL),
(400, 'view_frontend', NULL, NULL),
(401, 'number_of_active_courses', NULL, NULL),
(402, 'number_of_pending_courses', NULL, NULL),
(403, 'all_instructor', NULL, NULL),
(404, 'active_courses', NULL, NULL),
(405, 'pending_courses', NULL, NULL),
(406, 'no_data_found', NULL, NULL),
(407, 'view_course_on_frontend', NULL, NULL),
(408, 'mark_as_pending', NULL, NULL),
(409, 'add category', NULL, NULL),
(410, 'add_categories', NULL, NULL),
(411, 'category_add_form', NULL, NULL),
(412, 'icon_picker', NULL, NULL),
(413, 'enroll a student', NULL, NULL),
(414, 'enrollment_form', NULL, NULL),
(415, 'admin revenue', NULL, NULL),
(416, 'total_amount', NULL, NULL),
(417, 'instructor revenue', NULL, NULL),
(418, 'status', NULL, NULL),
(419, 'instructor settings', NULL, NULL),
(420, 'allow_public_instructor', NULL, NULL),
(421, 'instructor_revenue_percentage', NULL, NULL),
(422, 'admin_revenue_percentage', NULL, NULL),
(423, 'update_instructor_settings', NULL, NULL),
(424, 'payment_info', NULL, NULL),
(425, 'required_for_instructors', NULL, NULL),
(426, 'paypal_client_id', NULL, NULL),
(427, 'stripe_public_key', NULL, NULL),
(428, 'stripe_secret_key', NULL, NULL),
(429, 'mark_as_active', NULL, NULL),
(430, 'mail_subject', NULL, NULL),
(431, 'mail_body', NULL, NULL),
(432, 'paid', NULL, NULL),
(433, 'pending', NULL, NULL),
(434, 'this_instructor_has_not_provided_valid_paypal_client_id', NULL, NULL),
(435, 'pay_with_paypal', NULL, NULL),
(436, 'this_instructor_has_not_provided_valid_public_key_or_secret_key', NULL, NULL),
(437, 'pay_with_stripe', NULL, NULL),
(438, 'create_course', NULL, NULL),
(439, 'payment_report', NULL, NULL),
(440, 'instructor_dashboard', NULL, NULL),
(441, 'draft', NULL, NULL),
(442, 'view_lessons', NULL, NULL),
(443, 'course_title', NULL, NULL),
(444, 'update_your_payment_settings', NULL, NULL),
(445, 'edit_course_detail', NULL, NULL),
(446, 'edit_basic_informations', NULL, NULL),
(447, 'publish_this_course', NULL, NULL),
(448, 'save_to_draft', NULL, NULL),
(449, 'update_section', NULL, NULL),
(450, 'analyzing_given_url', NULL, NULL),
(451, 'select_a_section', NULL, NULL),
(452, 'update_lesson', NULL, NULL),
(453, 'website_name', NULL, NULL),
(454, 'website_title', NULL, NULL),
(455, 'website_keywords', NULL, NULL),
(456, 'website_description', NULL, NULL),
(457, 'author', NULL, NULL),
(458, 'footer_text', NULL, NULL),
(459, 'footer_link', NULL, NULL),
(460, 'update_backend_logo', NULL, NULL),
(461, 'update_favicon', NULL, NULL),
(462, 'favicon', NULL, NULL),
(463, 'active courses', NULL, NULL),
(464, 'product_updated_successfully', NULL, NULL),
(465, 'course_overview_provider', NULL, NULL),
(466, 'youtube', NULL, NULL),
(467, 'vimeo', NULL, NULL),
(468, 'html5', NULL, NULL),
(469, 'meta_keywords', NULL, NULL),
(470, 'meta_description', NULL, NULL),
(471, 'lesson_type', NULL, NULL),
(472, 'video', NULL, NULL),
(473, 'select_type_of_lesson', NULL, NULL),
(474, 'text_file', NULL, NULL),
(475, 'pdf_file', NULL, NULL),
(476, 'document_file', NULL, NULL),
(477, 'image_file', NULL, NULL),
(478, 'lesson_provider', NULL, NULL),
(479, 'select_lesson_provider', NULL, NULL),
(480, 'analyzing_the_url', NULL, NULL),
(481, 'attachment', NULL, NULL),
(482, 'summary', NULL, NULL),
(483, 'download', NULL, NULL),
(484, 'system_settings_updated', NULL, NULL),
(485, 'course_updated_successfully', NULL, NULL),
(486, 'please_wait_untill_admin_approves_it', NULL, NULL),
(487, 'pending courses', NULL, NULL),
(488, 'course_status_updated', NULL, NULL),
(489, 'smtp_settings', NULL, NULL),
(490, 'free_course', NULL, NULL),
(491, 'free', NULL, NULL),
(492, 'get_enrolled', NULL, NULL),
(493, 'course_added_successfully', NULL, NULL),
(494, 'update_frontend_logo', NULL, NULL),
(495, 'system_currency_settings', NULL, NULL),
(496, 'select_system_currency', NULL, NULL),
(497, 'currency_position', NULL, NULL),
(498, 'left', NULL, NULL),
(499, 'right', NULL, NULL),
(500, 'left_with_a_space', NULL, NULL),
(501, 'right_with_a_space', NULL, NULL),
(502, 'paypal_currency', NULL, NULL),
(503, 'select_paypal_currency', NULL, NULL),
(504, 'stripe_currency', NULL, NULL),
(505, 'select_stripe_currency', NULL, NULL),
(506, 'heads_up', NULL, NULL),
(507, 'please_make_sure_that', NULL, NULL),
(508, 'system_currency', NULL, NULL),
(509, 'are_same', NULL, NULL),
(510, 'smtp settings', NULL, NULL),
(511, 'protocol', NULL, NULL),
(512, 'smtp_host', NULL, NULL),
(513, 'smtp_port', NULL, NULL),
(514, 'smtp_user', NULL, NULL),
(515, 'smtp_pass', NULL, NULL),
(516, 'update_smtp_settings', NULL, NULL),
(517, 'phrase_updated', NULL, NULL),
(518, 'registered_user', NULL, NULL),
(519, 'provide_your_valid_login_credentials', NULL, NULL),
(520, 'registration_form', NULL, NULL),
(521, 'provide_your_email_address_to_get_password', NULL, NULL),
(522, 'reset_password', NULL, NULL),
(523, 'want_to_go_back', NULL, NULL),
(524, 'message_sent!', NULL, NULL),
(525, 'selected_icon', NULL, NULL),
(526, 'pick_another_icon_picker', NULL, NULL),
(527, 'show_more', NULL, NULL),
(528, 'show_less', NULL, NULL),
(529, 'all_category', NULL, NULL),
(530, 'price_range', NULL, NULL),
(531, 'price_range_withing', NULL, NULL),
(532, 'all_categories', NULL, NULL),
(533, 'all_sub_category', NULL, NULL),
(534, 'number_of_results', NULL, NULL),
(535, 'showing_on_this_page', NULL, NULL),
(536, 'welcome', NULL, NULL),
(537, 'my_account', NULL, NULL),
(538, 'logout', NULL, NULL),
(539, 'visit_website', NULL, NULL),
(540, 'navigation', NULL, NULL),
(541, 'add_new_category', NULL, NULL),
(542, 'enrolment', NULL, NULL),
(543, 'enrol_history', NULL, NULL),
(544, 'enrol_a_student', NULL, NULL),
(545, 'language_settings', NULL, NULL),
(546, 'congratulations', NULL, NULL),
(547, 'oh_snap', NULL, NULL),
(548, 'close', NULL, NULL),
(549, 'parent', NULL, NULL),
(550, 'none', NULL, NULL),
(551, 'category_thumbnail', NULL, NULL),
(552, 'the_image_size_should_be', NULL, NULL),
(553, 'choose_thumbnail', NULL, NULL),
(554, 'data_added_successfully', NULL, NULL),
(555, '', NULL, NULL),
(556, 'update_category_form', NULL, NULL),
(557, 'student_list', NULL, NULL),
(558, 'choose_user_image', NULL, NULL),
(559, 'finish', NULL, NULL),
(560, 'thank_you', NULL, NULL),
(561, 'you_are_almost_there', NULL, NULL),
(562, 'you_are_just_one_click_away', NULL, NULL),
(563, 'country', NULL, NULL),
(564, 'website_settings', NULL, NULL),
(565, 'write_down_facebook_url', NULL, NULL),
(566, 'write_down_twitter_url', NULL, NULL),
(567, 'write_down_linkedin_url', NULL, NULL),
(568, 'google_link', NULL, NULL),
(569, 'write_down_google_url', NULL, NULL),
(570, 'instagram_link', NULL, NULL),
(571, 'write_down_instagram_url', NULL, NULL),
(572, 'pinterest_link', NULL, NULL),
(573, 'write_down_pinterest_url', NULL, NULL),
(574, 'update_settings', NULL, NULL),
(575, 'upload_banner_image', NULL, NULL),
(576, 'update_light_logo', NULL, NULL),
(577, 'upload_light_logo', NULL, NULL),
(578, 'update_dark_logo', NULL, NULL),
(579, 'upload_dark_logo', NULL, NULL),
(580, 'update_small_logo', NULL, NULL),
(581, 'upload_small_logo', NULL, NULL),
(582, 'upload_favicon', NULL, NULL),
(583, 'logo_updated', NULL, NULL),
(584, 'favicon_updated', NULL, NULL),
(585, 'banner_image_update', NULL, NULL),
(586, 'frontend_settings_updated', NULL, NULL),
(587, 'setup_payment_informations', NULL, NULL),
(588, 'update_system_currency', NULL, NULL),
(589, 'setup_paypal_settings', NULL, NULL),
(590, 'update_paypal_keys', NULL, NULL),
(591, 'setup_stripe_settings', NULL, NULL),
(592, 'test_mode', NULL, NULL),
(593, 'update_stripe_keys', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `video_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_added` int(11) DEFAULT NULL,
  `last_modified` int(11) DEFAULT NULL,
  `lesson_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attachment_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `summary` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `profile` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `profile`, `fname`, `lname`, `username`, `password`) VALUES
(5, 'klim.png', 'RogÃ©rio', 'Alfredo', 'admin@admin.com', 'd9b1d7db4cd6e70935368a1efb10e377'),
(22, 'klim.png', 'Admin', 'System', 'teste@teste.com', 'd9b1d7db4cd6e70935368a1efb10e377'),
(23, 'Logotipo Clinica Saude.png', 'r', 'e', 'k@gmail.com', 'd9b1d7db4cd6e70935368a1efb10e377');

-- --------------------------------------------------------

--
-- Table structure for table `mainservices`
--

CREATE TABLE `mainservices` (
  `id` int(11) NOT NULL,
  `mainservicename` varchar(100) NOT NULL,
  `preco` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mainservices`
--

INSERT INTO `mainservices` (`id`, `mainservicename`, `preco`) VALUES
(5, 'Sala de Parto', 90700),
(7, 'ServiÃ§os interno', 45000),
(8, 'FarmÃ¡cia', 44),
(9, 'AnÃ¡lises ClÃ­nicas', 33),
(10, 'Teste de Covid 19 /RTP - CR', 70000),
(11, 'Ecografia', 5000),
(12, 'Emodialise', 30000),
(14, 'Teste de Covid 19 /IGM - igm ', 25000),
(15, 'Internamento', 22),
(17, 'AmbulÃ¢ncia', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `marcarconsulta`
--

CREATE TABLE `marcarconsulta` (
  `id` int(11) NOT NULL,
  `nomepaciente` varchar(100) NOT NULL,
  `nomeconsulta` varchar(100) NOT NULL,
  `emaildocliente` varchar(50) NOT NULL,
  `numerodetelefone` varchar(50) NOT NULL,
  `morada` varchar(255) NOT NULL,
  `TipodePaciente` varchar(255) NOT NULL,
  `datadaconsulta` date NOT NULL,
  `imagem` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marcarconsulta`
--

INSERT INTO `marcarconsulta` (`id`, `nomepaciente`, `nomeconsulta`, `emaildocliente`, `numerodetelefone`, `morada`, `TipodePaciente`, `datadaconsulta`, `imagem`) VALUES
(8, 'rogerio', 'dermatologia', 'rogeriolafdfdmeidfdra2017@gmail.com', '944259591', 'fdfd', 'dfdf', '2021-05-10', '<button type=\"button\" class=\"btn btn-primary\"><i class=\"far fa-eye\"></i></button>  <button type=\"button\" class=\"btn btn-success\"><i class=\"fas fa-edit\"></i></button>   <button type=\"button\" class=\"btn btn-danger\"><i class=\"far fa-trash-alt\"></i></button>'),
(9, 'mnmmv', 'bcbccb', 'claudioconxsftreiras@gmail.com', '944259591', 'viana', 'sfsf', '2021-05-10', '<button type=\"button\" class=\"btn btn-primary\"><i class=\"far fa-eye\"></i></button>  <button type=\"button\" class=\"btn btn-success\"><i class=\"fas fa-edit\"></i></button>   <button type=\"button\" class=\"btn btn-danger\"><i class=\"far fa-trash-alt\"></i></button>'),
(10, 'rogerio', 'rogerio', 'rogeriolamvxxvxvxveira2017@gmail.com', '944259591', 'xvxv', 'xxv', '2021-05-10', '<button type=\"button\" class=\"btn btn-primary\"><i class=\"far fa-eye\"></i></button>  <button type=\"button\" class=\"btn btn-success\"><i class=\"fas fa-edit\"></i></button>   <button type=\"button\" class=\"btn btn-danger\"><i class=\"far fa-trash-alt\"></i></button>'),
(11, 'claudio contrieas', 'claudio contrieas', 'claudiocontreirasdgdgdggd@gmail.com', '944259591', 'viana', 'dgdggd', '2021-05-10', '<button type=\"button\" class=\"btn btn-primary\"><i class=\"far fa-eye\"></i></button>  <button type=\"button\" class=\"btn btn-success\"><i class=\"fas fa-edit\"></i></button>   <button type=\"button\" class=\"btn btn-danger\"><i class=\"far fa-trash-alt\"></i></button>'),
(12, 'rogerio', 'rogerio', 'rogeriolameira2017@gmail.com', '944259591', 'ere', 'reer', '2021-05-10', '<button type=\"button\" class=\"btn btn-primary\"><i class=\"far fa-eye\"></i></button>  <button type=\"button\" class=\"btn btn-success\"><i class=\"fas fa-edit\"></i></button>   <button type=\"button\" class=\"btn btn-danger\"><i class=\"far fa-trash-alt\"></i></button>'),
(13, 'ljkkdsds ldjkss', 'ljkkdsds ldjkss', 'rogeriolameira@gmail.com', '+55335757575', 'rw', 'xxx', '2021-05-17', '<button type=\"button\" class=\"btn btn-primary\"><i class=\"far fa-eye\"></i></button>  <button type=\"button\" class=\"btn btn-success\"><i class=\"fas fa-edit\"></i></button>   <button type=\"button\" class=\"btn btn-danger\"><i class=\"far fa-trash-alt\"></i></button>'),
(14, 'xxxxx', 'xxxxxxxxxxx', 'xxxxxxxxx@gmail.com', 'xxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxxxx', '2021-05-17', '<button type=\"button\" class=\"btn btn-primary\"><i class=\"far fa-eye\"></i></button>  <button type=\"button\" class=\"btn btn-success\"><i class=\"fas fa-edit\"></i></button>   <button type=\"button\" class=\"btn btn-danger\"><i class=\"far fa-trash-alt\"></i></button>'),
(15, 'rogeriosss', 'rogeriosss', 'rogeriolasssmzzzzeira2017@gmail.com', '944259591', 'wss', 'zzz', '2021-05-17', '<button type=\"button\" class=\"btn btn-primary\"><i class=\"far fa-eye\"></i></button>  <button type=\"button\" class=\"btn btn-success\"><i class=\"fas fa-edit\"></i></button>   <button type=\"button\" class=\"btn btn-danger\"><i class=\"far fa-trash-alt\"></i></button>'),
(16, 'rogerio', 'rogerio', 'rogerizolameira2017@gmail.com', '944259591', 'zzzzz', 'zzzz', '2021-05-17', '<button type=\"button\" class=\"btn btn-primary\"><i class=\"far fa-eye\"></i></button>  <button type=\"button\" class=\"btn btn-success\"><i class=\"fas fa-edit\"></i></button>   <button type=\"button\" class=\"btn btn-danger\"><i class=\"far fa-trash-alt\"></i></button>'),
(17, 'Ã§Ã§Ã§Ã§Ã§Ã§Ã§Ã§Ã§Ã§Ã§Ã§Ã§Ã§Ã§Ã§', 'Ã§Ã§Ã§Ã§Ã§Ã§Ã§Ã§Ã§Ã§Ã§', 'yyy@gmail.com', '+55335757575', 'rw', '8888888', '2021-05-23', '<button type=\"button\" class=\"btn btn-primary\"><i class=\"far fa-eye\"></i></button>  <button type=\"button\" class=\"btn btn-success\"><i class=\"fas fa-edit\"></i></button>   <button type=\"button\" class=\"btn btn-danger\"><i class=\"far fa-trash-alt\"></i></button>'),
(18, 'roberto andrecccccccccc', 'roberto andre', 'roccccccberto@gmail.com', '944259591', 'viana', 'vip', '2021-05-24', '<button type=\"button\" class=\"btn btn-primary\"><i class=\"far fa-eye\"></i></button>  <button type=\"button\" class=\"btn btn-success\"><i class=\"fas fa-edit\"></i></button>   <button type=\"button\" class=\"btn btn-danger\"><i class=\"far fa-trash-alt\"></i></button>'),
(19, 'RogÃ©rio ', 'Lameira', 'rogeriolameira@outlook.com', '8776', 'viana encutal', 'privado', '2021-05-24', '<button type=\"button\" class=\"btn btn-primary\"><i class=\"far fa-eye\"></i></button>  <button type=\"button\" class=\"btn btn-success\"><i class=\"fas fa-edit\"></i></button>   <button type=\"button\" class=\"btn btn-danger\"><i class=\"far fa-trash-alt\"></i></button>'),
(20, 'rogerio', 'rogerio', 'rogeriolameirsssssssssssssssa2017@gmail.com', '944259591', 'sssssssssssss', 'ssss', '2021-05-25', '<button type=\"button\" class=\"btn btn-primary\"><i class=\"far fa-eye\"></i></button>  <button type=\"button\" class=\"btn btn-success\"><i class=\"fas fa-edit\"></i></button>   <button type=\"button\" class=\"btn btn-danger\"><i class=\"far fa-trash-alt\"></i></button>'),
(21, 'roberto andre', 'roberto andre', 'robertcvcvco@gmail.com', '944259591', 'viana', 'cvcv', '2021-05-27', '<button type=\"button\" class=\"btn btn-primary\"><i class=\"far fa-eye\"></i></button>  <button type=\"button\" class=\"btn btn-success\"><i class=\"fas fa-edit\"></i></button>   <button type=\"button\" class=\"btn btn-danger\"><i class=\"far fa-trash-alt\"></i></button>'),
(22, 'Nelson Morais', 'Clinica geral', 'nelson@agmail.com', '90890789', 'mutanba', 'particular', '2021-06-25', '<button type=\"button\" class=\"btn btn-primary\"><i class=\"far fa-eye\"></i></button>  <button type=\"button\" class=\"btn btn-success\"><i class=\"fas fa-edit\"></i></button>   <button type=\"button\" class=\"btn btn-danger\"><i class=\"far fa-trash-alt\"></i></button>'),
(23, 'rogerio', 'chekap', 'rogerioldfffameira2017@gmail.com', '944259591', 'ffff', 'ffff', '2021-06-29', '<button type=\"button\" class=\"btn btn-primary\"><i class=\"far fa-eye\"></i></button>  <button type=\"button\" class=\"btn btn-success\"><i class=\"fas fa-edit\"></i></button>   <button type=\"button\" class=\"btn btn-danger\"><i class=\"far fa-trash-alt\"></i></button>'),
(24, 'rogeriosssnnvnv', 'rogeriosssvcncnv', 'rogeriolasssmcvnnnnnnnnneira2017@gmail.com', '944259591', 'wss', 'Empresa...', '2021-06-17', '<button type=\"button\" class=\"btn btn-primary\"><i class=\"far fa-eye\"></i></button>  <button type=\"button\" class=\"btn btn-success\"><i class=\"fas fa-edit\"></i></button>   <button type=\"button\" class=\"btn btn-danger\"><i class=\"far fa-trash-alt\"></i></button>'),
(25, 'rogeriow', 'rogeriow', 'fgfgfdf@gmail.com', '944259591', 'w', 'Empresa...', '2021-06-26', '<button type=\"button\" class=\"btn btn-primary\"><i class=\"far fa-eye\"></i></button>  <button type=\"button\" class=\"btn btn-success\"><i class=\"fas fa-edit\"></i></button>   <button type=\"button\" class=\"btn btn-danger\"><i class=\"far fa-trash-alt\"></i></button>'),
(26, 'xxxxx ', 'Obstetria', 'x@gmail.com', '33', '', 'Empresa...', '2021-06-18', NULL),
(27, 'xxxxx ', 'Clinica Geral...', 'x@gmail.com', '33', '', 'Empresa...', '2021-06-26', NULL),
(28, 'xxxxx zzzz', 'Clinica Geral...', 'x@gmail.com', '33', '', 'Empresa...', '2021-06-23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medicinecategory`
--

CREATE TABLE `medicinecategory` (
  `id` int(20) NOT NULL,
  `category` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicinecategory`
--

INSERT INTO `medicinecategory` (`id`, `category`, `description`) VALUES
(5, 'Comprimido', 'abc'),
(6, 'Capsula', 'gnghn'),
(9, 'Ingetável', 'dfsxf'),
(14, 'Objectos', 'hhrt'),
(15, 'Oral', 'afsdf'),
(16, 'Cosmético', 'ESGAZ'),
(17, 'Supositor', 'sfsdef'),
(18, 'Utencílios', 'tghhfgdhfdrft'),
(21, 'Xaropes', 'Picas');

-- --------------------------------------------------------

--
-- Table structure for table `medicos`
--

CREATE TABLE `medicos` (
  `id_medico` int(10) UNSIGNED NOT NULL,
  `nomemedico` varchar(50) DEFAULT NULL,
  `especialidade` varchar(200) DEFAULT NULL,
  `emaildomedico` varchar(200) DEFAULT NULL,
  `numerodetelefone` varchar(200) DEFAULT NULL,
  `morada` text CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `timework` text CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `imageupload` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicos`
--

INSERT INTO `medicos` (`id_medico`, `nomemedico`, `especialidade`, `emaildomedico`, `numerodetelefone`, `morada`, `timework`, `imageupload`) VALUES
(15, 'BrÃ¡ulio Ferrares', 'ClÃ­nica Geral', 'rogeriolameira@gmail.com', '+55335757575', 'Atividade abrangente em todas as Ã¡reas da especialidade, dedicando especial atenÃ§Ã£o Ã s tÃ©cnicas cirÃºrgicas endoscÃ³picas (histeroscopia e laparoscopia ginecolÃ³gica).\r\nIdio', '<p>Dominggo 08:00 &agrave;s :20:00&nbsp;- Qunita-Feira 22:00&nbsp; &agrave;s 08:00</p>\r\n', '42476372_1092602777583052_4543286267646836736_n.jpg'),
(16, 'Rosa Andre', 'Cardiologista', 'ropsonmanul2015@gmail.com', '998308059', '\0Cirurgia maxilo-facial; DisfunÃ§Ã£o Temporomandibular', '<p>Dominggo 08:00 &agrave;s :20:00&nbsp;- Qunita-Feira 22:00&nbsp; &agrave;s 08:00</p>\r\n', 'IMG_8836.JPG'),
(17, 'Nelson Morais', 'Fisioterapia', 'roberto@gmail.com', '944259591', '\0SaÃºde do adulto, Ã¡reas da prevenÃ§Ã£o e prescriÃ§Ã£o mÃ©dica, gestÃ£o de conflito Ã©tico, demÃªncia, cronicidade e fim de vida. SaÃºde mental, Diabetes, HTA, e gestÃ£o de outros fatores de risco. Oncologia MÃ©dica na atenÃ§Ã£o primÃ¡ria.', '<p>Dominggo 08:00 &agrave;s :20:00&nbsp;- Qunita-Feira 22:00&nbsp; &agrave;s 08:00</p>\r\n', '42476372_1092602777583052_4543286267646836736_n.jpg'),
(18, 'Rogerio Alfredo', 'Cardiologista', 'rogeriolameira2017@outlook.com', '944259591', 'Patologia  crÃ¢nio-encefÃ¡lica traumÃ¡tica; Tumores cranioencefÃ¡licos; Cirurgia degenerativa da coluna vertebral (hernia discal, estenose canalar); Nervos PerifÃ©ricos (canal cÃ¡rpico, canal cubital)', '<p>Dominggo 08:00 &agrave;s :20:00&nbsp;- Qunita-Feira 22:00&nbsp; &agrave;s 08:00</p>\r\n', '42476372_1092602777583052_4543286267646836736_n.jpg'),
(19, 'Fernando  Gaspar', 'CirurgiÃ£o', 'rogeriolameira2017@outlook.com', '944259591', '<p>Cirurgista pl&aacute;stico nas mais diversas &aacute;reas anat&oacute;micas</p>\r\n', '<p>Dominggo 08:00 &agrave;s :20:00&nbsp;- Qunita-Feira 22:00&nbsp; &agrave;s 08:00</p>\r\n', '42476372_1092602777583052_4543286267646836736_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `message_thread_code` longtext DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `sender` longtext DEFAULT NULL,
  `timestamp` longtext DEFAULT NULL,
  `read_status` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `message_thread_code`, `message`, `sender`, `timestamp`, `read_status`) VALUES
(1, '2841dbf25d52d3a', 'cccc', '2', '1639932917', 1),
(2, '3fcc09ea7dca6de', 'eee', '12', '1640000545', 1),
(3, '6a1df586def0e9b', 'ooooo', '12', '1640000643', NULL),
(4, '3e121f84720eeda', 'Olá Dotor Rogério', '13', '1640029554', 1),
(5, '2841dbf25d52d3a', 'ola', '1', '1640029698', NULL),
(6, '3e121f84720eeda', 'Olá Julia paciencia como está?', '1', '1640029762', NULL),
(7, '3e121f84720eeda', 'Estou bem na graça de Deus', '13', '1640029802', 1),
(8, '3e121f84720eeda', 'Como posso Ajudar?', '1', '1640029843', NULL),
(9, '3e121f84720eeda', 'Tenho muitas Dores nos pes', '13', '1640029890', 1),
(10, '3fcc09ea7dca6de', 'hhhhhh', '1', '1640030034', NULL),
(11, '3e121f84720eeda', 'esta bem ', '13', '1640030704', 1),
(12, '3e121f84720eeda', 'Bom dia', '13', '1641667615', 1),
(13, '3e121f84720eeda', 'bom dia como está', '1', '1641667692', NULL),
(14, '3bd423759d74b34', 'viva', '3', '1641669558', 1),
(15, '3bd423759d74b34', 'viva', '1', '1641669577', NULL),
(16, '3bd423759d74b34', 'como está', '3', '1641669604', 1),
(17, '1ce22fc9f6d8e64', 'good', '3', '1641669625', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `message_thread`
--

CREATE TABLE `message_thread` (
  `message_thread_id` int(11) NOT NULL,
  `message_thread_code` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `sender` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `receiver` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `last_message_timestamp` longtext COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `message_thread`
--

INSERT INTO `message_thread` (`message_thread_id`, `message_thread_code`, `sender`, `receiver`, `last_message_timestamp`) VALUES
(1, '2841dbf25d52d3a', '2', '1', NULL),
(2, '3fcc09ea7dca6de', '12', '1', NULL),
(3, '6a1df586def0e9b', '12', '2', NULL),
(4, '3e121f84720eeda', '13', '1', NULL),
(5, '3bd423759d74b34', '3', '1', NULL),
(6, '1ce22fc9f6d8e64', '3', '12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patientinfo`
--

CREATE TABLE `patientinfo` (
  `id` int(11) NOT NULL,
  `patient_id` int(20) NOT NULL,
  `profilepic` varchar(20) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `birthdate` date NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `patientinfo`
--

INSERT INTO `patientinfo` (`id`, `patient_id`, `profilepic`, `firstname`, `middlename`, `lastname`, `gender`, `bloodgroup`, `birthdate`, `phone`, `address`, `email`, `password`, `status`) VALUES
(1, 1, 'Tulips.jpg', 'snehal', '', '', 'Female', 'B+', '2018-02-19', '8484822137', 'K.Sukene', 'snehal@gmail.com', '', '0'),
(2, 2, 'Tulips.jpg', 'monika', 'raj', 'shinde', 'Female', 'AB+ ', '2018-02-12', '9552030527', 'Ozar', 'mona@yahoomail.com', 'mona', '0');

-- --------------------------------------------------------

--
-- Table structure for table `patientregister`
--

CREATE TABLE `patientregister` (
  `id` int(20) NOT NULL,
  `yearsOld` int(3) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(2000) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `bloodgroup` varchar(20) NOT NULL,
  `imageupload` varchar(80) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `cartaodesaude` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `patientregister`
--

INSERT INTO `patientregister` (`id`, `yearsOld`, `name`, `email`, `password`, `address`, `phone`, `gender`, `birthdate`, `bloodgroup`, `imageupload`, `status`, `cartaodesaude`) VALUES
(80, 18, '  Bismark dede', 'bismaque@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '111111', '66', '', '2021-09-08', 'A+', '42476372_1092602777583052_4543286267646836736_n.jpg', '1', '436755656'),
(130, 40, '     Rosa Andre', 'rosaandre@gmail.com', 'c56d0e9a7ccec67b4ea131655038d604', 'viana', '944259591', 'Female', '2021-10-10', 'A+', 'icon.jpg', '1', '436755656'),
(155, 20, 'teste', 'teste@teste.com', 'd9b1d7db4cd6e70935368a1efb10e377', 'viana', '944259591', 'Masculino', '2022-01-08', 'no de', '.png', '1', '123321'),
(161, 0, '', '', '74be16979710d4c4e7c6647856088456', '', '', '', '2022-08-21', 'nÃ£o definido', '.png', '1', ''),
(162, 79, 'PACIDIO', 'pacidio@gmail.com', 'f07c014f8e03dbc2f3a805a446558bd4', 'ZANGO', '9879', 'Masculino', '2022-08-21', 'nÃ£o definido', '.png', '1', '586787'),
(163, 30, 'rogerio Alfredo', 'rogeriolameira2017@gmail.com', 'd9b1d7db4cd6e70935368a1efb10e377', 'teste', '944259591', 'Masculino', '2022-09-03', 'nÃ£o definido', '.png', '1', '42334'),
(164, 25, 'Abel Francisco ', 'abelfr@gmail.com', '21bf633b01e67f25df9d478f91a128cd', 'Bairro Fapa prÃ³ximo a I.E.A.', '946345000', 'Masculino', '2022-09-09', 'nÃ£o definido', '.png', '1', ''),
(165, 49, 'Nelson Morais', 'jesusmorais1@gmail.com', 'ec6a6536ca304edf844d1d248a4f08dc', 'Luanda', '994337216', 'Masculino', '2022-09-10', 'nÃ£o definido', '.png', '1', ''),
(166, 30, 'rogerio Alfredo', 'rogeriolameira@gmail.com', 'd9b1d7db4cd6e70935368a1efb10e377', 'teste', '944259591', 'Masculino', '2023-04-04', 'não definido', '.png', '1', '42334'),
(167, 30, 'rogerio Alfredo', 'admin@admin.com', 'd9b1d7db4cd6e70935368a1efb10e377', 'teste', '97078', 'Masculino', '2023-04-07', 'não definido', '.png', '1', '233'),
(168, 30, 'rogerio Alfredo', 'admin@admrrin.com', 'd9b1d7db4cd6e70935368a1efb10e377', 'teste', '944259591', 'Masculino', '2023-04-07', 'não definido', '.png', '1', '42334'),
(169, 77, 'rogerio Alfredo', 'rogeriolameiri2017@gmail.com', 'd9b1d7db4cd6e70935368a1efb10e377', 'teste', '944259591', 'Masculino', '2023-04-15', 'não definido', '.png', '1', '42334');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `payment_type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `date_added` int(11) DEFAULT NULL,
  `last_modified` int(11) DEFAULT NULL,
  `admin_revenue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instructor_revenue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instructor_payment_status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profileid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `changepassword` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profileid`, `name`, `changepassword`, `email`) VALUES
(1, 'snehal', 'snehal', 'snehal@gmail.com'),
(2, 'Nisha', 'nisha', 'nisha@gmail.com'),
(3, 'Ashwini', 'ashwini', 'ashu@gmail.com'),
(4, 'kajal', 'kajal', 'kajal@gmail.com'),
(5, '', '', ''),
(6, 'Neha', '123', 'neha@gmail.com'),
(7, 'Dhanu', 'dhanu', 'dhanu@gmail.com'),
(8, 'Nikita ', 'nikita', 'nikita@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) UNSIGNED NOT NULL,
  `quiz_id` int(11) DEFAULT NULL,
  `title` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number_of_options` int(11) DEFAULT NULL,
  `options` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `correct_answers` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) UNSIGNED NOT NULL,
  `rating` double DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ratable_id` int(11) DEFAULT NULL,
  `ratable_type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_added` int(11) DEFAULT NULL,
  `last_modified` int(11) DEFAULT NULL,
  `review` longtext COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_added` int(11) DEFAULT NULL,
  `last_modified` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `date_added`, `last_modified`) VALUES
(1, 'Admin', 1234567890, 1234567890),
(2, 'User', 1234567890, 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` longtext COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`) VALUES
(1, 'language', 'english'),
(2, 'system_name', 'Learning Management System Online'),
(3, 'system_title', 'Sistema de Mensagem'),
(4, 'system_email', 'rogeriolameira2017@gmail.com'),
(5, 'address', 'Learning Management System Online'),
(6, 'phone', '944259591'),
(7, 'purchase_code', 'your-purchase-code'),
(8, 'paypal', '[{\"active\":\"1\",\"mode\":\"sandbox\",\"sandbox_client_id\":\"AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R\",\"production_client_id\":\"1234\"}]'),
(9, 'stripe_keys', '[{\"active\":\"1\",\"testmode\":\"on\",\"public_key\":\"pk_test_c6VvBEbwHFdulFZ62q1IQrar\",\"secret_key\":\"sk_test_9IMkiM6Ykxr1LCe2dJ3PgaxS\",\"public_live_key\":\"pk_live_xxxxxxxxxxxxxxxxxxxxxxxx\",\"secret_live_key\":\"sk_live_xxxxxxxxxxxxxxxxxxxxxxxx\"}]'),
(10, 'youtube_api_key', 'AIzaSyBBJrcS7AhGd1Cgd6GKH3G5aUUj9L9NrFQ'),
(11, 'vimeo_api_key', '39258384b69994dba483c10286825b5c'),
(12, 'slogan', 'A course based video CMS'),
(13, 'text_align', NULL),
(14, 'allow_instructor', '1'),
(15, 'instructor_revenue', '64'),
(16, 'system_currency', 'USD'),
(17, 'paypal_currency', 'USD'),
(18, 'stripe_currency', 'USD'),
(19, 'author', 'Rogério Lameira Alfredo'),
(20, 'currency_position', 'left'),
(21, 'website_description', 'Gestão Hospitalar'),
(22, 'website_keywords', 'LMS,Learning Management System,Creativeitem,demo,hello,How are you'),
(23, 'footer_text', NULL),
(24, 'footer_link', 'www.rogeriolameira.ga'),
(25, 'protocol', 'smtp'),
(26, 'smtp_host', 'ssl://smtp.googlemail.com'),
(27, 'smtp_port', '465'),
(28, 'smtp_user', ''),
(29, 'smtp_pass', ''),
(30, 'version', '2.0.1'),
(31, 'student_email_verification', 'disable');

-- --------------------------------------------------------

--
-- Table structure for table `subservices`
--

CREATE TABLE `subservices` (
  `service_id` int(100) NOT NULL,
  `sid` int(100) NOT NULL,
  `subservicename` varchar(100) NOT NULL,
  `Fee` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subservices`
--

INSERT INTO `subservices` (`service_id`, `sid`, `subservicename`, `Fee`) VALUES
(10, 3, 'transporte', 100),
(11, 10, 'Parto', 1500),
(12, 5, 'Sala de Parto', 1500),
(13, 5, 'transporte', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) UNSIGNED NOT NULL,
  `tag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tagable_id` int(11) DEFAULT NULL,
  `tagable_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_added` int(11) DEFAULT NULL,
  `last_modified` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_files`
--

CREATE TABLE `uploaded_files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `new_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploaded_files`
--

INSERT INTO `uploaded_files` (`id`, `name`, `new_name`) VALUES
(1, 'text-animation.zip', '2711201606481769text-animation.zip'),
(2, 'TL.png', '2711201606481879TL.png'),
(3, 'TL.png', '2711201606482588TL.png'),
(4, 'TL.png', '2711201606482604TL.png'),
(5, 'TL.png', '2711201606482636TL.png'),
(6, 'text-animation.zip', '2711201606483139text-animation.zip'),
(7, '11999700_495480563961946_5873763091041235149_o.png', '190521162140779711999700_495480563961946_5873763091041235149_o.png'),
(8, '11999700_495480563961946_5873763091041235149_o.png', '190521162140789811999700_495480563961946_5873763091041235149_o.png'),
(9, 'â™¥ OraÃ§Ã£o do Amor - Arianne â™¥.mp3', '1905211621408000â™¥ OraÃ§Ã£o do Amor - Arianne â™¥.mp3'),
(10, 'â™¥ OraÃ§Ã£o do Amor - Arianne â™¥.mp3', '1905211621408039â™¥ OraÃ§Ã£o do Amor - Arianne â™¥.mp3'),
(11, '03. Homens NÃ£o Choram 2 (feat. Anna Joyce).mp3', '190521162140806403. Homens NÃ£o Choram 2 (feat. Anna Joyce).mp3'),
(12, 'c# basico.pdf', '1905211621408087c# basico.pdf'),
(13, '_1_8e5d6edac9447060675194b2b434a196.jpg', '1905211621408135_1_8e5d6edac9447060675194b2b434a196.jpg'),
(14, '_1_8e5d6edac9447060675194b2b434a196.jpg', '1905211621408160_1_8e5d6edac9447060675194b2b434a196.jpg'),
(15, 'CartÃ£o de visita.png', '1905211621408173CartÃ£o de visita.png'),
(16, 'CartÃ£o de visita.png', '1905211621408285CartÃ£o de visita.png'),
(17, 'Capturar.PNG', '1905211621408300Capturar.PNG'),
(18, 'IMG-20200825-WA0013.jpg', '1808211629269251IMG-20200825-WA0013.jpg'),
(19, 'IMG-20200825-WA0012.jpg', '1808211629269363IMG-20200825-WA0012.jpg'),
(20, '', '1808211629269922');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `social_links` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `biography` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `date_added` int(11) DEFAULT NULL,
  `last_modified` int(11) DEFAULT NULL,
  `watch_history` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `wishlist` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `paypal_keys` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `stripe_keys` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `verification_code` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `social_links`, `biography`, `role_id`, `date_added`, `last_modified`, `watch_history`, `wishlist`, `title`, `paypal_keys`, `stripe_keys`, `verification_code`, `status`) VALUES
(1, 'Rogerio', 'Alfredo', 'admin@admin.com', '123', '{\"facebook\":\"\",\"twitter\":\"\",\"linkedin\":\"\"}', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(2, 'bairro', 'Patriota', 'admin@admin.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '{\"facebook\":\"\",\"twitter\":\"\",\"linkedin\":\"\"}', NULL, 2, 1639932891, NULL, '[]', '[]', NULL, '[{\"production_client_id\":\"\"}]', '[{\"public_live_key\":\"\",\"secret_live_key\":\"\"}]', 'a536b6714b6055d666b154ced4ade7fa', 1),
(3, 'rosa', 'Andre', 'rosaandre@gmail.com', '123456', '{\"facebook\":\"\",\"twitter\":\"\",\"linkedin\":\"\"}', NULL, 2, 1639939893, NULL, '[]', '[]', NULL, '[{\"production_client_id\":\"\"}]', '[{\"public_live_key\":\"\",\"secret_live_key\":\"\"}]', '68054b4b50808c6dd4bcd950d70bef6c', 1),
(6, 'teste', '.', 'teste@teste.com', 'd9b1d7db4cd6e70935368a1efb10e377', 'teste', '944259591', 2, 2147483647, 2147483647, '[]', '[]', 'sem titulo', '[{\"production_client_id\":\"\"}]', '[{\"public_live_key\":\"\",\"secret_live_key\":\"\"}]', '68054b4b50838c6fd4bcd950d70bef6c', 1),
(7, 'uiiii', 'uihhghjgh', 'jgjhadmin@admin.com', '202cb962ac59075b964b07152d234b70', '{\"facebook\":\"\",\"twitter\":\"\",\"linkedin\":\"\"}', NULL, 2, 1639947066, NULL, '[]', '[]', NULL, '[{\"production_client_id\":\"\"}]', '[{\"public_live_key\":\"\",\"secret_live_key\":\"\"}]', 'ea82ff932adf435a07bc9d2a02852fa9', 1),
(8, 'cccc', 'cccc', 'cccadmin@admin.com', '123', '{\"facebook\":\"\",\"twitter\":\"\",\"linkedin\":\"\"}', NULL, 2, 1639948970, NULL, '[]', '[]', NULL, '[{\"production_client_id\":\"\"}]', '[{\"public_live_key\":\"\",\"secret_live_key\":\"\"}]', 'ce57e8bbb11334fedefc2c861e6f7b07', 1),
(9, 'ccxcc', 'ccxxcxc', '1admin@admin.com', '123', '{\"facebook\":\"\",\"twitter\":\"\",\"linkedin\":\"\"}', NULL, 2, 1639949128, NULL, '[]', '[]', NULL, '[{\"production_client_id\":\"\"}]', '[{\"public_live_key\":\"\",\"secret_live_key\":\"\"}]', '19c6dbbf7f69709f17bff041716a4656', 1),
(10, 'teste', '.', '3teste@teste.com', 'd9b1d7db4cd6e70935368a1efb10e377', 'teste', '944259591', 2, 2147483647, 2147483647, '.png', '[]', 'sem titulo', '[{\"production_client_id\":\"\"}]', '[{\"public_live_key\":\"\",\"secret_live_key\":\"\"}]', '68054b4b50838c6fd4bcd950d70bef6c', 1),
(11, 'teste', '.', 'teste1@teste.com', '123', 'teste', '944259591', 2, 2147483647, 2147483647, '.png', '[]', 'sem titulo', '[{\"production_client_id\":\"\"}]', '[{\"public_live_key\":\"\",\"secret_live_key\":\"\"}]', '68054b4b50838c6fd4bcd950d70bef6c', 1),
(12, 'Roliana', '.', 'roli@roli.com', 'roli', 'teste', '944259591', 1, 2147483647, 2147483647, '.png', '[]', 'sem titulo', '[{\"production_client_id\":\"\"}]', '[{\"public_live_key\":\"\",\"secret_live_key\":\"\"}]', '68054b4b50838c6fd4bcd950d70bef6c', 1),
(13, 'Juliana Pereira', '.', 'juliana@gmail.com', '123', 'cazenga', '933385308', 2, 2147483647, 2147483647, '.png', '[]', 'sem titulo', '[{\"production_client_id\":\"\"}]', '[{\"public_live_key\":\"\",\"secret_live_key\":\"\"}]', '68054b4b50838c6fd4bcd950d70bef6c', 1),
(29, 'lameira alfredo', '.', 'cdf@gmail.com', '123', 'viana', '944259591', 2, 2147483647, 2147483647, '.png', '[]', 'sem titulo', '[{\"production_client_id\":\"\"}]', '[{\"public_live_key\":\"\",\"secret_live_key\":\"\"}]', '68054b4b50838c6fd4bcd950d70bef6c', 1),
(30, 'bairro azul Patriota', '.', 'admiwewewwen@admin.com', '123', 'teste', '944259591', 2, 2147483647, 2147483647, '.png', '[]', 'sem titulo', '[{\"production_client_id\":\"\"}]', '[{\"public_live_key\":\"\",\"secret_live_key\":\"\"}]', '68054b4b50838c6fd4bcd950d70bef6c', 1),
(31, 'teste', '.', 'teste@teste.com', '123', 'viana', '', 2, 2147483647, 2147483647, '.png', '[]', 'sem titulo', '[{\"production_client_id\":\"\"}]', '[{\"public_live_key\":\"\",\"secret_live_key\":\"\"}]', '68054b4b50838c6fd4bcd950d70bef6c', 1),
(32, 'teste', '.', 'teste@teste.com', '123', 'viana', '944259591', 2, 2147483647, 2147483647, '.png', '[]', 'sem titulo', '[{\"production_client_id\":\"\"}]', '[{\"public_live_key\":\"\",\"secret_live_key\":\"\"}]', '68054b4b50838c6fd4bcd950d70bef6c', 1),
(33, 'EWEQW', '.', 'te323ste@teste.com', '123', 'viana', '944259591', 2, 2147483647, 2147483647, '.png', '[]', 'sem titulo', '[{\"production_client_id\":\"\"}]', '[{\"public_live_key\":\"\",\"secret_live_key\":\"\"}]', '68054b4b50838c6fd4bcd950d70bef6c', 1),
(34, 'teste', '.', 'tesfddsdte@teste.com', 'fd', 'viana', '944259591', 2, 2147483647, 2147483647, '.png', '[]', 'sem titulo', '[{\"production_client_id\":\"\"}]', '[{\"public_live_key\":\"\",\"secret_live_key\":\"\"}]', '68054b4b50838c6fd4bcd950d70bef6c', 1),
(35, 'carta', '.', 'teste2@teste.com', '123', 'viana', '944259591', 2, 2147483647, 2147483647, '.png', '[]', 'sem titulo', '[{\"production_client_id\":\"\"}]', '[{\"public_live_key\":\"\",\"secret_live_key\":\"\"}]', '68054b4b50838c6fd4bcd950d70bef6c', 1),
(36, 'teste', '.', 'teste@teste.com', '123', 'viana', '944259591', 2, 2147483647, 2147483647, '.png', '[]', 'sem titulo', '[{\"production_client_id\":\"\"}]', '[{\"public_live_key\":\"\",\"secret_live_key\":\"\"}]', '68054b4b50838c6fd4bcd950d70bef6c', 1),
(37, '3', '.', 'teste@teste.com', '111', '3', 'ee', 2, 2147483647, 2147483647, '.png', '[]', 'sem titulo', '[{\"production_client_id\":\"\"}]', '[{\"public_live_key\":\"\",\"secret_live_key\":\"\"}]', '68054b4b50838c6fd4bcd950d70bef6c', 1),
(38, '', '.', '', '', '', '', 2, 2147483647, 2147483647, '.png', '[]', 'sem titulo', '[{\"production_client_id\":\"\"}]', '[{\"public_live_key\":\"\",\"secret_live_key\":\"\"}]', '68054b4b50838c6fd4bcd950d70bef6c', 1),
(39, 'PACIDIO', '.', 'pacidio@gmail.com', 'pacidio', 'ZANGO', '9879', 2, 2147483647, 2147483647, '.png', '[]', 'sem titulo', '[{\"production_client_id\":\"\"}]', '[{\"public_live_key\":\"\",\"secret_live_key\":\"\"}]', '68054b4b50838c6fd4bcd950d70bef6c', 1),
(40, 'rogerio Alfredo', '.', 'rogeriolameira@gmail.com', '123', 'teste', '944259591', 2, 2147483647, 2147483647, '.png', '[]', 'sem titulo', '[{\"production_client_id\":\"\"}]', '[{\"public_live_key\":\"\",\"secret_live_key\":\"\"}]', '68054b4b50838c6fd4bcd950d70bef6c', 1),
(41, 'rogerio Alfredo', '.', 'admin@admin.com', '123', 'teste', '97078', 2, 2147483647, 2147483647, '.png', '[]', 'sem titulo', '[{\"production_client_id\":\"\"}]', '[{\"public_live_key\":\"\",\"secret_live_key\":\"\"}]', '68054b4b50838c6fd4bcd950d70bef6c', 1),
(42, 'rogerio Alfredo', '.', 'admin@admrrin.com', '123', 'teste', '944259591', 2, 2147483647, 2147483647, '.png', '[]', 'sem titulo', '[{\"production_client_id\":\"\"}]', '[{\"public_live_key\":\"\",\"secret_live_key\":\"\"}]', '68054b4b50838c6fd4bcd950d70bef6c', 1),
(43, 'rogerio Alfredo', '.', 'rogeriolameiri2017@gmail.com', '123', 'teste', '944259591', 2, 2147483647, 2147483647, '.png', '[]', 'sem titulo', '[{\"production_client_id\":\"\"}]', '[{\"public_live_key\":\"\",\"secret_live_key\":\"\"}]', '68054b4b50838c6fd4bcd950d70bef6c', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `primeironome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `numerodetelefone` varchar(50) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `simbolo` varchar(255) NOT NULL,
  `esta_ativo` enum('0','1') NOT NULL,
  `data_hora` date NOT NULL,
  `imagem` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `primeironome`, `sobrenome`, `email`, `numerodetelefone`, `senha`, `simbolo`, `esta_ativo`, `data_hora`, `imagem`) VALUES
(1, '', '', '', '', '', '', '', '0000-00-00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addappointment`
--
ALTER TABLE `addappointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adddeposit`
--
ALTER TABLE `adddeposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addfiles`
--
ALTER TABLE `addfiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addmedicalhistory`
--
ALTER TABLE `addmedicalhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addnewmedicine`
--
ALTER TABLE `addnewmedicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addnewpres`
--
ALTER TABLE `addnewpres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addpayment`
--
ALTER TABLE `addpayment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `id_admin` (`id_admin`);

--
-- Indexes for table `altas`
--
ALTER TABLE `altas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beneficiario`
--
ALTER TABLE `beneficiario`
  ADD PRIMARY KEY (`id_bef`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrol`
--
ALTER TABLE `enrol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `especialidade`
--
ALTER TABLE `especialidade`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `exame`
--
ALTER TABLE `exame`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`idformulario`);

--
-- Indexes for table `frontend_settings`
--
ALTER TABLE `frontend_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internamento`
--
ALTER TABLE `internamento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `justify`
--
ALTER TABLE `justify`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`phrase_id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mainservices`
--
ALTER TABLE `mainservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marcarconsulta`
--
ALTER TABLE `marcarconsulta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicinecategory`
--
ALTER TABLE `medicinecategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id_medico`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `message_thread`
--
ALTER TABLE `message_thread`
  ADD PRIMARY KEY (`message_thread_id`);

--
-- Indexes for table `patientinfo`
--
ALTER TABLE `patientinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientregister`
--
ALTER TABLE `patientregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profileid`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subservices`
--
ALTER TABLE `subservices`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addappointment`
--
ALTER TABLE `addappointment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `adddeposit`
--
ALTER TABLE `adddeposit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `addfiles`
--
ALTER TABLE `addfiles`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `addmedicalhistory`
--
ALTER TABLE `addmedicalhistory`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `addnewmedicine`
--
ALTER TABLE `addnewmedicine`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `addnewpres`
--
ALTER TABLE `addnewpres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `addpayment`
--
ALTER TABLE `addpayment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `altas`
--
ALTER TABLE `altas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `beneficiario`
--
ALTER TABLE `beneficiario`
  MODIFY `id_bef` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `enrol`
--
ALTER TABLE `enrol`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `especialidade`
--
ALTER TABLE `especialidade`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `exame`
--
ALTER TABLE `exame`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `formulario`
--
ALTER TABLE `formulario`
  MODIFY `idformulario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frontend_settings`
--
ALTER TABLE `frontend_settings`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `internamento`
--
ALTER TABLE `internamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `justify`
--
ALTER TABLE `justify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `phrase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=594;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `mainservices`
--
ALTER TABLE `mainservices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `marcarconsulta`
--
ALTER TABLE `marcarconsulta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `medicinecategory`
--
ALTER TABLE `medicinecategory`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id_medico` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `message_thread`
--
ALTER TABLE `message_thread`
  MODIFY `message_thread_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patientinfo`
--
ALTER TABLE `patientinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patientregister`
--
ALTER TABLE `patientregister`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profileid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `subservices`
--
ALTER TABLE `subservices`
  MODIFY `service_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
