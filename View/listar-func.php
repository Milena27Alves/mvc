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
            <li><a href="">Funcionario</a></li>
            <li><a href="">Remedio</a></li>
            <li><a href="">Relatorios</a></li>
            <li><a href="">Informações</a></li>
            <li><a href="">Notificar</a></li>

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
            <a href="/adcionar-funcionario" class="fas fa-plus text-dark text-decoration-none"><span class="glyphicon glyphicon-plus"></span></a>
    </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Cpf</th>
                <th scope="col">Matricula</th>
                <th scope="col">tipo</th>
                <th scope="col">E-mail</th>
                <th scope="col">ações</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($funcionarios as $funcionario){ ?>
                <tr>
                    <th scope="row"><?=$funcionario->id?></th>
                    <td><?=$funcionario->nome?></td>
                    <td><?=$funcionario->cpf?></td>
                    <td><?=$funcionario->matricula?></td>
                    <td><?=$funcionario->tipo?></td>
                    <td><?=$funcionario->email?></td>
                    <td>
                        <a href="/editar-funcionario-form?id=<?=$funcionario->id?>" class="fas fa-edit text-dark text-decoration-none mr-2"><span class="glyphicon glyphicon-edit"></span></a>
                        <a href="/apagar-funcionario?id=<?=$funcionario->id?>" class="fas fa-eraser text-dark text-decoration-none mr-2"><span class="glyphicon glyphicon-trash"></span></a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    </div>
    </div>
</div>