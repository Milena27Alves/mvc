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
                            <input type="date" class="form-control" id ="campo_data">
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
    <div id = 'resultado'>


    </div>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>
<script src="js/user.js"></script>

<script type="text/javascript">
    $('#exemplo').datepicker({
        format: 'dd/mm/yyyy',
        startDate: '-3d',
        lenguage: 'pt-BR',
        //startDate: '+0'
    });
</script>
