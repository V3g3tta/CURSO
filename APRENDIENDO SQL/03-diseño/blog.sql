CREATE TABLE usuarios(
id           int(255) auto_increment not null, 
nombre       varchar(100) not null,
apellido     varchar(100) not null,
email        varchar(100) not null,
contraseña   varchar(100) not null,
fecha        date not null,
constraint pk_usuarios primary key(id),
constraint up_email unique(email)
)engine=innoDb;

CREATE TABLE categorias(
id           int(255) auto_increment not null, 
nombre       varchar(100) not null,
constraint pk_usuarios primary key(id)
)engine=innoDb;


CREATE TABLE entradas(
id           int(255) auto_increment not null, 
usuario_id   int(255) not null, 
categoria_id int(255) not null,
titulo       varchar(255) not null,
descripcion  MEDIUMTEXT,
fecha        date not null,
constraint pk_usuarios primary key(id),
constraint fk_entrada_usuario FOREIGN key(usuario_id) references usuarios(id),
constraint fk_entrada_categoria FOREIGN key(categoria_id) references categorias(id) 
)engine=innoDb;