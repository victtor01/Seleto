<section id="section-pagamento" class="section-principal">
    <header id="header-pagamento" class="align-items-center flex justify-center">
        <h1> Pagamento </h1>
    </header>
    <section>
        <span> Escolhe a localização: </span>
        <div> 
            <select name="location" id="location">
                <option value="1">Casa</option>
            </select>
        </div>
        <span> Método de pagamento: </span>
        <div id="pay" style=" position: relative">
            <label>
                <ion-icon name="cash-outline" style="width: 2.8rem; height: 2.8rem; color: rgba(0,0,0,0.8); "></ion-icon>
                <span>Dinheiro.</span>
                <input type="radio" id="payMethod" name="payMethod" value="1" checked>
                <i></i>
            </label>
            <label>
                <ion-icon name="card-outline" style="width: 2.8rem; height: 2.8rem"></ion-icon>
                <span>Cartão</span>
                <input type="radio" id="payMethod" name="payMethod" value="2">
                <i></i>
            </label>
            <label>
                <img src="<?php echo IMG_SISTEM . "pix.png" ?>" style="width: 2.8rem; height: 2.8rem" alt="" srcset="">
                <span>Pix</span>
                <input type="radio" id="payMethod" name="payMethod" value="3">
                <i></i>
            </label>
        </div>
    </section>
</section>

<footer id="footer-pedido">
    <div>
        <label class="sub-title">
            <span>
                subtotal:
            </span>
            <span id="subtotal">
                <?php echo "R$ " . number_format($price , 2, ',', '.') ?>
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
            <span id="total">
                <?php echo "R$ " . number_format($price + 3, 2, ',', '.') ?>
            </span>
        </label>     
    </div>
    <div>
        <button id="button-proximo" type="submit">
            Finalizar pedido
        </button>     
    </div>
</footer>

<script type="module">
    import { insert } from '/assets/js/jquery.js'

    let button = document.getElementById('button-proximo');
    button.addEventListener('click', () => {
        let payMethod = window.document.querySelector('input[name="payMethod"]:checked').value;
        let location = $('#location').val();

        $.post('/pedido/pagamento', { payMethod : payMethod, location: location}, function(res) { 
            button.innerHTML = "Concluindo...";
            console.log(res);
        })
        
    });
</script>

<style>
     #section-pagamento::-webkit-scrollbar{
        display: none;
    }

    #section-pagamento #header-pagamento{
        height: 5rem;
        background-color: #fff;
    }

    #section-pagamento #header-pagamento h1{
        font-family: 'open';
        font-size: 2rem;
        font-weight: 400;
    }

    #section-pagamento section{
        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: column;
    }

    #section-pagamento section div{
        margin: 1rem auto 1rem auto;
        display: flex;
        width: 100%;
        max-width: 25rem;
        justify-content: space-around;
        align-items: center;
    }

    #section-pagamento section div select{
        width: 100%;
        max-width: 25rem;
        height: 3.3rem;
        border-radius: 0.5rem;
        border: none;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        font-family: 'open';
        font-size: 1rem;
        padding: 0.2rem;
        outline: none;
    }

    #section-pagamento section > span{
        font-family: 'open';
        font-size: 1.2rem;
        font-weight: 600;
        margin: 1rem 0 1rem 0;
    }
    #section-pagamento section div span{
        font-family: 'open';
        font-size: 0.8rem;
        font-weight: 500;
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

    #pay label{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: end;
        width: 100%;
        max-width: 9rem;
        padding: 0.5rem;
        max-height: 10rem;
        margin: 2rem 0.5rem 0 0.5rem;
        box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.05);
        background-color: #fff;
        border-radius: 1rem;
        transition: 0.1s ease-in;
    }

    #section-pagamento section:last-child{
        margin-bottom: 10rem;
    }

    #pay label:hover{
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.05);
    }

    #pay label > i {
        display: flex;
        width: 32px;
        height: 16px;
        border: 1px solid #AAA;
        border-radius: 5px;
        align-items: center;
        padding: 0.1rem;
    }

    #pay label > input{
    visibility: hidden;
    }

    #pay label > input + i:after {
    content: "";
    display: flex;
    width: 12px;
    height:12px;
    background-color: #000;
    border-radius:3px;
    transition:0.2s;
    top: 50%;
    }

    #pay label >input:checked + i:after {
    /* background: #333; */
    background-color: rgba(1, 200, 0, 1);
    margin-left: 16px
}

@media screen and (max-width: 330px){
        #section-pagamento section{
            padding: 0rem 1rem 0 1rem;
        }
        #pay{
            flex-direction: column;
        }   
        #pay label{
            width: 100%;
            max-width: none;
        }
    }

</style>