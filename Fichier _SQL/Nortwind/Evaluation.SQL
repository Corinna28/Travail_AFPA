-- 1- Liste des clients français :

SELECT CompanyName AS Société,ContactName AS Contact,ContactTitle AS Fonction,Phone AS Téléphone
FROM customers
WHERE Country = 'France';

-- 2- Liste des produits vendus par le fournisseur "Exotic Liquids" :

SELECT ProductName AS Produit, UnitPrice AS PRIX
FROM suppliers
JOIN products ON suppliers.SupplierID=products.SupplierID
WHERE CompanyName = 'Exotic Liquids';

--3- Nombre de produits mis à disposition par les fournisseurs français (tri par nombre de produits décroissant) :

SELECT CompanyName AS Fournisseur,COUNT(ProductName) AS `Nbre produits`
FROM suppliers
JOIN products ON suppliers.SupplierID=products.ProductID
WHERE Country='France' 
GROUP BY ProductName 
;

-- 4- Liste des clients français ayant passé plus de 10 commandes :

SELECT CompanyName AS `Client` ,COUNT(OrderID) AS `Nbre commandes`
FROM customers
JOIN orders ON orders.CustomerID=customers.CustomerID
WHERE COUNTRY='France'
GROUP BY orders.CustomerID
HAVING (OrderID)>=11;

-- 5- Liste des clients dont le montant cumulé de toutes les commandes passées est supérieur à 30000 € :
-- NB: chiffre d'affaires (CA) = total des ventes

SELECT CompanyName AS `Client` ,SUM(UnitPrice*Quantity) AS 'CA', Country AS PAYS
FROM customers
JOIN orders ON customers.CustomerID=orders.CustomerID
JOIN `order details`ON orders.OrderID=`order details`.OrderID
GROUP BY customers.CustomerID
HAVING CA > 30000
ORDER BY CA DESC;

-- 6- Liste des pays dans lesquels des produits fournis par "Exotic Liquids" ont été livrés :

SELECT ShipCountry AS Pays
FROM orders
JOIN `order details` ON orders.OrderID=`order details`.orderID
JOIN products ON `order details`.ProductID=products.ProductID
JOIN suppliers ON products.SupplierID=suppliers.SupplierID
WHERE ShippedDate IS NOT NULL AND suppliers.CompanyName='Exotic Liquids'
GROUP BY ShipCountry
ORDER BY ShipCountry ASC;


--  7- Chiffre d'affaires global sur les ventes de 1997 :
-- NB: chiffre d'affaires (CA) = total des ventes

SELECT SUM(UnitPrice*Quantity) AS `Montant Ventes 97`
FROM orders
JOIN `order details`ON orders.OrderID=`order details`.orderID
WHERE YEAR(OrderDate)=1997;


-- 8- Chiffre d'affaires détaillé par mois, sur les ventes de 1997 :

SELECT SUM(UnitPrice*Quantity) AS `Montant Ventes 97`
FROM orders
JOIN `order details`ON orders.OrderID=`order details`.orderID
WHERE YEAR(OrderDate)=1997;

-- 9- A quand remonte la dernière commande du client nommé "Du monde entier" ?

SELECT MAX(OrderDate) AS `Date de derniére commande`
FROM orders
JOIN `order details` ON orders.OrderID=`order details`.OrderID
WHERE ShipName = 'Du monde entier';

-- 10- Quel est le délai moyen de livraison en jours ?

SELECT ROUND(AVG(ABS(DATEDIFF(ShippedDate,OrderDate)))) AS `Délai Moyen de livraison en jours`
FROM orders;

