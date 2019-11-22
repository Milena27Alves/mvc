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
            <div class="form-group">
                <label>login/e-mail</label>
                <input type="text" name= "email" class="form-control" id="exampleInputPassword1" placeholder="seu login">
            </div>
            <div class="form-group">
                <label>senha</label>
                <input type="text" name= "senha" class="form-control" id="exampleInputPassword1" placeholder="sua senha">
            </div>
            <div class="form-group">
                <label>Tipo de funcionario</label>
            <select name="tipo" class=" form-control" id="options" onchange="optionCheck()">
                <?php foreach($tipos as $tipo){ ?>
                <option value="<?=$tipo->id;?>"> <?=$tipo->nome;?> </option>
                <?php } ?>
            </select>
            </div>
            <div class="form-group" id="hiddenDiv" style=visibility:hidden;">
                <label class="">nº registro</label>
                <input type="text" name= "registro" class="form-control" >
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        </div>
    </div>
</div>