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
    <div class="form-row" id="corpo-do-formulario" >

        <div id="formulario" >

            <form action="/editar-funcionario" method="post" >
                <div class="form-row">
                    <input name="id" type="text" class="d-none" value="<?=$funcionario->id?>">
                    <div class="col-12 form-group">
                        <input type="text" name ="nome"class="form-control" value="<?=$funcionario->nome?>">
                    </div>

                    <div class="col-4 form-group">
                        <input type="text" name="cpf" class="form-control" value="<?=$funcionario->cpf?>">
                    </div>

                    <div class="col-4 form-group">
                        <input type="text" name= "matricula" class="form-control" value="<?=$funcionario->matricula?>">
                    </div>

                    <div class="col-4 form-group" >
                        <select name="tipo" class=" form-control" id="options">
                            <?php foreach($tipos as $tipo){ ?>
                                <option value="<?=$tipo->id;?>" data-registro="<?=$tipo->registro?>"> <?=$tipo->nome;?> </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class=" col-12 form-group d-none" id="registro" >
                        <input type="text" name= "registro" class="form-control"  value="<?=$funcionario->registro?>" >
                    </div>

                    <div class="col-6 form-group">
                        <input type="text" name= "email" class="form-control" value="<?=$funcionario->email?>">
                    </div>

                    <div class="col-4 form-group">
                        <input type="password" name= "senha" class="form-control" value="<?=$funcionario->senha?>">
                    </div>
                    <div class="col-2 form-group">
                        <select name="ubs" class=" form-control d-none" id="optionsUbs">
                            <?php foreach($ubs as $unidade){ ?>
                                <option value="<?=$unidade->id;?>"> <?=$unidade->nome;?> </option>
                            <?php } ?>
                        </select>
                    </div>
                    <?php
                        $a = $funcionario->endereco;
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
