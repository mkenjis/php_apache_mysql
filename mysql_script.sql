
create table usuario (
  id int(11) auto_increment,
  nome varchar(32),
  email varchar(50),
  data_cadastro datetime,
  login varchar(20),
  senha varchar(20),
  constraint key1 primary key (id));
  
create table produto (
   id int(11) auto_increment,
   nome varchar(32),
   descricao varchar(255),
   preco_unitario decimal(10,2),
   fabricante varchar(20),
   data_cadastro datetime,
   imagem_arq varchar(255),
   constraint keyprod primary key (id));
