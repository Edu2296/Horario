CREATE DATABASE  gestor_Laboratorio_2023

USE gestor_Laboratorio_2023

CREATE TABLE laboratorio(
lab_Codigo INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
lab_CodigoLab VARCHAR(50) NOT NULL,
lab_NombreLab VARCHAR(50) NOT NULL,
lab_Pabellon VARCHAR(50) NOT NULL,
lab_Piso VARCHAR(50) NOT NULL,
lab_Aforo VARCHAR(50) NOT NULL,
lab_NumeroPC VARCHAR(50) NOT NULL,
lab_SoftwareInstalado VARCHAR(255) NOT NULL,
lab_FechaRegistro DATE 
)

INSERT INTO laboratorio (lab_CodigoLab,lab_NombreLab,lab_Pabellon,lab_Piso,lab_Aforo,lab_NumeroPc,lab_SoftwareInstalado,lab_FechaRegistro) VALUES 
("LAB 010S10","LABORATORIO 1","PABELLON I","CUARTO PISO","AFORO 31 PERSONAS", "31 PCs", "PSEINT, VSCODE, SQLSERVER", "2023-10-23"),
("LAB 010S20","LABORATORIO 2","PABELLON I","CUARTO PISO","AFORO 31 PERSONAS", "31 PCs", "REVIT, AUTOCAD, OFFICE", "2023-10-23")


CREATE TABLE curso(
    cur_Id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    cur_Nombre  VARCHAR(50) NOT NULL,
    cur_Ciclo VARCHAR(50) NOT NULL,
    cur_Aula VARCHAR(50) NOT NULL,
    cur_horas VARCHAR(50) NOT NULL
)
INSERT INTO curso (cur_Nombre,cur_Ciclo,cur_Aula,cur_horas) VALUES 
("curso 2","ciclo 1","B1","2 HORAS ACADEMICAS"),
("curso 3","ciclo 2","C1","4 HORAS ACADEMICAS")

CREATE TABLE docentes(
    doc_Id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    doc_Nombre  VARCHAR(50) NOT NULL,
    doc_Apellido VARCHAR(50) NOT NULL,
    doc_Dni CHAR(8) NOT NULL,
    doc_Carrera VARCHAR(50) NOT NULL
)
INSERT INTO docentes (doc_Nombre, doc_Apellido,doc_Dni, doc_Carrera) VALUES 
("servcwer","ssenior","13245678","ingenieria de minas"),
("server ","dock","0943210","ing. civil")

CREATE TABLE ea(
    ea_Id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    ea_Nombre  VARCHAR(50) NOT NULL,
    ea_Codgio CHAR(8) NOT NULL,
    ea_doc_Id INT UNSIGNED NOT NULL,
    ea_cur_Id INT UNSIGNED NOT NULL,
    foreign key (ea_doc_Id) references docentes(doc_Id) on delete cascade on update cascade,
    foreign key (ea_cur_Id) references curso(cur_Id) on delete cascade on update cascade
)
INSERT INTO ea (ea_Nombre, ea_Codgio,ea_doc_Id,ea_cur_Id) VALUES 
("ingenieria de sistemas y computacion","sys-09",1, 1),
("ingenieria civil","civ-10",2, 2)

CREATE TABLE horario(
  horario_id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
  horario_aula INT UNSIGNED NOT NULL,
  horario_ea INT UNSIGNED NOT NULL,
  horario_dia VARCHAR(50) NOT NULL,
  horario_hora_inicio TIME NOT NULL,
  horario_hora_fin TIME NOT NULL,
  FOREIGN KEY (horario_aula) REFERENCES laboratorio(lab_Codigo) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (horario_ea) REFERENCES ea(ea_Id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE prestamo(
  prestamo_id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
  prestamo_fecha DATE NOT NULL,
  prestamo_hora_inicio TIME NOT NULL,
  prestamo_hora_fin TIME NOT NULL,
  prestamo_laboratorio INT UNSIGNED NOT NULL,
  prestamo_docente INT UNSIGNED NOT NULL,
  prestamo_estudiante INT UNSIGNED NOT NULL,
  FOREIGN KEY (prestamo_laboratorio) REFERENCES laboratorio(lab_Codigo) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (prestamo_docente) REFERENCES docentes(doc_Id) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (prestamo_estudiante) REFERENCES estudiantes(est_Id) ON DELETE CASCADE ON UPDATE CASCADE
)
CREATE TABLE estudiantes(
  est_Id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
  est_Dni CHAR(8) NOT NULL,
  est_Nombre VARCHAR(50) NOT NULL,
  est_Apellido VARCHAR(50) NOT NULL,
  est_Carrera VARCHAR(50) NOT NULL,
  est_Semestre INT NOT NULL,
  est_Correo VARCHAR(50) NOT NULL,
  est_Telefono VARCHAR(50) NOT NULL,
  est_FechaNacimiento DATE NOT NULL,
  est_Sexo CHAR(1) NOT NULL
);