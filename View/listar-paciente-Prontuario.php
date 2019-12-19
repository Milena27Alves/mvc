<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="/opcoesAcs"><img src="img/logoOfc.png" id="logo"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="/agendarPorMedico">Agenda<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="/listar-prontuario">Prontuario</a>
            <a class="nav-item nav-link" href="">Consulta</a>
            <a class="nav-item nav-link" href="#">Produção</a>
            <a class="nav-item nav-link" href="#">Informações</a>
            <a class="nav-item nav-link" href="#">Relatorios</a>
            <a class="nav-item nav-link" href="/listar-familia">Familia <span class="sr-only">(current)</span></a>

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
            <div class="my-3 p-3 bg-white rounded shadow-sm" id="listaPaciente">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">sexo</th>
                        <th scope="col">peso</th>
                        <th scope="col">altura</th>
                        <th scope="col">sus</th>
                        <th scope="col">tipo</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $a = $familia->id;
                    $b = \Ifnc\Tads\Entity\Paciente::allPaciente($a);?>
                    <?php foreach($b as $pessoa){  ?>
                        <tr>
                            <th scope="row"><?=$pessoa->id?></th>
                            <td><?=$pessoa->nome?></td>
                            <td><?=$pessoa->sexo?></td>
                            <td><?=$pessoa->peso?></td>
                            <td><?=$pessoa->altura?></td>
                            <td><?=$pessoa->sus?></td>
                            <td><?=$pessoa->tipo?></td>
                            <td>
                                <a href="/exibir-historico-consulta?id=<?=$pessoa->id?>" class="fas fa-edit text-dark text-decoration-none mr-2"><span class="glyphicon glyphicon-edit"></span></a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

