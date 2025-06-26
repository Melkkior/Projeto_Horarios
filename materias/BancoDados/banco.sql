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
    nome_turma VARCHAR(5),
    ano INT,
    PRIMARY KEY (id_turma)
);

CREATE TABLE IF NOT EXISTS Aula (
    semana VARCHAR(45),
    id_turma INT,
    tempo INT,
    Disciplina_id_disciplina INT,
    FOREIGN KEY (id_turma) REFERENCES Turma(id_turma),
    FOREIGN KEY (Disciplina_id_disciplina) REFERENCES Disciplina(id_disciplina)
);

CREATE TABLE  IF NOT EXISTS Aviso (
    id_aviso INT AUTO_INCREMENT,
    descricao VARCHAR(700),
    PRIMARY KEY (id_aviso)
);
