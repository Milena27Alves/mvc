    var xhttp;
    xhttp = new XMLHttpRequest();
    console.log($("#btnConsulta"));
    $("#btnConsulta").click(function () {
        console.log("teste");
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var datas = JSON.parse(this.responseText);
                var listGrupo = '';
                console.log(datas);
                listGrupo += '<table class="table"> <thead> <tr>';
                listGrupo += '<th scope="col">id</th>';
                listGrupo += '<th scope="col">Nome</th>';
                listGrupo += '<th scope="col">Desmarcar</th>';
                listGrupo += '<th scope="col">Falta</th>';
                listGrupo += '</tr> </thead> <tbody> <tr>';
                listGrupo += '<th scope="row">1</th>';
                datas.forEach(function (consulta) {
                        //console.log(consulta.medico);
                        listGrupo += '<td>'+consulta.medico+'</td>';
                        listGrupo += '<td>'+consulta.turno+'</td>';
                        listGrupo += '</tr>';
                        listGrupo += '</tbody> </table>';
                    }
                );
                $("#lista").innerHTML = listGrupo;
                //console.log(datas);
            }
            xhttp.open("GET", "/EnvioAjax", true);
            xhttp.send();
        }
    });


