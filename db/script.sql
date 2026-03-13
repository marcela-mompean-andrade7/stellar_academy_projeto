CREATE DATABASE stellar_academy;

USE stellar_academy;

CREATE TABLE usuarios (
	id INT AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(100),
	email VARCHAR(100) unique,
	senha VARCHAR(255)
);