-- MySQL dump 10.16  Distrib 10.1.38-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: green_alert
-- ------------------------------------------------------
-- Server version	10.1.38-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cliente_empresa`
--

DROP TABLE IF EXISTS `cliente_empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente_empresa` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
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
  `senha_empresa` varchar(50) NOT NULL,
  `confSenha_empresa` varchar(50) NOT NULL,
  `niveis_acesso_id` int(1) NOT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente_empresa`
--

LOCK TABLES `cliente_empresa` WRITE;
/*!40000 ALTER TABLE `cliente_empresa` DISABLE KEYS */;
INSERT INTO `cliente_empresa` VALUES (1,'Eu','Eu','Eu','Eu','Eu','Eu','Eu','Eu','Eu',65,'Eu','Eu','Eu','Eu','Eu','Eu',0),(2,'0','0','0','0@0','0','0','0','0','0',0,'0','0','0','MG','0','0',0),(3,'a','a','a','a@a','a','a','a','a','a',0,'a','a','a','AC','a','a',0),(4,'1324135','1351','cxfc','315@51','15','35135','153','3513','165',165,'651','165','165','AC','123','123',0),(5,'651651','615','156','16@651','156','165','156','165','165',651,'165','165','156','AC','123','123',0),(6,'155','155','155','155@155','155','115','','155','155',155,'155','155','155','PB','155','155',2),(7,'Seu JoÃ£o','Padaria do JoÃ£o','6516516','Joao@Padaria.com','d','b','c','a','rua',1,'1','1','1','AC','202cb962ac59','202cb962ac59',3),(8,'jão','joão','5445','a@a','a','a','a','a','a',0,'a','a','a','AC','0cc175b9c0f1','0cc175b9c0f1',3),(9,'Teste','Teste2','65165','Teste@Teste','12','12','12','12','12',12,'12','12','12','AC','202cb962ac59','202cb962ac59',3),(10,'1','1','1','1@1','1','1','1','1','1',1,'1','1','1','AC','202cb962ac59','202cb962ac59',3),(11,'Tentativa','TentativaFantasia','1651561','Tentativa@gmail.com','156','15165','','Teste','a',1,'1','1','1','AC','202cb962ac59','202cb962ac59',3),(12,'lucas motos','luquinhasMotos','456789','lucas2@lucas.com','Lucas','36226220','6227877','venda de motos, as vezes drogas','rua da puta que te pariu seu viado',5,'centro','camaçari','527800','BA','4297f44b13955235245b2497399d7a93','4297f44b13955235245b2497399d7a93',3),(13,'MatheusIM','Matheus Informatica','0651516','Matheus@Maia.com','Matheus','7198416165','','Desenvolvimento','Rua Atras',12,'Itapuã','Salvador','5130516','BA','202cb962ac59075b964b07152d234b70','202cb962ac59075b964b07152d234b70',3);
/*!40000 ALTER TABLE `cliente_empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documento`
--

DROP TABLE IF EXISTS `documento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documento` (
  `id_documento` int(11) NOT NULL AUTO_INCREMENT,
  `nome_documento` varchar(100) NOT NULL,
  `id_empresaFK` int(11) DEFAULT NULL,
  `dataElaboracao_documento` varchar(15) NOT NULL,
  `tipo_documento` varchar(100) NOT NULL,
  `responavel_documento` varchar(100) NOT NULL,
  PRIMARY KEY (`id_documento`),
  KEY `id_empresaFK` (`id_empresaFK`),
  CONSTRAINT `documento_ibfk_1` FOREIGN KEY (`id_empresaFK`) REFERENCES `cliente_empresa` (`id_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documento`
--

LOCK TABLES `documento` WRITE;
/*!40000 ALTER TABLE `documento` DISABLE KEYS */;
/*!40000 ALTER TABLE `documento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documentos_cadastrados`
--

DROP TABLE IF EXISTS `documentos_cadastrados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documentos_cadastrados` (
  `id_documentosCadastrados` int(11) NOT NULL AUTO_INCREMENT,
  `id_documentoFK` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_documentosCadastrados`),
  KEY `id_documentoFK` (`id_documentoFK`),
  CONSTRAINT `documentos_cadastrados_ibfk_1` FOREIGN KEY (`id_documentoFK`) REFERENCES `documento` (`id_documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documentos_cadastrados`
--

LOCK TABLES `documentos_cadastrados` WRITE;
/*!40000 ALTER TABLE `documentos_cadastrados` DISABLE KEYS */;
/*!40000 ALTER TABLE `documentos_cadastrados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresas_cadastradas`
--

DROP TABLE IF EXISTS `empresas_cadastradas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresas_cadastradas` (
  `id_empresasCadastradas` int(11) NOT NULL AUTO_INCREMENT,
  `id_empresaFK` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_empresasCadastradas`),
  KEY `id_empresaFK` (`id_empresaFK`),
  CONSTRAINT `empresas_cadastradas_ibfk_1` FOREIGN KEY (`id_empresaFK`) REFERENCES `cliente_empresa` (`id_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas_cadastradas`
--

LOCK TABLES `empresas_cadastradas` WRITE;
/*!40000 ALTER TABLE `empresas_cadastradas` DISABLE KEYS */;
/*!40000 ALTER TABLE `empresas_cadastradas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id_login` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_login` int(11) DEFAULT NULL,
  `senha_login` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_login`),
  KEY `usuario_login` (`usuario_login`),
  KEY `senha_login` (`senha_login`),
  CONSTRAINT `login_ibfk_1` FOREIGN KEY (`usuario_login`) REFERENCES `cliente_empresa` (`id_empresa`),
  CONSTRAINT `login_ibfk_2` FOREIGN KEY (`senha_login`) REFERENCES `cliente_empresa` (`id_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `niveis_acessos`
--

DROP TABLE IF EXISTS `niveis_acessos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `niveis_acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `niveis_acessos`
--

LOCK TABLES `niveis_acessos` WRITE;
/*!40000 ALTER TABLE `niveis_acessos` DISABLE KEYS */;
INSERT INTO `niveis_acessos` VALUES (1,'Administrador'),(2,'Colaborador'),(3,'Cliente');
/*!40000 ALTER TABLE `niveis_acessos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `noti_cadastradas`
--

DROP TABLE IF EXISTS `noti_cadastradas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `noti_cadastradas` (
  `id_notiCadastradas` int(11) NOT NULL AUTO_INCREMENT,
  `id_notiFK` int(11) DEFAULT NULL,
  `id_statusNotiFK` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_notiCadastradas`),
  KEY `id_notiFK` (`id_notiFK`),
  KEY `id_statusNotiFK` (`id_statusNotiFK`),
  CONSTRAINT `noti_cadastradas_ibfk_1` FOREIGN KEY (`id_notiFK`) REFERENCES `notificacao` (`id_notificacao`),
  CONSTRAINT `noti_cadastradas_ibfk_2` FOREIGN KEY (`id_statusNotiFK`) REFERENCES `status_noti` (`id_statusNoti`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noti_cadastradas`
--

LOCK TABLES `noti_cadastradas` WRITE;
/*!40000 ALTER TABLE `noti_cadastradas` DISABLE KEYS */;
/*!40000 ALTER TABLE `noti_cadastradas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notificacao`
--

DROP TABLE IF EXISTS `notificacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notificacao` (
  `id_notificacao` int(11) NOT NULL AUTO_INCREMENT,
  `id_empresaFK` int(11) DEFAULT NULL,
  `nomeDoc_noti` varchar(100) NOT NULL,
  `url_noti` varchar(100) NOT NULL,
  `dataVencimento_noti` varchar(15) NOT NULL,
  `dataNotificacao_noti` int(2) NOT NULL,
  `observacoes_noti` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_notificacao`),
  KEY `id_empresaFK` (`id_empresaFK`),
  CONSTRAINT `notificacao_ibfk_1` FOREIGN KEY (`id_empresaFK`) REFERENCES `cliente_empresa` (`id_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notificacao`
--

LOCK TABLES `notificacao` WRITE;
/*!40000 ALTER TABLE `notificacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `notificacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status_noti`
--

DROP TABLE IF EXISTS `status_noti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status_noti` (
  `id_statusNoti` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_statusNoti` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_statusNoti`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status_noti`
--

LOCK TABLES `status_noti` WRITE;
/*!40000 ALTER TABLE `status_noti` DISABLE KEYS */;
/*!40000 ALTER TABLE `status_noti` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `confSenha` varchar(50) NOT NULL,
  `niveis_acesso_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Matheus Maia','Matheus@Maia.com','202cb962ac59075b964b07152d234b70','',1),(2,'Lucas','Lucas@Lucas.com','123','123',2),(3,'Elida Nunes','Elida@Nunes.com','123','123',2),(4,'Lucao','lucao@lucao.com','sonic301101','sonc301101',2),(5,'1','1@1','1','1',2),(6,'2','2@2','2','2',2),(7,'3','3@3','123','123',2),(8,'4','4@4','4','4',2),(9,'5','5@5','5','5',2),(10,'6','6@6','6','6',2),(11,'6','6@6','6','6',2),(12,'Maquina','10@10','10','10',2),(13,'teste','teste@1','1','1',2),(14,'42','11@1','1','1',2),(15,'Teste','Teste@Teste','c20ad4d76fe97759aa27a0c99bff6710','12',2),(16,'caique','caique@zogbi.com','df10ef8509dc176d733d59549e7dbfaf','123456abc',2),(17,'TesteSenha','Teste@Senha','14','15',2),(18,'TesteSenhaFuncional','Teste@SenhaFuncional','123','123',2),(19,'Helvecio','Helvecio@gmail.com','123','123',2),(20,'teste6165','teste@teste5','123','123',2),(21,'aaaaaa','aaa@aaa','123','123',2),(22,'md5','md5@f','ab','ab',2),(23,'md5dnv','t@t','123','123',2),(24,'bbb','bb@bb','bb','bb',2),(25,'aa','aa@aa','aa','aa',2),(26,'ll','ll@ll','5b54c0a045f179bcbbbc9abcb8b5cd4c','ll',2),(27,'Helvecio','helvecio@gmail.com','202cb962ac59075b964b07152d234b70','202cb962ac59075b964b07152d234b70',2),(28,'p','p@p','6c8349cc7260ae62e3b1396831a8398f','6c8349cc7260ae62e3b1396831a8398f',2),(29,'kk','kk@kk','9f61408e3afb633e50cdf1b20de6f466','9f61408e3afb633e50cdf1b20de6f466',2),(30,'bb','bb@bb','202cb962ac59075b964b07152d234b70','202cb962ac59075b964b07152d234b70',2),(31,'mn','mn@mn','aab3238922bcc25a6f606eb525ffdc56','aab3238922bcc25a6f606eb525ffdc56',2),(32,'llll','lllll@lllll','7647966b7343c29048673252e490f736','7647966b7343c29048673252e490f736',2),(33,'aaaaaaaaaaaaaaaaaaaa','aaaaa@aaaa','aab3238922bcc25a6f606eb525ffdc56','aab3238922bcc25a6f606eb525ffdc56',2),(34,'25','25@25','8e296a067a37563370ded05f5a3bf3ec','8e296a067a37563370ded05f5a3bf3ec',2),(35,'Lucas','Lucas@Lucas.com','123','123',2),(36,'fasf','afg@faf','202cb962ac59075b964b07152d234b70','202cb962ac59075b964b07152d234b70',2),(37,'Teste','Teste@Teste','202cb962ac59075b964b07152d234b70','202cb962ac59075b964b07152d234b70',2),(38,'Teste','Teste@Teste','202cb962ac59075b964b07152d234b70','202cb962ac59075b964b07152d234b70',2),(39,'a','a@a','0cc175b9c0f1b6a831c399e269772661','0cc175b9c0f1b6a831c399e269772661',2),(40,'b','b@b','92eb5ffee6ae2fec3ad71c777531578f','92eb5ffee6ae2fec3ad71c777531578f',2),(41,'c@c','c@c','202cb962ac59075b964b07152d234b70','202cb962ac59075b964b07152d234b70',2),(42,'l','l@l','c4ca4238a0b923820dcc509a6f75849b','c4ca4238a0b923820dcc509a6f75849b',2),(43,'Lucas','Lucas@gmail.com','202cb962ac59075b964b07152d234b70','202cb962ac59075b964b07152d234b70',2),(44,'Elida','Elida@gmail.com','202cb962ac59075b964b07152d234b70','202cb962ac59075b964b07152d234b70',2),(45,'Lucas','Lucas@Lucas.com','123','123',2),(46,'Lucas','Lucas@Lucas.com','123','123',2),(47,'Lucas','Lucas@Lucas.com','123','123',2),(48,'Lucas','Lucas@Lucas.com','123','123',2),(49,'Lucas','Lucas@Lucas.com','123','123',2);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'green_alert'
--
/*!50003 DROP PROCEDURE IF EXISTS `PROC_IN_EMPRESA` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `PROC_IN_EMPRESA`(IN `razaoSocial_empresa` VARCHAR(255), IN `nomeFantasia_empresa` VARCHAR(255),
 IN `cnpj_empresa` VARCHAR(255), IN `email_empresa` VARCHAR(255), IN `responsavel_empresa` VARCHAR(255),
 IN `telefone_empresa` VARCHAR(255), IN `telefoneOpc_empresa` VARCHAR(255), IN `descricao_empresa` VARCHAR(255), IN `rua_endereco` VARCHAR(255),
 IN `numero_endereco` INT(5), IN `bairro_endereco` VARCHAR(255), IN `cidade_endereco` VARCHAR(255), IN `cep_endereco` VARCHAR(255),
 IN `uf_endereco` VARCHAR(255), IN `senha_empresa` VARCHAR(255), IN `confSenha_empresa` VARCHAR(255), IN `niveis_acesso_id` INT(1))
BEGIN
INSERT INTO `green_alert`.`cliente_empresa`
(`razaoSocial_empresa`,
`nomeFantasia_empresa`,
`cnpj_empresa`,
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
`confSenha_empresa`,
`niveis_acesso_id`)
VALUES
(
razaoSocial_empresa,
nomeFantasia_empresa,
cnpj_empresa,
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
confSenha_empresa,
niveis_acesso_id);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `PROC_IN_FUNCIONARIO` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `PROC_IN_FUNCIONARIO`(IN `nome` VARCHAR(200), IN `email` VARCHAR(200),IN `senha` VARCHAR(50),IN `confSenha` VARCHAR(50),IN `niveis_acesso_id` INT(1) )
BEGIN
INSERT INTO `green_alert`.`usuarios`
(`nome`,
`email`,
`senha`,
`confSenha`,
`niveis_acesso_id`
)
VALUES
(nome,
email,
senha,
confSenha,
niveis_acesso_id
);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `PROC_IN_NOTI` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `PROC_IN_NOTI`(IN `id_empresaFK` INT(11), IN `nomeDoc_noti` VARCHAR(100), IN `url_noti` VARCHAR(100), IN `dataVencimento_noti` VARCHAR(15), IN `dataNotificacao_noti` INT(2), IN `observacoes_noti` VARCHAR(255))
BEGIN
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

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `PROC_SEL_EMPRESA` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `PROC_SEL_EMPRESA`()
BEGIN

SELECT `cliente_empresa`.`nomeFantasia_empresa` FROM `green_alert`.`cliente_empresa` order by `nomeFantasia_empresa`;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `PROC_UP_EMPRESA` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `PROC_UP_EMPRESA`(IN `razaoSocial_empresa` VARCHAR(255), IN `nomeFantasia_empresa` VARCHAR(255), IN `cnpj_empresa` VARCHAR(255), IN `email_empresa` VARCHAR(255), IN `responsavel_empresa` VARCHAR(255), IN `telefone_empresa` VARCHAR(255), IN `telefoneOpc_empresa` VARCHAR(255), IN `descricao_empresa` VARCHAR(255), IN `rua_endereco` VARCHAR(255), IN `numero_endereco` INT(5), IN `bairro_endereco` VARCHAR(255), IN `cidade_endereco` VARCHAR(255), IN `cep_endereco` VARCHAR(255), IN `uf_endereco` VARCHAR(255))
BEGIN
UPDATE cliente_empresa SET nomeEmpresa_empresa='$nomeEmpresa', nomeFantasia_empresa='$nomeFantasia', cnpj_empresa='$cnpj', 
email_empresa='$email', responsavel_empresa='$responsavel', telefone_empresa='$telefone', telefoneOpc_empresa='$telefoneOpc', 
descricao_empresa='$descAtv', rua_endereco='$endereco', numero_endereco='$numero', bairro_endereco='$bairro', cidade_endereco='$cidade',
cep_endereco='$cep', uf_endereco='$uf' WHERE id_empresa ='$id';
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-12  1:40:29
