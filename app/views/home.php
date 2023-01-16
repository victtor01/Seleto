<section id="section-home">
    <header id="header-home" class="flex justify-center align-items-center">
        <h1>Seleto</h1>
        <img class="noSelect" src="<?php echo IMG_SISTEM . 'chapeuDeChef.png' ?>" width="40" height="50" alt="">
    </header>
    <section id="section-cardapio">
        <section id="section-categorias">
            <div class="categoria">
                <button class="flex flex-column">
                    <div class="categoria-foto">
                        <img src="<?php echo IMG_PRODUTOS . "salgados.png"?>" width="100%" height="100%" alt="">
                    </div>
                    <div class="span-categoria flex justify-center">
                        Salgados
                    </div>
                </button>
            </div>
            <div class="categoria">
                <button class="flex flex-column">
                    <div class="categoria-foto">
                        <img src="<?php echo IMG_PRODUTOS . "pizza.png"?>"  width="100%" height="100%" alt="">
                    </div>
                    <div class="span-categoria flex justify-center">
                        pizzas
                    </div>
                </button>         
            </div>
            <div class="categoria">
                <button class="flex flex-column">
                    <div class="categoria-foto">
                        <img src="<?php echo IMG_PRODUTOS . "sucos.png"?>"  width="100%" height="100%" alt="">
                    </div>
                    <div class="span-categoria flex justify-center">
                        liquidos
                    </div>
                </button>
            </div>
        </section>
        <div class="flex align-items-center justify-center" style="margin: 1rem auto 1rem auto;">
            <hr style="width: 100%; max-width: 15rem; margin: 0px 1rem 0px 1rem">
                <span style="margin: 0 1rem 0 1rem; font-family: 'grotesk'; font-size: 1.5rem">
                    Cardápio
                </span>
            <hr style="width: 100%; max-width: 15rem;  margin: 0px 1rem 0px 1rem">
        </div>
        <section>
            <div>
                <div>

                </div>
                <div>

                </div>
            </div>
            <div>
                <div>

                </div>
                <div>

                </div>
            </div>
            <div>
                <div>

                </div>
                <div>

                </div>
            </div>
            <div>
                <div>

                </div>
                <div>

                </div>
            </div>
            <div>
                <div>
                    
                </div>
                <div>

                </div>
            </div>
        </section>
    </section>
    <footer>
        
    </footer>
</section>

<style>
    #section-home{
        max-height: 100vh;
        min-height: 100vh;
        position: relative;
        width: 100%;
        overflow-y: scroll;
        overflow-x: hidden;
        transform: translateX(-50%);
        left: 50%;
    }

    #section-home #header-home{
        box-shadow: 0px 2px 15px -6px rgba(0, 0, 0, 0.2);
        height: 5rem;
        background-color: #fff;
    }

    #section-home #header-home h1{
        font-family: 'realadult';
        font-size: 5rem;
        font-weight: 400;
    }

    #section-home #header-home img{
        transform: rotateZ(12deg) translateY(-0.8rem) scale(1);
        filter:brightness(0.1);
        margin: 1rem 1rem 0rem 1rem;
        cursor: default;
    }

    #section-cardapio{
        min-height: 100%;
    }

    #section-cardapio #section-categorias{
        height: auto;
        display: flex;
        padding: 20px;
        overflow-x: scroll;
        justify-content: center;
        margin: 1rem auto 1rem auto;
        overflow-y: hidden;
    }

    #section-cardapio #section-categorias .categoria{
        height: 100vh;
        max-height: 9rem;
        min-width: 9rem;
        max-width: 9rem;
        background-color: rgba(254, 254, 254, 1);
        margin: 0 1rem 0 0;
        position: relative;
        border-radius: 0.5rem;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        transition: 0.3s;
        overflow: hidden;
    }

    #section-cardapio #section-categorias .categoria:hover{
        transform: scale(1.01);
    }

    #section-cardapio #section-categorias .categoria button{
        height: 100%;
        width: 100%;
        border: none;
        background-color: #fff;
    }

    #section-cardapio #section-categorias .categoria button .span-categoria{
        font-size: 0.9rem;
        font-family: 'grotesk', 'Times New Roman', Times, serif;
        align-items: center;
        position: relative;
        color: #000;
        width: 100%;
        padding: 3px;
    }

    #section-cardapio #section-categorias .categoria button .categoria-foto{
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.95);
        position: relative;
        overflow: hidden;
    }

    @media screen and (max-width: 400px){
        #section-cardapio #section-categorias{
            justify-content: left;
        }

        #section-cardapio #section-categorias .categoria{
            justify-content: left;
        }

        #section-cardapio #section-categorias .categoria button span{
            font-size: 0.8rem;
        }

    }
</style>