window.onload = function () {


    var xhttp= new XMLHttpRequest();
    console.log(xhttp);

    var btn = document.querySelector('#user_btn');
    var resultado = document.querySelector('#resultado');

    btn.onclick = function loadDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var datas = JSON.parse(this.responseText);
                var listGrupo = '';
                console.log(datas);
                datas.forEach(function (consulta) {
                        console.log("Minha quantidade: "+consulta.quantidade);
                        listGrupo += '<div class="list-group">';
                        listGrupo += '<div class="list-group-item list-group-item-action">';
                        listGrupo += '<div class="d-flex w-100 justify-content-between">';
                        listGrupo += '<h5 class="mb-1">'+consulta.medico+'</h5>';
                        listGrupo += '<small>'+consulta.data_consulta+'</small>';
                        listGrupo += '<p class="mb-1">'+consulta.turno+'</p>';
                        listGrupo += '</div>';
                        listGrupo += '<p class="mb-1">Quantidade: '+consulta.quantidad+'</p>';
                        listGrupo += '<!-- Trigger the modal with a button -->';
                        listGrupo += '<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Agendar</button>';
                        listGrupo +=  '<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#listar">Agendadas</button>';
                        listGrupo += '<!-- Modal -->';
                        listGrupo += '<div class="modal fade" id="myModal" role="dialog">';
                        listGrupo += '<div class="modal-dialog">';

                        listGrupo += '<!-- Modal content-->';
                        listGrupo +=  '<div class="modal-content">';
                        listGrupo += '<div class="modal-header">';
                        listGrupo += '<button type="button" class="close" data-dismiss="modal">&times;</button>';
                        listGrupo += '<h4 class="modal-title">Agendar Consultas</h4>';
                        listGrupo += '</div>';
                        listGrupo += '<div class="modal-body">';
                        listGrupo += '<form action="/adcionarConsulta" method="post" >';
                        listGrupo += '<div class="form-row">';
                        listGrupo += '<div class="col-12 form-group">';
                        listGrupo += '<input type="text" name ="nome"class="form-control" value="'+consulta.paciente+'">';
                        listGrupo += '</div>';
                        listGrupo += '<div class="col-9 form-group">';
                        listGrupo += '<input type="text" name= "medico" class="form-control" value="'+consulta.data+'">'
                        listGrupo += '</div>';

                        listGrupo += '<div class="col-3 form-group">';
                        listGrupo += '<input type="text" name= "data" class="form-control" value="'+consulta.data+'">';
                        listGrupo +=  '</div>';
                        listGrupo += '<div class="col-3 form-group">';
                        listGrupo += '<input type="text" name= "turno" class="form-control" value="'+consulta.turno+'">'
                        listGrupo += '</div>';

                        listGrupo += '</div>';
                        listGrupo +=  '<button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>';
                        listGrupo +=   '</form>';
                        listGrupo += '</div>'
                        listGrupo += '<div class="modal-footer">'
                        listGrupo += '<button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>';
                        listGrupo += ' </div> </div> </div> </div>';
                        listGrupo +=  '<!-- Modal -->';
                        listGrupo += '<div class="modal fade" id="listar" role="dialog">';
                        listGrupo += ' <div class="modal-dialog">';

                        listGrupo +=  '<!-- Modal content-->';
                        listGrupo +=  '<div class="modal-content">';
                        listGrupo +=  '<div class="modal-header">';
                        listGrupo += '<button type="button" class="close" data-dismiss="modal">&times;</button>';
                        listGrupo += '<h4 class="modal-title">Lista das consultas no dia</h4>';
                        listGrupo += '</div>';
                        listGrupo += '<div class="modal-body">';
                        listGrupo += '<p>Some text in the modal.</p>';
                        listGrupo += '</div>';
                        listGrupo += '<div class="modal-footer">';
                        listGrupo +=  '<button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>';
                        listGrupo += '</div> </div> </div> </div> </div> </div></div>';
                    }

                );

                resultado.innerHTML = listGrupo;
                //console.log(datas);
            }
        };
        var dt = moment($("#campo_data").val());
        console.log("/BuscaAjax?dt="+dt.format('YYYY/MM/DD'));
        xhttp.open("GET", "/BuscaAjax?dt="+dt.format('YYYY/MM/DD'), true);
        xhttp.send();
    }

}