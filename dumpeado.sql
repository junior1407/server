CREATE DATABASE  IF NOT EXISTS `financeiro` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `financeiro`;
-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: financeiro
-- ------------------------------------------------------
-- Server version	5.6.26

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
-- Table structure for table `acessor`
--

DROP TABLE IF EXISTS `acessor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acessor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `apelido` varchar(45) DEFAULT NULL,
  `data_admissao` date DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `pathImage` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acessor`
--

LOCK TABLES `acessor` WRITE;
/*!40000 ALTER TABLE `acessor` DISABLE KEYS */;
INSERT INTO `acessor` VALUES (1,'Jaisler da Silva Sauro','jaisler','0000-00-00',1,NULL),(2,'Marcos','marquinhos',NULL,1,NULL);
/*!40000 ALTER TABLE `acessor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ligacao`
--

DROP TABLE IF EXISTS `ligacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ligacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grau_interesse` int(11) DEFAULT NULL COMMENT '3 - Alto\n2 - Medio\n1 - Baixo\n0 - Não Atendeu',
  `data` datetime DEFAULT NULL,
  `situacao` int(11) DEFAULT NULL COMMENT '0 - Agendado\n1 - Não Atendeu',
  `observacao` varchar(500) DEFAULT NULL,
  `id_acessor` int(11) DEFAULT NULL,
  `id_pessoa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_ligacao_acessor_idx` (`id_acessor`),
  KEY `id_ligacao_pessoa_idx` (`id_pessoa`),
  CONSTRAINT `id_ligacao_acessor` FOREIGN KEY (`id_acessor`) REFERENCES `acessor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_ligacao_pessoa` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ligacao`
--

LOCK TABLES `ligacao` WRITE;
/*!40000 ALTER TABLE `ligacao` DISABLE KEYS */;
INSERT INTO `ligacao` VALUES (1,1,'0000-00-00 00:00:00',1,'1',1,NULL),(2,2,'2015-11-16 22:29:01',0,'GG IZI',2,1),(5,0,'2015-11-16 22:43:22',0,'',2,7);
/*!40000 ALTER TABLE `ligacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_acessor`
--

DROP TABLE IF EXISTS `login_acessor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_acessor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `idacessor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_loginacessor_acessor_idx` (`idacessor`),
  CONSTRAINT `id_loginacessor_acessor` FOREIGN KEY (`idacessor`) REFERENCES `acessor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_acessor`
--

LOCK TABLES `login_acessor` WRITE;
/*!40000 ALTER TABLE `login_acessor` DISABLE KEYS */;
INSERT INTO `login_acessor` VALUES (1,'jaisler','202cb962ac59075b964b07152d234b70',1),(2,'marcos','202cb962ac59075b964b07152d234b70',2);
/*!40000 ALTER TABLE `login_acessor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logins`
--

DROP TABLE IF EXISTS `logins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(45) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `idacessor` int(11) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_login_acessor_idx` (`idacessor`),
  CONSTRAINT `id_login_acessor` FOREIGN KEY (`idacessor`) REFERENCES `acessor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logins`
--

LOCK TABLES `logins` WRITE;
/*!40000 ALTER TABLE `logins` DISABLE KEYS */;
INSERT INTO `logins` VALUES (1,'jaisler','202cb962ac59075b964b07152d234b70',1,1),(2,'marcos','202cb962ac59075b964b07152d234b70',2,1);
/*!40000 ALTER TABLE `logins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pessoa`
--

DROP TABLE IF EXISTS `pessoa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pessoa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) DEFAULT NULL,
  `numero` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pessoa`
--

LOCK TABLES `pessoa` WRITE;
/*!40000 ALTER TABLE `pessoa` DISABLE KEYS */;
INSERT INTO `pessoa` VALUES (1,'Valdir','996813667'),(2,'Eduardo Matos','996018950'),(7,'Diablo','666');
/*!40000 ALTER TABLE `pessoa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telefone`
--

DROP TABLE IF EXISTS `telefone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telefone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(45) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='	';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telefone`
--

LOCK TABLES `telefone` WRITE;
/*!40000 ALTER TABLE `telefone` DISABLE KEYS */;
/*!40000 ALTER TABLE `telefone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'financeiro'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-16 22:47:36
