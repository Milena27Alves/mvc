
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="img/logoOfc.png" id="logo"/></a>
        </div>
        <ul class="nav navbar-nav navbar-left">
            <li id="texto""><a href="pag2.html">UBS</a></li>
            <li><a href="\logout">Funcionario</a></li>
            <li><a href="\logout">Remedio</a></li>
            <li><a href="\logout">Relatorios</a></li>
            <li><a href="\logout">Informações</a></li>
            <li><a href="\logout">Notificar</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li id="texto""><a href="pag2.html"><span class="glyphicon glyphicon-user"></span> perfil</a></li>
            <li><a href="\logout" class="text-decoration-none text-whit"><span class="glyphicon glyphicon-share"></span> sair</a></li>
        </ul>
    </div>
    </div>
</nav>

<div class="Container">
    <div class="row" id="corpo-do-formulario">
        <div id="tabela">
            <div class="my-3 p-3 bg-white rounded shadow-sm">
                <div class="text-center">
                    <a href="/adcionar-medicamento" class="fas fa-plus text-dark text-decoration-none"><span class="glyphicon glyphicon-plus"></span></a>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Valor de Custo</th>
                        <th scope="col">quantidade</th>
                        <th scope="col">Data Cadastro</th>
                        <th scope="col">Fornecedor</th>
                        <th scope="col">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($medicamentos as $medicamento){ ?>
                        <tr>
                            <th scope="row"><?=$medicamento->id?></th>
                            <td><?=$medicamento->nome?></td>
                            <td><?=$medicamento->descricao?></td>
                            <td><?=$medicamento->valorDeCusto?></td>
                            <td><?=$medicamento->quantidade?></td>
                            <td><?=$medicamento->dataDeCadastro?></td>
                            <td><?=$medicamento->fornecedor?></td>
                            <td>
                                <a href="/editar-medicamento-form?id=<?=$medicamento->id?>" class="fas fa-edit text-dark text-decoration-none mr-2"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="/apagar-medicamento?id=<?=$medicamento->id?>" class="fas fa-eraser text-dark text-decoration-none mr-2"><span class="glyphicon glyphicon-trash"></a></a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>