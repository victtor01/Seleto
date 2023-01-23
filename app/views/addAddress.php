<section id="section-addAddress" class="section-principal absolute center flex flex-column">
    <header class="flex flex-column align-items-center justify-center" style="padding: 1rem; font-family: 'grotesk'; font-size: 1.5rem">
        <h1>Informações de endereço</h1>
    </header>
    <section class="flex flex-column justify-center align-items-center">
        <form action="/user/address/add" method="POST" id="form_register" style="padding: 1rem; margin-bottom: 4rem"  class="fullscreen flex flex-column justify-center align-items-center">
            <input type="text" name="name" id="name" placeholder="Nome">

            <select type="text" name="city" id="city" placeholder="Cidade" autocomplete="off">
                <option value="1">São Mamede</option>
            </select>

            <input type="text" name="neighborhood" id="neighborhood" placeholder="Bairro">
            <input type="text" name="street" id="street" placeholder="Rua">
            <input type="text" name="number" id="number" placeholder="Número da casa">
            <textarea name="reference" id="reference" placeholder="Referencia" cols="30" rows="10"></textarea>
            <button type="submit" id="submit"> Concluido </button>
        </form>
    </section>
</section>

<?php require VIEWS . 'layouts/footer.php'; ?>

<style>
    #section-addAddress{
        overflow-y: scroll;
        width: 100%;
        max-width: 30rem;
        max-height: 100vh;
        min-height: 100vh;
        padding: 1rem
    }

    #section-addAddress::-webkit-scrollbar {
        display: none;
    }

    #form_register input, #form_register button, #form_register textarea, #form_register select {
        font-family: 'grotesk';
        border-radius: 0.5rem;
        padding: 1.4rem;
        width: 100%;
        border: none;
    }

    #form_register select option {
        padding: 43rem;
        border-radius: 0;
    }

    #form_register input, #form_register textarea, #form_register select{
        margin: 0.5rem auto 0.5rem auto;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        font-size: 1rem;;
    }

    #form_register button{
        margin-top: 1rem;
        font-size: 1rem;
        color: #fff;
        background-color: #000;
    }

    #form_register input::placeholder{
       font-size: 1rem;
    }
</style>