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
            <form action="/adcionar-funcionario-form" method="post">
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name ="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu nome">
                </div>
                <div class="form-group">
                    <label>cpf</label>
                    <input type="text" name="cpf" class="form-control" id="exampleInputPassword1" placeholder="seu cpf">
                </div>
                <div class="form-group">
                    <label>Matricula</label>
                    <input type="text" name= "matricula" class="form-control" id="exampleInputPassword1" placeholder="sua matricula">
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>