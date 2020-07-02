    <header>
        <div class="logo"><a href="/home-aluno"><img src= "//<?php echo $_SERVER["HTTP_HOST"];?>/image/logo2.png" ></a></div>
        <nav >
            <ul>
                <li ><a href="/home-aluno" >HOME</a></li>
                <li class="sub-menu"><a>ESTÁGIO</a>
                    <ul>
                        <li><a href="/estagios?action=create">Cadastrar</a></li>
<!--                        <li><a href="/estagios?action=edit&id=--><?php //echo $estagio->getId() ?><!--">Editar</a></li>-->
<!--                        <li><a href="estagios?id=--><?php //echo $estagio->getId() ?><!--">Informações</a></li>-->
                    </ul>
                </li>
                <li class="sub-menu"><a>ALUNO</a>
                    <ul>
<!--                        <li><a href="alunos?id=--><?php //echo $aluno->getId() ?><!--">Editar</a></li>-->
<!--                        <li><a href="/alunos?action=edit&id=--><?php //echo $aluno->getId() ?><!--">Informação</a></li>-->
                    </ul>
                </li>
                <li><a href="#">SAIR</a></li>
            </ul>
        </nav>
        <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
    </header>
    <script src="//<?php echo $_SERVER["HTTP_HOST"];?>/js/nav_script.js"></script>