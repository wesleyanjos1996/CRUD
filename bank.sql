create database if not exists crud default character set = utf8mb4 default collate = utf8mb4_unicode_ci;

create table if not exists clientes
(
idcliente smallint unsigned not null auto_increment,
nome varchar(255) not null,
sobrenome varchar(255) not null,
email varchar(255),
nascimento date,
created_at timestamp,
updated_at timestamp,
constraint pk_clientes primary key(idcliente)
) default charset = utf8mb4 default collate = utf8mb4_unicode_ci engine = InnoDB;

select * from crud.clientes;