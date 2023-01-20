<section id="section-home">
    <header id="header-home" class="flex justify-center align-items-center">
        <h1>Seleto</h1>
        <img class="noSelect" src="<?php echo IMG_SISTEM . 'chapeuDeChef.png' ?>" width="40" height="50" alt="">
    </header>
    <section id="section-cardapio">
        <section id="section-categorias">
            <section style="height: auto; width: auto;" class="flex justify-left align-items-center margin-center">
                <?php foreach($categories as $category): ?>

                    <div class="categoria">
                        <a class="flex flex-column no-decoration" href="/home/category/<?php echo $category['id'] ?>">
                            <div class="categoria-foto">
                                <img src="<?php echo IMG_PRODUTOS . "salgados.png"?>" width="100%" height="100%" alt="">
                            </div>
                            <div class="span-categoria flex justify-center">
                                <?php echo $category['name'] ?>
                            </div>
                        </a>
                    </div>
                
                <?php endforeach ?>
            </section>
        </section>

        <div class="flex align-items-center justify-center" style="margin: 0.5rem auto 0.5rem auto;">
            <hr style="width: 100%; max-width: 10rem; margin: 0px 1rem 0px 1rem">
                <span style="margin: 0 1rem 0 1rem; font-family: 'Bosk'; font-size: 1.6rem;">
                    Cardápio
                </span>
            <hr style="width: 100%; max-width: 10rem;  margin: 0px 1rem 0px 1rem">
        </div>

        <section id="section-produtos" class="fullscreen flex flex-column justify-center align-items-center">
            <?php require 'layouts/cardapio.php' ?>
        </section>

    </section>
</section>

<?php require VIEWS . 'layouts/footer.php'?>

<script type="module" src="/assets/js/product.js"></script>

<style>

    @media screen and (max-width: 440px){
        #section-cardapio #section-categorias{
            justify-content: left;
            padding: 0;
        }

        #section-cardapio #section-categorias .categoria{
            justify-content: left;
            transform: scale(0.95);
        }

        #section-cardapio #section-categorias .categoria button span{
            font-size: 0.8rem;
            text-align: center;
        }

        #section-produtos{
            padding: 1rem 1rem 1rem 1rem;
        }

        #section-produtos .div-produto{
            height: auto;
            width: 100%;
            padding: 0;
            flex-direction: column;
        }

        #section-produtos .div-produto .foto-produto{
            min-width: 100%;
            max-width: 100%;
        }

        #section-produtos .div-produto .div-produto-informacoes .div-produto-descricao h2 {
            font-size: 1.7rem;
            margin-bottom: 1rem;
        }

        #section-produtos .div-produto .div-produto-informacoes .div-produto-descricao p{
            font-size: 1.1rem;
        }

    }
</style>