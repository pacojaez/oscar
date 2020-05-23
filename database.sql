
DROP DATABASE IF EXISTS framework2020;

CREATE DATABASE framework2020 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE framework2020;
--
-- TABLA usuarios
--

CREATE TABLE usuarios (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  usuario varchar(32) NOT NULL UNIQUE KEY,
  clave varchar(32) NOT NULL,
  nombre varchar(32) NOT NULL,
  apellido1 varchar(32) NOT NULL DEFAULT '',
  apellido2 varchar(32) NOT NULL DEFAULT '',
  privilegio int(11) NOT NULL DEFAULT 0,
  administrador tinyint(1) NOT NULL DEFAULT 0,
  email varchar(128) NOT NULL UNIQUE KEY,
  imagen varchar(512) DEFAULT NULL,
  created_at timestamp NOT NULL DEFAULT current_timestamp(),
  updated_at timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB;

--
-- DATOS DE LA TABLA usuarios
-- Solamente hay un usuario 'admin' con password '1234'

INSERT INTO usuarios (id, usuario, clave, nombre, apellido1, apellido2, privilegio, administrador, email, imagen, created_at, updated_at) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'Administrador', 'Todopoderoso', '', 1000, 1, 'admin@biblio.local', NULL, '2020-02-17 11:56:24', NULL);
