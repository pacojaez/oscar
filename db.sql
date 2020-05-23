/*GRANT ALL PRIVILEGES ON framework2020.* TO 'alumne'@'localhost';*/

DROP DATABASE IF EXISTS framework2020;

CREATE DATABASE framework2020 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;

use framework2020;
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

CREATE TABLE categories (
id int(11) NOT NULL auto_increment primary key,
category varchar(64) NOT NULL,
created_at timestamp NOT NULL DEFAULT current_timestamp()

) ENGINE=InnoDB;

CREATE TABLE entradas (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_usuario int(11) NOT NULL,
  title varchar(128) NOT NULL,
  tags varchar(64) NOT NULL,
  subtitle varchar(128) NOT NULL DEFAULT '',
  entrada text NOT NULL DEFAULT '',
  is_draft tinyint(1) NOT NULL DEFAULT 0,
  meta_description varchar(128) NULL,
  imagen varchar(512) DEFAULT NULL,
  published_at timestamp null default current_timestamp(),
  created_at timestamp NOT NULL DEFAULT current_timestamp(),
  updated_at timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  id_category int(11) not null,

   -- definición de las claves foráneas
  FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
    ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (id_category) REFERENCES categories(id)
    ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB;

CREATE TABLE comments (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  comment text (32) NOT NULL,
  id_entrada int (11) NOT NULL,
  usuario varchar(128) not null,
  created_at timestamp NOT NULL DEFAULT current_timestamp(),

   -- definición de las claves foráneas
    FOREIGN KEY (id_entrada) REFERENCES entradas(id)
    ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB;

-- DATOS DE LA TABLA usuarios
-- Solamente hay un usuario 'admin' con password '1234'

INSERT INTO usuarios (id, usuario, clave, nombre, apellido1, apellido2, privilegio, administrador, email, imagen, created_at, updated_at) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'Administrador', 'Todopoderoso', '', 1000, 1, 'admin@biblio.local', NULL, '2020-02-17 11:56:24', NULL);

-- DATOS DE LA TABLA categories para pruebas
insert into categories (id, category, created_at) values
(1, 'Fotografía general', default),
(2, 'Photoshop', default),
(3, 'Lightroom', default),
(4, 'Experiencias', default);

-- DATOS DE LA TABLA entradas para pruebas
INSERT INTO entradas (id, id_usuario, title, tags, subtitle, entrada, is_draft, meta_description, imagen, published_at, created_at, updated_at, id_category) VALUES
(1,1,'Prueba', 'prueba, prueba, prueba', 'prueba111111111', 'Lorem ipum no se', 1, 'una entrada de prueba', 'img/blog/1.jpg', '2020-03-28 11:55:55', default, default, 1),
(2,1,'Prueba2', '2222prueba, prueba, prueba', '222222222222prueba', '2222222Lorem ipum no se', 1, '222222una entrada de prueba', 'img/blog/2.jpg', '2020-03-28 11:55:55', default, default, 2),
(3,1,'Prueb3a', '3333prueba, prueba, prueba', '333prueba', '3333Lorem ipum no se', 1, '3333una entrada de prueba', 'img/blog/3.jpg', '2020-03-28 11:55:55', default, default, 3),
(4,1,'Prueba', '3333prueba, prueba, prueba', '44444prueba', '444444Lorem ipum no se', 1, '44444una entrada de prueba', 'img/blog/4.jpg', '2020-03-28 11:55:55', default, default, 4);


insert into comments (id, id_entrada, comment, usuario, created_at)
values(1, 2, 'gran foto y gran fotografo', 'paco',default),
(2, 3, 'gran foto y gran fotografo', 'pedro',default),
(3, 4, 'gran foto y gran fotografo', 'luis',default),
(4, 2, 'gran foto y gran fotografo', 'jose',default),
(5, 2, 'gran foto y gran fotografo', 'ana',default),
(6, 2, 'gran foto y gran fotografo', 'olga',default),
(7, 3, 'gran foto y gran fotografo', 'paco',default),
(8, 1, 'gran foto y gran fotografo', 'mary',default),
(9, 1, 'gran foto y gran fotografo', 'oscar',default),
(10, 2, 'gran foto y gran fotografo', 'ariadna',default),
(11, 2, 'gran foto y gran fotografo', 'ariadna',default),
(12, 3, 'gran foto y gran fotografo', 'nuk',default),
(13, 3, 'gran foto y gran fotografo', 'nuk',default),
(14, 1, 'gran foto y gran fotografo', 'paco',default),
(15, 2, 'gran foto y gran fotografo', 'nuk',default),
(16, 2, 'gran foto y gran fotografo', 'paco',default),
(17, 3, 'gran foto y gran fotografo', 'olga',default),
(18, 1, 'gran foto y gran fotografo', 'mary',default),
(19, 1, 'gran foto y gran fotografo', 'lucas',default);
--