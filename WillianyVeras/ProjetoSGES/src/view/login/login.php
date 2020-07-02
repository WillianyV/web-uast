<?php

session_start();

include  __DIR__ . "/../layout/header.php" ?>

    <link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"];?>/css/login_style.css">
    </head>
    <body>
    <img class="background" src= "//<?php echo $_SERVER["HTTP_HOST"];?>/image/wave.png">
    <div class="container">
        <div class="img">
            <img src="//<?php echo $_SERVER["HTTP_HOST"];?>/image/work.svg">
        </div>
        <div class="content">
            <form action="validar.php" method="post">
                <img src="//<?php echo $_SERVER["HTTP_HOST"];?>/image/avatar.svg">
                <h2 class="title">Bem-vindo ao SGES!</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Login</h5>
                        <input type="text" class="input" name="usuario" required>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Senha</h5>
                        <input type="password" class="input" name="senha" required>
                    </div>
                </div>
                <?php
                if (isset($_SESSION['message'])){
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                }
                ?></p>
                <input type="submit" class="btn" value="Entrar">
            </form>
        </div>
    </div>

    <script src="//<?php echo $_SERVER["HTTP_HOST"];?>/js/login_script.js"></script>
    <!--Código Base.: https://www.youtube.com/watch?v=t-EMinSz_Tk&t=1105s-->
<?php include __DIR__ . "/../layout/footer.php" ?>