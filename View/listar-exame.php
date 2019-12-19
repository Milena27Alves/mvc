<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="/opcoesMedico"><img src="img/logoOfc.png" id="logo"/></a>
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
            <div class="my-3 p-3 bg-white rounded shadow-sm" id="listarUbs">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($exames as $ubs){ ?>
                        <tr>
                            <th scope="row"><?=$ubs->id?></th>
                            <td><?=$ubs->exame->tipo?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
