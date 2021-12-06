/*tabla policlinica*/
CREATE TABLE `sigmed`.`policlinica` (
  `codPoliclinica` INT NOT NULL AUTO_INCREMENT,
  `nombrePoliclinica` VARCHAR(45) NOT NULL,
  `contactoPoliclinica` VARCHAR(10) NULL,
  `ubicacionPoliclina` VARCHAR(60) NULL,
  `horaApertura` time NULL,
  `horaCierre` time NULL,
   PRIMARY KEY (`codPoliclinica`));

/*tabla especialidad*/
CREATE TABLE `sigmed`.`especialidad`(
   `codEspecialidad` INT NOT NULL AUTO_INCREMENT,
   `nombreEspecialidad` VARCHAR(45) NOT NULL,
   `descripEspecialidad` VARCHAR(45) NULL,
   PRIMARY KEY (`codEspecialidad`));
  
/*tabla usuario*/
CREATE TABLE `sigmed`.`usuario`(
   `codUser` INT NOT NULL AUTO_INCREMENT,
   `tipo` CHAR(1) NOT NULL,
   `emailUser` VARCHAR(45) NOT NULL UNIQUE,
   `password` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`codUser`));


/*tabla medico*/
CREATE TABLE `sigmed`.`medico`(
   `codMedico` INT NOT NULL AUTO_INCREMENT,
   `nombreMedico` VARCHAR(45) NOT NULL,
   `apellidoMedico` VARCHAR(45) NOT NULL,
   `cedMedico` VARCHAR(12) NOT NULL,
   `descripMedico` VARCHAR(45) NOT NULL,
   `codPoliclinica` INT NOT NULL,
   `codEspecialidad` INT NOT NULL,
`codUser` INT NOT NULL,
    PRIMARY KEY (`codMedico`));
    
ALTER TABLE `sigmed`.`medico` 
ADD INDEX `Medico_codUser_FK_idx` (`codUser`);
ALTER TABLE `sigmed`.`medico` 
ADD CONSTRAINT `Medico_codUser_FK`
  FOREIGN KEY (`codUser`)
  REFERENCES `sigmed`.`usuario` (`codUser`)
  ON DELETE CASCADE
  ON UPDATE CASCADE;


ALTER TABLE `sigmed`.`medico` 
ADD INDEX `Medico_codPoliclinica_FK_idx` (`codPoliclinica`);
ALTER TABLE `sigmed`.`medico` 
ADD CONSTRAINT `Medico_codPoliclinica_FK`
  FOREIGN KEY (`codPoliclinica`)
  REFERENCES `sigmed`.`policlinica` (`codPoliclinica`)
  ON DELETE CASCADE
  ON UPDATE CASCADE;
  
ALTER TABLE `sigmed`.`medico` 
ADD INDEX `Medico_codEspecialidad_FK_idx` (`codEspecialidad`);
ALTER TABLE `sigmed`.`medico` 
ADD CONSTRAINT `Medico_codEspecialidad_FK`
  FOREIGN KEY (`codEspecialidad`)
  REFERENCES `sigmed`.`especialidad` (`codEspecialidad`)
  ON DELETE CASCADE
  ON UPDATE CASCADE;
  
 /*tabla paciente*/
 CREATE TABLE `sigmed`.`paciente`(
   `cedPaciente` VARCHAR(12) NOT NULL,
   `nombrePaciente` VARCHAR(45) NOT NULL,
   `apellidoPaciente` VARCHAR(45) NOT NULL,
   `fechaNac` DATE NOT NULL,
   `codUser` INT NOT NULL,
   PRIMARY KEY (`cedPaciente`));

ALTER TABLE `sigmed`.`paciente` 
ADD INDEX `Paciente_codUser_FK_idx` (`codUser`);
ALTER TABLE `sigmed`.`paciente` 
ADD CONSTRAINT `Paciente_codUser_FK`
  FOREIGN KEY (`codUser`)
  REFERENCES `sigmed`.`usuario` (`codUser`)
  ON DELETE CASCADE
  ON UPDATE CASCADE;


/*tabla horario*/
 CREATE TABLE `sigmed`.`horario` (
   `codHora` INT NOT NULL,
   `hora`  TIME NOT NULL,
   PRIMARY KEY (`codHora`));

 
/*tabla cita*/
 CREATE TABLE `sigmed`.`cita` (
   `fecha` DATE NOT NULL,
   `codHora`  INT NOT NULL,
  `codMedico`  INT NOT NULL,
  `cedPaciente`  INT NOT NULL,
   PRIMARY KEY (`codMedico`, `cedPaciente`, `fecha`, `codHora`));
   
ALTER TABLE `sigmed`.`cita` 
ADD INDEX `Cita_codMedico_FK_idx` (`codMedico`);
ALTER TABLE `sigmed`.`cita` 
ADD CONSTRAINT `Cita_codMedico_FK`
      FOREIGN KEY (`codMedico`)
      REFERENCES `sigmed`.`medico` (`codMedico`)
      ON DELETE CASCADE
      ON UPDATE CASCADE;


ALTER TABLE `sigmed`.`cita` 
ADD INDEX `Cita_cedPaciente_FK_idx` (`cedPaciente`);
ALTER TABLE `sigmed`.`cita` 
ADD CONSTRAINT `Cita_cedPaciente_FK`
      FOREIGN KEY (`cedPaciente`)
      REFERENCES `sigmed`.`paciente` (`cedPaciente`)
      ON DELETE CASCADE
      ON UPDATE CASCADE;

ALTER TABLE `sigmed`.`cita` 
ADD INDEX `Cita_codHora_FK_idx` (`codHora`);
ALTER TABLE `sigmed`.`cita` 
ADD CONSTRAINT `Cita_codHora_FK`
      FOREIGN KEY (`codHora`)
      REFERENCES `sigmed`.`horario` (`codHora`)
      ON DELETE CASCADE
      ON UPDATE CASCADE;

/////
