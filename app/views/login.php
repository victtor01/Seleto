<img id="circulolaranjapng" src="<?php echo IMG_SISTEM . 'circulolaranja.png'?>" alt="" srcset="">

<section id="sectionLogin">
    <header>
        <div style="display: flex; flex-direction:row">
            <h1>Seleto</h1>
            <img class="noSelect" src="<?php echo IMG_SISTEM . 'chapeuDeChef.png' ?>" width="50" height="60" alt="">
        </div>
        <div>
            <h2> Arte em salgado. </h2>
        </div>
    </header>
    <div style="text-align:center;">
        <span class="justify-center" style=" font-size: 1.3rem ;font-weight: 300; font-family: 'bosk'; margin: 0 1rem 0 1rem">
            Olá, faça seu login ou continue sem logar para fazer seu pedido!
        </span>
    </div>
    <section>
        <section>
            <form action="/login" method="post" style="flex-direction: column; display: flex;">
                <input class="inputLogin" type="email" name="email" id="" placeholder="Email">
                <input class="inputLogin" type="password" name="senha" id="" placeholder="Senha">
                <button type="submit" id="buttonLogin"> Entrar </button>
            </form>
        </section>
        <div style="width: 100%; padding: 5px; display: flex; justify-content: center; margin: 15px auto 15px auto">
            <hr style="width: 100%;">
        </div>
        <section id="criarConta">
            <button type="button" class="buttonCad">
                Cadastrar-se
            </button>
        </section>
        <section id="outros">
            <button id="button-opcoes">
                Mais opções
            </button>
        </section>
    </section>

</section>

<section id="opcoes">
    <header>
        <button>
            <ion-icon name="close-outline"></ion-icon>
        </button>
    </header>
    <button>
        <img src="<?php echo IMG_SISTEM . 'google.png'?>" width="75" alt="">
    </button>
    <button>
        Continuar sem login
    </button>
</section>

<img id="cactularanja" src="<?php echo IMG_SISTEM . 'cactularanja.png'?>" alt="" srcset="">

<style>

    hr{
        background-color: rgba(0,0,0,0.1);
        border: 1px solid rgba(0,0,0,0.1);
    }

    #circulolaranjapng{
        position:absolute;
        top: 0;
        right: 0;
        transform:translate(65%, -65%);
        width: 100%;
        max-width: 40rem;
        z-index: -10000;
        filter: brightness(0.9);
    }

    #cactularanja{
        position:fixed;
        bottom: 0;
        transform:translate(-35%, 35%);
        width: 100%;
        max-width: 10rem;
        z-index: -1000;
    }

    #sectionLogin{
        max-height: 100%;
        min-height: 100%;
        position: absolute;
        width: 100%;
        max-width: 35rem;
        overflow: scroll;
        transform: translateX(-50%);
        left: 50%;
        padding: 2rem 1rem 2rem 1rem;
    }

    #sectionLogin::-webkit-scrollbar {
        display: none;
    }

    #sectionLogin header{
        width: 100%;
        height: 10rem;
        justify-content: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'realadult', Times, serif;
        color: rgba(0,0,0,0.7);
        margin-top: 1rem;
        margin-bottom: 1rem;
    }

    #sectionLogin header div {
        display: flex;
        align-items: center;
        justify-content:space-between;
    }

    #sectionLogin header div h1{
        font-weight: 100;
        font-size: 9rem;
        
    }
    #sectionLogin header div h2{
        font-weight: 100;
        font-size: 1.6rem;
        font-family: 'grotesk';
        color: #e4940a;
        margin: -3.4rem 0 0 -1rem ;
    }

    #sectionLogin header img {

        transform: rotateZ(12deg) /* translate(-1.1rem, -1.1rem) */ scale(1);
        filter:brightness(0.1);
        margin: 0px 1rem 0.3rem 1rem;
        cursor: default;

    }

    #sectionLogin section{
        width: 100%;
        height: 100%;
        font-size: 2rem;
        justify-content: center;
        padding: 5px;
    }

    #outros{
        align-items: center;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    #outros button, #opcoes button{
        width: 100%;
        height: 3rem;
        margin: 2px 5px 10px 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        border-radius: 5px;
        box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
        background-color: #fff;
        transition: 0.1s;
    }

    #outros button:nth-child(1){
        font-family: 'grotesk';
        font-size: 1.2rem;
        font-weight: 500;
        color: #fff;
        background-color: rgba(0,0,0,1);
        box-shadow: none;
        text-decoration: none;
        width: 100%;
        max-width: 20rem;
    }

    #outros button:nth-child(1):hover, #outros button:nth-child(1):focus{
        background-color: #fff;
        color: #000;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
    }

    #opcoes{
        width: 100%;
        max-width: 32rem;
        height: 50%;
        max-height: 12rem;
        position:fixed;
        left: 50%;
        transform:translateX(-50%);
        transition: 0.4s;
        bottom: -100%;
        flex-direction: column;
        padding: 10px;
        background-color: #fff;
        overflow-y: scroll;
        border-radius: 12px 12px 0px 0px;
        box-shadow: 0px -4px 15px rgba(0,0,0,0.3);
    }

    #opcoes header{
        display: flex;
        float: right;
        justify-content: right;
    }

    #opcoes header button{
        box-shadow: none;
        position: relative;
        background: none;
        width: auto;
        height: auto;
    }

    #opcoes::-webkit-scrollbar {
        display: none;
    }

    #opcoes button{
        margin: 0.5rem 0 0.5rem 0;
        background-color: #fff;
        color: 0;
        font-family: 'grotesk';
        font-size: 1.2rem;
        height: 100%;
    }

    #opcoes button:nth-child(3){
        background-color: #000;
        color: #fff;
    }

    .inputLogin, #buttonLogin{
        width: 100%;
        border-radius: 10px;
        padding: 1.1rem;
        margin: 10px auto 10px auto;
        outline: auto;
        transition: 0.3s;
        outline: none;
        box-shadow: 0px 0px 15px rgba(0,0,0,0.1)
    }

    .inputLogin{
        height: 3.5rem;
        font-size: 1.2rem;
        border-radius: 7px;
    }

    .inputLogin:hover{
        box-shadow: 0px 0px 15px rgba(0,0,0,0.2)
    }

    .inputLogin:focus{
        box-shadow: 0px 0px 15px rgba(0,0,0,0.3)
    }

    .inputLogin::placeholder{
        font-size: 1.2rem;
    }

    #buttonLogin{
        border: none;
        background-color: #fff;
        color: #000;
        font-family: 'grotesk';
        font-size: 1.3rem;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
    }

    #criarConta{
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #criarConta button{
        width: 100%;
        height: 4rem;
        border-radius: 10px;
        border: none;
        background-color: #000;
        font-size: 1rem;
        display: flex;
        justify-content:center;
        align-items: center;
        padding: 20px;
        color: #fff;
        font-weight: 600;
        font-size: 1.2rem;
        font-family: 'grotesk', 'Times New Roman', Times, serif;
        margin: 0px auto 0px auto;
    }

    #criarConta :nth-child(1) img {
        background: none;
        width: 35%;
    }
    #criarConta :nth-child(1) img:hover {
        background: none;
    }

</style>
