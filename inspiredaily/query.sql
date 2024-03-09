CREATE TABLE Categorie (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255) NOT NULL UNIQUE
);


INSERT INTO Categorie (nome) VALUES
('Lavoro'),
('Vita'),
('Amore'),
('Sport'),
('Famiglia');


CREATE TABLE Frasi (
  id INT AUTO_INCREMENT PRIMARY KEY,
  frase TEXT NOT NULL,
  categoria_id INT,
  FOREIGN KEY (categoria_id) REFERENCES Categorie(id)
);


INSERT INTO Frasi (frase, categoria_id) VALUES
('La perseveranza è il lavoro duro che si fa dopo essere stancati del lavoro duro che si è già fatto.', 1),
('La vita è ciò che accade mentre sei impegnato a fare altri piani.', 2),
('L\'amore non guarda con gli occhi ma con l\'anima.', 3),
('Il successo non è definitivo, il fallimento non è fatale: è il coraggio di continuare che conta.', 1),
('La famiglia non è una cosa importante. È tutto.', 5);




CREATE TABLE Artista (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(30) NOT NULL,
  genere VARCHAR(20) NOT NULL
);

