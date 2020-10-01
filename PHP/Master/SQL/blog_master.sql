CREATE DATABASE blog_master;
USE blog_master;

/* Primer version */
/* CREATE TABLE users (
    id          INT(255) AUTO_INCREMENT NOT NULL,
    name        VARCHAR(100) NOT NULL,
    lastname    VARCHAR(100) NOT NULL,
    email       VARCHAR(255) NOT NULL,
    password    VARCHAR(255) NOT NULL,
    dates       DATE NOT NULL,
    CONSTRAINT pk_users PRIMARY KEY(id)
);

CREATE TABLE categories(
    id          INT(255) AUTO_INCREMENT NOT NULL,
    name        VARCHAR(255),
    CONSTRAINT  pk_categories PRIMARY KEY(id)
);

CREATE TABLE posts(
    id              INT(255) AUTO_INCREMENT NOT NULL,
    user_id         INT(255) NOT NULL,
    category_id     INT(255) NOT NULL,
    title           VARCHAR(255) NOT NULL,
    description     MEDIUMTEXT,
    dates           DATE NOT NULL,
    CONSTRAINT pk_posts PRIMARY KEY(id),
    CONSTRAINT fk_posts_user FOREIGN KEY(user_id) 
        REFERENCES users(id),
    CONSTRAINT fk_posts_categories FOREIGN KEY(category_id) 
        REFERENCES categories(id),
); */

/* Tipos de Engine
    InnoDB permite transacciones, estricto, ideal para el insert, update.
    MYISAM, recomendable para apps que hacen muchisimos select, no mantiene integridad referencial.
 */

/* Segunda version */

/* CREATE TABLE users (
    id          INT(255) AUTO_INCREMENT NOT NULL,
    name        VARCHAR(100) NOT NULL,
    lastname    VARCHAR(100) NOT NULL,
    email       VARCHAR(255) NOT NULL,
    password    VARCHAR(255) NOT NULL,
    dates       DATE NOT NULL,
    CONSTRAINT pk_users PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDB;

CREATE TABLE categories(
    id          INT(255) AUTO_INCREMENT NOT NULL,
    name        VARCHAR(255),
    CONSTRAINT  pk_categories PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE posts(
    id              INT(255) AUTO_INCREMENT NOT NULL,
    user_id         INT(255) NOT NULL,
    category_id     INT(255) NOT NULL,
    title           VARCHAR(255) NOT NULL,
    description     MEDIUMTEXT,
    dates           DATE NOT NULL,
    CONSTRAINT pk_posts PRIMARY KEY(id),
    CONSTRAINT fk_post_user FOREIGN KEY(user_id) REFERENCES users(id),
    CONSTRAINT fk_post_category FOREIGN KEY(category_id) REFERENCES categories(id) ON DELETE CASCADE
)ENGINE=InnoDB; */

/* Uso del CASCADE */
CREATE TABLE users (
    id          INT(255) AUTO_INCREMENT NOT NULL,
    name        VARCHAR(100) NOT NULL,
    lastname    VARCHAR(100) NOT NULL,
    email       VARCHAR(255) NOT NULL,
    password    VARCHAR(255) NOT NULL,
    dates       DATE NOT NULL,
    CONSTRAINT pk_users PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDB;

CREATE TABLE categories(
    id          INT(255) AUTO_INCREMENT NOT NULL,
    name        VARCHAR(255),
    CONSTRAINT  pk_categories PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE posts(
    id              INT(255) AUTO_INCREMENT NOT NULL,
    user_id         INT(255) NOT NULL,
    category_id     INT(255) NOT NULL,
    title           VARCHAR(255) NOT NULL,
    description     MEDIUMTEXT,
    dates           DATE NOT NULL,
    CONSTRAINT pk_posts PRIMARY KEY(id),
    CONSTRAINT fk_post_user FOREIGN KEY(user_id) REFERENCES users(id) ON DELETE SET NULL,
    CONSTRAINT fk_post_category FOREIGN KEY(category_id) REFERENCES categories(id) ON UPDATE CASCADE
)ENGINE=InnoDB;

/* Algunas variantes */
-- ON DELETE CASCADE
-- ON DELETE SET DEFAULT
-- ON DELETE SET NO ACTION
-- ON UPDATE CASCADE

/* Insertar datos */
INSERT INTO users VALUES(
    NULL, 
    'Edgar', 
    'Ramon', 
    'edgar@mail.com', 
    'edgar123', 
    '2020-05-26'
    );

INSERT INTO users VALUES(
    NULL,
    'Pedro',
    'Porro',
    'pp@mail.com',
    'pepo123',
    '2020-08-12'
);


INSERT INTO users VALUES(
    NULL,
    'Leonel',
    'Antonio',
    'leoan@mail.com',
    'lean123',
    '202-04-23'
);

/* Insertar filas solo con ciertas columnas.. */
INSERT INTO users (email, password) VALUES('anon@mail.com', 'anon123');

/* Consultas con SELECT */
-- Muestre todos los registros / Filas de una tabla
SELECT name, lastname, email FROM users;

-- Mostrar todos los campos
SELECT * FROM users;

-- Otra manera
SELECT name, lastname, email, password, dates FROM users;

/* Operadores aritmenticos */

SELECT email, (4+7) FROM users;
SELECT email, (7+7) AS 'operation' FROM users;
SELECT email, (7-7) AS 'operation' FROM users;
SELECT email, (7*7) AS 'operation' FROM users;
SELECT email, (7/7) AS 'operation' FROM users;

-- Ordenar los campos.
SELECT id, email, (7/7) AS 'operation' FROM users ORDERE BY id;

-- Operaciones con columnas
SELECT id, email, (id + 5) AS 'operation' FROM users;


/* Funciones matematicas */

-- Valor absoluto
SELECT ABS(7) AS 'operation' FROM users;

-- Redondeo de decimales a la alza 
SELECT CEIL(7.36) AS 'operation' FROM users;

-- Redondeo de decimales a la baja
SELECT FLOOR(7.36) AS 'operation' FROM users;

-- PI
SELECT PI() AS 'operation' FROM users;

-- RAND
SELECT RAND() AS 'operation' FROM users;

-- ROUND redondea y puedes decirle cuantos decimales mostrar
SELECT ROUND(7.35, 1) AS 'operation' FROM users;

-- Raiz cuadrada
SELECT SQRT(5) AS 'operation' FROM users;

-- TRUNCATE
SELECT TRUNCATE(5.54, 0) AS 'operation' FROM users;
SELECT TRUNCATE(5.54, 1) AS 'operation' FROM users;
SELECT TRUNCATE(id, 2) AS 'operation' FROM users;

/* Funciones para textos */
SELECT name FROM users;

-- Sacar los nombres en mayuscula UPPER
SELECT UPPER(name) FROM users;

-- Sacar los nombres en minuscula LOWER
SELECT LOWER(name) FROM users;

-- Concatenar una variable con otra CONCAT
SELECT CONCAT(name, ' ', lastname) FROM users;
SELECT CONCAT(name, ' ', lastname) AS  'completo' FROM users;

SELECT UPPER(CONCAT(name, ' ', lastname)) AS  'completo' FROM users;

-- Funcion LENGTH, longitud de la cadena de texto
SELECT email, LENGTH(CONCAT(name, ' ', lastname)) AS  'completo' FROM users;

-- Funcion TRIM, elimina espacios.
SELECT TRIM(CONCAT('  ', name, ' ', lastname, '  ')) AS  'completo' FROM users;