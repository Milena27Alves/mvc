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
    <div class="form-row " id = "corpo-do-formulario">

        <div id="formulario" >

            <form action="/editar-prontuario" method="post" >
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
                    <div class="col-12 form-group d-none">
                        <select name="status" class=" form-control">
                            <input type="text" name= "status" class="form-control" value="<?=$marcacao->status?>">
                        </select>
                    </div>
                    <div class="col-12 form-group">
                        <label><h5>Registrar informações da consulta</h5></label><br>
                        <input type="text" name= "registro" class="form-control" placeholder="Digite aqui as informações sobre a consulta">
                    </div>
                    <div class="col-12 form-group">
                        <label><h5>Desfecho</h5></label><br>
                            <select name="desfecho" class=" form-control" id="optionsUbs">
                                <?php foreach($desfecho as $d){ ?>
                                    <option value="<?=$d->id;?>"> <?=$d->tipo;?> </option>
                                <?php } ?>
                            </select>
                    </div>
                    <div class="col-6 form-group">
                        <label><h5>Tipos de encaminhamento</h5></label><br>
                        <input type="checkbox" name="e1" value="Encaminhamento de urgência"> Encaminhamento de urgência<br>
                        <input type="checkbox" name="e2" value="Encaminhamento para serviço especializado"> Encaminhamento para serviço especializado<br>
                        <input type="checkbox" name="e3" value="Encaminhamento para internação hospitalar"> Encaminhamento para internação hospitalar<br>
                        <input type="checkbox" name="e4" value="Encaminhamento a para atenção domiciliar"> Encaminhamento a para atenção domiciliar
                    </div>
                    <div class="col-3 form-group">
                        <label><h5>Tipos de exame</h5></label><br>
                        <input type="checkbox" name="ex1" value="1"> Chek-up<br>
                        <input type="checkbox" name="ex2" value="2"> Sorologia<br>
                        <input type="checkbox" name="ex3" value="3"> Ultra
                    </div>
                    <div class="col-3 form-group">
                        <label><h5>Tipos de Avaliacao</h5></label><br>
                        <input type="checkbox" name="a1" value="1">Saúde Mental<br>
                        <input type="checkbox" name="a2" value="2">Saúde Sexual<br>
                        <input type="checkbox" name="a3" value="3">Saúde Fisica
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
            </form>
        </div>
    </div>
</div>