<section id="section-register" class="section-principal absolute center flex flex-column">
    <header class="flex flex-column align-items-center justify-center" style="padding: 1rem; font-family: 'grotesk'; font-size: 1.5rem">
        <h1>Registrar-se</h1>
    </header>
    <section class="flex flex-column justify-center align-items-center">
        <form id="form_register" style="padding: 1rem"  class="fullscreen flex flex-column justify-center align-items-center" action="/register" method="POST">
            <input type="text" name="name" id=""  placeholder="Nome">
            <input type="text" name="lastname" id=""  placeholder="Sobrenome">
            <input type="email" name="email" id="" placeholder="Email">
            <input type="password" name="password" id="" placeholder="Senha">
            <input type="password" name="confirmpassword" id="" placeholder="Confirmar Senha">
            <button type="submit"> Registrar-se </button>
        </form>
    </section>
    <footer class="flex align-items-center justify-center">
        <a href="/login" class="no-decoration" style="font-size: 1.2rem;"> Voltar ao login </a>
    </footer>
</section>

<style>
    #section-register{
        overflow-y: scroll;
        width: 100%;
        max-width: 30rem;
        max-height: 100vh;
        min-height: 100vh;
        padding: 1rem
    }

    #section-register::-webkit-scrollbar {
        display: none;
    }

    #form_register input, #form_register button{
        font-family: 'grotesk';
        border-radius: 0.5rem;
        padding: 1.4rem;
        width: 100%;
    }

    #form_register input{
        margin: 0.5rem auto 0.5rem auto;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        font-size: 1rem;
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
    
