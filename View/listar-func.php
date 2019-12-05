<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="/opcoes"><img src="img/logoOfc.png" id="logo"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="/listar-ubs">UBS <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="/listar-func">Funcionario</a>
            <a class="nav-item nav-link" href="/listar-medicamento">Remedio</a>
            <a class="nav-item nav-link" href="#">Relatorios</a>
            <a class="nav-item nav-link" href="#">Informações</a>
            <a class="nav-item nav-link" href="#">Notificar</a>

        </div>
    </div>
    <div class="nav navbar-nav">
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a href="\logout" class="nav-item nav-link"><span class="glyphicon glyphicon-share"></span> sair</a>
            </li>
    </div>

</nav>


<div class="Container">
    <div class="row">
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
                <th scope="col">logradouro</th>
                <th scope="col">numero</th>
                <th scope="col">bairro</th>
                <th scope="col">cidade</th>
                <th scope="col">estado</th>
                <th scope="col">cep</th>
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
                    <?php
                        $a = $funcionario->endereco;
                        $endereco = \Ifnc\Tads\Entity\Endereco::find($a);
                    ?>
                    <td><?=$endereco->logradouro?></td>
                    <td><?=$endereco->numero?></td>
                    <td><?=$endereco->bairro?></td>
                    <td><?=$endereco->cidade?></td>
                    <td><?=$endereco->estado?></td>
                    <td><?=$endereco->cep?></td>
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