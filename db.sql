
-- Criação do banco de dados
CREATE DATABASE Padaria;
USE Padaria;

-- Tabela Comprador
CREATE TABLE Comprador (
    id INT (11) AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    endereco TEXT NOT NULL
);

-- Tabela Venda
CREATE TABLE Venda (
    id INT (11) AUTO_INCREMENT PRIMARY KEY,
    data DATE NOT NULL,
    id_comprador INT (11) NOT NULL,
    itens_venda VARCHAR (50) NOT NULL,
    FOREIGN KEY (id_comprador) REFERENCES Comprador(id)
);

-- Tabela ItemVenda
CREATE TABLE ItemVenda (
    id INT (11) AUTO_INCREMENT PRIMARY KEY,
    id_venda INT (11) NOT NULL,
    id_produto INT (11) NOT NULL,
    quantidade INT (100) NOT NULL,
    subtotal DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (id_venda) REFERENCES Venda(id),
);