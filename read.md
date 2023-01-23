# SISTEMA DE PEDIDO DA SELETO

<h1> Seleto <h1>

SELECT U.name, P.name, OP.quantity FROM `order_product` OP 
INNER JOIN product P 
ON P.id = OP.id_product
INNER JOIN `order` O
ON OP.id_order = O.id
INNER JOIN users U 
ON U.id = O.id_user
WHERE O.id_user = 11
AND O.status = 1 //true

SELECT * FROM `order` WHERE `key` = "63cde7b74be22" and data_order = (SELECT MAX(data_order) FROM `order` WHERE `key` = "63cde7b74be22")

SELECT OP.id, OP.quantity, P.name, P.price FROM `order_product` OP INNER JOIN product P on OP.id_product = P.id WHERE id_orde