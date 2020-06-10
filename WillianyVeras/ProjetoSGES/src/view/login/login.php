<?php include  __DIR__ . "/../layout/header.php" ?>
<!--    <img class="wave" src="//--><?php //echo $_SERVER["HTTP_HOST"];?><!--/image/wave.png">-->
    <link rel="stylesheet" href="../../../public/css/login_style.css">
    </head>
    <body>
    <img class="background" src="../../../public/image/wave.png">
    <div class="container">
        <div class="img">
            <img src="../../../public/image/work.svg">
        </div>
        <div class="login-content">
            <form action="validar.php" method="post">
                <img src="../../../public/image/avatar.svg">
                <h2 class="title">Bem-vindo ao SGES!</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Login</h5>
                        <input type="text" class="input" name="usuario">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Senha</h5>
                        <input type="password" class="input" name="senha">
                    </div>
                </div>
                <input type="submit" class="btn" value="Entrar">
            </form>
        </div>
    </div>

    <script src="../../../public/js/login_script.js"></script>
    <!--Código Base.: https://www.youtube.com/watch?v=t-EMinSz_Tk&t=1105s-->
<?php include __DIR__ . "/../layout/footer.php" ?>