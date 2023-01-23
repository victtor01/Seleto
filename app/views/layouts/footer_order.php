<footer id="footer-pedido">
    <div>
        <label class="sub-title">
            <span>
                subtotal:
            </span>
            <span id="subtotal">
                
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
                R$ 00,00
            </span>
        </label>     
    </div>
    <div>
        <button id="button-proximo">
            <a href="/pedido/<?php echo isset($_SESSION['user']) ? 'pagamento' : 'endereco' ?>" class="no-decoration" style="color: #fff">Proximo</a>
        </button>     
    </div>
</footer>