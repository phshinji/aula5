create schema if not exists segver;

use segver; 

create or replace table tb_usuarios(
    id int primary key auto_increment,
    nome varchar(150),
    email varchar(255),
    cpf varchar(20),
    rg varchar(20)
);

insert into tb_usuarios values 
(null, 'Luis', 'luis@gmail.com', '123.456.789-00', '12.345.678-1'),
(null, 'Aline', 'aline@gmail.com', '123.456.789-01', '12.345.678-2'),
(null, 'Anna', 'anna@gmail.com', '123.456.789-02', '12.345.678-3'),
(null, 'João Pedro', 'joaop@gmail.com', '123.456.789-03', '12.345.678-4'),
(null, 'Marcele', 'marcele@gmail.com', '123.456.789-04', '12.345.678-5'),
(null, 'Paulo', 'paulo@gmail.com', '123.456.789-05', '12.345.678-6'),
(null, 'Ricardo', 'ricardo@gmail.com', '123.456.789-06', '12.345.678-7');