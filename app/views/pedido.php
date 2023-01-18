<section id="section-pedido">
    <header id="header-pedido" class="align-items-center flex justify-center">
        <h1> Meu pedido </h1>
    </header>
    <section id="section-pedido-produtos" class="fullscreen">
        <div style="width: 100%; height: 4rem;" class="flex justify-left align-items-center">
            <a href="/home" style="box-shadow: 0px 0px 20px rgba(0,0,0,0.1); border-radius: 0.3rem; padding: 1rem; margin-left: 2%; color: #000; background-color: #fff" class="no-decoration flex align-items-center"> <ion-icon name="chevron-back-outline"></ion-icon> </a>
        </div>
    </section>
</section>

<footer id="footer-pedido">
    <div>
        <label class="sub-title">
            <span>
                subtotal:
            </span>
            <span>
                R$ 47,00
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
            <span>
                R$ 50,00
            </span>
        </label>     
    </div>
    <div>
        <button id="button-proximo">
            Finalizar pedido
        </button>
    </div>
</footer>

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