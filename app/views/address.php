
<section id="section-user" class="section-principal">
    <header>
        <h1> Meu perfil </h1>
    </header>
    <section>
        <div style="background-color: #fff;">
            <a href="/user/address/add" class="no-decoration">
                <ion-icon name="add-outline" style="color: #000"></ion-icon>
                <span style="color: #000;"> Adicionar Endereço </span>
            </a>
        </div>

        <?php foreach($address as $add ): ?>
        <div class="flex" id="divAddress[<?php echo $add['id'] ?>]" style="padding: 1rem;">

            <label class="flex flex-column fullscreen" style="padding: 0.5rem 1rem 0.5rem 1rem">
                <span style="color: #000;"> <?php echo $add['name'] ?> </span>
            </label>
                
            <label class="flex align-items-center">
                <button class="buttonDeleteLocation" value="<?php echo $add['id'] ?>" style="border: none; background-color:#fff; border-radius: 3px; font-family: 'open';font-size: 1rem">
                    excluir
                </button>
            </label>
            
        </div>
        <?php endforeach ?>
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
        cursor: pointer;
        -webkit-transition:0.3s;
        -moz-transition:0.3s;
        -o-transition:0.3s;
        transition:0.3s;
    }
    #section-user section div a{
        background-color: #fff;
    }
    #section-user section div span{
        font-size: 1rem;
        font-family: 'grotesk';
        width: 100%;
        cursor: pointer;
    }

</style>

<?php require 'layouts/footer.php' ?>

<script type="module" src="/assets/js/user.js"></script>