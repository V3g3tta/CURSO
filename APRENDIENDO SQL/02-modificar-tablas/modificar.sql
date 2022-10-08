#renombrar una tabla#

ALTER TABLE usuarios RENAME TO usuarios_renom;

#nombre de una columna#

ALTER TABLE usuarios_renom change apellido apellidos varchar(100) null;

#modificar columna sin cambiar nombre#
ALTER TABLE usuarios_renom MODIFY apellidos char(40) null;
#agredar columna#
ALTER TABLE usuarios_renom ADD wedsite varchar(30) null;

#agregar restricion a columna#
ALTER TABLE usuarios_renom ADD constraint uq_email unique(email);

#borrar una columna#
ALTER TABLE usuarios_renom drop wedsite;