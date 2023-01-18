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