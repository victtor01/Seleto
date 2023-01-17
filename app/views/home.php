<section id="section-home">
    <header id="header-home" class="flex justify-center align-items-center">
        <h1>Seleto</h1>
        <img class="noSelect" src="<?php echo IMG_SISTEM . 'chapeuDeChef.png' ?>" width="40" height="50" alt="">
    </header>

    <section id="section-cardapio">
        <section id="section-categorias">
            <section style="height: auto; width: auto;" class="flex justify-left align-items-center margin-center">
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
                            Pizzas
                        </div>
                    </button>         
                </div>
                <div class="categoria">
                    <button class="flex flex-column">
                        <div class="categoria-foto">
                            <img src="<?php echo IMG_PRODUTOS . "sucos.png"?>"  width="100%" height="100%" alt="">
                        </div>
                        <div class="span-categoria flex justify-center">
                            Liquidos
                        </div>
                    </button>
                </div>
                <div class="categoria">
                    <button class="flex flex-column">
                        <div class="categoria-foto">
                            <img src="<?php echo IMG_PRODUTOS . "salgados.png"?>" width="100%" height="100%" alt="">
                        </div>
                        <div class="span-categoria flex justify-center">
                            Outros
                        </div>
                    </button>
                </div>
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

            <div class="div-produto">
                <div class="foto-produto">
                <img src="<?php echo IMG_PRODUTOS . "salgados.png"?>" width="100%" height="100%" alt="">
                </div>
                <div class="div-produto-informacoes">
                    <div style="height: 60%; overflow-y:scroll;" class="div-produto-descricao flex flex-column fullscreen flex ">
                        <h2> Coxinha de frango</h2>
                        <p> Coxinha de frango com catupiri</p>
                        <p> Valor: R$ 3,50</p>
                    </div>
                    <div style="height: 40%;" class="div-produto-botao flex justify-left align-items-center">
                        <button>
                            <ion-icon name="remove-outline"></ion-icon>
                        </button>
                        <input type="number">
                        <button>
                            <ion-icon name="add-outline"></ion-icon>
                        </button>
                    </div>
                </div>
            </div>

        </section>
    </section>
</section>

<?php require VIEWS . 'layouts/footer.php'?>

<style>
    #section-home{
        max-height: 100vh;
        min-height: 100vh;
        position: absolute;
        width: 100%;
        overflow-y: scroll;
        overflow-x: hidden;
    }

    #section-home::-webkit-scrollbar{
        display: none;
    }

    #section-home #header-home{
/*         box-shadow: 0px 2px 15px -6px rgba(0, 0, 0, 0.2); */
        height: 5rem;
        background-color: #fff;
        padding-top: 1rem;
    }

    #section-home #header-home h1{
        font-family: 'realadult';
        font-size: 4.5rem;
        font-weight: 400;
    }

    #section-home #header-home img{
        transform: rotateZ(12deg) translateY(-0.8rem) scale(0.9);
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
        justify-content: left;
        margin: 1rem auto 1rem auto;
        overflow-y: hidden;
    }

    #section-cardapio #section-categorias::-webkit-scrollbar{
        display: none;
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

    #section-produtos{
        height: auto;
        padding: 10px;
    }

    #section-produtos .div-produto{
        height: 7rem;
        width: auto;
        margin: 1rem 1rem 1rem 1rem;
        max-width: 30rem;
        background-color: #fff;
        border-radius: 0.2rem;
        overflow: hidden;
        display: flex;
        transition: 0.1s;
        box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.1);
    }

    #section-produtos .div-produto:hover{
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.07);
    }

    #section-produtos .div-produto:last-child{
        margin-bottom: 5rem;
    }

    #section-produtos .div-produto .foto-produto{
        background-color: rgba(254, 254, 254, 1);
        width: 50%;
        max-width: 8rem;
        height: 100%;
    }

    #section-produtos .div-produto .div-produto-informacoes{
        width: auto;
        height: 100%;
        padding: 0.5rem 0.5rem 0.5rem 0.5rem ;
    }

    #section-produtos .div-produto .div-produto-informacoes .div-produto-descricao{
        font-family: 'grotesk';
        justify-content: left;
        text-align: left;
        font-size: 0.5rem;
    }

    #section-produtos .div-produto .div-produto-informacoes .div-produto-descricao h2{
        font-size: 1.2rem;
    }

    #section-produtos .div-produto .div-produto-informacoes .div-produto-descricao p{
        font-size: 0.7rem;
    }

    #section-produtos .div-produto .div-produto-informacoes .div-produto-descricao::-webkit-scrollbar{
        display: none;
    }

    #section-produtos .div-produto .div-produto-informacoes .div-produto-botao input{
        border-radius: 1rem;
        width: 25%;
        box-shadow: 0px 0px 2px rgba(0,0,0,0.5); 
        margin: 0 0.2rem 0 0.2rem; 
        padding: 0.3rem
    }

    .div-produto-botao{
        padding-top: 10px;
        
    }

    #section-produtos .div-produto .div-produto-informacoes .div-produto-botao button{
        border: none;
        color: #fff;
        background-color: #000;
        width: 1.5rem;
        height: 1.5rem;
        border-radius: 100%;
        font-size: 100%;
        justify-content: center;
        align-items: center;
    }

    #section-produtos .div-produto .div-produto-informacoes .div-produto-botao button ion-icon{
        width: 100%;
        height: 100%;
    }

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