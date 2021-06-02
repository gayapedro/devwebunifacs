CREATE DATABASE IF NOT EXISTS loja;
USE loja;

CREATE TABLE IF NOT EXISTS enderecos (
    id VARCHAR(255) NOT NULL,
    numero VARCHAR(10) NOT NULL,
    cidade VARCHAR(100) NOT NULL,
    UF VARCHAR(15) NOT NULL,
    complemento VARCHAR(255) NOT NULL,
    cep VARCHAR(15) NOT NULL,
    logradouro VARCHAR(255) NOT NULL,
PRIMARY KEY (id));

CREATE TABLE IF NOT EXISTS clientes (
    id VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    nome VARCHAR(255),
    telefone VARCHAR(11),
    id_endereco VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    cpf VARCHAR(20) NOT NULL,
    created_at DATE NOT NULL,
    updated_at DATE NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (id_endereco) REFERENCES enderecos(id));

CREATE TABLE IF NOT EXISTS sessions (
    id VARCHAR(255) NOT NULL,
    id_cliente VARCHAR(255) NOT NULL,
    token VARCHAR(255) NOT NULL,
    status VARCHAR(10) NOT NULL,
    created_at DATE NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (id_cliente) REFERENCES clientes(id));

CREATE TABLE IF NOT EXISTS carrinhos (
    id VARCHAR(255) NOT NULL,
    created_at DATE NOT NULL,
    updated_at DATE NOT NULL,
PRIMARY KEY (id));

CREATE TABLE IF NOT EXISTS produtos (
    id VARCHAR(255) NOT NULL,
    nome VARCHAR(255) NOT NULL,
    preco INTEGER NOT NULL,
    categoria VARCHAR(255) NOT NULL,
    desconto INTEGER NOT NULL,
    created_at DATE NOT NULL,
PRIMARY KEY (id));

CREATE TABLE IF NOT EXISTS carrinho_produto (
    id VARCHAR(255) NOT NULL,
    id_carrinho VARCHAR(255) NOT NULL,
    id_produto VARCHAR(255) NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (id_carrinho) REFERENCES carrinhos(id),
FOREIGN KEY (id_produto) REFERENCES produtos(id));

CREATE TABLE IF NOT EXISTS funcionarios (
    id VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    nome VARCHAR(255),
    senha VARCHAR(255) NOT NULL,
    created_at DATE NOT NULL,
    updated_at DATE NOT NULL,
PRIMARY KEY (id));

CREATE TABLE IF NOT EXISTS compras (
    id VARCHAR(255) NOT NULL,
    id_usuario VARCHAR(255) NOT NULL,
    id_endereco_compra VARCHAR(255) NOT NULL,
    id_carrinho VARCHAR(255) NOT NULL,
    qualificacao INTEGER NULL,
    created_at DATE NOT NULL,
    updated_at DATE NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (id_usuario) REFERENCES clientes(id),
FOREIGN KEY (id_carrinho) REFERENCES carrinhos(id),
FOREIGN KEY (id_endereco_compra) REFERENCES enderecos(id));

CREATE TABLE IF NOT EXISTS comentarios (
    id VARCHAR(255) NOT NULL,
    id_compra VARCHAR(255) NOT NULL,
    texto TEXT NOT NULL,
    created_at DATE NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (id_compra) REFERENCES compras(id));

CREATE TABLE IF NOT EXISTS processos (
    id VARCHAR(255) NOT NULL,
    id_compra VARCHAR(255) NOT NULL,
    status ENUM('waiting', 'doing', 'done') NOT NULL DEFAULT 'waiting',
    stage ENUM('inicial', 'preparação', 'embalagem', 'entrega'),
    created_at DATE NOT NULL,
    updated_at DATE NOT NULL,
    id_responsavel VARCHAR(255) NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (id_compra) REFERENCES compras(id),
FOREIGN KEY (id_responsavel) REFERENCES funcionarios(id));