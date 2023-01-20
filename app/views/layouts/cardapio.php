<?php foreach($products as $product): ?>

<?php

$value = isset($_SESSION['order'][$product['id']]) ? $_SESSION['order'][$product['id']] : 0;

?>

<div class="div-produto" style="position: relative;">

    <div class="foto-produto">
    <img src="<?php echo IMG_PRODUTOS . "salgados.png"?>" width="100%" height="100%" alt="">
    </div>

    <div class="div-produto-informacoes">
        <div style="height: 60%; overflow-y:scroll;" class="div-produto-descricao flex flex-column fullscreen flex ">
            <h2> <?php echo $product['name'] ?> </h2>
            <p> <?php echo $product['description'] ?> </p>
            <p> Valor: R$<?php echo str_replace('.', ',', $product['price']) ?></p>
        </div>
        <div style="height: 40%;" class="div-produto-botao flex justify-left align-items-center">

            <button type="button" class="buttonRemoveProduct no-decoration-number" value="<?php echo $product['id'] ?>">
                <ion-icon name="remove-outline"></ion-icon>
            </button>
            <input type="number" min='0' id="input[<?php echo $product['id'] ?>]" value="<?php echo $value ?>" style="text-align:center; font-family: 'grotesk'">
            <button class="addButtonProduct" value="<?php echo $product['id'] ?>">
                <ion-icon name="add-outline"></ion-icon>
            </button>

        </div>
    </div>

    <div class="number-max" id="number-max[<?php echo $product['id'] ?>]">
        <?php echo $product['quantity'] ?>
    </div>

</div>

<?php endforeach ?>

<script>
    var value = window.document.getElementsByClassName('number-max');
    for(let div of value)
    {
        if(div.innerHTML == 0)
        {
            div.style.cssText = 'background-color: #000;'
        }
    }
</script>