CREATE database minhasnotas;
USE DATABASE minhasnotas;

CREATE TABLE anotacoes(
    id_notas INT(3) AUTO_INCREMENT PRIMARY KEY,
    titulo_notas VARCHAR(25) NOT NULL,
    descricao_notas VARCHAR(150) NOT NULL   
);