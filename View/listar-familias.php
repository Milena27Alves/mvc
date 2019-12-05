<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="/opcoesAcs"><img src="img/logoOfc.png" id="logo"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="/listar-familia">Familia <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="">Paciente</a>
            <a class="nav-item nav-link" href="">Prontuario</a>
            <a class="nav-item nav-link" href="#">Produção</a>
            <a class="nav-item nav-link" href="#">Informações</a>
            <a class="nav-item nav-link" href="#">Relatorios</a>

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
    <div class="row" id="corpo-do-formulario">
        <div id="tabela">
            <div class="my-3 p-3 bg-white rounded shadow-sm" id="tb">
                <div class="text-center">
                    <a href="/adcionar-familia" class="fas fa-plus text-dark text-decoration-none"><span class="glyphicon glyphicon-plus"></span></a>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Prontuario</th>
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
                    foreach($familias as $familia){ ?>
                        <tr>
                            <th scope="row"><?=$familia->id?></th>
                            <?php
                            $a = $familia->endereco;
                            $endereco = \Ifnc\Tads\Entity\Endereco::find($a);
                            ?>
                            <td><?=$endereco->logradouro?></td>
                            <td><?=$endereco->numero?></td>
                            <td><?=$endereco->bairro?></td>
                            <td><?=$endereco->cidade?></td>
                            <td><?=$endereco->estado?></td>
                            <td><?=$endereco->cep?></td>
                            <td>
                                <a href="/editar-familia-form?id=<?=$familia->id?>" class="fas fa-edit text-dark text-decoration-none mr-2"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="/apagar-familia?id=<?=$familia->id?>" class="fas fa-eraser text-dark text-decoration-none mr-2"><span class="glyphicon glyphicon-trash"></span></a>
                                <a href="/adcionar-paciente?id=<?=$familia->id?>" class="fas fa-user-plus text-dark text-decoration-none mr-2"></a>
                                <a href="/listar-paciente?id=<?=$familia->id?>" class="fas fa-user-friends text-dark text-decoration-none mr-2"></a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>