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
    <div class="row famil">
        <div id="formulario">
            <div action="/adcionar-medicamento-form" method="post">
                <div class="form-row" id="adc-med">
                    <input name="id" type="text" class="d-none visible-xs" value="<?=$medicamento->id?>">
                    <div class="form-group col-6">
                        <input type="text" name ="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$medicamento->nome?>">
                    </div>
                    <div class="form-group col-6">
                        <input type="text" name="descricao" class="form-control" id="exampleInputPassword1" value="<?=$medicamento->descricao?>">
                    </div>
                    <div class="form-group col-4">
                        <input type="text" name= "valorDecusto" class="form-control" id="exampleInputPassword1" value="<?=$medicamento->valorDeCusto?>">
                    </div>
                    <div class="form-group col-3">
                        <input type="int" name= "quantidade" class="form-control" id="exampleInputPassword1" value="<?=$medicamento->quantidade?>">
                    </div>
                    <div class="form-group col-5">
                        <input type="int" name= "fornecedor" class="form-control" id="exampleInputPassword1" value="<?=$medicamento->fornecedor?>">
                    </div>
                    <button type="submit" class="btn btn-primary col-12">Enviar</button>
                </div>
                </form>
            </div>
        </div>
    </div>