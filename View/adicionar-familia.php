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
            <form action="/adcionar-familia-form" method="post" >
                <div class="form-row">
                    <div class="col-9 form-group">
                        <input type="text" name= "logradouro" class="form-control" placeholder="nome da rua">
                    </div>

                    <div class="col-3 form-group">
                        <input type="text" name= "numero" class="form-control" placeholder="número">
                    </div>
                    <div class="col-3 form-group">
                        <input type="text" name= "bairro" class="form-control" placeholder="bairro">
                    </div>

                    <div class="col-3 form-group">
                        <input type="text" name= "cidade" class="form-control" placeholder="cidade">
                    </div>
                    <div class="col-3 form-group">
                        <input type="text" name= "estado" class="form-control" placeholder="estado">
                    </div>

                    <div class="col-3 form-group">
                        <input type="text" name= "cep" class="form-control" placeholder="cep">
                    </div>

                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
            </form>
        </div>
    </div>
</div>