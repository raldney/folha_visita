

CREATE DATABASE IF NOT EXISTS  LIVRO_VISITA;
USE LIVRO_VISITA;
CREATE TABLE IF NOT EXISTS `mensagem` (

  `id_mensagem` int(10) unsigned NOT NULL AUTO_INCREMENT,

  `id_usuario` int(11) DEFAULT NULL,

  `ctd_mensagem` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,

  `data_mensagem` varchar(10) NOT NULL,

   PRIMARY KEY (`id_mensagem`),

  KEY `id_usuario` (`id_usuario`)

) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=173;


CREATE TABLE IF NOT EXISTS `usuario` (

  `id_usuario` int(10) unsigned NOT NULL AUTO_INCREMENT,

  `nome_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,

  `email_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,

  `senha_usuario` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,

  `site_usuario` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,

  PRIMARY KEY (`id_usuario`),

  UNIQUE KEY `id_usuario` (`id_usuario`)

) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;