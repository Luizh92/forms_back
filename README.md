# forms_back
Projeto para estudos de Back-End

Criação da tabela do banco de dados:

CREATE TABLE `controle_acesso`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));