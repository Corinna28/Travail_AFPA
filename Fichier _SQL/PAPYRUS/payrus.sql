-- -SOURCE- https://www.abricocotier.fr/18749/exercices-sql-autour-de-count-order-by-et-group-by/


-- Les besoins d'affichage

--     1.Quelles sont les commandes du fournisseur n°9120 ?

SELECT fournis.numfou,numcom
FROM entcom
JOIN fournis ON fournis.numfou=entcom.numfou
WHERE fournis.numfou='9120';

-- La commande WHERE dans une requête SQL permet d’extraire les lignes d’une base de données qui respectent une condition. Cela permet d’obtenir uniquement les informations désirées.

--     2.Afficher le code des fournisseurs pour lesquels des commandes ont été passées.

SELECT DISTINCT fournis.numfou
FROM fournis 
JOIN entcom ON fournis.numfou=entcom.numfou;

-- L’utilisation de la commande SELECT en SQL permet de lire toutes les données d’une ou plusieurs colonnes. Cette commande peut potentiellement afficher des lignes en doubles. Pour éviter des redondances dans les résultats il faut simplement ajouter DISTINCT après le mot SELECT.

--     3.Afficher le nombre de commandes fournisseurs passées, et le nombre de fournisseur concernés.

SELECT count(numcom),count(distinct fournis.numfou)
FROM fournis
JOIN entcom ON fournis.numfou=entcom.numfou;

--     4.Extraire les produits ayant un stock inférieur ou égal au stock d'alerte, et dont la quantité annuelle est inférieure à 1000.

--         Informations à fournir : n° produit, libellé produit, stock actuel, stock d'alerte, quantité annuelle)

SELECT codart, libart,stkale, stkphy,qteann
FROM produit
WHERE stkphy<=stkale AND qteann<1000;

--     5.Quels sont les fournisseurs situés dans les départements 75, 78, 92, 77 ?
--         L’affichage (département, nom fournisseur) sera effectué par département décroissant, puis par ordre alphabétique.
SELECT nomfou,posfou
FROM fournis
WHERE posfou LIKE'75%' OR posfou LIKE '78%' OR posfou LIKE'92%' OR posfou LIKE'77%'
GROUP BY posfou DESC,nomfou ASC;

-- L’opérateur LIKE est utilisé dans la clause WHERE des requêtes SQL. Ce mot-clé permet d’effectuer une recherche sur un modèle particulier. Il est par exemple possible de rechercher les enregistrements dont la valeur d’une colonne commence par telle ou telle lettre. Les modèles de recherches sont multiple.

-- '%'extraira tous les noms commençant par '75'

------------------------------------------------------------------------------------------------------------------------------------

--     6.Quelles sont les commandes passées en mars et en avril ?

-- La fonction DATE() renvoie uniquement la partie date des éléments présents dans la colonne spécifiée. Sa syntaxe est la suivante :
-- SELECT DATE (derliv)
-- FROM ligcom
-- ;

-- la fonction MONTH() permet d’extraire le numéro de mois à partir d’une date au format AAAA-MM-JJ. Si la date d’entrée est par exemple ‘2014-02-03’, la valeur de retour sera ‘3’. Cela permet d’associer le numéro de mois au nom du mois (3 = Mars).

-- SELECT MONTH (derliv),numcom
-- FROM ligcom
-- ;


SELECT datcom,numcom
FROM entcom
WHERE MONTH(datcom)=3 or MONTH (datcom)= 4;





--     7.Quelles sont les commandes du jour qui ont des observations particulières ?

--         Afficher numéro de commande et date de commande

SELECT numcom,obscom
FROM entcom
WHERE obscom IS NOT NULL AND obscom <> '';


--    8. Lister le total de chaque commande par total décroissant.

--         Afficher numéro de commande et total

SELECT numcom,qtecde
FROM ligcom
ORDER BY numcom DESC;

-- La commande ORDER BY permet de trier les lignes dans un résultat d’une requête SQL. Il est possible de trier les données sur une ou plusieurs colonnes, par ordre ascendant ou descendant.



--     9.Lister les commandes dont le total est supérieur à 10000€ ; on exclura dans le calcul du total les articles commandés en quantité supérieure ou égale à 1000.

--         Afficher numéro de commande et total

SELECT numcom,qtecde
FROM ligcom
WHERE qtecde>= 10000;


--    10.Lister les commandes par nom de fournisseur.

--         Afficher nom du fournisseur, numéro de commande et date

SELECT distinct fournis.nomfou,entcom.numcom
FROM fournis
JOIN entcom ON fournis.numfou=entcom.numfou
JOIN ligcom ON entcom.numcom=ligcom.numcom;

--     11.Sortir les produits des commandes ayant le mot "urgent' en observation.

--         Afficher numéro de commande, nom du fournisseur, libellé du produit et sous total (= quantité commandée * prix unitaire)

SELECT 

--     12. Coder de 2 manières différentes la requête suivante : Lister le nom des fournisseurs susceptibles de livrer au moins un article.

-- 1ere Requete

SELECT nomfou, qteliv
FROM ligcom
JOIN entcom ON entcom.numcom=ligcom.numcom
JOIN fournis ON entcom.numfou=fournis.numfou
WHERE qteliv >1 
GROUP BY nomfou
;
                                                                -- LES RESULTATS SONT différents :(
-- 2eme Requete

SELECT nomfou, qteliv
FROM ligcom,entcom,fournis 
WHERE qteliv >1 
GROUP BY nomfou
;

--    13. Coder de 2 manières différentes la requête suivante : Lister les commandes dont le fournisseur est celui de la commande n°70210.

--         Afficher numéro de commande et date

-- 1ere Requete

SELECT numcom,datcom
FROM entcom
JOIN fournis ON fournis.numfou=entcom.numfou
WHERE numcom= '70210';

-- 2eme Requete

SELECT numcom,datcom
FROM entcom
WHERE numcom = '70210';

--     14. Dans les articles susceptibles d’être vendus, lister les articles moins chers (basés sur Prix1) que le moins cher des rubans (article dont le premier caractère commence par R).

--         Afficher libellé de l’article et prix1

SELECT codart, numfou, prix1
FROM vente
WHERE prix1 < (SELECT MIN( prix1 ) AS mini
FROM vente
WHERE codart LIKE 'R%')

--     Sortir la liste des fournisseurs susceptibles de livrer les produits dont le stock est inférieur ou égal à 150 % du stock d'alerte.

--         La liste sera triée par produit puis fournisseur

--     Sortir la liste des fournisseurs susceptibles de livrer les produits dont le stock est inférieur ou égal à 150 % du stock d'alerte, et un délai de livraison d'au maximum 30 jours.

--         La liste sera triée par fournisseur puis produit

--     Avec le même type de sélection que ci-dessus, sortir un total des stocks par fournisseur, triés par total décroissant.

--     En fin d'année, sortir la liste des produits dont la quantité réellement commandée dépasse 90% de la quantité annuelle prévue.

--     Calculer le chiffre d'affaire par fournisseur pour l'année 2018, sachant que les prix indiqués sont hors taxes et que le taux de TVA est 20%.



