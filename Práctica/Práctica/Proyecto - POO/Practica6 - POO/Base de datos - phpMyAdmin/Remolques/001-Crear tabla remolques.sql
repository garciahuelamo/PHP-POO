CREATE TABLE remolques
(
    id INT(10) NOT NULL AUTO_INCREMENT, 
    matricula_remolque INT(10) NOT NULL,
    tipo VARCHAR (10) NOT NULL,
    fecha_matriculacion DATE NOT NULL,
    ITV DATE NOT NULL,
    PRIMARY KEY (id)
)

ENGINE = InnoDB