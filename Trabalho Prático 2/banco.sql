CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(20),
    endereco VARCHAR(255)
);

CREATE TABLE Campeonatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    local VARCHAR(100),
    data_inicio DATE,
    data_termino DATE
);
INSERT INTO Campeonatos (nome, local, data_inicio, data_termino)
VALUES ('Campeonato de Futebol', 'Estádio Municipal', '2024-07-01', '2024-08-15');

CREATE TABLE Times (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cidade_origem VARCHAR(100),
    numero_jogadores INT
);
INSERT INTO Times (nome, cidade_origem, numero_jogadores)
VALUES ('Time A', 'Cidade A', 15);

INSERT INTO Times (nome, cidade_origem, numero_jogadores)
VALUES ('Time B', 'Cidade B', 18);