<header class="align-items-center justify-around" id="header-title-principal">
    <nav class="align-items-center justify-between" style="display: flex; padding: 1rem; width: 50%">
        <li style="font-size: 4rem;">
            Seleto
        </li>
        <li>
            <?php if(validateSession()):?>
                <a href=" <?php echo "/logout" ?> ">
                <?php echo "Sair" ?>
                </a>
            <?php else: ?>
                <a href=" <?php echo "/login" ?> ">
                    <?php echo "Entrar" ?>
                </a>
            <?php endif ?>
        </li>
    </nav>
</header>