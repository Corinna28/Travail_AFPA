-- -SOURCE- https://www.abricocotier.fr/18749/exercices-sql-autour-de-count-order-by-et-group-by/


-- Les besoins d'affichage

--     Quelles sont les commandes du fournisseur n°9120 ?

SELECT fournis.numfou,numcom
FROM entcom
JOIN fournis ON fournis.numfou=entcom.numfou
WHERE fournis.numfou='9120';

--     Afficher le code des fournisseurs pour lesquels des commandes ont été passées.

SELECT DISTINCT fournis.numfou
FROM fournis 
JOIN entcom ON fournis.numfou=entcom.numfou;

--     Afficher le nombre de commandes fournisseurs passées, et le nombre de fournisseur concernés.

SELECT count(numcom),count(distinct fournis.numfou)
FROM fournis
JOIN entcom ON fournis.numfou=entcom.numfou;

--     Extraire les produits ayant un stock inférieur ou égal au stock d'alerte, et dont la quantité annuelle est inférieure à 1000.

--         Informations à fournir : n° produit, libellé produit, stock actuel, stock d'alerte, quantité annuelle)

SELECT codart, libart,stkale, stkphy,qteann
FROM produit
WHERE stkphy<=stkale AND qteann<1000;

--     Quels sont les fournisseurs situés dans les départements 75, 78, 92, 77 ?
--         L’affichage (département, nom fournisseur) sera effectué par département décroissant, puis par ordre alphabétique.
SELECT nomfou,posfou
FROM fournis
WHERE posfou LIKE'75%' OR posfou LIKE '78%' OR posfou LIKE'92%' OR posfou LIKE'77%';

-- '%'extraira tous les noms commençant par '75'

------------------------------------------------------------------------------------------------------------------------------------

--     Quelles sont les commandes passées en mars et en avril ?

SELECT derliv
FROM ligcom



--     Quelles sont les commandes du jour qui ont des observations particulières ?

--         Afficher numéro de commande et date de commande

--     Lister le total de chaque commande par total décroissant.

--         Afficher numéro de commande et total

--     Lister les commandes dont le total est supérieur à 10000€ ; on exclura dans le calcul du total les articles commandés en quantité supérieure ou égale à 1000.

--         Afficher numéro de commande et total

--     Lister les commandes par nom de fournisseur.

--         Afficher nom du fournisseur, numéro de commande et date

--     Sortir les produits des commandes ayant le mot "urgent' en observation.

--         Afficher numéro de commande, nom du fournisseur, libellé du produit et sous total (= quantité commandée * prix unitaire)

--     Coder de 2 manières différentes la requête suivante : Lister le nom des fournisseurs susceptibles de livrer au moins un article.

--     Coder de 2 manières différentes la requête suivante : Lister les commandes dont le fournisseur est celui de la commande n°70210.

--         Afficher numéro de commande et date

--     Dans les articles susceptibles d’être vendus, lister les articles moins chers (basés sur Prix1) que le moins cher des rubans (article dont le premier caractère commence par R).

--         Afficher libellé de l’article et prix1

--     Sortir la liste des fournisseurs susceptibles de livrer les produits dont le stock est inférieur ou égal à 150 % du stock d'alerte.

--         La liste sera triée par produit puis fournisseur

--     Sortir la liste des fournisseurs susceptibles de livrer les produits dont le stock est inférieur ou égal à 150 % du stock d'alerte, et un délai de livraison d'au maximum 30 jours.

--         La liste sera triée par fournisseur puis produit

--     Avec le même type de sélection que ci-dessus, sortir un total des stocks par fournisseur, triés par total décroissant.

--     En fin d'année, sortir la liste des produits dont la quantité réellement commandée dépasse 90% de la quantité annuelle prévue.

--     Calculer le chiffre d'affaire par fournisseur pour l'année 2018, sachant que les prix indiqués sont hors taxes et que le taux de TVA est 20%.



