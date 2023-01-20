<section id="section-user">
    <header>
        <h1> Meu perfil </h1>
    </header>
    <section>
        <div style="background-color: #fff;">
            <a href="" class="no-decoration">
                <ion-icon name="add-outline"></ion-icon>
                <span style="color: #000;"> Adicionar Endereço </span>
            </a>
        </div>
        <div class="flex" style="padding: 1rem;">

            <label class="flex flex-column fullscreen" style="padding: 0.5rem 1rem 0.5rem 1rem">
                <span style="color: #000;"> Casa </span>
            </label>
                
            <label class="flex align-items-center">
                <button class="buttonDeleteLocation" value="1" style="border: none; background-color:#fff; border-radius: 3px; font-family: 'open';font-size: 1rem">
                    excluir
                </button>
            </label>
            
        </div>
    </section>
</section>

<style>
    #section-user section div:last-child,
    #section-user section div:last-child:hover{
        background-color: #fff;
        width: 100%;
    }
    #section-user section div{
        height: auto;
        max-width: 25rem;
        width: 100%;
        box-sizing: border-box;
    }
    #section-user section div a{
        background-color: #fff;
    }
    #section-user section div span{
        font-size: 1rem;
        font-family: 'grotesk';
        width: 100%;
    }

</style>

<?php require 'layouts/footer.php' ?>

<script type="module" src="/assets/js/user.js"></script>