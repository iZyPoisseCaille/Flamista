-- SQLite

-- CREATE TABLES --
/*CREATE TABLE IF NOT EXISTS biere (
    num_biere INTEGER PRIMARY KEY AUTOINCREMENT,
    nom VARCHAR(50) NOT NULL,
    description VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS client (
    id_client INTEGER PRIMARY KEY AUTOINCREMENT,
    nom VARCHAR(255) NOT NULL,
    age INTEGER NOT NULL
);

CREATE TABLE IF NOT EXISTS facture (
    num_facture varchar(10) PRIMARY KEY,
    dateF date NOT NULL,
    id_client integer NOT NULL,
    FOREIGN KEY (id_client) REFERENCES client (id_client)
);*/

-- DROP TABLE IF EXISTS --
/*DROP TABLE IF EXISTS biere;
DROP TABLE IF EXISTS client;
DROP TABLE IF EXISTS facture;*/

-- INSERT INTO --

------ BIERES ------

-- ARRACHE --
REPLACE INTO biere (
    num_biere,
    nom,
    description
) VALUES (
    1,
    "Arraché",
    "L'alliance de la lavande et de la violette offre l'accompagnement parfait pour tes moments festifs et te garantit une soirée mémorable."
);

-- AVINE --
REPLACE INTO biere (
    num_biere,
    nom,
    description
) VALUES (
    2,
    "Aviné",
    "La combinaison éxotique de mangue et de goyave crée le compagnon idéal pour ajouter une touche d'exotisme à tes soirées entre amis."
);

-- EMECHE --
REPLACE INTO biere (
    num_biere,
    nom,
    description
) VALUES (
    3,
    "Eméché",
    "La pastèque associée à l'hibiscus délivre la boisson parfaite pour égayer tes moments de fête et ajouter une touche de fraîcheur à ta soirée."
);

-- IMBIBE --
REPLACE INTO biere (
    num_biere,
    nom,
    description
) VALUES (
    4,
    "Imbibé",
    "La fusion de pomme et de poire de cette bière offre une expérience légère qui ajoute une touche de convivialité à tes moments entre amis."
);

-- POMPETTE --
REPLACE INTO biere (
    num_biere,
    nom,
    description
) VALUES (
    5,
    "Pompette",
    "Avec sa saveur incroyable de framboise et de cerise, c'est la boisson qui va te faire danser sur la table et rendre ta soirée inoubliable."
);

-- TORCHE --
REPLACE INTO biere (
    num_biere,
    nom,
    description
) VALUES (
    6,
    "Torché",
    "Laisse-toi séduire par ce mélange de myrtille et de grenade, c'est la bière qui fera de tes soirées des moments mémorables."
);

-- SELECT --
SELECT * FROM biere;