create database turmas;

use turmas; 

create table sala10 (
    nome varchar(25) not null, 
    sobrenome varchar(25) not null, 
    idade int not null, 
    numero int not null, 
    sexo char(1) not null
);

insert into sala10 values ('Pedro', 'Lucas', 18, 1, 'M');
insert into sala10 values ('Jõao', 'Salvador', 19, 2, 'M');
insert into sala10 values ('Maria', 'Salvador', 19, 3, 'F');