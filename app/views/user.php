<?php
    if(isset($_SESSION['accesskey']))
    {
        echo "A requisição a esta Pagina foi negada!";
        echo "<a href='/user/logout'> Acesse esse link para sair e fazer o login! </a>";
        echo "OBS: Ao clicar sobre o link, caso você não esteja logado, perderá os seus pedidos!";
    }
?>

<?php if(isset($_SESSION['user'])): ?>

    <section id="section-user">
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
                <a href="" class="no-decoration">
                    <ion-icon name="location"></ion-icon>
                    <span> Localizações </span>
                </a>
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

<?php 

    require VIEWS . 'layouts/footer.php' 

?>

<style>

    #section-user{
        max-height: 100vh;
        min-height: 100vh;
        position: absolute;
        width: 100%;
        overflow-y: scroll;
        overflow-x: hidden;
    }

    #section-user header{
        background-color: #fff;
        height: 5rem;
        width: 100%;
        align-items: center;
        justify-content: center;
        display: flex;
    }

    #section-user header h1{
        font-family: 'grotesk';
    }

    #section-user section{
        height: auto;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 0 1rem 0 1rem;
    }

    #section-user section div{
        width: 100%;
        max-width: 30rem;
        height:4rem;
        margin: 0.7rem 0 0 0;
        font-size: 2.5rem;
        display: flex;
        background-color: #fff;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.04);
        border-radius: 1rem;
        position: relative;
        transition: 0.4s;
        overflow: hidden;
    }

    #section-user section div:hover{
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    }

    #section-user section div a{
        min-width: 100%;
        max-width: 100%;
        height: 100%;
        display: flex;
        justify-content: left;
        align-items: center;
        padding: 1rem;
        background: none;
    }

    #section-user section div a ion-icon{
        color: #000;
        font-size: 2rem;
    }

    #section-user section div a span{
        font-size: 1.3rem;
        font-family: 'grotesk';
        margin-left: 1rem;
        font-weight: 300;
        color: #000;
    }

    #section-user section div:last-child{
        width: auto;
        color: #fff;
        background-color: #610200;
        transition: 0.2s;
        padding: 0 1rem 0 1rem;
    }

    #section-user section div:last-child:hover{
        background-color: rgba(146,0,1,1);
    }
    
    #section-user section div:last-child span,
    #section-user section div:last-child ion-icon{
        color: #fff;
    }

</style>