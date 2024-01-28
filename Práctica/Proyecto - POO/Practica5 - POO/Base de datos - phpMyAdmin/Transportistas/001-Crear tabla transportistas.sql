CREATE TABLE transportistas
(
    id INT(10) NOT NULL AUTO_INCREMENT, 
    nombre VARCHAR(50) NOT NULL,
    cif VARCHAR (50) NOT NULL,
    dir_facturacion VARCHAR (50) NOT NULL,
    dom_bancaria VARCHAR (50) NOT NULL,
    pais_status VARCHAR (3) NOT NULL,
    cp_status INT (8) NOT NULL,
    telefono INT (20) NOT NULL,
    idRemolque VARCHAR (50) NOT NULL,
    matricula_tractora VARCHAR (50) NOT NULL,
    imagen VARCHAR (50) NOT NULL,
    PRIMARY KEY (id)
)

ENGINE = InnoDB
