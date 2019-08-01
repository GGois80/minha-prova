CREATE DATABASE IF NOT EXISTS prova;
SHOW DATABASES;
USE prova;

CREATE TABLE IF NOT EXISTS categoria (
		id_categoria INT PRIMARY KEY AUTO_INCREMENT,
        nome 		 varchar (30)	
); 


CREATE TABLE IF NOT EXISTS prato (
		id_prato	INT PRIMARY KEY AUTO_INCREMENT,
        nome_p		varchar (50),
        preco 		varchar (25),
        descricao 	text (200),
        img			varchar (45),
        idCate 		INT NOT NULL);
        
select * from categoria;

select * from prato;