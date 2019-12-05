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
    <div class="form-row famil" >

        <div id="formulario" >

            <form action="/editar-familia" method="post" >
                <div class="form-row">
                    <input name="id" type="text" class="d-none" value="<?=$familia->id?>">
                    <?php
                    $a = $familia->endereco;
                    $endereco = \Ifnc\Tads\Entity\Endereco::find($a);
                    ?>
                    <input name="id_end" type="text" class="d-none" value="<?=$endereco->id?>">
                    <div class="col-9 form-group">
                        <input type="text" name= "logradouro" class="form-control" value="<?=$endereco->logradouro?>">
                    </div>

                    <div class="col-3 form-group">
                        <input type="text" name= "numero" class="form-control" value="<?=$endereco->numero?>">
                    </div>
                    <div class="col-3 form-group">
                        <input type="text" name= "bairro" class="form-control" value="<?=$endereco->bairro?>">
                    </div>

                    <div class="col-3 form-group">
                        <input type="text" name= "cidade" class="form-control" value="<?=$endereco->cidade?>">
                    </div>
                    <div class="col-3 form-group">
                        <input type="text" name= "estado" class="form-control" value="<?=$endereco->estado?>">
                    </div>

                    <div class="col-3 form-group">
                        <input type="text" name= "cep" class="form-control" value="<?=$endereco->cep?>">
                    </div>

                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
            </form>
        </div>
    </div>
</div>


