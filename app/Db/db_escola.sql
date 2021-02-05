create database if not exists db_escola;
use db_escola;

CREATE TABLE usuario(
	idUsuario INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50),
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(128) NOT NULL,
    PRIMARY KEY (idUsuario)
);

CREATE TABLE aluno(
	idAluno		int not null auto_increment,
	nome		varchar(100) not null,
    cpf			varchar(11) not null,
    endereco	varchar(200),
	pacote		varchar(4) not null,
    modo        enum('o','p'),
    contrato    varchar(500),
    PRIMARY KEY (idAluno)
);

CREATE TABLE aulas(
	idAulas		    int not null auto_increment,
    numero          int not null,
    dataaula		date not null,
    dia		        varchar(20) not null,
    horario	        time not null,
	nomeAluno       varchar(100) not null,
    tipo            varchar(100),
    PRIMARY KEY (idAulas)
);

INSERT INTO usuario(nome,email,senha) VALUES ('Euzeni Lodi Traynor', 'euzeni@yahoo.com', 'senha123');

