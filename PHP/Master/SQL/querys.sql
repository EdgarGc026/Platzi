/* 
 * Creando una tabla
    Campos necesarios:
        ID, Name, LastName, Email, Password
    Tipo de datos:
        //LOS DE BATALLA, TODA LA VIDA.
        int(n caracteres) ENTERO (MAX 255)
        INTEGER(n caracteres) ENTERO (MAX 4294967295)
        FLOAT(n cifras, num de decimales) DECIMAL/FLOTANTE
        VARCHAR(n caracteres) STRING/ALFANUMERICO (MAX 255)
        CHAR(n caracteres) STRING/ALFANUMERICO
        DATE, TIME, TIMESTAPM 
        
        //STRING MAS GRANDES
        TEXT(MAX 65,535 CARACTERES)
        MEDIUMTEXT(16 MILLONES DE CARACTERES)
        LONGTEXT(16 BILLONES DE CARACTERES)
        
        //ENTEROS MAS GRANDES
        MEDIUMINT
        BIGINT
 */
/* Creamos la tabla en la bd */
 CREATE TABLE users(
     id         INT(11),
     firstname  VARCHAR(100),
     lastname   VARCHAR(255),
     email      VARCHAR(100),
     password   VARCHAR(255)
 );

 /* Crear la tabla con restricciones de integridad. 
    * NOT NULL: impide que el campo sea nulo. Siempre debes meter un dato.
    * NULL el campo puede ser nulo.
    AUTO_INCREMENT el id (en este caso entero) ira aumentando +1 automaticamente
    CONSTRAINT dictas que campo puede ser usado para PK o FK
 */
 CREATE TABLE users(
     id         INT(11) AUTO_INCREMENT NOT NULL,
     firstname  VARCHAR(100) NOT NULL,
     lastname   VARCHAR(255) DEFAULT 'Benito',
     email      VARCHAR(100) NOT NULL,
     password   VARCHAR(255),
     CONSTRAINT pk_users PRIMARY KEY(id)
 );


/* Si deseamos insertar datos en la tabla */
 INSERT INTO users(id, firstname, lastname, email, password) 
    VALUES ('1', 'Edgar',  'Ramon' ,'edg026@mail.com', 'hola0123'),
           ('2', 'Alberto', 'Perez' ,'alpe@mail.com', 'hola0231');

/* Para eliminar la tabla */
DROP TABLE users;

/* Modificar tablas y columnas */
ALTER TABLE users RENAME TO users_rename;

-- Cambiar el nombre de una columna
ALTER TABLE users_rename CHANGE lastname secondname VARCHAR(100) NULL;
ALTER TABLE users_rename CHANGE secondname lastname VARCHAR(100) NULL;

-- Modificar columna sin cambiar nombre
ALTER TABLE users_rename MODIFY lastname char(50) NOT NULL;

-- Añadir una nueva columna.
ALTER TABLE users_rename ADD website VARCHAR (100) NOT NULL;

-- Añadir restriccion a las columnas
ALTER TABLE users_rename ADD CONSTRAINT unique_email UNIQUE(email);

-- Borrar una columna
ALTER TABLE users_rename DROP website;

-- Remover una tabla
ALTER TABLE users 