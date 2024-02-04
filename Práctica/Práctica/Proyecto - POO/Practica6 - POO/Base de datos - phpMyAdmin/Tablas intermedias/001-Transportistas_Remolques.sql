CREATE TABLE transportistas_remolques
(
    idTransportista INT(10) NOT NULL, 
    idRemolque INT(10) NOT NULL,
    PRIMARY KEY (idTransportista, idRemolque),
    FOREIGN KEY (idTransportista) REFERENCES transportistas(id),
    FOREIGN KEY (idRemolque) REFERENCES remolques(id)
)

ENGINE = InnoDB
