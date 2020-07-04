<?php include __DIR__ . "/../layout/header.php" ?>
    </head>
    <body>

    <?php include __DIR__ . "/../layout/navCoordenacao.php" ?>
    <div class="grid-container">
        <div>
            <button onclick="location.href ='/empresas?action=create';" class="btn-novo">Nova Empresa</button>
            <table>
                <thead>
                <tr>
                    <th>Id</th>
                    <th>NOME</th>
                    <th>VAGAS</th>
                    <th>TELEFONE</th>
                    <th>AÇÕES</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($empresas as $empresa){?>
                        <tr>
                            <td><?php echo $empresa->getId()?></td>
                            <td><?php echo $empresa->getNomeEmpresa()?></td>
                            <td><?php echo $empresa->getVagas()?></td>
                            <td><?php echo $empresa->getTelefone()?></td>
                            <td>
                                <button onclick="location.href ='empresas?id=<?php echo $empresa->getId() ?>';" class="btn-ver btn-total">Visualizar</button>
                                <button onclick="location.href ='/empresas?action=edit&id=<?php echo $empresa->getId() ?>';" class="btn-editar btn-total">Editar</button>
                                <form action="empresas?id=<?php echo $empresa->getId() ?>" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn-excluir btn-total">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
<?php include __DIR__ . "/../layout/footer.php" ?>