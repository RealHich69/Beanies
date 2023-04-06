-- 1
SELECT ville, pays, nom_prenom FROM client;

-- 2 
SELECT * FROM client WHERE pays = 'France';

-- 3
SELECT * FROM produit ORDER BY prix DESC;

-- 4
SELECT * FROM commande LIMIT 10;
SELECT * FROM commande LIMIT 10 OFFSET 10;

-- 5
SELECT * FROM fournisseur WHERE ville = 'Annecy'
UNION
SELECT * FROM fournisseur WHERE ville = 'Sydney';

--6
SELECT * FROM `produit` WHERE nom LIKE "%Tofu%" AND nom NOT LIKE "%Crab%" AND categorie_id IS NOT NULL;

-- 7 
SELECT produit.nom, produit.prix FROM produit INNER JOIN categorie ON produit.categorie_id = categorie.id
WHERE categorie_id IS NOT NULL;

-- 8
SELECT * FROM client WHERE ville != 'Versailles' AND id BETWEEN 15 AND 25;

-- 9
SELECT * FROM produit INNER JOIN categorie ON produit.categorie_id = categorie.id
AND categorie_id IS NOT NULL
WHERE fournisseur_id = 16 
OR (categorie.id IN(2,6,4 OR 8))
AND prix BETWEEN 10 AND 20
AND categorie.nom LIKE "%e"
ORDER BY categorie.nom DESC;

-- 10
SELECT * FROM fournisseur LEFT JOIN produit ON produit.fournisseur_id = fournisseur.id
WHERE produit.fournisseur_id IS NULL LIMIT 50;

-- 13
SELECT * FROM fournisseur WHERE pays = (
        SELECT pays FROM fournisseur WHERE nom = 'BigShop'
    );
    
-- 19
DELETE FROM expediteur WHERE id = 1;
DELETE FROM expediteur WHERE id = 2;

-- 17

INSERT INTO categorie (id, nom)
VALUES ('9', 'Sugar');

INSERT INTO fournisseur (nom)
VALUES ('Haribo');

INSERT INTO produit (id, nom, unite, prix, categorie, fournisseur)
VALUES ('78', 'Tagada strawberry', 'Box of 210 Candies', '9.90', 'Sugar', 'Haribo');