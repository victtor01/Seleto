<section id="section-pedido" class="section-principal">
    <header id="header-pedido" class=" align-items-center flex justify-center">
        <h1> Meu pedido </h1>
    </header>
    <div style="width: 100%; height: 4rem;" class="flex justify-left align-items-center">
        <a href="/home" style="box-shadow: 0px 0px 20px rgba(0,0,0,0.1); border-radius: 0.3rem; padding: 1rem; margin-left: 2%; color: #000; background-color: #fff" class="no-decoration flex align-items-center"> <ion-icon name="chevron-back-outline"></ion-icon> </a>
    </div>
    <section id="section-pedido-produtos" class="fullscreen flex justify-center align-items-center flex-column" style="padding: 0 0.8rem 0 0.8rem;">

        <?php if(isset($_SESSION['order'])): ?>
            <?php foreach($products as $product): ?>

                <input type="hidden" class="ids" value="<?php echo $product['id'] ?>">

                <?php $value = isset($_SESSION['order'][$product['id']]) ? $_SESSION['order'][$product['id']] : 0; ?>
                
                <div class="div-produto" style="position: relative;">
                    <div class="div-produto-informacoes">

                        <div style="height: 60%; overflow-y:scroll;" class="div-produto-descricao flex flex-column fullscreen flex ">
                            <h2> <?php echo $product['name'] ?> </h2>
                            <p style="font-size: 1rem;"> Valor: R$ <?php echo number_format($product['price'] , 2, ',', '.') ?></p>
                            <input type="hidden" id="price[<?php echo $product['id'] ?>]" value="<?php echo $product['price'] ?>">
                        </div>

                        <div style="height: 40%;" class="div-produto-botao flex justify-left align-items-center">

                            <button type="button" class="buttonRemoveProduct no-decoration-number" value="<?php echo $product['id'] ?>">
                                <ion-icon name="remove-outline"></ion-icon>
                            </button>
                            <input type="number" class="input-quantidade" min='0' max='5' id="input[<?php echo $product['id'] ?>]" value="<?php echo $value ?>" style="text-align:center; font-family: 'grotesk'">
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
        <?php endif ?>

    </section>
</section>

<?php require VIEWS . 'layouts/footer_order.php' ?>

<script type="module">
    import { caculePrice } from '/assets/js/modules/helpers.js'
    caculePrice();
</script>

<script type="module" src="/assets/js/product.js"></script>

<style>

    #section-pedido::-webkit-scrollbar{
        display: none;
    }

    #section-pedido #header-pedido{
        height: 5rem;
        background-color: #fff;
    }

    #section-pedido #header-pedido h1{
        font-family: 'open';
        font-size: 2rem;
        font-weight: 400;
    }

    #section-pedido #section-pedido-produtos .div-produto{
        background-color: #fff;
        width: 100%;
        max-width: 22rem;
        border-radius: 0.5rem;
        box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.2);
        transition: 0.2s;
        margin: 0.5rem 0 0.5rem 0;
    }

    #section-pedido #section-pedido-produtos .div-produto:last-child{
        margin-bottom: 12rem;
    }

    #section-pedido #section-pedido-produtos .div-produto:hover{
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.05);
    }

    #button-proximo{
        background-color: rgb(219,7,52);
        color: #fff;
        font-family: 'grotesk';
        width: 100%;
        height: 90%;
        border: none;
        font-size: 1.7rem;
    }

</style>