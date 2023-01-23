
<section id="sectionLogin">
    <img id="circulolaranjapng" src="<?php echo IMG_SISTEM . 'circulolaranja.png'?>" alt="" srcset="">
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
            <form action="/login" method="POST" style="flex-direction: column; display: flex;">
                <input class="inputLogin" type="email" name="email" id="" placeholder="Email">
                <input class="inputLogin" type="password" name="senha" id="" placeholder="Senha">
                <button type="submit" id="buttonLogin"> Entrar </button>
            </form>
        </section>
        <div style="width: 100%; padding: 5px; display: flex; justify-content: center; margin: 15px auto 15px auto">
            <hr style="width: 100%;">
        </div>
        <section id="criarConta">
            <button type="button" class="buttonCad" style="padding: 0;">
                <a href="/register" class="no-decoration fullscreen align-items-center justify-center flex" style="color: #fff;"> Registrar-se </a>
            </button>
        </section>
        <section id="outros" style="position: relative;">
            <button id="button-opcoes">
                Mais opções
            </button>
        </section>
    </section>
</section>
<div id="div-cactularanja">
    <img id="cactularanja" src="<?php echo IMG_SISTEM . 'cactularanja.png'?>" alt="" srcset="">
</div>
<section id="opcoes">
    <header>
        <button id='closeTheOptions' name="opcoes">
            <ion-icon name="close-outline"></ion-icon>
        </button>
    </header>
    <button>
        <a href="">
            <img src="<?php echo IMG_SISTEM . 'google.png'?>" width="75" alt="">
        </a>
    </button>
    <button type="submit">
        <a href="/login/default" class="no-decoration" style="color: #fff;">
            Continuar sem login
        </a>     
    </button>
</section>

<script type="module" src="/assets/js/login.js"></script>