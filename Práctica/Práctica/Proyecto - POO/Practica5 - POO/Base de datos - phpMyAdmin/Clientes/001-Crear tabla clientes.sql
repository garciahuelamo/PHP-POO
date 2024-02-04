CREATE TABLE clientes
(
    id INT(10) NOT NULL AUTO_INCREMENT, 
    nombre VARCHAR(50) NOT NULL,
    cif VARCHAR (50) NOT NULL,
    direccion VARCHAR (50) NOT NULL,
    cp INT (10) NOT NULL,
    horario VARCHAR (50) NOT NULL,
    telefono INT (20) NOT NULL,
    imagen VARCHAR (50) NOT NULL,
    PRIMARY KEY (id)

)

ENGINE = InnoDB
