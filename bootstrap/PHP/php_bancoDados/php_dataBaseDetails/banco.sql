DROP DATABASE IF EXISTS banco;
CREATE DATABASE banco;
USE banco;
DROP TABLE IF EXISTS `jogos`;
CREATE TABLE IF NOT EXISTS `jogos` (
  `id` int auto_increment PRIMARY key,
  `nome` varchar(100) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL
); 

INSERT INTO jogos(nome, empresa, genero) 
    VALUES (
     'CSGO'
    ,'Valve'
    ,'FPS'
);

INSERT INTO jogos(nome, empresa, genero) 
    VALUES (
     'God of War'
    ,'Sony'
    ,'RPG'
);

INSERT INTO jogos(nome, empresa, genero) 
    VALUES (
     'League of Legends'
    ,'Riot'
    ,'MOBA'
);
