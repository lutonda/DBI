CREATE TABLE registo
(
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    numBI VARCHAR(50),
    nomeCompleto VARCHAR(50),
    nomePai VARCHAR(50),
    nomeMae VARCHAR(50),
    Endereco VARCHAR(50),
    Bairro VARCHAR(50),
    naturalidade INT(11) DEFAULT '1',
    provincia INT(11) DEFAULT '1',
    profissao VARCHAR(50),
    dataNascimento DATE,
    altura FLOAT,
    sexo INT(11),
    estadoCivil INT(11),
    dataEmissao TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    dataValidade DATE
);
CREATE TABLE usuario
(
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    username VARCHAR(20),
    email VARCHAR(20),
    password VARCHAR(20)
);