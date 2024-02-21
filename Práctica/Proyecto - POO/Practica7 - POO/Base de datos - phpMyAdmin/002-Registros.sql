CREATE TABLE `avp_enterprise`.`registros` 
(
    `identificador` INT(20) NOT NULL AUTO_INCREMENT , 
    `epoch` DATE NOT NULL , `ip` VARCHAR(255) NOT NULL , 
    `navegador` VARCHAR(255) NOT NULL , 
    `sesion` VARCHAR(255) NOT NULL , 
    PRIMARY KEY (`identificador`)
) 

ENGINE = InnoDB;