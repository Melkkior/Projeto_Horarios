CREATE DATABASE IF NOT EXISTS SistemaAvisosIFAM;
USE SistemaAvisosIFAM;

CREATE TABLE CGE (
    id_CGE INT PRIMARY KEY AUTO_INCREMENT,
    nome_cge VARCHAR(45),
    login_cge VARCHAR(45),
    senha_cge VARCHAR(45)
);

CREATE TABLE Materia (
    id_materia INT PRIMARY KEY AUTO_INCREMENT,
    nome_materia VARCHAR(45),
    codigo_materia VARCHAR(45),
    professor_materia VARCHAR(45)
);

CREATE TABLE Horario (
    id_Horario INT PRIMARY KEY AUTO_INCREMENT,
    dia_semana_Horario VARCHAR(45),
    hora_inicio_Horario TIME,
    hora_final_Horario TIME,
    Sala_horario VARCHAR(45),
    Materia_id_materia INT,
    FOREIGN KEY (Materia_id_materia) REFERENCES Materia(id_materia)
);

CREATE TABLE Aviso (
    id_Aviso INT PRIMARY KEY AUTO_INCREMENT,
    nome_aviso VARCHAR(45),
    conteudo_aviso VARCHAR(45),
    datapostagem_aviso DATE,
    CGE_id_CGE INT,
    Horario_id_Horario INT,
    Horario_Materia_id_materia INT,

    FOREIGN KEY (CGE_id_CGE) REFERENCES CGE(id_CGE),
    FOREIGN KEY (Horario_id_Horario) REFERENCES Horario(id_Horario),
    FOREIGN KEY (Horario_Materia_id_materia) REFERENCES Materia(id_materia)
);