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
        <div id="formulario">
            <form action="/editar-medicamento" method="post">
                <input name="id" type="text" class="d-none visible-xs" value="<?=$medicamento->id?>">
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name ="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$medicamento->nome?>">
                </div>
                <div class="form-group">
                    <label>Descricao</label>
                    <input type="text" name="descricao" class="form-control" id="exampleInputPassword1" value="<?=$medicamento->descricao?>">
                </div>
                <div class="form-group">
                    <label>Valor de Custo</label>
                    <input type="text" name= "valorDecusto" class="form-control" id="exampleInputPassword1" value="<?=$medicamento->valorDeCusto?>">
                </div>
                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="int" name= "quantidade" class="form-control" id="exampleInputPassword1" value="<?=$medicamento->quantidade?>">
                </div>
                <div class="form-group">
                    <label>Fornecedor</label>
                    <input type="int" name= "fornecedor" class="form-control" id="exampleInputPassword1" value="<?=$medicamento->fornecedor?>">
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>
