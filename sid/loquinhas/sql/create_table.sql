CREATE TABLE `db_ti95`.`tb_login` (
    "id" INT UNSIGNED NOT NULL AUTO_INCREMENT ,
    "nome" VARCHAR(50) NOT NULL ,
    "login" VARCHAR(50) NOT NULL ,
    "senha" VARCHAR(50) NOT NULL ,
    PRIMARY KEY (`id`)) ENGINE = InnoDB;