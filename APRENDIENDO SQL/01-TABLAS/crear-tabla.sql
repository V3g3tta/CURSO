

/*
crar tabla
tipo de datoss
int (numero entero)
integer (numero entero)
varchar (string)
char (string)
float (decimal)
date, time, timestamp
*/
CREATE TABLE usuarios(
id         int(11) auto_increment not null,
nombre     varchar(100) not null,
apellido   varchar(255) default'hola que tal',
email      varchar(100) not null,
contraseña varchar(255),     
constraint pk_usuarios primary key(id)
);