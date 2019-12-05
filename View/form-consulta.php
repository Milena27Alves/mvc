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
    <div class="form-row famil1">

        <div id="formulario" >

            <form action="/editar-ubs" method="post" >
                <div class="form-row">
                    <input name="medico" type="text" class="d-none" value="<?=$_GET['id']?>">
                    <div class="col-12 form-group">
                        <input type="text" name ="nome"class="form-control" placeholder="nome">
                    </div>
                    <input name="id_end" type="text" class="d-none" >
                    <div class="col-9 form-group">
                        <select name="tipo" class=" form-control">
                            <option value="manha">Manhã</option>
                            <option value="tarde">Tarde</option>
                        </select>
                    </div>

                    <div class="col-3 form-group">
                        <input type="text" name= "numero" class="form-control" placeholder="data">
                    </div>


                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
            </form>
        </div>
    </div>
</div>

