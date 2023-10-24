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