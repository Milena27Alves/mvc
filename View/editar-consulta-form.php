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

            <form action="/editar-consulta" method="post" >
                <div class="form-row">
                    <input name="id" class="d-none" type="text" value="<?=$_GET['id']?>">
                    <div class="col-12 form-group">
                        <input type="text" class="d-none" name="paciente" class="form-control" value="<?=$marcacao->paciente?>">

                    </div>
                    <div class="col-12 form-group">
                        <input type="text" class="d-none" name="medico" class="form-control" value="<?=$marcacao->medico?>">

                    </div>
                    <div class="col-6 form-group">
                        <select name="turno" class=" form-control d-none">
                            <option value="<?=$marcacao->turno?>"><?=$marcacao->turno;?></option>
                        </select>
                    </div>

                    <div class="col-8 form-group">
                        <input type="text" name= "data" class="form-control d-none" value="<?=$marcacao->data_consulta?>">
                    </div>
                    <div class="col-12 form-group">
                        <select name="status" class=" form-control">
                            <option value="F">Falta</option>
                            <option value="P">Presença</option>
                        </select>
                    </div>


                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
            </form>
        </div>
    </div>
</div>