-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Maio-2019 às 06:00
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

create database green_alert;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `green_alert`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente_empresa`
--

CREATE TABLE `cliente_empresa` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT ,
  `razaoSocial_empresa` varchar(100) NOT NULL,
  `nomeFantasia_empresa` varchar(100) NOT NULL,
  `cnpj_empresa` varchar(20) NOT NULL,
  `email_empresa` varchar(100) NOT NULL,
  `responsavel_empresa` varchar(100) NOT NULL,
  `telefone_empresa` varchar(20) NOT NULL,
  `telefoneOpc_empresa` varchar(20) DEFAULT NULL,
  `descricao_empresa` varchar(100) DEFAULT NULL,
  `rua_endereco` varchar(100) NOT NULL,
  `numero_endereco` int(5) NOT NULL,
  `bairro_endereco` varchar(100) NOT NULL,
  `cidade_endereco` varchar(100) NOT NULL,
  `cep_endereco` varchar(10) NOT NULL,
  `uf_endereco` varchar(2) NOT NULL,
  `senha_empresa` varchar(12) NOT NULL,
  `confSenha_empresa` varchar(12) NOT NULL,
  PRIMARY KEY (`id_empresa`);
  

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

create database green_alert;
use green_alert;

--
-- Estrutura da tabela `documento`
--

CREATE TABLE `documento` (
  `id_documento` int(11) NOT NULL AUTO_INCREMENT,
  `nome_documento` varchar(100) NOT NULL,
  `id_empresaFK` int(11) DEFAULT NULL,
  `dataElaboracao_documento` varchar(15) NOT NULL,
  `tipo_documento` varchar(100) NOT NULL,
  `responavel_documento` varchar(100) NOT NULL,
  
	primary key (id_documento),
    
    foreign key (id_empresaFK) references cliente_empresa (id_empresa)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `documentos_cadastrados`
--

CREATE TABLE `documentos_cadastrados` (
  `id_documentosCadastrados` int(11) NOT NULL AUTO_INCREMENT,
  `id_documentoFK` int(11) DEFAULT NULL,
  
    primary key (id_documentosCadastrados),
    foreign key (id_documentoFK) references documento (id_documento)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas_cadastradas`
--

