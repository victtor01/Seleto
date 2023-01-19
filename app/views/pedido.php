<section id="section-pedido">
    <header id="header-pedido" class="align-items-center flex justify-center">
        <h1> Meu pedido </h1>
    </header>
    <div style="width: 100%; height: 4rem;" class="flex justify-left align-items-center">
        <a href="/home" style="box-shadow: 0px 0px 20px rgba(0,0,0,0.1); border-radius: 0.3rem; padding: 1rem; margin-left: 2%; color: #000; background-color: #fff" class="no-decoration flex align-items-center"> <ion-icon name="chevron-back-outline"></ion-icon> </a>
    </div>
    <section id="section-pedido-produtos" class="fullscreen flex justify-center align-items-center flex-column">

        <?php if(isset($_SESSION['order'])): ?>
            <?php foreach($products as $product): ?>

                <input type="hidden" class="ids" value="<?php echo $product['id'] ?>">

                <?php $value = isset($_SESSION['order'][$product['id']]) ? $_SESSION['order'][$product['id']] : 0; ?>
                
                <div class="div-produto">
                    <div class="div-produto-informacoes">

                        <div style="height: 60%; overflow-y:scroll;" class="div-produto-descricao flex flex-column fullscreen flex ">
                            <h2> <?php echo $product['name'] ?> </h2>
                            <p style="font-size: 1rem;"> Valor: R$<?php echo $product['price'] ?></p>
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
                </div>

            <?php endforeach ?>
        <?php endif ?>

    </section>
</section>

<footer id="footer-pedido">
    <div>
        <label class="sub-title">
            <span>
                subtotal:
            </span>
            <span id="subtotal">
                
            </span>
        </label>
        <label class="sub-title">
            <span>
                Taxa de entraga:
            </span>
            <span>
                R$ 3,00
            </span> 
        </label>
        <label class="title">
            <span>
                Total:
            </span>
            <span id="total">
                R$ 00,00
            </span>
        </label>     
    </div>
    <div>
        <button id="button-proximo">
            Finalizar pedido
        </button>
    </div>
</footer>

<script type="module">
    import { caculePrice } from '/assets/js/modules/input.js'
    caculePrice();
</script>

<script type="module" src="/assets/js/product.js"></script>

<style>
    #section-pedido{
        max-height: 100vh;
        min-height: 100vh;
        position: absolute;
        width: 100%;
        overflow-y: scroll;
        overflow-x: hidden;
    }

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
        max-width: 20rem;
        border-radius: 0.5rem;
        box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.2);
        transition: 0.2s;
        margin: 0.5rem auto 0.5rem auto;
    }

    #section-pedido #section-pedido-produtos .div-produto:last-child{
        margin-bottom: 12rem;
    }

    #section-pedido #section-pedido-produtos .div-produto:hover{
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.05);
    }

    #footer-pedido{
        background-color: #fff;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        border-radius: 0.3rem 0.3rem 0 0;
        height: 100%;
        max-height: 10rem;
        width: 100%;
        max-width: 28rem;
        position: fixed;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }

    #footer-pedido div{
        width: 100%;
        height: 50%;
        padding: 0.5rem 1rem 0.2rem 1rem;
        align-items: center;
        display: flex;
        flex-direction: column;
    }

    #footer-pedido div label{
        display: flex;
        justify-content: space-between;
        width: 100%;
        font-family: 'open';
        font-size: 1rem;
        height: 100%;
        align-items: baseline;
        font-weight: bold;
    }

    #footer-pedido div .title{
        font-size: 1.5rem;
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