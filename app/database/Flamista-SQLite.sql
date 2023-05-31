-- SQLite

-- CREATE TABLES --
CREATE TABLE IF NOT EXISTS biere (
    num_biere INTEGER PRIMARY KEY AUTOINCREMENT,
    nom VARCHAR(50) NOT NULL,
    description VARCHAR(255) NOT NULL,
    composition_1 VARCHAR(255) NOT NUll,
    composition_2 VARCHAR(255) NOT NUll,
    composition_3 VARCHAR(255) NOT NUll,
    composition_4 VARCHAR(255) NOT NUll,
    composition_5 VARCHAR(255) NOT NUll
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
);

CREATE TABLE IF NOT EXISTS teammateMMI (
    id_teammate INTEGER PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    role VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS teammateGB (
    id_teammate INTEGER PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    role VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL
);

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
    description,
    composition_1,
    composition_2,
    composition_3,
    composition_4,
    composition_5
) VALUES (
    1,
    "Arraché",
    "L'alliance de la lavande et de la violette offre l'accompagnement parfait pour tes moments festifs et te garantit une soirée mémorable.",
    "Eau : 75%",
    "Malt : 9% Pilsen ; 6.5% Pale Ale ; 0.5% Cara Gold",
    "Houblon : 0.05% Strisselspalt ; 0.03% Citra ; 0.02% Irish Moss",
    "Violette : 5.1%",
    "Lavande : 3.4%"
);

-- AVINE --
REPLACE INTO biere (
    num_biere,
    nom,
    description,
    composition_1,
    composition_2,
    composition_3,
    composition_4,
    composition_5
) VALUES (
    2,
    "Aviné",
    "La combinaison éxotique de mangue et de goyave crée le compagnon idéal pour ajouter une touche d'exotisme à tes soirées entre amis.",
    "Eau : 75%",
    "Malt : 9% Pilsen ; 6.5% Pale Ale ; 0.5% Cara Gold",
    "Houblon : 0.05% Strisselspalt ; 0.03% Citra ; 0.02% Irish Moss",
    "Goyave : 5.1%",
    "Mangue : 3.4%"
);

-- EMECHE --
REPLACE INTO biere (
    num_biere,
    nom,
    description,
    composition_1,
    composition_2,
    composition_3,
    composition_4,
    composition_5
) VALUES (
    3,
    "Eméché",
    "La pastèque associée à l'hibiscus délivre la boisson parfaite pour égayer tes moments de fête et ajouter une touche de fraîcheur à ta soirée.",
    "Eau : 75%",
    "Malt : 9% Pilsen ; 6.5% Pale Ale ; 0.5% Cara Gold",
    "Houblon : 0.05% Strisselspalt ; 0.03% Citra ; 0.02% Irish Moss",
    "Hibiscus : 5.1%",
    "Pastèque : 3.4%"
);

-- IMBIBE --
REPLACE INTO biere (
    num_biere,
    nom,
    description,
    composition_1,
    composition_2,
    composition_3,
    composition_4,
    composition_5
) VALUES (
    4,
    "Imbibé",
    "La fusion de pomme et de poire de cette bière offre une expérience légère qui ajoute une touche de convivialité à tes moments entre amis.",
    "Eau : 75%",
    "Malt : 9% Pilsen ; 6.5% Pale Ale ; 0.5% Cara Gold",
    "Houblon : 0.05% Strisselspalt ; 0.03% Citra ; 0.02% Irish Moss",
    "Poire : 5.1%",
    "Pomme : 3.4%"
);

-- POMPETTE --
REPLACE INTO biere (
    num_biere,
    nom,
    description,
    composition_1,
    composition_2,
    composition_3,
    composition_4,
    composition_5
) VALUES (
    5,
    "Pompette",
    "Avec sa saveur incroyable de framboise et de cerise, c'est la boisson qui va te faire danser sur la table et rendre ta soirée inoubliable.",
    "Eau : 75%",
    "Malt : 9% Pilsen ; 6.5% Pale Ale ; 0.5% Cara Gold",
    "Houblon : 0.05% Strisselspalt ; 0.03% Citra ; 0.02% Irish Moss",
    "Cerise : 5.1%",
    "Framboise : 3.4%"
);

-- TORCHE --
REPLACE INTO biere (
    num_biere,
    nom,
    description,
    composition_1,
    composition_2,
    composition_3,
    composition_4,
    composition_5
) VALUES (
    6,
    "Torché",
    "Laisse-toi séduire par ce mélange de myrtille et de grenade, c'est la bière qui fera de tes soirées des moments mémorables.",
    "Eau : 75%",
    "Malt : 9% Pilsen ; 6.5% Pale Ale ; 0.5% Cara Gold",
    "Houblon : 0.05% Strisselspalt ; 0.03% Citra ; 0.02% Irish Moss",
    "Myrtilles : 5.1%",
    "Grenade : 3.4%"  
);

INSERT INTO teammateMMI (
    id_teammate,
    nom,
    role,
    description
) VALUES (
    1,
    "Antoine",
    "Chef d'équipe",
    ""
);

INSERT INTO teammateMMI (
    id_teammate,
    nom,
    role,
    description
) VALUES (
    2,
    "Antoine",
    "Chef d'équipe",
    ""
);

-- SELECT --
SELECT * FROM biere;
SELECT * FROM teammate;