# sistema_doctrine
Projeto do teste para a Magazord

Para começar deve ser executado o comando abaixo no terminal, para criar as relações com o banco de dados;

vendor\bin\doctrine orm:schema-tool:create

 ou

vendor\bin\doctrine dbal:run-sql 'CREATE TABLE client (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, cpf VARCHAR(255) DEFAULT NULL, created DATETIME NOT NULL, updated DATETIME NOT NULL)'
vendor\bin\doctrine dbal:run-sql 'CREATE TABLE contact (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, client INTEGER DEFAULT NULL, type INTERGER DEFAULT NULL, description VARCHAR(255) DEFAULT NULL)'