CREATE TABLE `empresas_cadastradas` (
  `id_empresasCadastradas` int(11) NOT NULL AUTO_INCREMENT,
  `id_empresaFK` int(11) DEFAULT NULL,
	primary key (id_empresasCadastradas),
    foreign key (id_empresaFK) references cliente_empresa (id_empresa)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_login` int(11) DEFAULT NULL,
  `senha_login` int(11) DEFAULT NULL,
  
	primary key (id_login),
    
    foreign key (usuario_login) references cliente_empresa (id_empresa),
    foreign key (senha_login) references cliente_empresa (id_empresa)
    
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `notificacao`
--

CREATE TABLE `notificacao` (
  `id_notificacao` int(11) NOT NULL AUTO_INCREMENT,
  `id_empresaFK` int(11) DEFAULT NULL,
  `nomeDoc_noti` varchar(100) NOT NULL,
  `url_noti` varchar(100) NOT NULL,
  `dataVencimento_noti` varchar(15) NOT NULL,
  `dataNotificacao_noti` int(2) NOT NULL,
  `observacoes_noti` varchar(255) DEFAULT NULL,
	primary key (id_notificacao),
    foreign key (id_empresaFK) references cliente_empresa (id_empresa)
    )ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;


--
-- Estrutura da tabela `status_noti`
--

CREATE TABLE `status_noti` (
  `id_statusNoti` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_statusNoti` varchar(100) DEFAULT NULL,
  
  primary key (id_statusNoti)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noti_cadastradas`
--

CREATE TABLE `noti_cadastradas` (
  `id_notiCadastradas` int(11) NOT NULL AUTO_INCREMENT,
  `id_notiFK` int(11) DEFAULT NULL,
  `id_statusNotiFK` int(11) DEFAULT NULL,
  
   primary key (id_notiCadastradas),
   
   foreign key (id_notiFK) references notificacao (id_notificacao),
   foreign key (id_statusNotiFK) references status_noti (id_statusNoti)
   
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------



DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `PROC_IN_EMPRESA` (IN `razaoSocial_empresa` VARCHAR(255), IN `nomeFantasia_empresa` VARCHAR(255),
 IN `cnpj_empresa` VARCHAR(255), IN `email_empresa` VARCHAR(255), IN `responsavel_empresa` VARCHAR(255),
 IN `telefone_empresa` VARCHAR(255), IN `telefoneOpc_empresa` VARCHAR(255), IN `descricao_empresa` VARCHAR(255), IN `rua_endereco` VARCHAR(255),
 IN `numero_endereco` INT(5), IN `bairro_endereco` VARCHAR(255), IN `cidade_endereco` VARCHAR(255), IN `cep_endereco` VARCHAR(255),
 IN `uf_endereco` VARCHAR(255), IN `senha_empresa` VARCHAR(255), IN `confSenha_empresa` VARCHAR(255))  BEGIN
INSERT INTO `green_alert`.`cliente_empresa`
(`razaoSocial_empresa`,
`nomeFantasia_empresa`,
`cnpj_empresa`,
`numero_empresa`,
`email_empresa`,
`responsavel_empresa`,
`telefone_empresa`,
`telefoneOpc_empresa`,
`descricao_empresa`,
`rua_endereco`,
`numero_endereco`,
`bairro_endereco`,
`cidade_endereco`,
`cep_endereco`,
`uf_endereco`,
`senha_empresa`,
`confSenha_empresa`)
VALUES
(
razaoSocial_empresa,
nomeFantasia_empresa,
cnpj_empresa,
numero_empresa,
email_empresa,
responsavel_empresa,
telefone_empresa,
telefoneOpc_empresa,
descricao_empresa,
rua_endereco,
numero_endereco,
bairro_endereco,
cidade_endereco,
cep_endereco,
uf_endereco,
senha_empresa,
confSenha_empresa);
END$$

select * from cliente_empresa;

CREATE DEFINER=`root`@`localhost` PROCEDURE `PROC_IN_NOTI` (IN `id_empresaFK` INT(11), IN `nomeDoc_noti` VARCHAR(100), IN `url_noti` VARCHAR(100), IN `dataVencimento_noti` VARCHAR(15), IN `dataNotificacao_noti` INT(2), IN `observacoes_noti` VARCHAR(255))  BEGIN
INSERT INTO `green_alert`.`notificacao`
(`id_empresaFK`,
`nomeDoc_noti`,
`url_noti`,
`dataVencimento_noti`,
`dataNotificacao_noti`,
`observacoes_noti`)
VALUES
(id_empresaFK,
nomeDoc_noti,
url_noti,
dataVencimento_noti,
dataNotificacao_noti,
observacoes_noti);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `PROC_SEL_EMPRESA` ()  BEGIN

SELECT `cliente_empresa`.`nomeFantasia_empresa` FROM `green_alert`.`cliente_empresa` order by `nomeFantasia_empresa`;

END$$

DELIMITER ;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `email` varchar(520) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `niveis_acesso_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
);

select * from usuarios;
select * from niveis_acessos;

CREATE TABLE IF NOT EXISTS `niveis_acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`,`niveis_acesso_id`) VALUES
(1, 'Matheus Maia', 'Matheus@Maia.com', '202cb962ac59075b964b07152d234b70', 1);

INSERT INTO `niveis_acessos` (`id`, `nome`) VALUES
(1, 'Administrador'),
(2, 'Colaborador'),
(3, 'Cliente');

CALL `green_alert`.`PROC_IN_FUNCIONARIO`('Lucas','Lucas@Lucas.com','123', '123',2);

use green_alert;
select * from usuarios;
select * from cliente_empresa;





