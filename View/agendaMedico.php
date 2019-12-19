<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/opcoesMedico"><img src="img/logoOfc.png" id="logo"/></a>
        </div>
        <ul class="nav navbar-nav navbar-left">
            <li><a href="/agendarPorMedico" class="text-decoration-none text-whit"> Agenda</a></li>
            <li><a href="/listar-prontuario" class="text-decoration-none text-whit"> Prontuario</a></li>
            <li><a href="" class="text-decoration-none text-whit"> Consulta</a></li>
            <li><a href="" class="text-decoration-none text-whit"> Produção</a></li>
            <li><a href="" class="text-decoration-none text-whit"> Informações</a></li>
            <li><a href="" class="text-decoration-none text-whit"> Relatorios</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="\logout" class="text-decoration-none text-whit"><span class="glyphicon glyphicon-share"></span> sair</a></li>
        </ul>
    </div>
    </div>
</nav>
<div class="Container">
    <div class="form-row" id="corpo-do-formulario" >

        <div id="formulario" >

            <form action="" method="post" id="formul" >
                <div class="form-row" id="data">
                    <div class="form-group">
                        <div class="col-sm-10" id="data2">
                            <div class="input-group date" >
                                <input type="text" style="visibility: hidden" class="form-control" id ="campo_data" value="<?=date("Y/m/d")?>">
                                <input type="text" style="visibility: hidden" class="form-control" id ="campo_user" value="<?=$user->id?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group" >
                        <div class="col-sm-2" id="data2">
                        </div>
                    </div>
                </div>
        </div>
        </form>
        <button type="submit" class="btn btn-primary btn-sm btn-block " id="user_btn">Enviar</button>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Médico</th>
                <th scope="col">Data</th>
                <th scope="col">Turno</th>
                <th scope="col">Quantidade</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody id="resultado">

            </tbody>
        </table>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Consulta</th>
                <th scope="col">Id_Paciente</th>
                <th scope="col">Paciente</th>
                <th scope="col">Data</th>
                <th scope="col">Status</th>
                <th scope="col">Prontuario Paciente</th>
            </tr>
            </thead>
            <tbody id="pacientesListados">

            </tbody>
        </table>
    </div>
</div>
<script src="js/consultaMedico.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>


