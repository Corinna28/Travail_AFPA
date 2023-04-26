-- 1- Liste des clients français :

SELECT CompanyName AS Société,ContactName AS Contact,ContactTitle AS Fonction,Phone AS Téléphone
FROM customers
WHERE Country = 'France';

-- 2- Liste des produits vendus par le fournisseur "Exotic Liquids" :

SELECT ProductName AS Produit, UnitPrice AS PRIX
FROM suppliers
JOIN products ON suppliers.SupplierID=products.SupplierID
WHERE CompanyName = 'Exotic Liquids';

-- Nombre de produits mis à disposition par les fournisseurs français (tri par nombre de produits décroissant) :

SELECT CompanyName AS Fournisseur,COUNT(ProductName) AS `Nbre produits`
FROM suppliers
JOIN products ON suppliers.SupplierID=products.ProductID
WHERE Country='France' 
GROUP BY ProductName 
;

-- Liste des clients français ayant passé plus de 10 commandes :

