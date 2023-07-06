Create database dbBDPWA;
use dbBDPWA;

create table tbcliente(
Codigo int primary key auto_increment,
Nome varchar(50) not null,
Senha char(8) not null,
Sexo char(1) not null,
Estado char(2) not null
);
