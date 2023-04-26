-- Les besoins de mise à jour
-- Les conditions de vente ont changé !
-- Ecrivez les requêtes de mise à jour correspondant aux consignes suivantes :

-- Appliquer une augmentation de tarif de 4% pour le prix 1, et de 2% pour le prix2, pour le fournisseur 9180.

UPDATE vente
SET prix1=prix1 * 1,04, prix2=prix2 * 1,02
WHERE numfou = '9100';

-- Dans la table vente, mettre à jour le prix2 des articles dont le prix2 est nul, en affectant la valeur du prix1.

UPDATE vente
SET prix2=prix1
WHERE prixé=0;

-- Mettre à jour le champ obscom, en renseignant ***** pour toutes les commandes dont le fournisseur a un indice de satisfaction inférieur à 5.

UPDATE entcom
SET obscom = '*****'
WHERE numfou IN(SELECT numfou FROM fournis WHERE satisf<5);

-- Supprimer le produit "I110".

DELETE FROM produit
WHERE produit.codart='I110';
