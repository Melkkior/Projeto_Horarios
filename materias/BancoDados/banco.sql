CREATE DATABASE IF NOT EXISTS IFAM;
USE IFAM;

CREATE TABLE IF NOT EXISTS Disciplina (
    id_disciplina INT NOT NULL AUTO_INCREMENT,
    id_turma INT,
    nome_disciplina VARCHAR(45),
    professor_disciplina VARCHAR(45),
    PRIMARY KEY (id_disciplina, id_turma)
);

CREATE TABLE IF NOT EXISTS Turma (
    id_turma INT NOT NULL AUTO_INCREMENT,
    nome_turma VARCHAR(45),
    ano INT,
    PRIMARY KEY (id_turma)
);

CREATE TABLE IF NOT EXISTS Aula (
    semana VARCHAR(45),
    Turma_id_turma INT,
    Disciplina_id_disciplina INT,
    FOREIGN KEY (Turma_id_turma) REFERENCES Turma(id_turma),
    FOREIGN KEY (Disciplina_id_disciplina) REFERENCES Disciplina(id_disciplina)
);

CREATE TABLE Aviso (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    descricao TEXT NOT NULL,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
);

CREATE TABLE tempo (

    id_tempo INT AUTO_INCREMENT PRIMARY KEY,
    hora_inicio TIME NOT NULL,
    hora_fim TIME NOT NULL,
    dia_semana VARCHAR(10) NOT NULL

)