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
   `passwordUser` VARCHAR(255) NOT NULL,
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

-----------------------------------------------------INSERCIÓN DE DATOS---------------------------------------------------

INSERT INTO policlinica(nombrePoliclinica, contactoPoliclinica, ubicacionPoliclinica, horaApertura, horaCierre)
values
   ('Policlínica Presidente Remón', '503-3330', 'C. 17 Oeste, Panamá', '7:00', '3:00'),
   ('Policlínica Dr. Carlos N. Brin', '503-1100', 'San Fransisco, Panamá', '7:00', '3:00'),
   ('Policlínica Don Generoso Guardia', '503-8348', 'Santa Librada, Panamá', '7:00', '3:00'),
   ('Policlínica Dr. Santiago Barraza', '253-3270', 'Chorrera, Panamá', '7:00', '3:00'),
   ('Policlínica Manuel María Valdés', '503-1500', 'San Miguelito, Panamá', '7:00', '3:00')


INSERT INTO especialidad(nombreEspecialidad, descripEspecialidad)
values
   ('Cardiología', 'Tratamiento de enfermedades cardiovasculares'),
   ('Medicina Interna', 'Atención al adulto, tratamiento y prevención de enfermedades'),
   ('Pediatría', 'Salud y cuidado médico de infantes, niños y adolescentes'),
   ('Ortopedia', 'Tratamiento del sistema musculoesquelético'),
   ('Obstetricia', 'Embarazo, parto y puerperio de mujeres en edad reproductiva')


INSERT INTO usuario (tipo, emailUser, passwd)
values
    ('M', 'rsantos@gmail.com', 'Kizz56OS'),
	('M', 'drarosado@gmail.com', 'vp4YcPg'),
	('M', 'dra.marti@hotmail.com', 'VOI6g5P'),
	('M', 'dr.ortegaa@live.com', 'zB5S3D8'),
	('M', 'oguirado@gmail.com', '9PF7LVD'),
	('M', 'mmorales13@hotmail.com', 'ma6kxmg'),
	('M', 'dra.ndiaz1@live.com', '454XKEP'),
	('M', 'rr.gomez@gmail.com', '85J5W82'),
	('M', 'amparof.pro@gmail.com', 'jbe6kc7'),
	('M', 'mariogrenald@hotmail.com', 'vekDBPg')


  INSERT INTO medico(nombreMedico, apellidoMedico, cedMedico, codPoliclinica, codEspecialidad, codUser)
values
   ('Rafael', 'Santos', '8-995-344','1','1', '1'),
   ('Andres', 'Rosado', '7-934-081','3','1', '2'),
   ('Adriana', 'Martí', '4-812-182','2','2', '3'),
   ('Juan', 'Ortega', '1-335-562','4','2', '4'),
   ('Oliver', 'Guirado', '3-301-2080','3','3', '5'),
   ('María', 'Morales', '8-742-1963','2','3', '6'),
   ('Natalie', 'Diaz', '9-794-2331','5','4', '7'),
   ('Ricardo', 'Gómez', '4-824-495','1','4', '8'),
   ('Amparo', 'Frias', '1-224-2357','4','5', '9'),
   ('Mario', 'Grenald', '3-706-421','5','5', '10')
