<?php
    if(isset($_SESSION['accesskey']))
    {
        echo "A requisição a esta Pagina foi negada!";
        echo "<a href='/user/logout'> Acesse esse link para sair e fazer o login! </a>";
        echo "OBS: Ao clicar sobre o link, caso você não esteja logado, perderá os seus pedidos!";
    }
?>

<?php if(isset($_SESSION['user'])): ?>

    <section id="section-user" class="section-principal">
        <header>
            <h1> Meu perfil </h1>
        </header>
        <section>
            <div>
                <a href="" class="no-decoration">
                    <ion-icon name="cog-outline"></ion-icon>
                    <span> Configurações </span>
                </a>
            </div>
            <div>
                <a href="/user/address" class="no-decoration">
                    <ion-icon name="location"></ion-icon>
                    <span> Localizações </span>
                </a>
            </div>
            <div>
                <form action="/user/valide" method="POST" class="fullscreen" style="background-color: #fff;">
                    <button class="no-decoration fullscreen justify-left" style="background-color: #000 ;border: none; color: #fff; font-size: 1.2rem; font-family: 'grotesk'">
                        
                        <span> Confirmar Email </span>
                    </button>
                </form>
            </div>
            <div>
                <a href="/user/logout" class="no-decoration">
                    <ion-icon name="exit-outline"></ion-icon>
                    <span> Sair </span>
                </a>
            </div>
        </section>
    </section>
    
<?php endif ?>

<?php require VIEWS . 'layouts/footer.php' ?>

<script type="module" src="/assets/js/user.js"></script>