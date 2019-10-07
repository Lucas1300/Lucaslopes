create table funcionarios (
codigo int not null primary key  (1,1),
primeiroNome varchar (50) not null,
segundoNome varchar (50),
ultimoNome varchar (50) not null,
dataNascimento date,
cpf varchar (14),
rg varchar (8),
endereco varchar (100),
cep varchar (9),
cidade varchar (30),
fone varchar (13),
codigoDepartamento int not null,
funcao varchar (20),
salario decimal (10,2)
)
