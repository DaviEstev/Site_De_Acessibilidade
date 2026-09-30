create database site_dislexia;
use site_dislexia;

create table login(
	id INT NOT NULL UNIQUE PRIMARY KEY,
    email VARCHAR(50) NOT NULL,
    senha VARCHAR(50) NOT NULL
    );
    
insert into login values
(DEFAULT, "davi.e.silva9@aluno.senai.br", "12345678");


    