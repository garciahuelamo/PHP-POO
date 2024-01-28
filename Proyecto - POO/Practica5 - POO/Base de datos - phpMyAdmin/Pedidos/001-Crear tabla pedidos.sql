CREATE TABLE pedidos
(
    id INT(10) NOT NULL AUTO_INCREMENT, 
    idCliente INT(10) NOT NULL,
    fecha DATE NOT NULL,
    tipo VARCHAR (50) NOT NULL,
    valor_eur DOUBLE (10,0) NOT NULL,
    peso_kg DOUBLE (10,0) NOT NULL,
    destino VARCHAR (50) NOT NULL,
    idTransportista INT (10) NOT NULL,
    FOREIGN KEY (idCliente) REFERENCES clientes(id),
    FOREIGN KEY (idTransportista) REFERENCES transportistas(id),
    PRIMARY KEY (id)

)

ENGINE = InnoDB